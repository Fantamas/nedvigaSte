<?php
    include 'simple_html_dom.php';
    include 'address.php';
    include 'station.php';
    include 'constants.php';

    function parse_links($count)
    {
        $result = array();
        $current_page = 1;
        try {
            while ($count) {
                $source = 'http://www.t-s.by/buy/flats/?ajax_pager=Y&PAGEN_1=' . $current_page;
                $html = str_get_html(file_get_contents($source));
                $links = $html->find('.item_content h4 a');
                $choice = (sizeof($links) < $count) ? sizeof($links) : $count;
                $count -= $choice;
                for($pos = 0; $pos < $choice; ++$pos){
                    $key = 'http://www.t-s.by' . $links[$pos]->href;
                    $result[$key] = $links[$pos]->innertext;
                }
                $html->clear();
                unset($html);
                ++$current_page;
            }
        } catch (Exception $e) {
            echo 'Exception in parsing links';
        }
        return $result;
    }

    function parse_table(simple_html_dom $html){
        $keys = $html->find('.param_name');
        $values = $html->find('.param_descr');
        $count = count($keys);
        if ($count != count($values))
            throw new Exception('Count keys not equals count values');
        for($pos = 0; $pos < $count; ++$pos){
            $keys[$pos] = $keys[$pos]->innertext;
            $values[$pos] = $values[$pos]->innertext;
        }
        return array_combine($keys, $values);
    }

    function parse_city($info){
        return isset($info[CITY]) ? $info[CITY] : UNKNOWN;
    }

    function parse_district($info){
        return isset($info[DISTRICT]) ? $info[DISTRICT] : UNKNOWN;
    }

    function parse_micro_district($info){
        if(!isset($info[MICRO_DISTRICT])) return UNKNOWN;
        $district = $info[MICRO_DISTRICT];
        if(!strripos($district, 'target')) return $district;
        return str_get_html($district)->find('a', 0)->innertext;
    }

    function parse_street($info){
        return isset($info[STREET]) ? $info[STREET] : UNKNOWN;
    }

    function parse_squares($info){
        if(!isset($info[SQUARES])) return array();
        $squares = explode('/', $info[SQUARES]);
        for($i = 0, $count = count($squares); $i < $count; ++$i)
            $squares[$i] = doubleval($squares[$i]);
        return $squares;
    }

    function parse_rooms($info){
        if(!isset($info[ROOMS])) return UNDEFINED;
        $rooms = trim($info[ROOMS]);
        if(strlen($rooms) == 1 || $rooms[0] != $rooms[2])
            return $rooms;
        return $rooms[0];
    }

    function parse_year($info){
        return !isset($info[YEAR]) ? UNDEFINED : $info[YEAR];
    }

    function parse_storeys($info){
        if(!isset($info[STOREYS]) || $info[STOREYS] == '-') return UNDEFINED;
        $storeys = $info[STOREYS];
        if($storeys[0] == '-') return 1;
        return intval(substr($storeys, 0, strpos($storeys, '/')));
    }

    function parse_storied($info){
        if(!isset($info[STOREYS]) || $info[STOREYS] == '-') return UNDEFINED;
        $storeys = $info[STOREYS];
        if($storeys[0] == '-') return intval(substr($storeys, 1));
        return intval(substr($storeys, strpos($storeys, '/') + 1));
    }

    function parse_material($info){
        return isset($info[MATERIAL]) ? $info[MATERIAL] : UNKNOWN;
    }

    function parse_wc($info){
        return isset($info[WC]) ? $info[WC] : UNKNOWN;
    }

    function parse_telephone($info){
        return isset($info[TELEPHONE]) ? 'true' : 'false';
    }

    function parse_type($info){
        return isset($info[TYPE]) ? $info[TYPE] : UNKNOWN;
    }

    function parse_floor($info){
        return isset($info[FLOOR]) ? $info[FLOOR] : UNKNOWN;
    }

    function parse_balcony($info){
        return isset($info[BALCONY]) ? $info[BALCONY] : UNKNOWN;
    }

    function parse_condition($info){
        return isset($info[CONDITION]) ? $info[CONDITION] : UNKNOWN;
    }

    function parse_description(simple_html_dom $html){
        return $html->find('.about_descr p', 0)->innertext;
    }

    function is_flat($info){
        return is_int(strpos($info, 'квартир'))  ? 'true' : 'false';
    }

    function parse_photos(simple_html_dom $html){
        $result = $html->find('.row #about_slider li a');
        for($pos = 0, $count = count($result); $pos < $count; ++$pos) {
            $link = $result[$pos]->outertext;
            $index = strpos($link, 'data-bx-image') + 15;
            $result[$pos] = 'http://www.t-s.by' . substr($link, $index, stripos($link, '>', $index) - $index - 1);
        }
        $photo = $html->find('.about_pop_img img', 0);
        if($photo) $result[] = 'http://www.t-s.by' . $photo->src;
        return $result;
    }

    function parse_station($info, $flat){
        if(isset($info[STATION]))
            return mb_convert_case($info[STATION], MB_CASE_LOWER, 'UTF-8');
        return search_station($flat['PLACE']);
    }

    function parse_price(simple_html_dom $html){
        $result = $html->find('.about_price_ye', 0);
        if(!$result) return UNDEFINED;
        $price = $result->innertext;
        $price =  trim(substr($price, 0, strpos($price, 'у. е.') - 1));
        return intval(str_replace(' ', '', $price));
    }

    function parse_flat($link, $name)    {
        $flat = array();
        try {
            $html = str_get_html(file_get_contents($link));
            $table = parse_table($html);
            $flat['NAME'] = $name;
            $flat['FLAT'] = is_flat($name);
            $flat['DESCRIPTION'] = parse_description($html);
            $flat['SOURCE'] = $link;
            $flat['PRICE'] = parse_price($html);
            $flat['PHOTOS'] = parse_photos($html);
            $html->clear();
            unset ($html);
            $flat['SQUARES'] = parse_squares($table);
            $flat['ROOMS'] = parse_rooms($table);
            $flat['YEAR'] = parse_year($table);
            $flat['STOREYS'] = parse_storeys($table);
            $flat['STORIED'] = parse_storied($table);
            $flat['MATERIAL'] = parse_material($table);
            $flat['WC'] = parse_wc($table);
            $flat['TELEPHONE'] = parse_telephone($table);
            $flat['TYPE'] = parse_type($table);
            $flat['FLOOR'] = parse_floor($table);
            $flat['BALCONY'] = parse_balcony($table);
            $flat['CONDITION'] = parse_condition($table);
            $flat['CITY'] = $table[CITY];
            $flat['DISTRICT'] = parse_district($table);
            $flat['MICRO_DISTRICT'] = parse_micro_district($table);
            $flat['STREET'] = parse_street($table);
            $flat['PLACE'] = find_place($flat);
            $flat['STATION'] = parse_station($table, $flat);
            $flat['DISTANCE'] = distance($flat['STATION'], $flat['PLACE']);
        } catch (Exception $e) {
            echo 'Exception in parsing a flat';
        }
        return $flat;
    }

    function generate_table($data){
        $example = isset($data[0]) ? $data[0] : $data;
        $columns = array_keys($example);
        echo '<table border="1">', generate_row($columns);
        foreach ($data as $item)
            echo generate_row($item);
    }

    function generate_row($data){
        $out = '<tr>';
        foreach ($data as $column)
            if(!is_array($column))
                $out .= "<td>$column</td>";
            else {
                $out .= '<td>';
                foreach ($column as $curr_column) {
                    $out .= $curr_column;
                    $out .= ', ';
                }
                $out .= '</td>';
            }
        $out .=  '</tr>';
        return $out;
    }

    function parse_count(){
        $html = str_get_html(file_get_contents('http://www.t-s.by/buy/flats/'));
        return preg_replace("/[^0-9]/", '', $html->find('#workarea h2', 0)->innertext);
    }
    
	function parse(){
		$links = parse_links(5/*parse_count()*/);	
		$flats = array();
		foreach($links as $name => $link)
			$flats[] = parse_flat($name, $link);
		return $flats;
	}
	
	
    /*$flats = [];
    foreach($links as $name => $link)
        $flats[] = parse_flat($name, $link);
    generate_table($flats);*/
    //$flat = parse_flat('http://www.t-s.by/buy/flats/559253/', 'квартира');
    //generate_table([$flat]);
<?php
    function add_to_str(&$str, $value){
        if (!strcasecmp($value, UNKNOWN)) return FALSE;
        $str .= ',';
        $str .= $value;
        return TRUE;
    }

    function generate_address($flat){
        $count = 0;
        $address = 'Беларусь';
        $count += add_to_str($address, $flat['CITY']);
        $count += add_to_str($address, $flat['DISTRICT']);
        $count += add_to_str($address, convert_street($flat['STREET']));
        if ($count > 1) $address = substr($address, 0, strlen($address) - 1);
        //echo $flat['STREET'], ',' ,convert_street($flat['STREET']), '<br>';
        return $address;
    }

    function convert_street($street){
        $result = 'улица ';
        $street = str_replace('ул.', '', $street);
        $pos = stripos($street, ',');
        $result .= substr($street, 0, $pos);
        return $result . substr($street, $pos + 1);
    }

    function generate_query($address){
        $query = 'http://maps.google.com/maps/api/geocode/json?address=';
        $query .= $address;
        $query .= '&sensor=false';
        return $query;
    }

    function is_valid($answer, $criterion){
        return !is_int(strpos($answer, $criterion));
    }

    function check_numbers($str) {
        $i = strlen($str);
        while ($i--)
            if (is_numeric($str[$i])) return true;
        return false;
    }

    function find_place($flat){
        if(!check_numbers($flat['STREET'])) return array();
        $answer = str_get_html(file_get_contents(str_replace(' ', '%20',
            generate_query(generate_address($flat)))));
        $ok = is_valid($answer, 'INVALID_REQUEST') &&
            is_valid($answer, 'LIMIT');
        if(!$ok) return array();
        $place = extract_place($answer);
        unset($answer);
        return $place;
        //generate_address($flat);
        //return [1, 1];
    }

    function extract_place($answer){
        $pos = strpos($answer, 'location') + 14;
        $place = substr($answer, $pos, strpos($answer, '}', $pos) - $pos);
        $section = strpos($place, ',');
        return array(floatval(substr($place, 22, $section - 20)),
            floatval(substr($place, $section + 24)));
    }
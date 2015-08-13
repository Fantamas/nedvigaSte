<?php
    function search_station($place){
        static $stations = array();
        if(!sizeof($stations)) initial_stations($stations);
        if(!sizeof($place)) return UNKNOWN;
        $dist = INF;
        $lat = $place[0];
        $lon = $place[1];
        $nearest = UNKNOWN;
        foreach($stations as $name => $station){
            $temp = distance_point($station[0], $station[1], $lat, $lon, TRUE);
            if($temp < $dist){
                $dist = $temp;
                $nearest = $name;
            }
        }
        return distance($nearest, $place) == -1 ? UNKNOWN : $nearest;
    }

    function distance($station, $place){
        static $stations = array();
        if(!sizeof($stations)) initial_stations($stations);
        if(!isset($stations[$station]) || !sizeof($place)) return -1;
        $pos = $stations[$station];
        return distance_point($pos[0], $pos[1], $place[0], $place[1]);
    }

    function distance_point($x1, $y1, $x2, $y2, $ignore_dist = FALSE){
        $x1 = deg2rad($x1);
        $x2 = deg2rad($x2);
        $x = sin(abs($x1 - $x2) / 2.0);
        $y1 = deg2rad($y1);
        $y2 = deg2rad($y2);
        $x = $x * $x;
        $y = cos($x1) * cos($x2) * pow(sin(abs($y1 - $y2) / 2), 2);
        $dist = asin(sqrt($x + $y));
        // MAX_DISTANCE = 3500 meters
        if (!$ignore_dist && $dist > 0.000274604) return -1;
        return intval(2 * 6372795 * $dist);
    }

    function initial_stations(&$data){
        $data['уручье'] = array(53.945352, 27.687875);
        $data['борисовский тракт'] = array(53.938494, 27.665774);
        $data['восток'] = array(53.934468, 27.651277);
        $data['московская'] = array(53.928082, 27.629188);
        $data['парк челюскинцев'] = array(53.924165, 27.613363);
        $data['академия наук'] = array(53.921906, 27.599131);
        $data['якуба коласа пл.'] = array(53.916071, 27.585307);
        $data['победы пл.'] = array(53.909123, 27.574756);
        $data['октябрьская (купаловская)'] = array(53.902317, 27.563073);
        $data['ленина пл.'] = array(53.892069, 27.54854);
        $data['институт культуры'] = array(53.88602, 27.539222);
        $data['грушевка'] = array(53.886706, 27.514121);
        $data['михалово'] = array(53.876948, 27.497084);
        $data['петровщина'] = array(53.86406, 27.485406);
        $data['малиновка'] = array(53.849452, 27.47497);
        $data['каменная горка'] = array(53.906876, 27.437716);
        $data['кунцевщина'] = array(53.906228, 27.452554);
        $data['спортивная'] = array(53.908431, 27.479376);
        $data['пушкинская'] = array(53.909654, 27.49703);
        $data['молодежная'] = array(53.906348, 27.52264);
        $data['фрунзенская'] = array(53.905283, 27.539184);
        $data['купаловская'] = array(53.900722, 27.558944);
        $data['первомайская'] = array(53.893844, 27.570516);
        $data['пролетарская'] = array(53.889634, 27.585608);
        $data['тракторный завод'] = array(53.889229, 27.614962);
        $data['партизанская'] = array(53.874864, 27.629829);
        $data['автозаводская'] = array(53.869009, 27.648736);
        $data['могилевская'] = array(53.862394, 27.673285);
    }
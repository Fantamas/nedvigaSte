<?php

ini_set(default_charset,"UTF-8");

# include data base
require "../../mysql.inc.php";

switch ($_POST['action']){
                
        case "showRegionForInsert":
                echo '<select size="1" name="region" onchange="javascript:selectCity();">';
                $rows = $DB->select('SELECT * FROM tbl_region WHERE id_country=? ORDER BY region ASC', $_POST['id_country']);
                foreach ($rows as $numRow => $row) {
                        echo '<option value="'.$row['id_region'].'">'.$row['region'].'</option>';
                };
                echo '</select>';
                break;
                
        case "showCityForInsert":
                echo '<select size="1" name="city">';
                $rows = $DB->select('SELECT * FROM tbl_city WHERE id_region=? ORDER BY city ASC', $_POST['id_region']);
                foreach ($rows as $numRow => $row) {
                        echo '<option value="'.$row['id_city'].'">'.$row['city'].'</option>';
                };
                echo '</select>';
                break;
        
};

?>

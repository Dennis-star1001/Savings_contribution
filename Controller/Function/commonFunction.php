<?php
class Fun extends Database
{



    public static function redirect($url, $type, $msg)
    {
        return header("Location: $url?$type=$msg");
      
    }

    public static function checkEmptyInput($params = [])
    {
        for ($i = 0; $i < sizeof($params); $i++) {
            if (!isset($params[$i]) || empty($params[$i])) {
                return true;
            }
        }
        return false;
    }
    
    public static function  dynamicDropdown($name, $table, $label, $value = "id", $title, $fields="*", $condition="")
    {
        $db = new Database();
        // echo "$name, $table, $label, $value, $title, $fields";exit;
        $data = $db->lookUp($table, $fields, $condition);

        echo "<select id = '$name' name='$name'>";
        echo " <option value=''>Select $title</option>";

        foreach ($data as $rlt) {
            $lab = $rlt[$label];
            $val = $rlt[$value];
            echo " <option value='$val'>$lab</option>";
        }
        echo "</select>";
    }

    public static function arrayPrinter($array)
    {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
    
}

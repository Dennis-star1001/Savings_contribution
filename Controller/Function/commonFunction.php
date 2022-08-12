<?php
class Fun extends Database
{



    public static function redirect($url, $type, $msg)
    {
        return header("Location: $url?$type=$msg");
        exit;
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

    public static function dynamicDropdown($name, $table, $label,$condition, $value = "id", $title)
    {
        global $db;
        $data = $db->lookUp($table, "*",$condition);

        echo "<select id = '$name' name='$name'>";
        echo " <option value=''>Select $title</option>";

        foreach ($data as $rlt) {
            $lab = $rlt[$label];
            $value = $rlt[$value];
            echo " <option value='$value'>$lab</option>";
        }
        echo "</select>";
    }

    public function arrayPrinter($array)
    {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
}

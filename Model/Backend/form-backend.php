<?php
require("../Database/database.php");
require("../../Controller/Classes/contribution.php");
require("../../Controller/Classes/payer.php");
require("../../Controller/Function/commonFunction.php");

if ($_POST['action']) {

    $value = $_POST['action'];

    // public static function dynamicDropdown($name, $table, $label, $title, $condition = "", $value = "id", $class = "", $fields = "*")
    // Functions::dynamicDropdown("contributor_id", "contributors", "$value", "$value", "", "$value", "find", "DISTINCT $value");
    Fun::dynamicDropdown("contributor_id", "payer", "$value", "$value", "$value", "DISTINCT $value", "");

}


if (isset($_POST['save'])) {
   
    // Fun::redirect("../../Views/Dashboard.php", "", "Saved successfully");
}
<?php
require("../Database/database.php");
require("../../Controller/Classes/contribution.php");
require("../../Controller/Function/commonFunction.php");

if (isset($_POST['action'])) {

    $value = $_POST['action'];
    
    Fun::dynamicDropdown("contributor_id", "payer", "$value", "$value", "$value", "DISTINCT $value", "");
   
}

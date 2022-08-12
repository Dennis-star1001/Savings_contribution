<?php
require("../../Model/Database/database.php");
require("../../Controller/Classes/payer.php");
require("../../Controller/Classes/contribution.php");
require("../../Controller/Function/commonFunction.php");


$payer = new Payer();
// if ($_POST['btn_submit']) {
//     $payer->processPayer($_POST['name'], $_POST['phone'], $_POST['email'], $_POST['address'], $_POST['gender'], $_POST['amount_of_contribution']);
//     // Fun::redirect("../../Views/index.php", "msg", "Saved successfully");
// }
$contribution = new Contribution();

if ($_POST['contribution']) {
    $contribution->processContribution($_POST['contributors_id'], $_POST['date_of_contribution'], $_POST['amount'], $_POST['payment_method']);
    // Fun::redirect("../../Views/index.php", "msg", "Saved successfully");
}
if ($_POST['contributors_id']) {
    // Fun::dynamicDropdown("contributors_id", "payer", "name","", "name", "Name");
    Fun::dynamicDropdown("contributors_id", "payer", "name","contributors_id", "name", "Name");

}

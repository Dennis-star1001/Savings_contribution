<?php
require("../../Model/Database/database.php");
require("../../Controller/Classes/payer.php");
require("../../Controller/Function/commonFunction.php");


$payer = new Payer();
if ($_POST['payer_submit']) {
    $payer->processPayer($_POST['name'], $_POST['phone'], $_POST['email'], $_POST['address'], $_POST['gender'], $_POST['amount_of_contribution']);
    // Fun::redirect("../../Views/index.php", "msg", "Saved successfully");
}

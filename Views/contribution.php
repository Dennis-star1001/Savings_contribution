<?php 
require("../Model/Database/database.php");
require("../Controller/Classes/contribution.php");
require("../Controller/Function/commonFunction.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/style.css">
    <title>Contribution</title>
</head>

<body>
    <div class="main">
        <div class="left">
            <div class="form">

                <form action="../Model/Backend/backend.php" method="POST">
                <?php
                    $err = "err";
                    $succ = "succ";
                    if (isset($_GET[$err])) {
                        echo "<p class='msg'>Warning: " . $_GET[$err]  ."!</p>" ;
                    }
                    if (isset($_GET[$succ])) {
                        echo "<p class='msg'>Success: " . $_GET[$succ]  ."!</p>" ;
                    }
                  


                    ?>
                    <h1>Contribution page</h1>
                    <?php 
                      $db = new Database();
                      echo Fun::dynamicDropdown("contributors_id", "payer", "name","id", "Name", "*");
                   




                    ?>
                   
                    <br>
                    <br>
                    <label for="">Date of contribution:</label><br>
                    <input type="date" name="date_of_contribution">
                    <br>
                    <br>
                    <label for="">Amount:</label><br>
                    <input type="number" name="amount">
                    <br>
                    <br>
                    <label for="">Payment Method:</label><br>
                    <select name="payment_method" id="payment_method">
                        <option value="pos">POS</option>
                        <option value="cash">Cash</option>
                        <option value="bank_transfer">Bank transfer</option>
                    </select>
                    <br>
                    <br>
                    <input type="submit" class="submit" id="submit_pay" name='contribution'>
                </form>
            </div>
        </div>
        <div class="right">
            <div class="image"></div>
        </div>
    </div>

</body>

</html>
<?php

require("../Model/Database/database.php");
require("../Controller/Classes/payer.php");
require("../Controller/Function/commonFunction.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/style.css">
    <title>Contributor</title>
</head>

<body>
    <div class="main">
        <div class="left">
            <div class="form">

                <form action="../Model/Backend/backend.php" method="post">
                    <?php
                    $err = "err";
                    $succ = "succ";
                    if (isset($_GET[$err])) {
                        echo "<p class='msg'>Warning: " . $_GET[$err]  . "!</p>";
                    }
                    if (isset($_GET[$succ])) {
                        echo "<p class='msg'>Success: " . $_GET[$succ]  . "!</p>";
                    }
                    // $msg = "";


                    ?>
                    <h1>Contributor page</h1>
                    <label for="">Name:</label><br>
                    <input type="text" name="name">
                    <br>
                    <br>
                   
                    <label for="">Phone Number:</label><br>
                    <input type="tel" name="phone">
                    <br>
                    <br>
                    <label for="">Email:</label><br>
                    <input type="email" name="email">
                    <br>
                    <br>
                    <label for="">Address:</label><br>
                    <input type="text" name="address">
                    <br>
                    <br>
                    <div class="dropdown">
                        <div>
                            <label for="">Gender:</label>
                            <select name="gender" id="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>

                        <label for="">Amount of Contribution:</label>
                        <select name="amount_of_contribution" id="amount_of_contribution">
                            <option value="1000">1000</option>
                            <option value="2000">2000</option>
                            <option value="3000">3000</option>
                            <option value="4000">4000</option>
                            <option value="5000">5000</option>
                        </select>
                    </div>


                    <br>
                    <br>
                    <input type="submit" class="submit" id="btn_submit" name="btn_submit">
                </form>
            </div>
        </div>
        <div class="right">
            <div class="image"></div>
        </div>
    </div>

</body>

</html>
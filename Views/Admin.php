<?php
require("../Model/Database/database.php");
require("../Controller/Classes/contribution.php");
require("../Controller/Classes/payer.php");
require("../Controller/Function/commonFunction.php");

$display = [''];

if (isset($_GET['msg'])) {
    $_GET['msg   '];
}

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

                <form action="" method="POST">

                    <h1>Contribution page</h1>
                    <br>
                    <br>


                    <label for=''>Gender:</label><br>
                    <select name='gender' id='search'>
                        <option value='male'>male</option>
                        <option value='female'>female</option>
                    </select>

                    <br>
                    <br>

                    <?php

                    if (isset($_POST['gender'])) {
                        $pay = new Payer();
                        $rlt = $pay->getInfoByGender('gender',$_POST['gender']);




                        if (!empty($rlt)) {
                            foreach ($rlt as  $row) {
                                echo "<tr>
                                <td>{$row['name']} </td>
                                <td>{$row['gender']}</td>
                                <td>{$row['phone']}</td>
                            </tr>
                            <br>";
                            }
                        }
                    }

                    ?>

                    <br>
                    <br>
                    <input type="submit" class="submit" name='save'>
                </form>
            </div>
        </div>
        <div class="right">
            <div class="image"></div>
        </div>
    </div>

</body>

</html>
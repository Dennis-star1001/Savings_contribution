<?php
require("../Model/Database/database.php");
require("../Controller/Classes/contribution.php");
require("../Controller/Classes/payer.php");
require("../Controller/Function/commonFunction.php");

$display = [''];

if (isset($_GET['msg'])) {
    $_GET['msg'];
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Contribution</title>
    <script type="text/javascript">
        function onchangeFun(str) {
            console.log(str)
        }
    </script>
</head>

<body>

    <div class="main">
        <div class="left">
            <div class="form">

                <form action="" method="POST" id="form">

                    <h1>Dashboard page</h1>
                    <br>
                    <br>
                    <label for=''>Action:</label>
                    <select name='action' id="dropdown">
                        <option value=''>Select Action</option>

                        <option value='gender'>Gender</option>
                        <option value='amount_of_contribution'>Amount</option>
                        <option value='phone'>Phone</option>
                        <option value='email'>Email</option>
                    </select>
                    <br>
                    <br>

                    <div id="dd">

                    </div>
                    <div id="mm">
                        <?php

                        if (isset($_POST['save'])) {
                            $lab = $_POST['action'];
                            $val = $_POST['contributor_id'];
                            $payerBio = new Payer();
                            $rlt = $payerBio->getInfoByGender($lab, $val);
                            if (!empty($rlt)) {
                                foreach ($rlt as  $row) {
                                    echo "  <tr>
                       
                        <td>{$row['name']}</td>
                        <td>{$row['gender']}</td>
                        <td>{$row['phone']} </td>
                        <td>{$row['email']} </td>
                        <td>{$row['address']} </td>
                    </tr><br>";
                                }
                            }
                        }

                        ?>
                    </div>

                    <?php

                    ?>
                    <br>
                    <br>

                    <input type="submit" class="submit" name='save'>
                    <script>
                        let form = document.querySelector("#form");
                        let dropdown = document.querySelector("#dropdown");

                        dropdown.addEventListener("change", e => {

                            e.preventDefault();

                            var postData = $(form).serialize();

                            $.ajax({
                                url: '../Model/Backend/form-backend.php',
                                data: postData,
                                type: 'post',
                                success: function(data) {
                                    $("#dd").html(data);
                                }
                            });

                        });
                    </script>
                </form>
            </div>
        </div>
        <div class="right">
            <div class="image"></div>
        </div>
    </div>
</body>

</html>
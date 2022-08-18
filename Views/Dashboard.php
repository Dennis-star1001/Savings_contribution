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

                <form action="../Model/Backend/form-backend.php" method="POST" id="form">

                    <h1>Dashboard page</h1>
                    <br>
                    <br>



                    <label for=''>Action:</label>
                    <select name='action' class="find" id="dropdown">

                        <option value='gender'>Gender</option>
                        <option value='amount_of_contribution'>Amount</option>
                        <option value='phone'>Phone</option>
                        <option value='email'>Email</option>
                    </select>
                    <br>
                    <br>

                    <div id="dd">

                    </div>
                    <?php

                    ?>
                    <br>
                    <br>

                    <input type="submit" class="submit" name='save'>
                    <script>
                        let form = document.querySelector("#form");

                        form.addEventListener("change", e => {

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="ajax-script.js" type="text/javascript"></script>
</body>

</html>
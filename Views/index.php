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

                <form action="../Model/Backend/backend.php" method="post">
                    <?php
                    if (isset($_GET['msg'])) {
                        echo "<p class='msg'>" . $_GET['msg']  ."</p>" ;
                    }
                    $msg = "";


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
                    <label for="">Gender:</label><br>
                    <select name="gender" id="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    <br>
                    <br>
                    <label for="">Amount of Contribution:</label><br>
                    <input type="number" name="amount_of_contribution">
                    <br>
                    <br>
                    <input type="submit" name="payer_submit">
                </form>
            </div>
        </div>
        <div class="right"></div>
    </div>

</body>

</html>
<?php
session_start();
include "db_config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.css">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Odibee+Sans&display=swap" rel="stylesheet">

</head>
<body>
<?php


if(isset($_SESSION['logged']))
{
    header("Location: adminpage.php");
}

?>

<div class="container">
    <div class="row">
        <div class="col-sm-2">
            <!-- Prazan prostor -->
        </div>
        <div class="col-sm-8 text-center" style="border-radius: 5px; background-color: royalblue; margin: 10px; padding: 10px;">
            <h1 style="font-family: 'Odibee Sans', cursive;">Login</h1>
            <hr>
            <form action="loginuser.php" method="post">
                <label for="username">Username:</label>
                <input type="text" name="username" placeholder="Enter your username"><br>
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Enter your password"><br><br>
                <input type="submit" value="Login" name="submit">
            </form>

        </div>
        <div class="col-sm-2">
            <!-- Prazan prostor -->
        </div>
    </div>
</div>
</body>
</html>
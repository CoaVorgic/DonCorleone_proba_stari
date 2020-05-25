<?php

session_start();
include "db_config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin page</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.css">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Odibee+Sans&display=swap" rel="stylesheet">

    <style>
        ul li{
            display: inline;
            margin-left: 10px;
            text-align: right;
            text-decoration: none;
        }
        li a{
            text-decoration: none;
            color: black;
            font-family: 'Odibee Sans', cursive;
            font-size: 20px;
        }
        a:hover{
            color: #444;
        }
    </style>
</head>
<body>


<div class="container-fluid">
<!--  Ovo je za prvu linijju na sajtu  -->
    <div class="row">
        <div class="col-sm-12 text-center">
            <?php
                $date = date("d.m.Y");
                echo "Dobrodosli ".$_SESSION['name']." , danas je ".$date;
            ?>
        </div>
        <div class="col-sm-2">
<!--        prazan prostor    -->
        </div>
<!--    BODY  -->
        <div class="col-sm-8" style="border: 1px solid #222;">
<!--            ZAGLAVLJE HEADER-->
            <div class="col-sm-12" style="background-color: orange; padding: 10px;">
                <h2 style="display: inline;">Don Corleone</h2>
                <ul style="display: inline-block;">
                    <li><a href="#">Home</a></li>
                    <li><a href="Proizvodi.php">Proizvodi</a></li>
                    <li><a href="addprod.php">Dodaj novi</a></li>
                    <li><a href="index.php">Nazad</a></li>
                    <li><a href="logout.php">Odjava</a></li>
                </ul>
            </div>
<!--           BODY2 -->
            <div class="col-sm-12" style="background-color: whitesmoke;">
                <h3>Informacije o adminu</h3>
                <h4><?= "Admin ".$_SESSION['name']." ".$_SESSION['lastname']; ?></h4>
                <hr>
                <h5><?= "Username ".$_SESSION['username']; ?></h5>
                <h5><?= "Address ".$_SESSION['address']; ?></h5>
                <h5><?= "Birthday ".$_SESSION['birthday']; ?></h5>
                <h5><?= "Admin ".$_SESSION['name']." ".$_SESSION['lastname']; ?></h5>

            </div>
        </div>

        <div class="col-sm-2">
            <!--        prazan prostor    -->
        </div>


    </div>
</div>


</body>
</html>
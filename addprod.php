<?php

session_start();
include "db_config.php";

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Adminska stranica</title>

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
            echo "Dobrodosli ".$_SESSION['name']."e , danas je ".$date;
            ?>
        </div>
        <div class="col-sm-2">
            <!--        prazan prostor    -->
        </div>
        <!--    BODY  -->
        <div class="col-sm-8" style="border: 1px solid #222;">
            <!--            ZAGLAVLJE HEADER-->
            <div class="col-sm-12" style="background-color: orange; padding: 10px;">
                <h2 style="display: inline;">SAN SNOVA</h2>
                <ul style="display: inline-block;">
                    <li><a href="adminpage.php">Home</a></li>
                    <li><a href="Proizvodi.php">Proizvodi</a></li>
                    <li><a href="addprod.php">Dodaj</a></li>
                    <li><a href="index.php">Nazad</a></li>
                    <li><a href="logout.php">Odjavi se</a></li>
                </ul>
            </div>
            <!--           BODY2 -->
            <div class="col-sm-12" style="background-color: whitesmoke;">
                <h3>Dodaj proizvod</h3>
                <hr>
                <form action="jelovnik.php" method="post" enctype="multipart/form-data">
                    <label for="imehrane">Naziv hrane:</label><br>
                    <input type="text" name="nazhrane" placeholder="Unesi ime hrane"><br><br>

                    <label for="sastav">Sastav hrane:</label><br>
                    <input type="text" name="sastav" placeholder="Unesi sastav hrane"><br><br>

                    <label for="cena">Cena:</label><br>
                    <input type="text" name="cena" placeholder="Unesi cenu prozivoda"><br><br>

                    <label for="slika">Fotografija:</label><br>
                    <input type="file" name="image"><br>
                    <small>Slika velike rezolucije</small><br><br>

                    <input type="submit" value="Dodaj hranu" name="submit">
                </form>
                <hr>
                <br>
            </div>
        </div>

        <div class="col-sm-2">
            <!--        prazan prostor    -->
        </div>


    </div>
</div>


</body>
</html>

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
    <!--  Ovo je za prvu liniju na sajtu  -->
    <div class="row">
        <div class="col-sm-12 text-center">
            <?php
            $date = date("d.m.Y");
            echo "Dobrodosli ".$_SESSION['name']."e , danas je ".$date;
            ?>
        </div>
        <!--    BODY  -->
        <div class="col-sm-12" style="border: 1px solid #222;">
            <!-- ZAGLAVLJE HEADER -->
            <div class="col-sm-12 text-center" style="background-color: orange; padding: 10px; margin: 0 auto;">
                <h2 style="display: inline;">Don Corleone</h2>
                <ul style="display: inline-block;">
                    <li><a href="adminpage.php">Home</a></li>
                    <li><a href="Proizvodi.php">Proizvodi</a></li>
                    <li><a href="addprod.php">Dodaj novi</a></li>
                    <li><a href="index.php">Nazad</a></li>
                    <li><a href="logout.php">Odjava</a></li>
                </ul>
            </div>
            <!--           BODY2 -->
            <div class="col-sm-12" style="background-color: whitesmoke;">
                <h3 style="font-weight: bold;">Svi proizvodi</h3>
                <hr>
                <?php
                $search_for_food= "SELECT * FROM menu ORDER BY id_f DESC";
                $rez_s = mysqli_query($connection , $search_for_food) or die(mysqli_error($connection));

                if(mysqli_num_rows($rez_s)>0)
                {
                    while($record1 = mysqli_fetch_array($rez_s))
                    {
                        ?>
                        <div class="col-sm-12" style="border: 2px solid orange; border-radius: 5px; margin-bottom: 5px;">
                            <div class="col-sm-3">
                                <img class="img-responsive" src="images/<?= $record1['picture_f'];?>" alt="<?= $record1['name_f'];?>">
                            </div>
                            <div class="col-sm-9">
                                <div class="col-sm-8">
                                    <h3 style="font-weight: bold;"><?= $record1['name_f'];?></h3>
                                    <h6><?= $record1['about_f'];?></h6>
                                </div>
                                <div class="col-sm-4">
                                    <h3 style="font-weight: bold; color: green;"><?= $record1['price_f'];?> RSD</h3>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }

                ?>


            </div>
        </div>

        <div class="col-sm-2">
            <!--        prazan prostor    -->
        </div>


    </div>
</div>


</body>
</html>


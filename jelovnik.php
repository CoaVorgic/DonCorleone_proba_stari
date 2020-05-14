<?php
session_start();
include "db_config.php";

$nazhrane = $sastav = $cena = "";

if(isset($_POST['nazhrane']))
{
    $nazhrane = mysqli_real_escape_string($connection, $_POST['nazhrane']);
}

if(isset($_POST['sastav']))
{
    $sastav = mysqli_real_escape_string($connection, $_POST['sastav']);
}

if(isset($_POST['cena']))
{
    $cena = mysqli_real_escape_string($connection, $_POST['cena']);
}

//---------------------------- POSTAVLJANJE SLIKE - PROVERA SLIKE -------------------------------------------//
$image = "";
// Get image name
$image = $_FILES['image']['name'];

// image file directory
$target = "images/".basename($image);
//------------------------------------------------------------------------------------------------------------//


if(!empty($nazhrane) AND !empty($sastav) AND is_numeric($cena))
{
    $insert = "INSERT INTO menu(name_f, about_f, price_f, picture_f) VALUES ('$nazhrane', '$sastav', '$cena', '$image');";
    $res = mysqli_query($connection, $insert) or die(mysqli_error($connection));
    move_uploaded_file($_FILES['image']['tmp_name'], $target);

    if($res)
    {
        header("Location: addprod.php");
    }
    else
    {
        echo "Greska";
    }
}
else
{
    //ako je prazno, podesiti kasnije
}


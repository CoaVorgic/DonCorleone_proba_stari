<?php
session_start();
include "db_config.php";

/*provera stringova
var_dump($_POST);
die(); */

$name = $phone = $email = $date = $time = $brojg = $comment = "";
if(isset($_POST['name'])) {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
}
if(isset($_POST['phone'])) {
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
}
if(isset($_POST['email'])) {
    $email = mysqli_real_escape_string($connection, $_POST['email']);
}
if(isset($_POST['date'])) {
    $date = mysqli_real_escape_string($connection, $_POST['date']);
}
if(isset($_POST['time'])) {
    $time = mysqli_real_escape_string($connection, $_POST['time']);
}
if(isset($_POST['brojg'])) {
    $brojg = mysqli_real_escape_string($connection, $_POST['brojg']);
}
if(isset($_POST['comment'])) {
    $comment = mysqli_real_escape_string($connection, $_POST['comment']);
}

if(!empty($name) AND !empty($phone) AND !empty($email) AND !empty($date) AND !empty($time) AND !empty($brojg) AND !empty($comment))
{
    $insert = "INSERT INTO rezervacija(name_r, phone_r, email_r, date_r, time_r, brojg_r,comment_r) VALUES ('$name', '$phone', '$email', '$date', '$time', '$brojg', '$comment');";
    /* var_dump($insert); */
    $res = mysqli_query($connection, $insert) or die(mysqli_error($connection));


    if($res)
    {
        header("Location: rezervacija.php");
        echo "Uspesno poslato!";
    }
    else
    {
        echo "Greska";
    }
}
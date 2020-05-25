<?php
session_start();
include "db_config.php";

/*provera stringova */
var_dump($_POST);
die();

$jelo = $kolicina = $pice = $kolicina1 = $telefon = $adresa = $nacinp = $comment = "";
if(isset($_POST['jelo'])) {
    $jelo = mysqli_real_escape_string($connection, $_POST['jelo']);
}
if(isset($_POST['kolicina'])) {
    $kolicina = mysqli_real_escape_string($connection, $_POST['kolicina']);
}
if(isset($_POST['pice'])) {
    $pice = mysqli_real_escape_string($connection, $_POST['pice']);
}
if(isset($_POST['kolicina1'])) {
    $kolicina1 = mysqli_real_escape_string($connection, $_POST['kolicina1']);
}
if(isset($_POST['telefon'])) {
    $telefon = mysqli_real_escape_string($connection, $_POST['telefon']);
}
if(isset($_POST['adresa'])) {
    $adresa = mysqli_real_escape_string($connection, $_POST['adresa']);
}
if(isset($_POST['nacinp'])) {
    $nacinp = mysqli_real_escape_string($connection, $_POST['nacinp']);
}
if(isset($_POST['comment'])) {
    $comment = mysqli_real_escape_string($connection, $_POST['comment']);
}

if(!empty($jelo) AND !empty($kolicina) AND !empty($pice) AND !empty($kolicina1) AND !empty($telefon) AND !empty($adresa) AND !empty($nacinp) AND !empty($comment))
{
    $insert = "INSERT INTO dostava(jelo_d, kolicina_d, pice_d, kolicina1_d, telefon_d, adresa_d, nacin_placanja_d, comment_d) VALUES ('$jelo', '$kolicina', '$pice', '$kolicina1', '$telefon', '$adresa', '$nacinp', '$comment');";
    /* var_dump($insert); proveravamo da li upis u bazu radi */
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
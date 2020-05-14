<?php

$host = "localhost";
$acc = "root";
$pw = "";
$db = "doncorleone";

$connection = mysqli_connect($host, $acc, $pw, $db);



if(!$connection)
{
    echo "Ne radi!";
}
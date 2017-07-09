<?php

$servername = "localhost";
$username = "root";
$password = "root";
// na macu root
$dbname = "hh_bubblesplash";

//connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

//set default character set to utf8
$conn->set_charset("utf8");

//check connection sprawdzamy błąd w połączeniu
if($conn->connect_error){
    die("Ooooooops:" .$conn->connect_error);
}else{
    //echo "wszystko gra";
}

 ?>

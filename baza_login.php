<?php
include 'head.php';
include 'add_db_connect.php';
include "header.php";?>
<?php

$n = mysqli_real_escape_string ($conn,$_POST ['name']);
// $p = $_POST ['photo'];
$ln= mysqli_real_escape_string ($conn,$_POST ['last_name']);
$b= mysqli_real_escape_string ($conn,$_POST ['birthday']);
$g = mysqli_real_escape_string ($conn,$_POST ['gender']);
$c = mysqli_real_escape_string ($conn,$_POST ['country']);
$bio = mysqli_real_escape_string ($conn,$_POST ['bio']);
$e = mysqli_real_escape_string ($conn,$_POST ['email']);
$l = mysqli_real_escape_string ($conn,$_POST ['login']);
$p = mysqli_real_escape_string ($conn,$_POST ['password']);
$sql = "INSERT INTO register (
   name,
   last_name,
   birthday,
   gender,
   country,
   bio,
   email,
   login,
   password
   ) VALUES (
       '$n',
       '$ln',
       '$b',
       '$g',
       '$c',
       '$bio',
       '$e',
       '$l',
       '$p'
   )" ;
?> <h3><?php

   if($conn->query($sql)){

       echo"Very cool. Now you can use our page!";
   }

?></h3>
<h3>
<a class="icon" href="index.php">home page</a></h3>
<?php include "foot.php" ?>

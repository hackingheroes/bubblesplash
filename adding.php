<?php include 'add_db_connect.php';?>
  <?php session_start();?>
  <?php


$uu =mysqli_real_escape_string ($conn, $_POST ['login1']);
$title =mysqli_real_escape_string ($conn, $_POST ['title']);
// $p = $_POST ['photo'];
$y= mysqli_real_escape_string ($conn,$_POST ['youtube']);
$t= mysqli_real_escape_string ($conn,$_POST ['article_text']);
$c =mysqli_real_escape_string ($conn, $_POST ['category']);
$sql = "INSERT INTO articles (
  login1,
   title,
   youtube,
   category,
   article_text
) VALUES (
        '$uu',
       '$title',
       '$y',
       '$c',
       '$t'
   )" ;

   if($conn->query($sql)){
       echo('jestem tu');
       $select_last_sql = "SELECT id FROM articles";

       $result = $conn->query($select_last_sql);
       $articles = (mysqli_fetch_all($result,MYSQLI_ASSOC));

       $id_last = $articles[count($articles)-1]['id'];

       header('Location: add_image.php?article_id='.$id_last);
   }
?>

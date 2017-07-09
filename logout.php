<?php include "head.php";?>
<?php include "header.php";?>
<?php if(isset($_SESSION["username"])){
    $_SESSION["username"] = "";
    echo "<h1>You have logged out!</h1>";
    echo "<h1><a href='index.php'>Go back</a><h1>";
} ?>
<?php include "foot.php";?>

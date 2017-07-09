<?php include "head.php";?>

<?php if(isset($_SESSION["username"]) && $_SESSION["username"] !=""):?>
<article class="welcome">
    <h1> Welcome in our page, <?=$_SESSION["username"]; ?> </h1>
    <h2> Now you can upload things </h2>
<a href="add.php" class="buttom_welcome">Add something</a>
<!-- <a href="myprofile.php">halo</a> -->
</article>
<?php else:?>
    <h1> Musisz być zalogowany, aby zobaczyć tą stronę</h1>
<?php endif;?>
<?php include "foot.php";?>

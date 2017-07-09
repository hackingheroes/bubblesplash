<?php include "headaz.php";?>
<?php include "header.php";?>
<?php if(isset($_SESSION["username"]) && $_SESSION["username"] !=""):?>
<article class="welcome">
    <h1> welcome in our page, <?=$_SESSION["username"]; ?> </h1>
    <h2> now you can upload things </h2>
        <form class="contact-form" action="add.php" method="post">
            <input class="btn" type="submit" name=""  value="Add Something">
        </form>
</article>
<?php else:?>
    <h1> Musisz być zalogowany, aby zobaczyć tą stronę</h1>
<?php endif;?>
<?php include "foot.php";?>

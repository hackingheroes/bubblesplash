<?php include "head.php";?>
<?php include "add_db_connect.php";
  $loo = $_SESSION["username"];?>

<?php if(isset($_SESSION["username"]) && $_SESSION["username"] !=""):
  ?>

<article class="contact-form">
    <form class="" action="adding.php" method="post">


        <h1>Hej <div name="login1" ><?=$loo?><div> Add your post</h1>
        <h2> Step one </h2>
            <label for="title"> title </label>
            <input required type="text" name="title" value="">

            <!-- <label for="youtube">youtube link</label>
            <input type="text" name="youtube" value=""> -->

    <select name="category">
        <option value="1"> Eyes </option>
        <option value="2"> Lips </option>
        <option value="3"> Nails </option>
        <option value="4"> Hair </option>
        <option value="5"> Face </option>
        <option value="6"> More </option>
    </select

            <label for="article_text">Tekst</label>
            <textarea name="article_text" rows="8" cols="100"></textarea>

<h2> You can add photo in next step </h2>

            <input class="btn" type="submit" name="" value="add">

    </form>

</article>

<?php else:?>

    <h1> Musisz być zalogowany, aby zobaczyć tą stronę</h1>
<?php endif;?>
<?php include "foot.php";?>

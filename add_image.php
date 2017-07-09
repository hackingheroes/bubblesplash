<?php include "head.php";?>
<?php include "header.php";?>
<?php
    $art_id = $_GET['article_id'];
?>

<?php if(isset($_SESSION["username"]) && $_SESSION["username"] !=""):?>
<form action="upload.php?art_id=<?=$art_id ?>" method="post" enctype="multipart/form-data">
  <article class="upload">
  <h1>  Select image to upload: </h1>
    <h3><input type="file" class="upload" name="fileToUpload" id="fileToUpload"></h3>
    <h3><input type="submit" class="upload" value="Upload Image" name="submit"></h3>
</form>
<form action="pages/article.php?art_id=<?=$art_id ?>" method="post" enctype="multipart/form-data">
  <h3><input class="upload" type="submit" value="niee chcesz idz do artykułu?" name="submit"></h3>
  </form>
  </article>
<?php else:?>
    <h1> Musisz być zalogowany, aby zobaczyć tą stronę</h1>
<?php endif;?>

<?php include "foot.php";?>

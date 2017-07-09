<?php include "pagehead.php";?>
<?php include "../add_db_connect.php";?>

<?php
    $article_id=$_GET["id"];

    $sql="SELECT
        id,
        title,
        photo,
        youtube,
        category,
        article_text,
        login1
        FROM articles
        WHERE id= '$article_id'
    ";
    if ($conn->query($sql)) {
        $result = $conn->query($sql);
        $articles_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $a=($articles_data[0]);
    }
?>
<article class="artykul">

    <a><img  class="ff" src="../<?=$a['photo'] ?>"></a>
      <h4><?=$a['title'] ?></h4>
    <div class="ar"><?=$a['article_text'] ?></div>
    <!-- <div class="yt"><?=$a['youtube'] ?></div> -->
    <div class="autor"><?=$a['login1'] ?></div>

</article>
<?php include "../foot.php";?>

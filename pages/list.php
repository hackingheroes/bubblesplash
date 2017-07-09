<?php include "pagehead.php";?>
<?php include "../add_db_connect.php";?>

<article class="list";>
<h4>LIST OF IDEAS</h4>

<?php
    $category_id=$_GET["cat_id"];
    //echo $category_id;

    $sql="SELECT
        id,
        title,
        youtube,
        category,
        photo
        FROM articles
        WHERE category= '$category_id'
    ";
    if ($conn->query($sql)) {
        $result = $conn->query($sql);
        $articles_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        //print_r($articles_data);
    }
?>

<ul class="makeup-list">
<?php foreach($articles_data as $aritcle) : ?>

<li>
  <a href="article.php?id=<?=$aritcle['id']?>"> <img src="" > <?=$aritcle['title']?></a>
</li>

<?php endforeach;?>
</ul>

</article>

<?php include "../foot.php";?>

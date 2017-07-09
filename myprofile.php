<?php include "head.php";?>
<?php include "add_db_connect.php";?>
  <?php $log_id = $_GET['login_id'];?>
<?php
    $profile_id=$_GET["id"];

    $sql="SELECT
        id,
        name,
        last_name,
        country,
        login,
        avatar
        FROM register
        WHERE id= '$profile_id'
    ";
    if ($conn->query($sql)) {
        $result = $conn->query($sql);
        $profile_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $p=($articles_data[0]);
    }
?>
<?php if(isset($_SESSION["username"]) && $_SESSION["username"] !=""):?>
<article class="myprofile">

  <a><img  class="avv" src="<?=$p['avatar'] ?>"></a>


    <form action="uploadavatar.php?log_id=<?=$log_id ?>" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>



    <h4><?=$p['login'] ?></h4>
    <div class="op"><?=$p['name'] ?> <?=$p['last_name'] ?></div>
    <div class="kr"><?=$p['country'] ?></div>

</article>

<?php else:?>
    <h1> Musisz być zalogowany, aby zobaczyć tą stronę</h1>
<?php endif;?>

<?php include "foot.php";?>

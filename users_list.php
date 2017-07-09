<?php
include 'head.php';
include 'add_db_connect.php';

$sql = "SELECT id, name, last_name, birthday FROM register";

$result = $conn->query($sql);


$user_data = mysqli_fetch_all($result, MYSQLI_ASSOC);?>

<h1>List of users</h1>


<ul class="students-list">

<?php foreach($user_data as $username) : ?>

    <li>
        <?=$user['name'] ?>
        <?=$user['last_name'] ?>
        (<?=$user['birthday'] ?>)
        <!-- <a href="show_bio.php?id=<?=$student['id'] ?>">Zobacz życiorys &raquo;</a> -->
    </li>

<?php endforeach; ?>

</ul>

<?php foreach ($user_data as $username) :?>

<?php endforeach; ?>

<?php include 'foot.php'; ?>
</ul>

<a href="register.php">Dodaj nowego studenta</a>

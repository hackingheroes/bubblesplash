<?php include "head.php";
include 'add_db_connect.php';?>
<?php include "header.php";?>




<?php
$user_login=mysqli_real_escape_string ($conn, $_POST['login']);
$user_password=mysqli_real_escape_string ($conn, $_POST['password']);
$sql="SELECT * FROM register WHERE login='$user_login'  AND password='$user_password'";

    if($conn->query($sql)){
        $result = $conn->query($sql);

        $site_username = $user_login;
        $site_password = $user_password;

        if($result->num_rows > 0){
            $_SESSION["username"] = $site_username;
            echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1; URL=welcome.php\">";
        }else{
            ?>

            <h1><?php
            echo 'Oooops sth goes wrong. Check your username or password or life ';
        }
    }
?>
</h1>
    <!-- //sprawdzam czy username i hasło użytkownika są poprawne -->

<?php include "foot.php";?>

<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="../styles.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/reset.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    </head>

    <body class="head">
        <section class="intro">
            <header>
                <nav>
                    <div id="temp_menu" clear:both;>
                    <ul>
                        <?php if(isset($_SESSION["username"]) && $_SESSION["username"] != ""):?>
                        <li><?php include '../zalogoo.php'; ?></li>
                      <?php else: ?>
                        <li><?php include "../logowanie.php";?></li>
                        <?php endif;?>
                        <li> <a href="../index.php"><span><img src="../img/home.png"></span></a> </li>
                        <li><?php include "../test2.php";?></li>
                        <li> <a href="../about.php"><span><img src="../img/about.png"></span></a> </li>
<li> <a href="../register.php"><span><img src="../img/register.png"></span></a> </li>
                        <?php if(isset($_SESSION["username"]) && $_SESSION["username"] != ""):?>
                        <li> <a href="../logout.php"><span><img src="../img/logout.png"></span></a> </li>

 <li> <a href="../add.php"><span><img src="../img/add.png"></span></a> </li>
                        <?php endif;?>
                    </ul>
                </div>
                </nav>
            </header>
        </section>

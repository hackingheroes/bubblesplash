<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title></title>
        <link rel="stylesheet" href="styles.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
        <?php session_start();?>
    </head>
    <body>
        <section class="intro">
            <header>
                <nav>
                    <div id="temp_menu">
                    <ul>
                        <li><?php include "logowanie.php";?></li>
                        <li> <a href="index.php"><span><img src="img/home.png"></span></a> </li>
                        <li> <a href="email.php"><span><img src="img/Contact.png"></span></a> </li>
                        <li> <a href="about.php"><span><img src="img/about.png"></span></a> </li>

                        <?php if(isset($_SESSION["username"]) && $_SESSION["username"] != ""):?>
                        <li> <a href="logout.php"><span><img src="img/logout.png"></span></a> </li>
                        <?php endif;?>
                    </ul>
                </div>
                </nav>
            </header>
        </section>

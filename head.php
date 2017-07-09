<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title></title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-1.12.2.min.js" integrity="sha256-lZFHibXzMHo3GGeehn1hudTAP3Sc0uKXBXAzHX1sjtk=" crossorigin="anonymous"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <!-- <link rel="stylesheet" href="css/bootstrap.css" type="text/css"> -->
        <link rel="stylesheet" href="styles.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">


        <link href="css/onepage-scroll.css" rel="stylesheet" type="text/css">

        <script type="text/javasript" src="js/bootstrap.js"></script>
        <!-- <script type="text/javascript" src="copy.js"></script> -->
        <!-- <script type="text/javascript" src="preload.js"></script> -->
        <script type="text/javascript" src="tester.js"></script>
        <script type="text/javascript" src="snow.js"></script>
        <script type="text/javascript" src="cookies.js"></script>



<script type="text/javascript">
  $(window).load(function() { // Czekamy na załadowanie całej zawartości strony
	  $("#preloader #image").fadeOut(); // Usuwamy grafikę ładowania
	  $("#preloader").delay(550).fadeOut("slow"); // Usuwamy diva przysłaniającego stronę
  })
</script>
<style media="screen">
.one{
    justify-content: space-around;
}
.one a{
    margin: 20px;
    width: 300px;
    height: 300px;
}
</style>
    </head>
    <body class="head">
        <section class="intro">
            <header>
                <nav>
                    <div id="temp_menu" clear:both;>
                    <ul>
                        <?php if(isset($_SESSION["username"]) && $_SESSION["username"] != ""):?>
                        <li><?php include 'zalogoo.php'; ?></li>
                      <?php else: ?>
                        <li><?php include "logowanie.php";?></li>
                        <?php endif;?>
                        <li> <a href="index.php"><span><img src="img/home.png"></span></a> </li>
                        <li><?php include "test2.php";?></li>
                        <li> <a href="about.php"><span><img src="img/about.png"></span></a> </li>
			<li> <a href="register.php"><span><img src="img/register.png"></span></a> </li>

                        <?php if(isset($_SESSION["username"]) && $_SESSION["username"] != ""):?>
                        <li> <a href="logout.php"><span><img src="img/logout.png"></span></a> </li>

<li> <a href="add.php"><span><img src="img/add.png"></span></a> </li>

                        <?php endif;?>
                    </ul>
                </div>
                </nav>
            </header>
        </section>





<!-- <div id="facebook_slider_widget" style="display: none"><script type="text/javascript" src="http://webfrik.pl/widget/facebook_slider.html?fb_url=https://www.facebook.com/kubusxd200&amp;fb_width=290&amp;fb_height=590&amp;fb_faces=true&amp;fb_stream=true&amp;fb_header=true&amp;fb_border=true&amp;fb_theme=light&amp;chx=787&amp;speed=FAST&amp;fb_pic=logo&amp;position=LEFT"></script></div> -->

<!-- <form name="form1" action="" onSubmit="search(document.form1, frametosearch1); return false"><input type="text" name="findthis" size="15"> <input type="submit" value="Find in Page"></form> -->

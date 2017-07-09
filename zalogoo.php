
 <button class="logowanko" onclick="document.getElementById('id01').style.display='block'"><a><span><img src="img/login.png"></span></a></button>


<div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'"
    class="close" title="Close Modal">&times;</span>


  <form class="modal-content animate" action="results.php" method="post">
         <div class="imgcontainer">
          <img src="img/login.png" alt="Avatar" class="avatar">
         </div>

<article class="zalog">

       <div class="zalog">
            <h1 class="zalog"> Twoja strona użytkownika</h1>

<h3> Nazwa użytkownika:<?=$_SESSION['username'];?></h3>
<h3> Wiek: <?=$a['birthday'] ?> <h3>
<h3> Kraj:<?=$a['country'] ?>><h3>

    <form action="demo_form.asp" method="get">
        <form action="demo_form.asp" method="get">
      Motto: <input type="text" name="motto"><br>
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </form>
<?php include "foot.php";?>

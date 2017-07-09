
<!-- Button to open the modal login form -->
<button class="logowanko" onclick="document.getElementById('id01').style.display='block'"><a><span><img src="img/login.png"></span></a></button>

<!-- The Modal -->
<div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'"
    class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="results.php" method="post">
         <div class="imgcontainer">
          <img src="img/login.png" alt="Avatar" class="avatar">
         </div>

<article class="zalog">

       <div class="zalog">
            <h1 class="zalog"> Twoja strona użytkownika
            </h1>
<h3> Nazwa użytkownika:<?=$_SESSION['username'];?></h3>
<h3> Twoje motto zyciowe: <h3>
<h3> Wiek: <?=$_SESSION['birthday'];?> <h3>
<h3> Kraj: <?=$_SESSION['country'];?><h3>

       </div>
        <nav>
<h2> Tutaj masz swoje polubione artykuły </h1>
        </nav>
        </article>
    </body>
</html>

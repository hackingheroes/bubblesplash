

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

          <div class="container">
              <label for="name">Login</label>
              <input class="log" required type="text" name="login" value="">

              <label for="password">Password</label>
              <input required type="password" name="password" value="">

<input class="klikaj" type="submit" name="" value="Login">

            </div>

            <div class="container">
<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

    </div>
  </form>
</div>

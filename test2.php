

<!-- Button to open the modal login form -->
<button class="logowanko" onclick="document.getElementById('id02').style.display='block'"><a><span><img src="img/Contact.png"></span></a></button>

<!-- The Modal -->
<div id="id02" class="modal">
    <span onclick="document.getElementById('id02').style.display='none'"
    class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="send-email.php" method="post">
         <div class="imgcontainer">
          <img src="img/Contact.png" alt="Avatar" class="avatar">
         </div>

          <div class="container">
            <label for="first_name">Your name</label>
            <input required class="log" type="text" name="first_name" value="">

            <label for="last_name">Your last name</label>
            <input required  type="text" name="last_name" value="">

            <label for="email">Email</label>
            <br><input class="textarea" type="email" name="email" value=""></br>

            <br><label for="message">Your message</label></br>
            <textarea class="textarea" name="message" rows="10"></textarea>

<input class="klikaj" type="submit" name="" value="Send">
                <input type="checkbox" checked="checked"> Remember me
            </div>

            <div class="container">
<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>

    </div>
  </form>
</div>

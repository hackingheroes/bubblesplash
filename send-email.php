<?php include "head.php";?>
<?php include "header.php";?>
<section>
   <article>
       <div>
           <h3> Thank you! </h3>
           <?php
           $last_name = $_POST['last_name'];
           echo $last_name;
           echo "<br>";
           $first_name = $_POST['first_name'];
           echo $first_name;
           echo "<br>";
           $email = $_POST['email'];
           echo $email;
           echo "<br>";
           $message = $_POST['message'];
           echo $message;
           //s=zmienne do emaila
           $send_to = "julsztandera@onet.pl";
           $email_subject = "Email z mojej strony";
           mail($send_to, $email_subject, $message);
           ?> </h3>
        </div>
   </article>

<?php include "foot.php";?>

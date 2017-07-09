<?php

require("db/db.php");
$result = mysqli_query($con, "SELECT * FROM comments ORDER BY id ASC");
while($row=mysqli_fetch_array($result))?>
<div class='comments_content'>;
<h4 class="iks" ><a href='delete.php?id=" . $row['id'] . "'> X</a>?></h4>;
<h1><?=$_SESSION["username"]; ?></h1>;
<h2 class="date"><?= $row['date_publish'];?> </h2></br></br>
<h3 class="com"><?=$row['comments'];?></h3>
<?=echo "</div>";
}
mysqli_close($con);

?>

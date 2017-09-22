<?php
     session_start();
     
?>
<html>
    <body>
        <h2><b>Welcome <?php  echo $_SESSION['first_name'];?></b></h2><a href="logout.php">Logout</a>
        
    </body>
</html>
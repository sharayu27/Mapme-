<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>loginhere</title>
<style type="text/css">
body 
{
	background-color: #6CF1C2;
	background-image: url(images/fitness_tracker_guide_cover_2.jpg);
}
</style>
</head>
<?php
if(isset($_POST['submit']))
    {
    $uname='';
    $uname = $_POST['uname'];
    echo $uname;
    }
    //session_start();
    /*$uname = $_POST['uname'];
    if(!isset($_SESSION['uname']) || empty($_SESSION['uname'])) {
    echo 'Welcome Guest.';
} else {
    echo 'Welcome ' . $_SESSION['uname'];*/

?>
<body>
    <center><img src="images/fitness_tracker_guide_cover_2.jpg" width="700" height="420"/></center><br><br>
   <center> <label for="textfield">Username</label>
  <input type="text" name="uname" id="uname"><br><br>
  
  
   <label for="textfield">Password</label>
   <input type="password" name="psw" id="textfield"><br><br>
            <form action="Login.php" method="post"> 
        <input type="submit" name="submit" value="Login">
            </form></center>

            </body>
            </html>
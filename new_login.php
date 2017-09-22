<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<style type="text/css">
body {
	background-color: #6CF1C2;
	background-image: url("images/Nutrient_Fitness.jpg");
        background-repeat: no-repeat;
        background-size: cover;
}
</style>



<?php
//session_start();
?>

<!--<!DOCTYPE html>
<html>
    

    <head>
    <title>Register</title>
    </head>
    <body>
    <center> <div class= "header">
            <h1>Register</h1></div>

        <h1>Home</h1>
        <div><center>
            <h4>Welcome <?php //echo $_SESSION['fname'];?></h4>
        </center></div>-->

        
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
    <title>Login</title>
    </head>
    <body>
<!--        <center> <img src= "images/fitness_tracker_guide_cover_2.jpg" alt="" width="700" height="420" class="img-rounded img-responsive"/></center>-->
     <div class= "header">
            <h1>Login</h1></div>
<!--      <a href="Login.php">Login</a>-->
        <form method ="post" action="">
            <table>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="uname" class="textInput"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="psw" class="textInput"></td>
                </tr>
                <tr>
                     <td></td>
                     <td><input type="submit" name="submit" value="Login"></td>                        
                </tr>                 
            </table>
        </form>
        <?php
    session_start();
    if(isset($_POST['submit']))
{
  $uname=$_POST['uname'];
  $psw=$_POST['psw'];
  $con1=  mysqli_connect('localhost','root','') or die(mysql_error());
  mysqli_select_db($con1,'mapme') or die("Cannot select db");
  $query=  mysqli_query($con1,"select * from register where uname='".$uname."' and psw='".$psw."'");
  $numrows=  mysqli_num_rows($query);  
  if($numrows!=0)
  {
      while($row=mysqli_fetch_assoc($query))
      {
          $dbuname=$row['uname'];
          $dbpsw=$row['psw'];
      }
      if($uname == $dbuname && $psw == $dbpsw)
          session_start();
          $_SESSION['firstname']=$uname;
          header("Location: Login.php");
      }
     else 
      {
          echo 'Invalid username or password'; 
      } 
     /* $sql="insert into test(fname,lname) values('$fname','$lname')";
      $result= mysql_query($sql);
      if($result)
      {
          echo 'Account successfully created';
      }
      echo 'failure';*/
  }
?>  </body>
</html>
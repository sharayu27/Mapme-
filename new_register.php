<?php
session_start();

if(isset($_POST['register']))
{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $dob=$_POST['dob'];
  $gene=$_POST['gen'];
  $fgoals=$_POST['fgoals'];
  $uname=$_POST['uname'];
  $psw=$_POST['psw'];
  $conpsw=$_POST['conpsw'];  
  $con1=  mysqli_connect('127.0.0.1','root','') or die(mysql_error());
  mysqli_select_db($con1,'mapme') or die("Cannot select db");
  $query=  mysqli_query($con1,"select * from test where fname='".$fname."'");
  $numrows=  mysqli_num_rows($query);
  /* Validation to check if gender is selected */

  if($numrows==0)
  {if($psw==$conpsw)
      {
          $password = md5($psw);
          $checkBox = implode(',', $_POST['fgoals']); 
        $sql="insert into register(fname,lname,dob,gen,fgoals,uname,psw,conpsw) values('$fname','$lname','$dob','$gene','$checkBox','$uname','$psw','$conpsw')";
      $result= mysqli_query($con1,$sql);
     // mysql_select_db("mapme") or die(mysql_error()); 
      $_SESSION['Message']="You Are Registered Successfully!";
      
      }
      if($result)
      {
          echo 'Account successfully created';
          header("Location: new_login.php");
      }
 else {
          echo 'failure';
      }
      
  }
 else 
  {
      echo 'That username already exist.';
  }
    /* $fname = mysqli_real_escape_string($_POST['fname']);
    $lname = mysqli_real_escape_string($_POST['lname']);*/
}

//$sql = "INSERT INTO test(Fname,Lname) VALUES('$fname','$lname')";
/*mysqli_query($db,$sql);
        $_SESSION['fname'] = $fname;
        $_SESSION['lname'] = $lname;*/
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Register</title>
    <style type="text/css">
body 
{
	background-color: #6CF1C2;
	background-image: url(images/vegetables-wooden-background-croppedx2.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        font-family: sans-serif;
}
</style>

    </head>
    <body>
    <center> <div class= "header">
            
            <h1>Register</h1></div><br>
<!--        <center><img src="images/fitness_tracker_guide_cover_2.jpg" width="700" height="420"/></center><br>-->
            <form method ="post" action="new_register.php" name="reg">
            <table>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" name="fname" class="textInput" required></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" name="lname" class="textInput" required></td>
                </tr>
                <tr>
                    <td>Date of Birth:</td>
                    <td><input type="date" name="dob" class="textInput" required></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td><input type="radio" name="gen" value="Male" id="Gender_0" required>Male</td>
                <td>
      <input type="radio" name="gen" value="Female" id="Gender_1" required>
      Female</td> 
            <td>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gen" value="radio" id="Gender_2" required>
      Other</td>
                </tr>
                <tr>
    <td>
    <label for="textfield">Fitness Goal:</label><br>
    </td>
    <td>
        <input type="checkbox" name="fgoals[]" id="overall_fitness" value="Overall Fitness" >Overall health and fitness<br>
   <input type="checkbox" name="fgoals[]" id="wtloss" value="Weight Loss" >Weight Loss<br>
   <input type="checkbox" name="fgoals[]" id="wtgain" value="Weight Gain" >Weight Gain<br>
   <input type="checkbox" name="fgoals[]" id="musgain" value="Muscle Gain" >Muscle Gain<br>
   <input type="checkbox" name="fgoals[]" id="inj" value="Injury Recovery" >Injury Recovery</td>
   </tr>
   <tr>
       <td><label for="textfield">Username:</label></td>
       <td><input type="text" name="uname" id="uname" required></td>
  </tr>
  <tr>
      <td><label for="textfield" >Password:</label></td>
      <td><input type="password" name="psw" id="psw" required></td>
  </tr>
  <tr>
      <td><label for="textfield">Confirm Password:</label></td>
      <td><input type="password" name="conpsw" id="psw" required></td>
   </tr>
   <tr>
       <td><input type="checkbox" name="terms" required><b> I accept terms and condition</b></td></tr>
   </tr>
                <tr>
                     <td></td>
                     <td><input type="submit" name="register" value="Register" style="width: 100px;height: 25px; border-radius: 5px"></td>
                </tr>
            </table>
    </center>
</form>
    </body>
</html>

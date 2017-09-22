<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Register</title>

<style type="text/css">
body 
{
	background-color: #6CF1C2;
	background-image: url(images/fitness_tracker_guide_cover_2.jpg);
}
</style>
</head>
<body>	
<center><h1><marquee> User Registration Form </marquee></h1></center>
<center><img src="images/fitness_tracker_guide_cover_2.jpg" width="700" height="420"/></center>
   <center>
        <table border="1">
            <tr>
                <td> <label for="textfield">First Name:</label></td>
                <td><input type="text" name="fname" id="fname"></td> 
            </tr>
            <tr>
                <td> <label for="textfield">Last Name:</label></td>
                <td><input type="text" name="lname" id="lname"></td>
            </tr>
            <tr>
                <td><label for="textfield">Date of Birth:</label></td>
                <td><input type="date" name="dob" id="dob"></td>
            </tr>
            <tr>
                <td><label for="radio">Gender:</label></td>
                <td><input type="radio" name="Gender" value="radio" id="Gender_0">Male</td>
            <td><label>
      <input type="radio" name="Gender" value="radio" id="Gender_1">
      Female</td> </label>
            <label><td>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="Gender" value="radio" id="Gender_2">
      Other</td></label>
        </tr>
        <tr>
    <td>
    <label for="textfield">Fitness Goal:</label> <br>
    </td>
    <td>
   <input type="checkbox" name="goals[]" id="overall_fitness" value="overall_fitness">Overall health and fitness<br>
   <input type="checkbox" name="goals[]" id="wtloss" value="wtloss">Weight Loss<br>
   <input type="checkbox" name="goals[]" id="wtgain" value="wtgain">Weight Gain<br>
   <input type="checkbox" name="goals[]" id="musgain" value="musgain">Muscle Gain<br>
   <input type="checkbox" name="goals[]" id="inj" value="inj">Injury Recovery</td>
   
   </tr>
   <tr>
       <td><label for="textfield">Username</label></td>
       <td><input type="text" name="uname" id="uname"></td>
  </tr>
  <tr>
      <td><label for="textfield">Password</label></td>
      <td><input type="password" name="psw" id="psw"></td>
  </tr>
  
  <tr>
      <td><label for="textfield">Confirm Password</label></td>
      <td><input type="password" name="cpsw" id="psw"></td>
   </tr>
   <tr>
       <td> 
  <form action="loginhere.php" method="post"> 
        <button type="submit" class="btn btn-default" style="width: 100; height:30; border-radius: 25">Done</button>
  </form></td>
        </tr>
        </table>
      <?php
   include 'connect.php';   
   if(isset($_POST[register]))
   {
       session_start();
   }
   $fname= mysqli_real_escape_string($_POST['fname']);
   $lname= mysqli_real_escape_string($_POST['lname']);
   $dob= mysqli_real_escape_string($_POST['dob']);
   $gender= mysqli_real_escape_string($_POST['Gender']);
   $uname= mysqli_real_escape_string($_POST['uname']);
   $pass= mysqli_real_escape_string($_POST['psw']);
   $cpass= mysqli_real_escape_string($_POST['cpsw']);
   if($pass=$cpass)
   {
       $pass=  md5($pass);
       $sql= "insert into user(fname,lname,dob,gender,uname,pass) values($fname,$lname,$dob,$gender,$uname,$pass)";
       mysqli_query($dbhandle, $sql);
       $_SESSION['Message']="You are now logged in";
       $_SESSION['username']=$uname;
       header("location: Login.php");
   }
   else
   {
     $_SESSION['Message']="Password do not match";
   }
   $fname= $_POST['fname'];
   $lname= $_POST['lname'];
   $dob= $POST['dob'];
   $gender=$POST['Gender'];
   $uname=$POST['uname'];
   $pass=$POST['psw'];
   $query = "insert into user(fname,lname,dob,gender,uname,pass) values('viraj','manjarekar','male','vir','abc')";
   $result = mysqli_query($query,$con); 
   
    if($query!=null)
    {
	echo "Value is inserted";
    }
    else
    {
	echo "value is not inserted";
    }	
  mysqli_close();
   if(isset($_POST['submit'])){
            
            if(isset($_POST['goals']))
                {
            $t1=implode(',', $_POST['goals']);
            $s = "insert into user values('$fname,$lname,$dob,$gender,$uname,$pass,$t1')"; 
                $res=mysql_query($s);
                if($res)
                {
                    echo "insert success";
                }
                else
                {
                    echo "error in inserting";
                }
          }
   }
          ?>
       
</center>
  <p>&nbsp;</p> 
</body>
</html>
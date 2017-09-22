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
	background-image: url(images/which-diets-are-best.jpg);
}
</style>

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<?php
    session_start();
    
?>
<body>
<nav class="navbar navbar-default">
  <!-- /.container-fluid --> 
</nav>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    </div>
  </div>
  <hr>
</div>
<div class="container">
  <div class="row text-center">
     <?php
     $con1=  mysqli_connect('127.0.0.1','root','') or die(mysql_error());
     mysqli_select_db($con1,'mapme') or die("Cannot select db");
     $uname=$_SESSION['firstname'];
     $query1=  mysqli_query($con1,"select * from register where uname='".$uname."'");  
     $numrow=  mysqli_num_rows($query1);       
            if($numrow!=0)
            {
                while($row=mysqli_fetch_assoc($query1))
                {
                    $dbgoal=$row['fgoals'];
                    $_SESSION['dbgoal']=$dbgoal;
                }
            }     
     ?>
      <center><h1><b>Welcome <?php  echo $_SESSION['firstname'];?>!</b></h1></center>
      <center><H2><b>Start Your Plan for <?php echo $dbgoal;?>!</b></H2><br><br>
          <a href="newfile.php"><button type="submit" class="btn btn-default">Exercise </button></a><br><br>
    <a href="diet.php"><button type="submit" class="btn btn-default">Diet Plan </button></a> <br><br>
    
    <a href="logout.php"> <button type="submit" class="btn btn-default">Logout </button></a><br><br></center>
  </div>
  <hr>
  
  <div class="row">
    <div class="text-center col-md-6 col-md-offset-3">
        <center>
<!--      <h4>Footer </h4>
      <p>Copyright &copy; 2015 &middot; All Rights Reserved &middot; <a href="http://yourwebsite.com/" >My Website</a></p>-->
        </center>
    </div>
  </div>
 </div>
</body>
</html>

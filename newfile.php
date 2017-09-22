<?php
session_start();

?>

<html>
    <head></head>
    <body background="images/webplunder-background-image-technology-online-website-solutions.jpg">
     <center><H2><b>Start Your Plan for <?php echo $_SESSION['dbgoal'];?>!</b></H2><br><br>   
         <?php
         $action = ''; 
         if(isset($_SESSION['dbgoal']) == "Weight Loss") 
         {
          $action = "wtloss_ex.php";
         } 
         if(isset($_SESSION['dbgoal']) == "Overall Fitness") 
         {
          $action = "overall.php";
         }
         if(isset($_SESSION['dbgoal']) == "Weight Gain") 
         {
          $action = "wtgain.php";
         }
         if(isset($_SESSION['dbgoal']) == "Injury Recovery") 
         {
          $action = "injuryrec.php";
         }
         if(isset($_SESSION['dbgoal']) == "Muscle Gain") 
         {
          $action = "musgain.php";
         }
         if((isset($_SESSION['dbgoal']) == "Injury Recovery,Overall Fitness")||(isset($_SESSION['dbgoal']) == "Overall Fitness,Injury Recovery"))  
         {
          $action = "io.php";
         }
         if((isset($_SESSION['dbgoal']) == "Weight Loss,Overall Fitness")||(isset($_SESSION['dbgoal']) == "Overall Fitness,Weight Loss"))  
         {
          $action = "wo.php";
         }
         if((isset($_SESSION['dbgoal']) == "Weight Gain,Muscle Gain")||(isset($_SESSION['dbgoal']) == "Muscle Gain,Weight Gain"))  
         {
          $action = "wm.php";
         } 
         
         ?>
         <form action="<?php echo $action;?>" method="post">
         <input type="submit" value="PROCEED"/>
         </form>
    </body>
</html>


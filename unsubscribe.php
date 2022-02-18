<?php


$htmlo=$_GET['id'] ;
//echo($htmlo);
//include ("connect.php");
//$connect=mysqli_connect('localhost','id18295716_winesubscribe1','78u7Us)E)t}T*ul!','id18295716_winesubscribe');
$connect=mysqli_connect('localhost','root','','rtcamp');
$res=mysqli_query($connect,"select * from customers where useremail ='$htmlo'");
$count=mysqli_num_rows($res);
if($count>0)
{
   //Set Refresh header using PHP.
 
   $res=mysqli_query($connect," UPDATE customers SET status='0' WHERE useremail='$htmlo';");
   
 
   


}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
	<script src="index.js"></script>
    <div class="container">
    <form  action="" method="POST">

    <h1 style="font-weight: bold;font-size: 40px;  ">DO YOU WANT TO UNSUBSCRIBE THE JOKES FOR THIS EMAIL-ID:-</h1>
    <p style=" padding: 10px; border: 2px solid red;text-align: center;font-weight: bold;font-size: 40px;  "><?php echo($htmlo);?> </p>
    <hr>
  
    <div class="submit1">
     
      <button type="submit" class="signupbtn" >Unsubscribe</button>
    </div>
  
</form>
</div>
  </body>
</html>

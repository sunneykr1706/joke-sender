<?php

//include ("connect.php");
$connect=mysqli_connect('localhost','root','','rtcamp');
//this is used to performline no 6 because this $connect variable comming from connect,php
if (!empty($_POST['username'])) {
  

$username=$_POST['username'];
$useremail=$_POST['useremail'];
session_start();
$_SESSION['accountName'] = $username;
$_SESSION['accountEmail'] = $useremail;
//$useremail=$_POST['useremail'];//'msg' same name as declared in conatct.php line no 33 and  stor it in $msg
$userpassword=$_POST['userpassword'];//'email' same name as declared in conatct.php line no 28 and storede it in $email
$txt=rand(100000,1000000);
$res=mysqli_query($connect,"select * from customers where useremail ='$useremail'");
$count=mysqli_num_rows($res);
if($count>0)
{
   //Set Refresh header using PHP.
header( "refresh:0;url=https://rtcampphpproject.000webhostapp.com/newfolder/login.php" );

//Print out some content for example purposes.
echo '<script type="text/javascript">';
echo ' alert("You are already registered with this email-id!!!")';  //not showing an alert box.
echo '</script>';

}
else {
  
$sql="INSERT INTO customers (username,useremail,userpassword,otpverify,status) VALUES ('$username','$useremail','$userpassword','$txt','0') ";
//mysqli_query($connect,"INSERT INTO usersdata(username,useremail,userpassword) VALUES ('$username','$useremail','$userpassword') ");

echo($txt);
echo(gettype($txt));
$headers="From:sunneykumar309@gmail.com <demo@sunny.me>\r\n";
$headers .="MIME-Versions: 1.0\r\n";
$headers .="Content-Type: text/html; charset=ISO-8859-1\r\n";
$str1 = " <html>
          <body>
          <h1>OTP FOR VERIFICATION IN SUNNEYKUMAR PROJECT:- echo ($txt)</h1>
          </body>
          </html>";
        //  echo($str1);
mail($useremail,"Message to you",$str1,$headers);//here in vqalues section you have to write the variable name which u declared in line 2 and 3
$connect->query($sql);
}
}
 else {
   $otp=$_POST['otpverify'];
  // echo($username);
  $er=0;
   {
    session_start();
 
    // Echo session variables that were set on previous page
    echo $_SESSION['accountName'];
     $user=$_SESSION['accountName'];
     $finalemail=$_SESSION['accountEmail'];
     $res=mysqli_query($connect,"select * from customers where username='$user' and useremail ='$finalemail' and otpverify='$otp'");
 $count=mysqli_num_rows($res);
 if($count>0)
 {
    //Set Refresh header using PHP.
header( "refresh:0;url=https://rtcampphpproject.000webhostapp.com/newfolder/login.php" );

//Print out some content for example purposes.
echo '<script type="text/javascript">';
echo ' alert("You are successfully registered!!!")';  //not showing an alert box.
echo '</script>';
  
  $res=mysqli_query($connect," UPDATE customers SET status='1' WHERE username='$user';");
  $er=1;
 }
 else {
  echo '<script type="text/javascript">';
  echo ' alert("Please Enter Correct Otp")';  //not showing an alert box.
  echo '</script>';
 }

 
   }
 }//contacts name same as written in phpadmin table  we want ot insert the data into it.
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

    <h1>YOU ARE JUST ONE STEP AWAY FROM RECEIVING JOKES</h1>
    <p style="font-weight: normal;font-size: 20px; ">OTP Sent on your Email Succesfully.</p>
    <hr>

    <label for="email"><b>Enter OTP here</b></label>
    <input type="text" placeholder="Enter Email" id="user1" name="otpverify" >

    <div class="row">
     <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  
</form>
</div>
  </body>
</html>
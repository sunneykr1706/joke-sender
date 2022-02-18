<?php

//include ("connect.php");

$connect=mysqli_connect('localhost','id18295716_winesubscribe1','78u7Us)E)t}T*ul!','id18295716_winesubscribe');
//this is used to performline no 6 because this $connect variable comming from connect,php
if (!empty($_POST['username'])) {
  

$username=$_POST['username'];
session_start();
$_SESSION['accountName'] = $username;
$useremail=$_POST['useremail'];//'msg' same name as declared in conatct.php line no 33 and  stor it in $msg
$userpassword=$_POST['userpassword'];//'email' same name as declared in conatct.php line no 28 and storede it in $email
$txt=rand(100000,1000000);
$sql="INSERT INTO customers (username,useremail,userpassword,otpverify,status) VALUES ('$username','$useremail','$userpassword','$txt','0') ";
//mysqli_query($connect,"INSERT INTO usersdata(username,useremail,userpassword) VALUES ('$username','$useremail','$userpassword') ");

echo($txt);
echo(gettype($txt));
$str1="OTP for your registration in rtcmp project";
mail($useremail,"Message to you",$str1." ".$txt);//here in vqalues section you have
$connect->query($sql);

// echo($txt);
// echo(gettype($txt));
// $headers="From:sunneyk31@gmail.com <demo@sunny.me>\r\n";
// $headers .="MIME-Versions: 1.0\r\n";
// $headers .="Content-Type: text/html; charset=ISO-8859-1\r\n";
// $str1 = " <html>
//           <body>
//           <h1>Hello World</h1>
//           </body>
//           </html>";
//           echo($str1);
// mail($useremail,"Message to you",$str1,$headers);
$connect->query($sql);
}
 else {
   $otp=$_POST['otpverify'];
  // echo($username);
   {
    session_start();
 
    // Echo session variables that were set on previous page
    echo $_SESSION['accountName'];
     $user=$_SESSION['accountName'];
     $res=mysqli_query($connect,"select * from customers where username='$user' and otpverify='$otp'");
 $count=mysqli_num_rows($res);
 if($count>0)
 {
  echo '<script type="text/javascript">';
  echo ' alert("You are succesfully registered")';  //not showing an alert box.
  echo '</script>';
  $res=mysqli_query($connect," UPDATE customers SET status='1' WHERE username='$user';");
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

    <h1>Register</h1>
    <p>OTP Sent on your Email Succesfully.</p>
    <hr>

    <label for="email"><b>Enter OTP here</b></label>
    <input type="text" placeholder="Enter Email" id="user1" name="otpverify" >

    <div class="row">
      <input type="submit" value="Submit">
    </div>
  
</form>
</div>
  </body>
</html>
















<?php

//include ("connect.php");

$connect=mysqli_connect('localhost','id18295716_winesubscribe1','78u7Us)E)t}T*ul!','id18295716_winesubscribe');
//this is used to performline no 6 because this $connect variable comming from connect,php
if (!empty($_POST['username'])) {
  

$username=$_POST['username'];
session_start();
$_SESSION['accountName'] = $username;
$useremail=$_POST['useremail'];//'msg' same name as declared in conatct.php line no 33 and  stor it in $msg
$userpassword=$_POST['userpassword'];//'email' same name as declared in conatct.php line no 28 and storede it in $email
$txt=rand(100000,1000000);
$sql="INSERT INTO customers (username,useremail,userpassword,otpverify,status) VALUES ('$username','$useremail','$userpassword','$txt','0') ";
//mysqli_query($connect,"INSERT INTO usersdata(username,useremail,userpassword) VALUES ('$username','$useremail','$userpassword') ");

echo($txt);
echo(gettype($txt));
$str1="OTP for your registration in rtcmp project";
mail($useremail,"Message to you",$str1." ".$txt);//here in vqalues section you have
$connect->query($sql);

// echo($txt);
// echo(gettype($txt));
// $headers="From:sunneyk31@gmail.com <demo@sunny.me>\r\n";
// $headers .="MIME-Versions: 1.0\r\n";
// $headers .="Content-Type: text/html; charset=ISO-8859-1\r\n";
// $str1 = " <html>
//           <body>
//           <h1>Hello World</h1>
//           </body>
//           </html>";
//           echo($str1);
// mail($useremail,"Message to you",$str1,$headers);
$connect->query($sql);
}
 else {
   $otp=$_POST['otpverify'];
  // echo($username);
   {
    session_start();
 
    // Echo session variables that were set on previous page
    echo $_SESSION['accountName'];
     $user=$_SESSION['accountName'];
     $res=mysqli_query($connect,"select * from customers where username='$user' and otpverify='$otp'");
 $count=mysqli_num_rows($res);
 if($count>0)
 {
  echo '<script type="text/javascript">';
  echo ' alert("You are succesfully registered")';  //not showing an alert box.
  echo '</script>';
  $res=mysqli_query($connect," UPDATE customers SET status='1' WHERE username='$user';");
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

    <h1>Register</h1>
    <p>OTP Sent on your Email Succesfully.</p>
    <hr>

    <label for="email"><b>Enter OTP here</b></label>
    <input type="text" placeholder="Enter Email" id="user1" name="otpverify" >

    <div class="row">
      <input type="submit" value="Submit">
    </div>
  
</form>
</div>
  </body>
</html>
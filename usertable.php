<?php
include ("connect.php");

//this is used to performline no 6 because this $connect variable comming from connect,php
$username=$_POST['otpverify'];//'email' same name as declared in conatct.php line no 28 and storede it in $email
$useremail=$_POST['useremail'];//'msg' same name as declared in conatct.php line no 33 and  stor it in $msg
$userpassword=$_POST['userpassword'];//'email' same name as declared in conatct.php line no 28 and storede it in $email

$sql="INSERT INTO customers (username,useremail,userpassword) VALUES ('$username','$useremail','$userpassword') ";
//mysqli_query($connect,"INSERT INTO usersdata(username,useremail,userpassword) VALUES ('$username','$useremail','$userpassword') ");
$txt=rand(1000,10000);
echo($txt);
echo(gettype($txt));
mail($useremail,"Message",$txt);//here in vqalues section you have to write the variable name which u declared in line 2 and 3
$connect->query($sql);//contacts name same as written in phpadmin table  we want ot insert the data into it.
?>

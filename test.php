<?php

//include ("connect.php");
//$connect=mysqli_connect('localhost','id18295716_winesubscribe1','78u7Us)E)t}T*ul!','id18295716_winesubscribe');
$connect=mysqli_connect('localhost','root','','rtcamp');
$op=rand(100,600);
$api_url = 'https://xkcd.com/'.$op.'/info.0.json#';
echo($api_url);
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);
$title=$response_data->safe_title;
$title_year=$response_data->year;
$content_in=$response_data->transcript;
$image_url=$response_data->img;
echo "$image_url";
// All user data exists in 'data' object
// $user_data = $response_data->data;
// $username=$_POST['username'];
// session_start();
// $_SESSION['accountName'] = $username;
// $useremail=$_POST['useremail'];//'msg' same name as declared in conatct.php line no 33 and  stor it in $msg
// $userpassword=$_POST['userpassword'];//'email' same name as declared in conatct.php line no 28 and storede it in $email
// $txt=rand(100000,1000000);
// $sql="INSERT INTO customers (username,useremail,userpassword,otpverify,status) VALUES ('$username','$useremail','$userpassword','$txt','0') ";
// //mysqli_query($connect,"INSERT INTO usersdata(username,useremail,userpassword) VALUES ('$username','$useremail','$userpassword') ");

$useremail='sunneykumar309@gmail.com';
$headers="From:sunneyk31@gmail.com <demo@sunny.me>\r\n";
$headers .="MIME-Versions: 1.0\r\n";
$headers .="Content-Type: text/html; charset=ISO-8859-1\r\n";
// $str1 = " <html>
//           <body>
//           <h1>Here is your comic title :- $title </h1>
//           <h1>Published year :-  $title_year </h1>
//           <h2> Content :- $content_in </h2>
//           <img src=\"$image_url\">
//           </body>
//           </html>";
//           echo($str1);
          $res=mysqli_query($connect,"select * from customers where status='1' ");
         // $row1 = mysqli_fetch_array($res);
          //echo $row1['username'];
          $count=mysqli_num_rows($res);
          echo $count;
          //$resw=$res->fetch();
         // $row = $res->mysql_fetch_array($res);
       while($row1 = mysqli_fetch_array($res))
        {
            //echo "The number is: $x <br>";
            $user_final= $row1['useremail'];
            $link = "https://rtcampphpproject.000webhostapp.com/newfolder/unsubscribe.php?id=$user_final";
            $str1 = "<html> 
          <body>
          <h1>Here is your comic title :- $title </h1>
          <h1>Published year :-  $title_year </h1>
          <h2> Content :- $content_in </h2>
          <img src=\"$image_url\">
          <a href=\"$link\">Unsubscribe</a>
          </body>
          </html>";
            
            mail($user_final,"Message to you",$str1,$headers);
        }
        
//mail("sunneykumar309@gmail.com","Message to you",$str1,$headers);//here in vqalues section you have to write the variable name which u declared in line 2 and 3

?>

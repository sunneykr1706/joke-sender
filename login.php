
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
    <form  action="handleform.php" method="POST">

    <h1>REGISTER</h1>
    <p style="font-weight: bold;font-size: 20px;  ">Please fill in this form to create an account to receive amazing jokes in every 5 minutes.</p>
    <hr>

    <label for="username"><b>User-Name</b></label>
    <input type="text" placeholder="Enter Username" id="user1" name="username" >

    <label for="email"><b>User-Email</b></label>
    <input type="email" placeholder="Enter Email" id="user2"  name="useremail" >

    <label for="password"><b>User-Password</b></label>
    <input type="password" placeholder="Enter Password" id="user3" name="userpassword" >
    <hr>

    <div class="submit1">
     
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  
</form>
</div>
  </body>
</html>
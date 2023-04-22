<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
if(isset($_POST['submit']))
{


$qry1=mysqli_query($conn,"select * from register where uname='$username' && role='$role'");
$count=mysqli_num_rows($qry1);
if($count>0){                                                                                           
echo "<script>alert('username already taken')</script>";
}else{		
$qry=mysqli_query($conn,"insert into register  values('','$first','$last','$username','$password','$roll','$email','$contact','$role')");
	if($qry)
	{
	
	echo "<script>alert('Registered sucessfully')</script>";
	
	}
	

	
}

}
?>
<!DOCTYPE html>
<html>
<head>

  <title>Student Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

  <style type="text/css">
    section
    {
      margin-top: -30px;
    }
    .reg_img
{
	height: 630px;
	margin-top: 0px;
	background-image: url("login.png");
}
.box2
{
	height: 700px;
	width: 400px;
	background-color: rgb(15, 15, 15);
	margin: 0px auto;
	opacity: .7;
	color: white;
	padding: 20px;
}
  </style>   
</head>
<body>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand active">M.I.E.T Institution Repository</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="index.php">HOME</a></li>
            <li><a href="contact us.php">CONTACT US</a></li>
            <li><a href="resource.php">RESOURCE</a></li>
            
          </ul>

          <ul class="nav navbar-nav navbar-right">

            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>

            <li><a href="registration.php"><span class="glyphicon glyphicon-user"> SIGN UP</span></a></li>
          </ul>

      </div>
    </nav>
<section>
  <div class="reg_img">

    <div class="box2">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;"> &nbsp &nbsp &nbsp  M.I.E.T Institution Repository</h1>
        <h1 style="text-align: center; font-size: 25px;">User Registration Form</h1>
      <form name="Registration" action="" method="post">
       
        <div class="login">
        <input class="form-control" type="text" name="first" placeholder="First Name" required=""> <br>
          <input class="form-control" type="text" name="last" placeholder="Last Name" required=""> <br>
          <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
          <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
          <input class="form-control" type="text" name="roll" placeholder="Roll No" required=""><br>

          <input class="form-control" type="text" name="email" placeholder="Email" required=""><br>
          <input class="form-control" type="text" name="contact" placeholder="Phone No" required=""><br>
          <input class="form-control" type="text" name="role" placeholder="role" required=""><br>
          <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: black; width: 70px; height: 30px"> </div>
      </form>
     
    </div>
  </div>
</section>
</body>
</html>





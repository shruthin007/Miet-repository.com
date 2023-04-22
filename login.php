
<?php
session_start();
include "navbar.php";
include("dbconnect.php");
extract($_POST);

if(isset($_POST['submit']))
{

if($role=='student'){

$qry=mysqli_query($conn,"select * from register where uname='$uname' && psw='$password' && role='student'");
$num=mysqli_num_rows($qry);
if($num==1)
{
//$qry1=mysql_query("select * from sregister where name='$uname' && reg='$password'");
$row=mysqli_fetch_array($qry);
 $_SESSION['stuname']=$uname;

echo "<script>alert('welcome to User home page ')</script>";

header("location:student_profile.php");
}
else
{
echo "<script>alert('User Name Password Wrong.....')</script>";

}

}





if($role=='staff'){

$qry=mysqli_query($conn,"select * from register where uname='$uname' && psw='$password' && role='staff'");
$num=mysqli_num_rows($qry);
if($num==1)
{
//$qry1=mysql_query("select * from sregister where name='$uname' && reg='$password'");
$row=mysqli_fetch_array($qry);
 $_SESSION['sauname']=$uname;

echo "<script>alert('welcome to User home page ')</script>";

header("location:staffhome.php");
}
else
{
echo "<script>alert('User Name Password Wrong.....')</script>";

}

}







if($role=='admin'){

$qry=mysqli_query($conn,"select * from admin where uname='$uname' && psw='$password'");
$num=mysqli_num_rows($qry);
if($num==1)
{
//$qry1=mysql_query("select * from sregister where name='$uname' && reg='$password'");
$row=mysqli_fetch_array($qry);
 $_SESSION['uname']=$uname;

echo "<script>alert('welcome to User home page ')</script>";

header("location:adminhome.php");
}
else
{
echo "<script>alert('User Name Password Wrong.....')</script>";

}

}







}
?> 






















 
<!DOCTYPE html>
<html>
<head>
	<title>login-system</title>
	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
</head>

<body background="image.jpg">
      <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
      	<form class="border shadow p-3 rounded"

      	      method="post" 
      	      style="width: 450px;">
      	      <h1 class="text-center p-3">LOGIN</h1>
      	     
		  <div class="mb-3">
		    <label for="username" 
		           class="form-label">User name</label>
		    <input type="text" 
		           class="form-control" 
		           name="uname" 
		           id="uname">
		  </div>
		  <div class="mb-3">
		    <label for="password" 
		           class="form-label">Password</label>
		    <input type="password" 
		           name="password" 
		           class="form-control" 
		           id="password">
		  </div>
		  <div class="mb-1">
		    <label class="form-label">Select User Type:</label>
		  </div>
		  <select class="form-select mb-3"
		          name="role" 
		          aria-label="Default select example">
			  <option selected value="student">Student</option>
			  <option value="admin">Admin</option>
              <option value="staff">Staff</option>
		  </select>
		 <div>
		 <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: white; width: 70px; height: 30px;background:#0000FF;"> </div>
		</form>
      </div>
    
</body>
</html>


<?php
session_start();
include "dbconnect.php";

$name=$_SESSION['sauname'];
$sql="SELECT* FROM register WHERE uname='$name' && role='staff'";
$result=mysqli_query($conn,$sql);
$info=mysqli_fetch_array($result);




























?>

<!DOCTYPE html>
<html>

    <head>
        <title>student Dashboard</title>
        <link rel="stylesheet" type="text/css" href="student.css">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>    
 </script>
 <style>
    *{
        margin:0px;
        padding:0px;
    }
    .header{
        background-color:skyblue;
        line-height:70px;
        padding-left:30px;

    }
    a,a:hover{
        text-decoration: none!important;
    }
    ul{
        background-color:#424a5b;
        width:16%;
        height:100%;
        position:fixed;
        padding-top:5%;
        text-align:center;
    }
    ul li{
        list-style:none;
        padding-bottom:30px;
        font-size:15px;
    }
    ul li a{
        color:white;
        font-weight:bold;
        font: size 3px;
    }
    ul li a:hover{
        color:skyblue;
        text-decoration:none;
    }
    .content{
        margin-left:30%;
    }
    label{
        display:inline-block;
        text-align:center;
        width:250px;
        padding-top:5px;
        padding-bottom:5px;
		font-size:20px;
    }
    .div_deg{
        background-color:skyblue;
        width:500px;
        padding-top:70px;
        padding-bottom:70px;
    }
	input{
	font-size:18px;
	width:300px;
	}
    
    </style>
    </head>
    <body> 
    <header class="header"> <a href="">Staff Dashboard</a>
            <div class="logout">
                </div>
</header>
<aside>
    <ul>
        
        <div class="sidebar">
                            <ul>
                               
                                <li><a href="staffhome.php">My Profile</a></li>
                                <li> <a href="staviewbook.php">My Book Details</a></li>
                                <li><a href="stareq.php"><i class="menu-icon icon-list"></i>Recommend Books </a></li>
								        <li><a href="addlec.php"><i class="menu-icon icon-list"></i>Add Lecture Notes </a></li>
                             
                                <li><a href="index.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                           
                                
                            
                        </div>
                        <!--/.sidebar-->
                    </div>
       </u>
</aside>
       
       <div style="width:100%;" class="content" >
    
            <h1>Update Profile<h1>
        <form style="width:100%;" >
            <div >
                <label> First Name</label>
                <input type="text" name="firstname" value="<?php echo "{$info['first']}" ?>">
            </div>
            <div>
                <label> Last Name</label>
                <input type="text" name="lastname" value="<?php echo "{$info['last']}" ?>">
            </div>
            <div>
                <label> User Name</label>
                <input type="text" name="username" value="<?php echo "{$info['uname']}" ?>">
            </div>
            <div>
                
            <label>Password</label>
                <input type="text" name="password" value="<?php echo "{$info['psw']}" ?>">
            </div>
            <div>
            <label>Email</label>
                <input type="email" name="email"value="<?php echo "{$info['email']}" ?>">
            </div>
            <div>
                <label>Phone no</label>
                <input  type="number" name="Phoneno" value="<?php echo "{$info['phone']}" ?>">
            </div>
          <div>
		  <label></label>
                <a href="staffhome1.php" style="padding:10px 20px;background:#0000FF;color:#FFFFFF;border-radius:8px;font-size:18px;">Update</a>
            </div>
            
            
            
</form>

</div>
</body>
    </html>
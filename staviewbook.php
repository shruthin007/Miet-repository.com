
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
    
	table,td,th{
	padding:10px;
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
       
         
      <h2 style="padding:10px;margin:20px 400px;;">Book Taken Details:</h2>
	     
                <table width="60%" border="2" style="padding:10px;margin:200px 400px;;">
                  <tr>

                    <th scope="col"><div align="center">Title of the Book</div></th>
                    <th scope="col"><div align="center">Author</div></th>
                    <th scope="col"><div align="center">Call.No</div></th>
                    <th scope="col"><div align="center">Publisher</div></th>
                    <th scope="col"><div align="center">Edition</div></th>
          
                    <th scope="col"><div align="center">Count</div></th>
					 <th scope="col"><div align="center">From</div></th>
					  <th scope="col"><div align="center">To</div></th>
                   
                  </tr>
				  <?php
				  $i=1;
				  $qry=mysqli_query($conn,"select * from taken where uname='$name' && role='staff'");
				  while($row=mysqli_fetch_array($qry))
				  {
				  ?>
                  <tr>
               
                    <td><div align="center"><?php echo $row['Title of the Book'];?></div></td>
                    <td><div align="center"><?php echo $row['Author'];?></div></td>
                    <td><div align="center"><?php echo $row['Call.No'];?></div></td>
                    <td><div align="center"><?php echo $row['Publisher'];?></div></td>
                    <td><div align="center"><?php echo $row['Edition'];?></div></td>
                    
                    <td><div align="center"><?php echo $row['count'];?></div></td>
					 <td><div align="center"><?php echo $row['fromm'];?></div></td>
                    <td><div align="center"><?php echo $row['too'];?></div></td>
                 
                  </tr>
				  <?php
				  $i++;
				  }
				  ?>
                 	
                </table>
              

</div>
</body>
    </html>
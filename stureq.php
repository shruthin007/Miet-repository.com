
<?php
session_start();
include "dbconnect.php";
extract($_POST);

$name=$_SESSION['stuname'];
if(isset($_POST['btn']))
{

$qry=mysqli_query($conn,"insert into req value('$id','$bname','$author','$year','$name','student')");
if($qry)
{
?>
<script language="javascript">
	alert("Request Sended Successfully..");
	window.location.href="stareq.php";
	</script>
		<?php
}
else
{
?>
<script language="javascript">
	alert("Request Sended Failed...");
	window.location.href="stareq.php";
	</script>
<?php
}
}
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
    <header class="header">
            <a href="">Student Dashboard</a>
            <div class="logout">
                </div>
</header>
<aside>
    <ul>
        
        <div class="sidebar">
                            <ul>
                               
                                <li><a href="student_profile.php">My Profile</a></li>
                                <li> <a href="stuviewbook.php">My Book Details</a></li>
                                <li><a href="stureq.php"><i class="menu-icon icon-list"></i>Recommend Books </a></li>
                             
                                <li><a href="index.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                           
                                
                            
                        </div>
                        <!--/.sidebar-->
                    </div>
       </u>
</aside>
       
       <div style="width:100%;" class="content" >
    

          <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <p>&nbsp;</p>
       
            <td width="72%" valign="top"><div align="justify" class="style3">

                <h3 align="left"><span class="style4"><strong>Book Recommendation: </strong></span></h3>
           
              <div align="left">
                <table width="70%" border="0" align="center">

                  <tr>
                    <td width="7%" height="32">&nbsp;</td>
                    <td width="25%"><strong>Book Name </strong></td>
                    <td width="61%"><input name="bname" type="text" id="bname" /></td>
                    <td width="5%">&nbsp;</td>
                    <td width="2%">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="28">&nbsp;</td>
                    <td><strong>Author</strong></td>
                    <td><input name="author" type="text" id="author" /></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                 
                 
                
                
                 
                 
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input name="btn" type="submit" id="btn" value="Submit" />
                      <input type="reset" name="Submit2" value="Reset" /></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
                <p align="center" class="style9">&nbsp;</p>
                </div>
            </div></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </form>      
      <p>&nbsp;</p>
    </td>
  </tr>
</table>

</div>
</body>
    </html>
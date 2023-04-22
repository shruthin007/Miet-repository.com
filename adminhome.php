<?php
include("dbconnect.php");
session_start();
extract($_POST);
if(isset($_POST['btn']))
{
$max_qry = mysqli_query($conn,"select max(id) from book");
	$max_row = mysqli_fetch_array($max_qry); 
	$id=$max_row['max(id)']+1;

$file_name=$_FILES['img']['name'];  
$file_loc=$_FILES['img']['tmp_name'];
$folder = "upload/";   

$path=move_uploaded_file($file_loc,$folder.$file_name);
$img=$file_name;
 
$qry=mysqli_query($conn,"insert into book value('$id','$Accessno','$Callno','$Author','$TitloftheBook','$Publisher','$Editon','$Rack','$Count','$Pages')");
if($qry)
{
?>
<script language="javascript">
	alert("Add Book Details Successfully..");
	window.location.href="adminhome.php";
	</script>
		<?php
}
else
{
?>
<script language="javascript">
	alert("Add Book Details Unsuccessfully..");
	window.location.href="adminhome.php";
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
	padding:10px;
	}
	td{
	font-size:20px;
	}
    
    </style>
    </head>
    <body background="iii.jpeg"> 
    <header class="header"> <a href="">Admin Dashboard</a>
            <div class="logout">
                </div>
</header>
<aside>
    <ul>
        
        <div class="sidebar">
                            <ul>
                               
                                <li><a href="adminhome.php">Add Books</a></li>
								  <li> <a href="addbooktaken.php">Add Book Taken</a></li>
                                <li> <a href="addjou.php">Add Journals</a></li>
                                <li><a href="addques.php"><i class="menu-icon icon-list"></i>Add question papers </a></li>
								        <li><a href="addproj.php"><i class="menu-icon icon-list"></i>Add E-Projects </a></li>
										 <li><a href="sendmsg.php"><i class="menu-icon icon-list"></i>Send Message</a></li>
										 			 <li><a href="viewrecom.php"><i class="menu-icon icon-list"></i>View Recommendation</a></li>
                             
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

                <h3 align="left"><span class="style4"><strong>Add New Book Details: </strong></span></h3>
           
              <div align="left">
                <table width="70%" border="0" align="center">

                  <tr>
                    <td width="7%" height="32">&nbsp;</td>
                    <td width="25%"><strong>Access.No </strong></td>
                    <td width="61%"><input name="Access.No" type="number" id="Access.No" /></td>
                    <td width="5%">&nbsp;</td>
                    <td width="2%">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="7%" height="32">&nbsp;</td>
                    <td width="25%"><strong>Call.No</strong></td>
                    <td width="61%"><input name="Call.No" type="number" id="Call.No" /></td>
                    <td width="5%">&nbsp;</td>
                    <td width="2%">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="28">&nbsp;</td>
                    <td><strong>Author</strong></td>
                    <td><input name="Author" type="text" id="Author" /></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="33">&nbsp;</td>
                    <td><strong>Title of the Book</strong></td>
                    <td><input name="Title of the Book" type="text" id="Title of the Book" /></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="37">&nbsp;</td>
                    <td><strong>Publisher</strong></td>
                    <td><input name="Publisher" type="text" id="Publisher" /></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="34">&nbsp;</td>
                    <td><strong>Edition</strong></td>
                    <td><input name="Edition" type="text" id="Edition" /></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="33">&nbsp;</td>
                    <td><strong>Rack</strong></td>
                    <td><input name="rack" type="text" id="rack" /></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  
                  <tr>
                    <td height="33">&nbsp;</td>
                    <td><strong>Count</strong></td>
                    <td><input name="count" type="text" id="count" /></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="33">&nbsp;</td>
                    <td><strong>Pages</strong></td>
                    <td><input name="Pages" type="text" id="Pages" /></td>
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


<?php
  include "navbar.php";
include("dbconnect.php");
session_start();
extract($_POST);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Books</title>
	<style type="text/css">
		.srch
		{
			padding-left: 1000px;
		}
        .table,table th,table td{
            border:1px solid grey;
            border-collapse: collapse;
            padding:25px;
            
        }
        .table th{
            background-color:lightslategray;
            color:#fff;
        }
        .table tr:nth-child(odd){ 
              background-color:lightblue;

        }
        .table tr:nth-child(even){ 
              background-color:lightyellow;

        }
        
        
	</style>
</head>
<body  div class="back" background="book back.jpg">
	<!--__________________________search bar________________________-->
	

	      <td width="72%" valign="top"><div align="justify" class="style3">

                <p align="left"><span class="style4"><strong> Book Details: </strong></span></p>
             
              <div align="left">
                <table width="100%" border="1" class="table">
                  <tr>
                    <th height="37" scope="col"><div align="center">Access.No</div></th>
                    <th scope="col"><div align="center">Call.NO </div></th>
                    <th scope="col"><div align="center">Author</div></th>
                    <th scope="col"><div align="center">Title of the Book</div></th>
                    <th scope="col"><div align="center">Publisher</div></th>
                    <th scope="col"><div align="center">Edition</div></th>
                    <th scope="col"><div align="center">Rack</div></th>
                    <th scope="col"><div align="center">Count</div></th>
                    <th scope="col"><div align="center">Pages</div></th>
                  </tr>
				  <?php
				  $i=1;
				  $qry=mysqli_query($conn,"select * from book");
				  while($row=mysqli_fetch_array($qry))
				  {
				  ?>
                  <tr>
                    <td height="35"><div align="center"><?php echo $i;?></div></td>
                    <td><div align="center"><?php echo $row['Call.No'];?></div></td>
                    <td><div align="center"><?php echo $row['Author'];?></div></td>
                    <td><div align="center"><?php echo $row['Title of the Book'];?></div></td>
                    <td><div align="center"><?php echo $row['publisher'];?></div></td>
                    <td><div align="center"><?php echo $row['Edition'];?></div></td>
                    <td><div align="center"><?php echo $row['rack'];?></div></td>
                    <td><div align="center"><?php echo $row['count'];?></div></td>
                    <td><div align="center"><?php echo $row['pages'];?></div></td>
                  
                  </tr>
				  <?php
				  $i++;
				  }
				  ?>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
                <p align="center" class="style9">&nbsp;</p>
                </div>
            </div></td>
          </tr>
        </table>
</body>
</html>
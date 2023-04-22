<html>
    <head>
        <title>navbar</title>
   
    <style>
        *{
            padding:0;
            margin:0;
            text-decoration:none;
            list-style:none;
            box-sizing:border-box;
        }
        body{
            font-family:montserrat;
        }
        nav{
            background:black;
            word-spacing: 20px;
	        padding: 10px;
            height:80px;
            width:100%;
        }
        label.logo{
            color:red;
            font-size:35px;
            line-height:80px;
            padding:0 100px;
            font-weight:bold;
        }
        nav ul{
            float:right;
            margin-right:20px;
        }

        nav ul li{
            display:inline-block;
            line-height:80px;
            margin:0 5px;
        }
        nav ul li a{
            color:white;
            font-size:17px;
            text-transform:uppercase;
        }
        a.hover{
            background:#1b9bff;
            transition:.5s;
        }
        </style>
         </head>

<body>
    <nav>
        <label class="log"> M.I.E.T INSTITUTION REPOSITORY</label>
        <ul>
          <li><a href="index.php">HOME</a></li>
                     <li><a href="books.php">BOOKS</a></li>
                    <li><a href="viewlec.php">LECTURENOTES</a></li>
                    <li><a href="viewjou.php">JOURNALS</a></li>
                    <li><a href="viewques.php">QUESTIONPAPER</a></li>
                    <li><a href="viewproj.php">E-PROJECT</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in">LOGIN</span></a></li>
                  
                    <li><a href="registration.php"><span class="glyphicon glyphicon-user">SIGNUP</span></a></li>
                    
          </ul>

          

            

      
    </nav>
</body>
</html>
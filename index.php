<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="style.css" />
    <title>M.I.E.T INSTITUTION REPOSITORY</title>
    <style type="text/css">
        body{
            margin:0;
        }
        .bgImage{
            position: relative;
            width: 100%;
            height: 100vh;
            background-image: url(1.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            animation: bgchange 20s linear infinite;
        }
        @keyframes bgchange{
            0%{
                background-image: url(1.jpg);
            }
            25%{
                background-image: url(i.JPG);
            }
            45%{
                background-image: url(ii.JPG);
            }
            50%{
                background-image: url(iii.jpeg);
            }
            70%{
                background-image: url(iv.jpg);
            }
        }
        .overlay{
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0px;
            left: 0px;
            background-color: rgba(0,0,0,0,3);
        }
        .content{
            position: relative;
            width: 100%;
            height: 100%;
            color:black;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            z-index: 2;
        }
        .content h1{
            font-size: 60px;
            margin-bottom: 0px;
        }
        .content h1 span{
            color: #00bf13;
        }
        .content p{
            font-size: 18px;
            width: 60%;
            padding-bottom: 10px;
            text-align: center;
        }
        
    </style>
  </head>
  <body>
    <div class="menu-bar">
     <h1 class="logo">M.I.E.T<span><br>DIGITAL REPOSITORY</span></h1> 
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="resource.php">Resource <i class="fas fa-caret-down"></i></a>
            
         <li><a href="contact us.php">Contact us</a></li>
      </ul>
    </div>
    <div class="bgImage">
        <div class="overlay"> </div>
        <div class="content">
            <h1>WELCOME!!!&nbsp;<span>EXPLORE YOUR KNOWLEDGE</span></h1>
            <p>Wouldn't it be great if you could put all the published works online? The Internet Archive is trying to become useful as a modern-day digital library</p>
            
        </div>
  </body>
</html>

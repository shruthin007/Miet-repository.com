<html>
    <head> 
        <title> Resource</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <style>
       *{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    box-sizing: border-box;
}
.banner{
    width: 100%;
    height: 100vh;
    background-position: center;
    background-size: center;
}
.navbar{
    width: 90%;
    padding: 30px;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.logo{
    width: 160px;
    margin-top: -10px;
    cursor: pointer;
}
.navbar ul li{
    list-style: none;
    display: inline-block;
    margin: 20px;
}
.navbar ul li a{
    text-decoration: none;
    text-transform: uppercase;
    color: white;
    font-weight: 600;
    padding: 5px;
}
li a:hover{
    background: white;
    transition: 0.5s;
}
.navbar a:hover{
    color: black;
}
.content{
    width: 100%;
    position: absolute;
    color: white;
    top: 45%;
    transform: translateY(-50%);
    text-align: center;
}
.content h1{
    margin-top: 80px;
    font-size: 90px;
    font-weight: 800;
}
button{
    width: 200px;
    padding: 15px;
    margin: 20px 5px;
    text-align: center;
    border-radius: 25px;
    color: black;
    border: 2px;
    font-size: 20px;
    cursor: pointer;
    font-weight: 600;
}
button:hover{
    background: rgb(0, 192, 226);
    transition: 0.5s;
}
button:hover{
    color: white;
}
.banner video{
    position: absolute;
    right: 0;
    bottom: 0;
    z-index: -1;
}
@media(min-aspect-ratio: 16/9){
    .banner video{
        width: 100%;
        height: auto;
    }
}
ul li ul.dropdown li{
    display:block;
}
ul li ul.dropdown{
    width:100%;
    background:white;
    position: absolute;
    z-index:999;
    display:none;
}
        </style>
<body>
    <div class="banner">
    <video autoplay loop muted plays-inline>
            <source src="video.mp4" type="video/mp4">
</video>
<div class="navbar">
    <img class="logo" src="logo.png">
         <ul >
            <li><a href="index.php">HOME</a></li>
            <li><a href="books.php">BOOKS</a></li>
            <li><a href="viewjou.php">JOURNALS</a></li>
            <li><a href="viewlec.php">LECTURE NOTES</a></li>
            <li><a href="viewques.php">QUESTION PAPER</a></li>
            <li><a href="viewproj.php">E-PROJECT</a></li>
            <li><a href="login.php">  LOGIN</a></li>
            
           


</ul>
</div>





</body>
</html>

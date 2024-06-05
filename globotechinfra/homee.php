<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <title>Employee Home Page</title>
    <script src="https://kit.fontawesome.com/5dd0cc1318.js" crossorigin="anonymous"></script>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .background{
            position: absolute;
            right: 0;
            bottom: 0;
            z-index: -1;
            opacity: 0.9;
        }
        @media (max-aspect-ratio:16/9){
            .background{
                width: 100%;
                height: auto;
            }
        }
        @media (max-aspect-ratio:16/9){
            .background{
                width: auto;
                height: 100%;
            }
        }
        .nav{
            margin: 5px;
            font-size: 30px;
        }
        .nav a{
            color: white;
        }
        .user{
            padding-left: 1230px;
        }
        .menu{
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            opacity: 0.8;
            overflow-x: hidden;
            padding-top: 60px;
            transition:0.5s;
        }
		.menu a{
            text-decoration: none;
            list-style: none;
            position: relative;
            border-left: 3px solid transparent;
            padding: 10px 10px 10px 20px;
            font-size: 18px;
            color: white;
            display: block;
            transition: 0.3s;
        }
		.menu a:hover{
            color: cyan;
            border-left-color: cyan;
        }
        .close-btn{
            position: absolute;
            top: -50px;
            right: 22px;
            font-size: 36px;
            margin-left: 200px;
        }
		.close a:hover{
            color: lightgray;
            border-left-color: transparent;
        }
        .logout{
            position: absolute;
            top: 85%;
        }
        .container{
            padding: 0 8%;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 70px;
            margin-top: 90px;
        }
        .item{
            text-align: center;
            padding: 30px 20px;
            border-radius: 8px;
            font-size: 14px;
            background-color: rgba(255, 255, 255, 0.7);
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);
            opacity: 0.8;
            font-weight: bold;
            cursor: pointer;
        }
        .icon{
            font-size: 30px;
        }
        .item a{
            text-decoration: none;
            color: #111;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .item:hover{
            letter-spacing: 0.25em;
            box-shadow: 0 0 50px;
            opacity: 2;
        }
    </style>
</head>
<body>
    <video autoplay loop muted plays-inline class="background">
        <source src="homebg.mp4" type="video/mp4">
    </video>
    <header class="nav">
        <a href="#" class="menu-bar" onclick="openSlideMenu()"><i class="fa-solid fa-bars"></i></a>
        <a href="#" class="user"><i class="fa-solid fa-circle-user"></i></a>
        <div class="menu" id="menu">
            <div class="close">
                <a href="" class="close-btn" onclick="closeSlideMenu()"><i class="fa-solid fa-xmark"></i></a>
            </div>
            <a href="#"><i class="fa-solid fa-file-invoice"></i> Project Document</a>
            <a href="#"><i class="fa-solid fa-list-check"></i> Bill Management</a>
            <a href="#"><i class="fa-brands fa-instagram"></i> Social Media</a>
            <a href="#"><i class="fa-solid fa-gear"></i> Account Setting</a>
            <a href="#"><i class="fa-solid fa-brush"></i> Theme</a>
            <div class="logout">
                <a href="logoute.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
            </div>
        </div>
    </header>
    <div class="container" id="container">
        <div class="item">
            <a href="plane.php">
            <div class="icon"><i class="fa fa-calendar"></i></div>
            <div class="detail">planning</div>
            </a>
        </div>
        <div class="item">
            <a href="progresse.php">
            <div class="icon"><i class="fa fa-bar-chart"></i></div>
            <div class="detail">Progress</div>
            </a>
        </div>
        <div class="item">
            <a href="#">
            <div class="icon"><i class="fa-solid fa-pen-to-square"></i></div>
            <div class="detail">Regulatory Update</div>
            </a>
        </div>
        <div class="item">
            <a href="#">
            <div class="icon"><i class="fa-solid fa-mountain-sun"></i></div>
            <div class="detail">Project Gallary</div>
            </a>
        </div>
        <div class="item">
            <a href="#">
            <div class="icon"><i class="fa fa-calculator"></i></div>
            <div class="detail">RA Bill</div>
            </a>
        </div>
        <div class="item">
            <a href="#">
            <div class="icon"><i class="fa fa-usd"></i></div>
            <div class="detail">Price Exclasation</div>
            </a>
        </div>
    </div>
</body>
<script>
    function openSlideMenu(){
		document.getElementById('menu').style.width='250px';
		document.getElementById('container').style.marginleft='250px';
	}
	function closeSlideMenu(){
		document.getElementById('menu').style.width='0';
		document.getElementById('container').style.marginleft='0';
	}
</script>
<div id="main"></div>
</html> a
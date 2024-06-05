<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/5dd0cc1318.js" crossorigin="anonymous"></script>
    <title>Progress</title>
    <style>
        *{ 
            margin: 0;
            padding: 0;
        }
        body{ 
            font-family: Arial, sans-serif;
            background-color: rgb(1, 1, 1);
        }
        /* .container { width:  96%; max-width: 720px; margin: 4% auto;} */
        .container{
            display: flex;
            height: 100%;
        }
        .right{
            flex: 25;
            height: 100;
            background-color: lightgray;
            border-radius: 20px;
        }
        .left{
            flex: 1;
            height: 646px;
        }
        .right .content{
            margin: 10px;
        }
        .right .content h1{
            border-bottom: 1px solid black;
            padding: 5px;
        }
        .right .content p{
            color: black;
            background-color: rgba(237, 255, 253, 0.4);
            padding: 5px;
            margin: 8px;
            font-size: 18px;
            border-radius: 10px;
            margin-top: 20px;
        }
        .right .content p:hover{
            box-shadow: 0 0 50px;
        }
        .right .content a{
            text-decoration: none;
        }
        .left .icon a{
            color: white;
            font-size: 25px;
        }
        .left .icon a i{
            margin: 3px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="left">
        <div class="icon">
            <a href="homee.php"><i style="margin-top: 10px;margin-left:10px;" class="fa-solid fa-house"></i></a><br>
            <!-- <a href=""><i class="fa fa-bar-chart"></i></a><br>
            <a href=""><i class="fa fa-calendar"></i></a><br>
            <a href=""><i class="fa-solid fa-pen-to-square"></i></a><br>
            <a href=""><i class="fa-solid fa-mountain-sun"></i></a><br>
            <a href=""><i class="fa fa-calculator"></i></a><br>
            <a href=""><i class="fa fa-usd"></i></a><br> -->
        </div>
    </div>
    <div class="right">
        <div class="content">
            <center><h1>Progress Table</h1></center>
            <?php
			    $server="localhost";
			    $username="root";
			    $password="";
			    $database="major";
        
			    $con=mysqli_connect($server,$username,$password,$database);
        
			    if (!$con)
			    {
			    	die("failed". mysqli_connect_error());
			    }
            
			    $sql1="show tables from $database LIKE '%month%'";
			    $result=mysqli_query($con,$sql1);
            
			    while ($row = mysqli_fetch_row($result)) 
			    {
			    	echo "<a href='progshow.php?tablename=$row[0]'><p>{$row[0]}</p></a>";
			    }
		    ?>
        </div>
    </div>
</div>
</body>
</html>
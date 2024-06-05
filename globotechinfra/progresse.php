<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the table name is provided
    if (isset($_POST["table_name"]) && !empty($_POST["table_name"])) {
        // Sanitize the table name to prevent SQL injection
        $table_name = $_POST["table_name"];

        // Redirect to another page and pass the table name as a parameter
        header("Location: demo.php?table_name=$table_name");
        exit();
    } else {
        echo "Please enter a table name.";
    }
}
    
?>
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
        .right .content .create{
            padding-top: 15px;
        }
        .right .content .create form{
            font-size: 15px;
            background-color: plum;
            padding: 4px 0;
        }
        .right .content .create form button{
            padding: 5px;
            font-size: 15px;
            cursor: pointer;
            border-radius: 5px;
        }
        .right .content .create form button:hover{
            background-color: #E5B400;
        }
        .right .content .create form input{
            padding: 5px;
            width: 300px;
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
            <a href="homee.php"><i style="margin-bottom: 100px;margin-left:10px;" class="fa-solid fa-house"></i></a><br>
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
            <div class="create">
                <form method="post" action="demo.php">
                <center>Table Name: <input type="text" name="table_name">
                <button type="submit" name="create_table"><i class="fa-solid fa-plus"></i> Create</button></center>
            </form>
            </div>
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
			    	echo "<a href='progshow.php?tablename=$row[0]'><p>{$row[0]}<i class='fa-solid fa-trash-can' style='margin-left:1070px'></i><i class='fa-solid fa-pencil' style='margin-left:20px'></i></p></a>";
			    }
		    ?>
        </div>
    </div>
</div>
</body>
</html>
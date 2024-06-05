<html>
	<head>
        <link rel="shortcut icon" href="logo.png" type="image/x-icon">
		<title>Employee details</title>
		<script src="https://kit.fontawesome.com/5dd0cc1318.js" crossorigin="anonymous"></script>
		<style>
			*{
                margin: 0;
                padding: 0;
            }
			body{
                background-image: linear-gradient(135deg,#50cc7f,#f5d100);
            }
            .box{
                position: relative;
                top:5%;
            }
            .one{
                height: 580px;
                width: 1260px;
                background-image: url(wh.jpg);
                background-size: cover;
                position:absolute;
                top:5%;
                left:2%;
                padding:2px;
            }
            .two{
                height: 580px;
                width: 1260px;
                position:absolute;
                top:5%;
                left:2%;
                padding:2px;
                box-shadow: 0 0 50px;
            }
            .two{
                z-index: 1;
            }
			h1{
                text-align: center;
                font-size: 30px;
                font-family: arial;
            }
            .head{
                padding: 5px;
            }
			p{
                background: #bc9af7;
                padding: 15px 25px;
            }
			.input{
                background: white;
                border: 1px solid white;
                color: black;
            }
			i{
                margin-right: 8px;
                background: black;
                color: white;
                padding: 2px;
            }
            .search i{
                background: white;
                color: black;
                cursor: pointer;
                font-size: 13px;
            }
			table{
                margin-right: auto;
                margin-left: auto;
                margin-top: 15px;
                background: white;
            }
			th{
                background: #E5B400;
            }
		</style>
	</head>
	<body>
        <div class="box">
        <div class="one"></div>
        <div class="two">
		<div class="head"><h1>EMPLOYEE DETAILS</h1></div>
		<p align="center"><i class="fa fa-search"></i>
            <input type="text" class="input" name="search" id="search" size="50" placeholder="Search Employee"><a class="search"><i class="fa-solid fa-magnifying-glass"></i></a>
        </p>
		<table border='2'>
			<tr>
				<th>E_Id</th>
				<th>E_Name</th>
				<th>E_DOB</th>
				<th>E_Gender</th>
				<th>E_Phone</th>
				<th>E_Email</th>
				<th>E_Address</th>
			</tr>
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
	
			$sql="SELECT * FROM `employee`";
			$result=mysqli_query($con,$sql);
	
			$num=mysqli_num_rows($result);
			if($num!=0)
			{		
				while($row=mysqli_fetch_assoc($result))
				{
					echo "
					<tr>
						<td>".$row['E_Id']."</td>
						<td>".$row['E_Name']."</td>
						<td>".$row['E_DOB']."</td>
						<td>".$row['E_Gender']."</td>
						<td>".$row['E_Phone']."</td>
						<td>".$row['E_Email']."</td>
						<td>".$row['E_Address']."</td>
					</tr>";
				}
			}
		?>
		</table>
        </div>
        </div>
    </body>
</html>
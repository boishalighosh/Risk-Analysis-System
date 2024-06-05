<?php
$login=false;
$error=false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$server="localhost";
	$username="root";
	$password="";
	$database="major";
	
	$con=mysqli_connect($server,$username,$password,$database);
	
	if (!$con)
	{
		die("failed".mysqli_connect_error());
	}
	
	$id=$_POST['id'];
	$pass=$_POST['pass'];
	$sql="select * from admin where A_Id='$id' and A_DOB='$pass'";
	
	$result=mysqli_query($con,$sql);
	$num=mysqli_num_rows($result);
	if($num==1)
	{
		$login=true;
		session_start();
		$_SESSION['loggedin']=true;
		$_SESSION['Id']=$Id;
		header("location:homea.php?id=$id");
	}
	else
	{
		$error=true;
	}
}
?>
<html>
	<head>
		<title>Login</title>
		<link rel="shortcut icon" href="logo.png" type="image/x-icon">
		<script src="https://kit.fontawesome.com/5dd0cc1318.js" crossorigin="anonymous"></script>
		<style>
			body{margin:0;padding:0;background:url(login.jpg) no-repeat center center fixed;background-size:cover;}
			.container {color:white;position:absolute;top:25%;left:36%;}
			.container h1 {border-bottom:5px solid green;font-size:35px;}
		</style>
	</head>
	<body>
		<div class="container">
			<h1>LOGIN</h1>
			<form action="logina.php" method="post">
			<table>
				<tr>
					<td><a href="logine.php" style="text-decoration:none;color:white;padding:5px;font-size:20px;font-weight:bold;">Login as employee</a></td>
					<td align="center"><a href="logina.php" style="text-decoration:none;color:white;font-size:20px;font-weight:bold;border-bottom:5px solid green;">Login as admin</a></td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<div class="box">
						<td style="color:white;"><i class="fa fa-user"></i> ID:</td>
						<td><input style="background:lightgray;color:black;border-right:none;" type="text" name="id" id="id" placeholder="Enter Your ID"></td>
					</div>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<div class="box">
						<td style="color:white;"><i class="fa fa-key"></i> PASSWORD:</td>
						<td><input style="background:lightgray;color:black;border-right:none;" type="password" name="pass" id="pass" placeholder="DOB(YYYY/MM/DD)"></td>
					</div>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><button class="btn"><i class="fa fa-sign-in" style="margin-right:8px;"></i>Login</button></td>
				</tr>
			</table>
			</form>
			<?php
				if($error==true)
				{
					echo 'Invalid Id or Password';
				}
			?>
		</div>
	</body>
</html>
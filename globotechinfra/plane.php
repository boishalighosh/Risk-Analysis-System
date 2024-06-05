<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <title>Planning Table</title>
    <style>
        a{
            text-decoration: none;
            background-color: #E5B400;
            color: black;
            padding: 5px;
        }
        a:hover {
            background-color: black;
            color: white;
        }
        p {
            background-color: gray;
            padding: 8px;
        }
        h1 {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        .container {
            display: flex;
        }
        .table-wrapper {
            flex-grow: 1;
            margin-right: 20px;
        }
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
            min-width: 100px;
        }
        th {
            background: #E5B400;
        }
		td {
			height: 50px;
		}
    </style>
</head>
<body>
    <p><a href="planning.php">CREATE</a></p>
    <center><h1>PLANNING</h1></center>
    <div class="container">
    <div class="table-wrapper">
    <table border="1">
        <tr>
            <th>S no.</th>
            <th>Scope of work</th>
            <th>unit</th>
            <th>Quantity</q></th>
    	</tr>
        <tr>
            <td>1</td>
            <td><b>A - Widening and strengthening of existing road</b><br>
                	(1) Earthwork upto top of the sub-grade</td>
            <td>KM</td>
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
	
			    $sql="SELECT Quantity FROM `planning` where id=1";
			    $result=mysqli_query($con,$sql);
	
			    $num=mysqli_num_rows($result);
			    if($num!=0)
			    {	
                    $row=mysqli_fetch_assoc($result);
                    echo "<td>".$row['Quantity']."</td>";
                }
            ?>
        </tr>
        <tr>
            <td>2</td>
            <td>(2)Sub-Base Course. (GSB)</td>
            <td>KM</td>
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
	
			    $sql="SELECT Quantity FROM `planning` where id=2";
			    $result=mysqli_query($con,$sql);
	
			    $num=mysqli_num_rows($result);
			    if($num!=0)
			    {	
                    $row=mysqli_fetch_assoc($result);
                    echo "<td>".$row['Quantity']."</td>";
                }
            ?>
        </tr>
        <tr>
            <td>3</td>
            <td>(3) Non Bituminious Base course (WMM)</td>
            <td>KM</td>
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
	
			    $sql="SELECT Quantity FROM `planning` where id=3";
			    $result=mysqli_query($con,$sql);
	
			    $num=mysqli_num_rows($result);
			    if($num!=0)
			    {	
                    $row=mysqli_fetch_assoc($result);
                    echo "<td>".$row['Quantity']."</td>";
                }
            ?>
        </tr>
        <tr>
            <td>4</td>
            <td>(4)Bituminious Base course (DBM)</td>
            <td>KM</td>
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
	
			    $sql="SELECT Quantity FROM `planning` where id=4";
			    $result=mysqli_query($con,$sql);
	
			    $num=mysqli_num_rows($result);
			    if($num!=0)
			    {	
                    $row=mysqli_fetch_assoc($result);
                    echo "<td>".$row['Quantity']."</td>";
                }
            ?>
        </tr>
        <tr>
            <td>5</td>
            <td>(5)Wearing coat (BC)</td>
            <td>KM</td>
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
	
			    $sql="SELECT Quantity FROM `planning` where id=5";
			    $result=mysqli_query($con,$sql);
	
			    $num=mysqli_num_rows($result);
			    if($num!=0)
			    {	
                    $row=mysqli_fetch_assoc($result);
                    echo "<td>".$row['Quantity']."</td>";
                }
            ?>
        </tr>
        <tr>
            <td>6</td>
            <td>(6)Hard shoulder</td>
            <td>KM</td>
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
	
			    $sql="SELECT Quantity FROM `planning` where id=6";
			    $result=mysqli_query($con,$sql);
	
			    $num=mysqli_num_rows($result);
			    if($num!=0)
			    {	
                    $row=mysqli_fetch_assoc($result);
                    echo "<td>".$row['Quantity']."</td>";
                }
            ?>
        </tr>
        <tr>
            <td>7</td>
            <td><b>B - New 2-lane Realignment</b><br>
                	(1) Earthwork upto top of the sub-grade </td>
            <td>KM</td>
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
	
			    $sql="SELECT Quantity FROM `planning` where id=7";
			    $result=mysqli_query($con,$sql);
	
			    $num=mysqli_num_rows($result);
			    if($num!=0)
			    {	
                    $row=mysqli_fetch_assoc($result);
                    echo "<td>".$row['Quantity']."</td>";
                }
            ?>
        </tr>
        <tr>
            <td>8</td>
            <td>(2)Sub-Base Course. (GSB)</td>
            <td>KM</td>
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
	
			    $sql="SELECT Quantity FROM `planning` where id=8";
			    $result=mysqli_query($con,$sql);
	
			    $num=mysqli_num_rows($result);
			    if($num!=0)
			    {	
                    $row=mysqli_fetch_assoc($result);
                    echo "<td>".$row['Quantity']."</td>";
                }
            ?>
        </tr>
        <tr>
            <td>9</td>
            <td>(3) Non Bituminious Base course (WMM)</td>
            <td>KM</td>
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
	
			    $sql="SELECT Quantity FROM `planning` where id=9";
			    $result=mysqli_query($con,$sql);
	
			    $num=mysqli_num_rows($result);
			    if($num!=0)
			    {	
                    $row=mysqli_fetch_assoc($result);
                    echo "<td>".$row['Quantity']."</td>";
                }
            ?>
        </tr>
        <tr>
            <td>10</td>
            <td>(4)Bituminious base course (DBM)</td>
            <td>KM</td>
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
	
			    $sql="SELECT Quantity FROM `planning` where id=10";
			    $result=mysqli_query($con,$sql);
	
			    $num=mysqli_num_rows($result);
			    if($num!=0)
			    {	
                    $row=mysqli_fetch_assoc($result);
                    echo "<td>".$row['Quantity']."</td>";
                }
            ?>
        </tr>
        <tr>
            <td>11</td>
            <td>(5)Wearing coat (BC)</td>
            <td>KM</td>
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
	
			    $sql="SELECT Quantity FROM `planning` where id=11";
			    $result=mysqli_query($con,$sql);
	
			    $num=mysqli_num_rows($result);
			    if($num!=0)
			    {	
                    $row=mysqli_fetch_assoc($result);
                    echo "<td>".$row['Quantity']."</td>";
                }
            ?>
        </tr>
        <tr>
            <td>12</td>
            <td>(6)Hard shoulder</td>
            <td>KM</td>
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
	
			    $sql="SELECT Quantity FROM `planning` where id=12";
			    $result=mysqli_query($con,$sql);
	
			    $num=mysqli_num_rows($result);
			    if($num!=0)
			    {	
                    $row=mysqli_fetch_assoc($result);
                    echo "<td>".$row['Quantity']."</td>";
                }
            ?>
        </tr>
        <tr>
            <td>13</td>
            <td><b>D- Re-construction and New culverts</b><br>
                	(1) Culvert's</td>
            <td>Nos.</td>
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
	
			    $sql="SELECT Quantity FROM `planning` where id=13";
			    $result=mysqli_query($con,$sql);
	
			    $num=mysqli_num_rows($result);
			    if($num!=0)
			    {	
                    $row=mysqli_fetch_assoc($result);
                    echo "<td>".$row['Quantity']."</td>";
                }
            ?>
        </tr>
        <tr>
            <td>14</td>
            <td><b>Major Bridge (length >60m Work)</b><br>
                    (1)Foundation</td>
            <td>Nos.</td>
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
	
			    $sql="SELECT Quantity FROM `planning` where id=14";
			    $result=mysqli_query($con,$sql);
	
			    $num=mysqli_num_rows($result);
			    if($num!=0)
			    {	
                    $row=mysqli_fetch_assoc($result);
                    echo "<td>".$row['Quantity']."</td>";
                }
            ?>
        </tr>
        <tr>
            <td>15</td>
            <td>(2) Sub-Stucture</td>
            <td>Nos.</td>
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
	
			    $sql="SELECT Quantity FROM `planning` where id=15";
			    $result=mysqli_query($con,$sql);
	
			    $num=mysqli_num_rows($result);
			    if($num!=0)
			    {	
                    $row=mysqli_fetch_assoc($result);
                    echo "<td>".$row['Quantity']."</td>";
                }
            ?>
        </tr>
        <tr>
            <td>16</td>
            <td>(3) Super Structure (including bearing)</td>
            <td>Nos.</td>
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
	
			    $sql="SELECT Quantity FROM `planning` where id=16";
			    $result=mysqli_query($con,$sql);
	
			    $num=mysqli_num_rows($result);
			    if($num!=0)
			    {	
                    $row=mysqli_fetch_assoc($result);
                    echo "<td>".$row['Quantity']."</td>";
                }
            ?>
        </tr>
        <tr>
            <td>17</td>
            <td>(4) Approaces (including retaining wall, protection work)</td>
            <td>Nos.</td>
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
	
			    $sql="SELECT Quantity FROM `planning` where id=17";
			    $result=mysqli_query($con,$sql);
	
			    $num=mysqli_num_rows($result);
			    if($num!=0)
			    {	
                    $row=mysqli_fetch_assoc($result);
                    echo "<td>".$row['Quantity']."</td>";
                }
            ?>
        </tr>
        <tr>
            <td>18</td>
            <td><b>Other works</b><br>
                	side drains</td>
            <td>KM</td>
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
	
			    $sql="SELECT Quantity FROM `planning` where id=18";
			    $result=mysqli_query($con,$sql);
	
			    $num=mysqli_num_rows($result);
			    if($num!=0)
			    {	
                    $row=mysqli_fetch_assoc($result);
                    echo "<td>".$row['Quantity']."</td>";
                }
            ?>
        </tr>
        <tr>
            <td>19</td>
            <td>(a) Pavement mrking </td>
            <td>KM</td>
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
	
			    $sql="SELECT Quantity FROM `planning` where id=19";
			    $result=mysqli_query($con,$sql);
	
			    $num=mysqli_num_rows($result);
			    if($num!=0)
			    {	
                    $row=mysqli_fetch_assoc($result);
                    echo "<td>".$row['Quantity']."</td>";
                }
            ?>
        </tr>
        <tr>
            <td>20</td>
            <td>(b) Crash barrier/ W mattle crash barrier</td>
            <td>KM</td>
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
	
			    $sql="SELECT Quantity FROM `planning` where id=20";
			    $result=mysqli_query($con,$sql);
	
			    $num=mysqli_num_rows($result);
			    if($num!=0)
			    {	
                    $row=mysqli_fetch_assoc($result);
                    echo "<td>".$row['Quantity']."</td>";
                }
            ?>
        </tr>
        <tr>
            <td>21</td>
            <td>(c) Road traffic sign</td>
            <td>KM</td>
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
	
			    $sql="SELECT Quantity FROM `planning` where id=21";
			    $result=mysqli_query($con,$sql);
	
			    $num=mysqli_num_rows($result);
			    if($num!=0)
			    {	
                    $row=mysqli_fetch_assoc($result);
                    echo "<td>".$row['Quantity']."</td>";
                }
            ?>
        </tr>
        <tr>
            <td>22</td>
            <td>(d) road boundary stone,km Stones, 5th km Stone and hectometer stone, rumble strip other item etc.</td>
            <td>KM</td>
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
	
			    $sql="SELECT Quantity FROM `planning` where id=22";
			    $result=mysqli_query($con,$sql);
	
			    $num=mysqli_num_rows($result);
			    if($num!=0)
			    {	
                    $row=mysqli_fetch_assoc($result);
                    echo "<td>".$row['Quantity']."</td>";
                }
            ?>
        </tr>
        <tr>
            <td>23</td>
            <td>(e)Traffic Blinker LED delineator, studs, reflective, pavement marker,tree reflector.</td>
            <td>KM</td>
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
	
			    $sql="SELECT Quantity FROM `planning` where id=23";
			    $result=mysqli_query($con,$sql);
	
			    $num=mysqli_num_rows($result);
			    if($num!=0)
			    {	
                    $row=mysqli_fetch_assoc($result);
                    echo "<td>".$row['Quantity']."</td>";
                }
            ?>
        </tr>
        <tr>
            <td>24</td>
            <td>(b)Junction (Major&Minor)</td>
            <td>Nos.</td>
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
	
			    $sql="SELECT Quantity FROM `planning` where id=24";
			    $result=mysqli_query($con,$sql);
	
			    $num=mysqli_num_rows($result);
			    if($num!=0)
			    {	
                    $row=mysqli_fetch_assoc($result);
                    echo "<td>".$row['Quantity']."</td>";
                }
            ?>
        </tr>
        <tr>
            <td>25</td>
            <td>(5) road side plantation</td>
            <td>KM</td>
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
	
			    $sql="SELECT Quantity FROM `planning` where id=25";
			    $result=mysqli_query($con,$sql);
	
			    $num=mysqli_num_rows($result);
			    if($num!=0)
			    {	
                    $row=mysqli_fetch_assoc($result);
                    echo "<td>".$row['Quantity']."</td>";
                }
            ?>
        </tr>
        <tr>
            <td>26</td>
            <td>(a) Hydro seeding </td>
            <td>sqm</td>
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
	
			    $sql="SELECT Quantity FROM `planning` where id=26";
			    $result=mysqli_query($con,$sql);
	
			    $num=mysqli_num_rows($result);
			    if($num!=0)
			    {	
                    $row=mysqli_fetch_assoc($result);
                    echo "<td>".$row['Quantity']."</td>";
                }
            ?>
        </tr>
        <tr>
            <td>27</td>
            <td>(b) Seeding and mulchuing with jute net</td>
            <td>sqm</td>
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
	
			    $sql="SELECT Quantity FROM `planning` where id=27";
			    $result=mysqli_query($con,$sql);
	
			    $num=mysqli_num_rows($result);
			    if($num!=0)
			    {	
                    $row=mysqli_fetch_assoc($result);
                    echo "<td>".$row['Quantity']."</td>";
                }
            ?>
        </tr>
        <tr>
            <td>28</td>
            <td>(c) catch water drain </td>
            <td>KM</td>
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
	
			    $sql="SELECT Quantity FROM `planning` where id=28";
			    $result=mysqli_query($con,$sql);
	
			    $num=mysqli_num_rows($result);
			    if($num!=0)
			    {	
                    $row=mysqli_fetch_assoc($result);
                    echo "<td>".$row['Quantity']."</td>";
                }
            ?>
        </tr>
        <tr>
            <td>29</td>
            <td>(d) Retaing structure on valley side</td>
            <td>RM</td>
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
	
			    $sql="SELECT Quantity FROM `planning` where id=29";
			    $result=mysqli_query($con,$sql);
	
			    $num=mysqli_num_rows($result);
			    if($num!=0)
			    {	
                    $row=mysqli_fetch_assoc($result);
                    echo "<td>".$row['Quantity']."</td>";
                }
            ?>
        </tr>
        <tr>
            <td>30</td>
            <td>(e) Reinforced earth wall</td>
            <td>RM</td>
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
	
			    $sql="SELECT Quantity FROM `planning` where id=30";
			    $result=mysqli_query($con,$sql);
	
			    $num=mysqli_num_rows($result);
			    if($num!=0)
			    {	
                    $row=mysqli_fetch_assoc($result);
                    echo "<td>".$row['Quantity']."</td>";
                }
            ?>
        </tr>
        <tr>
            <td>31</td>
            <td>(f) Breast wall </td>
            <td>RM</td>
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
	
			    $sql="SELECT Quantity FROM `planning` where id=31";
			    $result=mysqli_query($con,$sql);
	
			    $num=mysqli_num_rows($result);
			    if($num!=0)
			    {	
                    $row=mysqli_fetch_assoc($result);
                    echo "<td>".$row['Quantity']."</td>";
                }
            ?>
        </tr>
        <tr>
            <td>32</td>
            <td>(g) Sub- surface drain</td>
            <td>RM</td>
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
	
			    $sql="SELECT Quantity FROM `planning` where id=32";
			    $result=mysqli_query($con,$sql);
	
			    $num=mysqli_num_rows($result);
			    if($num!=0)
			    {	
                    $row=mysqli_fetch_assoc($result);
                    echo "<td>".$row['Quantity']."</td>";
                }
            ?>
        </tr>
        <tr>
            <td>33</td>
            <td>(h) Parapet wall</td>
            <td>RM</td>
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
	
			    $sql="SELECT Quantity FROM `planning` where id=33";
			    $result=mysqli_query($con,$sql);
	
			    $num=mysqli_num_rows($result);
			    if($num!=0)
			    {	
                    $row=mysqli_fetch_assoc($result);
                    echo "<td>".$row['Quantity']."</td>";
                }
            ?>
        </tr>
        <tr>
            <td colspan="5">Monthly Progress in %</td>
        </tr>
        <tr>
            <td colspan="5">Monthly cumulative Progress in %</td>
        </tr>
    </table>
    </div>
    <div class="table-wrapper">
    <?php
        $servername = "localhost"; 
        $username = "root"; 
        $password = ""; 
        $dbname = "major";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql_fetch_columns = "SHOW COLUMNS FROM planning";
        $result_columns = $conn->query($sql_fetch_columns);
        $columns = array(); // Array to store column names
        if ($result_columns->num_rows > 0) 
        {
            while ($row = $result_columns->fetch_assoc()) {
            $columnName = $row['Field'];
                if ($columnName !== 'id' && $columnName !== 'Quantity') 
                { 
                    $columns[] = $columnName; 
                }
            }
        } 
        else 
        {
            echo "No columns found in the table.";
        }


        $sql_fetch_data = "SELECT " . implode(",", $columns) . " FROM planning";
        $result_data = $conn->query($sql_fetch_data);

        if ($result_data->num_rows > 0) 
        {
            echo "<table border='1'><tr>";
            foreach ($columns as $column) 
            {
                echo "<th>$column</th>";
            }
            echo "</tr>";

        while ($row = $result_data->fetch_assoc()) 
        {
            echo "<tr>";
            foreach ($columns as $column) 
            {
                echo "<td>" . $row[$column] . "</td>"; 
            }
            echo "</tr>";
        }
        echo "</table>";
        } 
        else 
        {
            echo "No data found in the table.";
        }

        $conn->close();
    ?>
    </div>
    </div>
</body>
</html>
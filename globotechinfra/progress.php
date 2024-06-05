<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5dd0cc1318.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <title>Progress</title>
    <style>
        body {
            margin: 20px;
            padding-left: 150px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        th{
            background-color: #E5B400;
        }
        p{
            font-size: 20px;
            font-weight: bold;
            padding-left: 350px;
        }
    </style>
</head>
<body>
<?php
if (isset($_GET["table_name"]) && !empty($_GET["table_name"])) {

    $columnName = $_GET["table_name"];

    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "major"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo"<p>$columnName</p>";

    $rowCount = 0;
    $sql_fetch_data = "SELECT id, $columnName FROM planning WHERE $columnName > 0";
    $result_data = $conn->query($sql_fetch_data);
    if ($result_data->num_rows > 0) {
    
        echo "<form method='post'>";
        echo "<table border='1'><tr><th>id</th><th>Item Description</th><th>Target</th><th>Achieved</th><th>Shortfall</th></tr>";
    
        while ($row = $result_data->fetch_assoc()) {
            $id = $row['id'];
            $customStatement = "";
        
            if ($id != 34 && $id != 35) {
                $rowCount++;
                if ($id == 1) {
                    $customStatement = "A - (1) Earthwork upto top of the sub-grade";
                } elseif ($id == 2) {
                    $customStatement = "A - (2) Sub-Base Course. (GSB)";
                } elseif ($id == 3) {
                    $customStatement = "A - (3) Non Bituminious Base course (WMM)";
                } elseif ($id == 4) {
                    $customStatement = "A - (4) Bituminious Base course (DBM)";
                } elseif ($id == 5) {
                    $customStatement = "A - (5) Wearing coat (BC)";
                } elseif ($id == 6) {
                    $customStatement = "A - (6) Hard shoulder";
                } elseif ($id == 7) {
                    $customStatement = "B - (1) Earthwork upto top of the sub-grade";
                } elseif ($id == 8) {
                    $customStatement = "B - (2) Sub-Base Course. (GSB)";
                } elseif ($id == 9) {
                    $customStatement = "B - (3) Non Bituminious Base course (WMM)";
                } elseif ($id == 10) {
                    $customStatement = "B - (4) Bituminious base course (DBM)";
                } elseif ($id == 11) {
                    $customStatement = "B - (5) Wearing coat (BC)";
                } elseif ($id == 12) {
                    $customStatement = "B - (6) Hard shoulder";
                } elseif ($id == 13) {
                    $customStatement = "D - (1) Culvert's";
                } elseif ($id == 14) {
                    $customStatement = "(1)Foundation";
                } elseif ($id == 15) {
                    $customStatement = "(2) Sub-Stucture";
                } elseif ($id == 16) {
                    $customStatement = "(3) Super Structure (including bearing)";
                } elseif ($id == 17) {
                    $customStatement = "(4) Approaces (including retaining wall, protection work)";
                } elseif ($id == 18) {
                    $customStatement = "Road side drains";
                } elseif ($id == 19) {
                    $customStatement = "(a) Pavement mrking ";
                } elseif ($id == 20) {
                    $customStatement = "(b) Crash barrier/ W mattle crash barrier";
                } elseif ($id == 21) {
                    $customStatement = "(c) Road traffic sign";
                } elseif ($id == 22) {
                    $customStatement = "(d) road boundary stone,km Stones, 5th km Stone and hectometer stone, rumble strip other item etc.";
                } elseif ($id == 23) {
                    $customStatement = "(e)Traffic Blinker LED delineator, studs, reflective, pavement marker,tree reflector.";
                } elseif ($id == 24) {
                    $customStatement = "(b)Junction (Major&Minor)";
                } elseif ($id == 25) {
                    $customStatement = "(5) road side plantation";
                } elseif ($id == 26) {
                    $customStatement = "(a) Hydro seeding";
                } elseif ($id == 27) {
                    $customStatement = "(b) Seeding and mulchuing with jute net";
                } elseif ($id == 28) {
                    $customStatement = "(c) catch water drain";
                } elseif ($id == 29) {
                    $customStatement = "(d) Retaing structure on valley side";
                } elseif ($id == 30) {
                    $customStatement = "(e) Reinforced earth wall";
                } elseif ($id == 31) {
                    $customStatement = "(f) Breast wall";
                } elseif ($id == 32) {
                    $customStatement = "(g) Sub- surface drain";
                } elseif ($id == 33) {
                    $customStatement = "(h) Parapet wall";
                }
            }
            if ($id != 34 && $id != 35) {
                echo "<tr><td>". $rowCount ."</td><td>$customStatement</td><td>". $row[$columnName] . "</td><td><input type=text name=achieved[$id]></td><td><input type=text name=shortfall[$id]></td><td><button type=submit name=save[$id]>Save</button></td></tr>";
            }
        }
        echo "</table>";
        echo "</form>";
        
    }
    else {
        echo "No data found in the table.";
    }

    if (isset($_POST['save'])) {

        $achieved = $_POST['achieved'];
        $shortfall = $_POST['shortfall'];

        foreach ($_POST['save'] as $id => $value) {
            $achievedValue = $achieved[$id];
            $shortfallValue = $shortfall[$id];

            $sql_insert = "INSERT INTO $columnName (Achieved, Shortfall) VALUES ('$achievedValue', '$shortfallValue')";

            if ($conn->query($sql_insert) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql_insert . "<br>" . $conn->error;
            }
        }
    }

$conn->close();

}

?>
<?php

    
?>
</body>
</html>
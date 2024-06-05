<?php
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "major"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save'])) {
        $check_table_query = "SHOW TABLES LIKE 'planning'";
        $result = $conn->query($check_table_query);
        if ($result->num_rows == 0) 
            $sql_create_table = "CREATE TABLE planning (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  
                                                        Quantity VARCHAR(255) NOT NULL,
                                                        Wtg VARCHAR(255) NOT NULL)";
            if ($conn->query($sql_create_table) === TRUE) {
                $sql_insert_data = "INSERT INTO planning (Quantity, Wtg) VALUES (?, ?)";
                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("ss", $p1, $q1);
                $p1 = $_POST['p1'];
                $q1 = $_POST['q1'];
                if (!$stmt->execute()) {
                    echo "Error inserting data: " . $stmt->error;
                } 

                $sql_insert_data = "INSERT INTO planning (Quantity, Wtg) VALUES (?, ?)";
                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("ss", $p2, $q2);
                $p2 = $_POST['p2'];
                $q2 = $_POST['q2'];
                if (!$stmt->execute()) {
                    echo "Error inserting data: " . $stmt->error;
                } 

                $sql_insert_data = "INSERT INTO planning (Quantity, Wtg) VALUES (?, ?)";
                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("ss", $p3, $q3);
                $p3 = $_POST['p3'];
                $q3 = $_POST['q3'];
                if (!$stmt->execute()) {
                    echo "Error inserting data: " . $stmt->error;
                } 

                $sql_insert_data = "INSERT INTO planning (Quantity, Wtg) VALUES (?, ?)";
                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("ss", $p4, $q4);
                $p4 = $_POST['p4'];
                $q4 = $_POST['q4'];
                if (!$stmt->execute()) {
                    echo "Error inserting data: " . $stmt->error;
                } 

                $sql_insert_data = "INSERT INTO planning (Quantity, Wtg) VALUES (?, ?)";
                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("ss", $p5, $q5);
                $p5 = $_POST['p5'];
                $q5 = $_POST['q5'];
                if (!$stmt->execute()) {
                    echo "Error inserting data: " . $stmt->error;
                }
                
                $sql_insert_data = "INSERT INTO planning (Quantity, Wtg) VALUES (?, ?)";
                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("ss", $p6, $q6);
                $p6 = $_POST['p6'];
                $q6 = $_POST['q6'];
                if (!$stmt->execute()) {
                    echo "Error inserting data: " . $stmt->error;
                } 

                $sql_insert_data = "INSERT INTO planning (Quantity, Wtg) VALUES (?, ?)";
                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("ss", $p7, $q7);
                $p7 = $_POST['p7'];
                $q7 = $_POST['q7'];
                if (!$stmt->execute()) {
                    echo "Error inserting data: " . $stmt->error;
                } 

                $sql_insert_data = "INSERT INTO planning (Quantity, Wtg) VALUES (?, ?)";
                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("ss", $p8, $q8);
                $p8 = $_POST['p8'];
                $q8 = $_POST['q8'];
                if (!$stmt->execute()) {
                    echo "Error inserting data: " . $stmt->error;
                } 

                $sql_insert_data = "INSERT INTO planning (Quantity, Wtg) VALUES (?, ?)";
                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("ss", $p9, $q9);
                $p9 = $_POST['p9'];
                $q9 = $_POST['q9'];
                if (!$stmt->execute()) {
                    echo "Error inserting data: " . $stmt->error;
                }
                
                $sql_insert_data = "INSERT INTO planning (Quantity, Wtg) VALUES (?, ?)";
                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("ss", $p10, $q10);
                $p10 = $_POST['p10'];
                $q10 = $_POST['q10'];
                if (!$stmt->execute()) {
                    echo "Error inserting data: " . $stmt->error;
                }
                
                $sql_insert_data = "INSERT INTO planning (Quantity, Wtg) VALUES (?, ?)";
                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("ss", $p11, $q11);
                $p11 = $_POST['p11'];
                $q11 = $_POST['q11'];
                if (!$stmt->execute()) {
                    echo "Error inserting data: " . $stmt->error;
                }

                $sql_insert_data = "INSERT INTO planning (Quantity, Wtg) VALUES (?, ?)";
                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("ss", $p12, $q12);
                $p12 = $_POST['p12'];
                $q12 = $_POST['q12'];
                if (!$stmt->execute()) {
                    echo "Error inserting data: " . $stmt->error;
                }

                $sql_insert_data = "INSERT INTO planning (Quantity, Wtg) VALUES (?, ?)";
                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("ss", $p13, $q13);
                $p13 = $_POST['p13'];
                $q13 = $_POST['q13'];
                if (!$stmt->execute()) {
                    echo "Error inserting data: " . $stmt->error;
                }

                $sql_insert_data = "INSERT INTO planning (Quantity, Wtg) VALUES (?, ?)";
                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("ss", $p14, $q14);
                $p14 = $_POST['p14'];
                $q14 = $_POST['q14'];
                if (!$stmt->execute()) {
                    echo "Error inserting data: " . $stmt->error;
                }

                $sql_insert_data = "INSERT INTO planning (Quantity, Wtg) VALUES (?, ?)";
                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("ss", $p15, $q15);
                $p15 = $_POST['p15'];
                $q15 = $_POST['q15'];
                if (!$stmt->execute()) {
                    echo "Error inserting data: " . $stmt->error;
                }

                $sql_insert_data = "INSERT INTO planning (Quantity, Wtg) VALUES (?, ?)";
                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("ss", $p16, $q16);
                $p16 = $_POST['p16'];
                $q16 = $_POST['q16'];
                if (!$stmt->execute()) {
                    echo "Error inserting data: " . $stmt->error;
                }

                $sql_insert_data = "INSERT INTO planning (Quantity, Wtg) VALUES (?, ?)";
                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("ss", $p17, $q17);
                $p17 = $_POST['p17'];
                $q17 = $_POST['q17'];
                if (!$stmt->execute()) {
                    echo "Error inserting data: " . $stmt->error;
                }

                $sql_insert_data = "INSERT INTO planning (Quantity, Wtg) VALUES (?, ?)";
                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("ss", $p18, $q18);
                $p18 = $_POST['p18'];
                $q18 = $_POST['q18'];
                if (!$stmt->execute()) {
                    echo "Error inserting data: " . $stmt->error;
                }

                $sql_insert_data = "INSERT INTO planning (Quantity, Wtg) VALUES (?, ?)";
                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("ss", $p19, $q19);
                $p19 = $_POST['p19'];
                $q19 = $_POST['q19'];
                if (!$stmt->execute()) {
                    echo "Error inserting data: " . $stmt->error;
                }

                $sql_insert_data = "INSERT INTO planning (Quantity, Wtg) VALUES (?, ?)";
                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("ss", $p20, $q20);
                $p20 = $_POST['p20'];
                $q20 = $_POST['q20'];
                if (!$stmt->execute()) {
                    echo "Error inserting data: " . $stmt->error;
                }

                $sql_insert_data = "INSERT INTO planning (Quantity, Wtg) VALUES (?, ?)";
                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("ss", $p21, $q21);
                $p21 = $_POST['p21'];
                $q21 = $_POST['q21'];
                if (!$stmt->execute()) {
                    echo "Error inserting data: " . $stmt->error;
                }

                $sql_insert_data = "INSERT INTO planning (Quantity, Wtg) VALUES (?, ?)";
                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("ss", $p22, $q22);
                $p22 = $_POST['p22'];
                $q22 = $_POST['q22'];
                if (!$stmt->execute()) {
                    echo "Error inserting data: " . $stmt->error;
                }

                $sql_insert_data = "INSERT INTO planning (Quantity, Wtg) VALUES (?, ?)";
                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("ss", $p23, $q23);
                $p23 = $_POST['p23'];
                $q23 = $_POST['q23'];
                if (!$stmt->execute()) {
                    echo "Error inserting data: " . $stmt->error;
                }

                $sql_insert_data = "INSERT INTO planning (Quantity, Wtg) VALUES (?, ?)";
                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("ss", $p24, $q24);
                $p24 = $_POST['p24'];
                $q24 = $_POST['q24'];
                if (!$stmt->execute()) {
                    echo "Error inserting data: " . $stmt->error;
                }

                $sql_insert_data = "INSERT INTO planning (Quantity, Wtg) VALUES (?, ?)";
                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("ss", $p25, $q25);
                $p25 = $_POST['p25'];
                $q25 = $_POST['q25'];
                if (!$stmt->execute()) {
                    echo "Error inserting data: " . $stmt->error;
                }

                $sql_insert_data = "INSERT INTO planning (Quantity, Wtg) VALUES (?, ?)";
                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("ss", $p26, $q26);
                $p26 = $_POST['p26'];
                $q26 = $_POST['q26'];
                if (!$stmt->execute()) {
                    echo "Error inserting data: " . $stmt->error;
                }

                $sql_insert_data = "INSERT INTO planning (Quantity, Wtg) VALUES (?, ?)";
                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("ss", $p27, $q27);
                $p27 = $_POST['p27'];
                $q27 = $_POST['q27'];
                if (!$stmt->execute()) {
                    echo "Error inserting data: " . $stmt->error;
                }

                $sql_insert_data = "INSERT INTO planning (Quantity, Wtg) VALUES (?, ?)";
                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("ss", $p28, $q28);
                $p28 = $_POST['p28'];
                $q28 = $_POST['q28'];
                if (!$stmt->execute()) {
                    echo "Error inserting data: " . $stmt->error;
                }

                $sql_insert_data = "INSERT INTO planning (Quantity, Wtg) VALUES (?, ?)";
                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("ss", $p29, $q29);
                $p29 = $_POST['p29'];
                $q29 = $_POST['q29'];
                if (!$stmt->execute()) {
                    echo "Error inserting data: " . $stmt->error;
                }

                $sql_insert_data = "INSERT INTO planning (Quantity, Wtg) VALUES (?, ?)";
                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("ss", $p30, $q30);
                $p30 = $_POST['p30'];
                $q30 = $_POST['q30'];
                if (!$stmt->execute()) {
                    echo "Error inserting data: " . $stmt->error;
                }

                $sql_insert_data = "INSERT INTO planning (Quantity, Wtg) VALUES (?, ?)";
                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("ss", $p31, $q31);
                $p31 = $_POST['p31'];
                $q31 = $_POST['q31'];
                if (!$stmt->execute()) {
                    echo "Error inserting data: " . $stmt->error;
                }

                $sql_insert_data = "INSERT INTO planning (Quantity, Wtg) VALUES (?, ?)";
                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("ss", $p32, $q32);
                $p32 = $_POST['p32'];
                $q32 = $_POST['q32'];
                if (!$stmt->execute()) {
                    echo "Error inserting data: " . $stmt->error;
                }

                $sql_insert_data = "INSERT INTO planning (Quantity, Wtg) VALUES (?, ?)";
                $stmt = $conn->prepare($sql_insert_data);
                $stmt->bind_param("ss", $p33, $q33);
                $p33 = $_POST['p33'];
                $q33 = $_POST['q33'];
                if (!$stmt->execute()) {
                    echo "Error inserting data: " . $stmt->error;
                }

                $sql="INSERT INTO `planning` (`Quantity`, `Wtg`) VALUES (0,0)";
	            $result=mysqli_query($conn,$sql);

                $sql="INSERT INTO `planning` (`Quantity`, `Wtg`) VALUES (0,0)";
	            $result=mysqli_query($conn,$sql);
            }
            else {
                echo "Error creating table: " . $conn->error;
            }
        
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addColumn'])) {
        $columnName = $_POST['columnName'];
        $sql_alter_table = "ALTER TABLE planning ADD $columnName VARCHAR(255)";

        if ($conn->query($sql_alter_table) === TRUE) {

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=1";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d1);
            $d1 = $_POST['d1'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=2";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d2);
            $d2 = $_POST['d2'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=3";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d3);
            $d3 = $_POST['d3'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=4";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d4);
            $d4 = $_POST['d4'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=5";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d5);
            $d5 = $_POST['d5'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=6";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d6);
            $d6 = $_POST['d6'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=7";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d7);
            $d7 = $_POST['d7'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=8";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d8);
            $d8 = $_POST['d8'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=9";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d9);
            $d9 = $_POST['d9'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=10";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d10);
            $d10 = $_POST['d10'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=11";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d11);
            $d11 = $_POST['d11'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=12";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d12);
            $d12 = $_POST['d12'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=13";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d13);
            $d13 = $_POST['d13'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=14";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d14);
            $d14 = $_POST['d14'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=15";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d15);
            $d15 = $_POST['d15'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=16";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d16);
            $d16 = $_POST['d16'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=17";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d17);
            $d17 = $_POST['d17'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=18";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d18);
            $d18 = $_POST['d18'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=19";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d19);
            $d19 = $_POST['d19'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=20";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d20);
            $d20 = $_POST['d20'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=21";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d21);
            $d21 = $_POST['d21'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=22";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d22);
            $d22 = $_POST['d22'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=23";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d23);
            $d23 = $_POST['d23'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=24";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d24);
            $d24 = $_POST['d24'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=25";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d25);
            $d25 = $_POST['d25'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=26";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d26);
            $d26 = $_POST['d26'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=27";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d27);
            $d27 = $_POST['d27'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=28";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d28);
            $d28 = $_POST['d28'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=29";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d29);
            $d29 = $_POST['d29'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=30";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d30);
            $d30 = $_POST['d30'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=31";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d31);
            $d31 = $_POST['d31'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=32";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d32);
            $d32 = $_POST['d32'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=33";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d33);
            $d33 = $_POST['d33'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=34";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d34);
            $d34 = $_POST['d34'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

            $sql_insert_data = "UPDATE planning SET $columnName =? WHERE id=35";
            $stmt = $conn->prepare($sql_insert_data);
            $stmt->bind_param("s",$d35);
            $d35 = $_POST['d35'];
            if (!$stmt->execute()) {
                echo "Error inserting data: " . $stmt->error;
            }

        }
        else {
            echo "Error: " . $sql_alter_table . "<br>" . $conn->error;
        }
    }

    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5dd0cc1318.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <title>Planning</title>
    <style>
        th {
            background-color: #E5B400;
        }
        input {
            border: transparent;
        }
        button {
            background-color: yellowgreen;
            cursor: pointer;
            padding: 4px;
            margin: 4px;
            border-radius: 5px;
        }
        button:hover {
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <table id="myTable" border="1">
            <thead>
                <tr>
                    <th>S no.</th>
                    <th>Scope of work</th>
                    <th>unit</th>
                    <th>Quantity</q></th>
                    <th>Wtg(%)</th>
                    <th>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <input type="text" name="columnName" id="columnNameInput" placeholder="Enter column name">
                        <button type="submit" name="addColumn">Save Column</button>
                    </form>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td  colspan="4">A - Widening and strengthening of existing road</td>
                    <td colspan="20"></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>(1) Earthwork upto top of the sub-grade</td>
                    <td>KM</td>
                    <td><input type="text" name="p1"></td>
                    <td><input type="text" name="q1"></td>
                    <td><input type="text" name="d1"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>(2)Sub-Base Course. (GSB)</td>
                    <td>KM</td>
                    <td><input type="text" name="p2"></td>
                    <td><input type="text" name="q2"></td>
                    <td><input type="text" name="d2"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>(3) Non Bituminious Base course (WMM)</td>
                    <td>KM</td>
                    <td><input type="text" name="p3"></td>
                    <td><input type="text" name="q3"></td>
                    <td><input type="text" name="d3"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>(4)Bituminious Base course (DBM)</td>
                    <td>KM</td>
                    <td><input type="text" name="p4"></td>
                    <td><input type="text" name="q4"></td>
                    <td><input type="text" name="d4"></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>(5)Wearing coat (BC)</td>
                    <td>KM</td>
                    <td><input type="text" name="p5"></td>
                    <td><input type="text" name="q5"></td>
                    <td><input type="text" name="d5"></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>(6)Hard shoulder</td>
                    <td>KM</td>
                    <td><input type="text" name="p6"></td>
                    <td><input type="text" name="q6"></td>
                    <td><input type="text" name="d6"></td>
                </tr>
                <tr>
                    <td></td>
                    <td  colspan="4">B - New 2-lane Realignment</td>
                    <td colspan="5"></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>(1) Earthwork upto top of the sub-grade </td>
                    <td>KM</td>
                    <td><input type="text" name="p7"></td>
                    <td><input type="text" name="q7"></td>
                    <td><input type="text" name="d7"></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>(2)Sub-Base Course. (GSB)</td>
                    <td>KM</td>
                    <td><input type="text" name="p8"></td>
                    <td><input type="text" name="q8"></td>
                    <td><input type="text" name="d8"></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>(3) Non Bituminious Base course (WMM)</td>
                    <td>KM</td>
                    <td><input type="text" name="p9"></td>
                    <td><input type="text" name="q9"></td>
                    <td><input type="text" name="d9"></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>(4)Bituminious base course (DBM)</td>
                    <td>KM</td>
                    <td><input type="text" name="p10"></td>
                    <td><input type="text" name="q10"></td>
                    <td><input type="text" name="d10"></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>(5)Wearing coat (BC)</td>
                    <td>KM</td>
                    <td><input type="text" name="p11"></td>
                    <td><input type="text" name="q11"></td>
                    <td><input type="text" name="d11"></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>(6)Hard shoulder</td>
                    <td>KM</td>
                    <td><input type="text" name="p12"></td>
                    <td><input type="text" name="q12"></td>
                    <td><input type="text" name="d12"></td>
                </tr>
                <tr>
                    <td></td>
                    <td  colspan="4">D- Re-construction and New culverts</td>
                    <td colspan="20"></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>(1) Culvert's</td>
                    <td>Nos.</td>
                    <td><input type="text" name="p13"></td>
                    <td><input type="text" name="q13"></td>
                    <td><input type="text" name="d13"></td>
                </tr>
                <tr>
                    <td></td>
                    <td  colspan="4">Major Bridge (length >60m Work )</td>
                    <td colspan="20"></td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>(1)Foundation</td>
                    <td>Nos.</td>
                    <td><input type="text" name="p14"></td>
                    <td><input type="text" name="q14"></td>
                    <td><input type="text" name="d14"></td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>(2) Sub-Stucture</td>
                    <td>Nos.</td>
                    <td><input type="text" name="p15"></td>
                    <td><input type="text" name="q15"></td>
                    <td><input type="text" name="d15"></td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>(3) Super Structure (including bearing)</td>
                    <td>Nos.</td>
                    <td><input type="text" name="p16"></td>
                    <td><input type="text" name="q16"></td>
                    <td><input type="text" name="d16"></td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>(4) Approaces (including retaining wall, protection work)</td>
                    <td>Nos.</td>
                    <td><input type="text" name="p17"></td>
                    <td><input type="text" name="q17"></td>
                    <td><input type="text" name="d17"></td>
                </tr>
                <tr>
                    <td></td>
                    <td  colspan="4">Other works</td>
                    <td colspan="20"></td>
                </tr>
                <tr>
                    <td>18</td>
                    <td> Road side drains</td>
                    <td>KM</td>
                    <td><input type="text" name="p18"></td>
                    <td><input type="text" name="q18"></td>
                    <td><input type="text" name="d18"></td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>(a) Pavement mrking </td>
                    <td>KM</td>
                    <td><input type="text" name="p19"></td>
                    <td><input type="text" name="q19"></td>
                    <td><input type="text" name="d19"></td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>(b) Crash barrier/ W mattle crash barrier</td>
                    <td>KM</td>
                    <td><input type="text" name="p20"></td>
                    <td><input type="text" name="q20"></td>
                    <td><input type="text" name="d20"></td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>(c) Road traffic sign</td>
                    <td>KM</td>
                    <td><input type="text" name="p21"></td>
                    <td><input type="text" name="q21"></td>
                    <td><input type="text" name="d21"></td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>(d) road boundary stone,km Stones, 5th km Stone and hectometer stone, rumble strip other item etc.</td>
                    <td>KM</td>
                    <td><input type="text" name="p22"></td>
                    <td><input type="text" name="q22"></td>
                    <td><input type="text" name="d22"></td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>(e)Traffic Blinker LED delineator, studs, reflective, pavement marker,tree reflector.</td>
                    <td>KM</td>
                    <td><input type="text" name="p23"></td>
                    <td><input type="text" name="q23"></td>
                    <td><input type="text" name="d23"></td>
                </tr>
                <tr>
                    <td>24</td>
                    <td>(b)Junction (Major&Minor)</td>
                    <td>Nos.</td>
                    <td><input type="text" name="p24"></td>
                    <td><input type="text" name="q24"></td>
                    <td><input type="text" name="d24"></td>
                </tr>
                <tr>
                    <td>25</td>
                    <td>(5) road side plantation</td>
                    <td>KM</td>
                    <td><input type="text" name="p25"></td>
                    <td><input type="text" name="q25"></td>
                    <td><input type="text" name="d25"></td>
                </tr>
                <tr>
                    <td>26</td>
                    <td>(a) Hydro seeding </td>
                    <td>sqm</td>
                    <td><input type="text" name="p26"></td>
                    <td><input type="text" name="q26"></td>
                    <td><input type="text" name="d26"></td>
                </tr>
                <tr>
                    <td>27</td>
                    <td>(b) Seeding and mulchuing with jute net</td>
                    <td>sqm</td>
                    <td><input type="text" name="p27"></td>
                    <td><input type="text" name="q27"></td>
                    <td><input type="text" name="d27"></td>
                </tr>
                <tr>
                    <td>28</td>
                    <td>(c) catch water drain </td>
                    <td>KM</td>
                    <td><input type="text" name="p28"></td>
                    <td><input type="text" name="q28"></td>
                    <td><input type="text" name="d28"></td>
                </tr>
                <tr>
                    <td>29</td>
                    <td>(d) Retaing structure on valley side</td>
                    <td>RM</td>
                    <td><input type="text" name="p29"></td>
                    <td><input type="text" name="q29"></td>
                    <td><input type="text" name="d29"></td>
                </tr>
                <tr>
                    <td>30</td>
                    <td>(e) Reinforced earth wall</td>
                    <td>RM</td>
                    <td><input type="text" name="p30"></td>
                    <td><input type="text" name="q30"></td>
                    <td><input type="text" name="d30"></td>
                </tr>
                <tr>
                    <td>31</td>
                    <td>(f) Breast wall </td>
                    <td>RM</td>
                    <td><input type="text" name="p31"></td>
                    <td><input type="text" name="q31"></td>
                    <td><input type="text" name="d31"></td>
                </tr>
                <tr>
                    <td>32</td>
                    <td>(g) Sub- surface drain</td>
                    <td>RM</td>
                    <td><input type="text" name="p32"></td>
                    <td><input type="text" name="q32"></td>
                    <td><input type="text" name="d32"></td>
                </tr>
                <tr>
                    <td>33</td>
                    <td>(h) Parapet wall</td>
                    <td>RM</td>
                    <td><input type="text" name="p33"></td>
                    <td><input type="text" name="q33"></td>
                    <td><input type="text" name="d33"></td>
                </tr>
                <tr>
                    <td colspan="5">Monthly Progress in %</td>
                    <td><input type="text" name="d34"></td>
                </tr>
                <tr>
                    <td colspan="5">Monthly cumulative Progress in %</td>
                    <td><input type="text" name="d35"></td>
                </tr>
            </tbody>
        </table>
        <br>
        <!-- <button type="button" onclick="addRow()">Add Row</button><br> -->
        <center><button type="submit" name="save">Save</button><br></center>
        <!-- <button type="button" onclick="addColumn()">Add Column</button><br> -->
        <input type="hidden" name="tableData" id="tableData">
    </form>
</body>
</html>

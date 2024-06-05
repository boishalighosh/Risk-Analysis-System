<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/5dd0cc1318.js" crossorigin="anonymous"></script>
    <title>Chatbot</title>
    <style>
        h1{
            border-bottom: 1px solid black;
        }
        body{
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(#FFBF00,#FF7F50);
        }
        .chat-container {
            width: 400px;
            margin: 0 auto;
        }
        .chat-box {
            height: 490px;
            overflow-y: auto;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            background-color: aliceblue;
        }
        .message {
            margin-bottom: 5px;
        }
        p{
            color: white;
            background-color: black;
        }
        #user-input {
            width: 300px;
            height: 20px;
            margin-right: 5px;
        }
        button {
            cursor: pointer;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="risk">
        <center><h1>Risk Analytics System</h1></center>
    </div>
    <div class="chat-container" id="chat-container">
        <div class="chat-box" id="chat-box">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Fetch data from POST request
        $month = $_POST['month'];
        $workers = $_POST['workers'];
        $bothShifts = $_POST['both_shifts'];
        $season = $_POST['season'];
        $nmonth = $_POST['nmonth'];

        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "major";

        // Create connection
        $con = new mysqli($server, $username, $password, $database);

        // Check connection
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }
        // Sum the shortfall column
        $sql = "SELECT SUM(shortfall) AS shortfallSum FROM $month";
        $result = $con->query($sql);

        $shortfallSum = 0;
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $shortfallSum = $row['shortfallSum'];
        }

        if($season === 'rainy'){
            if($nmonth < 6)
            {
                echo "it's is not possible to complete the project in remaining $nmonth months";
            }
            else{
                $remainMonth = $nmonth - 6;
                $perMonthWork = $shortfallSum/$remainMonth;
                if($workers >= 500){
                    if($bothShifts === 'yes'){
                        if($perMonthWork <= 2 && $perMonthWork > 1.50){
                            echo"<p>$perMonthWork% Shortfall can be manage in each remaining months after deductiong the Rainy Season months and it become possible due to 24*7 working Hours</p>";
                        }
                        else{
                            $manageWork = $remainMonth * 2;
                            $workNotManage = $shortfallSum - $manageWork;
                            echo"<p>it is not possible to manage $shortfallSum% in remaining months, as it's difficult to manage the Shortfall in Rainy months and we can only manage $manageWork% work in remaing months and for the remaining $workNotManage% work the company needs to file UT</p>";
                        }
                    }
                    else{
                        if($perMonthWork <= 1.50 && $perMonthWork > 1){
                            echo"<p>$perMonthWork% Shortfall can be manage in each remaining months by working 8 Hours everyday after deductiong the Rainy Season months</p>";
                        }
                        else{
                            $manageWork = $remainMonth * 1.50;
                            $workNotManage = $shortfallSum - $manageWork;
                            echo"<p>it is not possible to manage $shortfallSum% in remaining months, as it's difficult to manage the Shortfall in Rainy months and we can only manage $manageWork% work in remaing months and for the remaining $workNotManage% work the company needs to file UT</p>";
                        }
                    }
                }
                else if($workers >= 300){
                    if($bothShifts === 'yes'){
                        if($perMonthWork <= 1.50 && $perMonthWork > 1){
                            echo"<p>$perMonthWork% Shortfall can be manage in each remaining months after deductiong the Rainy Season months and it become possible due to 24*7 working Hours</p>";
                        }
                        else{
                            $manageWork = $remainMonth * 1.50;
                            $workNotManage = $shortfallSum - $manageWork;
                            echo"<p>it is not possible to manage $shortfallSum% in remaining months, as it's difficult to manage the Shortfall in Rainy months and we can only manage $manageWork% work in remaing months and for the remaining $workNotManage% work the company needs to file UT</p>";
                        }
                    }
                    else{
                        if($perMonthWork <= 1 && $perMonthWork > 0.5){
                            echo"<p>$perMonthWork% Shortfall can be manage in each remaining months by working 8 Hours everyday after deductiong the Rainy Season months</p>";
                        }
                        else{
                            $manageWork = $remainMonth;
                            $workNotManage = $shortfallSum - $manageWork;
                            echo"<p>it is not possible to manage $shortfallSum% in remaining months, as it's difficult to manage the Shortfall in Rainy months and we can only manage $manageWork% work in remaing months and for the remaining $workNotManage% work the company needs to file UT</p>";
                        }
                    }
                }
                else if($workers >= 150){
                    if($bothShifts === 'yes'){
                        if($perMonthWork <= 1 && $perMonthWork > 0.5){
                            echo"<p>$perMonthWork% Shortfall can be manage in each remaining months after deductiong the Rainy Season months and it become possible due to 24*7 working Hours</p>";
                        }
                        else{
                            $manageWork = $remainMonth * 1;
                            $workNotManage = $shortfallSum - $manageWork;
                            echo"<p>it is not possible to manage $shortfallSum% in remaining months, as it's difficult to manage the Shortfall in Rainy months and we can only manage $manageWork% work in remaing months and for the remaining $workNotManage% work the company needs to file UT</p>";
                        }
                    }
                    else{
                        echo "<p>it is not possible to complete the $shortfallSum% work in remaining months and to reduce losses company need to add more professional workers to work in this project</p>";
                    }
                }
                else{
                    echo "<p>it is not possible to complete the $shortfallSum% work in remaining months and to reduce losses company need to add more professional workers to work in this project</p>";
                }
            }
        }
        else{
            $remainMonth = $nmonth;
            $perMonthWork = $shortfallSum/$remainMonth;
            if($workers >= 500){
                if($bothShifts === 'yes'){
                    if($perMonthWork <= 2 && $perMonthWork > 1.50){
                        echo"<p>$perMonthWork% Shortfall can be manage in each remaining months and it become possible due to 24*7 working Hours</p>";
                    }
                    else{
                        $manageWork = $remainMonth * 2;
                        $workNotManage = $shortfallSum - $manageWork;
                        echo"<p>it is not possible to manage $shortfallSum% in remaining months and we can only manage $manageWork% work in remaing months and for the remaining $workNotManage% work the company needs to file UT</p>";
                    }
                }
                else{
                    if($perMonthWork <= 1.50 && $perMonthWork > 1){
                        echo"<p>$perMonthWork% Shortfall can be manage in each remaining months by working 8 Hours everyday</p>";
                    }
                    else{
                        $manageWork = $remainMonth * 1.50;
                        $workNotManage = $shortfallSum - $manageWork;
                        echo"<p>it is not possible to manage $shortfallSum% in remaining months and we can only manage $manageWork% work in remaing months and for the remaining $workNotManage% work the company needs to file UT</p>";
                    }
                }
            }
            else if($workers >= 300){
                if($bothShifts === 'yes'){
                    if($perMonthWork <= 1.50 && $perMonthWork > 1){
                        echo"<p>$perMonthWork% Shortfall can be manage in each remaining months and it become possible due to 24*7 working Hours</p>";
                    }
                    else{
                        $manageWork = $remainMonth * 1.50;
                        $workNotManage = $shortfallSum - $manageWork;
                        echo"<p>it is not possible to manage $shortfallSum% in remaining months and we can only manage $manageWork% work in remaing months and for the remaining $workNotManage% work the company needs to file UT</p>";
                    }
                }
                else{
                    if($perMonthWork <= 1 && $perMonthWork > 0.5){
                        echo"<p>$perMonthWork% Shortfall can be manage in each remaining months by working 8 Hours everyday</p>";
                    }
                    else{
                        $manageWork = $remainMonth;
                        $workNotManage = $shortfallSum - $manageWork;
                        echo"<p>it is not possible to manage $shortfallSum% in remaining months and we can only manage $manageWork% work in remaing months and for the remaining $workNotManage% work the company needs to file UT</p>";
                    }
                }
            }
            else if($workers >= 150){
                if($bothShifts === 'yes'){
                    if($perMonthWork <= 1 && $perMonthWork > 0.5){
                        echo"<p>$perMonthWork% Shortfall can be manage in each remaining months and it become possible due to 24*7 working Hours</p>";
                    }
                    else{
                        $manageWork = $remainMonth * 1;
                        $workNotManage = $shortfallSum - $manageWork;
                        echo"<p>it is not possible to manage $shortfallSum% in remaining months and we can only manage $manageWork% work in remaing months and for the remaining $workNotManage% work the company needs to file UT</p>";
                    }
                }
                else{
                    echo "<p>it is not possible to complete the $shortfallSum% work in remaining months and to reduce losses company need to add more professional workers to work in this project</p>";
                }
            }
            else{
                echo "<p>it is not possible to complete the $shortfallSum% work in remaining months and to reduce losses company need to add more professional workers to work in this project</p>";
            }
        }

        $con->close();
    }
    ?>
        </div>
        <input type="text" id="user-input" placeholder="Type your message...">
        <button><i class="fa-solid fa-paper-plane"></i></button>
        <button><i class="fa-solid fa-magnifying-glass-chart"></i></button>
    </div>

</body>
</html>
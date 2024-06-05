<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5dd0cc1318.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <title>Employee Registration</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            background-image: url(reg.jpg) , -webkit-linear-gradient(top,rgba(0, 0, 0, 1) 0%,rgba(0, 0, 0, 1) 1%,rgba(0, 0, 0, 0) 35%,rgba(0, 0, 0, 0) 100%),
            -webkit-linear-gradient(bottom,rgba(0, 0, 0, 1) 0%,rgba(0, 0, 0, 1) 1%,rgba(0, 0, 0, 0) 35%,rgba(0, 0, 0, 0) 100%);
            background-blend-mode: color;
            background-size: cover;
        }
        .container{
            text-align: center;
            background-color: rgba(255, 255, 255, 0.7);
            background-blend-mode: lighten;
            border: 1px solid black;
            box-sizing: content-box;
            height: 520px;
            width: 750px;
            margin: 40px 260px;
            padding: 20px;
        }
        .container .emp{
            font-size: 40px;
            font-weight: bold;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .container table tr td input{
            background-color: transparent;
            border-color: #eee4;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);
            padding: 5px;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        .container table tr td label{
            font-size: 18px;
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        .container .reg{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 15px;
            padding: 8px;
            border-radius: 5px;
            background-color: #eee9;
            cursor: pointer;
        }
        .container .reg:hover{
            background-color: gray;
        }
    </style>
</head>
<body>
    <div class="container">
        <center>
            <label class="emp">EMPLOYEE REGISTRATION</label>
            <form action="" method="">
            <div style="margin-bottom: 50px;"></div>
            <table>
                <tr>
                    <td><label>Name:</label></td>
                    <td><input type="text" id="name"></td>
                </tr>
                <tr>
                    <td><label>DOB:</label></td>
                    <td><input type="date" id="dob"></td>
                </tr>
                <tr>
                    <td><label>Gender:</label></td>
                    <td>
                        <div class="gender">
                            <input type="radio" id="male" name="gender">
                            <label for="male">Male</label>
                            <input type="radio" id="female" name="gender">
                            <label for="female">Female</label>
                            <input type="radio" id="other" name="gender">
                            <label for="other">Other</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><label>Phone:</label></td>
                    <td><input type="number" id="phone"></td>
                </tr>
                <tr>
                    <td><label>Email:</label></td>
                    <td><input type="email" id="email"></td>
                </tr>
                <tr>
                    <td><label>Address:</label></td>
                    <td><input type="text" id="address"></td>
                </tr>
            </table>
            <div style="margin-bottom: 50px;"></div>
            <button type="submit" class="reg">Register</button>
            </form>
        </center>
    </div>
</body>
</html>
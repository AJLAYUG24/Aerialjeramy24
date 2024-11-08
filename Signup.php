<?php
require('./Database.php');

if (isset($_POST['signup'])) {
    $Uname = $_POST['Uname'];
    $Ename = $_POST['Ename'];
    $Pname = $_POST['Pname'];

    $querrySignup = "INSERT INTO register VALUES (null, '$Uname', '$Ename', '$Pname')";
    $sqlsignup = mysqli_query($connection, $querrySignup);

    echo '<script>alert("Register Successfully!")</script>';
    echo '<script>window.location.href = "/Aerialjeramy Layug/Login.php"</script>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Information</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: #fff;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            margin: 50px auto;
            padding: 30px;
        }

        h1 {
            text-align: center;
            color: #6a11cb;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #6a11cb;
            outline: none;
        }

        input[type="submit"] {
            width: 100%;
            padding: 15px;
            background-color: #6a11cb;
            border: none;
            color: white;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #5a0db5;
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
        }

        .login-link a {
            color: #6a11cb;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        .form-group {
            position: relative;
            margin-bottom: 15px;
        }

        .form-group i {
            position: absolute;
            right: 15px;
            top: 10px;
            color: #6a11cb;
        }
    </style>
</head>
<body>
<div class="container">     
    <form action="Signup.php" method="post">
        <h1>Signup</h1>  
        <div class="form-group">
            <input type="text" name="Uname" placeholder="Enter your Username" required />
            <i class="bi bi-person-fill"></i>
        </div>
        <div class="form-group">
            <input type="text" name="Ename" placeholder="Enter your Email" required />
            <i class="bi bi-envelope-fill"></i>
        </div>
        <div class="form-group">
            <input type="password" name="Pname" placeholder="Enter your Password" required />
            <i class="bi bi-lock-fill"></i>
        </div>
        <input type="submit" name="signup" value="Signup" class="btn btn-primary"/>

        <div class="login-link">
            <p>Already have an account? <a href="/Aerialjeramy Layug/Login.php">Login</a></p>
        </div>
    </form>
</div>
</body>
</html>

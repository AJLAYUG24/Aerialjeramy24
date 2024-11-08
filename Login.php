<?php
require('./Read.php');

if (isset($_POST['login'])) {
    $Uname = $_POST['Uname'];
    $Pname = $_POST['Pname'];

    // Prepare the SQL query to prevent SQL injection
    $queryAccount = "SELECT * FROM register WHERE username = ? AND password = ?";
    $stmt = mysqli_prepare($connection, $queryAccount);
    
    // Bind the username and password
    mysqli_stmt_bind_param($stmt, "ss", $Uname, $Pname);
    mysqli_stmt_execute($stmt);
    
    // Store the result to check if any rows were returned
    mysqli_stmt_store_result($stmt);

    // Check if a match was found
    if (mysqli_stmt_num_rows($stmt) > 0) {
        // Login successful
        echo '<script>alert("Login Successfully!")</script>';
        echo '<script>window.location.href = "/Aerialjeramy Layug/Index.php"</script>';
    } else {
        // Login failed
        echo '<script>alert("Invalid Username or Password!")</script>';
        echo '<script>window.location.href = "Login.php"</script>';
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}

// Close the connection
mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Information</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

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
            margin: 100px auto;
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
    </style>
</head>
<body>
<div class="container">     
    <form action="Login.php" method="post">
        <h1>Login</h1>
        <input type="text" name="Uname" placeholder="Enter your Username" required />
        <input type="password" name="Pname" placeholder="Enter your Password" required />
        <input type="submit" name="login" value="Login" class="btn btn-primary"/>

        <div class="login-link">
            <p>You don't have an account? <a href="/Aerialjeramy Layug/Signup.php">Signup</a></p>
        </div>
    </form>
</div>
</body>
</html>

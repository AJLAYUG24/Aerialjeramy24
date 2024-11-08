<?php
require('./Database.php');

if (isset($_POST['edit'])) {
    $editID = $_POST['editID'];
    $editF = $_POST['editF'];
    $editM = $_POST['editM'];
    $editL = $_POST['editL'];
}

if (isset($_POST['update'])) {
    $updateID = $_POST['updateID'];
    $updateF = $_POST['updateF'];
    $updateM = $_POST['updateM'];
    $updateL = $_POST['updateL'];

    $querryupdate = "UPDATE tbl3a SET FirstName = '$updateF', MiddlName = '$updateM', LastName = '$updateL' WHERE ID = $updateID";
    $sqlupdate = mysqli_query($connection, $querryupdate);

    echo '<script>alert("Successfully Edited!")</script>';
    echo '<script>window.location.href = "/Aerialjeramy Layug/Index.php"</script>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Information</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        body {
            background-color: #e9ecef; /* Soft background color */
            font-family: 'Arial', sans-serif;
        }

        .container {
            background-color: #ffffff; /* White background for the form */
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 50px auto;
            padding: 30px;
        }

        h1, h3 {
            text-align: center;
            color: #0056b3; /* Darker blue for headings */
            margin-bottom: 20px;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ced4da; /* Lighter border color */
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #007bff; /* Blue button */
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            color: #6c757d; /* Gray for footer text */
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <h1>Edit Information</h1>
            <h3>Edit User Info</h3>
            <input type="text" name="updateF" placeholder="Enter First Name" value="<?php echo htmlspecialchars($editF); ?>" required />
            <input type="text" name="updateM" placeholder="Enter Middle Name" value="<?php echo htmlspecialchars($editM); ?>" required />
            <input type="text" name="updateL" placeholder="Enter Last Name" value="<?php echo htmlspecialchars($editL); ?>" required />
            <input type="hidden" name="updateID" value="<?php echo htmlspecialchars($editID); ?>" />
            <input type="submit" name="update" value="Save" />
        </form>
    </div>

    <div class="footer">
        <p>&copy; 2024 User Management System</p>
    </div>
</body>
</html>

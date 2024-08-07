<?php
// summary.php

// Check if the required fields are set and not empty
if (!isset($_POST['name']) || empty($_POST['name']) ||
    !isset($_POST['email']) || empty($_POST['email'])) {
    // Redirect back to the registration form if required fields are missing
    header("Location: register.php");
    exit();
}

// Retrieve form data
$name = htmlspecialchars($_POST['name']);
$dob = htmlspecialchars($_POST['dob']);
$sex = htmlspecialchars($_POST['sex']);
$email = htmlspecialchars($_POST['email']);
$address = htmlspecialchars($_POST['address']);
$department = htmlspecialchars($_POST['department']);
$program = htmlspecialchars($_POST['program']);
$mobile = htmlspecialchars($_POST['mobile']);

// Set the background color based on the sex
$name_bg_color = ($sex == 'Male') ? 'blue' : 'red';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summary Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .name {
        background-color: <?php echo $name_bg_color; ?>;
        color: #fff;
        }
        
    </style>
</head>
<body>
    <div class="container">
    <img src="https://www.auf.edu.ph/home/images/logo2.png" alt="AUF Logo" class="logo">
        <h1>Registration Summary</h1>
        <table>
            <tr>
                <th>Name</th>
                <td class="name"><?php echo $name; ?></td>
            </tr>
            <tr>
                <th>Date of Birth</th>
                <td><?php echo $dob; ?></td>
            </tr>
            <tr>
                <th>Sex</th>
                <td><?php echo $sex; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><?php echo $address; ?></td>
            </tr>
            <tr>
                <th>College Department</th>
                <td><?php echo $department; ?></td>
            </tr>
            <tr>
                <th>Program</th>
                <td><?php echo $program; ?></td>
            </tr>
            <tr>
                <th>Mobile Number</th>
                <td><?php echo $mobile; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
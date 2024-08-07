<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <img src="https://www.auf.edu.ph/home/images/logo2.png" alt="AUF Logo" class="logo">
        <h1>Student Registration Form</h1>
        <hr />
        <form action="summary.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob">

            <label>Sex:</label>
            <div class="radio-group">
                <input type="radio" id="male" name="sex" value="Male" checked>
                <label for="male">Male</label>
                <input type="radio" id="female" name="sex" value="Female">
                <label for="female">Female</label>
            </div>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="4" cols="50"></textarea>

            <label for="department">College Department:</label>
            <select id="department" name="department">
                <option value="IT">Information Technology</option>
                <option value="CS">Computer Science</option>
                <option value="EE">Electrical Engineering</option>
                <option value="MMA">Multimedia Arts</option>

            </select>

            <label for="program">Program:</label>
            <input type="text" id="program" name="program">

            <label for="mobile">Mobile Number:</label>
            <input type="text" id="mobile" name="mobile">

            <div class="button-group">
                <input type="reset" value="Reset">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>
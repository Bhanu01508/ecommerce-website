<?php
include 'includes/db.php';

if(isset($_POST['register'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users(username,email,password)
    VALUES('$username','$email','$password')";

    mysqli_query($conn,$query);

    echo "<script>alert('Registration Successful')</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<form method="POST">

<h2>Register</h2>

<input type="text" name="username" placeholder="Username" required>

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<button name="register">Register</button>

</form>

</body>
</html>
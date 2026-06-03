<?php
include 'includes/db.php';
session_start();

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users
    WHERE email='$email' AND password='$password'";

    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0){

        $_SESSION['user'] = $email;

        header("Location:index.php");

    }else{
        echo "<script>alert('Invalid Details')</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<form method="POST">

<h2>Login</h2>

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<button name="login">Login</button>

</form>

</body>
</html>
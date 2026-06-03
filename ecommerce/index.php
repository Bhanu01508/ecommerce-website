<?php
include 'includes/db.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Website</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>

    <h1>My E-Commerce Store</h1>

    <nav>
        <a href="index.php">Home</a>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
        <a href="cart.php">Cart</a>
    </nav>

</header>

<div class="container">

<?php

$query = "SELECT * FROM products";
$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result)){

?>

<div class="product-card">

    <img src="images/<?php echo $row['image']; ?>">

    <h2><?php echo $row['product_name']; ?></h2>

    <p>₹<?php echo $row['price']; ?></p>

    <a href="cart.php?id=<?php echo $row['id']; ?>">
        <button>Add to Cart</button>
    </a>

</div>

<?php
}
?>

</div>

</body>
</html>
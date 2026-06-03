<?php
include 'includes/db.php';
session_start();

if(isset($_GET['id'])){

    $product_id = $_GET['id'];

    $_SESSION['cart'][] = $product_id;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1 style="text-align:center;">Shopping Cart</h1>

<div class="container">

<?php

if(isset($_SESSION['cart'])){

foreach($_SESSION['cart'] as $id){

$query = "SELECT * FROM products WHERE id='$id'";

$result = mysqli_query($conn,$query);

$row = mysqli_fetch_assoc($result);

?>

<div class="product-card">

<img src="images/<?php echo $row['image']; ?>">

<h2><?php echo $row['product_name']; ?></h2>

<p>₹<?php echo $row['price']; ?></p>

</div>

<?php
}
}
?>

</div>

<div style="text-align:center;">
    <a href="checkout.php">
        <button>Checkout</button>
    </a>
</div>

</body>
</html>
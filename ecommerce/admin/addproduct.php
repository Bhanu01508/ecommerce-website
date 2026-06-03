<?php
include '../includes/db.php';

if(isset($_POST['add'])){

    $name = $_POST['name'];
    $price = $_POST['price'];

    $image = $_FILES['image']['name'];

    move_uploaded_file($_FILES['image']['tmp_name'],
    "../images/".$image);

    $query = "INSERT INTO products(product_name,price,image)
    VALUES('$name','$price','$image')";

    mysqli_query($conn,$query);

    echo "<script>alert('Product Added')</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<form method="POST" enctype="multipart/form-data">

<h2>Add Product</h2>

<input type="text" name="name" placeholder="Product Name" required>

<input type="number" name="price" placeholder="Price" required>

<input type="file" name="image" required>

<button name="add">Add Product</button>

</form>

</body>
</html>
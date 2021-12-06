<?php
$name = $_POST['name'];
$image = $_POST['image'];
$type = $_POST['type'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

$servername = "localhost";
$password = "";
$username = "root";
$dbname = "product_managament";
$conn = new mysqli($servername, $username,$password, $dbname);

$sql = "INSERT INTO product (name, image, type, price, quantity) values ('$name', '$image', '$type', '$price', '$quantity')";
if($conn->query($sql)==true) {
    header("location:product-category.php");
} else {
    echo "error !!!";
}
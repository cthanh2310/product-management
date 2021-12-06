<?php
$id = $_POST['id'];
$name = $_POST['name'];
$image = $_POST['image'];
$category = $_POST['category'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

$servername = "localhost";
$password = "";
$username = "root";
$dbname = "product_managament";
$conn = new mysqli($servername, $username,$password, $dbname);

$sql = "UPDATE product SET name = '$name', image = '$image', type = '$category', price = '$price', quantity = '$quantity' WHERE id = '$id'";
if($conn->query($sql)==true) {
    echo "Cập nhật thành công";
} else {
    echo "error !!!";
}

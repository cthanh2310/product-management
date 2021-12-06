<?php
$id = $_POST['id'];

$servername = "localhost";
$password = "";
$username = "root";
$dbname = "product_managament";
$conn = new mysqli($servername, $username,$password, $dbname);

$sql = "DELETE FROM product WHERE id='$id'";
if($conn->query($sql)==true) {
    header("location:product-delete.php");
} else {
    echo "error !!!";
}
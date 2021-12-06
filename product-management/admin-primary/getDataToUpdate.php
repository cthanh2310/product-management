<?php
    $id = $_POST['id'];
    $servername = "localhost";
    $password = "";
    $username = "root";
    $dbname = "product_managament";
    $conn = new mysqli($servername, $username,$password, $dbname);

    $sql = "SELECT * FROM product WHERE id='$id'";
    $result = $conn->query($sql);
    if($result == true) {
        $myObj = new stdClass();
        while($row = $result->fetch_assoc()) {
            $myObj->id =  $row["id"];
            $myObj->name =  $row["name"];
            $myObj->image =  $row["image"];
            $myObj->type =  $row["type"];
            $myObj->price =  $row["price"];
            $myObj->quantity =  $row["quantity"];
            $myJSON = json_encode($myObj);
            echo $myJSON;
        }
        // echo json_encode($result);
    } else {
        echo "error !!!";
    }
?>
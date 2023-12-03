<?php
include("../connection.php");

if (isset($_POST["tambah_store"])) {
    global $conn;  
    $name = $_POST["name"];
    $address = $_POST["address"];

    $query = "INSERT INTO store (name, address) VALUES ('$name', '$address')" ;
    $result = $conn->query($query) or die ($conn->error); 

    if ($result) {
        header("Location: ../index.php?msg=success");
        exit();
    } else {
        header("Location: ../index.php?msg=error");
        exit();
    }

}
?>
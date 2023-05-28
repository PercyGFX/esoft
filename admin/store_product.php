<?php
require_once '../connection.php';
$err = '';

print_r($_POST);
if(isset($_POST["name"]) || isset($_POST["price"])){
$name = $_POST["name"];
    $price = $_POST["price"];
    $description = $_POST["description"];
    $color = $_POST["color"];

    $matara = $_POST["matara"];

    $galle = $_POST["galle"];
    $hambanthota = $_POST["hambanthota"];


    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
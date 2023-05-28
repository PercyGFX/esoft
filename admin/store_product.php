<?php
require_once '../connection.php';
$err = '';

//print_r($_POST);
if(isset($_POST["name"]) || isset($_POST["price"])){
    $image = $_POST["file"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];
    $description = $_POST["description"];
    $color = $_POST["color"];

    if(isset($_POST["name"])) {
        $matara = $_POST["matara"];
    }else{
        $matara = '';
    }
    if(isset($_POST["galle"])) {
        $galle = $_POST["galle"];
    }else{
        $galle = '';
    }
    if(isset($_POST["hambanthota"])) {
        $hambanthota = $_POST["hambanthota"];
    }else{
        $hambanthota = '';
    }


    $sql = "INSERT INTO stock (image, name, qty, discription, price, color, hambantota, matara, galle)
VALUES ('$image','$name','$quantity','$description', '$price',  '$color','$hambanthota', '$matara', '$galle')";

    if (mysqli_query($conn, $sql)) {
        header("Location: dashboard.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
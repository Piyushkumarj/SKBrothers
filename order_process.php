<?php
// order_process.php

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = $_POST['customer_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $item_name = $_POST['item_name'];
    $quantity = $_POST['quantity'];

    // Insert the order into the database
    $sql = "INSERT INTO orders (customer_name, email, phone, item_name, quantity) 
            VALUES ('$customer_name', '$email', '$phone', '$item_name', $quantity)";

    if ($conn->query($sql) === TRUE) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<?php
// view_orders.php

include 'db.php'; // Include the database connection file

// Retrieve orders from the database
$sql = "SELECT * FROM orders";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Orders - S K Brothers</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Order List</h1>
        <nav>
            <a href="index.html">Home</a>
            <a href="order.html">Order</a>
            <a href="contact.html">Contact</a>
            <a href="help.html">Help</a>
            <a href="view_orders.php">View Orders</a>
        </nav>
    </header>
    <main>
        <h2>All Orders</h2>
        
        <?php if ($result->num_rows > 0): ?>
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Item Name</th>
                    <th>Quantity</th>
                    <th>Order Date</th>
                </tr>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['customer_name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['item_name']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td><?php echo $row['order_date']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>
        <?php else: ?>
            <p>No orders found.</p>
        <?php endif; ?>

    </main>
</body>
</html>

<?php
$conn->close(); // Close the database connection
?>

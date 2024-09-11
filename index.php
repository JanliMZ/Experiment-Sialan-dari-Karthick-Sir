<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $sql = "INSERT INTO products (name, description, price) VALUES ('$name', '$description', $price)";

    if ($conn->query($sql) === TRUE) {
        echo "Product added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add your HTML head content here -->
</head>
<body>
    <header>
        <!-- Add your header content here -->
    </header>

    <section id="products">
        <h2>Products</h2>
        <!-- Add a form to input product details here -->
        <form method="POST">
            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="description">Product Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea><br>

            <label for="price">Price:</label>
            <input type="number" id="price" name="price" step="0.01" required><br>

            <button type="submit">Add Product</button>
        </form>

        <!-- Display the list of products from the database here -->
        <?php
        $result = $conn->query("SELECT * FROM products");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<article class='product-card'>";
                echo "<h3>" . $row['name'] . "</h3>";
                echo "<p>" . $row['description'] . "</p>";
                echo "<p>Price: $" . number_format($row['price'], 2) . "</p>";
                echo "</article>";
            }
        } else {
            echo "No products available.";
        }
        ?>
    </section>

    <section id="about">
        <!-- Add your about content here -->
    </section>

    <section id="contact">
        <!-- Add your contact form here -->
    </section>
</body>
</html>

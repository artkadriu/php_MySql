<?php
// Include the configuration file
include 'config.php';

// Handle form submission for adding a new product
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the product data from the form
    $title = $_POST['title'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $stock = $_POST['stock'];

    // Prepare SQL statement to insert new product into the database
    $sql = "INSERT INTO products (title, price, description, stock) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdi", $title, $price, $description, $stock);

    // Execute the statement and check if it was successful
    if ($stmt->execute()) {
        echo "<p class='success-message'>Product added successfully!</p>";
    } else {
        echo "<p class='error-message'>Error adding product: " . $stmt->error . "</p>";
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>

    <!-- Internal CSS for styling -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            font-size: 16px;
            color: #555;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        .success-message {
            color: #28a745;
            font-size: 16px;
            text-align: center;
        }

        .error-message {
            color: #dc3545;
            font-size: 16px;
            text-align: center;
        }

        .back-link {
            text-align: center;
            margin-top: 20px;
        }

        .back-link a {
            color: #007bff;
            text-decoration: none;
        }

        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Add New Product</h2>

        <!-- Product form -->
        <form method="POST" action="add.php">
            <label for="title">Product Title:</label>
            <input type="text" name="title" id="title" required><br>

            <label for="price">Price:</label>
            <input type="number" name="price" id="price" step="0.01" required><br>

            <label for="description">Description:</label>
            <textarea name="description" id="description" rows="4" required></textarea><br>

            <label for="stock">Stock:</label>
            <input type="number" name="stock" id="stock" required><br>

            <input type="submit" value="Add Product">
        </form>

        <div class="back-link">
            <p><a href="index.php">Back to Products List</a></p>
        </div>
    </div>

</body>
</html>

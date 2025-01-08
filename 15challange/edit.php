<?php
// Include the configuration file
include 'config.php';

// Check if the ID is passed in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the product details from the database
    $sql = "SELECT * FROM products WHERE id = $id";
    $result = $conn->query($sql);

    // Check if the product exists
    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
    } else {
        echo "Product not found.";
        exit;
    }
} else {
    echo "No product ID specified.";
    exit;
}

// Handle the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $stock = $_POST['stock'];

    // Update the product details in the database
    $update_sql = "UPDATE products SET title = ?, price = ?, description = ?, stock = ? WHERE id = ?";
    $stmt = $conn->prepare($update_sql);
    $stmt->bind_param("ssdii", $title, $price, $description, $stock, $id);

    if ($stmt->execute()) {
        echo "Product updated successfully!";
    } else {
        echo "Error updating product: " . $stmt->error;
    }
}

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>

    <h2>Edit Product</h2>

    <form method="POST" action="edit.php?id=<?php echo $product['id']; ?>">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="<?php echo htmlspecialchars($product['title']); ?>" required><br><br>

        <label for="price">Price:</label>
        <input type="number" name="price" id="price" value="<?php echo htmlspecialchars($product['price']); ?>" required><br><br>

        <label for="description">Description:</label>
        <textarea name="description" id="description" required><?php echo htmlspecialchars($product['description']); ?></textarea><br><br>

        <label for="stock">Stock:</label>
        <input type="number" name="stock" id="stock" value="<?php echo htmlspecialchars($product['stock']); ?>" required><br><br>

        <input type="submit" value="Update Product">
    </form>

</body>
</html>

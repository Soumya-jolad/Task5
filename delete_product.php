<?php
include 'config.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);  // Ensure it's a valid integer

    $stmt = $conn->prepare("DELETE FROM products WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Product deleted successfully!";
        header("Location: view_product.php");
        exit();
    } else {
        echo "Error deleting product: " . $stmt->error;
    }
} else {
    echo "Invalid request!";
}
$conn->close();
?>

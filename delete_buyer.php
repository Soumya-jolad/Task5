<?php
include 'config.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);  // Convert to integer for safety

    $stmt = $conn->prepare("DELETE FROM buyers WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Buyer deleted successfully!";
        header("Location: view_buyer.php");
        exit();
    } else {
        echo "Error deleting buyer: " . $stmt->error;
    }
} else {
    echo "Invalid request!";
}
$conn->close();
?>

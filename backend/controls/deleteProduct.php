<?php
session_start();
include 'db.php';
// Check if the product ID is set
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare the SQL statement to delete the product
    $stmt = $pdo->prepare("DELETE FROM products WHERE id = ?");
    $result = $stmt->execute([$id]);

    if ($result) {
        $_SESSION['success'] = "Product deleted successfully!";
        header("Location: ../product.php");
    } else {
        $_SESSION['error'] = "Failed to delete product.";
        header("Location: ../product.php");
    }

    exit;
}

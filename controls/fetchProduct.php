<?php 
// รวมการเชื่อมต่อฐานข้อมูล 
include 'db.php';
session_start(); 
// ดึงข้อมูลสินค้าจากตาราง products 

$sql = "SELECT `id`, `product_name`, `description`, `price`, `created_at`,`product_image` FROM `products`"; 
$stmt = $pdo->prepare($sql);  // ใช้ PDO ในการเตรียมรับคำสั่ง SQL 
$stmt->execute();
?>
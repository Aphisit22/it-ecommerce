<?php
session_start();

if (isset(
    $_POST['productId'],
    $_POST['productName'],
    $_POST['productPrice'],
    $_POST['productImage']
)) {
    $productId = $_POST['productId'];
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $productImage = $_POST['productImage'];

    //พื้นที่สร้างตะกร้าสินค้า
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    //ตรวจสอบว่าในตะกร้ามีสินค้าชนิดเดียวกันรึป่าว?
    $found = false;
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['productId'] == $productId) {
            $item['quantity'] += 1;
            $found = true;
            break;
        }
    }
    //ถ้าไม่ม่สินค้าชนิดเดียวกัน, เพิ่มสินค้าใหม่เข้าตะกร้าแทน
    if (!$found) {
        $_SESSION['cart'][] = [
            'productId' => $productId,
            'productName' => $productName,
            'productPrice' => $productPrice,
            'productImage' => $productImage,
            'quantity' => 1
        ];
    }
}

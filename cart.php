<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <?php include './components/header.php'; ?>
 <section id="cart_product" class="py-5">
        <div class="container">
            <h2 class="mb-4">แสดงข้อมูลตะกร้าสินค้า</h2>
            <div class="container mt-5">
                <div class="row">
                    <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
                        <ul class="list-group">
                            <?php foreach ($_SESSION['cart'] as $item): ?>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex w-100">
                                        <img src="./assets/imgs/<?= htmlspecialchars($item['productImage']); ?>" alt="Product Image" class="img-thumbnail" style="height: 80px; width: 80px; object-fit: cover;">
                                        <div class="ms-3 w-100">
                                            <h5 class="mb-1"><?= htmlspecialchars($item['productName']); ?></h5>
                                            <p class="mb-1"><strong>Price:</strong> <?= htmlspecialchars($item['productPrice']); ?> บาท</p>
                                            <p class="mb-0"><strong>Quantity:</strong> <?= htmlspecialchars($item['quantity']); ?></p>
                                        </div>
                                    </div>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button class="btn btn-success btn-sm">
                                            <i class="bi bi-plus-circle-fill"></i> เพิ่ม
                                        </button>
                                        <button class="btn btn-warning btn-sm">
                                            <i class="bi bi-dash-circle-fill"></i> ลด
                                        </button>
                                        <button class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash-fill"></i> ลบ
                                        </button>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php else: ?>
                        <p class="text-center col-12">ไม่มีสินค้าในตระกล้า</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php include './components/footer.php'; ?>
</body>

</html>
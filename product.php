<?php
include './controls/fetchProduct.php'
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
    <section id="fecth_product" class='py-5'>
        <div class=container>
            <h2 class="mb-4 text-white">แสดงข้อมูลเมนูอาหาร</h2>
            <?php if ($stmt->rowCount() > 0) : ?>
                <div class="container mt-5">
                    <div class="row">
                        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <div class="card-body w-100">
                                        <img src="./assets/imgs/<?= htmlspecialchars($row['product_image']); ?>" alt="" class="card-img-top img-fluid" style="">
                                        <p class="crad-text"><strong>ชื่ออาหาร:</strong><?php echo htmlspecialchars($row['product_name']); ?></p>
                                        <p class="crad-text"><strong>รายละเอียด:</strong><?php echo htmlspecialchars($row['description']); ?></p>
                                        <p class="crad-text"><strong>ราคา:</strong><?php echo htmlspecialchars($row['price']); ?></p>
                                        <p class="crad-text"><strong>เพิ่มเมื่อ:</strong><?php echo htmlspecialchars($row['created_at']); ?></p>
                                        <button class="btn btn-primary" id="add-to-cart"
                                            data-id="<?= htmlspecialchars($row["id"]); ?>"
                                            data-name="<?= htmlspecialchars($row["product_name"]); ?>"
                                            data-price="<?= htmlspecialchars($row["price"]); ?>"
                                            data-image="<?= htmlspecialchars($row["product_image"]); ?>">
                                            เพิ่มสินค้า
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            <?php endif ?>
        </div>
    </section>
    <?php include './components/footer.php'; ?>
</body>

</html>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const addToCaryButton = document.querySelectorAll('#add-to-cart');

        addToCaryButton.forEach(button => {
            button.addEventListener('click', function() {
                const productId = this.getAttribute('data-id');
                const productName = this.getAttribute('data-name');
                const productPrice = this.getAttribute('data-price');
                const productImage = this.getAttribute('data-image');

                fetch('./controls/addToCart.php', {
                        method: 'POST',
                        header: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        },
                        body: new URLSearchParams({
                            productId: productId,
                            productName: productName,
                            productPrice: productPrice,
                            productImage: productImage
                        })
                    })
                    .then(response => response.text())
                    .then(data => {
                        Swal.fire({
                            title: 'สำเร็จ',
                            text: `${productName} ได้ถูกเพิ้มลงในตะกร้าแล้ว`,
                            icon: 'success',
                            confirmButtonText: 'ตกลง'
                        });
                    })
                    .catch(error => {
                        Swal.fire({
                            title: 'เกิดข้อผิดพลาด',
                            text: `${error} ไม่สามารถเพิ่มสินค้าได้ กรุณาลองใหม่อีกครั้ง`,
                            icon: 'error',
                            confirmButtonText: 'ตกลง'
                        });
                    });
            })
        })
    })
</script>
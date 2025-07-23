<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: signin.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information Website</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <?php include './components/header.php'; ?>
</head>

<body>
    <section class="hero text-white text-center py-5" style="background: linear-gradient(to right,rgb(228, 187, 255), #00b2ff); height: 100vh;">
        <div class="container h-100 d-flex flex-column justify-content-center">
            <h1 class="display-4">ยินดีต้อนรับสู่เว็บไซต์ของเรา</h1>
            <p class="lead">วงบหอมหทมิทืนิื</p>
            <a href="#content" class="btn btn-light btn-lg mx-auto">เริ่มต้นตอนนี้</a>
        </div>
    </section>

    <section id="content" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">เกี่ยวกับเทคโนโลยีสารสนเทศ</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, aperiam!</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, recusandae!</p>
        </div>

    </section>
    <?php include './components/footer.php'; ?>
    <script>
        <?php if (isset($_GET['error']) && $_GET['error'] == 'invalid') : ?>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Iavalid email or password',
                footer: 'Please try again.'
            });
        <?php endif; ?>

        <?php if (isset($_GET['success']) && $_GET['success'] == 'true') : ?>
            Swal.fire({
                icon: 'success',
                title: 'Success...',
                text: 'You have signed',
                footer: 'succeed'
            });
        <?php endif; ?>
    </script>
</body>

</html>
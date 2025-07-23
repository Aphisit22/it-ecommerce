<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card shadow" style="width: 100;">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="card-body p-4">
                        <!-- เข้าสู๔่ระบบ -->
                        <h2 class="text-center mt-3">SignUp Page</h2>
                        <form method="POST" action="controls/createUsers.php">
                            <div class="mb-3">
                                <label for="firstname" class="form-label">Firstname</label>
                                <input type="text" name="first_name" class="form-control" required>
                            </div>

                            <div>
                                <label for="" class="form-label">Lastname</label>
                                <input type="text" name="last_name" class="form-control" required>
                            </div>

                            <div>
                                <label for="" class="form-label">Address</label>
                                <textarea name="address" id="" class="form-control" required></textarea>
                            </div>

                            <div>
                                <label for="" class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>

                            <div>
                                <label for="" class="form-label">E-Mail</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div>
                                <label for="" class="form-label">Password</label>
                                <input type="text" name="password" class="form-control" required>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary w-100">SignUp NOW!!</button>
                        </form>
                         <!-- สมัครสมาชิก -->
                        <div class="text-center mt-3">
                            <span>You already have an account?</span>
                            <a href="signIn.php">SignIn</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 d-none d-md-block">
                    <img src="assets/imgs/bf4a2581-3545-4226-95dd-0c9b00425507.jpg" alt="" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                </div>
            </div>
        </div>
    </div>
</body>

</html>
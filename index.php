
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi User</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('./img/jasd.jpg') no-repeat center center fixed;
            background-size: cover;
        }
        .login-container {
            background: #b07d41;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .logo-container {
            text-align: center;
            margin-bottom: 15px;
        }
        .logo-container img {
            width: 80px;
            height: auto;
            background: white;
            padding: 10px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="col-md-4 login-container">
            <div class="logo-container">
                <img src="./img/logo.png" alt="logo">
                <h5 class="text-center fw-bold mt-2">Registrasi User</h5>
            </div>
            <form action="login_proses.php" method="POST">
                <div class="mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" name="register" class="btn btn-light">Register</button>
                    <button type="submit" name="login" class="btn btn-dark">Login</button>
                </div>
            </form>
        </div>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

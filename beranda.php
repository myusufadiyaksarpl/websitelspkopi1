<?php
    // Mengimpor data produk dari file 'datadummy.php'
    include "datadummy.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Paket kopi</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #8B5A2B; color: white; }
        .card { background-color: #c49a6c; color: black; }
        .btn-custom { background-color: #5a3e2b; color: white; }
    </style>
</head>
<body>
    <nav class="navbar bg-dark navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Home</a>
            <a class="navbar-brand text-white" href="transaksi.php">Transaksi</a>
            <a class="navbar-brand text-white ms-auto" href="#">Logout</a>
        </div>
    </nav>

    <div class="container text-center mt-4">
        <div class="row">
            <div class="col-md-6">
                <img src="img/jasd.jpg" class="img-fluid" alt="Kopi Panas">
            </div>
            <div class="col-md-6">
                <img src="img/kopi-kenangan.jpg" class="img-fluid" alt="Kopi Es">
            </div>
        </div>
        <h2 class="fw-bold mt-4">Daftar Paket Coffe</h2>
    </div>

    <div class="container mt-5">
        <div class="row">
            <?php foreach ($paket_kopi as $paket => $data) { ?>
            <div class="col-md-3 mb-4">
                <div class="card text-center p-3">
                    <h5 class="fw-bold">Pilih Paket <?= $data[0] ?></h5>
                    <p><?= $data[1] ?></p>
                    <p>Rp <?= number_format($data[2], 0, ',', '.') ?></p>
                    <a href="transaksi.php?id=<?= $paket ?>" class="btn btn-custom">BELI PAKET</a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

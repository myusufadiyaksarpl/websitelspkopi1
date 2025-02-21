<?php
// Mengambil nilai parameter 'id' dari URL
$id = $_GET['id'] ?? "";

// Mengimpor data produk dari file 'datadummy.php'
include "datadummy.php";

// Inisialisasi variabel yang digunakan dalam transaksi
$totalharga = 0;
$pembayaran = 0;
$kembalian = 0;
$notransaksi = "";
$namacustomer = "";
$tanggal = "";
$jumlah = 0;

// Mengecek apakah form telah dikirim dengan metode POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $notransaksi = $_POST['notransaksi'] ?? "";
    $namacustomer = $_POST['namacustomer'] ?? "";
    $tanggal = $_POST['tanggal'] ?? "";
    $jumlah = $_POST['jumlah'] ?? 0;
    $harga = $_POST['harga'] ?? 0;
    $totalharga = $_POST['totalharga'] ?? 0;
    $pembayaran = $_POST['pembayaran'] ?? 0;
    $kembalian = $_POST['kembalian'] ?? 0;

    // Jika tombol 'Hitung Total' ditekan
    if (isset($_POST['hitung'])) {
        $totalharga = $harga * $jumlah; // Menghitung total harga
    }

    // Jika tombol 'Hitung Kembalian' ditekan
    if (isset($_POST['hitungkembalian'])) {
        if ($pembayaran < $totalharga) {
            echo "<script>alert('Pembayaran tidak boleh kurang dari total harga!');</script>";
        } else {
            $kembalian = $pembayaran - $totalharga;
        }
    }

    // Jika tombol 'Simpan' ditekan, transaksi dianggap berhasil dan dialihkan ke beranda
    if (isset($_POST['simpan'])) {
        echo "<script>
        alert('Transaksi berhasil disimpan');
        window.location.href = 'beranda.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Kopi</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #8B5A2B; }
        .container { background-color: #654321; padding: 20px; border-radius: 10px; }
        label { color: white; font-weight: bold; }
        .btn-success { width: 100%; }
    </style>
</head>
<body>
    <nav class="navbar bg-success navbar-dark shadow">
        <div class="container-fluid">
            <a class="navbar-brand text-white fw-bold" href="#">Coffe</a>
            <ul class="navbar-nav d-flex flex-row gap-4">
                <li class="nav-item"><a class="nav-link text-white fw-bold" href="beranda.php">Home</a></li>
                <li class="nav-item"><a class="nav-link text-white fw-bold" href="#">Transaksi</a></li>
                <li class="nav-item"><a class="nav-link text-white fw-bold" href="#">Logout</a></li>
            </ul>
        </div>
    </nav>
    
    <div class="container mt-5">
        <h2 class="text-center text-white fw-bold">TRANSAKSI</h2>
        <form method="POST">
            <div class="row">
                <div class="col-md-6">
                    <label>No Transaksi</label>
                    <input type="text" class="form-control mb-3" name="notransaksi" value="<?= ($notransaksi) ?>">

                    <label>Nama Customer</label>
                    <input type="text" class="form-control mb-3" name="namacustomer" value="<?= ($namacustomer) ?>"required>

                    <label>Tanggal</label>
                    <input type="date" class="form-control mb-3" name="tanggal" value="<?= ($tanggal) ?>">

                    <label>Pilih Produk</label>
                    <input type="text" class="form-control mb-3" value="<?= ($paket_kopi[$id][0] ?? '') ?>" name="pilih" readonly>

                    <label>Harga Produk</label>
                    <input type="text" class="form-control mb-3" value="<?=($paket_kopi[$id][2] ?? '') ?>" name="harga" readonly>
                </div>
                <div class="col-md-6">
                    <label>Jumlah</label>
                    <input type="number" class="form-control mb-3" name="jumlah" value="<?=($jumlah) ?>">

                    <button type="submit" class="btn btn-success mb-3" name="hitung">Hitung Total</button>

                    <label>Total Harga</label>
                    <input type="text" class="form-control mb-3" name="totalharga" value="<?= ($totalharga) ?>" readonly>

                    <label>Pembayaran</label>
                    <input type="text" class="form-control mb-3" name="pembayaran" value="<?= ($pembayaran) ?>">

                    <button type="submit" class="btn btn-success mb-3" name="hitungkembalian">Hitung Kembalian</button>

                    <label>Kembalian</label>
                    <input type="text" class="form-control mb-3" name="kembalian" value="<?=($kembalian) ?>" readonly>
                </div>
            </div>
            <button type="submit" class="btn btn-success mt-3" name="simpan">Simpan Transaksi</button>
        </form>
    </div>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>

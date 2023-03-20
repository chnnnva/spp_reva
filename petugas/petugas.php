<?php
session_start();
if (empty($_SESSION['id_petugas'])) {
    echo "<script>alert('Maaf Anda Belum Login);window.location.assign('../index2.php');</script>";
}
if ($_SESSION['level'] != 'petugas') {
    echo "<script>alert('Maaf Anda Bukan Sesi Admin');window.location.assign('../index2.php');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petugas - Aplikasi Pembayaran SPP</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    body {
        background-color: lightgrey;
    }
</style>

<body>
    <div class="container mt-5">
        <div class="container mt-5 text-end">
            <a href="petugas.php?url=logout" class="btn btn-primary"><i class="bi bi-box-arrow-left text-white"></i> Logout</a>
        </div>
        <h3>Aplikasi Pembayaran SPP</h3>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <div class="alert alert-secondary">
            Anda Login Sebagai Petugas <b><?= $_SESSION['nama_petugas'] ?></b> Aplikasi Pembayaran SPP
        </div>
        <a href="petugas.php" class="btn btn-secondary"> Petugas</a>
        <a href="petugas.php?url=pembayaran" class="btn btn-secondary"> Pembayaran</a>

        <div class="card mt-2">
            <div class="card-body">
                <!-- ini isi web kita -->
                <?php
                $file = @$_GET['url'];
                if (empty($file)) {
                    echo "<h4>Selamat Datang Di Halaman Petugas.</h4>";
                    echo "Aplikasi Pembayaran SPP Digunakan Untuk Mempermudah 
                Dalam Mencatat Pembayaran Siswa / Siswi Disekolah.";
                } else {
                    include $file . '.php';
                }
                ?>

            </div>
        </div>

    </div>


    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>
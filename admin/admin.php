<?php
session_start();
if (empty($_SESSION['id_petugas'])) {
    echo "<script>
    alert('Maaf Anda Belum Login);
    window.location.assign('../index2.php');
    </script>";
}
if ($_SESSION['level'] != 'admin') {
    echo "<script>
    alert('Maaf Anda Bukan Sesi Admin');
    window.location.assign('../index2.php');
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin - Aplikasi Pembayaran SPP</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    body {
        background-color: lightblue;
    }
</style>

<body>
    <div class="container mt-5">
        <div class="container mt-5 text-end">
            <a href="admin.php?url=logout" class="btn btn-primary"><i class="bi bi-box-arrow-left"></i> Logout</a>
        </div>
        <h3>PEMBAYARAN SPP SMKN 1 CIJATI</h3>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <div class="alert alert-secondary">
            Anda Login Sebagai <b>ADMINISTRATOR</b> Pembayaran SPP SMKN 1 CIJATI
        </div>
        <a href="admin.php" class="btn btn-secondary"> Administrator </a>
        <a href="admin.php?url=spp" class="btn btn-secondary"> SPP </a>
        <a href="admin.php?url=kelas" class="btn btn-secondary"> Kelas </a>
        <a href="admin.php?url=siswa" class="btn btn-secondary"> Siswa </a>
        <a href="admin.php?url=petugas" class="btn btn-secondary"> Petugas </a>
        <a href="admin.php?url=pembayaran" class="btn btn-secondary"> Pembayaran </a>
        <a href="admin.php?url=laporan" class="btn btn-secondary"> Laporan </a>


        <div class="card mt-2">
            <div class="card-body">
                <!-- ini isi web kita -->
                <?php
                $file = @$_GET['url'];
                if (empty($file)) {
                    echo "<h4>Selamat Datang Di Halaman Administrator</h4>";
                    echo "Aplikasi Pembayaran SPP Digunakan Untuk Mempermudah 
                Dalam Mencatat Pembayaran Siswa / Siswi Disekolah";
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
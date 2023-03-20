<h5>Halaman Data Siswa.</h5>
<a href="?url=tambah-siswa" class="btn btn-secondary"><i class="bi bi-folder-plus"></i></a>
<br>
<text>Tambah Siswa</text>
</br>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
        <td>No</td>
        <td>NISN</td>
        <td>NIS</td>
        <td>Nama</td>
        <td>Kelas</td>
        <td>Alamat</td>
        <td>No Telpon</td>
        <td>SPP</td>
        <td>Edit</td>
        <td>Hapus</td>
    </tr>
    <?php
    include '../koneksi.php';
    $no = 1;
    $sql = "SELECT*FROM siswa,spp,kelas WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp 
     ORDER BY nama ASC";
    $query = mysqli_query($koneksi, $sql);
    foreach ($query as $data) { ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['nisn'] ?></td>
            <td><?= $data['nis'] ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['nama_kelas'] ?></td>
            <td><?= $data['alamat'] ?></td>
            <td><?= $data['no_telp'] ?></td>
            <td><?= $data['tahun'] ?> - <?= number_format($data['nominal'], 2, ',', '.'); ?></td>
            <td>
                <a href="?url=edit-siswa&nisn=<?= $data['nisn'] ?>" class='btn btn-warning'>
                <i class="bi bi-pen"></i></a>
            </td>
            <td>
                <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data')" href="?
                url=hapus-siswa&nisn=<?= $data['nisn'] ?>" class='btn btn-danger'>
                <i class="bi bi-trash3"></i></a>
            </td>
        </tr>
    <?php } ?>

    <?php
            if (!empty($_GET['save']) && $_GET['save'] == 'success') {
                echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Sukses!</strong> data baru berhasil di tambahkan.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                ';
            } else if (!empty($_GET['save']) && $_GET['save'] == 'failed') {
                echo '<p>Gagal di Simpan</p>';
            } else if (!empty($_GET['delete']) && $_GET['delete'] == 'success') {
                echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Sukses!</strong> data berhasil di hapus.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                ';
            } elseif (!empty($_GET['delete']) && $_GET['delete'] == 'failed') {
                echo '<p>Gagal di Hapus</p>';
            } ?>

</table>
<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM pendaftaran WHERE id=$id");
$data = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Peserta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <h2>Edit Data Peserta</h2>
    <form method="POST">
        <div class="mb-3">
            <label>Nama Peserta</label>
            <input type="text" name="nama_peserta" class="form-control" value="<?= $data['nama_peserta'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?= $data['email'] ?>" required>
        </div>
        <div class="mb-3">
            <label>No. HP</label>
            <input type="text" name="no_hp" class="form-control" value="<?= $data['no_hp'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Nama Seminar</label>
            <input type="text" name="nama_event" class="form-control" value="<?= $data['nama_event'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Tanggal Daftar</label>
            <input type="date" name="tanggal_daftar" class="form-control" value="<?= $data['tanggal_daftar'] ?>" required>
        </div>
        <button type="submit" name="update" class="btn btn-success">Update</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>

    <?php
    if (isset($_POST['update'])) {
        $nama = $_POST['nama_peserta'];
        $email = $_POST['email'];
        $hp = $_POST['no_hp'];
        $event = $_POST['nama_event'];
        $tgl = $_POST['tanggal_daftar'];

        $update = mysqli_query($conn, "UPDATE pendaftaran SET
                    nama_peserta='$nama',
                    email='$email',
                    no_hp='$hp',
                    nama_event='$event',
                    tanggal_daftar='$tgl'
                    WHERE id=$id");

        if ($update) {
            echo "<script>alert('Data berhasil diupdate!'); window.location='index.php';</script>";
        } else {
            echo "<div class='alert alert-danger mt-3'>Gagal mengupdate data.</div>";
        }
    }
    ?>
</div>
</body>
</html>

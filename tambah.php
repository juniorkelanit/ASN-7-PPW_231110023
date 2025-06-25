<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Peserta Seminar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <h2>Tambah Peserta Seminar</h2>
    <form method="POST">
        <div class="mb-3">
            <label>Nama Peserta</label>
            <input type="text" name="nama_peserta" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>No. HP</label>
            <input type="text" name="no_hp" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nama Seminar</label>
            <input type="text" name="nama_event" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Tanggal Daftar</label>
            <input type="date" name="tanggal_daftar" class="form-control" value="<?= date('Y-m-d') ?>" required>
        </div>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>

    <?php
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama_peserta'];
        $email = $_POST['email'];
        $hp = $_POST['no_hp'];
        $event = $_POST['nama_event'];
        $tgl = $_POST['tanggal_daftar'];

        $insert = mysqli_query($conn, "INSERT INTO pendaftaran (nama_peserta, email, no_hp, nama_event, tanggal_daftar) VALUES ('$nama', '$email', '$hp', '$event', '$tgl')");

        if ($insert) {
            echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
        } else {
            echo "<div class='alert alert-danger mt-3'>Gagal menambahkan data.</div>";
        }
    }
    ?>
</div>
</body>
</html>

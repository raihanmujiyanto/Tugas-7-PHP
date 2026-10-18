<?php
    if(
        !isset($_POST['nama']) ||
        !isset($_POST['Kelas']) ||
        !isset($_POST['pesan'])
    ) {
        header("Location: form_pesan.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pesan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<div class="container bg-white p-4 rounded-3 my-4 align-content">
    <body>
        <h2>Hasil Kirim Pesan Behasil Dikirim</h2>
        Terima kasih <strong><?= $_POST['nama'] ?></strong> telah mengirim pesan kepada kami.
        <hr> 
        <p><strong>Nama:</strong> <?= $_POST['nama'] ?></p>
        <p><strong>Kelas:</strong> <?= $_POST['Kelas'] ?></p>
        <p><strong>Pesan:</strong> <?= $_POST['pesan'] ?></p>

        <a href="index.php" class="btn btn-primary">Kembali ke daftar Mahasiswa</a>
    </body>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>
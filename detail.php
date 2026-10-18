<?php
    if (
        !isset($_GET['nim']) && 
        !isset($_GET['nama']) && 
        !isset($_GET['jurusan']) && 
        !isset($_GET['email']) && 
        !isset($_GET['nilai']) && 
        !isset($_GET['grade']) && 
        !isset($_GET['status'])
    ){
        header("Location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container bg-white p-4 rounded-3 my-4">
    <h3 class="mb-3 fw-bold">Detail Mahasiswa</h3>
    <ul class="list-unstyled">
        <li class=" p-3 mb-2 bg-light rounded-2">NIM : <?= $_GET['nim']; ?></li>
        <li class=" p-3 mb-2 bg-light rounded-2">Nama : <?= $_GET['nama']; ?></li>
        <li class=" p-3 mb-2 bg-light rounded-2">Jurusan : <?= $_GET['jurusan']; ?></li>
        <li class=" p-3 mb-2 bg-light rounded-2">Email : <?= $_GET['email']; ?></li>
        <li class=" p-3 mb-2 bg-light rounded-2">Nilai : <?= $_GET['nilai']; ?></li>
        <li class=" p-3 mb-2 bg-light rounded-2">Grade : <?= $_GET['grade']; ?></li>
        <li class=" p-3 mb-2 bg-light rounded-2">Status : <?= $_GET['status']; ?></li>
    </ul>

    <a href="index.php" class="btn btn-primary">Kembali</a>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>
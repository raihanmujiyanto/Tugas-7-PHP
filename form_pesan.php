<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container bg-white p-4 rounded-3 my-4">
        <h2 class="mb-3 fw-bold">Form Kirim Pesan</h2>
        <form action="hasil_pesan.php" method="post">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" id="nama" name="nama" class="form-control" required><br><br>

            <label for="Kelas" class="form-label">Kelas:</label>
            <input type="text" id="Kelas" name="Kelas" class="form-control" required><br><br>

            <label for="pesan" class="form-label">Pesan:</label>
            <textarea id="pesan" name="pesan" class="form-control" rows="5" required></textarea><br><br>

            <input type="submit" value="Kirim Pesan" class="btn btn-primary">
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>
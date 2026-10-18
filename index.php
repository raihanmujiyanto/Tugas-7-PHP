<?php
    // Data Mahasiswa 
    $mahasiswa = [
        [
            "nim" => "20001",
            "nama" => "Rafael Aderland",
            "jurusan" => "Teknik Informatika",
            "email" => "rafael@upi.edu",
            "nilai" => 90
        ],
        [
            "nim" => "20002",
            "nama" => "Audrey Putri",
            "jurusan" => "Sistem Informasi",
            "email" => "audrey@upi.edu",
            "nilai" => 70
        ],
        [
            "nim" => "20003",
            "nama" => "Hera Prameswar",
            "jurusan" => "Teknik Komputer",
            "email" => "hera@upi.edu",
            "nilai" => 65
        ],
        [
            "nim" => "20004",
            "nama" => "Azzahra Novianti Dewi",
            "jurusan" => "Teknik Elektro",
            "email" => "azzahra@upi.edu",
            "nilai" => 30
        ],
        [
            "nim" => "20005",
            "nama" => "Stevany Clarisa",
            "jurusan" => "Teknik Mesin",
            "email" => "stevany@upi.edu",
            "nilai" => 87
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
     


</head>
<body>
    <div class="container p-4 bg-light rounded-3 my-4">
    
    <h1 class="text-center my-4">Daftar Mahasiswa</h1>
    <p class="text-center my-3" >Mini Website PHP dasar</p>
    <a href="form_pesan.php" class="btn btn-primary m-3 ">Kirim Pesan</a>
    <table class="table table-striped align-middle table-bordered table-hover">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Email</th>
                <th>Nilai</th>
                <th>Grade</th>
                <th>Status</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($mahasiswa as $data): ?>
                <?php
                    if ($data['nilai'] >= 85) {
                        $grade = 'A';
                    } elseif ($data['nilai'] >= 70) {
                        $grade = 'B';
                    } elseif ($data['nilai'] >= 60) {
                        $grade = 'C';
                    } else {
                        $grade = 'D';
                    }

                    if ($data['nilai'] >= 70) {
                        $status = 'Lulus';
                    } else {
                        $status = 'Tidak Lulus';
                    }
                ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $data['nim'] ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['jurusan'] ?></td>
                <td><?= $data['email'] ?></td>
                <td><?= $data['nilai'] ?></td>
                <td><?= $grade ?></td>
                <td>
                    <?php if ($status === 'Lulus'): ?>
                        <span class="text-success fw-bold"><?= $status ?></span>
                    <?php else: ?>
                        <span class="text-danger fw-bold"><?= $status ?></span>
                    <?php endif; ?>
                </td>
                <td><a href="detail.php?nim=<?= $data['nim'] ?>&nama=<?= $data['nama'] ?>&jurusan=<?= $data['jurusan'] ?>&email=<?= $data['email'] ?>&nilai=<?= $data['nilai'] ?>&grade=<?= $grade ?>&status=<?= $status ?>" class="btn btn-info btn-sm">Lihat Detail</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>

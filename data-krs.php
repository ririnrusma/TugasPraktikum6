<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data KRS</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #8B0000;
            text-align: center;
        }
        .btn-primary {
            background-color: #DAA520;
            border-color: #DAA520;
        }
        .btn-primary:hover {
            background-color: #5a6268;
            border-color: #5a6268;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #bd2130;
            border-color: #bd2130;
        }
        .btn-secondary {
            background-color: #8B0000;
            border-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }
        .warna {
            color: blue; 
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">KRS Mahasiswa</h1>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Mata Kuliah</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                $nomor = 1; // Inisialisasi nomor urut
                
                $sql = "SELECT mahasiswa.nama AS 'Nama Lengkap', matakuliah.nama AS 'Mata Kuliah', CONCAT(mahasiswa.nama, '<span class=\"warna\"> Mengambil Mata Kuliah ', matakuliah.nama, '</span> (', matakuliah.jumlah_sks, ' SKS)') AS 'Keterangan'
                        FROM krs
                        JOIN mahasiswa ON krs.mahasiswa_npm = mahasiswa.npm
                        JOIN matakuliah ON krs.matakuliah_kodemk = matakuliah.kodemk";
                $result = mysqli_query($koneksi, $sql);

                if (mysqli_num_rows($result) > 0) {
                  
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$nomor."</td>"; 
                        echo "<td>".$row["Nama Lengkap"]."</td>";
                        echo "<td>".$row["Mata Kuliah"]."</td>";
                        echo "<td>".$row["Keterangan"]."</td>";
                        echo "</tr>";
                        $nomor++; 
                    }
                } else {
                    echo "<tr><td colspan='4'>Tidak ada data</td></tr>";
                }
                mysqli_close($koneksi);
                ?>
            </tbody>
        </table>
        <a href="input-krs.php" class="btn btn-primary">Ambil KRS</a>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </div>
</body>
</html>

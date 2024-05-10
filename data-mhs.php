<?php
include "koneksi.php";

// Penghapusan data mahasiswa
if (isset($_POST["hapus"])) {
    $npm = $_POST["npm"];
    $sql = "DELETE FROM mahasiswa WHERE npm='$npm'";
    if (mysqli_query($koneksi, $sql)) {
        header("Location: data-mhs.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}

// Memuat data mahasiswa
$sql = "SELECT * FROM mahasiswa";
$result = mysqli_query($koneksi, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
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
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Data Mahasiswa</h1>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col">NPM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$row["npm"]."</td>";
                        echo "<td>".$row["nama"]."</td>";
                        echo "<td>".$row["jurusan"]."</td>";
                        echo "<td>".$row["alamat"]."</td>";
                        echo "<td>";
                        // Tombol Hapus
                        echo "<form action='data-mhs.php' method='post' style='display: inline;'>";
                        echo "<input type='hidden' name='npm' value='".$row["npm"]."'>";
                        echo "<button type='submit' class='btn btn-danger' name='hapus'>Hapus</button>";
                        echo "</form>";
                        // Tombol Edit
                        echo "<a href='edit-mhs.php?npm=".$row["npm"]."' class='btn btn-primary'>Edit</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Tidak ada data mahasiswa.</td></tr>";
                }
                mysqli_close($koneksi);
                ?>
            </tbody>
        </table>
        <a href="input-mhs.php" class="btn btn-primary">Input Data</a>
        <a href="index.php" class="btn btn-secondary">Kembali</a>

    </div>
</body>
</html>

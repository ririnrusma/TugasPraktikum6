<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kodemk = $_POST["kodemk"];
    $nama = $_POST["nama"];
    $jumlah_sks = $_POST["jumlah_sks"];

    $sql = "UPDATE matakuliah SET nama='$nama', jumlah_sks='$jumlah_sks' WHERE kodemk='$kodemk'";

    if (mysqli_query($koneksi, $sql)) {
        header("Location: data-mk.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}

if (isset($_GET['kodemk'])) {
    $kodemk = $_GET['kodemk'];
    $sql = "SELECT * FROM matakuliah WHERE kodemk='$kodemk'";
    $result = mysqli_query($koneksi, $sql);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $nama = $row['nama'];
        $jumlah_sks = $row['jumlah_sks'];
    } else {
        echo "Kode MK tidak ditemukan.";
        exit();
    }
} else {
    echo "Kode MK tidak ditemukan.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mata Kuliah</title>
    
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
        form {
            max-width: 600px;
            margin: auto;
        }
        label {
            font-weight: bold;
            color: #8B0000;
        }
        .btn-primary {
            background-color: #DAA520;
            border-color: #DAA520;
        }
        .btn-primary:hover {
            background-color: #5a6268;
            border-color: #5a6268;
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
    <h1 class="mb-4">Edit Mata Kuliah</h1>
    <form action="" method="POST">
        <div class="form-group">
            <label for="kodemk">Kode Matakuliah</label>
            <input type="text" class="form-control" id="kodemk" name="kodemk" value="<?= $kodemk ?>" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama Matakuliah</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $nama ?>" required>
        </div>
        <div class="form-group">
            <label for="jumlah_sks">Jumlah SKS</label>
            <input type="number" class="form-control" id="jumlah_sks" name="jumlah_sks" value="<?= $jumlah_sks ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="data-mk.php" class="btn btn-secondary">Batal</a>
    </form>
</div>
</body>
</html>

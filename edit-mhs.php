<?php
include "koneksi.php";
$npm = $_GET['npm'];

$sql = "SELECT * FROM mahasiswa WHERE npm='$npm'";
$result = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $nama = $row["nama"];
    $jurusan = $row["jurusan"];
    $alamat = $row["alamat"];
} else {
    echo "Data mahasiswa tidak ditemukan.";
    exit();
}

if (isset($_POST["simpan"])) {
    $nama = $_POST["nama"];
    $jurusan = $_POST["jurusan"];
    $alamat = $_POST["alamat"];

    $sql = "UPDATE mahasiswa SET nama='$nama', jurusan='$jurusan', alamat='$alamat' WHERE npm='$npm'";
    if (mysqli_query($koneksi, $sql)) {
        header("Location: data-mhs.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
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
        <h1 class="mb-4">Edit Data Mahasiswa</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="npm">NPM</label>
                <input type="text" class="form-control" id="npm" name="npm" value="<?= $npm ?>" readonly>
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $nama ?>" required>
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" id="jurusan" name="jurusan" required>
                    <option value="Teknik Informatika" <?= ($jurusan == "Teknik Informatika") ? "selected" : "" ?>>Teknik Informatika</option>
                    <option value="Sistem Informasi" <?= ($jurusan == "Sistem Informasi") ? "selected" : "" ?>>Sistem Informasi</option>
                </select>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" required><?= $alamat ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="Simpan Perubahan">Simpan</button>
            <a href="data-mhs.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>

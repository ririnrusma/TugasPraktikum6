<?php
include "koneksi.php";

if (isset($_POST["hapus"])) {
    $kodemk = $_POST["kodemk"];
    $sql = "DELETE FROM matakuliah WHERE kodemk='$kodemk'";
    if (mysqli_query($koneksi, $sql)) {
        header("Location: data-mk.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}

$sql = "SELECT * FROM matakuliah";
$result = mysqli_query($koneksi, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mata Kuliah</title>
    
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
        <h1 class="mb-4">Data Mata Kuliah</h1>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Kode MK</th>
                    <th scope="col">Nama Mata Kuliah</th>
                    <th scope="col">Jumlah SKS</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$row["kodemk"]."</td>";
                        echo "<td>".$row["nama"]."</td>";
                        echo "<td>".$row["jumlah_sks"]."</td>";
                        echo "<td>";
                        // Tombol Hapus
                        echo "<form action='data-mk.php' method='post' style='display: inline;'>";
                        echo "<input type='hidden' name='kodemk' value='".$row["kodemk"]."'>";
                        echo "<button type='submit' class='btn btn-danger' name='hapus'>Hapus</button>";
                        echo "</form>";
                        // Tombol Edit
                        echo "<a href='edit-mk.php?kodemk=".$row["kodemk"]."' class='btn btn-primary'>Edit</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Tidak ada data mata kuliah.</td></tr>";
                }

                // Menutup koneksi database
                mysqli_close($koneksi);
                ?>
            </tbody>
        </table>
        <a href="input-mk.php" class="btn btn-primary">Input Data</a>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </div>
</body>
</html>

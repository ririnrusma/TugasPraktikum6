<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $npm = $_POST["npm"];
    $nama = $_POST["nama"];
    $jurusan = $_POST["jurusan"];
    $alamat = $_POST["alamat"];

    $sql = "INSERT INTO mahasiswa (npm, nama, jurusan, alamat) VALUES ('$npm', '$nama', '$jurusan', '$alamat')";

    if (mysqli_query($koneksi, $sql)) {
        header("Location: data-mhs.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
?>

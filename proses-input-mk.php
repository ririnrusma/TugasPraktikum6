<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kodemk = $_POST["kodemk"];
    $nama = $_POST["nama"];
    $jumlah_sks = $_POST["jumlah_sks"];

    $sql = "INSERT INTO matakuliah (kodemk, nama, jumlah_sks) VALUES ('$kodemk', '$nama', '$jumlah_sks')";

    if (mysqli_query($koneksi, $sql)) {
        header("Location: data-mk.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
?>
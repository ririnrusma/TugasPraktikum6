<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $npm = $_POST["npm"];
    $kodemk = $_POST["kodemk"];

    $query_check = "SELECT * FROM mahasiswa WHERE npm = '$npm'";
    $result_check = mysqli_query($koneksi, $query_check);

    $query_check_mk = "SELECT * FROM matakuliah WHERE kodemk = '$kodemk'";
    $result_check_mk = mysqli_query($koneksi, $query_check_mk);

    if (mysqli_num_rows($result_check) > 0 && mysqli_num_rows($result_check_mk) > 0) {
        $sql = "INSERT INTO krs (id, mahasiswa_npm, matakuliah_kodemk) VALUES ('$id', '$npm', '$kodemk')";
        
        if (mysqli_query($koneksi, $sql)) {
            header("Location: data-krs.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
        }
    } else {
        echo "<script>alert('Mahasiswa atau matakuliah tidak tersedia.');</script>";
    }
    mysqli_close($koneksi);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mata Kuliah</title>
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
        <h1 class="mb-4">Tambahkan Mata Kuliah</h1>
        <form action="proses-input-mk.php" method="POST">
            <div class="form-group">
                <label for="kodemk">Kode MK</label>
                <input type="text" class="form-control" id="kodemk" name="kodemk" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama Mata Kuliah</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="jumlah_sks">Jumlah SKS</label>
                <input type="number" class="form-control" id="jumlah_sks" name="jumlah_sks" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <a href="data-mk.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>



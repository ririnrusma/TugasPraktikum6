<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data KRS</title>
    
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
            margin-bottom: 30px;
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
        <h1 class="mb-4">Input Data KRS</h1>
        <form action="proses-input-krs.php" method="POST">
        <div class="form-group">
                <label for="id">ID</label>
                <input type="text" class="form-control" id="id" name="id" required>
            </div>
            <div class="form-group">
                <label for="npm">NPM</label>
                <input type="text" class="form-control" id="npm" name="npm" required>
            </div>
            <div class="form-group">
                <label for="kodemk">Kode Matakuliah</label>
                <input type="text" class="form-control" id="kodemk" name="kodemk" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="data-krs.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>

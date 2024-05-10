<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Utama</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family:Verdana, Geneva, Tahoma;
            margin: 0;
            padding: 0;
            background-image: url('UNSIKA.jpg');
            background-size: cover;
        }
        header {
            padding: 100px;
            text-align: center;
            color: white;
            background-color: #8B0000; 
        }
        h1 {
            color: #FFD700;
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .container {
            display: flex;
            justify-content: space-around;
            margin-top: 50px;
        }
        .card {
            flex-basis: 30%;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
            background-color: #8B0000;
            text-align: center;
        }
        h2 a {
            color: #FFD700; 
            text-decoration: none; 
            font-weight: bold;
        }
        h2 a:hover {
            color: #DAA520; 
        }
    </style>
</head>
<body>
    <header>
        <h1>SELAMAT DATANG DI WEBSITE</h1>
        <h1>UNIVERSITAS SINGAPERBANGSA KARAWANG</h1>
    </header>
    <div class="container">
        <div class="card">
            <h2><a href="data-mhs.php">Mahasiswa</a></h2>
        </div>
        <div class="card">
            <h2><a href="data-mk.php">Mata Kuliah</a></h2>
        </div>
        <div class="card">
            <h2><a href="data-krs.php">KRS</a></h2>
        </div>
    </div>
</body>
</html>

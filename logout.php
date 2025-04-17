<?php
session_start();
session_unset(); // Menghapus semua variabel sesi
session_destroy(); // Mengakhiri sesi
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Keluar - Coffee Shop</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: url('kopi.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.6);
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .logout-container {
            z-index: 2;
            background: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
        }

        .logout-container h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .logout-container p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .logout-container a {
            background-color: #d9bebe;
            color: black;
            padding: 10px 25px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 10px;
            transition: background 0.3s;
        }

        .logout-container a:hover {
            background-color: #bca5a5;
        }
    </style>
</head>
<body>
    <div class="overlay"></div>
    <div class="logout-container">
        <h1>Terima Kasih!</h1>
        <p>Anda telah berhasil keluar dari akun Anda.</p>
        <a href="login.php">Masuk Kembali</a>
    </div>
</body>
</html>

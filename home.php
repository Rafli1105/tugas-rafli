<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Coffee Shop</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('kopi.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .logo {
            margin-top: 20px;
            text-align: center;
            z-index: 2;
            position: relative;
        }

        .logo img {
            width: 150px;
        }

        .tagline {
            font-size: 40px;
            font-weight: bold;
            text-align: center;
            padding: 20px;
            line-height: 1.4;
            max-width: 400px;
            margin: 0 auto;
            z-index: 2;
            position: relative;
        }

        .bottom-nav {
            display: flex;
            justify-content: space-around;
            background-color: #d9bebe;
            padding: 15px 0;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            z-index: 2;
            position: relative;
        }

        .bottom-nav a {
            text-decoration: none;
            color: black;
            text-align: center;
            font-size: 24px;
            padding: 10px;
        }

        .bottom-nav a:hover {
            color: #5a3c2e;
            background-color: #f4f4f4;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="overlay"></div>

    <div class="logo">
        <img src="logo1.png" alt="Coffee Shop Logo">
    </div>

    <div class="tagline">
        NIKMATI<br>HARIMU<br>DENGAN<br>NGOPI
    </div>

    <div class="bottom-nav">
        <a href="home.php">Beranda</a>
        <a href="shop.php">Belanja</a>
        <a href="logout.php">Keluar</a>
    </div>
</body>

</html>

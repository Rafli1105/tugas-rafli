<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja - Coffee Shop</title>
    <style>
        /* Tambahkan gaya yang sesuai di sini, misalnya warna latar belakang dan layout */
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .header {
            background-color: #5a3c2e;
            color: white;
            padding: 15px 20px;
            text-align: center;
        }

        .products {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }

        .product {
            background: white;
            border-radius: 10px;
            width: 200px;
            margin: 10px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product img {
            width: 100%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .product h3 {
            margin: 15px 0;
        }

        .product .price {
            font-size: 18px;
            font-weight: bold;
            color: #5a3c2e;
        }

        .product button {
            background-color: #5a3c2e;
            color: white;
            padding: 10px;
            border: none;
            width: 100%;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            cursor: pointer;
        }

        .product button:hover {
            background-color: #4a2d21;
        }

        .bottom-nav {
            display: flex;
            justify-content: space-around;
            background-color: #d9bebe;
            padding: 15px 0;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            position: relative;
            margin-top: 20px;
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

    <div class="header">
        <h1>Belanja Kopi</h1>
    </div>

    <div class="products">
        <div class="product">
            <img src="arabica.jpg" alt="Kopi 1">
            <h3>Kopi Arabika</h3>
            <p class="price">Rp 50,000</p>
            <button>Beli Sekarang</button>
        </div>
        <div class="product">
            <img src="arabica.jpg" alt="Kopi 2">
            <h3>Kopi Robusta</h3>
            <p class="price">Rp 40,000</p>
            <button>Beli Sekarang</button>
        </div>
        <!-- Tambahkan produk lainnya di sini -->
    </div>

    <div class="bottom-nav">
        <a href="home.php">Beranda</a>
        <a href="shop.php">Belanja</a>
        <a href="logout.php">Keluar</a>
    </div>

</body>

</html>

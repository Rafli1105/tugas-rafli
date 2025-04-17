<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Coffee Shop</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #b08968, #7f5539); /* gradasi hangat */
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .login-box {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 40px 30px;
            border-radius: 15px;
            width: 90%;
            max-width: 400px;
            text-align: center;
        }

        .login-box img {
            width: 100px;
            margin-bottom: 20px;
        }

        h2 {
            margin-bottom: 10px;
            font-size: 20px;
        }

        p {
            margin-bottom: 20px;
            font-size: 14px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: none;
            border-radius: 8px;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #ddb892;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            color: #5e3023;
            cursor: pointer;
            margin-bottom: 10px;
        }

        button:hover {
            background-color: #d4a276;
        }

        a {
            color: #ffdaaa;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .register-box {
            margin-top: 15px;
            font-size: 13px;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <img src="logo1.png" alt="Coffee Shop Logo">
        <h2>SELAMAT DATANG DI COFFEE SHOP</h2>
        <p>SILAHKAN MELAKUKAN LOGIN!</p>
        <form action="proses_login.php" method="POST">
            <label>USERNAME :</label><br>
            <input type="text" name="username" placeholder="Masukkan Username" required><br>
            <label>PASSWORD :</label><br>
            <input type="password" name="password" placeholder="Masukkan Password" required><br>
            <button type="submit">Login</button>
        </form>
        <div class="register-box">
            Jika belum memiliki akun silahkan melakukan <a href="register.php">register</a>
        </div>
    </div>
</body>
</html>

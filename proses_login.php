<?php
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Cek di database
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $query);

// Jika login berhasil
if (mysqli_num_rows($result) > 0) {
    session_start();
    $_SESSION['username'] = $username;
    header("Location: home.php");
    exit();
} else {
    // Jika gagal, munculkan alert dan kembali ke login
    echo "<script>
        alert('Username atau password salah!');
        window.location.href = 'login.php';
    </script>";
}
?>

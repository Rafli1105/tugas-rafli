<?php
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Simpan ke database
$query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
$result = mysqli_query($conn, $query);

if ($result) {
    // Redirect ke login.php
    header("Location: login.php");
    exit();
} else {
    echo "Registrasi gagal: " . mysqli_error($conn);
}
?>

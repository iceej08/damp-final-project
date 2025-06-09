<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        echo "<script>alert('Password tidak cocok!'); window.location='signup.php';</script>";
        exit();
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO user (name, username, email, password) VALUES ('$name', '$username', '$email', '$hashed_password')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Signup berhasil! Silakan login.'); window.location='login.php';</script>";
    } else {
        echo "<script>alert('Signup gagal! Username atau email sudah digunakan.'); window.location='signup.php';</script>";
    }
}
?>
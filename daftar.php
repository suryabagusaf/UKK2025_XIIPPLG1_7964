<?php
session_start();
include "koneksi.php";

if(isset($_POST['username'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Gunakan password_hash()

    // Gunakan Prepared Statement untuk mencegah SQL Injection
    $stmt = $koneksi->prepare("INSERT INTO user (nama, username, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nama, $username, $password);

    if($stmt->execute()) {
        echo '<script>alert("Selamat, Pendaftaran Anda Berhasil, Silahkan Login!"); window.location="login.php";</script>';
        exit();
    } else {
        echo '<script>alert("Pendaftaran gagal!");</script>';
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Ke Website</title>
</head>
<body>
    <form method="post">
        <table align="center">
            <tr>
                <td colspan="2" align="center">
                    <h3>REGISTER</h3>
                </td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" nama="username" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">Daftar User</button>
                    <a href="login.php">Login</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

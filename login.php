<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
        <title>Login Ke Website</title>
</head>
<body>
    
    <?php
        if(isset($_POST['username'])) {
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            
            $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");


            if(mysqli_num_rows($query) > 0){
                $data = mysqli_fetch_array($query);
                $_SESSION['user'] = $data;
                echo '<script>alert("Selamat Datang,'.$data['nama'].'"); location.href="index.php";</script>';

            }else{
                echo '<script>alert("Username/Password Anda Tidak Sesuai.");</script>';

            }
        }
    ?>
    <form method="post">
        <table align="center">
            <tr>
                <td colspan="2" align="center">
                    <h3>LOGIN KE AKUN TO-DO LIST ANDA</h3>
                </td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
            <tr>
    <td></td>
    <td>
        <button type="submit">Login</button>
        <a href="daftar.php">daftar</a>
    </td>
</tr>

            </tr>
        </table>
    </from>
</body>
</html>
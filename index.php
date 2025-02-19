<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location:login.php');
    exit(); 
}
?>    
<!DOCTYPE html>
<html>
<head>
    <title>Belajar Membuat Halaman Login</title>
</head>
<body style="text-align:center">
    <h1>APLIKASI TO-DO LIST</h1>
    <a href="index.php">Home</a>
    <a href="logout.php">Logout</a>
    <hr>
    <h3>Selamat datang <?php echo $_SESSION['user']['nama']; ?></h3>
</body>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todolist App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>    
    <?phpinclude"header.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

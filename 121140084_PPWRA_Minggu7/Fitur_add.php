<?php
include ("Connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $prodi = $_POST["prodi"];

    $query_add = "INSERT INTO data_mahasiswa (nim, nama, prodi) VALUES ('$nim', '$nama', '$prodi')";
    
    mysqli_query($koneksi, $query_add);
    header("Location: Main.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitur Tambah</title>
    <link rel="stylesheet" href="style_PHP.css">
</head>

<body>
    <h2>Tambah Data Mahasiswa</h2><br>
    <form class="form-add" action="Fitur_add.php" method="post">
        <label for="nim">NIM :</label>
        <input type="text" name="nim" required><br><br>
        <label for="nama">Nama :</label>
        <input type="text" name="nama" required><br><br>
        <label for="prodi">Program Studi :</label>
        <input type="text" name="prodi" required><br><br>
        <input class="input-add" type="submit" value="Tambahkan">
    </form>
</body>

</html>
<?php
include ("Connection.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["nim"])) {
    $nim = $_GET["nim"];

    $query_delete = "DELETE FROM data_mahasiswa WHERE nim = '$nim'";
    mysqli_query($koneksi, $query_delete);
    header("Location: Main.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitur Hapus</title>
    <link rel="stylesheet" href="style_PHP.css">
</head>

<body>
    <h2>Hapus Data Mahasiswa</h2><br>
    <form class="form-delete" action="Fitur_delete.php" method="get">
        <label for="nim">Masukkan data NIM mahasiswa yang akan dihapus :</label>
        <input type="text" name="nim" required>
        <input class="input-delete" type="submit" value="Hapus" onclick="return confirm('Apakah Anda yakin?')">
    </form>
</body>

</html>
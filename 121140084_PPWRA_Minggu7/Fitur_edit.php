<?php
include("Connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nim_cari"])) {
    $nim_cari = $_POST["nim_cari"];

    // Fetch data mahasiswa berdasarkan NIM
    $query = "SELECT * FROM data_mahasiswa WHERE nim = '$nim_cari'";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])) {
    $nim_lama = $_POST["nim_lama"]; // NIM sebelum diubah
    $nim_baru = $_POST["nim"];
    $nama = $_POST["nama"];
    $prodi = $_POST["prodi"];

    // Perbarui data berdasarkan NIM lama
    $query_edit = "UPDATE data_mahasiswa SET nim = '$nim_baru', nama = '$nama', prodi = '$prodi' WHERE nim = '$nim_lama'";
    mysqli_query($koneksi, $query_edit);
    
    header("Location: Main.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitur Edit</title>
    <link rel="stylesheet" href="style_PHP.css">
</head>

<body>
    <h2>Edit Data Mahasiswa</h2><br>
    <form class="form-edit" action="Fitur_edit.php" method="post">
        <label for="nim_cari">Masukkan NIM :</label>
        <input type="text" name="nim_cari" required><br><br>
        <input class="input-edit" type="submit" value="Tampilkan Data">
    </form>

    <?php if (isset($data)) : ?>
    <hr>
    <form class="data-baru" action="Fitur_edit.php" method="post">
        <h3>Data Mahasiswa yang Baru : </h3>
        <input type="hidden" name="nim_lama" value="<?php echo $data['nim']; ?>">
        <label for="nim">NIM Baru :</label>
        <input type="text" name="nim" required value="<?php echo $data['nim']; ?>"><br><br>
        <label for="nama">Nama :</label>
        <input type="text" name="nama" required value="<?php echo $data['nama']; ?>"><br><br>
        <label for="prodi">Program Studi :</label>
        <input type="text" name="prodi" required value="<?php echo $data['prodi']; ?>"><br><br>
        <input class="input-data-baru" type="submit" name="update" value="Perbarui Data">
    </form>
    <?php endif; ?>
</body>

</html>
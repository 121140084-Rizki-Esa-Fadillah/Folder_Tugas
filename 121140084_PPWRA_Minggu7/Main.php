<?php
include ("Connection.php");

// Fetch semua data mahasiswa
$query_Main = "SELECT * FROM data_mahasiswa";
$result = mysqli_query($koneksi, $query_Main);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum Pemweb Minggu 7</title>
    <link rel="stylesheet" href="style_PHP.css">
</head>

<body>
    <h2>Data Mahasiswa</h2>

    <form class="form-prodi" action="Fitur_search.php" method="post">
        <label for="prodi"><b>Pilih Program Studi : </b></label>
        <select name="prodi" id="prodi" class="styled-select">
            <option value="Pilih_Prodi">-- Pilih Prodi --</option>
            <option value="Teknik Kimia">Teknik Kimia</option>
            <option value="Teknik informatika">Teknik informatika</option>
            <option value="Teknik Industri">Teknik Industri</option>
            <option value="Matematika">Matematika</option>
            <option value="Sains Aktuaria">Sains Aktuaria</option>
            <option value="Teknik Sipil">Teknik Sipil</option>
            <option value="Farmasi">Farmasi</option>
            <option value="Teknik Kelautan">Teknik Kelautan</option>
            <option value="Teknik Sistem Energi">Teknik Sistem Energi</option>
            <option value="Biologi">Biologi</option>
            <option value="Teknologi Pangan">Teknologi Pangan</option>
            <option value="Teknik Mesin">Teknik Mesin</option>
            <input type="submit" value="Cari">
    </form>

    <!-- Tampilkan data mahasiswa -->
    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kode Prodi</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $row["nim"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["prodi"]; ?></td>
        </tr>
        <?php endwhile; ?>
    </table><br>

    <button>
        <a href="Fitur_add.php">Tambah Data</a>
    </button>
    <button>
        <a href="Fitur_delete.php">Hapus Data</a>
    </button>
    <button>
        <a href="Fitur_edit.php">Edit Data</a>
    </button>
</body>

</html>
<?php
include("Connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prodi = $_POST["prodi"];
    $query_search = "SELECT * FROM data_mahasiswa WHERE prodi = '$prodi'";
    $result = mysqli_query($koneksi, $query_search);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitur Pencarian</title>
    <link rel="stylesheet" href="style_PHP.css">
</head>

<body>
    <h2>Hasil Pencarian Mahasiswa</h2>

    <table>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
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
        <a href="Main.php">Kembali</a>
    </button>
</body>

</html>

<?php
}
?>
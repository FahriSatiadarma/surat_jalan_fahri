<?php
include 'koneksi.php';

$query = "SELECT * FROM surat_jalan";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Jalan</title>
    <link rel="stylesheet" href="style_index.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            overflow-x: auto;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        button {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: burlywood;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: goldenrod;
        }
        .action-buttons {
            display: flex;
            gap: 10px;
        }
        .add-button {
            display: block;
            width: fit-content;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: burlywood;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }
        .add-button:hover {
            background-color: goldenrod;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Surat Jalan</h1>
        <a href="tambah.php" class="add-button">Tambahkan</a>
        <table>
            <tr>
                <th>No</th>
                <th>Nomor Surat</th>
                <th>Tanggal</th>
                <th>Pengirim</th>
                <th>Penerima</th>
                <th>Tujuan</th>
                <th>Nama Barang</th>
                <th>Jumlah Barang</th>
                <th>Jenis Kendaraan</th>
                <th>Nomor Kendaraan</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nomor_surat'] ?></td>
                <td><?= $row['tanggal'] ?></td>
                <td><?= $row['pengirim'] ?></td>
                <td><?= $row['penerima'] ?></td>
                <td><?= $row['tujuan'] ?></td>
                <td><?= $row['nama_barang'] ?></td>
                <td><?= $row['jumlah_barang'] ?></td>
                <td><?= $row['jenis_kendaraan'] ?></td>
                <td><?= $row['nomor_kendaraan'] ?></td>
                <td><?= $row['keterangan'] ?></td>
                <td class="action-buttons">
                <button onclick="window.location.href='edit_surat.php?id=<?= $row['id'] ?>';" style="color: white;">Edit</button>
<button onclick="if(confirm('Apakah Anda yakin ingin menghapus?')) window.location.href='hapus_surat_jalan.php?id=<?= $row['id'] ?>';">Hapus</button>
<button onclick="window.location.href='cetak.php?id=<?= $row['id'] ?>';" style="color: white;">Cetak</button>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
        <button onclick="window.location.href='index.php';"  class="add-button">Keluar</button>

    </div>
</body>
</html>

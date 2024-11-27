<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nomor_surat = $_POST['nomor_surat'];
    $tanggal = $_POST['tanggal'];
    $pengirim = $_POST['pengirim'];
    $penerima = $_POST['penerima'];
    $tujuan = $_POST['tujuan'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];
    $jenis_kendaraan = $_POST['jenis_kendaraan'];
     $nomor_kendaraan = $_POST['nomor_kendaraan'];
      $keterangan = $_POST['keterangan'];

    $query = " INSERT INTO surat_jalan (nomor_surat, tanggal, pengirim, penerima, tujuan, nama_barang, jumlah_barang, jenis_kendaraan, nomor_kendaraan, keterangan) VALUES ('$nomor_surat', '$tanggal', '$pengirim', '$penerima', '$tujuan', '$nama_barang', '$jumlah_barang', '$jenis_kendaraan', '$nomor_kendaraan', '$keterangan')";
   if ( mysqli_query($koneksi, $query));
       echo "Data berhasil ditambahkan";
 header('Location: menu.php');    
}
?>

<html>
    <head>
        <title>Tambah Surat Jalan</title>
        <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { max-width: 400px; margin: auto; }
        label { display: block; margin: 10px 0 5px; }
        input, textarea { width: 100%; padding: 8px; margin-bottom: 10px; }
        button { padding: 10px; background-color: goldenrod; color: white; border: none; cursor: pointer; }
        button:hover { backgroundor: goldenrod; }
    </style>
    </head>

    <body>
        
        <h1>Tambah Surat Jalan </h1>
        <form method="POST">

            <label>Nomor Surat:</label><br>
            <input type="text" name="nomor_surat" required><br>

            <label>Tanggal:</label><br>
            <input type="date" name="tanggal" required><br>

            <label>pengirim:</label><br>
            <input type="text" name="pengirim" required><br>

            <label>Penerima</label><br>
            <input type="text" name="penerima" required><br>

            <label>Tujuan</label><br>
            <input type="text" name="tujuan" required><br>

            <label>Nama Barang</label><br>
            <input type="text" name="nama barang" required></><br>

            <label>Jumlah Barang</label><br>
            <input type="text" name="jumlah barang" required><br>

            <label>Jenis Kendaraan</label><br>
            <input type="text" name="jenis kendaraan" required><br>

            <label>Nomor Kendaraan</label><br>
            <input type="text" name="nomor kendaraan" required><br>
        
            <label>Keterangan</label><br>
            <textarea name="keterangan" required></textarea><br>
             <button type="submit">Simpan</button>
            
        </form>
    </body>
</html>
<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming the 'id' is also being sent via POST
    $id = $_POST['id'];
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

    // Prepare the SQL statement
    $stmt = $koneksi->prepare("UPDATE surat_jalan SET 
        nomor_surat = ?, 
        tanggal = ?, 
        pengirim = ?, 
        penerima = ?, 
        tujuan = ?, 
        nama_barang = ?, 
        jumlah_barang = ?, 
        jenis_kendaraan = ?, 
        nomor_kendaraan = ?, 
        keterangan = ? 
        WHERE id = ?");
    
    // Bind parameters
    $stmt->bind_param("ssssssssssi", $nomor_surat, $tanggal, $pengirim, $penerima, $tujuan, $nama_barang, $jumlah_barang, $jenis_kendaraan, $nomor_kendaraan, $keterangan, $id);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Data berhasil diperbarui";
        header("Location: menu.php");
        exit; // Always exit after a header redirect
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $koneksi->close();
}
?>

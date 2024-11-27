<?php
include 'koneksi.php';

if (isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM surat_jalan WHERE id = '$id'";
    $result =  $koneksi->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
    }else{
        echo "Data Tidak Ditemukan";
    }
}
?>

<html>
    <head>
        <title>edit surat</title>
        <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { max-width: 400px; margin: auto; }
        label { display: block; margin: 10px 0 5px; }
        input, textarea { width: 100%; padding: 8px; margin-bottom: 10px; }
        button { padding: 10px; background-color: #4CAF50; color: white; border: none; cursor: pointer; }
        button:hover { backgroundor: #45a049; }
    </style>
    </head>
    <body>
        
        <h2>Edit Surat Jalan</h2>
        <h1>Edit Surat Jalan </h1>
        <form action="proses_edit.php" method= "post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">


            <label>Nomor Surat:</label><br>
            <input type="text" name="nomor_surat"  value="<?php echo $row['nomor_surat']; ?>" required><br>

            <label>Tanggal:</label><br>
            <input type="date" name="tanggal"  value="<?php echo $row['tanggal']; ?>" required><br>

            <label>pengirim:</label><br>
            <input type="text" name="pengirim"  value="<?php echo $row['pengirim']; ?>" required><br>

            <label>Penerima</label><br>
            <input type="text" name="penerima"  value="<?php echo $row['penerima']; ?>" required><br>

            <label>Tujuan</label><br>
            <input type="text" name="tujuan"  value="<?php echo $row['tujuan']; ?>" required><br>

            <label>Nama Barang</label><br>
            <input type="text" name="nama_barang"  value="<?php echo $row['nama_barang']; ?>" required><br>


            <label>Jumlah Barang</label><br>
            <input type="text" name="jumlah_barang"  value="<?php echo $row['jumlah_barang']; ?>" required><br>
        

            <label>Jenis_Kendaraan</label><br>
            <input type="text" name="jenis_kendaraan"  value="<?php echo $row['jenis_kendaraan']; ?>" required><br>

             <label>Jumlah_Barang</label><br>
            <input type="text" name="nomor_kendaraan"  value="<?php echo $row['nomor_kendaraan']; ?>" required><br>
        
            <label>Keterangan</label><br>
            <textarea name="keterangan"><?php echo $row['keterangan']; ?></textarea><br>

             <input type="submit" value="Edit">
            
        </form>
    </body>
</html>
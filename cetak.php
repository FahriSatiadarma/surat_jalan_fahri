<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Surat Jalan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
        }
        h1 {
            text-align: center;
            margin-bottom: 10px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 20px;
        }
        .header div {
            width: 45%;
        }
        .header p {
            margin: 2px 0;
        }
        .company-info {
            text-align: right;
            margin-bottom: 10px;
        }
        .company-info img {
            display: flex;
            max-width: 100px; /* Atur ukuran logo sesuai kebutuhan */
            height: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .footer {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
        }
        .signature {
            text-align: center;
            flex: 1;
        }
        .signature p {
            margin: 10px 0;
        }
        .note {
            font-size: 0.9em;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="company-info">
    <img src="/../downloads/RPL.jpg alt="Logo Perusahaan"> <!-- Ganti dengan path logo yang sesuai -->
    <h2>PT. Naga Hitam</h2>
    <p>Tapos, RT02/09, Depok, Jawa Barat.</p>
    <p>Email: infoperkopian@gmail.com</p>
    <p>Telepon: (062) 8888888888</p>
</div>


<div class="header">
    <h1>Surat Jalan</h1>

    <?php
    include 'koneksi.php';

    // Fetch the latest surat jalan record to get the latest Tanggal and Nomor Surat
    $sql = mysqli_query($koneksi, "SELECT * FROM surat_jalan ORDER BY id DESC LIMIT 1");
    $data = mysqli_fetch_array($sql);
    ?>
    <div>
        <p><strong>Nama Penerima:</strong> <?php echo isset($data['penerima']) ? $data['penerima'] : '_____________________'; ?></p>
        <p><strong>Tanggal:</strong> <?php echo isset($data['tanggal']) ? $data['tanggal'] : '_____________________'; ?></p>
        <p><strong>Nomor Surat:</strong> <?php echo isset($data['nomor_surat']) ? $data['nomor_surat'] : '_____________________'; ?></p>
    </div>
</div>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Pengirim</th>
            <th>Tujuan</th>
            <th>Nama Barang</th>
            <th>Jumlah Barang</th>
            <th>Jenis Kendaraan</th>
            <th>Nomor Kendaraan</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $sql = mysqli_query($koneksi, "SELECT * FROM surat_jalan");
        while ($data = mysqli_fetch_array($sql)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['pengirim']; ?></td>
                <td><?php echo $data['tujuan']; ?></td>
                <td><?php echo $data['nama_barang']; ?></td>
                <td><?php echo $data['jumlah_barang']; ?></td>
                <td><?php echo $data['jenis_kendaraan']; ?></td>
                <td><?php echo $data['nomor_kendaraan']; ?></td>
                <td><?php echo $data['keterangan']; ?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>

<div class="footer">
    <div class="signature">
        <p>Hormat Kami,</p>
        <p>__________________________</p>
        <p>(Tanda Tangan Pengirim)</p>
    </div>
    <div class="signature">
        <p>Tanda Terima,</p>
        <p>__________________________</p>
        <p>(Tanda Tangan Penerima)</p>
    </div>
</div>

<p class="note">Catatan: Harap simpan surat jalan ini sebagai bukti pengiriman barang.</p>

<script>
    window.print();
</script>

</body>
</html>

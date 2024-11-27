<?php
include 'koneksi.php';

 if (isset($_GET['id'])){
    $id = $_GET['id'];
 

 $sql = "DELETE FROM surat_jalan WHERE id = '$id'";

  if ($koneksi->query($sql) === TRUE) {
    echo "Data Berhasil Dihapus";
    header("Location:index.php");
  }else{
    echo "Error" . $koneksi->error;
  }
  $koneksi->close();
  }
  ?>
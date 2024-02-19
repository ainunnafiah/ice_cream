<?php
include "koneksi.php";
if (isset($_GET['id'])) {
    $no = $_GET['id'];
    $hapus = mysqli_query($koneksi, "DELETE FROM ice WHERE no='$no'");

    if ($hapus) {
        echo "<script> alert ('Data berhasil dihapus.'); 
        window.location.href='lihat.php';</script>";
    }
}
mysqli_close($koneksi);

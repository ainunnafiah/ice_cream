<?php
include 'koneksi.php';
$no = $_POST['no'];
$nama_ice_cream = $_POST['nama_ice_cream'];
$harga = $_POST['harga'];
$query = "INSERT INTO ice VALUES (" . $no . ", '" . $nama_ice_cream . "' , '" . $harga . "')";

$sql = mysqli_query($koneksi, $query);
if ($sql) {
    echo "<h2>Data telah berhasil ditambahkan</h2>
    <a href='lihat.php'> Lihat data ice cream</a>";
} else {
    echo "<h2>Data gagal ditambahkan</h2>";
}

<?php
include "Koneksi.php";
if (isset($_GET['id'])) {
    $no = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM ice WHERE no='$no'");
    $data = mysqli_fetch_assoc($query);
} else {
    $data = null;
}
?>

<head>
    <title>Update data Produk Ice Cream</title>
</head>
<style>
    body {
        background: url(back2.png);

    }

    table {
        background-color: rgba(0, 0, 0, 0);
        margin-left: 410px;
        margin-top: 200px;
        width: 600px;
    }

    td {
        border: 1px solid black;
        box-shadow: 10px 5px 10px silver;
    }

    th {
        background-color: rgba(0, 0, 0, 0.1);
    }
</style>
<form name="form1" action="edit.php" method="POST">
    <input type="hidden" name="no" value="<?php echo $no; ?>">
    <table border="1">
        <tr>
            <th colspan="2">Edit Data Produk Ice Cream</th>
        </tr>
        <tr>
            <td>NO</td>
            <td> <input style="background-color: rgba(0, 0, 0, 0);  width: 500px;
            " type="text" name="new_no" value="<?php echo $data ? $data['no'] : ''; ?>"></td>
        </tr>
        <tr>
            <td>Nama Ice Cream</td>
            <td> <input style="background-color: rgba(0, 0, 0, 0);  width: 500px;
" type="text" name="new_nama_ice" value="<?php echo $data ? $data['nama_ice_cream'] : ''; ?>"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td> <input style="background-color: rgba(0, 0, 0, 0);  width: 500px;
            " type="text" name="new_harga" value="<?php echo $data ? $data['harga'] : ''; ?>"></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="ok" value="Edit" onclick="return konfirmasi();">
                <a style="color: blue;" href="lihat.php">Lihat Data Produk Ice Cream</a>
            </td>
        </tr>
    </table>
</form>
<script>
    function konfirmasi() {
        var result = confirm("Apakah Anda ingin merubah data tersebut?");
        if (result) {
            return true;
        } else {
            return false;
        }
    }
</script>
<?php
if (isset($_POST['ok'])) {
    include "koneksi.php";
    $no = $_POST['no'];
    $new_no = $_POST['new_no'];
    $new_nama_ice = $_POST['new_nama_ice'];
    $new_harga = $_POST['new_harga'];

    $k = mysqli_query($koneksi, "UPDATE ice SET no='$new_no', nama_ice_cream='$new_nama_ice',
     harga='$new_harga' WHERE no='$no'");

    if ($k) {
        echo "<script>alert('Data berhasil diupdate.'); 
        window.location.href='lihat.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui data.');</script>";
    }
}
?>
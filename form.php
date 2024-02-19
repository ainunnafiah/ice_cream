<html>

<head>
    <title> ICE CREAM </title>
</head>
<style>
    body {
        background: url(back.jpg);

    }

    h1 {
        font-size: 20px;
        text-align: center;
        margin-top: 200px;
        margin-left: 70px;
    }

    table {
        background-color: rgba(0, 0, 0, 0.1);
        margin-left: 559px;
        margin-top: 10px;
    }

    td {
        border: 2px solid black;
        box-shadow: 10px 5px 20px white;
    }
</style>

<body>
    <h1>INPUT DATA PRODUK ICE CREAM</h1>
    <form method="post" action="simpan.php">
        <table border="1">
            <tr>
                <td>NO</td>
                <td><input type="text" name="no" /></td>
            </tr>
            <tr>
                <td>Nama Ice Cream</td>
                <td><input type="text" name="nama_ice_cream" /></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" /></td>
            </tr>
            <tr>
                <td colspan="2"><input style="margin-left:90px;" type="submit" name="submit" value="Kirim"> </td>
            </tr>
        </table>
    </form>
</body>

</html>
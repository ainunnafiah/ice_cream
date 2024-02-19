<style>
    th {
        background-color: rgba(0, 0, 0, 0.3);
    }

    td {
        border: 1px solid black;
        background-color: rgba(0, 0, 0, 0);
    }

    body {
        background: url(back1.png);

    }

    h2 {
        font-size: 20px;
        text-align: center;
        margin-top: 100px;
    }

    table {
        margin-left: 440px;
        margin-top: 10px;
        box-shadow: 2px 5px 10px green;
    }

    .y a button {
        background-color: rgba(0, 0, 0, 0.1);
        border: 1px solid black;
        border-radius: 4px;
        color: #2C3E50;
        font-family: inherit;
        font-size: 16px;
        box-shadow: 10px 5px 10px black;
        margin-left: 440px;
        margin-top: 10px;
    }

    .o a button {
        background-color: #16A085;
        border-radius: 4px;
        font-family: inherit;
        font-size: 16px;
        margin-left: 440px;
        margin-top: 10px;
        border-radius: 50px;
        border: none
    }

    .o a button:hover {
        background-color: #422adf;
        border: 1px solid white;
        color: white;
    }

    .p a button {
        background-color: rgba(0, 0, 0, 0.1);
        border-radius: 1px;
        border: 2px solid;
        font-family: inherit;
        font-size: 16px;
        border: none;
    }

    .p a button:hover {
        background-color: #1E90FF;
        border: 1px solid white;
        color: white;
    }
</style>
<br>
<br>
<h2> DATA PRODUK ICE CREAM </h2>
<table border="1" width="500px">
    <tr>
        <th>NO</th>
        <th>Nama Ice Cream</th>
        <th>Harga</th>
        <th>Action</th>
    </tr>
    <?php
    include 'koneksi.php';
    $sql = mysqli_query($koneksi, "SELECT * FROM ice");
    while ($row = mysqli_fetch_assoc($sql)) {
        $no = $row['no'];
        $nama_ice_cream = $row['nama_ice_cream'];
        $harga = $row['harga'];
    ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $nama_ice_cream; ?></td>
            <td><?php echo $harga; ?></td>
            <td>
                <div class="p">
                    <a href="edit.php?id=<?php echo $no; ?>"><button> Edit </button> /</a>
                    <a href="hapus.php?id=<?php echo $no; ?>" onclick="return confirm
                 ('Apakah Anda yakin ingin menghapus data ini?')"><button> Hapus </button></a>
                </div>
            </td>
        </tr>
    <?php
    }

    ?>
</table>
<br>
<div class="y">
    <a href="form.php"><button>Tambah Data Produk ice cream</button></a>
</div>
<br>
<div class="o">
    <a href="ice.html"><button>Kembali Ke Home</button></a>
</div>
<?php
include('db/conn.php');

$min = $_POST["min_harga"];
$max = $_POST["max_harga"];
$query = "SELECT * FROM produk WHERE harga BETWEEN $min AND $max";
$filter = mysqli_query(connection(), $query);

?>

<html>
<head>
    <title>Filter Rentang Harga</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="UTF-8">
</head>

<body>
    <div class="container">
        <h1>DATA BERDASARKAN RANGE HARGA</h1>
        <table border="1px">
            <tr>
                <th>SKU</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Harga Satuan</th>
            </tr>

            <?php while ($data = mysqli_fetch_array($filter)) : ?>
                <tr>
                    <td><?php echo $data['sku']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['kategori']; ?></td>
                    <td><?php echo $data['stok']; ?></td>
                    <td><?php echo $data['harga']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
        <br>
        <button onclick="window.location.href='http://localhost/benaya/barokah'">Kembali</button>
    </div>
</body>

</html>
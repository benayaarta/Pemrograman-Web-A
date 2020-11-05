<?php
include('db/conn.php');

if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    $query = "SELECT * FROM produk WHERE 
		nama LIKE '%$cari%' OR 
		sku LIKE '%$cari%' OR
		kategori LIKE '%$cari%' OR
		stok LIKE '%$cari%' OR
		harga LIKE '%$cari%'";
    $search = mysqli_query(connection(), $query);
} else {
    $query = "SELECT * FROM produk";
    $search = mysqli_query(connection(), $query);
}
?>

<html>

<head>
    <title>Search Result</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<h2>Result</h2>
    <div class="container">
        <table border="1px">
            <tr>
                <th>SKU</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Harga Satuan</th>
            </tr>

            <?php while ($data = mysqli_fetch_array($search)) : ?>
                <tr>
                    <td><?php echo $data['sku']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['kategori']; ?></td>
                    <td><?php echo $data['stok']; ?></td>
                    <td><?php echo $data['harga']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>

        <button onclick="window.location.href='index.php'">Kembali</button>
    </div>
</body>

</html>
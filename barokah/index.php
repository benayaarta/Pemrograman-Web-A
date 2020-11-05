<?php
include ('db/conn.php');
?>

<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<meta charset="utf-8">
<title>Barakoh Mart</title>
	
</head>
	
<body>	
	<h1>Barokah Mart</h1>	
	<a href="insert.php"><h3>Tambah Barang</h3></a>
		
	<table border="1px">
    <thead>
            <tr>
                <td>SKU</td>
                <td>Nama Barang</td>
                <td>Kategori</td>
                <td>Stok</td>
                <td>Harga Satuan</td>
				<td>Aksi</td>
			</tr>
        </thead>
        <tbody>
            <?php
            $view = "SELECT * FROM produk";
            $res = mysqli_query(connection(),$view);
            ?>

            <?php while($data = mysqli_fetch_array($res)) : ?>
                <tr>
                <td><?php echo $data['sku'] ?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['kategori'] ?></td>
                <td><?php echo $data['stok'] ?></td>
                <td><?php echo $data['harga'] ?></td>
                <td>
                    <a href="http://localhost/benaya/barokah/update.php?id=<?php echo $data['sku']?>">Update</a>
                    <a href="http://localhost/benaya/barokah/delete.php?id=<?php echo $data['sku']?>" onclick="return confirm('Hapus Data <?php echo $data['nama']?>')";>Delete</a>
                </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
	</div>
	<div class="clear"></div>
	
	<br>
	
	<form action="search.php" method="GET">
		<label>Cari Barang : </label>
		<input type="text" name="cari" placeholder="Nama Barang">
		<input type="submit" value="Cari">
    </form>
	
	<form action="comp.php" method="post">
            <table>
                <tr>
                    <td>Range Harga</td>
                <tr>
                    <td>
                        <label for="min_harga">Min : </label>
                        <input type="text" name="min_harga" id="min_harga">
                    </td>

                    <td>
                        <label for="max_harga">Max : </label>
                        <input type="text" name="max_harga" id="max_harga">
                    </td>

                    <td>
                        <button type="submit" name="filter">Filter</button>
                    </td>
                </tr>
                </tr>
            </table>
        </form>
	</div>
</body>
</html>
<?php
include ('db/conn.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sku = $_POST['sku'];
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];

    $insert ="INSERT INTO produk (sku, nama, kategori, stok, harga)
             VALUES ('$sku', '$nama', '$kategori', '$stok', '$harga')";
    $res = mysqli_query(connection(), $insert);
    header("index.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">    
        <title>Tambah Data</title>
    </head>
    <body>
        
        <h1>Tambah Data</h1>
        <a href="index.php">Kembali</a>
        <form action="insert.php" method="POST">
            <table width="25%" border="0">
            <tr>
            <td>SKU</td>
           <td><input type="text" name="sku"></td>
            </tr>
            <tr>
            <td>Nama Barang</td>
            <td><input type="text" name="nama"></td>
            </tr>
            <tr>
            <td>Kategori</td>
            <td>
            <select name="kategori">
                    <option selected disabled> -----Pilih-----</option>
                    <option value="Makanan">Makanan</option>
                    <option value="Minuman">Minuman</option>
                    <option value="Alat Tulis Kerja">Alat Tulis Kerja</option>
                    <option value="Alat Tulis Kerja">Kecantikan</option>
					<option value="Other">Other</option>
                </select>

            </td>
                
            </tr>
            <tr>
            
            <td>Stok</td>
            <td><input type="number" name="stok"></td>
            </tr>
            <tr>
            <td>Harga</td>
            <td><input type="number" name="harga"><br> </td>               
            </tr>
           
            <td><input type="submit" name="submit" value="Tambahkan"></td>
           
            </table>
        </form>
    </body>
</html>
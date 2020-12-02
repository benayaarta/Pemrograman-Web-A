<?php
require 'function.php';
global $conn;

if (isset($_POST["id_pendidikan"])) {
   $query = "DELETE FROM pendidikan WHERE id_pendidikan = '" . $_POST['id_pendidikan'] . "'";
   mysqli_query($conn, $query);
}

<?php 

function connection() {

   $dbServer = 'localhost';
   $dbUser = 'root';
   $dbPass = 'bengkulu10';
   $dbName = "profile";

   $conn = mysqli_connect($dbServer, $dbUser, $dbPass);

   if (!$conn) {
    die('Koneksi Gagal: ' . mysqli_error($conn));

}


   mysqli_select_db($conn,$dbName);
	
   return $conn;
}
?>
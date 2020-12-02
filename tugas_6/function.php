<?php
function connection()
{
   $dbServer = 'localhost';
   $dbUser = 'root';
   $dbPass = 'bengkulu10';
   $dbName = "riwayat";

   $conn = mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);

   if (!$conn) {
      die('Koneksi gagal: ' . mysqli_error($conn));
   }

   mysqli_select_db($conn, $dbName);
   return $conn;
}

$conn = connection();

function query($query)
{
   global $conn;
   $result = mysqli_query($conn, $query);
   $record = [];

   while ($data = mysqli_fetch_assoc($result))
      $record[] = $data;

   return $record;
}

function input($data)
{
   global $conn;
   

   $sekolah1 = htmlspecialchars($data["sekolah1"]);
   $sekolah2 = htmlspecialchars($data["sekolah2"]);
   $sekolah3 = htmlspecialchars($data["sekolah3"]);
   $sekolah4 = htmlspecialchars($data["sekolah4"]);

   $tahun1 = htmlspecialchars($data["tahun1_1"] );
   $tahun2 = htmlspecialchars($data["tahun2_1"] );
   $tahun3 = htmlspecialchars($data["tahun3_1"] );
   $tahun4 = htmlspecialchars($data["tahun4_1"] );

  

   $query = "INSERT INTO pendidikan VALUES
		('', '$sekolah1', '$tahun1'),
		('', '$sekolah2', '$tahun2'),
		('', '$sekolah3', '$tahun3'),
		('', '$sekolah4', '$tahun4');";
   mysqli_query($conn, $query);

   return mysqli_affected_rows($conn);
}


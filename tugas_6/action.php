<?php
require 'function.php';

global $conn;
$number = count($_POST["sekolah"]);

if ($number > 0) {
   for ($i = 0; $i < $number; $i++) {
      $sekolah = htmlspecialchars($_POST["sekolah"][$i]);
      $tahun = htmlspecialchars($_POST["tahun1"][$i]);

      if (trim($_POST["sekolah"][$i] != '') && trim($_POST["tahun"][$i] != '') ) {
         $sql = "INSERT INTO pendidikan (sekolah, tahun) VALUES('$sekolah', '$tahun')";
         mysqli_query($conn, $sql);
      }
   }
   if (mysqli_affected_rows($conn) > 0) {
      echo "Data Inserted";
   } else {
      echo "Please Enter Fully";
   }
}

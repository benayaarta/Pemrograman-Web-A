<?php
require "function.php";
?>

<!DOCTYPE html>
<html>

<head>
   <title> Input Data CV </title>

</head>

<body>
   <h1>Input Data CV</h1>

  

         <div class="education_form">
            <table border="0px" cellspacing="0px" cellpadding="5px">
               <tr>
                  <td colspan="4">
                     <h3>Education</h3>
                  </td>
               </tr>

               <tr>
                  <td><label for="sekolah1">Sarjana</label></td>
                  <td align="center">:</td>
                  <td><input type="text" name="sekolah1" id="sekolah1">
                  </td>
                  <td>Dari <input type="number" name="tahun1_1" id="tahun1_1"> ">
                  </td>
                  </td>
               </tr>

               <tr>
                  <td><label for="sekolah2">SMA/K Sederajat</label></td>
                  <td align="center">:</td>
                  <td><input type="text" name="sekolah2" id="sekolah2">
                  </td>
                  <td>Dari <input type="number" name="tahun2_1" id="tahun2_1"> 
                  </td>
                  </td>
               </tr>

               <tr>
                  <td><label for="sekolah3">SMP</label></td>
                  <td align="center">:</td>
                  <td><input type="text" name="sekolah3" id="sekolah3">
                  </td>
                  <td>Dari <input type="number" name="tahun3_1" id="tahun3_1"> 
                  </td>
                  </td>
               </tr>

               <tr>
                  <td><label for="sekolah4">SD</label></td>
                  <td align="center">:</td>
                  <td><input type="text" name="sekolah4" id="sekolah4">
                  </td>
                  <td>Dari <input type="number" name="tahun4_1" id="tahun4_1"> 
                  </td>
                  </td>
               </tr>
            </table>
         </div>
         <div class="action">
            <button type="submit" name="submit">Input</button>
            <button type="reset" name="reset">Reset</button>
         </div>
      </form>
   </div>


   

   <script src="js/script2.js"></script>
</body>

</html>
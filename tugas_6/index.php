<?php
include('function.php');
$query_biodata = "SELECT * From biodata;";
$query_pendidikan="SELECT * From pendidikan;";
?>

<html>
    <head>
        <title>halaman profile</title>
        <link rel="stylesheet" type="text/css" href="css\style.css">
        <link rel="stylesheet" type="text/css" href="css\960.css">
    </head>
    
    <body>
        <?php
            $nama = "Benaya arta hendratri";
            $mottost="it's okey not to be okey";
            $mottond="chill";
            $habout="aboutme";
            $hpro="education";
            $hsoc="social";
            ?>
        <div class = "container_12"></div>
        <div class= "menu"> 
            <p>portfolio</p>
            <a href = "https://github.com/benayaarta/Pemrograman-Web-A" >project</a>

        </div>
        
        <div class="stbg">
            <div class="name">
            <?php
                
                $result_biodata = mysqli_query(connection(), $query_biodata);
            ?>
            <?php while ($data_biodata=mysqli_fetch_array($result_biodata)):?>
               
                
                <br>
                <br>
                <p><?php echo $data_biodata['nama'];?></p>

                <div class="vl1"></div>
                <div class="vl2"></div>
                
            <?php endwhile?>   
                
                
            </div>
            <div class= "motto">
                <p><?php echo $mottost?></p> 
                <p><?php echo $mottond?></p>
            </div>
            <div class="about">
                <h1><?php echo $habout?></h1>
                <p>I very love technology especially robot and game.
                <br>robot is cool because they can do something
                <br>wo humancan't do. Video game is very interesting
                <br>because we can do all do all what i cant do in real life</p>
                    
            </div>            
        </div>


        <div class="col-md-6">
            <div class="side-right-bar right-bar">
               <div class="Education">
                  <div class="title-lined">
                     <img src="Asset/Education_Label.jpg" alt="Education">
                     <h3>Education</h3>
                     <a class="float-right btn btn-info" id="tambah" href="#" data-toggle="modal" data-target="#dynamic_field_modal">Tambah</a>
                  </div>

                  <div class="result" id="result">
                     <table class="form" border="0px" cellspacing="0px" cellpadding="8px">
                        <?php foreach ($query_pendidikan as $pen) : ?>
                           <tr>
                              <td>
                                 <li><?= $pen["sekolah"] ?></li>
                              </td>
                              <td><?= $pen["tahun"] ?></td>
                              <td>
                                 <button type="button" name="delete" id="<?= $pen["id_pendidikan"] ?>" class="btn btn-danger btn-xs delete">x</button>
                              </td>
                           </tr>
                        <?php endforeach; ?>
                     </table>
                  </div>
               </div>

               <br><br>
   

        <div id="dynamic_field_modal" class="modal fade" role="dialog">
      <div class="modal-dialog">
         <div class="modal-content">
            <form name="add_name" id="add_name">

               <!-- <form method="post" id="add_info" name="add_info"> -->
               <div class="modal-header">
                  <h4 class="modal-title">Add Education</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <div class="table-responsive">
                  <div class="modal-body">
                     <table cellpadding="2px" cellspacing="0px" id="dynamic_field">
                        <div class="form-group input-group">
                           <tr>
                              <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                           </tr>

                           <tr>
                              <td>
                                 <input type="text" name="sekolah[]" id="sekolah" class="form-control" placeholder=" Nama Sekolah">
                              </td>
                              <td>
                                 <input type="number" name="tahun[]" id="tahun" class="form-control" placeholder="Tahun Lulus">
                           </tr>
                        </div>
                     </table>
                  </div>

               </div>
               <div class="modal-footer">
                  <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
               </div>
               <!-- </form> -->
            </form>
         </div>
      </div>
   </div>
        
            <img class ="gadget"src="images/gadget.jpg" alt = "Gadget" >            
        
                <div class = "social">
                    <h1><?php echo $hsoc?></h1>
                    <div class="vl3"></div>
                    <a href = "https://web.facebook.com/benaya.artahendratri">facebook</a>
                    <a href = "https://www.instagram.com/benaya_arta/">instagram</a>
                    <a href = "https://twitter.com/ArtaBenaya">twitter</a>
                </div>
        
    <script src="js/script.js" crossorigin="anonymous"></script>    
    </body>
</html>
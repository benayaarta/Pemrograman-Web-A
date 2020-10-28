<?php
include('conn.php');
?>

<html>
    <head>
        <title>halaman profile</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="960.css">
    </head>
    
    <body>
        <?php
            $nama = "benaya arta hendratri";
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
                $query_bio = "SELECT * From bio;";
                $result_bio = mysqli_query(connection(), $query_bio);
            ?>
            <?php while ($data_bio=mysqli_fetch_array($result_bio)):?>
               
                
                    <br>
                <br>
                <p><?php echo $data_bio['nama'];?></p>
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
                <br>wo human can't do. Video game is very interesting
                <br>because we can do all do all what i cant do in real life</p>
                    
            </div>            
        </div>
        <div class="programmer">
            <h1><?php echo $hpro?></h1>
            <?php
                $query_education = "SELECT * FROM education;";
                $result_education = mysqli_query(connection(), $query_education);
            ?>
            <?php while ($data_education=mysqli_fetch_array($result_education)):?>
                <ul>
                    <?php echo $data_education['sekolah'],"  ", "(",$data_education['tahun_lulus'],")";?></li>
                
                </ul>
            <?php endwhile?>
                
        </div>
        
            <img class ="gadget"src="gadget.jpg" alt = "Gadget" >            
        
                <div class = "social">
                    <h1><?php echo $hsoc?></h1>
                    <div class="vl3"></div>
                    <a href = "https://web.facebook.com/benaya.artahendratri">facebook</a>
                    <a href = "https://www.instagram.com/benaya_arta/">instagram</a>
                    <a href = "https://twitter.com/ArtaBenaya">twitter</a>
                </div>

    </body>
</html>
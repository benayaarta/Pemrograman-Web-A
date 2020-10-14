<!DOCTYPE html>
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
    $hpro="as programmer";
    $hsoc="social";
    ?>
        <div class = "container_12"></div>
        <div class= "menu"> 
            <p>portfolio</p>
            <a href = "https://github.com/benayaarta/Pemrograman-Web-A" >project</a>

        </div>
        <div class="stbg">
        <div class="name">
            <br>
            <br>
            <p><?php echo $nama?></p>
            <div class="vl1"></div>
            <div class="vl2"></div>
            
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
            <p>I understand few of programming
            <br>league like Python, CPP and Java
            <br>and now i learn HTML an this is
            <br>very interesting.
            </p>
        </div>
    
            <img class ="gadget"src="gadget.jpg" alt = "Gadget" >            
     
        <div class = "social">
            <h1><?php echo $hsoc?></h1>
            <div class="vl3"></div>
            <a href = "https://web.facebook.com/benaya.artahendratri">facebook</a>
            <a href = "https://www.instagram.com/benaya_arta/">instagram</a>
            <a href = "https://twitter.com/ArtaBenaya">twitter</a>
        </div>
    </div>
    </body>
</html>

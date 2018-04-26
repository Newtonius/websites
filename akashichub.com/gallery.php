<!DOCTYPE html>
<html>
  <head>
    <?php include ($_SERVER['DOCUMENT_ROOT'].'/adds/header_adds.html') ?>
    
    <title>Akashic Hub</title>
    <link rel="stylesheet" href="/css/gallery.css" type="text/css" />

  </head>
  <body>
    <div class="wrapper">
      <?php include ($_SERVER['DOCUMENT_ROOT'].'/adds/nav.html') ?>

      <span id="anchor"></span>
      <div class="content-wrapper">

        <div class="row">
          <div class="column">
            <?php
              $gallery1 = 15;
              for($i=1; $i<= $gallery1; $i++):
            ?>
            <img src="/GFX/Gallery/Sydney_Shore_Walk/Img (<?php echo $i ?>).jpg" alt=""/>
            <?php endfor; ?>
          </div>
          <div class="column">
            <?php
              $gallery2 = 30;
              for($j=16; $j<= $gallery2; $j++):
            ?>
            <img src="/GFX/Gallery/Sydney_Shore_Walk/Img (<?php echo $j ?>).jpg" alt=""/>
            <?php endfor; ?>
          </div>
          <div class="column">
            <?php
              $gallery3 = 45;
              for($k=31; $k<= $gallery3; $k++):
            ?>
            <img src="/GFX/Gallery/Sydney_Shore_Walk/Img (<?php echo $k ?>).jpg" alt=""/>
            <?php endfor; ?>
          </div>
          <div class="column">
            <?php
              $gallery4 = 60;
              for($l=46; $l<= $gallery4; $l++):
            ?>
            <img src="/GFX/Gallery/Sydney_Shore_Walk/Img (<?php echo $l ?>).jpg" alt=""/>
            <?php endfor; ?>
          </div>
        </div>

      </div>
      <?php include ($_SERVER['DOCUMENT_ROOT'].'/adds/footer.html') ?>
    </div>
  </body>
</html>

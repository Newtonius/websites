<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bayside Tonsorial</title>
    <?php include ($_SERVER['DOCUMENT_ROOT'].'/adds/header_add.html') ?>
    <link rel="stylesheet" href="CSS/nav.css" type="text/css"/>
    <link rel="stylesheet" href="CSS/header.css" type="text/css"/>

    <!--  FONTS
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Stoke" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=IM+Fell+French+Canon:400italic" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400italic" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Cantata+One" rel="stylesheet">
    -->

  <!-- <script src="scripts/moving_gallery.js" async></script> -->
</head>
<body>
    <!--  ENTIRE PAGE WRAPPER  -->
    <div id="wrapper" class="bayside_wrapper">

        <!--  TOPBAR NAV -->
        <div id="top_bar">
          <div class="navbar_wrapper">
            <span class="titleLogo">
              <a href="#top">
                Bayside
                <img src="GFX/icons/razorHeader.png" />
                Tonsorial
              </a>
            </span>
          </div>
        </div>

        <!--  HEADER [LOGO]  -->
        <div id="header">

            <!--  LOGO -->
            <span class="anchor" id="topAnchor"></span>
            <center>
                <div id="logo_Container">
                    <img src="GFX/icons/bayside_logo.png" id="logoFade" class="logo" alt=""/>
                </div>
            </center>
            <br/>
             <br/>
             <!--  HEADER NAV  -->
             <nav id="nav">
                 <ul>
                     <li>
                        <a href="https://baysidetonsorialbarbershopshavingparlor.resurva.com/book" target="_blank">
                            Book Appointment
                        </a>
                     </li>
                      <li>
                        <a href="#Services">
                           Services
                        </a>
                      </li>
                      <li>
                        <a href="#Gallery">
                            Gallery
                        </a>
                      </li>
                 </ul>
             </nav>
             <div class="header_info">
               <span class="header_address">
                 <a href="https://www.google.com/maps/place/32-53+Francis+Lewis+Blvd,+Flushing,+NY+11358,+USA/@40.7679471,-73.7923883,17z/data=!3m1!4b1!4m5!3m4!1s0x89c28a7f418bd64f:0x7e1de0dac658dcbc!8m2!3d40.7679471!4d-73.7901996">
                   32-53 Francis Lewis Blvd, Queens NY, 11358
                 </a>
               </span>
               <br/><br/>
               <span class="number">
                 <a href="tel:+15164012837">
                  +1 (516) 401 2837
                 </a>
               </span>
             </div>
        </div>

        <!--  CONTENT  -->
        <div id="contentBackground">
            <div id="content">

              <!--   Barbers SECTION   -->
              <span class="anchor"></span>
              <section id="infoSection" class="sections">
                <article>
                  <div class="cutWrapper">
                    <h3>Barbers</h3>
                    <img class="underline" src="/GFX/icons/title-underline2.png" />
                  </div>
                  <!-- Barber gallery -->
                  <div id="scroller">
                    <div class="innerScrollArea">
                      <ul>
                        <?php
                          $barbers = array("Elvir");
                          for ($i=0; $i < count($barbers); $i++):
                        ?>
                        <li>
                          <figure class="img-container">
                              <img class="barber_gallery" src="/GFX/gallery/barbers/<?php echo $barbers[$i]; ?>.jpeg" alt="<?php echo $barbers[$i]; ?>" title="<?php echo $barbers[$i]; ?>" />
                          </figure>
                          <p><?php echo $barbers[$i]; ?></p>
                        </li>
                        <?php endfor; ?>
                      </ul>
                    </div>
                  </div>
                </article>
              </section>

              <!--   SERVICES SECTION   -->
              <span class="anchor" id="Services"></span>
              <section id="infoSection" class="sections">
                  <article>
                      <div class="cutWrapper">
                        <h3>Services</h3>
                        <img class="underline" src="/GFX/icons/title-underline2.png" /><br/>
                        <img class="price_list" src="/GFX/content/services/bayside_pricelist.png" />
                      </div>

                      <div class="products" id="products">
                        <h3>Products</h3>
                        <img class="underline" src="/GFX/icons/title-underline2.png" />

                        <div class="promos">
                          <div class="promo">
                            <div class="brand">
                              <img src="/GFX/icons/layrite_logo.png" height="29" width="200" alt="" />
                            </div>
                            <span class="motto"> Pomade, cream, and clay that will exceed your expectations.</span>
                            <ul class="features">
                              <li>Original $18</li>
                              <li>Super Hold $18</li>
                              <li>Matte Cream $18</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                  </article>
              </section>

              <!--   PHOTO GALLERY SECTION   -->
              <span class="anchor" id="Gallery"></span>
              <section id="photoSection" class="sections">
                  <article class="article">
                      <h3>Gallery</h3>
                      <img class="underline" src="/GFX/icons/title-underline2.png" />
                      <!--   GALLERY  IMAGES   -->
                      <div id="scroller">
                        <div class="innerScrollArea">
                          <ul>
                            <?php
                              $bayside_pics = array("2");
                              for ($i=0; $i < count($bayside_pics); $i++):
                            ?>
                            <li>
                              <figure class="img-container">
                                  <img class="site_gallery" src="/GFX/gallery/bayside/<?php echo "Bayside ($bayside_pics[$i])"; ?>.jpg" alt="" />
                              </figure>
                            </li>
                            <?php endfor; ?>
                          </ul>
                        </div>
                      </div>
                  </article>
              </section>
          </div>
      </div>

      <!--  FOOTER  -->
      <footer id="footer">
        <div class="footer_tag">
          <span class="footer_name">Bayside Tonsorial</span>
          |
          <span class="footer_address">
            <a href="https://www.google.com/maps/place/32-53+Francis+Lewis+Blvd,+Flushing,+NY+11358,+USA/@40.7679471,-73.7923883,17z/data=!3m1!4b1!4m5!3m4!1s0x89c28a7f418bd64f:0x7e1de0dac658dcbc!8m2!3d40.7679471!4d-73.7901996">
              32-53 Francis Lewis Blvd, Queens NY, 11358
            </a>
          </span>
          |
          <span class="footer_number" id="contact">
           <a href="tel:+13476546386">+1 (516) 401 2837</a>
          </span>
        </div>
      </footer>
  </body>
</html>

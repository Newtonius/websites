<!DOCTYPE html>
<html lang="en">
<head>
    <title>L.I.C. Tonsorial</title>
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
    <div id="wrapper" class="lic_wrapper">

        <!--  TOPBAR NAV -->
        <div class="top_bar lic_topbar" >
          <div class="navbar_wrapper">
            <span class="titleLogo">
              <a href="#top">
                L.I.C.
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
                    <img src="GFX/icons/lic_logo.png" id="logoFade" class="logo" alt=""/>
                </div>
            </center>
            <br/>
             <br/>
             <!--  HEADER NAV  -->
             <nav id="nav">
                 <ul>
                     <li>
                        <a href="https://lictonsorial.resurva.com/book" target="_blank">
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
                 <a href="https://www.google.com.au/maps/place/LIC+Tonsorial+Barber+Shop+%26+Shaving+Parlor/@40.756052,-73.9198059,15z/data=!4m5!3m4!1s0x0:0xd4ab8bd292975fad!8m2!3d40.756052!4d-73.9198059">
                   41-10 34th Ave, Long Island City NY, 11101<br/>
                 </a>
               </span>
               <br/>
               <span class="number">
                 <a href="tel:+13476546386">
                  +1 (347) 654 6386
                 </a>
               </span>
             </div>
        </div>

        <!--  CONTENT  -->
        <div id="contentBackground">
            <div class="content lic_content">

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
                          $barbers = array("Luis","Geraldo","David","Justin");
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
                        <img class="price_list" src="/GFX/content/services/LIC_pricelist.png" />
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
                          <div class="promo">
                            <div class="brand">
                              <img src="/GFX/icons/baxter_logo.png" height="55" width="150" alt="" />
                            </div>
                            <span class="motto">Discover high-quality men's hair care & hair styling products.</span>
                            <ul class="features">
                              <li>Vitamin Body Bar $17</li>
                              <li>Exfoliating Body Bar $17</li>
                              <li>Protein Shampoo $18</li>
                              <li>Shave Tonic $18</li>
                              <li>Aftershave $19</li>
                              <li>Deodorant $19</li>
                              <li>Conditioner $19</li>
                              <li>Large Comb $20</li>
                              <li>Cream Pomade $22</li>
                              <li>Hard Cream Pomade $22</li>
                              <li>Clay Pomade $22</li>
                              <li>Soft Water Pomade $22</li>
                              <li>Hard Water Pomade $22</li>
                              <li>Oil Free Moisturizer $24</li>
                            </ul>
                          </div>
                          <div class="promo">
                            <div class="brand">
                              <img src="/GFX/icons/mrnatty_logo.png" height="39" width="200" alt="" />
                            </div>
                            <span class="motto">Master Barber to Royals, Ragtaggle and Ruffians.</span>
                            <ul class="features">
                              <li>Dub $20</li>
                              <li>Paste $20</li>
                              <li>Moisturizing Butter $20</li>
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
                              $lic_pics = array("22","24","34","28","29","33","38","39","45","49");
                              for ($i=0; $i < count($lic_pics); $i++):
                            ?>
                            <li>
                              <figure class="img-container">
                                  <img class="site_gallery" src="/GFX/gallery/lic/<?php echo "lic ($lic_pics[$i])"; ?>.jpg" alt="" />
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
          <span class="footer_name">Long Island City Tonsorial</span>
          |
          <span class="footer_address">
           <a href="https://www.google.com.au/maps/place/LIC+Tonsorial+Barber+Shop+%26+Shaving+Parlor/@40.756052,-73.9198059,15z/data=!4m5!3m4!1s0x0:0xd4ab8bd292975fad!8m2!3d40.756052!4d-73.9198059">
             41-10 34th Ave, Long Island City NY, 11101
           </a>
          </span>
          |
          <span class="footer_number">
           <a href="tel:+13476546386">+1 (347) 654 6386</a>
          </span>
        </div>
      </footer>
  </body>
</html>

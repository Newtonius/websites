<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bayside Tonsorial</title>
        <?php include ($_SERVER['DOCUMENT_ROOT'].'/adds/header_add.html') ?>
        <link rel="stylesheet" href="CSS/nav.css" type="text/css"/>
        <link rel="stylesheet" href="CSS/header.css" type="text/css"/>

    </head>
    <body>
        <!--  ENTIRE PAGE WRAPPER  -->
        <div id="wrapper">

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
                     <a href="https://www.google.com/maps/place/32-32+Francis+Lewis+Blvd,+Flushing,+NY+11358,+USA/data=!4m2!3m1!1s0x89c28a7f70fefcfd:0x29105407647a2fc0?sa=X&ved=0ahUKEwitpt2dm7LbAhWEyLwKHQszDAkQ8gEIKDAA">
                       32-32 Francis Lewis Blvd queens NY 11358<br/>
                     </a>
                   </span>
                   <br/>
                   <span class="number">
                     <a href="tel:+13476546386">+1 (516) 401 2837</a>
                   </span>
                 </div>
            </div>

            <!--  CONTENT  -->
            <span class="anchor" id="AboutUs"></span>
            <div id="contentBackground">
                <div id="content">

                    <!--   SERVICES SECTION   -->
                    <span class="anchor" id="Services"></span>
                    <section id="infoSection" class="sections">
                        <article>
                            <div class="cutWrapper">
                              <h3>Services</h3>
                              <img class="underline" src="/GFX/icons/title-underline.png" /><br/>
                              <img class="price_list" src="/GFX/content/services/price_list.png" />
                            </div>

                            <div class="products" id="products">
                              <h3>Products</h3>
                              <img class="underline" src="/GFX/icons/title-underline.png" />

                              <div class="promos">
                                <div class="promo">
                                  <div class="deal">
                                    <img src="/GFX/icons/layrite_logo.png" height="29" width="200" alt="" />
                                    <span></span>
                                    <span></span>
                                  </div>
                                  <span class="motto"> Pomade, cream, and clay that will exceed your expectations.</span>
                                  <ul class="features">
                                    <li>Original $18</li>
                                    <li>Super Hold $18</li>
                                    <li>Matte Cream $18</li>
                                  </ul>
                                </div>
                                <div class="promo">
                                  <div class="deal">
                                    <img src="/GFX/icons/baxter_logo.png" height="55" width="150" alt="" />
                                    <span></span>
                                    <span></span>
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
                                  <div class="deal">
                                    <img src="/GFX/icons/mrnatty_logo.png" height="39" width="200" alt="" />
                                    <span></span>
                                    <span></span>
                                  </div>
                                  <span class="motto">Master Barber to Royals, Ragtaggle and Ruffians.</span>
                                  <ul class="features">
                                    <li>Dub $20</li>
                                    <li>Paste $20</li>
                                    <li>Moisturizing Butter $20</li>
                                  </ul>
                                </div>
                              </div>
                                  <!--
                                <img class="layritePics" src="GFX/Layrite/deluxe_trans.png" alt="Layrite" title="Layrite Deluxe" width="125" height="125"/>
                                <img class="layritePics" src="GFX/Layrite/lgSpray_trans.png" alt="Layrite" title="Layrite Spray" width="75" height="175"/>
                                <img class="layritePics" src="GFX/Layrite/superhold_trans.png" alt="Layrite" title="Layrite Superhold" width="125" height="125"/>
                                  -->
                            </div>
                        </article>
                    </section>

                    <!--   PHOTO GALLERY SECTION   -->
                    <span class="anchor" id="Gallery"></span>
                    <section id="photoSection" class="sections">
                        <article class="article">
                            <h3>Gallery</h3>
                            <img class="underline" src="/GFX/icons/title-underline.png" />
                            <!--   GALLERY  IMAGES   -->
                            <div id="scroller">
                              <div class="innerScrollArea">
                                <ul>
                                  <?php
                                    $barbers = array("geraldo","alvi","justin","luis");
                                    for ($i=0; $i < count($barbers); $i++):
                                  ?>
                                  <li>
                                    <figure class="img-container">
                                      <a href="/GFX/gallery/<?php echo $barbers[$i]; ?>.jpg">
                                        <img src="/GFX/gallery/<?php echo $barbers[$i]; ?>.jpg" target="_blank" width="500" height="350" alt="" title="<?php echo $barbers[$i]; ?>">
                                      </a>
                                    <figure>
                                  </li>
                                  <?php endfor; ?>
                                </ul>
                              </div>
                            </div>
                            <div>
                              <span class="view_more">
                                <a href="http://lictonsorial.com/gallery.php" target="_blank" style="color: #ffffff; text-decoration: none;">View more Pictures</a>
                              </span>
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
                 <a href="tel:+13476546386">(347) 654 6386</a>
                </span>
              </div>
            </footer>

  </body>
</html>

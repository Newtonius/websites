<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Tonsorial Barbershop</title>
      <?php include ($_SERVER['DOCUMENT_ROOT'].'/adds/header_add.html') ?>
      <?php include ($_SERVER['DOCUMENT_ROOT'].'/adds/scripts.html') ?>
  </head>
  <body>
    <!--  ENTIRE PAGE WRAPPER  -->
    <div id="wrapper" class="index_wrapper">
        <div class="bg">
          <img src="/GFX/gallery/lic/lic_new (1).jpg">
        </div>
        <!-- Moving pop up -->
        <div class="pop_class" id="pop_id" onclick="close_pop()">
          <figure class="pop_img_figure">
            <img alt="" class="pop_img" src="GFX/content/moving_sign_2.png" />
          </figure>
          <button onclick="close_pop()">Already there fam!</button>
        </div>
        <!--  TOPBAR NAV -->
        <div>
          <ul class="nav">
            <li>
              <button onclick="open_sidenav()">☰</button>
            </li>
            <li>
              <img src="GFX/icons/razorHeader.png" />
            </li>
            <li>
              <span>
                Barbershop and Shaving Parlor
              </span>
            </li>

            <li><a href="#contact">Contact Us</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#aboutUs">About us</a></li>
            <!-- Drop down nav
            <li>
                <a>Book Appointment</a>
                <ul class="dropnav1">
                  <li>
                    <a href="https://lictonsorial.resurva.com/book" target="_blank">
                      At L.I.C.
                    </a>
                  </li>
                  <li>
                    <a href="http://baysidetonsorialbarbershopshavingparlor.resurva.com/" target="_blank">
                      At Bayside
                    </a>
                  </li>
                </ul>
            </li>
            -->
          </ul>
          <ul>
            <li>test</li>
          </ul>
        </div>

        <!-- Sidebar nav -->
        <ul class="side_nav" style="display: none;" id="sidenav">
          <button onclick="close_sidenav()">&times; Close</button>
          <li><a href="#aboutUs" onclick="close_sidenav()">About us</a></li>
          <li><a href="#services" onclick="close_sidenav()">Services</a></li>
          <li><a href="#gallery" onclick="close_sidenav()">Gallery</a></li>
          <li><a href="#contact" onclick="close_sidenav()">Contact Us</a></li>
          <!--
          <li>
            <a>Book Appointment</a>
            <ul class="dropnav2">
              <li>
                <a href="https://lictonsorial.resurva.com/book" target="_blank">
                  At L.I.C.
                </a>
              </li>
              <li>
                <a href="http://baysidetonsorialbarbershopshavingparlor.resurva.com/" target="_blank">
                  At Bayside
                </a>
              </li>
            </ul>
          </li>
          -->
        </ul>

        <!--  HEADER  -->
        <div id="header">
          <span class="anchor" id="topAnchor"></span>
           <ul class="header_items">
             <li class="locations">
               <figure>
                 <img class="lic_logo" id="lic_logo" src="GFX/icons/lic_logo.png" alt="" />
               </figure>
               <span id="lic_button">
                 <a href="https://lictonsorial.resurva.com/book" target="_blank">
                   <p>Book Appointment</p>
                 </a>
               </span>
               <div class="header_info">
                 <br/>
                 <!--
                 <img src="GFX/content/moving_sign.jpeg" class="moving" alt="" style="width: 350px; height: 210px;" />
                  -->
                 <span class="header_address">
                   <a href="https://www.google.com/maps/place/32-86+Steinway+St,+Astoria,+NY+11103/@40.7567727,-73.9212617,18.07z/data=!4m5!3m4!1s0x89c25f3b12995bb3:0x8aa3c15a60324055!8m2!3d40.7570534!4d-73.9208482" target="_blank">
                     32-86 Steinway St, Long Island City NY, 11103<br/>
                   </a>
                 </span>

                 <br/><br/>
                 <span class="number">
                   <a href="tel:+13476546386">
                    +1 (347) 654 6386
                   </a>
                 </span>
               </div>
             </li>
             <!--
             <li>
               <div id="instafeed" class="insta_gallery">

               </div>
             -->
            </li>
          </ul>
        </div>

        <!--  CONTENT BACKGROUND -->
        <div class="contentBackground">
          <div class="content">

            <!--   ABOUT US SECTION   -->
            <section id="about" class="sections">
                <article class="article">
                    <span class="anchor" id="aboutUs"></span>
                    <h3>About us</h3>
                    <img class="underline" src="/GFX/icons/title-underline2.png" />
                    <div id="aboutWrapper">
                        <div class="aboutContent">
                          <p class="about_description">
                              I remember those old-fashioned barber shops,
                              the ones where everyone was welcome.
                              You could hear stories about people who made it to the top,
                              never just a place to get your haircut, rather, filled with conversation
                              and good memories. I spent most of my childhood in one.
                              When life threw-out and the day would go wrong,
                              the barber shop was a place that made me feel strong -
                              a place where everyone shares an experience.
                              It's places like this, I love the most.
                          </p>
                        </div>
                        <!--  ABOUT IMAGE  -->
                        <div class="aboutContent">
                            <img class="about_image" src="GFX/gallery/lic/lic (27).jpg" align="middle" alt=""/>
                        </div>
                        <!--  HOURS INFO  -->
                        <div class="aboutContent">
                            <div class="hour_wrap">
                              <div class="hour_table">
                                <div class="hour_row hour_header">
                                  <div class="cell">Business</div>
                                  <div class="cell">Hours</div>
                                </div>
                                <div class="hour_row">
                                  <div class="cell" id="monday">Monday</div>
                                  <div class="cell" id="mHours">10am - 8pm</div>
                                </div>
                                <div class="hour_row">
                                  <div class="cell" id="tuesday">Tuesday</div>
                                  <div class="cell" id="tuHours">10am - 8pm</div>
                                </div>
                                <div class="hour_row">
                                  <div class="cell" id="wednesday">Wednesday</div>
                                  <div class="cell" id="wHours">10am - 8pm</div>
                                </div>
                                <div class="hour_row">
                                  <div class="cell" id="thursday">Thursday</div>
                                  <div class="cell" id="thHours">10am - 8pm</div>
                                </div>
                                <div class="hour_row">
                                  <div class="cell" id="friday">Friday</div>
                                  <div class="cell" id="fHours">10am - 8pm</div>
                                </div>
                                <div class="hour_row">
                                  <div class="cell" id="saturday">Saturday</div>
                                  <div class="cell" id="saHours">10am - 8pm</div>
                                </div>
                                <div class="hour_row">
                                  <div class="cell" id="sunday">Sunday</div>
                                  <div class="cell" id="suHours">12pm - 5pm</div>
                                </div>
                              </div>
                              <div class="status" id="status"></div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>

            <!-- SOCIAL FRAMES -->
            <section class="sections">
              <article>
                <ul class="social_feed">
                  <li class="feed">
                    <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Flongislandcitybarber&width=400&colorscheme=light&show_faces=true&border_color&stream=true&header=true&height=400" scrolling="yes" frameborder="0" class="FB_frame" allowTransparency="true"></iframe>
                  </li>
                  <li class="feed">
                    <a class="twitter-timeline" data-lang="en" data-width="400" data-height="400" data-theme="dark" data-link-color="#FAB81E" href="https://twitter.com/Lic_tonsorial?ref_src=twsrc%5Etfw">Tweets by Lic_tonsorial</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                  </li>
                </ul>
                <!-- SOCIAL ICONS -->
                <div class="socialIcons">
                    <p>Check out more at:</p>
                    <a href="https://www.facebook.com/longislandcitybarber/timeline" target="_blank">
                        <img src="GFX/icons/fb.png" width="38" height="38" alt=""/>
                    </a>
                    <a href="https://twitter.com/Lic_tonsorial" target="_blank">
                        <img src="GFX/icons/twit.png" width="38" height="38" alt=""/>
                    </a>
                    <a href="https://www.instagram.com/lic_tonsorial/" target="_blank">
                        <img src="GFX/icons/ins.png" width="38" height="38" alt=""/>
                    </a>
                </div>
              </article>
            </section>

            <!--   Barbers SECTION   -->
            <span class="anchor"></span>
            <section class="sections">
              <article>
                <div class="cutWrapper">
                  <h3>Tonsorial Barbers</h3>
                  <img class="underline" src="/GFX/icons/title-underline2.png" />
                </div>
                <!-- Barber gallery -->
                <div class="gallery">
                  <div class="gallery_frame">
                    <ul>
                      <?php
                        $barbers = array("Luis","Geraldo","Justin","Samy");
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
            <span class="anchor" id="services"></span>
            <section id="infoSection" class="sections">
                <article>
                    <div class="cutWrapper">
                      <h3>Services</h3>
                      <img class="underline" src="/GFX/icons/title-underline2.png" /><br/>
                      <img class="price_list" src="/GFX/content/services/priceList_2019_feb.png" />
                    </div>
                    <span class="anchor"></span>
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
                            <li><span class="item">Original</span> ---------------------- <span class="price">$18</span></li>
                            <li><span class="item">Super Hold</span> ------------------ <span class="price">$18</span></li>
                            <li><span class="item">Matte Cream</span> ---------------- <span class="price">$18</span></li>

                          </ul>
                        </div>
                        <!--
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
                        -->
                        <div class="promo">
                          <div class="brand">
                            <img src="/GFX/icons/mrnatty_logo.png" height="39" width="200" alt="" />
                          </div>
                          <span class="motto">Master Barber to Royals, Ragtaggle and Ruffians.</span>
                          <ul class="features">
                            <li><span class="item">Dub</span> ------------------------- <span class="price">$20</span></li>
                            <li><span class="item">Paste</span> ------------------------ <span class="price">$20</span></li>
                            <li><span class="item">Moisturizing Butter</span> -------- <span class="price">$20</span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                </article>
            </section>

            <!--   PHOTO GALLERY SECTION   -->
            <span class="anchor" id="gallery"></span>
            <section class="sections">
                <article>
                    <h3>Gallery</h3>
                    <img class="underline" src="/GFX/icons/title-underline2.png" />
                    <!--   GALLERY  IMAGES   -->
                    <div class="gallery">
                      <div class="gallery_frame">
                        <ul>
                          <?php
                            for ($i=1; $i<9; $i++):
                          ?>
                          <li>
                            <figure class="img-container">
                                <img class="site_gallery" src="/GFX/gallery/lic/<?php echo "lic_new ($i)"; ?>.jpg" alt="<?php echo "lic_new ($i)"; ?>" />
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
          <div class="footer_tag" id="contact">
            <h2 style="font-family: 'ChopinScript';">Contact Us</h2>
            <br/>
            <span class="footer_name">Long Island City Tonsorial</span>
            |
            <span class="footer_address">
             <a href="https://www.google.com/maps/place/32-86+Steinway+St,+Astoria,+NY+11103/@40.7567727,-73.9212617,18.07z/data=!4m5!3m4!1s0x89c25f3b12995bb3:0x8aa3c15a60324055!8m2!3d40.7570534!4d-73.9208482" target="_blank">
               32-86 Steinway St, Long Island City NY, 11103
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

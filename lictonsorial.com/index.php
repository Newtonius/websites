<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Tonsorial Barbershop</title>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
      <meta http-equiv="Pragma" content="no-cache" />
      <meta http-equiv="Expires" content="0" />

      <!--  meta tags for search engine analytics  -->
      <meta itemprop="name" content="Long Island City Tonsorial">
      <meta itemprop="url" content="http://lictonsorial.com/">
      <meta name="description" content="We're a family run barbershop based in Long Island city. We give cuts, shaves, trims, even a hot towel facial to all clients, young and old."/>

      <link rel="shortcut icon" href="GFX/icons/icon.png"/>
      <link rel="stylesheet" href="CSS/core.css?v=1.0" type="text/css"/>
      <link rel="stylesheet" href="CSS/nav.css?v=1.2" type="text/css"/>
      <link rel="stylesheet" href="CSS/content.css?v=1.17" type="text/css"/>
      <link rel="stylesheet" href="CSS/header.css?v=1.0" type="text/css"/>

      <!-- Install JQuery and plugins -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="/scripts/jCookies/jquery.cookie.js"></script>

      <!-- Run self made scripts alongside (async) html & css code -->
      <script type="text/javascript" src="/scripts/cookies.js" async></script>
      <script type="text/javascript" src="/scripts/instafeed.min.js" async></script>
      <script type="text/javascript" src="/scripts/instafeed_custom.js" async></script>
      <script type="text/javascript" src="/scripts/hours.js" async></script>
      <script type="text/javascript" src="/scripts/listeners.js" async></script>

      <!-- Facebook Pixel Code -->
      <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window,document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
       fbq('init', '559317064828080');
      fbq('track', 'PageView');
      </script>
      <noscript>
       <img height="1" width="1"
      src="https://www.facebook.com/tr?id=559317064828080&ev=PageView
      &noscript=1"/>
      </noscript>
      <!-- End Facebook Pixel Code -->

  </head>
  <body>
    <!-- pop-up event -->
    <!--
    <div class="pop_class" id="pop_id" onclick="close_pop()">
      <figure class="pop_img_figure">
        <img alt="" class="pop_img" height="60%" width="60%" src="GFX/content/event_comedy_lineup_oct.jpg" />
      </figure>
      <center>
        <button onclick="close_pop()"><a href="https://www.eventbrite.com/e/the-lineup-lic-tonsorial-tickets-75200335227?utm-medium=discovery&utm-campaign=social&utm-content=attendeeshare&aff=escb&utm-source=cp&utm-term=listing" target="_blank">Get your tickets here</a></button>
      </center>
    </div>
    -->
    <!-- TOPBAR Store icons -->
    <div class="top_store_bar">
      <div>
        <figure>
          <p>Download our app at</p>
        </figure>
        <a href="https://play.google.com/store/apps/details?id=com.conversion.sbx.barbershop" target="_blank">
          <figure>
            <img src="GFX/icons/PS_logo.png" alt="Google Playstore Logo" />
          </figure>
        </a>
        <a href="https://apps.apple.com/us/app/lic-tonsorial-barber-shop/id1482864410" target="_blank">
          <figure>
            <img src="GFX/icons/AS_logo.png" alt="Apple Store Logo" />
          </figure>
        </a>
      </div>
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
        <li><a href="#booking">Book Appt</a></li>
        <li><a href="#services">Services</a></li>
        <!-- <li><a href="#events">Events</a></li> -->
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
    </div>

    <!-- Sidebar nav -->
    <ul class="side_nav" style="display: none;" id="sidenav">
      <button onclick="close_sidenav()">&times; Close</button>
      <li><a href="#aboutUs" onclick="close_sidenav()">About us</a></li>
      <!--<li><a href="#events" onclick="close_sidenav()">Events</a></li>-->
      <li><a href="#services" onclick="close_sidenav()">Services</a></li>
      <li><a href="#booking" onclick="close_sidenav()">Book Appt</a></li>
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
           <br/>
           <span class="buttons">
             <a href="#booking">
               <p>Book Appointment</p>
             </a>
           </span>
           <br/>
           <br/>
           <span class="buttons">
             <a href="tel:+13476546386">
               <p>Call to book Appointment</p>
             </a>
           </span>
           <!--
           <span class="buttons">
             <a href="#events">
               <p>Book Event</p>
             </a>
           </span>
           -->
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
                <div class="aboutWrapper">
                  <!--  ABOUT IMAGE  -->
                  <div class="aboutContent">
                    <h3>About us</h3>
                    <img class="underline" src="/GFX/icons/title-underline2.png" />
                  </div>
                    <div class="aboutContent">
                      <p class="about_description">
                        The barbershop is more then just a spot to get a cut or a shave. It's the spot for the community to get together and connect, just hang, and step away from reality for a bit.<br/><br/>So we’ve came up with LIC Tonsorial to do just that, provide experiences and memories that are unforgettable. From high-end haircuts done by our dapper barbers, to our signature events thrown weekly. Its a sight to see.
                      </p>
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
                            <div class="cell" id="suHours">11am - 7pm</div>
                          </div>
                        </div>
                        <div class="status" id="status"></div>
                      </div>
                    </div>
                </div>
            </article>
        </section>

        <!--   Barbers SECTION   -->
        <span class="anchor"></span>
        <section class="sections">
          <article>
            <div class="cutWrapper">
              <h3>Tonsorial Artists</h3>
              <img class="underline" src="/GFX/icons/title-underline2.png" />
            </div>
            <!-- Barber gallery -->
            <div class="gallery">
              <div class="gallery_frame">
                <ul>
                  <li>
                    <figure class="barber_img_container">
                        <img class="barber_gallery" src="/GFX/gallery/barbers/Luis_Nov_2019_min.jpg" alt="Luis" title="Luis" />
                    </figure>
                    <p>Luis</p>
                  </li>
                  <li>
                    <figure class="barber_img_container">
                        <img class="barber_gallery" src="/GFX/gallery/barbers/Sammy_Nov_2019_min.jpg" alt="Samy" title="Samy" />
                    </figure>
                    <p>Samy</p>
                  </li>
                  <li>
                    <figure class="barber_img_container">
                        <img class="barber_gallery" src="/GFX/gallery/barbers/Geraldo_Nov_2019_min.jpg" alt="Geraldo" title="Geraldo" />
                    </figure>
                    <p>Geraldo</p>
                  </li>
                  <li>
                    <figure class="barber_img_container">
                        <img class="barber_gallery" src="/GFX/gallery/barbers/Justin_Nov_2019_min.jpg" alt="Justin" title="Justin" />
                    </figure>
                    <p>Justin</p>
                  </li>
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
                  <h3>Our Services</h3>
                  <img class="underline" src="/GFX/icons/title-underline2.png" /><br/>
                  <div>
                    <div>
                      <p class="cut_header">Cuts</p>
                        <ul class="cut_list">
                          <li class="cut_style">The Classic Cut</li>
                          <li class="cut_price">$40</li>
                          <br/>
                          <li class="cut_desc">A modern haircut for the modern gentleman looking to be at his best for any occasion. Each treatment finished with a tea tree infused hot towel neck shave, wash, and style.</li>
                          <br/>
                          <li class="cut_dura">~ 30 min</li>
                        </ul>
                      <br/>
                        <ul class="cut_list">
                          <li class="cut_style">The Buzz Cut</li>
                          <li class="cut_price">$25</li>
                          <br/>
                          <li class="cut_desc">A modern buzz cut done with only machine with the choice of sharp or natural finished edges. Finished with a tea tree infused hot towel neck shave for an ultimate experience.</li>
                          <br/>
                          <li class="cut_dura">~ 30 min</li>
                        </ul>
                      <br/>
                        <ul class="cut_list">
                          <li class="cut_style">Kids Haircut</li>
                          <li class="cut_price">$25</li>
                          <br/>
                          <li class="cut_desc">A styled cut even for the tiniest of gentlemen under 12 years old.</li>
                          <br/>
                          <li class="cut_dura">~ 30 min</li>
                        </ul>
                      <br/>
                        <ul class="cut_list">
                          <li class="cut_style">Seniors Haircut</li>
                          <li class="cut_price">$20</li>
                          <br/>
                          <li class="cut_desc">No matter what age you're always allowed to look your best, but with age... also comes discounts! For gentlemen 60 years or older.</li>
                          <br/>
                          <li class="cut_dura">~ 30 min</li>
                        </ul>
                    </div>
                    <br/>
                    <br/>
                    <div>
                      <p class="cut_header">Shaves</p>
                        <ul class="cut_list">
                          <li class="cut_style">Traditional Shave</li>
                          <li class="cut_price">$30</li>
                          <br/>
                          <li class="cut_desc">Our signature shave consist of a triple hot towel shave. All of our towels are tea tree infused. For aroma and a disinfectant for prior post healing of the skin after use of the razor.</li>
                          <br/>
                          <li class="cut_dura">~ 30 min</li>
                        </ul>
                      <br/>
                        <ul class="cut_list">
                          <li class="cut_style">Cut with</br>shave or beard trim</li>
                          <li class="cut_price">$60</li>
                          <br/>
                          <li class="cut_desc">Any type of haircut along with our signature tea tree infused hot towel shave or beard trim finished off by a hair wash and style. A complete service for the modern gentleman of leisure.</li>
                          <br/>
                          <li class="cut_dura">~ 1 hour</li>
                        </ul>
                        <br/>
                        <br/>
                        <p style="font-family: 'Bellefair'; font-size: 30pt;">Cash only. All sales are final</p>
                        <p style="font-family: 'Bellefair';">All services are served with a complimentary beer, spirit, or refreshment of your choice.</p>
                    </div>
                  </div>
                  <br/>
                  <span class="anchor" id="booking"></span>
                  <p style="font-family: 'LibelSuit'; font-size: 18pt; color: #fff; padding: 5px; ">Book your appointment here</p>
                  <br/>
                  <iframe src="https://lictonsorial.resurva.com/book?embedded=true" name="resurva-frame" frameborder="0" width="450" height="450" style="max-width:100%"></iframe>
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
                  -->
                  </div>
                </div>
            </article>
        </section>

    <!-- EVENTS and social media
        <section class="sections">
            <article class="article">
                <span class="anchor" id="events"></span>
                <h3>Events at LIC</h3>
                <img class="underline" src="/GFX/icons/title-underline2.png" />
                <div style="padding: 10px;">
                  <p style="font-family: 'LibelSuit'; font-size: 18pt; color: #fff; padding: 5px; ">Check out what events are going on <br/> and</p>
                  <span class="buttons">
                    <a href="https://www.eventbrite.com/o/the-tonsorial-club-27972064347" target="_blank">
                      <p>Reserve Event Here</p>
                    </a>
                  </span>
                </div>
                <div id="eventWrapper">
                    <div class="eventContent">
                      <div class="app-placeholder-calendar event-calendar" data-id="proj_Xbx0SLvd9USrewZuDkszl"></div>
                      <script type="text/javascript">
                       document.getElementById("Inffuse-Loader") ||
                       document.write('\x3Cscript type="text/javascript" src="//inffuse-platform.appspot.com/plugins/web/loader.js?app=calendar" id="Inffuse-Loader">\x3C/script>');
                      </script>
                    </div>
                </div>

            <ul class="social_feed">
              <li class="feed">
                <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Flongislandcitybarber&width=400&colorscheme=light&show_faces=true&border_color&stream=true&header=true&height=400" scrolling="yes" frameborder="0" class="FB_frame" allowTransparency="true"></iframe>
              </li>
              <li class="feed">
                <a class="twitter-timeline" data-lang="en" data-width="400" data-height="400" data-theme="dark" data-link-color="#FAB81E" href="https://twitter.com/Lic_tonsorial?ref_src=twsrc%5Etfw">Tweets by Lic_tonsorial</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
              </li>
            </ul>
          </article>
        </section>
        -->

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
                      <li>
                        <figure class="img-container">
                            <img class="site_gallery" src="/GFX/gallery/lic/LIC Tonsorial 1.jpg" alt="LIC Tonsorial 1" />
                        </figure>
                      </li>
                      <li>
                        <figure class="img-container">
                            <img class="site_gallery" src="/GFX/gallery/lic/LIC Tonsorial 2.jpg" alt="LIC Tonsorial 2" />
                        </figure>
                      </li>
                      <li>
                        <figure class="img-container">
                            <img class="site_gallery" src="/GFX/gallery/lic/LIC Tonsorial 3.jpg" alt="LIC Tonsorial 3" />
                        </figure>
                      </li>
                      <li>
                        <figure class="img-container">
                            <img class="site_gallery" src="/GFX/gallery/lic/LIC Tonsorial 4.jpg" alt="LIC Tonsorial 4" />
                        </figure>
                      </li>
                      <li>
                        <figure class="img-container">
                            <img class="site_gallery" src="/GFX/gallery/lic/LIC Tonsorial 5.jpg" alt="LIC Tonsorial 5" />
                        </figure>
                      </li>
                      <li>
                        <figure class="img-container">
                            <img class="site_gallery" src="/GFX/gallery/lic/LIC Tonsorial 6.jpg" alt="LIC Tonsorial 6" />
                        </figure>
                      </li>
                      <li>
                        <figure class="img-container">
                            <img class="site_gallery" src="/GFX/gallery/lic/LIC Tonsorial 7.jpg" alt="LIC Tonsorial 7" />
                        </figure>
                      </li>
                      <li>
                        <figure class="img-container">
                            <img class="site_gallery" src="/GFX/gallery/lic/LIC Tonsorial 8.jpg" alt="LIC Tonsorial 7" />
                        </figure>
                      </li>
                      <li>
                        <figure class="img-container">
                            <img class="site_gallery" src="/GFX/gallery/lic/LIC Tonsorial 9.jpg" alt="LIC Tonsorial 7" />
                        </figure>
                      </li>
                      <li>
                        <figure class="img-container">
                            <img class="site_gallery" src="/GFX/gallery/lic/LIC Tonsorial 10.jpg" alt="LIC Tonsorial 7" />
                        </figure>
                      </li>
                      <li>
                        <figure class="img-container">
                            <img class="site_gallery" src="/GFX/gallery/lic/LIC Tonsorial 11.jpg" alt="LIC Tonsorial 7" />
                        </figure>
                      </li>
                      <li>
                        <figure class="img-container">
                            <img class="site_gallery" src="/GFX/gallery/lic/LIC Tonsorial 12.jpg" alt="LIC Tonsorial 7" />
                        </figure>
                      </li>
                      <li>
                        <figure class="img-container">
                            <img class="site_gallery" src="/GFX/gallery/lic/LIC Tonsorial 13.jpg" alt="LIC Tonsorial 7" />
                        </figure>
                      </li>
                      <li>
                        <figure class="img-container">
                            <img class="site_gallery" src="/GFX/gallery/lic/LIC Tonsorial 14.jpg" alt="LIC Tonsorial 7" />
                        </figure>
                      </li>
                      <li>
                        <figure class="img-container">
                            <img class="site_gallery" src="/GFX/gallery/lic/LIC Tonsorial 15.jpg" alt="LIC Tonsorial 7" />
                        </figure>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- SOCIAL ICONS -->
                <div class="socialIcons">
                  <p style="font-family: 'LibelSuit' ">Check out more at:</p>
                  <a href="https://facebook.com/LICTONSORIALASTORIA/" target="_blank">
                      <img src="GFX/icons/fb.png" width="45" height="45" alt=""/>
                  </a>
                  <a href="https://twitter.com/Lic_tonsorial" target="_blank">
                      <img src="GFX/icons/twit.png" width="45" height="45" alt=""/>
                  </a>
                  <a href="https://www.instagram.com/lic_tonsorial/" target="_blank">
                      <img src="GFX/icons/ins.png" width="45" height="45" alt=""/>
                  </a>
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

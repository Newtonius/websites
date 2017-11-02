<!DOCTYPE html>
<html lang="en">
    <head>
        <title>L.I.C. Tonsorial</title>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="Pragma" content="no-cache"/>
        <meta http-equiv="Expires" content="-1"/>

        <!--  meta tags for search engine analytics  -->
        <meta itemprop="name" content="Long Island City Tonsorial">
        <meta itemprop="url" content="http://lictonsorial.com/"></div>
        <meta name="description" content="We're a family run barbershop based in Long Island city. We give cuts, shaves, trims, even a hot towel facial to all clients, young and old."/>

        <!--  CUSTOM LIBRARIES  -->
        <link rel="shortcut icon" href="GFX/icon.png"/>
        <link rel="stylesheet" href="core.css" type="text/css"/>
        <link rel="stylesheet" href="content.css" type="text/css"/>
        <link rel="stylesheet" href="nav.css" type="text/css"/>
        <link rel="stylesheet" href="header.css" type="text/css"/>

        <!--  FONTS
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Stoke" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=IM+Fell+French+Canon:400italic" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400italic" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Cantata+One" rel="stylesheet">
      -->

      <!-- Scripts -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script>
        $(function() {
          var d = new Date();
          var n = d.getDay();
          document.getElementById("test").innerHTML = n;
          if (n == 1) {
            var x=document.getElementById("monday");
            x.style.color='green';
          }
          else if (n == 2) {
            var x=document.getElementById("tuesday");
            x.style.color='green';
          }
          else if (n == 3) {
            var x=document.getElementById("wednesday");
            x.style.color='green';
          }
          else if (n == 4) {
            var x=document.getElementById("thursday");
            x.style.color='green';
          }
          else if (n == 5)) {
            var x=document.getElementById("friday");
            x.style.color='green';
          }
          else if (n == 6) {
            var x=document.getElementById("saturday");
            x.style.color='green';
          }
          else if (n == 7) {
            var x=document.getElementById("sunday");
            x.style.color='green';
          }
        });
      </script>
      <script>
        $(function(){
            var scroller = $('#scroller div.innerScrollArea');
            var scrollerContent = scroller.children('ul');
            scrollerContent.children().clone().appendTo(scrollerContent);
            var curX = 0;
            scrollerContent.children().each(function(){
                var $this = $(this);
                $this.css('left', curX);
                curX += $this.outerWidth(true);
            });
            var fullW = curX / 2;
            var viewportW = scroller.width();

            // Manual Scroller
            // scroller.css('overflow-x', 'auto');

            // Scrolling speed management
            var controller = {curSpeed: 0, fullSpeed: 1};
            var $controller = $(controller);
            // When hovering over, takes 500ms to set speed of rotation to 0
            var tweenToNewSpeed = function(newSpeed, duration)
            {
                if (duration === undefined)
                    duration = 250;
                $controller.stop(true).animate({curSpeed:newSpeed}, duration);
            };

            // Pause on hover
            scroller.hover(function(){
                tweenToNewSpeed(0);
            }, function(){
                tweenToNewSpeed(controller.fullSpeed); // When hovering out, set speed to normal
            });

            // Scrolling management; start the automatical scrolling
            var doScroll = function()
            {
                var curX = scroller.scrollLeft();
                var newX = curX + controller.curSpeed;
                if (newX > fullW*2 - viewportW)
                    newX -= fullW;
                scroller.scrollLeft(newX);
            };
            setInterval(doScroll, 20);
            tweenToNewSpeed(controller.fullSpeed);
          });
      </script>
    </head>
    <body>

        <!--  BACKGROUND  -->
        <figure class="background">
            <img src="GFX/bg.jpg" alt=""/>
        </figure>

        <!--  ENTIRE PAGE WRAPPER  -->
        <div id="wrapper">

            <!--  TOPBAR NAV -->
            <div id="top_bar">

                <a href="#top">
                  <p class="titleLogo">
                    L.I.C. <img src="GFX/razorHeader.png" width="50" height="43"/> Tonsorial
                  </p>
                </a>

              <p id="day"></p>
              <span class="number"><img class="nav_icons" src="GFX/products/vintage-phone.png" width="20" height="37"> 347 654 6386</span>
            </div>

            <!--  HEADER [LOGO]  -->
            <div id="header">

                <!--  LOGO -->
                <span class="anchor" id="topAnchor"></span>
                <center>
                    <div id="logo_Container">
                        <img itemprop = "logo" src="GFX/Logo.png" id="logoFade" class="logo" alt=""/>
                    </div>
                </center>
                <br/>
                 <br/>
                 <!--  HEADER NAV  -->
                 <nav id="nav">
                     <ul>
                         <li>
                            <a href="#aboutSection">
                                About Us
                            </a></li><li>
                            <a href="#info">
                               Services
                            </a></li><li>
                            <a href="#photos">
                                Gallery
                            </a></li><li>
                            <a href="https://lictonsorial.resurva.com/book" target="_blank">
                                Book Appointment
                            </a></li>
                     </ul>
                 </nav>
            </div>

            <div class="number_mobile">
              <a href="tel:+13476546386"></a>
            </div>
            <!--  CONTENT  -->
            <div id="contentBackground">
                <div id="content">

                    <!--   ABOUT US SECTION   -->
                    <span class="anchor" id="aboutSection"></span>
                    <section id="about" class="sections">
                        <article class="article">

                            <h3>About us</h3>
                            <img class="underline" src="/GFX/vintage-underline.png" />
                            <div id="aboutWrapper">
                                <div class="aboutContent">
                                    <p class="about_description">
                                        I remember those old-fashioned barber shops,
                                        the ones where everyone was welcome.
                                        You could hear stories about people who made it to the top,
                                        never just a place to get your haircut, rather, filled with conversation
                                        and good memories. I spent most of my childhood in one.
                                        When life threw-out the day would go wrong,
                                        the barber shop was a place that made me feel strong,
                                        a place where everyone shares an experience.
                                        It's places like this, I love the most.
                                    </p>
                                    <!--  SOCIAL ICONS  -->
                                    <div class="socialIcons">
                                        <a href="https://www.facebook.com/longislandcitybarber/timeline" target="_blank">
                                            <img src="GFX/fb.png" width="38" height="38" alt=""/>
                                        </a>
                                        <a href="https://twitter.com/QueensFinests" target="_blank">
                                            <img src="GFX/twit.png" width="38" height="38" alt=""/>
                                        </a>
                                        <a href="https://www.instagram.com/l.i.ctonsorial2014/?ref=badge" target="_blank">
                                            <img src="GFX/ins.png" width="38" height="38" alt=""/>
                                        </a>
                                    </div>
                                </div>
                                <!--  ABOUT IMAGE  -->
                                <div class="aboutContent">
                                    <img class="about_image" src="GFX/aboutUs.jpg" align="middle" alt=""/>
                                </div>

                                <!--  CONTACT INFO  -->
                                <div class="aboutContent">
                                    <div class="address_content">
                                        41-10 34th Ave<br/> Long Island City NY, 11101<br/> (347) 654 6386
                                    </div>
                                    <div class="direction">
                                      <a target="_blank" href="https://www.google.com/maps/place/41-10+34th+Ave,+Astoria,+NY+11101/@40.7561242,-73.9218469,17z/data=!3m1!4b1!4m2!3m1!1s0x89c25f3b4a5624cf:0xe8ca6027e1d2c001">
                                        Map
                                      </a>
                                    </div>

                                    <div class="hour_wrap">
                                      <div class="hour_table">

                                        <div class="hour_row hour_header">
                                          <div class="cell">Day</div>
                                          <div class="cell">Hours</div>
                                        </div>

                                        <div class="hour_row" id="monday">
                                          <div class="cell">Monday</div>
                                          <div class="cell">10am - 10pm</div>
                                        </div>
                                        <div class="hour_row" id="tuesday">
                                          <div class="cell">Tuesday</div>
                                          <div class="cell">10am - 10pm</div>
                                        </div>
                                        <div class="hour_row" id="wednesday">
                                          <div class="cell">Wednesday</div>
                                          <div class="cell">10am - 10pm</div>
                                        </div>
                                        <div class="hour_row" id="thursday">
                                          <div class="cell">Thursday</div>
                                          <div class="cell">10am - 10pm</div>
                                        </div>
                                        <div class="hour_row" id="friday">
                                          <div class="cell">Friday</div>
                                          <div class="cell">10am - 10pm</div>
                                        </div>
                                        <div class="hour_row" id="saturday">
                                          <div class="cell">Saturday</div>
                                          <div class="cell">10am - 10pm</div>
                                        </div>
                                        <div class="hour_row" id="sunday">
                                          <div class="cell">Sunday</div>
                                          <div class="cell">12pm - 5pm</div>
                                        </div>
                                        <p id="test"><p>
                                      </div>
                                    </div>
                                </div>

                            </div>
                        </article>
                    </section>

                    <!--   SERVICES SECTION   -->
                    <span class="anchor" id="info"></span>
                    <section id="infoSection" class="sections">
                        <article>
                            <div class="cutWrapper">
                              <h3>Services</h3>
                              <img class="underline" src="/GFX/vintage-underline.png" /><br/>
                              <img class="price_list" src="/GFX/services/price_list.png" />
                            </div>

                            <div class="products" id="products">
                              <h3>Products</h3>
                              <img class="underline" src="/GFX/vintage-underline.png" />
                                <h4>
                                  Baxter
                                </h4>
                                <ul class="product_List">
                                  <li>Cream Pomade $22</li>
                                  <li>Hard Cream Pomade $22</li>
                                  <li>Clay Pomade $22</li>
                                  <li>Soft Water Pomade $22</li>
                                  <li>Hard Water Pomade $22</li>
                                  <li>Exfoliating Body Bar $17</li>
                                  <li>Vitamin Body Bar $17</li>
                                  <li>Protein Shampoo $18</li>
                                  <li>Conditioner $19</li>
                                  <li>Shave Tonic $18</li>
                                  <li>Oil Free Moisturizer $24</li>
                                  <li>Aftershave $19</li>
                                  <li>Large Comb $20</li>
                                  <li>Deodorant $19</li>
                                </ul>
                                <h4>
                                  Layrite
                                </h4>
                                  <ul class="product_List">
                                    <li>Original $18</li>
                                    <li>Super Hold $18</li>
                                    <li>Matte Cream $18</li>
                                  </ul>
                                <h4>
                                  Mr. Matty
                                </h4>
                                  <ul class="product_List">
                                    <li>Dub $20</li>
                                    <li>Paste $20</li>
                                    <li>Moisturizing Butter $20</li>
                                  </ul>
                                  <!--
                                <img class="layritePics" src="GFX/Layrite/deluxe_trans.png" alt="Layrite" title="Layrite Deluxe" width="125" height="125"/>
                                <img class="layritePics" src="GFX/Layrite/lgSpray_trans.png" alt="Layrite" title="Layrite Spray" width="75" height="175"/>
                                <img class="layritePics" src="GFX/Layrite/superhold_trans.png" alt="Layrite" title="Layrite Superhold" width="125" height="125"/>
                                  -->
                            </div>
                        </article>
                    </section>

                    <!--   PHOTO GALLERY SECTION   -->
                    <span class="anchor" id="photos"></span>
                    <section id="photoSection" class="sections">
                        <article class="article">
                            <h3>
                              <a href="http://lictonsorial.com/gallery.php" target="_blank" style="color: #ffffff; text-decoration: none;">
                                Visit our Gallery
                              </a>
                            </h3>
                            <img class="underline" src="/GFX/vintage-underline.png" />
                            <!--   GALLERY  IMAGES   -->
                            <div id="scroller">
                              <div class="innerScrollArea">
                                <ul>
                                  <?php
                                    $barbers = array("geraldo","alvi","justin","luis");
                                    for ($i=0; $i < count($barbers); $i++):
                                  ?>

                                  <li>
                                    <a href="GFX/gallery/<?php echo $barbers[$i]; ?>.jpg">
                                      <img src="GFX/gallery/<?php echo $barbers[$i]; ?>.jpg" target="_blank" width="500" height="350" alt="" title="<?php echo $barbers[$i]; ?>">
                                    </a>
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

            </footer>

  </body>
</html>

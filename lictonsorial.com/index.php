<!-- testing new git platform -->
<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Tonsorial Barbershop</title>
      <link rel="stylesheet" href="CSS/firstPage.css" type="text/css"/>
      <?php include ($_SERVER['DOCUMENT_ROOT'].'/adds/header_add.html') ?>

      <script src="/scripts/hours.js" async></script>
  </head>
  <body>
    <!--  ENTIRE PAGE WRAPPER  -->
    <div id="wrapper">
        <!--  TOPBAR NAV -->
        <ul class="nav">
          <button onclick="open_sidenav()">☰</button>
          <li style="float: left; padding: 5px;">
            <span class="titleLogo">
              <img src="GFX/icons/razorHeader.png" />
            </span>
          </li>
          <li style="float: left;">
            <span style="padding: 14px 16px; display: block;">
              Tonsorial Barbershop
            </span>
          </li>
          <li><a href="#contact">Contact Us</a></li>
          <li><a href="#aboutUs">About us</a></li>
          <li>
            <a href="https://lictonsorial.resurva.com/book" target="_blank">
              Book Appointment
            </a>
          </li>
        </ul>

        <!-- Sidebar nav -->
        <ul class="side_nav" style="display: none;" id="sidenav">
          <button onclick="close_sidenav()">&times; Close</button>
          <li>
            <a href="https://lictonsorial.resurva.com/book" target="_blank">
              Book Appointment
            </a>
          </li>
          <li><a href="#aboutUs" onclick="close_sidenav()">About us</a></li>
          <li><a href="#contact" onclick="close_sidenav()">Contact Us</a></li>
        </ul>

        <!--  HEADER  -->
        <div id="header" class="header">
            <span class="anchor" id="topAnchor"></span>
             <ul class="location_options">
               <li id="LIC_location" class="locations">
                 <figure>
                   <img id="lic_logo" src="GFX/icons/lic_logo.png" alt="" />
                 </figure>
                 <a id="lic_button" href="LIC.php">
                   <p>Visit L.I.C. Site</p>
                 </a>
               </li>
               <li id="Flushing_location" class="locations">
                 <figure>
                   <img src="GFX/icons/bayside_logo.png" alt="" />
                 </figure>
                   <p style="background:rgba(70, 70, 70, 0.75);">Bayside Site</p>
                   <h3 class="centered">Coming soon!</h3>
               </li>
             </ul>
        </div>

        <!--  CONTENT  -->
        <div id="contentBackground">
          <div id="content">
            <!--   ABOUT US SECTION   -->
            <section id="about" class="sections">
                <article class="article">
                    <span class="anchor" id="aboutUs"></span>
                    <h3>About us</h3>
                    <img class="underline" src="/GFX/icons/title-underline.png" />
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
                            <!--  SOCIAL ICONS  -->
                            <div class="socialIcons">
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
                        </div>
                        <!--  ABOUT IMAGE  -->
                        <div class="aboutContent">
                            <img class="about_image" src="GFX/content/aboutUs.jpg" align="middle" alt=""/>
                        </div>

                        <!--  CONTACT INFO  -->
                        <div class="aboutContent">
                          <!--
                            <div class="address_content">
                                41-10 34th Ave<br/> Long Island City NY, 11101<br/> (347) 654 6386
                            </div>
                            <div class="direction">
                              <a target="_blank" href="https://www.google.com/maps/place/41-10+34th+Ave,+Astoria,+NY+11101/@40.7561242,-73.9218469,17z/data=!3m1!4b1!4m2!3m1!1s0x89c25f3b4a5624cf:0xe8ca6027e1d2c001">
                                Map
                              </a>
                            </div>
                          -->
                            <div class="hour_wrap">
                              <div class="hour_table">

                                <div class="hour_row hour_header">
                                  <div class="cell">Business</div>
                                  <div class="cell">Hours</div>
                                </div>

                                <div class="hour_row">
                                  <div class="cell" id="monday">Monday</div>
                                  <div class="cell" id="mHours">10am - 10pm</div>
                                  <div class="status" id="mStatus"></div>
                                </div>
                                <div class="hour_row">
                                  <div class="cell" id="tuesday">Tuesday</div>
                                  <div class="cell" id="tuHours">10am - 10pm</div>
                                  <div class="status" id="tuStatus"></div>
                                </div>
                                <div class="hour_row">
                                  <div class="cell" id="wednesday">Wednesday</div>
                                  <div class="cell" id="wHours">10am - 10pm</div>
                                  <div class="status" id="wStatus"></div>
                                </div>
                                <div class="hour_row">
                                  <div class="cell" id="thursday">Thursday</div>
                                  <div class="cell" id="thHours">10am - 10pm</div>
                                  <div class="status" id="thStatus"></div>
                                </div>
                                <div class="hour_row">
                                  <div class="cell" id="friday">Friday</div>
                                  <div class="cell" id="fHours">10am - 10pm</div>
                                  <div class="status" id="fStatus"></div>
                                </div>
                                <div class="hour_row">
                                  <div class="cell" id="saturday">Saturday</div>
                                  <div class="cell" id="saHours">10am - 10pm</div>
                                  <div class="status" id="saStatus"></div>
                                </div>
                                <div class="hour_row">
                                  <div class="cell" id="sunday">Sunday</div>
                                  <div class="cell" id="suHours">12pm - 5pm</div>
                                  <div class="status" id="suStatus"></div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>

          </div>
        </div>
        <!--  FOOTER  -->
        <footer id="footer">
          <div class="footer_tag">
            <span style="color: #fff;">
              Contact Us at:
            </span>
            <br/><br/>
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
            <br/><br/>
            <span class="footer_name">Bayside Tonsorial</span>
            |
            <span class="footer_address">
             <a href="https://www.google.com/maps/place/32-32+Francis+Lewis+Blvd,+Flushing,+NY+11358,+USA/data=!4m2!3m1!1s0x89c28a7f70fefcfd:0x29105407647a2fc0?sa=X&ved=0ahUKEwitpt2dm7LbAhWEyLwKHQszDAkQ8gEIKDAA">
               32-32 Francis Lewis Blvd queens NY 11358
             </a>
            </span>
            |
            <span class="footer_number" id="contact">
             <a href="tel:+13476546386">+1 (516) 401 2837</a>
            </span>
          </div>
        </footer>
        <script>
          function open_sidenav() {
              document.getElementById("sidenav").style.display = "block";
          }
          function close_sidenav() {
              document.getElementById("sidenav").style.display = "none";
          }
        </script>
  </body>
</html>

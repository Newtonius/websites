<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Tonsorial Barbershop</title>
      <?php include ($_SERVER['DOCUMENT_ROOT'].'/adds/header_add.html') ?>
      <link rel="stylesheet" href="CSS/firstPage.css" type="text/css"/>

  </head>
  <body>
    <!--  ENTIRE PAGE WRAPPER  -->
    <div id="wrapper">
        <!--  TOPBAR NAV -->
        <ul class="nav">
          <button onclick="open_sidenav()">☰</button>
          <li style="float: left; padding: 5px;">
            <span class="titleLogo">
              <img src="GFX/razorHeader.png" />
            </span>
          </li>
          <li style="float: left;">
            <span style="padding: 14px 16px; display: block;">
              Tonsorial Barbershop
            </span>
          </li>
          <li><a href="#contact">Contact Us</a></li>
          <li><a href="#">Our Services</a></li>
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
          <li><a href="#" onclick="close_sidenav()">Our Services</a></li>
          <li><a href="#contact" onclick="close_sidenav()">Contact Us</a></li>
        </ul>

        <!--  HEADER  -->
        <div id="header" class="header">
            <span class="anchor" id="topAnchor"></span>
             <ul class="location_options">
               <li id="LIC_location" class="locations">
                 <figure>
                   <img src="GFX/Logo.png" alt="" />
                 </figure>
                 <a href="LIC.php">
                   <p>Visit L.I.C. Site</p>
                 </a>
               </li>
               <li id="Flushing_location" class="locations">
                 <figure>
                   <img src="GFX/bayside_logo.png" alt="" />
                 </figure>
                   <p style="background:rgba(70, 70, 70, 0.75);">Bayside Site</p>
                   <h3 class="centered">Coming soon!</h3>
               </li>
             </ul>
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

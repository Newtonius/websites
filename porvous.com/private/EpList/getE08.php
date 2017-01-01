<?php
  header('Content-type: video/mp4');
  header('Content-Length: ' .filesize("/var/www/private/tv-shows/trapped/TrE01.mp4"));
  readfile("/var/www/private/tv-shows/trapped/TrE08.mp4");
?>

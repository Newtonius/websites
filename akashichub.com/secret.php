<!DOCTYPE html>
<html>
  <head>

    <style>
    @font-face {
        font-family: 'Earth 3d';
        src: url('/fonts/earthorbiterdeep3d.ttf');
    }
    </style>
    <title>Super Secret</title>
    <script>
      function video_load() {
        document.getElementById('video_frame').src = "video.html";
      }
    </script>
  </head>
  <body>
    <div>
      <h1 style=" font-family: 'Earth 3d'; text-align: center; margin-top: 100px;">BRANDON CLICK THE BUTTON BELOW<h1>
        <center>
          <button onclick="video_load()">
            <img style="width: 75px; height: 75px;" src="/GFX/misc/button.png" alt="">
          </button>
<br>
        <iframe id="video_frame" style="" frameborder="0" src="" width="400" height="300" border="none"></iframe>
    </div>
  </body>
</html>

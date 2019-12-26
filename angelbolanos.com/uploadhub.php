<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Upload Hub</title>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
      <meta http-equiv="Pragma" content="no-cache" />
      <meta http-equiv="Expires" content="0" />

      <link rel="stylesheet" href="CSS/core.css?v=1.01" type="text/css"/>
  </head>
  <body>
    <div class="upload_form">
      <form action="PHP/upload.php" method="post" enctype="multipart/form-data">
        <h2>Select Image(s) or Video(s) To Upload.</h2>
        <p>Allowed Image Formats: <span>.jpg, .jpeg, .png, .tiff</span></p>
        <p>Allowed Video Formats: <span>.mp4, .mov, .webm, .ogg, .avi, .wmv</span></p>
        <p>Max File Size Allowed: <span>3MB</span></p>
        <input type="file" name="filesToUpload[]" id="fileToUpload" multiple>
        <input type="submit" value="Upload Image" name="submit">
      </form>
      <p class="upload_status" id="upload_status"></p>
    </div>
  </body>
</html>

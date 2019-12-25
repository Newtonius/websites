<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Upload Hub</title>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
      <meta http-equiv="Pragma" content="no-cache" />
      <meta http-equiv="Expires" content="0" />

      <link rel="stylesheet" href="CSS/core.css?v=1.0" type="text/css"/>
  </head>
  <body>

    <form action="upload.php" method="post" enctype="multipart/form-data">
      Select images to upload:
      <input type="file" name="fileToUpload" id="fileToUpload">
      <input type="submit" value="Upload Image" name="submit">
    </form>

  </body>
</html>

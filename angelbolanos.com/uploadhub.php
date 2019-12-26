<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Upload Hub</title>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
      <meta http-equiv="Pragma" content="no-cache" />
      <meta http-equiv="Expires" content="0" />

      <link rel="stylesheet" href="CSS/core.css?v=1.03" type="text/css"/>
  </head>
  <body>

    <div class="upload_form">
      <form action="" method="post" enctype="multipart/form-data">
        <h2>Select Image(s) or Video(s) To Upload.</h2>
        <p>Allowed Image Formats: <span>.jpg, .jpeg, .png, .tiff</span></p>
        <p>Allowed Video Formats: <span>.mp4, .mov, .webm, .ogg, .avi, .wmv</span></p>
        <p>Max per-file Size Allowed: <span>25 MB</span></p>
        <p>Amount of files Allowed per Upload: <span>100</span></p>
        <input type="file" name="filesToUpload[]" id="fileToUpload" multiple>
        <input type="submit" value="Upload Image" name="submit">
      </form>
      <p class="error_status" id="error_status"></p>
      <p class="upload_status" id="upload_status"></p>

      <?php

        // $target_dir = "uploads/" - specifies the directory where the file is going to be placed
        $target_dir = "uploads/";
        // $target_file specifies the path of the file to be uploaded
        // $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        // $uploadOk=1 is not used yet (will be used later)
        $uploadOk = 1;
        // $imageFileType holds the file extension of the file (in lower case)
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $allowedFileTypes = array("jpg", "jpeg", "png", "tiff", "mp4", "mov", "webm", "ogg", "avi", "wmv");
        $maxFileSize = (15*1024*1024);

        if (isset($_POST["submit"])) {
          // Check if array is empty
          if(!empty(array_filter($_FILES['filesToUpload']['name']))) {
            // Cycle through array of files
            foreach (($_FILES['filesToUpload']['tmp_name']) as $key => $value) {

              $file_tmpname = $_FILES['filesToUpload']['tmp_name'][$key];
              $file_name = $_FILES['filesToUpload']['name'][$key];
              $file_size = $_FILES['filesToUpload']['size'][$key];
              $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
              $file_path = $target_dir.$file_name;

              // Check if ext is allowed - in_array cycles through array '$allowedFileTypes'
              if (in_array(strtolower($file_ext), $allowedFileTypes)) {
                // Check if file exceeds limit
                if ($file_size < $maxFileSize) {
                  // Check if file exists, if it does - add the current time to it and save it anyways
                  if(!(file_exists($file_path))) {

                    if(move_uploaded_file($file_tmpname, $file_path)) {
                      echo '
                      <script type="text/javascript">
                        document.getElementById("upload_status").innerHTML = "File(s) succesfully uploaded!";
                      </script>';
                    } else {
                        echo '
                        <script type="text/javascript">
                          document.getElementById("error_status").innerHTML = "Error 4:  Error Uploading file(s).";
                        </script>';
                        echo '
                        <script type="text/javascript">
                          document.getElementById("upload_status").innerHTML = "File(s) NOT uploaded. Please report error to Angel.";
                        </script>';
                    }
                  } else {
                      $file_path = $target_dir.time().$file_name;
                      move_uploaded_file($file_tmpname, $file_path);
                      echo '
                      <script type="text/javascript">
                        document.getElementById("upload_status").innerHTML = "File(s) succesfully uploaded!";
                      </script>';
                  }
                } else {
                    echo '
                    <script type="text/javascript">
                      document.getElementById("error_status").innerHTML = "Error 3:  File(s) exceeds more than 3 MB.";
                    </script>';
                    echo '
                    <script type="text/javascript">
                      document.getElementById("upload_status").innerHTML = "File(s) NOT uploaded. Please report error to Angel.";
                    </script>';
                }
              } else {
                  echo '
                  <script type="text/javascript">
                    document.getElementById("error_status").innerHTML = "Error 2:  File(s) type not allowed. Please refer to above list.";
                  </script>';
                  echo '
                  <script type="text/javascript">
                    document.getElementById("upload_status").innerHTML = "File(s) NOT uploaded. Please report error to Angel.";
                  </script>';
              }
            }
          } else {
              echo '
              <script type="text/javascript">
                document.getElementById("error_status").innerHTML = "Please choose files to upload.";
              </script>';
          }
        }
          /* Check image file to determine if fake or real
          if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
              echo "tmp File Uploaded" . $check["mime"] . ".";
              $uploadOk = 1;
            } else {
              echo "tmp File not uploaded";
              $uploadOk = 0;
            }
          }
          */

            /*
            $countFiles = count($_FILES["fileToUpload"]["name"]);
            for($i = 0; $i < $countFiles; $i++) {
              $filename = $_FILES["fileToUpload[]"]["name"][$i];
            }

            // Check if file already exists
            if (file_exists($target_file)) {
              echo "--File already exists";
              $uploadOk = 0;
            }

            // Check file size
            $maxFileSize = 3*1024*1024;
            if ($_FILES["fileToUpload[]"]["size"] > $maxFileSize) {
              echo "--File Exceeds Size limit";
              $uploadOk = 0;
            }

            // Allow specific file formats
            if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "mp4"
             && $imageFileType != "tiff" && $imageFileType != "mov" && $imageFileType != "webm" && $imageFileType != "ogg"
              && $imageFileType != "avi" && $imageFileType != "wmv") {
              echo "--File is wrong format: jpg, jpeg, png, and mp4 file types allowed only.";
            }

            // Final upload check
            if ($uploadOk == 0) {
              echo "--File was not uploaded";
            } else {
              if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "--the file " . basename($_FILES["fileToUpload[]"]["name"]) . " has been uploaded.";
              } else {
                echo "--Error uploading cleared tmp file";
              }
            }
            */
      ?>
    </div>
  </body>
</html>

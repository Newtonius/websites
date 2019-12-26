<?php
// $target_dir = "uploads/" - specifies the directory where the file is going to be placed
$target_dir = "../uploads/";
// $target_file specifies the path of the file to be uploaded
$target_file = $target_dir . basename($_FILES["fileToUpload[]"]["name"]);
// $uploadOk=1 is not used yet (will be used later)
$uploadOk = 1;
// $imageFileType holds the file extension of the file (in lower case)
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$allowedFileTypes = array("jpg", "jpeg", "png", "tiff", "mp4", "mov", "webm", "ogg", "avi", "wmv");
$maxFileSize = 3*1024*1024;
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

if (isset($_POST["submit"])) {
  // Check if array is empty
  if(!empty(array_filter($_FILES['filesToUploadTo']['name']))) {
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
        if ($file_size > $maxFileSize) {
          <script type="text/Javascript">
            document.getElementById("error_status").innerHTML = "File Exceeds 3MB";
          </script>
          $uploadOk = 0;
        }

        // Check if file exists, if it does - add the current time to it and save it anyways
        if(file_exists($file_path)) {
          $file_path = $target_dir.time().$file_name;

          if(move_uploaded_file($file_tmpname, $file_path)) {
            <script type="text/Javascript">
              document.getElementById("upload_status").innerHTML = "File() Succesfully uploaded";
            </script>
          }
        }
      }
    }
  }

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
    if (move_uploaded_file($_FILES["fileToUpload[]"]["tmp_name"], $target_file)) {
      echo "--the file " . basename($_FILES["fileToUpload[]"]["name"]) . " has been uploaded.";
    } else {
      echo "--Error uploading cleared tmp file";
    }
  }
  */
}

?>

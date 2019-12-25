<?php
// $target_dir = "uploads/" - specifies the directory where the file is going to be placed
$target_dir = "../uploads/";
// $target_file specifies the path of the file to be uploaded
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk=1 is not used yet (will be used later)
$uploadOk = 1;
// $imageFileType holds the file extension of the file (in lower case)
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check image file to determine if fake or real
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "tmp File Uploaded" . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "tmp File not uploaded";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "File already exists";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
  echo "File Exceeds limit";
  $uploadOk = 0;
}

// Allow specific file formats
if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "mp4"
 && $imageFileType != "tiff" && $imageFileType != "mov" && $imageFileType != "webm" && $imageFileType != "ogg"
  && $imageFileType != "avi" && $imageFileType != "wmv") {
  echo "File is wrong format: jpg, jpeg, png, and mp4 file types allowed only.";
}

// Final upload check
if ($uploadOk == 0) {
  echo "File was not uploaded";
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "the file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
  } else {
    echo "Error uploading cleared tmp file";
  }
}


?>

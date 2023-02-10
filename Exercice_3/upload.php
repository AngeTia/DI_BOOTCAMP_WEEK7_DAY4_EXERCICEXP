<?php

if (isset($_FILES['file'])) {

  $file = $_FILES['file'];

  // File properties
  $file_name = $file['name'];
  $file_tmp = $file['tmp_name'];
  $file_size = $file['size'];
  $file_error = $file['error'];

  // File extension
  $file_ext = explode('.', $file_name);
  $file_ext = strtolower(end($file_ext));

  // Allowed file types
  $allowed = array('pdf');

  // Check if the uploaded file is a PDF
  if (in_array($file_ext, $allowed)) {

    // Check for upload errors
    if ($file_error === 0) {

      // Destination folder
      $file_destination = 'uploads/' . $file_name;

      // Move the uploaded file from the temporary directory to the desired destination
      if (move_uploaded_file($file_tmp, $file_destination)) {
        echo "The file " . $file_name . " has been uploaded successfully.";
      } else {
        echo "There was an error uploading the file.";
      }

    } else {
      echo "There was an error uploading the file.";
    }

  } else {
    echo "The file type is not allowed. Only PDF files are allowed.";
  }

}

?>

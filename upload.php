
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_FILES['profilePicture'])) {
    $file = $_FILES['profilePicture'];

    // Check for errors
    if ($file['error'] !== UPLOAD_ERR_OK) {
      echo "Error uploading the file.";
      exit;
    }

    // Define the destination directory and filename
    $destinationDir = 'profile_pic/';
    $destinationPath = $destinationDir . basename($file['name']);

    // Move the uploaded file to the destination directory
    if (move_uploaded_file($file['tmp_name'], $destinationPath)) {
      echo "File uploaded successfully.";
    } else {
      echo "Error moving the uploaded file.";
    }
  }
}

header('Location: profile.php');
exit;

?>

<?php
require_once("includes/header.php");
require_once("includes/classes/VideoUploadData.php");
require_once("includes/classes/VideoProcessor.php");
//check if came from the upload page.
if(!isset($_POST["uploadButton"])){
  echo "no file sent to page";
  exit();
}

//1. Create file upload data
$videoUploadData = new VideoUploadData(
                                      $_FILES["fileInput"],
                                      $_POST["titleInput"],
                                      $_POST["descriptionInput"],
                                      $_POST["privacyInput"],
                                      $_POST["categoriesInput"],
                                      "REPLACE-THIS"
                                    );
//2. Process video data(upload)
$videoProcessor = new VideoProcessor($con);
$wasSuccessful = $videoProcessor->upload($videoUploadData);
//3. Check if upload was successful.
?>

<?php
require_once("includes/footer.php");
?>

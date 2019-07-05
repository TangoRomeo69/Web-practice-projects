<!--Video processing page-->

<?php
//call basic page structure
require_once("includes/header.php");
//call the uploaded video data information class
require_once("includes/classes/VideoUploadData.php");
//call the video data processor class
require_once("includes/classes/VideoProcessor.php");
//check if the age was reached from upload page
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

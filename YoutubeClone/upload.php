<!--Video upload page-->

<?php
//Calls the basic page structure.
require_once("includes/header.php");
//Calls the upload form provider class
require_once("includes/classes/VideoDetailFormProvider.php");
?>

<div class="column">
  <?php
  $formProvider = new VideoDetailFormProvider($con);
  echo $formProvider->createUploadForm();
  ?>
</div>

<?php
//Calls the scripts and footer structure
require_once("includes/footer.php");
?>
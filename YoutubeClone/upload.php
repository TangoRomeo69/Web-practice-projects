<?php
require_once("includes/header.php");
require_once("includes/classes/VideoDetailFormProvider.php");
?>

<div class="column">
  <?php
  $formProvider = new VideoDetailFormProvider($con);
  echo $formProvider->createUploadForm();
  ?>
</div>

<?php
require_once("includes/footer.php");
?>
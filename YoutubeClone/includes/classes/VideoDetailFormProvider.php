<?php

/**
 * Class VideoDetailFormProvider
 * Video upload form provider and builder class
 */
class VideoDetailFormProvider{

  /**
   * @var
   * variable to hold the connection to DB
   */
  private $con;

  /**
   * VideoDetailFormProvider constructor.
   * @param $con
   */
  public  function __construct($con){
    $this->con = $con;
  }

  /**
   * @return string
   * function to create the upload form
   * returns HTML structure as string
   */
  public function createUploadForm(){
    $fileInput = $this->createFileInput();
    $titleInput = $this->createTitleInput();
    $descriptionInput = $this->createDescriptionInput();
    $privacyInput = $this->createPrivacyInput();
    $categoriesInput = $this->createCategoriesInput();
    $uploadButton = $this->createUploadButton();
    return "<form action='processing.php' method='POST' enctype='multipart/form-data'><!--enctype allows the inclusion of files-->
              $fileInput
              $titleInput
              $descriptionInput
              $privacyInput
              $categoriesInput
              $uploadButton
            </form>";
  }

  /**
   * @return string
   * function to create file choosing field
   */
  private function createFileInput(){
    return "<div class='form-group'>
              <input type='file' class='form-control-file' id='exampleFormControlFile1' name='fileInput' required>
            </div>";
  }

  /**
   * @return string
   * function to create title field of the video
   */
  private function createTitleInput(){
    return "<div class='form-group'>
              <input class='form-control' type='text' placeholder='Title' name='titleInput'>
            </div>";
  }

  /**
   * @return string
   * function to create description field of the video
   */
  private function createDescriptionInput(){
    return "<div class='form-group'>
              <textarea class='form-control' placeholder='Description' name='descriptionInput' rows='3'></textarea>
            </div>";
  }

  /**
   * @return string
   * function to create privacy options of the video
   */
  private function createPrivacyInput(){
    return "<div class='form-group'>
              <select class='form-control' name='privacyInput'>
                <option value='0'>Private</option>
                <option value='1'>Public</optionvalue>
              </select>
            </div>";
  }

  /**
   * @return string
   * function to create category options of the video
   */
  private function createCategoriesInput(){
    //create the query
    $query = $this->con->prepare("SELECT * FROM categories");
    //execute the query
    $query->execute();

    $html = "<div class='form-group'>
              <select class='form-control' name='categoriesInput'>";

    while($row = $query->fetch(PDO::FETCH_ASSOC)){
      //fetches category names by row
      $name = $row["name"];
      //fetches id names by row
      $id = $row["id"];
      $html .= "<option value='$id'>$name</option>";
    }

    $html .= "</select>
            </div>";

    return $html;
  }

  /**
   * @return string
   * creates the upload button
   */
  private function createUploadButton(){
    return "<button type='submit' class='btn btn-primary' name='uploadButton'>Upload</button>";
  }
}
?>

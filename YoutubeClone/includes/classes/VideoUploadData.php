<?php

/**
 * Class VideoUploadData
 * data creator and classifier for videos
 */
class VideoUploadData{

  /**
   * @var
   * variables holding the video information
   */
  public $videoDataArray, $title, $description, $privacy, $category, $uploadedBy;

  /**
   * VideoUploadData constructor.
   * @param $videoDataArray
   * @param $title
   * @param $description
   * @param $privacy
   * @param $category
   * @param $uploadedBy
   */
  public function __construct($videoDataArray, $title, $description, $privacy, $category, $uploadedBy){
    $this->videoDataArray = $videoDataArray;
    $this->title = $title;
    $this->description = $description;
    $this->privacy = $privacy;
    $this->category = $category;
    $this->uploadedBy = $uploadedBy;
  }

}
?>

<?php

/**
 * Class VideoProcessor
 * Video data processor, verifier and uploader
 */
class  VideoProcessor{

  /**
   * @var
   * connection variable
   */
  /**
   * @var int
   * maximum size of uploaded video
   */
  private $con, $sizeLimit = 500000000;
  /**
   * @var array
   * array holding supported file types
   */
  private $allowedTypes = array("mp4", "flv", "webm", "mkv", "vob", "ogv", "ogg", "avi", "wmv", "mov", "mpeg", "mpg");

  /**
   * VideoProcessor constructor.
   * @param $con
   */
  public  function __construct($con){
    $this->con = $con;
  }

  /**
   * @param $videoUploadData
   * takes in the video information
   */
  public  function upload($videoUploadData){
    //create video directory
    $targetDir = "uploads/videos/";
    //store video data
    $videoData = $videoUploadData->videoDataArray;
    //create unique and temporary filepath
    $tempFilePath = $targetDir . uniqid() . basename($videoData["name"]);
    $tempFilePath = str_replace(" ", "_", $tempFilePath);

    $isValidData = $this->processData($videoData, $tempFilePath);

  }

  /**
   * process and validate video data
   * @param $videoData
   * @param $filePath
   * @return bool
   */
  private function processData($videoData, $filePath){
    //fetch the file extension to identify file type
    $videoType = pathinfo($filePath, PATHINFO_EXTENSION);
    if(!$this->isValidSize($videoData)){
      echo "File too large. File size can't be more than " . $this->sizeLimit . " bytes";
      return false;
    }
    else if(!$this->isValidType($videoType)){
      echo "Invalid file type";
      return false;
    }
  }

  /**
   * @param $data
   * checks the size validity of the video
   * @return bool
   */
  private function isValidSize($data){
     return $data["size"] <= $this->sizeLimit;
  }

  /**
   * @param $type
   * checks the type validity of the video
   * @return bool
   */
  private function isValidType($type){
    $lowerCased = strtolower($type);
    return in_array($lowerCased, $this->allowedTypes);
  }
}
?>

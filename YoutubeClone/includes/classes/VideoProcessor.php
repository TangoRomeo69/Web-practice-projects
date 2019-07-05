<?php
class  VideoProcessor{

  private $con;

  public  function __construct($con){
    $this->con = $con;
  }

  private function processData($videoData, $filePath){
    $videoType = pathinfo($filePath, PATHINFO_EXTENSION);
  }

  public  function upload($videoUploadData){
    $targetDir = "uploads/videos/";
    $videoData = $videoUploadData->videoDataArray;

    $tempFilePath = $targetDir . uniqid() . basename($videoData["name"]);
    $tempFilePath = str_replace(" ", "_", $tempFilePath);

    $isValidData = $this->processData($videoData, $tempFilePath);

  }
}
?>

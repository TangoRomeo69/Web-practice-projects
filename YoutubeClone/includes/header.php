<!--Basic page structure-->

<?php
//Calls the config file
require_once("includes/config.php");
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tube</title>
  <!--Add bootstrap-->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!--Add user StyleSheet-->
  <link rel="stylesheet" type="text/css" href="assets/css/style1.css">
</head>
<body>
<!--Main container for the pages-->
<div id="pageContainer">
  <!--Masthead navigation bar-->
  <div id="mastHeadContainer">
    <!--Side navigation bar show/hide button-->
    <button class="navShowHide"><img src="assets/images/icons/menu.png" alt="Menu"></button>
    <!--Site Logo-->
    <a class="logoContainer" href="index.php"><img src="assets/images/icons/TestTubeLogo.png" alt="Logo"></a>
    <!--SearchBar-->
    <div class="searchBarContainer">
      <form action="search.php" method="GET">
        <input type="text" class="searchBar" name="term" placeholder="Search...">
        <button class="searchButton"><img src="assets/images/icons/search.png" alt="SearchButton"></button>
      </form>
    </div>
    <!--Upload and profile button-->
    <div class="rightIcons">
      <a href="upload.php"><img class="upload" src="assets/images/icons/upload.png" alt="UploadButton"></a>
      <a href="#"><img class="upload" src="assets/images/profilePictures/default.png" alt="ProfileButton"></a>
    </div>
  </div>
  <!--Side Navigation Bar-->
  <div id="sideNavContainer" style="display: none">

  </div>
  <!--Main video section-->
  <div id="mainSectionContainer">
    <!--Main video container-->
    <div id="mainContentContainer">
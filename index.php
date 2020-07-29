<?php 

require_once("includes/header.php");

$preview = new PreviewProvider($con);
echo $preview->createPreviewVideo(null);

$containers = new CategoryContainers($con);
echo $containers->showAllCategories();

?>
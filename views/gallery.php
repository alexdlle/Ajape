<?php
$title = "Ajape : Gallerie";
$activeHome = "";
$activeGallery = " active";

$homePath="../index.php";
$galleryPath="./gallery.php";

ob_start();


$body = ob_get_clean();

require('../style/template.php');
?>

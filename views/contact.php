<?php
$title = "Ajape : Galerie";
$activeHome = "";
$activeGallery = "";
$activeContact=" active";

$homePath="../index.php";
$galleryPath="./gallery.php";
$contactPath="./contact.php";

ob_start();


$body = ob_get_clean();

require('../style/template.php');
?>

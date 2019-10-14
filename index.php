<?php

$title = "Home";
ob_start();

?>

<div id="carouselInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="https://blog.sportacus.fr/wp-content/uploads/2017/02/Capture-d%E2%80%99e%CC%81cran-2017-02-15-a%CC%80-22.04.47.png" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="https://cdn.pixabay.com/photo/2016/02/03/08/34/banner-1176681_960_720.jpg" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="https://blog.sportacus.fr/wp-content/uploads/2017/02/Capture-d%E2%80%99e%CC%81cran-2017-02-15-a%CC%80-22.04.47.png" class="d-block w-100" alt="">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Précédent</span>
  </a>
  <a class="carousel-control-next" href="#carouselInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Suivant</span>
  </a>
</div>

<?php

$body = ob_get_clean();
require('./style/template.php');

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type ='text/css' href="style/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>

  <body>

    <div class="modal" id="ContactModal">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Contact</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
              <form>
              <div class="form-group">
                <label for="exampleFormControlInput1">Adresse email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="MailContact">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Objet</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="La raison de votre message" name="ObjectContact">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Votre message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name ="MessageContact"></textarea>
              </div>
            </form>
        </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Envoyer</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
          </div>

        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="navbar-collapse collapse w-200 order-1 order-md-0 dual-collapse2">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item<?= $activeHome?>">
                  <a class="nav-link" href="<?= $homePath?>">Accueil</a>
              </li>
              <li class="nav-item<?= $activeGallery?>">
                  <a class="nav-link" href="<?= $galleryPath?>">Galerie</a>
              </li>
              <!--<li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
              </li> -->
          </ul>
      </div>
      <div class="mx-auto order-0">
          <a class="navbar-brand mx-auto" href="<?= $homePath?>">Ajape</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
              <span class="navbar-toggler-icon"></span>
          </button>
      </div>
      <div class="navbar-collapse collapse w-200 order-3 dual-collapse2">
          <ul class="navbar-nav ml-auto">
              <li class="<?= $activeContact?>">
                  <a class="nav-link" href="#" onclick="openModal()" data-toggle="modal fade">Contact</a>
              </li>
          </ul>
      </div>
  </nav>


    <?= $body ?>

    <script type="text/javascript">

    function openModal(){

        $('#ContactModal').modal('show');
    }
    </script>

  </body>

  <footer class="py-5 bg-dark footer-mod">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright © Ajape 2019</p>
  </div>
  <!-- /.container -->
</footer>



</html>

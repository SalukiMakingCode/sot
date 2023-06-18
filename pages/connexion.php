<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Inscription</title>
  <?php
  include '../ui-kit/head.php';
  ?>
</head>

<body>
<?php
include '../ui-kit/menu.php';
    $inscription=1;
?>
  <div class="connexion">
    <div class="container-fluid text-center mx-auto">

      <div class="d-flex justify-content-center">

        <div class="svg-decoration col-lg-1 col-xl-3">
          <img src="../img/woman-with-laptop.svg" alt="Une femme sur son pc" />
        </div>

        <div id="containerContact" class="register col-12 col-md-12 col-lg-9 col-xl-6  <?php if ($inscription==0) echo "hidden"; else echo "active"; ?>">
            <br/>
          <h1>Informations ou inscription ?</h1>
          <p>Créer votre dossier pour commencer le parcours d'information et de sélection.<br/><br/>
             Nous vous contacterons en retour.<br/>
<!--             Développez des compétences pour aujourd'hui, demain et l'avenir. Une éducation pour préparer votre carrière.-->
          </p>

          <form>
            <div class="form-group input-group-lg d-flex flex-row justify-content-between">
              <input type="text" class="form-control rounded" id="name" aria-describedby="name" placeholder="Nom">
              <input type="text" class="form-control rounded" id="firstname" aria-describedby="firstname"
                placeholder="Prénom">
            </div>
            <div class="form-group input-group-lg">
              <input type="email" class="form-control rounded" id="mail" aria-describedby="Adresse mail"
                placeholder="Adresse mail">
            </div>
              <div class="form-group input-group-lg">
                  <input type="text" class="form-control rounded" id="ville" aria-describedby="Ville"
                         placeholder="Ville">
              </div>

            <button type="submit" class="btn col-md-12 btn-lg" id="sendInscription">S'inscrire</button type="submit">
          </form>
        </div>

        <div class="svg-decoration col-lg-0 col-xl-3">
          <img src="../img/man-reads-paper.svg" alt="Un homme qui lit pour s'instruire" style="width:80%;" />
        </div>

      </div>
    </div>
  </div>

  <?php
  include '../ui-kit/footer.php';
  ?>

  <script src="../js/swipe.js"></script>
</body>

</html>
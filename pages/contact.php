<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Contact</title>
    <?php
    include '../ui-kit/head.php';
    ?>
</head>

<body>
<?php
include '../ui-kit/menu.php';
?>
    <div class="contact">
        <div class="container-fluid mx-auto">
            <div class="row col-xl-12 col-lg-12 col-md-12 col-12">

                <div class="left-form col-xl-6 col-lg-6 col-md-12 col-12">
                    <img class="col" src="../img/contact-smartphone.svg" alt="Un smartphone">
                </div>

                <div class="right-form col-xl-6 col-lg-6 col-md-12 col-12" id="containerContact">
                    <h2>Besoin d'un renseignement</h2>
                    <p>Vous pouvez nous contacter via <a href="mailto:info@hommedemetier.be">info@schooloftalents.org</a>
                        ou en
                        remplissant le formulaire ci-dessous Dans le
                        but de réaliser une bonne prise de contact avec vous, tous les champs de ce formulaire sont
                        obligatoires.</p>

                    <form>
                        <div class="form-group mx-auto row">
                            <input type="text" class="form-control rounded-pill col-sm-12 col-md-6" id="name"
                                aria-describedby="name" placeholder="Nom">
                            <input type="text" class="form-control rounded-pill col-sm-12 col-md-5 offset-md-1"
                                id="firstName" aria-describedby="firstName" placeholder="Prénom">
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control rounded-pill" id="email" placeholder="Adresse mail">
                        </div>

                        <div class="form-group">
                            <input type="tel" class="form-control rounded-pill" id="phoneNumber"
                                placeholder="Numéro de téléphone">
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" id="message" rows="10" placeholder="Message ..."></textarea>
                        </div>

                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input checkbox-confirm" id="rgpd">
                            <label class="form-check-label checkbox-confirm-label" for="rgpd">En soumettant ce
                                formulaire,
                                j'accepte que les
                                informations saisies soient exploitées dans le cadre de la demande de contact et de la
                                relation
                                commerciale qui en découle.</label>
                        </div>

                        <button id="sendContact" type="submit" class="btn btn-primary">Envoyer <i
                                class="fas fa-arrow-circle-right"></i></button>
                    </form>
                </div>

            </div>
        </div>
    </div>
<?php
include '../ui-kit/footer.php';
?>

</body>

</html>
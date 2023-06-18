<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Développeur Web Starter</title>
    <link rel="stylesheet" href="../css/training-info.css">
    <?php
    include '../ui-kit/head.php';
    ?>
    <style>
    #legalNoticeBackground{
        @media (min-width: 0) {
            background: url('http://www.schooloftalents.org/img/legalNoticeSmall.jpg');
            background-size: 100%;
            background-repeat: no-repeat;
        }
    @media (min-width: 1000px) {
        background-image: url('http://www.schooloftalents.org/img/legalNotice.jpg');
        background-size: "cover";
    }

    }

    #legalNoticeTitle {
    @media (min-width: 0) {
        color:"black";
    }
    @media (min-width: 1000px) {
        color:"white";
        }
    }
    </style>
</head>

<body>
<?php
include '../ui-kit/menu.php';
?>
<div class="training-info">
    <div class="presentation" id="legalNoticeBackground">
        <div class="detail">
            <section id="program">
                <div class="container-fluid mx-auto text-center col-12 col-md-10">
                    <h2 class="text-center" id="legalNoticeTitle">Mentions Légales</h2>

                    <div class="program-description col-12 col-md-10 offset-md-2 col-lg-8 offset-lg-2" style="background-color: #0F1525DD; color:white;">

                        <div class="waiting-training">
                            <h3>Mentions Légales</h3>
                            <p>
                                1. Informations générales : Ce site est exploité par School of Talents (ci-après dénommé "nous" ou "notre"). En utilisant ce site, vous acceptez les présentes mentions légales dans leur intégralité. Si vous n'acceptez pas ces conditions, veuillez ne pas utiliser ce site.
                            </p>
                        </div>

                        <div class="waiting-training">
                            <h3>Coordonnées</h3>
                            <p>
                                Nom de l'entreprise : School of Talents<br>
                                Siège social : Rue Alfred Tenret 38<br>
                                Numéro de téléphone : 0485160996<br>
                                Adresse e-mail : info@schooloftalents.org<br>
                                Numéro d'enregistrement : BE0769344711
                            </p>
                        </div>

                        <div class="waiting-training">
                            <h3>Propriété intellectuelle</h3>
                            <p>
                                Tous les contenus présents sur ce site, tels que les textes, les images, les logos, les vidéos, les graphiques et les éléments multimédias, sont protégés par les lois sur la propriété intellectuelle. Toute reproduction, distribution, modification ou utilisation non autorisée de ces contenus est strictement interdite sans notre consentement écrit préalable.
                            </p>
                        </div>

                        <div class="waiting-training">
                            <h3>Responsabilité</h3>
                            <p>
                                Nous nous efforçons de fournir des informations précises et à jour sur ce site, mais nous ne pouvons pas garantir l'exactitude, l'exhaustivité ou la pertinence des informations fournies. En conséquence, nous déclinons toute responsabilité pour les éventuelles erreurs ou omissions dans les informations présentes sur ce site.
                            </p>
                        </div>

                        <div class="waiting-training">
                            <h3>Liens externes</h3>
                            <p>
                                Ce site peut contenir des liens vers des sites externes qui ne sont pas sous notre contrôle. Nous déclinons toute responsabilité quant au contenu ou aux pratiques de confidentialité de ces sites externes. L'accès à ces liens se fait à vos propres risques.
                            </p>
                        </div>

                        <div class="waiting-training">
                            <h3>Protection des données</h3>
                            <p>
                                Nous attachons une grande importance à la protection de vos données personnelles. Veuillez consulter notre politique de confidentialité pour obtenir des informations détaillées sur la collecte, l'utilisation et la protection de vos données personnelles.
                            </p>
                        </div>

                        <div class="waiting-training">
                            <h3>Droit applicable et juridiction compétente</h3>
                            <p>
                                Les présentes mentions légales sont régies par les lois en vigueur dans le pays où School of Talents est établi. En cas de litige, les tribunaux compétents du lieu où School of Talents est établi auront la juridiction exclusive.
                            </p>
                        </div>

                        <div class="waiting-training">
                            <h3>Modifications des mentions légales</h3>
                            <p>
                                Nous nous réservons le droit de modifier ces mentions légales à tout moment. Les modifications seront publiées sur ce site et seront applicables dès leur publication. Il est de votre responsabilité de consulter régulièrement les mentions légales pour vous tenir informé des éventuelles mises à jour.
                            </p>
                        </div>

                        <div class="waiting-training">
                            <h3>Contact</h3>
                            <p>
                                En utilisant ce site, vous acceptez d'être lié par ces mentions légales. Si vous avez des questions ou des préoccupations concernant les présentes mentions légales, veuillez nous contacter aux coordonnées indiquées dans nos mentions légales.
                            </p>
                        </div>

                        <!--        <button class="btn btn-primary">-->
                        <!--            <a href="http://www.schooloftalents.org/programme/webdev-starter.odt" style="color:white;text-decoration:none;">Je télécharge le programme</a>-->
                        <!--        </button>-->
                    </div>
            </section>
        </div></div></div>

<?php
include '../ui-kit/footer.php';
?>

</body>

</html>
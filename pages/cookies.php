<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Développeur Web Starter</title>
    <link rel="stylesheet" href="../css/training-info.css">
    <?php
    include '../ui-kit/head.php';
    ?>
    <style>
        #cookieBackground{
        @media (min-width: 0) {
            background: url('http://www.schooloftalents.org/img/cookieSmall.jpg');
            background-size: 100%;
            background-repeat: no-repeat;
        }
        @media (min-width: 1000px) {
            background-image: url('http://www.schooloftalents.org/img/cookies.jpg');
            background-size: "cover";
        }
        }

        #cookieTitleColor{
        @media (min-width: 0) {
            color:#000000;
        }
        @media (min-width: 1000px) {
            color:#ffffff;
        }
        }

    </style>
</head>

<body>
<?php
include '../ui-kit/menu.php';
?>
<div class="training-info">
    <div class="presentation" id="cookieBackground">
        <div class="detail">
<section id="program">
    <div class="container-fluid mx-auto text-center col-12 col-md-10">
        <h2 class="text-center" id="cookieTitleColor">Les cookies</h2>

        <div class="program-description col-12 col-md-10 offset-md-2 col-lg-8 offset-lg-2" style="background-color: #0F1525DD;">

            <div class="waiting-training" style="color:white;">
                <h3>Politique de gestion des cookies de School of Talents</h3>
                <p>
                    School of Talents utilise des cookies sur son site web afin d'améliorer votre expérience utilisateur et
                    de collecter des informations pour analyser le trafic et la performance du site. Cette politique de
                    gestion des cookies vise à vous informer sur l'utilisation des cookies et à vous donner le contrôle
                    sur leur utilisation.
                </p>
            </div>
            <div class="waiting-training" style="color:white;">
                <h3>1. Qu'est-ce qu'un cookie ?</h3>
                <p>
                    Un cookie est un petit fichier texte qui est stocké sur votre ordinateur, votre smartphone ou tout autre appareil lorsque vous visitez un site web. Il permet au site de se souvenir de vos actions et préférences (telles que la langue, la taille de la police, etc.) pendant un certain temps. Les cookies sont largement utilisés pour faciliter la navigation sur les sites web et pour collecter des informations sur les utilisateurs.
                </p>
            </div>
            <div class="waiting-training" style="color:white;">
                <h3>2. Types de cookies utilisés</h3>
                <p>
                    Nous utilisons différents types de cookies sur notre site web :
                </p>
                <ul>
                    <li>Cookies essentiels : Ces cookies sont nécessaires au bon fonctionnement du site et permettent notamment l'accès aux fonctionnalités de base, telles que la navigation entre les pages et l'accès aux zones sécurisées du site.</li>
                    <li>Cookies de performance : Ces cookies collectent des informations sur la manière dont les visiteurs utilisent notre site web, par exemple les pages les plus visitées ou les éventuels messages d'erreur. Ces informations nous aident à améliorer le fonctionnement du site et à fournir une meilleure expérience utilisateur.</li>
                    <li>Cookies de fonctionnalité : Ces cookies permettent au site de se souvenir de vos choix et préférences, tels que la langue ou la région, afin de personnaliser votre expérience sur le site.</li>
                    <li>Cookies de publicité : Nous pouvons utiliser des cookies de tiers pour diffuser des publicités ciblées en fonction de vos intérêts et de votre comportement de navigation. Ces cookies collectent des informations sur vos activités en ligne, telles que les sites visités, les liens suivis et les publicités consultées.</li>
                </ul>
            </div>
            <div class="waiting-training" style="color:white;">
                <h3>3. Contrôle des cookies</h3>
                <p>
                    Vous avez le contrôle sur l'utilisation des cookies. Lors de votre première visite sur notre site web, nous vous avons informé de l'utilisation des cookies et nous avons obtenu votre consentement, sauf pour les cookies essentiels qui sont nécessaires au fonctionnement du site. Vous pouvez à tout moment modifier vos préférences en matière de cookies en accédant aux paramètres de votre navigateur. Vous pouvez choisir de bloquer certains types de cookies ou de supprimer les cookies existants sur votre appareil. Veuillez noter que la désactivation des cookies peut affecter certaines fonctionnalités du site.
                </p>
            </div>
            <div class="waiting-training" style="color:white;">
                <h3>4. Cookies tiers</h3>
                <p>
                    Nous pouvons utiliser des cookies de tiers sur notre site web, tels que ceux provenant des services d'analyse ou de réseaux sociaux. Ces cookies sont soumis aux politiques de confidentialitéet de gestion des cookies de ces tiers. Nous vous encourageons à consulter ces politiques pour obtenir des informations sur la manière dont ces tiers utilisent les cookies.
                </p>
                <h3>5. Modifications de la politique de gestion des cookies</h3>
                <p>
                    Nous nous réservons le droit de modifier cette politique de gestion des cookies à tout moment. Les modifications seront publiées sur notre site web. Nous vous recommandons de consulter régulièrement cette politique pour rester informé des éventuelles mises à jour.
                </p>
                <p>
                    Si vous avez des questions ou des préoccupations concernant notre gestion des cookies, veuillez nous contacter aux coordonnées indiquées dans nos mentions légales.
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
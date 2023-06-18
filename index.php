<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>School of talents</title>
    <?php
    include './ui-kit/head.php';
    ?>
</head>

<body>
<?php
include './ui-kit/menu.php';
?>
    <header>

        <div class="container-fluid col-12 col-lg-12 col-xl-8 mx-auto">

            <h1 class="col-12 text-white">School of Talents</h1>
            <p class="col-12 text-white">Le site de formation digitale</p>
            <button class="btn btn-light-blue col-12 col-md-5 col-lg-5 col-xl-3 rounded-pill" onclick="location.href='<?php echo $server; ?>pages/connexion.php?inscription=go';">En savoir +</button>

            <div class="search_field_and_training col-12 text-white py-2 px-4 mx-auto">
                <div class="row">
                    <span class="col-12 col-lg-2 col-xl-2 d-flex align-self-center justify-content-center mx-auto my-3">
                        Recherche
                    </span>

                    <div class="dropdown col-12 col-lg-4 col-xl-4 d-flex justify-content-center mx-auto my-3">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Domaines <br /> Sélectionne ton domaine
                        </button>
                        <div class="dropdown-menu text-center bg-info my-4 col-md-12"
                            aria-labelledby="dropdownMenuButton">
                            <span class="dropdown-item" id="selectDomainSeo" style="cursor:pointer;">SEO / Digital Marketing</span>
                            <span class="dropdown-item" id="selectDomainWebdev" style="cursor:pointer;">Développeur Web</span>
                        </div>
                    </div>

                    <div class="dropdown col-12 col-lg-4 col-xl-4 d-flex justify-content-center mx-auto my-3">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Formations <br /> Sélectionne ta formation
                        </button>
                        <div class="dropdown-menu text-center bg-info my-4 col-md-12"
                            aria-labelledby="dropdownMenuButton" id="dropdownTraining">
                            <span class="dropdown-item-text text-white mt-3 font-weight-bold">Sélectionne d'abord un domaine de formation</span>
                        </div>
                    </div>

                    <button class="btn btn-light half-pill-color col-10 col-md-10 col-lg-2 col-xl-2 mx-auto my-3" id="selectTraining"> C'est
                        parti <i class="fas fa-arrow-circle-right"></i></button>
                </div>
            </div>

        </div>
    </header>

    <section id="success">
        <div class="container-fluid col-12 col-lg-8  col-xl-8 mx-auto">
            <h2 class="text-center">School of Talents</h2>
            <p class="text-center subtitle">Une réussite garantie !</p>
            <div class="row">


                <div class="card col-12 col-md-6 col-lg-6 col-xl-4">
                    <img src="img/sports-and-competition.png" class="card-img-top bg-info" alt="Diplôme à la clé">
                    <div class="card-body">
                        <h5 class="card-title text-center font-weight-bold">Formation Certifiante</h5>
                        <p class="card-text text-center">Suite à votre formation et après réussite de celle-ci,
                        vous recevrez un certificat de réussite et une attestation de suivi des cours pratique et
                        théorique.</p>
                    </div>
                </div>

                <div class="card col-12 col-md-6 col-lg-6 col-xl-4">
                    <img src="img/growth.png" class="card-img-top bg-info" alt="Difficulté progressive">
                    <div class="card-body">
                        <h5 class="card-title text-center font-weight-bold">Formation par pallier</h5>
                        <p class="card-text text-center">Nos formations sont organisées par modules successif de 3 à 9 mois
                        vous permettant de les enchainer ou non selon vos désirs / besoins et selon votre évolution.</p>
                    </div>
                </div>

                <div class="card col-12 col-md-6 col-lg-6 col-xl-4">
                    <img src="img/126417.png" class="card-img-top bg-info" alt="Apprentissage rapide">
                    <div class="card-body">
                        <h5 class="card-title text-center font-weight-bold">Apprentissage rapide</h5>
                        <p class="card-text text-center">Vous serez plonger directement dans un apprentisage pratique
                        vous permettant de mettre en oeuvre des projets concret et réel. Un apprentisage orienté sur
                        la pédagogie active qui vous fera avancé rapidement vers vos objectifs de carrière.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!--<section id="catalog_training">
        <div class="container-fluid col-12 col-lg-8 col-xl-8 mx-auto">
            <h3 class="text-center">Catalogue de formations</h3>

            <div class="filter d-flex flex-wrap justify-content-around">
                <button class="btn btn-outline-dev rounded-pill" id="carrouselDevSelect">Dev</button>
            </div>

            <div class="training-carousel owl-carousel owl-theme" id="carrouselTraining">

                <div class="card commercial carrouselDev">
                    <div class="card-body">
                        <h4 class="card-title">Dev Web Starter</h4>
                        <div class="square square-commercial"></div>
                        <p class="card-text"> 3 mois</p>
                    </div>
                </div>

                <div class="card graphism carrouselDev">
                    <div class="card-body">
                        <h4 class="card-title">Dev Web Intermédiaire</h4>
                        <div class="square square-graphism"></div>
                        <p class="card-text"> 6 mois</p>
                    </div>
                </div>

                <div class="card hr carrouselDev">
                    <div class="card-body">
                        <h4 class="card-title">Dev Web Full Stack</h4>
                        <div class="square square-hr"></div>
                        <p class="card-text"> 6 mois</p>
                    </div>
                </div>

                <div class="card dev carrouselDev">
                    <div class="card-body">
                        <h4 class="card-title">Dev Web Extension Entrepreneur</h4>
                        <div class="square square-dev"></div>
                        <p class="card-text"> 9 mois</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section id="catalog_training">
        <div class="container-fluid col-12 col-lg-8 col-xl-8 mx-auto">

            <div class="filter d-flex flex-wrap justify-content-around">
                <button class="btn btn-outline-seo rounded-pill" id="carrouselSeoSelect">SEO / Digital Marketing</button>
            </div>

            <div class="training-carousel owl-carousel owl-theme" id="carrouselTraining">

                <div class="card commercial carrouselSeo">
                    <div class="card-body">
                        <h4 class="card-title">SEO starter</h4>
                        <div class="square square-commercial"></div>
                        <p class="card-text"> 3 mois</p>
                    </div>
                </div>

                <div class="card graphism carrouselSeo">
                    <div class="card-body">
                        <h4 class="card-title">SEO / Digital Marketing intermédiaire</h4>
                        <div class="square square-graphism"></div>
                        <p class="card-text"> 6 mois</p>
                    </div>
                </div>

                <div class="card commercial carrouselSeo">
                    <div class="card-body">
                        <h4 class="card-title">SEO / Digital Marketing expert</h4>
                        <div class="square square-commercial"></div>
                        <p class="card-text"> 3 mois</p>
                    </div>
                </div>

                <div class="card hr carrouselSeo">
                    <div class="card-body">
                        <h4 class="card-title">SEO / Digital Marketing Extension Entrepreneur</h4>
                        <div class="square square-hr"></div>
                        <p class="card-text"> 9 mois</p>
                    </div>
                </div>

            </div>

        </div>
    </section> -->

    <section id="testimony">
        <div class="container-fluid col-12 col-lg-8 col-xl-8 mx-auto">
            <h3 class="text-center">Découvrez nos témoignages</h3>
            <p class="text-center">Qui de mieux placé que nos stagiaires, pour parler de nous ?</p>
        </div>

        <div class="testimony">
            <div class="container-fluid col-12 col-lg-8 col-xl-8 mx-auto">
                <div class="container-fluid justify-content-center col-12 col-md-10">
                    <div class="quote text-center text-white col-12 mx-auto">
                        <div class="review">
                            " Ma première formation en ligne, je l’imaginais comme beaucoup seule devant mon ordinateur.
                            Au final, j’ai découvert qu’il y avait un groupe. J’ai vraiment eu l’impression d’être dans
                            une
                            classe et d’être avec les gens. Et non pas d’être tous complètement disséminés sur le
                            territoire. "
                        </div>
                        <p class="name-testimony">Justine</p>
                        <p class="city-testimony">Angers</p>
                        <button class="btn col-12 col-md-5 col-lg-4 rounded-pill" id="goToTestimonies">En savoir +</button>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="joinUs">
        <div class="container-fluid col-12 mx-auto">
            <h2 class="text-center">Rejoins la School of Talents !</h2>

            <div class="group-btn text-center col-12">
                <button class="btn btn-register p-3 col-12 col-lg-4 col-xl-4" onclick="location.href='<?php echo $server; ?>pages/connexion.php?inscription=go';">Je m'inscris</button>
                <!--<button class="btn btn-outline-login p-3 col-12 col-lg-5 col-xl-4" onclick="location.href='<?php echo $server; ?>pages/connexion.php';">Se connecter</button>-->
            </div>

        </div>
    </section>

<?php
include './ui-kit/footer.php';
?>

    <script src="js/owl.carousel.js"></script>
    <script src="js/main.js"></script>
    <script src="js/index.js"></script>
</body>

</html>
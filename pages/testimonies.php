<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Témoignages</title>
    <?php
    include '../ui-kit/head.php';
    ?>
</head>

<body>
<?php
include '../ui-kit/menu.php';
?>

    <div id="carouselTestimonies" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselTestimonies" data-slide-to="0" class="active"></li>
            <li data-target="#carouselTestimonies" data-slide-to="1"></li>
            <li data-target="#carouselTestimonies" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

            <div class="carousel-item active">
                <div class="card col-12">
                    <img src="../img/testimony-slider.png" class="card-img" alt="Témoignage de Justine">
                    <div class="card-img-overlay col-12 col-md-10 col-lg-8 col-xl-7 mx-auto">
                        <p class="card-text">" Ma première formation en ligne, je l’imaginais comme beaucoup seule
                            devant mon ordinateur. Au
                            final, j’ai découvert qu’il y avait un groupe. J’ai vraiment eu l’impression d’être dans une
                            classe et d’être avec les gens. Et non pas d’être tous complètement disséminés sur le
                            territoire. "</p>
                    </div>
                    <div class="carousel-caption d-flex flex-column align-items-end">
                        <p class="testimony-name">Justine</p>
                        <p class="testimony-city">Angers</p>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="card col-12">
                    <img src="../img/testimony-slider.png" class="card-img" alt="Témoignage de Maxime">
                    <div class="card-img-overlay col-12 col-md-10 col-lg-8 col-xl-7 mx-auto">
                        <p class="card-text">" Grâce à cette formation en développement web, j'ai acquis les compétences
                        nécessaires pour créer des sites web professionnels. Les cours étaient bien structurés, les exemples
                         concrets et les exercices pratiques m'ont permis de consolider mes connaissances... "</p>
                    </div>
                    <div class="carousel-caption d-flex flex-column align-items-end">
                        <p class="testimony-name">Maxime</p>
                        <p class="testimony-city">Paris</p>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="card col-12">
                    <img src="../img/testimony-slider.png" class="card-img" alt="Témoignage de Emma">
                    <div class="card-img-overlay col-12 col-md-10 col-lg-8 col-xl-7 mx-auto">
                        <p class="card-text">"La formation en digital marketing a révolutionné ma façon
                        d'utiliser les outils en ligne pour promouvoir une entreprise. J'ai découvert les secrets du
                        référencement, des médias sociaux et du marketing digital. Les exercices
                        pratiques m'ont permis de mettre en pratique mes connaissances dans des
                        situations réelles."</p>
                    </div>
                    <div class="carousel-caption d-flex flex-column align-items-end">
                        <p class="testimony-name">Emma</p>
                        <p class="testimony-city">Lyon</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="testimonies">
        <div class="container-fluid col-12 col-md-10 col-lg-10 mx-auto">

            <div aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Témoignages</li>
                </ol>
            </div>
<?php
//             <div class="search-testimony">
//                 <h1 class="text-center">Vous recherchez un témoignages ?</h1>
//                 <div class="filter d-flex flex-wrap justify-content-around">
//                     <button class="btn btn-outline-seo rounded-pill">SEO / Marketing Digital</button>
//                     <button class="btn btn-outline-dev rounded-pill">Développeur Web</button>
//                 </div>
//             </div>
//
//             <div class="all-testimonies">
//                 <h2 class="text-center">Tous les témoignages</h2>
//
//                 <div class="row">
//
//                     <div class="card col-12 col-md-6 col-lg-4 hr">
//                         <div class="card-img-and-badge">
//                             <img src="../img/Rectangle366.png" class="card-img-top" alt="Rencontre avec Jean D">
//                             <span class="bagde badge-pill bagde-color">Resources humaines</span>
//                         </div>
//                         <div class="card-body">
//                             <h5 class="card-title">Rencontre avec Jean D</h5>
//                             <p class="card-text">Temporibus autem quibusdam et aut officiis debitis aut rerum
//                                 necessitatibus saepe eveniet</p>
//                             <div class="more">
//                                 <div class="date-published">
//                                     <i class="far fa-clock"></i>
//                                     <p>12 juin</p>
//                                 </div>
//                                 <i class="fas fa-arrow-circle-right"></i>
//                             </div>
//                         </div>
//                     </div>
//
//                     <div class="card col-12 col-md-6 col-lg-4 graphism">
//                         <div class="card-img-and-badge">
//                             <img src="../img/Rectangle365.png" class="card-img-top" alt="Interview d'Andréa Martins">
//                             <span class="bagde badge-pill bagde-color">Graphisme</span>
//                         </div>
//                         <div class="card-body">
//                             <h5 class="card-title">Interview d’Andréa Martins de Melo – Élève en formation graphiste
//                             </h5>
//                             <p class="card-text">Temporibus autem quibusdam et aut officiis debitis aut rerum
//                                 necessitatibus saepe eveniet</p>
//                             <div class="more-without-date">
//                                 <i class="fas fa-arrow-circle-right"></i>
//                             </div>
//                         </div>
//                     </div>
//
//                     <div class="card col-12 col-md-6 col-lg-4 seo">
//                         <div class="card-img-and-badge">
//                             <img src="../img/Rectangle364.png" class="card-img-top" alt="Rencontre avec Jean D">
//                             <span class="bagde badge-pill bagde-color">Seo</span>
//                         </div>
//                         <div class="card-body">
//                             <h5 class="card-title">Rencontre avec Jean D</h5>
//                             <p class="card-text">Temporibus autem quibusdam et aut officiis debitis aut rerum
//                                 necessitatibus saepe eveniet</p>
//                             <div class="more">
//                                 <div class="date-published">
//                                     <i class="far fa-clock"></i>
//                                     <p>3 mai 2019</p>
//                                 </div>
//                                 <i class="fas fa-arrow-circle-right"></i>
//                             </div>
//                         </div>
//                     </div>
//
//                     <div class="card col-12 col-md-6 col-lg-4 hr">
//                         <div class="card-img-and-badge">
//                             <img src="../img/Rectangle366.png" class="card-img-top" alt="Rencontre avec Jean D">
//                             <span class="bagde badge-pill bagde-color">Resources humaines</span>
//                         </div>
//                         <div class="card-body">
//                             <h5 class="card-title">Rencontre avec Jean D</h5>
//                             <p class="card-text">Temporibus autem quibusdam et aut officiis debitis aut rerum
//                                 necessitatibus saepe eveniet</p>
//                             <div class="more">
//                                 <div class="date-published">
//                                     <i class="far fa-clock"></i>
//                                     <p>12 juin</p>
//                                 </div>
//                                 <i class="fas fa-arrow-circle-right"></i>
//                             </div>
//                         </div>
//                     </div>
//
//                     <div class="card col-12 col-md-6 col-lg-4 dev">
//                         <div class="card-img-and-badge">
//                             <img src="../img/Rectangle365.png" class="card-img-top" alt="Interview d'Andréa Martins">
//                             <span class="bagde badge-pill bagde-color">Développeur Web</span>
//                         </div>
//                         <div class="card-body">
//                             <h5 class="card-title">Interview d’Andréa Martins de Melo – Élève en formation graphiste
//                             </h5>
//                             <p class="card-text">Temporibus autem quibusdam et aut officiis debitis aut rerum
//                                 necessitatibus saepe eveniet</p>
//                             <div class="more-without-date">
//                                 <i class="fas fa-arrow-circle-right"></i>
//                             </div>
//                         </div>
//                     </div>
//
//                     <div class="card col-12 col-md-6 col-lg-4 seo">
//                         <div class="card-img-and-badge">
//                             <img src="../img/Rectangle364.png" class="card-img-top" alt="Rencontre avec Jean D">
//                             <span class="bagde badge-pill bagde-color">Marketing Digital</span>
//                         </div>
//                         <div class="card-body">
//                             <h5 class="card-title">Rencontre avec Jean D</h5>
//                             <p class="card-text">Temporibus autem quibusdam et aut officiis debitis aut rerum
//                                 necessitatibus saepe eveniet</p>
//                             <div class="more">
//                                 <div class="date-published">
//                                     <i class="far fa-clock"></i>
//                                     <p>3 mai 2019</p>
//                                 </div>
//                                 <i class="fas fa-arrow-circle-right"></i>
//                             </div>
//                         </div>
//                     </div>
//
//                 </div>
//                 <hr />
//
//                 <nav aria-label="Page navigation example">
//                     <ul class="pagination">
//                         <li class="page-item hidden">
//                             <a class="page-link" href="#"><i class="fas fa-chevron-left"></i><i
//                                     class="fas fa-chevron-left"></i></a>
//                         </li>
//                         <li class="page-item disabled"><a class="page-link" href="#">1</a></li>
//                         <li class="page-item"><a class="page-link" href="#">2</a></li>
//                         <li class="page-item">
//                             <a class="page-link" href="#"><i class="fas fa-chevron-right"></i><i
//                                     class="fas fa-chevron-right"></i></a>
//                         </li>
//                     </ul>
//                 </nav>
//
//             </div>
?>
            <div class="review-student col-12 col-lg-12 col-xl-12 mx-auto">
                <h2 class="text-center">L'avis de nos élèves : School of Talent</h2>

                <div class="global-rating col-12 col-lg-10 col-xl-6 mx-auto d-flex justify-content-center">
                    <div class="rating col-12 col-lg-12">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="opinion col-12 col-lg-4 col-xl-6">
                        <p><span>4.5/5</span> sur <b>201</b> avis</p>
                    </div>
                </div>

                <div class="comments">
                    <div class="row">
                        <div class="review col-12 col-md-6 col-lg-6 col-xl-3 border-dashed-first">
                            <p>Le personnel est agréable et à l'écoute de nos demandes. Encore toute ma gratitude.</p>
                            <div class="name-and-rating">
                                <h5>Jean</h5>
                                <div class="rating-review">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="review col-12 col-md-6 col-lg-6 col-xl-3 border-dashed-second">
                            <p>Pour l'instant le bilan est très positif : Les cours sont complets, les exercices utiles
                                et les devoirs sont corrigés avec des commentaires complets</p>
                            <div class="name-and-rating">
                                <h5>Elisabeth</h5>
                                <div class="rating-review">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                        <div class="review col-12 col-md-6 col-lg-6 col-xl-3 border-dashed-third">
                            <p>Organisme sérieux, formation et suivi des élèves de qualité....</p>
                            <div class="name-and-rating">
                                <h5>Jennifer</h5>
                                <div class="rating-review">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="review col-12 col-md-6 col-lg-6 col-xl-3 ">
                            <p>il est très clair, facile d'appréhension...</p>
                            <div class="name-and-rating">
                                <h5>Alexia</h5>
                                <div class="rating-review">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="joinUs col-12 col-lg-12 col-xl-7 mx-auto text-center">
                <h2 class="text-center">Ils nous ont fait confiance...<br><br>Pourquoi pas vous ?</h2>
                <div class="btn-group mx-auto col-12 text-center">
                    <button class="btn btn-register col-12 col-lg-12 rounded-pill" onclick="location.href='connexion.php?inscription=go';">Explore ton talent</button>
                </div>
            </div>

        </div>
    </div>

    <?php
    include '../ui-kit/footer.php';
    ?>

</body>

</html>
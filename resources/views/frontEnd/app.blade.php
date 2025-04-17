@extends('frontEnd.layout')
@section('title')
    BEM Energy
@endsection
@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-0 wow fadeIn" data-wow-delay="0.1s" >
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/a (1).jpg'>">
                <img class="img-fluid img-fluid_" src="img/a (1).jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 animated slideInDown text-light">Solutions Énergétiques sur Mesure</h1>
                                <p class="fs-5 fw-medium mb-4 pb-3 text-white">BEM Energy vous propose des installations électriques, solaires et industrielles de haute qualité, adaptées à vos besoins.</p>
                                <a href="service.html" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Découvrez nos services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/a (2).jpg'>">
                <img class="img-fluid img-fluid_" src="img/a (2).jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 animated slideInDown text-light">Énergie Solaire Photovoltaïque</h1>
                                <p class="fs-5 fw-medium mb-4 pb-3 text-white">Optez pour une énergie propre et économique avec nos solutions solaires photovoltaïques et thermiques.</p>
                                <a href="produit.html" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/a (3).jpg'>">
                <img class="img-fluid img-fluid_" src="img/a (3).jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 animated slideInDown text-light">Maintenance Industrielle Expertisée</h1>
                                <p class="fs-5 fw-medium mb-4 pb-3 text-white">Notre équipe assure la maintenance et la réparation de vos équipements techniques avec précision et rapidité.</p>
                                <a href="service.html" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Contactez-nous</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 justify-content-between">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-users text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">150</h1>
                    </div>
                    <h5 class="mb-3">Clients Satisfaits</h5>
                    <span>Plus de 150 clients nous font confiance à travers le Maroc.</span>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">200</h1>
                    </div>
                    <h5 class="mb-3">Projets Réalisés</h5>
                    <span>Plus de 200 projets électriques, solaires et industriels achevés avec succès.</span>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-users-cog text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">10</h1>
                    </div>
                    <h5 class="mb-3">Années d'Expérience</h5>
                    <span>10 ans d'expertise dans les installations électriques et solaires.</span>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">50</h1>
                    </div>
                    <h5 class="mb-3">Équipe Qualifiée</h5>
                    <span>Une équipe de 50 professionnels dédiés à votre satisfaction.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Start -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-4 text-primary">Nos Services</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="img/ (16).jpg" alt="Installation Électrique">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-solar-panel fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Installation Électrique</h4>
                            <p>Conception et installation de réseaux électriques pour les particuliers et les professionnels.</p>

                            <a class="small fw-medium text-primary" href="#" data-bs-toggle="modal" data-bs-target="#myModal" 
                               data-bs-image="img/ (16).jpg" data-bs-title="Service 01" data-bs-description="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi, assumenda. Necessitatibus repellat recusandae dolore ea doloribus, voluptas eius sed incidunt nesciunt similique quis modi voluptatem quaerat! Praesentium laudantium quia atque?">
                                Lire plus <i class="fa fa-arrow-right ms-2"></i>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="img/ (10).jpg" alt="Énergie Solaire">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-lightbulb fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Énergie Solaire</h4>
                            <p>Solutions photovoltaïques et thermiques pour une énergie propre et économique.</p>
                            <a class="small fw-medium text-primary" href="#" data-bs-toggle="modal" data-bs-target="#myModal" 
                               data-bs-image="img/ (10).jpg" data-bs-title="Énergie Solaire" data-bs-description="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi, assumenda. Necessitatibus repellat recusandae dolore ea doloribus, voluptas eius sed incidunt nesciunt similique quis modi voluptatem quaerat! Praesentium laudantium quia atque?">
                                Lire plus <i class="fa fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="img/ (13).jpg" alt="Maintenance Industrielle">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-bolt fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Maintenance Industrielle</h4>
                            <p>Maintenance préventive et corrective pour vos équipements techniques.</p>
                            <a class="small fw-medium text-primary" href="#" data-bs-toggle="modal" data-bs-target="#myModal" 
                               data-bs-image="img/ (13).jpg" data-bs-title="Maintenance Industrielle" data-bs-description="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi, assumenda. Necessitatibus repellat recusandae dolore ea doloribus, voluptas eius sed incidunt nesciunt similique quis modi voluptatem quaerat! Praesentium laudantium quia atque?">
                                Lire plus <i class="fa fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="img/ (12).jpg" alt="Automatisation & Contrôle">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-leaf fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Automatisation & Contrôle</h4>
                            <p>Intégration de solutions intelligentes pour optimiser vos processus industriels et améliorer l'efficacité énergétique.</p>
                            <a class="small fw-medium text-primary" href="#" data-bs-toggle="modal" data-bs-target="#myModal" 
                               data-bs-image="img/ (12).jpg" data-bs-title="Maintenance Industrielle" data-bs-description="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi, assumenda. Necessitatibus repellat recusandae dolore ea doloribus, voluptas eius sed incidunt nesciunt similique quis modi voluptatem quaerat! Praesentium laudantium quia atque?">
                                Lire plus <i class="fa fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="img/ (13).jpg" alt="Éclairage & Domotique">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-leaf fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Éclairage & Domotique</h4>
                            <p>Mise en place de solutions d'éclairage LED et de gestion domotique pour un confort et une efficacité accrus.</p>
                            <a class="small fw-medium text-primary" href="#" data-bs-toggle="modal" data-bs-target="#myModal" 
                               data-bs-image="img/ (13).jpg" data-bs-title="Éclairage & Domotique" data-bs-description="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi, assumenda. Necessitatibus repellat recusandae dolore ea doloribus, voluptas eius sed incidunt nesciunt similique quis modi voluptatem quaerat! Praesentium laudantium quia atque?">
                                Lire plus <i class="fa fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="img/ (12).jpg" alt="Sécurité & Surveillance">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-leaf fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Sécurité & Surveillance</h4>
                            <p>Installation de systèmes de vidéosurveillance et de contrôle d'accès pour assurer la protection de vos locaux.</p>
                            <a class="small fw-medium text-primary" href="#" data-bs-toggle="modal" data-bs-target="#myModal" 
                               data-bs-image="img/ (12).jpg" data-bs-title="Sécurité & Surveillance" data-bs-description="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi, assumenda. Necessitatibus repellat recusandae dolore ea doloribus, voluptas eius sed incidunt nesciunt similique quis modi voluptatem quaerat! Praesentium laudantium quia atque?">
                                Lire plus <i class="fa fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-title">Popup Title</h5>
                        <button type="button" class="btn-close btn-primary" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img id="modal-image" class="img-fluid mb-3" src="" alt="">
                        <h5 id="modal-description-title"></h5>
                        <p id="modal-description"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- produit Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-4 text-primary">Nos Produits</h1>
            </div>
            <div class="row g-4">
                <!-- Product 01 -->
                <div class="col-md-3 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="produit-item rounded-3 rounded-end custom-rounded-top-right shadow-sm overflow-hidden position-relative" style="height: 400px;">
                        <img class="img-fluid product-image h-100" src="img/p (1).jpg" alt="Panneaux Solaires">
                       
                        <div class="position-absolute bottom-0 start-0 w-100 p-4 bg-light bg-opacity-50 text-white hover-content">
                            <h4 class="mb-3 hover-trigger">Panneaux Solaires</h4>
                            <div class="slide-content">
                                <p class="slide-in opacity_ text-black">Panneaux solaires haute performance pour une énergie durable.</p>
                                <button type="button" class="small btn btn-primary py-2 mt-2 me-2 slide-in">Commander</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="produit-item rounded-3 rounded-end custom-rounded-top-right shadow-sm overflow-hidden position-relative" style="height: 400px;">
                        <img class="img-fluid product-image h-100" src="img/p (1).jpg" alt="Onduleurs Solaires">
                       
                        <div class="position-absolute bottom-0 start-0 w-100 p-4 bg-light bg-opacity-50 text-white hover-content">
                            <h4 class="mb-3 hover-trigger">Onduleurs Solaires</h4>
                            <div class="slide-content">
                                <p class="slide-in opacity_ text-black">Onduleurs de haute qualité pour optimiser votre production d'énergie.</p>
                                <button type="button" class="small btn btn-primary py-2 mt-2 me-2 slide-in">Commander</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="produit-item rounded-3 rounded-end custom-rounded-top-right shadow-sm overflow-hidden position-relative" style="height: 400px;">
                        <img class="img-fluid product-image h-100" src="img/p (1).jpg" alt="Batteries Solaires">
                       
                        <div class="position-absolute bottom-0 start-0 w-100 p-4 bg-light bg-opacity-50 text-white hover-content">
                            <h4 class="mb-3 hover-trigger">Batteries Solaires</h4>
                            <div class="slide-content">
                                <p class="slide-in opacity_ text-black">Stockez votre énergie solaire avec nos batteries performantes.</p>
                                <button type="button" class="small btn btn-primary py-2 mt-2 me-2 slide-in">Commander</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-lg-3 wow fadeInUp vp-container" data-wow-delay="0.4s">
                    <a href="produit.html" class="produit-icon fw-bold">Voir plus</a>
                </div>
            </div>
        </div>
    </div>
    <!-- produit End -->



    


    <!-- Feature Start -->
    <div class="container-fluid overflow-hidden my-5 mb-0 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <h1 class="mb-4 text-primary">Pourquoi nous choisir ?</h1>
                        <p class="mb-4 pb-2">Nous mettons notre expertise au service de vos projets pour garantir des solutions fiables et adaptées à vos besoins."</p>
                        <div class="row g-4">
                            <div class="col-5">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle w-50">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-0">Engagement qualité</h5>
                                        <p>Des services réalisés avec rigueur et professionnalisme.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle w-50">
                                        <i class="fa fa-user-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-0">Expertise confirmée</h5>
                                        <p>Une équipe qualifiée et expérimentée à votre service.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle w-50">
                                        <i class="fa fa-money-bill text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-0">Optimisation des coûts</h5>
                                        <p>Des solutions performantes et économiques.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle w-50">
                                        <i class="fa fa-lock text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-0">Sécurité avant tout </h5>
                                        <p>Une approche axée sur la protection et la conformité.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100 border" src="img/ (11).jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->
     


    





    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-primary mb-4">Témoignages</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/c (1).jpg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>"BEM Energy a réalisé une installation solaire impeccable pour notre entreprise. Leur professionnalisme et leur expertise sont exceptionnels."</p>
                        <h5 class="mb-1">Ahmed El Amrani</h5>
                        <span class="fst-italic">Directeur d'entreprise</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/c (2).jpg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>"Nous avons fait appel à BEM Energy pour la maintenance de nos équipements industriels. Leur réactivité et leur savoir-faire sont impressionnants."</p>
                        <h5 class="mb-1">Fatima Zahra</h5>
                        <span class="fst-italic">Responsable d'usine</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/c (3).jpg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>"Leur équipe a su nous conseiller et installer un système électrique performant. Nous recommandons vivement BEM Energy."</p>
                        <h5 class="mb-1">Karim Benjelloun</h5>
                        <span class="fst-italic">Propriétaire de restaurant</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
@section('active')
<script>
    document.querySelectorAll('.nav-item')[0].classList.add('active');
</script>
@endsection
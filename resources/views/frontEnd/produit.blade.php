@extends('frontEnd.layout')
@section('title')
    BEM Energy-produits
@endsection
@section('content')
     <!-- Page Header Start -->
     <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Produits</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


        <!-- Produits Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h6 class="text-danger">Nos Produits</h6>
                    <h1 class="mb-4">Découvrez nos derniers produits en énergie solaire et renouvelable!</h1>
                </div>
                <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="col-12 text-center">
                        <ul class="list-inline mb-5" id="portfolio-flters">
                            <li class="mx-2 active" data-filter="*">All</li>
                            <li class="mx-2" data-filter=".first">Solar Panels</li>
                            <li class="mx-2" data-filter=".second">Wind Turbines</li>
                            <li class="mx-2" data-filter=".third">Hydropower Plants</li>
                        </ul>
                    </div>
                </div>
                <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
                    <div class="col-lg-4 col-md-6 portfolio-item first">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid" src="img/ (1).jpg" alt="">
                            <div class="portfolio-btn">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/ (1).jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="pt-3">
                            <p class="text-danger mb-0">Solar Panels</p>
                            <hr class="text-primary w-25 my-2">
                            <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                            <a class="small fw-medium text-danger " href="">Demander<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid" src="img/ (2).jpeg" alt="">
                            <div class="portfolio-btn">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/ (2).jpeg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="pt-3">
                            <p class="text-danger mb-0">Wind Turbines</p>
                            <hr class="text-primary w-25 my-2">
                            <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                            <a class="small fw-medium text-danger " href="">Demander<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item third">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid" src="img/ (3).jpeg" alt="">
                            <div class="portfolio-btn">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/ (3).jpeg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="pt-3">
                            <p class="text-danger mb-0">Hydropower Plants</p>
                            <hr class="text-primary w-25 my-2">
                            <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                            <a class="small fw-medium text-danger " href="">Demander<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid" src="img/ (4).jpg" alt="">
                            <div class="portfolio-btn">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/ (4).jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="pt-3">
                            <p class="text-danger mb-0">Solar Panels</p>
                            <hr class="text-primary w-25 my-2">
                            <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                            <a class="small fw-medium text-danger " href="">Demander<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid" src="img/ (5).jpg" alt="">
                            <div class="portfolio-btn">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/ (5).jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="pt-3">
                            <p class="text-danger mb-0">Wind Turbines</p>
                            <hr class="text-primary w-25 my-2">
                            <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                            <a class="small fw-medium text-danger " href="">Demander<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item third">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid" src="img/ (6).jpg" alt="">
                            <div class="portfolio-btn">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/ (6).jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="pt-3">
                            <p class="text-danger mb-0">Hydropower Plants</p>
                            <hr class="text-primary w-25 my-2">
                            <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                            <a class="small fw-medium text-danger " href="">Demander<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Projects End -->
    

 
    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-danger">Témoignages</h6>
                <h1 class="mb-4">Découvrez ce que nos clients disent de nous!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/c (1).jpg">
                        <div class="btn-square bg-danger rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">Client Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/c (2).jpg">
                        <div class="btn-square bg-danger rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">Client Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="img/c (3).jpg">
                        <div class="btn-square bg-danger rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">Client Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
@section('active')
<script>
    document.querySelectorAll('.nav-item')[2].classList.add('active');
</script>
@endsection
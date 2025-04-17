@extends('frontEnd.layout')
@section('title')
BEM Energy-blogs
@endsection
@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Blogs</h1>
        
    </div>
</div>
<!-- Page Header End -->


    <!-- Produits Start -->
    <div class="container-xxl ">
        <div class="container text-light">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-danger">Nos Produits</h6>
                <h1 class="mb-4">Découvrez les derniers produits !</h1>
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
                <div class="col-lg-3 col-md-6 portfolio-item first  wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item bg-dark">
                        <img class="img-fluid w-100" src="img/ (4).jpg" alt="">
                        <div class="d-flex align-items-center">
                            <div class="bg-secondary mt-n4 d-flex flex-column flex-shrink-0 justify-content-center text-center me-4" style="width: 60px; height: 100px;">
                                <i class="fa fa-calendar-alt text-primary mb-2"></i>
                                <p class="m-0 text-white">Jan 01</p>
                                <small class="text-white">2045</small>
                            </div>
                            <a class="h4 m-0 text-truncate me-4 text-light" href="">Dolor clita vero elitr sea stet dolor justo  diam</a>
                        </div>
                        <div class="d-flex justify-content-between border-top border-secondary p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src="img/c (3).jpg" width="30" height="30" alt="">
                                <small class="text-uppercase">John Doe</small>
                            </div>
                            <div class="d-flex align-items-center">
                                <small class="ms-3"><i class="fa fa-eye text-secondary me-2"></i>12345</small>
                                <small class="ms-3"><i class="fa fa-comment text-secondary me-2"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 portfolio-item second  wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item bg-dark">
                        <img class="img-fluid w-100" src="img/ (5).jpg" alt="">
                        <div class="d-flex align-items-center">
                            <div class="bg-secondary mt-n4 d-flex flex-column flex-shrink-0 justify-content-center text-center me-4" style="width: 60px; height: 100px;">
                                <i class="fa fa-calendar-alt text-primary mb-2"></i>
                                <p class="m-0 text-white">Jan 01</p>
                                <small class="text-white">2045</small>
                            </div>
                            <a class="h4 m-0 text-truncate me-4 text-light" href="">Dolor clita vero elitr sea stet dolor justo  diam</a>
                        </div>
                        <div class="d-flex justify-content-between border-top border-secondary p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src="img/c (2).jpg" width="30" height="30" alt="">
                                <small class="text-uppercase">John Doe</small>
                            </div>
                            <div class="d-flex align-items-center">
                                <small class="ms-3"><i class="fa fa-eye text-secondary me-2"></i>12345</small>
                                <small class="ms-3"><i class="fa fa-comment text-secondary me-2"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 portfolio-item third  wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item bg-dark">
                        <img class="img-fluid w-100" src="img/ (5).jpg" alt="">
                        <div class="d-flex align-items-center">
                            <div class="bg-secondary mt-n4 d-flex flex-column flex-shrink-0 justify-content-center text-center me-4" style="width: 60px; height: 100px;">
                                <i class="fa fa-calendar-alt text-primary mb-2"></i>
                                <p class="m-0 text-white">Jan 01</p>
                                <small class="text-white">2045</small>
                            </div>
                            <a class="h4 m-0 text-truncate me-4 text-light" href="">Dolor clita vero elitr sea stet dolor justo  diam</a>
                        </div>
                        <div class="d-flex justify-content-between border-top border-secondary p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src="img/c (1).jpg" width="30" height="30" alt="">
                                <small class="text-uppercase">John Doe</small>
                            </div>
                            <div class="d-flex align-items-center">
                                <small class="ms-3"><i class="fa fa-eye text-secondary me-2"></i>12345</small>
                                <small class="ms-3"><i class="fa fa-comment text-secondary me-2"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 portfolio-item first  wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item bg-dark">
                        <img class="img-fluid w-100" src="img/ (4).jpg" alt="">
                        <div class="d-flex align-items-center">
                            <div class="bg-secondary mt-n4 d-flex flex-column flex-shrink-0 justify-content-center text-center me-4" style="width: 60px; height: 100px;">
                                <i class="fa fa-calendar-alt text-primary mb-2"></i>
                                <p class="m-0 text-white">Jan 01</p>
                                <small class="text-white">2045</small>
                            </div>
                            <a class="h4 m-0 text-truncate me-4 text-light" href="">Dolor clita vero elitr sea stet dolor justo  diam</a>
                        </div>
                        <div class="d-flex justify-content-between border-top border-secondary p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src="img/c (3).jpg" width="30" height="30" alt="">
                                <small class="text-uppercase">John Doe</small>
                            </div>
                            <div class="d-flex align-items-center">
                                <small class="ms-3"><i class="fa fa-eye text-secondary me-2"></i>12345</small>
                                <small class="ms-3"><i class="fa fa-comment text-secondary me-2"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 portfolio-item second  wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item bg-dark">
                        <img class="img-fluid w-100" src="img/ (7).jpg" alt="">
                        <div class="d-flex align-items-center">
                            <div class="bg-secondary mt-n4 d-flex flex-column flex-shrink-0 justify-content-center text-center me-4" style="width: 60px; height: 100px;">
                                <i class="fa fa-calendar-alt text-primary mb-2"></i>
                                <p class="m-0 text-white">Jan 01</p>
                                <small class="text-white">2045</small>
                            </div>
                            <a class="h4 m-0 text-truncate me-4 text-light" href="">Dolor clita vero elitr sea stet dolor justo  diam</a>
                        </div>
                        <div class="d-flex justify-content-between border-top border-secondary p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src="img/c (2).jpg" width="30" height="30" alt="">
                                <small class="text-uppercase text-light">John Doe</small>
                            </div>
                            <div class="d-flex align-items-center ">
                                <small class="ms-3"><i class="fa fa-eye text-secondary me-2"></i>12345</small>
                                <small class="ms-3"><i class="fa fa-comment text-secondary me-2"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 portfolio-item third  wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item bg-dark">
                        <img class="img-fluid w-100" src="img/ (8).jpg" alt="">
                        <div class="d-flex align-items-center">
                            <div class="bg-secondary mt-n4 d-flex flex-column flex-shrink-0 justify-content-center text-center me-4" style="width: 60px; height: 100px;">
                                <i class="fa fa-calendar-alt text-primary mb-2"></i>
                                <p class="m-0 text-white">Jan 01</p>
                                <small class="text-white">2045</small>
                            </div>
                            <a class="h4 m-0 text-truncate me-4 text-light" href="">Dolor clita vero elitr sea stet dolor justo  diam</a>
                        </div>
                        <div class="d-flex justify-content-between border-top border-secondary p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src="img/c (1).jpg" width="30" height="30" alt="">
                                <small class="text-uppercase">John Doe</small>
                            </div>
                            <div class="d-flex align-items-center">
                                <small class="ms-3"><i class="fa fa-eye text-secondary me-2"></i>12345</small>
                                <small class="ms-3"><i class="fa fa-comment text-secondary me-2"></i>123</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Produits End -->

<!--new section blogs Start-->
<div class="container mt-5">
    <h2 class="fw-bold">Real Estate & Property Market News</h2>
    <div class="row row-cols-1 row-cols-md-4 g-4 mt-3">
        <div class="col">
            <div class="card news-card">
                <img src="img/ (6).jpg" class="card-img-top" alt="News Image">
                <div class="card-body">
                    <p class="text-muted small">BUY OR RENT | 4 HOURS AGO</p>
                    <h5 class="card-title">Three New Locations Across Some of</h5>
                    <a href="#" class="text-primary">Read Now</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card news-card">
                <img src="img/p (2).jpg" class="card-img-top" alt="News Image">
                <div class="card-body">
                    <p class="text-muted small">MORTGAGE | 5 YEARS AGO</p>
                    <h5 class="card-title">Washington D.C.'s Most Desirable Neighborhoods</h5>
                    <a href="#" class="text-primary">Read Now</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card news-card">
                <img src="img/p (3).jpg" class="card-img-top" alt="News Image">
                <div class="card-body">
                    <p class="text-muted small">INSIDE SALES | 7 MONTHS AGO</p>
                    <h5 class="card-title">Start and End with the Customer</h5>
                    <a href="#" class="text-primary">Read Now</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card news-card">
                <img src="img/ (5).jpg" class="card-img-top" alt="News Image">
                <div class="card-body">
                    <p class="text-muted small">NOHO NEWS | 1 YEARS AGO</p>
                    <h5 class="card-title">NoHo opens doors to its first property in NoHo</h5>
                    <a href="#" class="text-primary">Read Now</a>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4 position-relative">
        <!-- Container pour les deux images collées -->
        <div class="row no-gutters m-0">
            <div class="col-md-6 p-0">
                <img src="img/ (5).jpg" class="img-fluid w-100" alt="Featured News">
            </div>
            <div class="col-md-6 p-0">
                <img src="img/ (7).jpg" class="img-fluid w-100" alt="Featured News">
            </div>
        </div>
        
        <!-- Div contenant le texte et le lien, positionné au-dessus des images -->
        <div class="position-absolute top-50 start-50 translate-middle bg-white p-3 py-5 shadow rounded" style="z-index: 2; width: 60%; text-align: center;">
            <p class="text-muted small">PROPERTY INSIGHT | 1 YEAR AGO</p>
            <h5 class="fw-bold">NoHo townhouse sells for $1.05 million on Canberra Day long weekend</h5>
            <a href="#" class="text-primary">Read Now</a>
        </div>
    </div>
    
    
    
</div>
<!--new section blogs End-->

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
    document.querySelectorAll('.nav-item')[4].classList.add('active');
</script>
@endsection
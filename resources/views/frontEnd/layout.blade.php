<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">  <!-- that is new -->


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Chargement...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-danger me-2"></small>
                    <small>Bd Mohamed Zefzaf, Rés Sofia N°189, Casablanca, Maroc</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-danger me-2"></small>
                    <small>un - Ven : 08.00 AM - 06.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-danger me-2"></small>
                    <small>+212 6 53 39 08 50</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-facebook-f text-danger"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-twitter text-danger"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-linkedin-in text-danger"></i></a>
                    <a class="btn btn-square btn-link rounded-0" href=""><i class="fab fa-instagram text-danger"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <img src="{{asset('logo.png')}}" alt="" class="img-fluid rounded m-0" width="50" height="50">
            <span class="fw-bold text-danger">BEM</span>&nbsp;<span class="fw-bold text-black">Energy</span>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link">Acceuil</a>
                <a href="services" class="nav-item nav-link">Services</a>
                <a href="produits" class="nav-item nav-link">Produits</a>
                <a href="about" class="nav-item nav-link">À propos</a>
                <a href="blogs" class="nav-item nav-link">Blogs</a>
                <a href="contact" class="nav-item nav-link">Contacter nous</a>
                <a href="#" class="nav-item nav-link" data-bs-toggle="modal" data-bs-target="#cartModal">
                    <i class="fa fa-shopping-cart"></i>
                </a>
            </div>
            <a href="client/login" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Login / Sign up<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Cart Modal -->
    <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cartModalLabel">Votre Panier</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Cart Item 1 -->
                    <div class="d-flex align-items-center justify-content-between border-bottom pb-2 mb-2">
                        <img src="img/p (1).jpg" alt="Product 1" class="img-fluid rounded" width="70">
                        <div class="flex-grow-1 mx-3">
                            <p class="mb-1 fw-bold">Produit 01</p>
                            <div class="d-flex align-items-center">
                                <button class="btn btn-outline-secondary ">-</button>
                                <input type="text" class="form-control text-center mx-2" value="2" style="width: 40px;">
                                <button class="btn btn-outline-secondary ">+</button>
                            </div>
                        </div>
                        <p class="fw-bold mb-0">$99</p>
                        <button class="btn btn-link text-danger"><i class="fa fa-times"></i></button>
                    </div>

                    <!-- Cart Item 2 -->
                    <div class="d-flex align-items-center justify-content-between border-bottom pb-2 mb-2">
                        <img src="img/p (1).jpg" alt="Product 2" class="img-fluid rounded" width="70">
                        <div class="flex-grow-1 mx-3">
                            <p class="mb-1 fw-bold">Produit 02</p>
                            <div class="d-flex align-items-center">
                                <button class="btn btn-outline-secondary ">-</button>
                                <input type="text" class="form-control text-center mx-2" value="0" style="width: 40px;">
                                <button class="btn btn-outline-secondary ">+</button>
                            </div>
                        </div>
                        <p class="fw-bold mb-0">$99</p>
                        <button class="btn btn-link text-danger"><i class="fa fa-times"></i></button>
                    </div>

                    <!-- Total -->
                    <div class="d-flex justify-content-between mt-3">
                        <strong>Total:</strong>
                        <strong>$198</strong>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <a href="panier" class="btn btn-primary">Voir Panier</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
    @yield('content')
    <!-- Footer2 Start -->
    <div class="container-fluid text-light py-4 bg-dark" >
        <div class="row justify-content-between g-4 px-9 px-md-5">
            <!-- About Section -->
            <div class="col-md-6 col-lg-3 pe-lg-4 border-start">
                <p class="mb-0">
                    BEM Energy, votre partenaire de confiance pour des solutions énergétiques et techniques innovantes au Maroc.
                </p>
            </div>
            <div class="col-md-6 col-lg-3 px-lg-3 border-start">
                <h5 class="text-white mb-3">Suivez-nous:</h5>
                <div class="row g-2">
                    <div class="col-6 d-flex align-items-center">
                        <a class="btn btn-outline-light btn-sm me-2" href="#"><i class="fab fa-twitter"></i></a>
                        <span>X</span>
                    </div>
                    <div class="col-6 d-flex align-items-center">
                        <a class="btn btn-outline-light btn-sm me-2" href="#"><i class="fab fa-youtube"></i></a>
                        <span>YouTube</span>
                    </div>
                    <div class="col-6 d-flex align-items-center">
                        <a class="btn btn-outline-light btn-sm me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <span>Facebook</span>
                    </div>
                    <div class="col-6 d-flex align-items-center">
                        <a class="btn btn-outline-light btn-sm me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <span>LinkedIn</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ps-lg-3  border-start">
                <h5 class="text-white mb-3">Contact</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-2"></i>Bd Mohamed Zefzaf, Rés Sofia N°189, Casablanca</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-2"></i>+212 6 53 39 08 50</p>
                <p class="mb-0"><i class="fa fa-envelope me-2"></i>bestmorocco.energy@gmail.com</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 text-center">
                <hr class="mb-3">
                <p class="mb-0">&copy; 2025 BEM Energy. All Rights Reserved.</p>
            </div>
        </div>
    </div>
    <!-- Footer2 End -->


    
    
    
    


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>  <!-- that is new -->

    <!-- Template Javascript -->
    @yield('active')
    <script src="{{asset('js/main.js')}}"></script>
    
</body>

</html>
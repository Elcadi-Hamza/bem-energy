@extends("frontEnd.layout")
@section("title")
BEM Energy-contact
@endsection
@section("content")
 <!-- Page Header Start -->
 <div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Contact page</h1>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Start -->
<div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">
    <div class="container contact px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 ps-lg-0">
                    <h6 class="text-danger">Contactez-nous</h6>
                    <h1 class="mb-4">N'hésitez pas à nous contacter</h1>
                    <p class="mb-4">
                        Nous serions ravis de répondre à vos questions et de discuter de vos besoins en solutions énergétiques. Que ce soit pour un projet résidentiel ou commercial, notre équipe est à votre écoute pour vous offrir des conseils personnalisés! 
                    </p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Votre Nom</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Votre Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="sujet" placeholder="Subject">
                                    <label for="subject">sujet</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-danger rounded-pill py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <iframe class="w-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.828734451789!2d-7.648758684800964!3d33.58528098073378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7d3731f83c5c1%3A0x7f5f5f5f5f5f5f5f!2sBoulevard%20Mohamed%20Zefzaf%2C%20Casablanca!5e0!3m2!1sfr!2sma!4v1633024000000!5m2!1sfr!2sma"
                    frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection
@section("active")
<script>
    document.querySelectorAll('.nav-item')[5].classList.add('active');
</script>
@endsection
@extends("frontEnd.layout")
@section("title")
    BEM Energy-login
@endsection
@section("content")
<!-- Login Start -->
<div class="container-fluid bg-light overflow-hidden px-lg-0 mb-4" >
    <div class="container contact px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 contact-text py-2 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 ps-lg-0">
                    <h6 class="text-danger">Bienvenue</h6>
                    @if(!isset($sing))
                    <h1 class="mb-4">Se Connecter</h1>
                    <p class="mb-4">Veuillez entrer vos identifiants pour accéder à votre compte.</p>
                    <form>
                        @csrf
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Adresse e-mail ou Nom d'utilisateur">
                                    <label for="email">Adresse e-mail ou Nom d'utilisateur</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="password" placeholder="Mot de passe">
                                    <label for="password">Mot de passe</label>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember">
                                    <label class="form-check-label" for="remember">Se souvenir de moi</label>
                                </div>
                                <a href="#" class="text-danger">Mot de passe oublié ?</a>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-danger rounded-pill py-3 px-5 w-100" type="submit">Se Connecter</button>
                            </div>
                            <div class="col-12 text-center">
                                <p class="mb-0">Pas encore de compte ? <a href="sing" class="text-danger">Inscrivez-vous</a></p>
                            </div>
                        </div>
                    </form>
                @else
                <h1 class="mb-4">Créer un compte</h1>
                    <p class="mb-4">Veuillez remplir le formulaire pour créer un compte.</p>
                    <form method="POST" action="{{ route('ajouterClient') }}" >
                        @csrf
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="fullname" placeholder="Nom complet" name="nom">
                                    <label for="fullname">Nom complet</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Adresse e-mail" name="email">
                                    <label for="email">Adresse e-mail</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="password" placeholder="Mot de passe" name="password">
                                    <label for="password">Mot de passe</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="telephone" placeholder="telephone" name="tele">
                                    <label for="telephone">telephone</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="address" placeholder="address" name="address">
                                    <label for="address">address</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-danger rounded-pill py-3 px-5 w-100" type="submit">S'inscrire</button>
                            </div>
                            <div class="col-12 text-center">
                                <p class="mb-0">Vous avez déjà un compte ? <a href="login" class="text-danger">Connectez-vous</a></p>
                            </div>
                        </div>
                    </form>
                @endif
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" style="object-fit: cover;" src="https://assets.weforum.org/article/image/-O5XRnXaWx5flFLOusM2-qcj3quSJy0CvQ4RLIuuLOE.jpg" alt="Login Image">
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- Login End -->
@endsection

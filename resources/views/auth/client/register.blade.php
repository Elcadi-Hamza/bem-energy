@extends("frontEnd.layout")
@section("title")
    BEM Energy - Inscription
@endsection
@section("content")
<!-- Register Start -->
<div class="container-fluid bg-light overflow-hidden px-lg-0 mb-4">
    <div class="container contact px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 ps-lg-0">
                    <h6 class="text-primary">Commencez votre voyage</h6>
                    <h1 class="mb-4">Créer un compte</h1>
                    <p class="mb-4">Rejoignez notre communauté et bénéficiez de tous nos services.</p>
                    
                    <form method="POST" action="{{ route('client.register') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <!-- Name Fields -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" placeholder="Nom" name="nom" value="{{ old('nom') }}">
                                    <label for="nom">Nom</label>
                                    @error('nom')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('prenom') is-invalid @enderror" id="prenom" placeholder="Prénom" name="prenom" value="{{ old('prenom') }}">
                                    <label for="prenom">Prénom</label>
                                    @error('prenom')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <!-- Email -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Adresse e-mail" name="email" value="{{ old('email') }}">
                                    <label for="email">Adresse e-mail</label>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <!-- Password Fields -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Mot de passe" name="password">
                                    <label for="password">Mot de passe</label>
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="password_confirmation" placeholder="Confirmer le mot de passe" name="password_confirmation">
                                    <label for="password_confirmation">Confirmation</label>
                                </div>
                            </div>
                            
                            <!-- Contact Info -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('telephone') is-invalid @enderror" id="telephone" placeholder="Téléphone" name="telephone" value="{{ old('telephone') }}">
                                    <label for="telephone">Téléphone</label>
                                    @error('telephone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('adresse') is-invalid @enderror" id="address" placeholder="Adresse" name="adresse" value="{{ old('adresse') }}">
                                    <label for="address">Adresse</label>
                                    @error('address')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <!-- Profile Picture -->
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="image" class="form-label">Photo de profil (optionnel)</label>
                                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
                                    @error('image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <!-- Terms and Submit -->
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input @error('terms') is-invalid @enderror" type="checkbox" id="terms" name="terms">
                                    <label class="form-check-label" for="terms">
                                        J'accepte les <a href="#" class="text-primary">conditions d'utilisation</a>
                                    </label>
                                    @error('terms')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5 w-100" type="submit">
                                    <i class="fas fa-user-plus me-2"></i> S'inscrire
                                </button>
                            </div>
                            
                            <div class="col-12 text-center">
                                <p class="mb-0">Vous avez déjà un compte ? <a href="login" class="text-primary">Connectez-vous</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Right Side Image -->
            <div class="col-lg-6 pe-lg-0" style="min-height: 600px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" style="object-fit: cover; filter: brightness(0.9);" src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Energy Image">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background: rgba(0, 0, 0, 0.3);">
                        <div class="text-white px-4 text-center">
                            <h2 class="mb-4">Rejoignez BEM Energy</h2>
                            <p class="mb-4">Créez votre compte pour accéder à tous nos services et suivre votre consommation énergétique.</p>
                            <div class="d-flex justify-content-center">
                                <div class="bg-primary p-3 rounded-circle me-3">
                                    <i class="fas fa-bolt fa-2x"></i>
                                </div>
                                <div class="bg-primary p-3 rounded-circle me-3">
                                    <i class="fas fa-chart-line fa-2x"></i>
                                </div>
                                <div class="bg-primary p-3 rounded-circle">
                                    <i class="fas fa-leaf fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register End -->
@endsection
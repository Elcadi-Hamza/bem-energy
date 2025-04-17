@extends('frontEnd.layout')
@section('title')
BEM Energy-validation
@endsection
@section('content')
<div class="container-fluid bg-light overflow-hidden px-lg-0 mb-4" >
    <div class="container contact px-lg-0">
        <div class="row g-0 mx-lg-0 d-flex justify-content-center">
            <div class="col-lg-6 contact-text py-2 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 ps-lg-0">
                    <h1 class="mb-4">Entrer validation code</h1>
                    <p class="mb-4">Veuillez entrer le code qui envoyé par votre email</p>
                    <form method="POST" action="{{ route('verifyClient') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" inputmode="numeric" class="fs-3 form-control text-center p-0" id="code" name="code" placeholder="">
                                    <label for="code"></label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-danger rounded-pill py-3 px-5 w-100" type="submit">submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection

@extends("frontEnd.layout")
@section("title")
    BEM Energy-email
@endsection
@section("content")
<p>Bonjour {{ $client->prenom }},</p>
    <p>Merci de vous être inscrit. Cliquez sur le lien ci-dessous pour vérifier votre adresse email :</p>
    <a href="{{ $verificationUrl }}">{{ $verificationUrl }}</a>
@endsection
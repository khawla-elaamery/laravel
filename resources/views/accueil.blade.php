@extends('layouts.app')

@section('title', 'Page d\'accueil')

@section('content')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Lien vers votre fichier CSS -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
   
     <!-- Section Accueil -->
     <header id="accueil">
        <div class="container">
            <h1 >Bienvenue sur RépareElectro</h1>
            <p>Des services professionnels adaptés à vos besoins.</p>
            
        </div>
    </header>

  

 

@endsection
<style>
    /* --- Reset des marges et paddings de base --- */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* --- Corps de la page --- */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f7f7f7;
    color: #333;
    line-height: 1.6;
}

/* --- Navbar --- */
nav {
    background-color: #0b3958;
    padding: 15px 30px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
}

nav .navbar-brand {
    color: white;
    font-weight: bold;
    font-size: 1.8rem;
    letter-spacing: 2px;
}

nav .navbar-nav {
    display: inline-block;
    text-align: center;
}

nav .navbar-nav .nav-item {
    display: inline-block;
    margin: 0 15px;
}

nav .navbar-nav .nav-link {
    color: white;
    font-size: 1.1rem;
    text-transform: uppercase;
    font-weight: bold;
    transition: color 0.3s ease;
}

nav .navbar-nav .nav-link:hover {
    color: #160c6b;
    text-decoration: none;
}

/* --- Centrer le contenu principal --- */
.container {
    margin-top: 50px;
    padding: 40px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    text-align: center;
}

/* --- Titre principale --- */
h1 {
    color: #2980b9;
    font-size: 2.5rem;
    font-weight: bold;
    margin-bottom: 20px;
}

h2, h3 {
    color: #274a6d;
}

/* --- Footer --- */
footer {
    text-align: center;
    padding: 20px;
    background-color: #2c3e50;
    color: white;
    margin-top: 40px;
}

footer p {
    font-size: 1rem;
}

/* --- Ajustement pour les petits écrans --- */
@media (max-width: 768px) {
    nav .navbar-nav {
        display: block;
    }

    nav .navbar-nav .nav-item {
        margin: 10px 0;
    }

    .container {
        padding: 20px;
    }
}
</style>
    <!-- Section Accueil -->
    <header id="accueil">
        <div class="container">
            <h1 >Bienvenue sur RépareElectro</h1>
            <p>Des services professionnels adaptés à vos besoins.</p>
            
        </div>
    </header>

  

 

@endsection

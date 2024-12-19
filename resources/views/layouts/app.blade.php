<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mon Site Laravel')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<style> /* --- Style global --- */
    /* --- Reset des marges et paddings de base --- */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* --- Corps de la page --- */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f9;
    color: #333;
}

/* --- Navbar --- */
nav {
    background-color: #043353;
    padding: 10px 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

nav .navbar-brand {
    color: white;
    font-weight: bold;
    font-size: 1.6rem;
    letter-spacing: 2px;
}

nav .navbar-nav {
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
    transition: color 0.3s;
}

nav .navbar-nav .nav-link:hover {
    color: #093d5fd5;
    text-decoration: none;
}

/* --- Ajustement pour les petits écrans (responsive) --- */
@media (max-width: 768px) {
    nav .navbar-nav {
        text-align: left;
    }
    
    nav .navbar-nav .nav-item {
        display: block;
        margin: 10px 0;
    }
}

/* --- Conteneur principal --- */
.container {
    margin-top: 30px;
    padding: 20px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* --- Style pour les titres de section --- */
h1, h2, h3 {
    color: #3498db;
    font-weight: bold;
}

/* --- Footer de la page --- */
footer {
    text-align: center;
    padding: 15px 0;
    background-color: #2c3e50;
    color: white;
    margin-top: 40px;
}

footer p {
    font-size: 0.9rem;
}

   </style> 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">RépareElectro</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">À propos</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>

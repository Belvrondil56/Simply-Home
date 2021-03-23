<?php
$path = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$current = basename($path);
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="scripts/jquery-1.9.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.1/css/all.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="css/style.css">
    <title>Simply Home</title>
</head>

<body class="accueil">
    <header>

        <div class="bandeau">
            <span class="reseaux-infos">
                <p>|</p>
                <div><i class="fab fa-facebook-f"></i><i class="fab fa-twitter"></i><i class="fab fa-linkedin-in"></i><i
                        class="fab fa-instagram"></i></div>
                <p>|</p>
                <p><i class="fa fa-phone" aria-hidden="true"></i> 02 57 87 71 85</p>
                <p>|</p>
                <p>Suivre mon projet</p>
                <p>|</p>
                </i>
            </span>
        </div>

        <nav class="navbar navbar-expand-md navbar-light justify-content-between">
            <a class="navbar-brand d-flex" href="Accueil.html"> <img src="images/images/simply-home-logo.png" alt="">
                <p>Simply Home <br>
                    <span class="petit">Constructeur de vie</span></p>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="menu-afficher collapse navbar-collapse row text-right" id="navbarTogglerDemo02">
                <ul class="navbar-nav d-flex justify-content-end">
                    <li class="nav-item active">
                        <a class="nav-link" href="Accueil.html">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Apropos.html">A propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="NosMaisons.html">Nos maisons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="filtre-noir"></div>

    </header>
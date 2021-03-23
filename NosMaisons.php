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

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light justify-content-between">
            <a class="navbar-brand d-flex" href="Accueil.html"> <img src="images/images/simply-home-logo.png" alt="">
                <p>Simply Home <br>
                    <span class="petit">Constructeur de vie</span></p>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse row text-right" id="navbarTogglerDemo02">
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

    </header>

    <main class="maisons largeurMax">

        <div class="tel-mel">
            <section class="boite">
                <i class="fa fa-phone" aria-hidden="true"></i>
            </section>
            <section class="boite">
                <i class="fas fa-envelope"></i>
            </section>
        </div>
        <article class="intro">

            <h1 class="title">Simply Home : Nos Maisons trop fun !!!</h1>
            <p>Que votre choix se porte sur une <strong>maison traditioonnelle</strong> ou sur une <strong>maisons
                    contemporaine,</strong> notre équipe experimentée, composée de conducteurs de travaux qualifiés,
                d'une reponsable technique, d'un reponsable qualité et de technico-commerciaux, est là pour vous
                consiller et vous accompagner durant l'intégralité de vos travaux. Notez que nous disposons d'un bureau
                d'étude de dessin</p>

        </article>

        <section>
            <h2>Choisissez votre Maison</h2>
            <form>
                <div class="liste-choix">
                    <div class="choix">
                        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                            <option selected>STYLE</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="choix">
                        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                            <option selected>TOITURE</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="choix">
                        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                            <option selected>NIVEAU</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="choix">
                        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                            <option selected>NB CHAMBRES</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
        </section>

        <section class="container">
            <div class="row justify-content-between">
                <div class="col-md-4 col-sm-6 card">
                    <img class="card-img-top" src="images/images/armenia_3_chambres.jpg" alt="Armenia">
                    <div class="card-body">
                        <p class="card-text">ARMENIA - 3 chambres+bureau <br> 104m² <br> Maison traditionnelle à étages
                            de
                            104 m² habitables environ. Belle pièce de vie de 40 m², 3 chambre dont...</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 card">
                    <img class="card-img-top" src="images/images/atlas_3_chambres.jpg" alt="Atlas">
                    <div class="card-body">
                        <p class="card-text">ARMENIA - 3 chambres+bureau <br> 106m² <br> Maison traditionnelle à étages
                            de
                            104 m² habitables environ. Belle pièce de vie de 40 m², 3 chambre dont...</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 card">
                    <img class="card-img-top" src="images/images/attis_3_chambres.jpg" alt="Attis">
                    <div class="card-body">
                        <p class="card-text">ARMENIA - 3 chambres+bureau <br> 109m² <br> Maison traditionnelle à étages
                            de
                    </div>
                </div>


                <div class="col-md-4 col-sm-6 card">
                    <img class="card-img-top" src="images/images/actuel_2_chambres.jpg" alt="Actuel2">
                    <div class="card-body">
                        <p class="card-text">ARMENIA - 3 chambres+bureau <br> 72m² <br> Maison traditionnelle à étages
                            de
                            104 m² habitables environ. Belle pièce de vie de 40 m², 3 chambre dont...</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 card">
                    <img class="card-img-top" src="images/images/actuel_3_chambres.jpg" alt="Actuel3">
                    <div class="card-body">
                        <p class="card-text">ARMENIA - 3 chambres+bureau <br> 87m² <br> Maison traditionnelle à étages
                            de
                            104 m² habitables environ. Belle pièce de vie de 40 m², 3 chambre dont...</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 card">
                    <img class="card-img-top" src="images/images/actuel_4_chambres.jpg" alt="Actuel4">
                    <div class="card-body">
                        <p class="card-text">ARMENIA - 3 chambres+bureau <br> 108m² <br> Maison traditionnelle à étages
                            de
                            104 m² habitables environ. Belle pièce de vie de 40 m², 3 chambre dont...</p>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6 card">
                    <img class="card-img-top" src="images/images/adonis_4_chambres.jpg" alt="Adonis">
                    <div class="card-body">
                        <p class="card-text">ARMENIA - 3 chambres+bureau <br> 125m² <br> Maison traditionnelle à étages
                            de
                            104 m² habitables environ. Belle pièce de vie de 40 m², 3 chambre dont...</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 card">
                    <img class="card-img-top" src="images/images/alpha_5_chambres.jpg" alt="Alpha5">
                    <div class="card-body">
                        <p class="card-text">ARMENIA - 3 chambres+bureau <br> 177m² <br> Maison traditionnelle à étages
                            de
                            104 m² habitables environ. Belle pièce de vie de 40 m², 3 chambre dont...</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 card">
                    <img class="card-img-top" src="images/images/ambroise_4_chambres.jpg" alt="Ambroise">
                    <div class="card-body">
                        <p class="card-text">ARMENIA - 3 chambres+bureau <br> 117m² <br> Maison traditionnelle à étages
                            de
                            104 m² habitables environ. Belle pièce de vie de 40 m², 3 chambre dont...</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="pages">
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <span class="page-link">Préc.</span>
                    </li>
                    <li class="page-item active">
                        <span class="page-link">
                            1
                            <span class="sr-only">(current)</span>
                        </span>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Suiv.</a>
                    </li>
                </ul>
            </nav>
        </div>
    </main>


    <footer class="footer">
        <section class="bg-img">
            <div>
                <div class="fd-blanc">
                    <div class="pad">
                        <div class="boite">
                            <h6>Simply Home</h6>
                            <p>15 rue des Oliviers 16100 ANGOULEME</p>
                            <div class="bouton">
                                <a href="#"><button class="transi-bouton" type="button">02 57 87 71 85</button></a>
                            </div>
                        </div>
                        <div class="fd-noir">
                            <div class="logo-titre">
                                <div><img src="images/images/simply-home-logo.png" alt="logo"></div>
                                <div class="lt">
                                    <h2>Simply Home</h2>
                                    <p>Constructeur de vie</p>
                                </div>
                            </div>
                        </div>

                        <div class="boite">
                            <i class="far fa-paper-plane"></i>
                            <p>Inscription <br> à la Newletter</p>
                            <div class="bouton">
                                <a href="#"><button class="transi-bouton" type="button">Je m'inscris</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="resal">
                        <div class="reseaux-icones">
                            <i class="fab fa-facebook-f"></i><i class="fab fa-twitter"></i><i
                                class="fab fa-linkedin-in"></i><i class="fab fa-instagram"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bandeau-bas">
                <p>Copyright CDA 2021 - Mentions Légales</p>
            </div>
        </section>
    </footer>
</body>

</html>
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

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav">
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

    <main class="contact largeurMax">

        <div class="tel-mel">
            <section class="boite">
                <i class="fa fa-phone" aria-hidden="true"></i>
            </section>
            <section class="boite">
                <i class="fas fa-envelope"></i>
            </section>
        </div>

        <h1 class="title">Contacter Simply Home</h1>
        <article class="intro">


            <p>Pour toute demande d'information ou de prise de rendez-vous, vous poouvez nous adresser votre demande en
                remplissant le formulaire de contact ci-dessous. <br>Le conseiller en habitat de votre secteur
                géographique, interlocuteur unique, vous proposera un accompagnement unique et peronnalisé tout au ling
                de la construction. Ce suivi perosnnalisé est garant de la résussit des projets</p>

            <img src="images/images/imgfinancerprojet.jpg" alt="imgfinancement">

        </article>


        <section class="formulaire">
            <form>

                <section class="labels">
                    <label for="validationServer01"></label>
                    <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Nom">

                    <label for="validationServer01"></label>
                    <input type="mail" class="form-control is-valid" id="validationServer01" placeholder="Email">

                    <label for="validationServer01"></label>
                    <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Téléphone">
                </section>
                <p class="depart">Département</p>
                <section class="checkbox">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="numdepart" required>
                        <label class="form-check-label" for="numdepart">
                            16
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="numdepart2" required>
                        <label class="form-check-label" for="numdepart2">
                            85
                        </label>
                    </div>
                </section>
                <p class="depart">Votre projet</p>
                <section class="checkbox">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="maison" required>
                        <label class="form-check-label" for="maison">
                            Maison
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="maison-terrain" required>
                        <label class="form-check-label" for="maison-terrain">
                            Maison+Terrain
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="appartement" required>
                        <label class="form-check-label" for="appartement">
                            Appartement
                        </label>
                    </div>

                </section>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Votre message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="bouton">
                    <button type="submit" class="transi-bouton">Sign in</button>
                </div>
                </div>
            </form>
        </section>

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
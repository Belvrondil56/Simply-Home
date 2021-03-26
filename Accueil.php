<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="scripts/jquery-1.9.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.1/css/all.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="css/style.css">
    <title>Simply Home</title>
</head>

<body class="accueil">
    <header>
        <div class="bandeau">
            <span class="reseaux-infos">
                <p>|</p>
                <div><a href="https://www.facebook.com/Marlene.schiappa.gouv/"><i class="fab fa-facebook-f"></i></a><a href="https://twitter.com/JeanCASTEX?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fab fa-twitter"></a></i><a href="https://fr.linkedin.com/company/spacex"><i class="fab fa-linkedin-in"></i></a><a href="https://www.instagram.com/emmanueletbrigittemacron/?hl=fr"><i class="fab fa-instagram"></i></a></div>
                <p>|</p>
                <p><i class="fa fa-phone" aria-hidden="true"></i> 02 57 87 71 85</p>
                <p>|</p>
                <button type="button" class="bouton" data-toggle="modal" data-target="#exampleModal">
                    Suivre mon projet
                </button>
                <p>|</p>
                </i>
            </span>
        </div>

        <nav class="navbar navbar-expand-md navbar-light justify-content-between">
            <a class="navbar-brand d-flex" href="Accueil.php"> <img src="images/images/simply-home-logo.png" alt="">
                <p>Simply Home <br>
                    <span class="petit">Constructeur de vie</span>
                </p>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="menu-afficher collapse navbar-collapse row text-right" id="navbarTogglerDemo02">
                <ul class="navbar-nav d-flex justify-content-end">
                    <li class="nav-item active">
                        <a class="nav-link" href="Accueil.php" class="<?php if ($current == 'Accueil.php') {
                                                                            echo 'page courante';
                                                                        } ?>">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Apropos.php" class="<?php if ($current == 'Apropos.php') {
                                                                            echo 'page courante';
                                                                        } ?>">A propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="NosMaisons.php" class="<?php if ($current == 'NosMaisons.php') {
                                                                                echo 'page courante';
                                                                            } ?>">Nos maisons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contact.php" class="<?php if ($current == 'Contact.php') {
                                                                            echo 'page courante';
                                                                        } ?>">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="filtre-noir"></div>

    </header>

    <main class="mainPage largeurMax">
        <h1 class="title">Bienvenue Chez Simply Home</h1>
        <section class="main">
            <article class="text">
                <p>La société <strong>Simply Home</strong>, constructeur de
                    maisons neuves individuelles en <strong>Charente</strong> (16)
                    et en <strong>Vendée</strong> (85) est née d'une ambition,
                    accompagner ses clients dans la réussite d'un
                    des projets les plus importants dans leur vie :
                    la <strong>construction d'une maison neuve.</strong></p>
                <p>Simply Home vous accompagne tout au long de votre projet de construction de maison individuelle, de
                    la recherche de votre terrain jusqu'à la remise des clés.</p>
            </article>
            <img src="images/images/construction_maison_individuelle.jpg" alt="macon qui construit une maison">
        </section>
        <div class="tel-mel">
            <section class="boite">
                <span><i class="fa fa-phone" aria-hidden="true"></i>
                    <p>02 57 87 71 85</p>
                </span>
            </section>
            <section class="boite2">
                <span><i class="fas fa-envelope"></i><button type="button" class="bouton" data-toggle="modal" data-target="#exampleModal2">
                        simply-home@wanadoo.fr
                    </button></span>
            </section>
        </div>
        <h2>Nos maisons</h2>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Formulaire</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Email:</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <form>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Mot de passe:</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>

                                <div class="mdp-compte">
                                    <div><a href="#">Créer un compte</a></div>
                                    <div><a href="#">Mot de passe oublié ?</a></div>
                                </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn">Se connecter</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Formulaire</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Email:</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <form>
                                <div class="form-group">
                                    <label for="message" class="col-form-label">Message</label>
                                    <textarea type="text" class="form-control" id="message"> </textarea>
                                </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn">Se connecter</button>
                    </div>
                </div>
            </div>
        </div>

        <section class="cards container">

            <div class="row">
                <div class="card col-md-4 col-sm-6 col-12">
                    <img class="card-img-top" src="images/images/calypso_3_chambres.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Calyspo <br><br> Maison 3 chambres <br> 107m²</p>
                    </div>
                </div>



                <div class="card col-md-4 col-sm-6 col-12">
                    <img class="card-img-top" src="images/images/calypso_3_chambres.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">City <br><br> Maison 2,3 ou 4 chambres <br> A partir de 68m²</p>
                    </div>
                </div>



                <div class="card text-white col-md-4 col-sm-6 col-12 d-flex align-items-center justify-content-center">
                    <p class="card-text">Comment financer mon projet</p>
                    <a href="" class="btn btn-primary">+d'infos</a>
                </div>



                <div class="card col-md-4 col-sm-6 col-12">
                    <img class="card-img-top" src="images/images/calypso_3_chambres.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Armenia <br><br> Maison 3 chambres+bureau <br> 107m²</p>
                    </div>
                </div>



                <div class="card col-md-4 col-sm-6 col-12">
                    <img class="card-img-top" src="images/images/calypso_3_chambres.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Balzano <br><br> Maison 3 chambres <br> 107m²</p>
                    </div>

                </div>


                <div class="card col-md-4 col-sm-6 col-12">
                    <img class="card-img-top" src="images/images/calypso_3_chambres.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Azure <br><br> Maison 3 chambres <br> 107m²</p>
                    </div>
                </div>

            </div>
        </section>
        <div class="bouton">
            <a href="#"><button class="transi-bouton" type="button">En voir +</button></a>
        </div>
    </main>


    <?php include("footer.php") ?>
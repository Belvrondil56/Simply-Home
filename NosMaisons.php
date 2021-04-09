<?php include("header.php") ?>

<main class="maisons largeurMax">

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
    <article class="intro">

        <h1 class="title">Simply Home : Nos Maisons</h1>
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
                        <option value="Traditionnel">Traditionnel</option>
                        <option value="Contemporain">Contemporain</option>
                    </select>
                </div>
                <div class="choix">
                    <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option selected>TOITURE</option>
                        <option value="Ardoise">Ardoise</option>
                        <option value="Tuiles">Tuiles</option>
                        <option value="Moderne">Moderne</option>
                    </select>
                </div>
                <div class="choix">
                    <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option selected>NIVEAU</option>
                        <option value="plein-pied">Plein-pied</option>
                        <option value="etage-1">Un étage</option>
                        <option value="etage-2">Deux étages</option>
                    </select>
                </div>
                <div class="choix">
                    <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option selected>NB CHAMBRES</option>
                        <option value="1">Une</option>
                        <option value="2">Deux</option>
                        <option value="3">Trois</option>
                        <option value="4">Quatre</option>
                    </select>
                </div>
    </section>

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

    <section class="container">
        <div class="row justify-content-between">
            <a href="questembert1.php" class="col-md-4 col-sm-6 card">
                <img class="card-img-top" src="images/images/questembert1.jpg" alt="questembert">
                <div class="card-body">
                    <p class="card-text">Maison 7 pièces <br> 140m² <br>
                        Maison en pierres et parpaings offrant une surface
                        d'environ 140 m2 habitable, située en campagne,
                        à 3.8 kms du centre-ville de Questembert...</p>
                </div>
            </a>
            <a href="questembert2.php" class="col-md-4 col-sm-6 card">
                <img class="card-img-top" src="images/images/questembert2.jpg" alt="questembert">
                <div class="card-body">
                    <p class="card-text">Maison Rénovée 5 pièces <br> 122m² <br>
                        Maison en pierre Questembert 1.5 km de la Gare, plus de 2100 m² de terrain !
                        Très belle maison pierre, récemment rénovée entre 2003 et 2005...</p>
                </div>
            </a>
            <a href="questembert3.php" class="col-md-4 col-sm-6 card">
                <img class="card-img-top" src="images/images/questembert3.jpg" alt="questembert">
                <div class="card-body">
                    <p class="card-text">Maison de charme 10 pièces <br> 328m² <br>
                        Campagne de QUESTEMBERT, charme et authenticité pour cette magnifique
                        longère rénovée située dans un endroit paisible
                        d'une longueur de 35 m...</p>
                </div>
            </a>
            <a href="questembert4.php" class="col-md-4 col-sm-6 card">
                <img class="card-img-top" src="images/images/questembert4.jpg" alt="questembert">
                <div class="card-body">
                    <p class="card-text">Maison Contempraine 5 pièces <br> 89m² <br>
                        Vente Maison 89 m² à Questembert 145 000 €
                        Maison CA t5 bis RT 2012 (à bâtir),vous offrant entrée,
                        salon séjour, cuisine ouverte, local p. a.c, w.c...</p>
                </div>
            </a>
            <a href="questembert5.php" class="col-md-4 col-sm-6 card">
                <img class="card-img-top" src="images/images/questembert5.jpg" alt="questembert">
                <div class="card-body">
                    <p class="card-text">Maison 7 pièces <br> 157m² <br>
                        Dans un hameau calme, venez découvrir cette maison familiale de 1988 de 157 m2 (environ)
                        Composée au rez-de-chaussée d'une véranda de 18 m2, une pièce de vie de 38 m2 avec...</p>
                </div>
            </a>

            <a href="maison_vannes_1.php" class="col-md-4 col-sm-6 card">
                <img class="card-img-top" src="images/images/vannes_1.jpg" alt="vannes">
                <div class="card-body">
                    <p class="card-text">Maison Vannes<br> 75m² <br>
                        Exclusivité. A moins de 10 minutes de la Mairie de Vannes, projet d'une Maison ossature bois de plain pied de 75 m² dans un quartier recherché...</p>
                </div>
            </a>

            <a href="maison_vannes_2.php" class="col-md-4 col-sm-6 card">
                <img class="card-img-top" src="images/images/vannes_2.jpg" alt="vannes">
                <div class="card-body">
                    <p class="card-text">Maison de ville 3 pièces <br> 80m² <br>
                        VANNES AGREABLE PETITE MAISON DE VILLE PROCHE COMMERCES ET ECOLES...</p>
                </div>
            </a>

            <a href="maison_vannes_3.php" class="col-md-4 col-sm-6 card">
                <img class="card-img-top" src="images/images//vannes_3.jpg" alt="vannes">
                <div class="card-body">
                    <p class="card-text">Maison Vannes <br> 170m² <br>
                        MAISON CONTEMPORAINE 15 Mn de VANNES, sur la commune de Monterblanc, et située dans une écrin...</p>
                </div>
            </a>

            <a href="maison_vannes_4.php" class="col-md-4 col-sm-6 card">
                <img class="card-img-top" src="images/images/vannes_4.jpg" alt="vannes">
                <div class="card-body">
                    <p class="card-text">Maison Vannes <br> 75m² <br>
                        Exclusivité. A moins de 10 minutes de la Mairie de Vannes, projet d'une Maison ossature bois de plain pied de 75 m² dans un quartier...</p>
                </div>
            </a>
            <a href="maison_vannes_5.php" class="col-md-4 col-sm-6 card">
                <img class="card-img-top" src="images/images/vannes_5.jpg" alt="vannes">
                <div class="card-body">
                    <p class="card-text">Maison plein-pied <br> 165m² <br>
                        A 1 km à pied du port, venez découvrir cette charmante maison en pierre récemment rénovée...</p>
                </div>
            </a>

            <a href="sene1.php" class="col-md-4 col-sm-6 card">
                <img class="card-img-top" src="images/images/sene1.jpg" alt="questembert">
                <div class="card-body">
                    <p class="card-text">Maison 6 pièces <br> 120m² <br>
                        Rejoindre le bourg par les sentiers côtiers...et Vannes à vélo...! Cette maison offre un emplacement stratégique et bucolique...</p>
                </div>
            </a>

            <a href="sene2.php" class="col-md-4 col-sm-6 card">
                <img class="card-img-top" src="images/images/sene2.jpg" alt="questembert">
                <div class="card-body">
                    <p class="card-text">Maison 5 pièces <br> 100 m² <br>
                        Maison/villa 5 pièces SENE-GARANTIE REVENTE 7 ANS OFFERTE pour cette maison de près de 100 m²
                        habitable sur terrain de 500 m² en impasse sur le village de Limur...</p>
                </div>
            </a>

            <a href="sene3.php" class="col-md-4 col-sm-6 card">
                <img class="card-img-top" src="images/images/sene3.jpg" alt="questembert">
                <div class="card-body">
                    <p class="card-text">Séné Le Poulfanc <br> 180 m² <br>
                        Séné Le Poulfanc, en impasse maison des années 70 se composant au rdc une entrée,
                        un garage, un appartement de 45 m² (entrée-salon/séjour-chambre avec placard-cuisine-chaufferie)...</p>
                </div>
            </a>

            <a href="sene4.php" class="col-md-4 col-sm-6 card">
                <img class="card-img-top" src="images/images/sene4.jpg" alt="questembert">
                <div class="card-body">
                    <p class="card-text">3 km du Port de Vannes maison 4 chambres <br> 128 m² <br>
                        Parfaite pour une famille, idéalement située à proximité de tout, pour habiter ou pour investir,
                        cette maison plutôt récente construite en 1997 bien tenue, offre 128 m² utiles dont 119 habitables et, un vrai garage...</p>
                </div>
            </a>

            <a href="sene5.php" class="col-md-4 col-sm-6 card">
                <img class="card-img-top" src="images/images/sene5.jpg" alt="questembert">
                <div class="card-body">
                    <p class="card-text">Maison 5 pièces <br> 93 m² <br>
                        SENE - en impasse dans village de pêcheur - Proche
                        de la réserve naturelle des marais de Séné et de Montsarrac - Maison...</p>
                </div>
            </a>

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


<?php include("footer.php") ?>
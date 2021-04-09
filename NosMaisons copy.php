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
            <div class="col-md-4 col-sm-6 card dernier">
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


<?php include("footer.php") ?>
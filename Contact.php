<?php include("header.php") ?>

<main class="contact largeurMax">

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

<?php include("footer.php") ?>
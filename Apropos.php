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

    <main class="apropos largeurMax">

        <div class="tel-mel">
            <section class="boite">
                <i class="fa fa-phone" aria-hidden="true"></i>
            </section>
            <section class="boite">
                <i class="fas fa-envelope"></i>
            </section>
        </div>

        <h1 class="title">Simply Home : une équipe d'experts</h1>
        <p>Forts d’une longue expérience dans le domaine de la construction de maisons individuelles,
            nous nous engageons à déterminer avec vous ce qui vous conviendra le mieux, en étudiant
            rigoureusement les moindres détails de la conception de votre nouveau lieu de vie.
            Que votre choix se porte sur une maison traditionnelle ou sur une maison contemporaine,
            notre équipe expérimentée, composée de conducteurs de travaux qualifiés, d’un responsable
            technique, d’un responsable qualité et de technico-commerciaux, est là pour vous conseiller
            et vous accompagner durant l’intégralité de vos travaux. Notez que nous disposons d’un bureau
            d’étude de dessin.</p>

        <section class="accord">
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                <i class="fas fa-arrow-circle-right"></i>
                                <h7>Nos engagements et garenties</h7>
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">

                            <p> Nous mettons tout en œuvre pour vous offrir une maison qui réponde en tous points à vos
                                exigences. Ainsi, nous nous engageons à respecter les délais que nous nous sommes fixés,
                                en
                                ne travaillant qu’avec des matériaux de qualité et adaptés. De plus, nous respectons
                                toutes
                                les normes et les réglementations, notamment les normes RT 2012, ainsi que le Contrat de
                                Construction de Maison Individuelle. <br>

                                <p> Nous vous invitons à découvrir l’ensemble de nos garanties : <br></p>

                                <p class="liste">Garantie de remboursement d’acompte <br>
                                    Garantie de livraison à prix et délai convenus <br>
                                    Assurance dommages-ouvrage <br>
                                    Garantie de parfait achèvement <br>
                                    Garanties biennale et décennale <br>
                                    Garantie de bon fonctionnement <br>
                                    Paiement des travaux strictement réglementé <br>
                                </p>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fas fa-arrow-circle-right"></i>
                                <h7>Nos modèles de maisons de plain-pied et à étage, contemporaines et traditionnelles
                                </h7>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <p> Les maisons modernes et traditionnelles présentent chacune des caractéristiques
                                différentes, qu’il est important de prendre en compte avant d’arrêter définitivement
                                votre choix. Il vous faut, en effet, déterminer avec précision quels sont vos besoins,
                                vos attentes et vos goûts. <br>

                                <p> Vous rêvez d’une maison unique et de vous différencier de vos voisins ? La maison
                                    d’architecte contemporaine est ce qu’il vous faut ! De même, si vous préférez rester
                                    dans la tradition en utilisant un certain type de matériaux, ou en construisant une
                                    maison en V ou en L, nos modèles traditionnels de plain-pied et à étage sont faits
                                    pour vous.
                                    Pour plus d’informations, pour obtenir un plan ou pour consultez le prix des
                                    maisons,
                                    n’hésitez pas à prendre contact avec nous.</p>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                <i class="fas fa-arrow-circle-right"></i>
                                <h7>Découvrez nos modèles de maisons contemporaines</h7>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            <p> Pour certains, l’originalité peut leur permettre de laisser libre cours à
                                leur imagination et ainsi envisager toutes sortes d’extravagances pour leur
                                future maison. En revanche, si vous êtes de ceux pour qui avoir carte blanche
                                enlève toute inspiration et vous rend incapable de visualiser précisément
                                votre futur chez-vous, nous mettons à votre disposition un grand nombre de
                                modèles de maisons contemporaines. Vous pouvez ainsi trouver celle qui
                                conviendra le mieux et qui rassemblera toutes les caractéristiques que
                                vous recherchez. Faites appel à votre constructeur de maisons contemporaines. <br>

                                <p> Grâce à nos nombreuses constructions de maisons individuelles au fil des ans
                                    et à notre longue expérience dans le domaine, nous sommes en mesure de vous
                                    offrir de quoi vous inspirer pour l’élaboration d’un plan de maison contemporaine.
                                </p> <br>

                                <p class="prix">TOTAL général: 90,93 m²</p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>


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
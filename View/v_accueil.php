    <link href="Public/css/accueil.css" rel="stylesheet" />
    </head>

    <body>
        <section id="firstPage">
            <nav id="navAccueil" class="row">
                <div class="col-6">
                    <a href="index.php?action=accueil" id="firstA"><img src="Public/img/LogoEasyBee_noir.png" alt="img"></a>
                    <a href="#about" class="a">A propos</a>
                    <a href="#services" class="a">Nos services</a>
                </div>
                <div class="col-6">
                    <button type="button" id="btnConnexion" data-bs-toggle="modal" data-bs-target="#connexionModal">Se connecter</button>
                </div>
            </nav>
            <!-- Modal -->
            <div class="modal fade" id="connexionModal" tabindex="-1" aria-labelledby="connexionModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <h3>CONNEXION</h3>
                            <form action="index.php?action=connexion" method="POST" id="formConnexion">
                                <input type="email" name="connexionLogin" id="login" required placeholder="EMAIL"> <br>
                                <input type="password" name="connexionPassword" id="pw" required placeholder="MOT DE PASSE"> <br>
                                <a href="">Mot de passe oublié ?</a> <br>
                                <input type="submit" value="Se connecter" id="SeConnecter"> <br>
                            </form>
                            <input type="submit" value="Créer un compte" id="createAccount">
                        </div>
                    </div>
                </div>
            </div>
            <h2>EasyBee - votre <br>meilleur aide pour <br>débuter l'apiculture</h2>
        </section>
        <section id="about">
            <div id="ourCompany">
                <h2>Notre entreprise</h2>
                <p>EasyBee est une entreprise de vente de materiel apicole, fondée par Auguste Klin. <br>
                    Vous pouvez retrouver nos produits dans notre magazin situé à Limoges. <br>
                    Nous proposons également des formations afin d'aider les débutants qui souhaitent ce lancer dans l'apiculture.</p>
            </div>
        </section>
        <section id="services">
            <h2>Les formations</h2>
            <div id="listFormation">
                <?php
                foreach ($lesFormations as $uneFormation) { ?>
                    <div id="formation">
                        <h3><?php echo $uneFormation["nomFormation"]; ?></h3>
                        <p> <?php echo $uneFormation["descriptionFormation"]; ?> </p>
                    </div>
                <?php
                }
                ?>
            </div>
            
        </section>
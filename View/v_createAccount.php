        <link href="Public/css/createAccount.css" rel="stylesheet" />
    </head>

    <body>
        <nav id="navAccueil" class="row">
            <div class="col-6">
                <a href="index.php?action=accueil" id="firstA"><img src="Public/img/LogoEasyBee_noir.png" alt="logo"></a>
                <a href="#about" class="a">A propos</a>
                <a href="#services" class="a">Nos services</a>
            </div>
            <div class="col-6">
                <a href="index.php?action=signIn" id="btnConnexion">Se connecter</a>
            </div>
        </nav>
        <form action="" method="POST" id="formCreateAccount"> 
            <label for="lastName">Nom* : </label>
            <label for="firstName" id="labelFirstName">Prenom* : </label> <br>
            <input type="text" id="lastName" name="createLastName" required> 
            <input type="text" id="firstName" name="createFirstName" required> <br> 
            <label for="mail">Adresse Email*  : </label> 
            <label for="tel" id="labelTel">Téléphone : </label> <br>
            <input type="email" id="mail" name="createMail" required>
            <input type="text" id="tel" name="createTel" > <br>
            <label for="login">Nom d'utilisateur* : </label>
            <input type="text" id="login" name="createLogin" required> <br> 
            <label for="password">Mot de passe* : </label> <br>
            <input type="password" id="password" name="createPassword" required> <br>
            <input type="checkbox" id="check" required> 
            <label for="check" id="labelCheck">J'accepte les <a href="">conditions d'utilisation</a></label> <br> <!-- TODO : faire la page des conditions d'utilisation !--> 
            <input type="submit" value="Confirmer">
        </form>
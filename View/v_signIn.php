        <link href="Public/css/signIn.css" rel="stylesheet" />
    </head>

    <body>
        <nav id="navAccueil" class="row">
            <div class="col-6">
                <a href="index.php?action=accueil" class="firstA"><img src="" alt="logo"></a>
                <a href="#about" class="a">A propos</a>
                <a href="#services" class="a">Nos services</a>
            </div>
            <div class="col-6">
                <a href="index.php?action=signIn" class="btnConnexion">Se connecter</a>
            </div>
        </nav>
        <form action="" method="POST" id="formConnexion">
            <label for="login">Nom d'utilisateur : </label> <br>
            <input type="text" name="login" id="login" required> <br>
            <label for="pw">Mot de passe : </label> <br>
            <input type="password" name="password" id="pw" required> <br>
            <a href="index.php?action=createAccount">Créer un compte</a> <br>
            <input type="submit" value="Se connecter">
        </form>
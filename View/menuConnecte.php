    <link href="Public/css/menuConnecte.css" rel="stylesheet" />
</head>

<body>

    <!-- Menus !-->
    <div id="menuUser">
        <a href=""><img src="" alt=""></a>
        <a href="" onclick="changerMenu(sousMenuFormations, menuUser)">Formations</a>
        <a href="" onclick="changerMenu(sousMenuCompte, menuUser)">Compte</a>
    </div>

    <div id="menuAdmin" class="cacher">
        <a href=""><img src="" alt=""></a>
        <a href="" onclick="changerMenu(sousMenuFormations, menuAdmin)">Formations</a>
        <a href="" onclick="changerMenu(sousMenuCompte, menuAdmin)">Compte</a>
        <a href="" onclick="changerMenu(sousMenuAdmin, menuAdmin)">Admin</a>
    </div>

    <!-- Sous menus !-->
    <div id="sousMenuFormations" class="cacher">
        <a href="">Liste formations</a>
        <a href="">Inscription</a>
    </div>

    <div id="sousMenuCompte" class="cacher">
        <a href="">Mon compte</a>
        <a href="" class="btn btn-danger">Se déconnecter</a>
    </div>

    <div id="sousMenuAdmin" class="cacher">
        <a href="">Liste inscriptions</a>
        <a href="">Les formations</a>
    </div>


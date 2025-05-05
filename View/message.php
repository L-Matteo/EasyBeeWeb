    <link href="Public/css/message.css" rel="stylesheet" />
</head>
    
<body>
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
    <h2><?php echo $message; ?></h2>
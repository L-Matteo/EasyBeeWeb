    <link href="Public/css/formations.css" rel="stylesheet" />
</head>

<body>
    <?php require_once "menuConnecte.php"; ?>
    <form action="" class="d-flex">
        <section>
            <option value=""></option>
        </section>
    </form>
    <div id="listFormation">
        <?php
        foreach ($lesFormations as $uneFormation) { ?>
            <div class="formation">
                <h3><?php echo $uneFormation["nomFormation"]; ?></h3>
                <p> <?php echo $uneFormation["descriptionFormation"]; ?> </p>
                <a href="index.php?action=inscription">S'inscrire</a>
            </div>
        <?php
        } 
        ?>
    </div>
<?php include "generatueur.php"; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <title>Générateur de titres absurde</title>
    <meta name="description" content="LE générateur officiel du S.L.I.P.">
</head>
<body>
    <header>
        <h1>Générateur de titres de <abbr lang="en" title="First Person Shooter">F.P.S</abbr> du <abbr title="Syndicat des Logiciels Interactifs et Pédagogiques">S.L.I.P</abbr></h1>
    </header>
    <main>
        <section>
            <p class="titrefps"><?php echo genererTitre(); ?></p>
        </section>
    </main>
    <footer>
        <a href="http://weizu.chez.com" target="_blank">Chez Weizu ! <span class="visuallyhidden">(nouvel onglet)</span></a><br>
        <a href="https://youtu.be/zXZ4u9tVW8A?t=196" target="_blank">Si vous voulez savoir pourquoi ce générateur... <span class="visuallyhidden">(nouvel onglet)</span></a>
    </footer>
</body>
</html>

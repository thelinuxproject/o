<?php
$title = 'Acceuil';
require 'head.php';
require'header.php'; 
?>
<style type="text/css">
    @import "../css/style.css"
</style>
	<section >
        <h1 class="titre"><?= $title ?></h1>
        <article id="Bienvenue">
            <h2>Bienvenue</h2>
            <div class="article">
                <img class="img-text-right" src="../image/TVC-V-X.jpg" width="300px" align="right">
                <p>
                    Salut à vous et bienvenue sur OpenRTVC!<br> 
                    Vous, qui êtes en train de lire ce bref paragraphe, vous devez surment être un mordus d'astromodélisme ou de spacial!<br> Si ce n'est pas encore le cas, ça ne saurait tarder. Ici, on a créé et développé notre propre <a href="tvc.php">TVC </a>(Trust Vector Control).<br>
                    Et il est entièrement opensource, alors si vous voulez tester la correction de trajectoire de fusées amateures avec ce matériel de contrôle du vecteur poussée (TVC), ce site est fait pour vous!
                </p>
            </div>
        </article>
        <article id="apropos">
            <a href="apropos.php"><h2>Qu'est-ce qu'OpenRTVC ?</h2></a>
            <div class="article">
                <img class="img-text-right" src="../image/animation 2.mp4" width="300px" align="left">
                <p>
                    Le projet OpenRTV est open source. Toute reproduction est autorisée et même conseillée. Attention, toutes utilisations à des fins commerciales sont interdite. Toute fois si vous voulez nous soutenir vous pouvez faire un don juste <a href="#"> ici </a>ou encore acheter votre<a href="shop.php"> pack OpenRTVC </a>.
                </p>
            </div>
        </article>
    </section>

    <?php require'footer.php'; ?>

</body>
</html>

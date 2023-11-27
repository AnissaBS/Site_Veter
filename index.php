<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<div class="surback">    

    <div class="contenu">

        <div class="video">
            <video autoplay loop muted plays-inline class="clipvideo">
            <source src="Ressources/videoback.mp4" type="video/mp4">
            </video>

        <?php
            include_once('entete.php');
        ?>

            <div id="CC">
                <h1>CaninCâlin</h1>
                <p>Bienvenue chez votre vétérinaire préféré.</p>
                <a href="#categ" class="button">En savoir plus</a>
            </div>
        </div>

        <div class="pp" id="categ">
            <div class="pp-equipe">
                <h1>Qui est G_veter ?</h1>
                <a href="#"><img src="equipe.jpg" alt=""></a>
                
                <a href="#" class="btn-missions">Nos Missions</a>
            </div>
            <div class="pp-services">
                <h1>Nos Services</h1>
                <div class="serv" id="centrer">
                    <a href="#">Consultations</a>
                    <a href="#">Vaccination</a>
                </div>
                <div class="serv" id="centrer">
                    <a href="#">Chirurgie</a>
                    <a href="#">Hospitalisation</a>
                </div>
                <div class="serv" id="centrer">
                    <a href="#">Imagerie</a>
                    <a href="#">Ventes</a>
                </div>
            </div>
            <div class="pp-contact">
                <h1>Contactez-nous</h1>
                <a href="contact.html" class="btn-contact">Accès au formulaire de contact</a>
            </div>
        </div>
    </div>
</div>

<?php
include_once('foot.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="2"> -->
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" href="images/logoBar.png" type="image/png">
    <title>Formation d'animation touristique</title>
</head>

<body>
    <header>
        <article id="imgHeader"></article>
        <article id="headerSombre"></article>
        <article id="enTete">
            <section>
                <img src="images/logo.png" id="logo" alt="">
            </section>
            <section id="titre">
                <h1>ANIM <span>G</span> FORMATION</h1>
                <p>Formation à distance d'animateurs touristiques</p>
            </section>
        </article>

    </header>
    <?php
        include_once "includes/navbar.php"
    ?>

    <main>
        <article id="container_construction">
            <img src="images/logo.png" alt="">
            <p>En cours de construction...</p>
        </article>
    </main>
    <footer>
        <!-- <h1>NOS PARTENAIRES</h1>
        <article class="reseau" id="partenaire">
            <span>FRAM</span>
            <img src="images/fram.png" alt="fram">
            <span>MISSION LOCALE DE DOUAI</span>
            <img src="images/ML-douais.png" alt="MLDouais">
            <span>POLE EMPLOI</span>
            <img src="images/pole-emploi.png" alt="pole-emploi">
            
        </article> -->
        <h1>NOS RESEAUX</h1>
        <article class="reseau" id="social">
            <!-- <span>facebook</span> -->
            <a href="https://www.facebook.com/animgformation"><img src="images/facebook.png" alt="facebook"></a>
            <!-- <span>indeed</span> -->
            <img src="images/instagram.png" alt="instagram">
            <!-- <span>INSTAGRAM</span> -->
            <a href="http://www.LinkedIn.com/in/animgformation"><img src="images/indeed.png" alt="indeed"></a>
        </article>
    </footer>
    <script type="text/javascript" src="js/app.js"></script>
</body>

</html>
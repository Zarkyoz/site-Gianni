<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="2"> -->
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/styleContenu.css">
    <link rel="icon" href="images/logoBar.png" type="image/png">
    <title>Formation d'animation touristique</title>
</head>

<body>
    <?php
        include_once "includes/navbar.php"
    ?>
    <main>
        <article id="display_contenu">
            <section id="first_contenu">
                <h1 id="contenu_titre">FORMATION ANIMATEUR-TRICE LOISIRS TOURISME</h1>
                <article class="contenu_container">
                    <img src="images/contenue_1.png" alt="">
                    <p>FORMATION CERTIFIE QUALIOPI<br>
                        ET REALISEE PAR DES PROFESSIONNELS DE L'ANIMATION TOURISTIQUE</p>
                </article>

                <article class="contenu_container">
                    <img src="images/contenue_2.jpg" alt="">
                    <section id="second_contenu">

                        <p>ENSEIGNEMENT DE 200H SUR 6 SEMAINES <br>
                            5 AXES DE FORMATIONS</p>
                        <article id="contenu_axe">
                            <section class="axe">
                                <h2>SPORTS</h2>
                                <span>></span>
                                <article class="axe_text">
                                    <span>
                                        Aménagement des sites d'activité <br>
                                        Connaissance du matériel d'activité <br>
                                        Entretien, réparation et stockage du matériel d'activité <br>
                                        Organisation de tournoi, petite et forte fréquentation <br>
                                        Gestion de Communication sur Activité
                                    </span>
                                </article>
                            </section>
                            <section class="axe">
                                <h2>ARTS DE LA SCENE</h2>
                                <span>></span>
                                <article class="axe_text">
                                    <span>
                                        Technique de playback <br>
                                        Mîme humoristique <br>
                                        Numéro visuel <br>
                                        Organisation en coulisse
                                    </span>

                                </article>
                            </section>
                            <section class="axe">
                                <h2>INTERACTIVITE MICRO</h2>
                                <span>></span>
                                <article class="axe_text">
                                    <span>
                                        Techniques d'animation micro <br>
                                        Conception de soirées jeux <br>
                                        Conception de soirées dansantes <br>
                                        Conception de jeux musicaux
                                    </span>
                                </article>
                            </section>
                            <section class="axe">
                                <h2>INTEGRATION ENTREPRISES</h2>
                                <span>></span>
                                <article class="axe_text">
                                    <span>
                                        Module de recherche d'emploi et de préparation aux entretiens <br>
                                        Découvertes des différents services d'un village vacances <br>
                                        Relation de travail avec la hiérarchie <br>
                                        Module sur l'accueil et les relations avec les clients <br>
                                        Relation de travail avec une équipe d'animation
                                    </span>
                                </article>
                            </section>
                            <section class="axe">
                                <h2>HYGIENE</h2>
                                <span>></span>
                                <article class="axe_text">
                                    <span>
                                        Entretenir les tenues professionnelles <br>
                                        Entretenir le logement de fonction <br>
                                        Présentation face client <br>
                                    </span>
                                </article>
                            </section>
                        </article>
                    </section>
                </article>
            </section>


            <section id="third_contenu">
                <article class="contenu_container">

                    <img src="images/contenue_3.jpg" alt="">
                    <p> NOTRE FORMATION SE DEROULE EN VISIOCONFERENCE <br>
                        UN LIEN PERSONNEL VOUS EST ATTRIBUE <br>
                        VOUS REJOINDREZ UN GROUPE DE 8 ELEVES MAXIMUM PAR SESSION <br>
                        ET UN DE NOS 2 FORMATEURS VOUS SERA ATTITRE <br>
                        <br>
                        VOUS DEVEZ ÊTRE MUNI D'UN ORDINATEUR, D'UNE WEBCAM, D'UN MICRO FONCTIONNEL, ET BIEN SUR, UNE
                        CONNEXION INTERNET ADSL AU MINIMUM.
                    </p>
                </article>

                <article class="contenu_container" id="fourth_contenu">

                    <img src="images/contenue_4.jpg" alt="">
                    <section id="container_button" id="poste_question">
                        <a href="tarif.php" class="button_direction">FINANCEMENT</a>
                        <a href="recrutement.php" class="button_direction">RECRUTEMENT</a>
                        <a href="sessions.php" class="button_direction">DATES DES SESSIONS</a>
                        <a href="qui.php" class="button_direction">NOUS CONTACTER</a>
                    </section>
                </article>
            </section>






        </article>

    </main>
    <footer>
    <?php
            include_once "includes/footer.php"
        ?>
    </footer>
    <!-- <script src="app.js"></script> -->
    <!-- <script type="text/javascript" src="calendrier.js"></script> -->
    <script type="text/javascript">

        let axe = document.getElementsByClassName('axe')
        let axeText = document.getElementsByClassName('axe_text')

        for (let e = 0; e < axe.length; e++) {
            axe[e].children[1].style.transform = "rotate(90deg) scale(1,2)"
            axe[e].children[1].style.position = "absolute"
            axe[e].children[1].style.bottom = 0 + "px"
            // switch (e) {
            //     case 3:
            //         axe[e].children[1].style.bottom = -20 + "px"
                    
            //         break;
            
            //         case 4:
            //             axe[e].children[1].style.bottom = -20 + "px"
                    
            //         break;
            //             default:
            //                 break;
            //             }
        }

        for (let i = 0; i < axe.length; i++) {
            axeText[i].style.top = axe[i].offsetHeight + "px"
            axeText[i].style.width = axe[i].offsetWidth - 1 + "px"
            axe[i].addEventListener('mouseenter', () => {
                axe[i].style.transform = "scale(1.7)"
                axe[i].style.zIndex = 2
                axeText[i].style.display = "flex"
                // axeText[i].style.border = "solid white"
                axe[i].style.borderRadius = "1em 1em 0 0"
            })

            axe[i].addEventListener('mouseleave', () => {
                axe[i].style.transform = "scale(1)"
                axe[i].style.zIndex = 1
                axeText[i].style.display = "none"
                axe[i].style.borderRadius = "0em"

            })
        }




    </script>
    <script type="text/javascript" src="js/app.js"></script>
</body>

</html>
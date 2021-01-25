<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="2"> -->
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/styleAccueil.css">
    <link rel="icon" href="images/logoBar.png" type="image/png">
    <title>Formation d'animation touristique</title>
</head>

<body>
    <?php
        include_once "includes/navbar.php"
    ?>
    <main>
        <!-- Contenu de la page -->
        <article id="display_accueil_un">
            <img src="images/accueil_1.png" alt="">
            <h1>VOTRE CARRIERE D'ANIMATEUR <br> COMMENCE ICI</h1>
        </article>

        <article id="display_accueil_deux">
            <section class="accueil_question">
                <article class="accueil_question_text">
                    <h2>Vous hésitez à vous inscrire ou vous souhaitez être informés ?</h2>
                    <ul>
                        <li>Nous vous proposons pas moins de 6 réunions d'information en visioconférence tout au long de
                            l'année</li>
                    </ul>
                </article>
            </section>

            <section class="accueil_question">
                <article class="accueil_question_text">
                    <h2>Vous souhaitez trouver un emploi rapidement ?</h2>
                    <ul>
                        <li>Notre formation est rapide et grâce à notre réseau de partenaires employeurs vous optimisez
                            vos chances d'accéder directement à un emploi</li>
                    </ul>
                </article>
            </section>

            <section class="accueil_question">
                <article class="accueil_question_text">
                    <h2>Vous désirez être qualifié, certifié et performant ?</h2>
                    <ul>
                        <li>Nous vous formons aux différentes missions essentielles : Sports, animation micro, arts de
                            la
                            scène, accueil client</li>
                        <li>Notre formation est certifié Qualiopi</li>
                    </ul>
                </article>
            </section>

            <section class="accueil_question">
                <article class="accueil_question_text">
                    <h2>Vous recherchez une formation qui vous reconnaisse ?</h2>
                    <ul>
                        <li>Nos promotions ne dépassent pas 8 élèves pour permettre au formateur de répondre à vos
                            besoins</li>
                        <li>3 bilans avec le formateur sont prévus durant votre 1er contrat d'animateur</li>
                    </ul>
                </article>
            </section>

            <section class="accueil_question">
                <article class="accueil_question_text">
                    <h2>Vous êtes perdus ou hésitez sur votre avenir dans le métier après votre première saison ?</h2>
                    <ul>
                        <li>Vos formateurs organisent des rencontres pour vous accompagner dans vos choix de perspective
                            d'avenir</li>
                    </ul>
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

        // récupération des sections class accueil_question
        let accueilQuestion = document.getElementsByClassName('accueil_question')
        let accueilQuestiontext = document.getElementsByClassName('accueil_question_text')
        let body = document.querySelector('body')

        // variable on/off pour chaque acceuilQuestion

        // lorsque l'écran tourne, la page se recharge pour que la mise en page soit bien 
        window.addEventListener('orientationchange', function () { document.location.reload() })

        /* La largeur minimum de l'affichage est 550 px inclus */
        if (window.matchMedia("(min-width: 550px)").matches) {


            let accueilQuestionUn = 0
            let accueilQuestionDeux = 0
            let accueilQuestionTrois = 0
            let accueilQuestionQuatre = 0
            let accueilQuestionCinq = 0

            document.addEventListener('scroll', () => {

                for (let i = 0; i < accueilQuestion.length; i++) {
                    if (window.scrollY >= accueilQuestion[i].offsetTop - ((window.innerHeight / 2) + (window.innerHeight / 3))) {
                        // function pour le défilement des questions

                        function defilementVersDroite(position, opac, text, marge) { //de gauche

                            let interval = setInterval(function () {
                                if (position <= 5) {
                                    text.style.opacity = opac
                                    opac += 0.1
                                    if (opac >= 1) {
                                        clearInterval(interval)
                                    }
                                } else {
                                    accueilQuestion[i].style.marginRight = position + '%'
                                    position -= 5
                                }
                            }, 50)
                        }

                        function defilementVersGauche(position, opac, text, marge) { // de droite

                            let interval = setInterval(function () {
                                if (position <= 5) {
                                    text.style.opacity = opac
                                    opac += 0.1
                                    if (opac >= 1) {
                                        clearInterval(interval)
                                    }
                                } else {
                                    accueilQuestion[i].style.marginLeft = position + '%'
                                    position -= 5
                                }
                            }, 40)
                        }

                        switch (i) {
                            case 0:
                                let positionUn = 100
                                let opacUn = 0
                                if (accueilQuestionUn == 0) {
                                    defilementVersDroite(positionUn, opacUn, accueilQuestiontext[i],)
                                    accueilQuestionUn = 1
                                }
                                break;

                            case 1:
                                let positionDeux = 100
                                let opacDeux = 0
                                if (accueilQuestionDeux == 0) {
                                    defilementVersGauche(positionDeux, opacDeux, accueilQuestiontext[i])
                                    accueilQuestionDeux = 1
                                }
                                break;
                            case 2:
                                let positionTrois = 100
                                let opacTrois = 0
                                if (accueilQuestionTrois == 0) {
                                    defilementVersDroite(positionTrois, opacTrois, accueilQuestiontext[i],)
                                    accueilQuestionTrois = 1
                                }
                                break;
                            case 3:
                                let positionQuatre = 100
                                let opacQuatre = 0
                                if (accueilQuestionQuatre == 0) {
                                    defilementVersGauche(positionQuatre, opacQuatre, accueilQuestiontext[i])
                                    accueilQuestionQuatre = 1
                                }
                                break;

                            case 4:
                                let positionCinq = 100
                                let opacCinq = 0
                                if (accueilQuestionCinq == 0) {
                                    defilementVersDroite(positionCinq, opacCinq, accueilQuestiontext[i],)
                                    accueilQuestionCinq = 1
                                }
                                break;

                            default:
                                break;
                        }
                    }
                }
            })
        } else {
            /* L'affichage est inférieur à 600px de large */
        }
    </script>
    <script type="text/javascript" src="js/app.js"></script>
</body>

</html>
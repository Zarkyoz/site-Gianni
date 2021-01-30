<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="2"> -->
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/styleRecrutement.css">
    <link rel="icon" href="images/logoBar.png" type="image/png">
    <title>Formation d'animation touristique</title>
</head>

<body>
    <?php
        include_once "includes/navbar.php"
    ?>
    <main>
        <article id="display_recrutement">
            <h1 id="display_titre">FICHE DE RENSEIGNEMENT</h1>
                <form action="function/envoi_formulaire_mail.php" method="post" id="formulaire_de_recrutement">
                    <section id="container_recrutement_un">
                        <h2>PAGE 1 : VOS INFORMATIONS</h2>
                            <article>
                                <label for="nomPerso">NOM *</label>
                                    <input type="text" name="infoNom" id="nomPerso" required placeholder="">
                                <label for="prenomPerso">Prenom *</label>
                                    <input type="text" name="infoPrenom" id="prenomPerso" required placeholder="">                  
                            </article>
                            <article>
                                <label for="adressePerso">Adresse actuelle *</label>
                                    <input type="text" name="infoAdresse" id="adressePerso" required placeholder="">
                                <label for="postalPerso">Code postal</label>
                                    <input type="text" name="infoPostal" id="postalPerso" required placeholder="">             
                            </article>
                            <article>
                                <label for="dateNaissancePerso">Date de naissance *</label>
                                    <input type="date" name="infoDateNaissance" id="dateNaissancePerso" required>
                                <label for="lieuNaissancePerso">Lieu de naissance *</label>
                                    <input type="text" name="infoLieuNaissance" id="lieuNaissancePerso" required>
                                <label for="postalNaissancePerso">CP ville de naissance *</label>
                                    <input type="text" name="infoPostalNaissance" id="postalNaissancePerso" required>
                            </article>
                            <article>
                                <label for="fixeTelephonePerso">Téléphone</label>
                                    <input type="tel" name="infoFixeTelephone" id="fixeTelephonePerso">
                                <label for="portableTelephonePerso">Portable *</label>
                                    <input type="tel" name="infoPortableTelephone" id="portableTelephonePerso" required>
                                <label for="emailPerso">E-mail *</label>
                                    <input type="email" name="infoEmail" id="emailPerso" required>
                            </article>
                            <article>
                                <label for="">Êtes-vous ...</label>
                                    <input type="radio" name="situationFamiliale" id="">En couple
                                    <input type="radio" name="situationFamiliale" id="">Célibataire
                                    <input type="radio" name="situationFamiliale" id="">Marié
                                    <input type="radio" name="situationFamiliale" id="">Divorcé
                            </article>



                        </section>
                        <section id="container_recrutement_deux">
                        <label for="emailPerso">E-mail *</label>
                                    <input type="email" name="infoEmail" id="emailPerso" required>
                                    <input type="submit" id="btn_submit" value="Submit">
                                </section>
                            </form>
                            <!-- Mettre le bouton à l'exterieur pour faire un changement de page et change le bouton qui était suivant par précédent-->
                            <section id="display_btn">
                                <button id="btn_suivant">Suivant</button>
                            </section>
        </article>
    </main>
    <footer>
        <?php
            include_once "includes/footer.php"
        ?>
    </footer>
    <script type="text/javascript" src="js/app.js"></script>
    <!-- <script type="text/javascript" src="calendrier.js"></script> -->
    <script type="text/javascript">
        // Récupération de l'id du display des deux bouton
        let displayBtn = document.getElementById('display_btn')
        let btnSuivant = document.getElementById('btn_suivant')
        // Création du bouton Précédent qui viendra à la place du bouton Suivant
        let btnPrecedent = document.createElement('button')
        btnPrecedent.id = 'btn_precedent'
        btnPrecedent.textContent = 'Précédent'
        let btnSubmit = document.getElementById('btn_submit')

        let containerUn = document.getElementById('container_recrutement_un')
        let containerDeux = document.getElementById('container_recrutement_deux')
        btnSuivant.addEventListener('click', ()=>{
            containerUn.style.display = "none"
            containerDeux.style.display = "flex"
            displayBtn.replaceChild(btnPrecedent, btnSuivant)

        }) 
        btnPrecedent.addEventListener('click', ()=>{
            containerDeux.style.display = "none"
            containerUn.style.display = "flex"
            displayBtn.replaceChild(btnSuivant, btnPrecedent)
        }) 
        btnSubmit.addEventListener('click', ()=>{
            // document.getElementById('formulaire_de_recrutement').submit()
        }) 
    </script>
</body>

</html>
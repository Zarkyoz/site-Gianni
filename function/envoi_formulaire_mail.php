<?php
// echo "Le nom du candidat est : ". $_POST['infoNom'] ." et son prenom est :". $_POST['infoPrenom'];
// Changer le format de la date de naissance en français/ voir mettre en lettre le mois avec tableau JS ou PHP je ne sais plus si 
// Y-m-d
echo $_POST['infoDateNaissance'] ."<br>";
setlocale(LC_ALL, 'fr_FR', 'fra_FRA');
echo utf8_encode(strftime('%A %d %B %Y', strtotime($_POST['infoDateNaissance']))) ."<br>";



$dateNaissance = new DateTime($_POST['infoDateNaissance']);
echo "ça date de naissance \n est le :". $dateNaissance->format('d/m/Y');
// $tableau = [
//     "chat", "chien"
// ];
// echo $tableau[1];
?>
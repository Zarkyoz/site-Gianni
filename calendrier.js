let affichageCalendrier = document.querySelector('#affichageCalendrier')

let jour = ["lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche"]

class Calendrier {
    constructor(leMois, nombreDeJour) {
        this.leMois = leMois;
        this.nombreDeJour = nombreDeJour;
    }
}
const janvier = new Calendrier("Janvier", 31)
const fevrier = new Calendrier("Fevrier", 28)
const mars = new Calendrier("Mars", 31)
const avril = new Calendrier("Avril", 30)
const mai = new Calendrier("Mai", 31)
const juin = new Calendrier("Juin", 30)
const juillet = new Calendrier("Juillet", 31)
const aout = new Calendrier("Août", 31)
const septembre = new Calendrier("Septembre", 30)
const octobre = new Calendrier("Octobre", 31)
const novembre = new Calendrier("Novembre", 30)
const decembre = new Calendrier("Décembre", 31)

const newCalendrier = new Array(janvier, fevrier, mars, avril, mai, juin, juillet, aout, septembre, octobre, novembre, decembre)

let dateDeBase = 2020 // année de référence
let dateToday = new Date() // date du jour
let annee = date.getFullYear() // l'année du moment 
let nbr = 0 // chiffre de repère
// tant que date n'est pas égale à 2020 + 4 alors date = 2020 + 4 et ainsi de suite jusqu'à 2060
while (dateDeBase != annee && dateDeBase < 2065) {
    dateBase+=4
    nbr++
}
if(nbr <= 10 ){
    fevrier.nombreDeJour = 29
}


for (let mois of newCalendrier) {
    affichageCalendrier.innerHTML += "ceci est le mois de : " + mois.leMois + " et il y a " + mois.nombreDeJour + " jours dedans cette année.<br>"
}


// calendrier.textContent = jour[2]
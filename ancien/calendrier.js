let affichageCalendrier = document.querySelector('#affichageCalendrier')

let jour = ["lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche"]

class Calendrier {
    constructor(leMois, nombreDeJour, numeroAnnee) {
        this.leMois = leMois;
        this.nombreDeJour = nombreDeJour;
        this.numeroAnnee = numeroAnnee
    }
}
const janvier = new Calendrier("Janvier", 31)
const fevrier = new Calendrier("Février", 28)
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


let dateDeBase = 2020 // année de référence
let dateToday = new Date() // date du jour
let annee = dateToday.getFullYear() // l'année du moment 
let nbr = 0 // chiffre de repère


// let tableDesMois = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"]
let tableDesMois = [janvier, fevrier, mars, avril, mai, juin, juillet, aout, septembre, octobre, novembre, decembre]
let leMoisDuMoment = tableDesMois[dateToday.getMonth()]
console.log(leMoisDuMoment)
while (dateDeBase != annee && dateDeBase < 2065) { // calcul pour savoir si l'année est bissextile ou non
    dateDeBase += 4
    nbr++
}
if (nbr <= 10) { // si l'année est bissextile alors fevrier aura 29 jours
    fevrier.nombreDeJour = 29
}

// mois de l'année en cours + année
let tableAnneeEnCours = tableDesMois.splice(dateToday.getMonth(), tableDesMois.length)
for (t1 in tableAnneeEnCours) {
    tableAnneeEnCours[t1].numeroAnnee = dateToday.getFullYear()

}
// mois de l'année suivante + année + 1
let tableAnneeSuivante = tableDesMois.splice(0, 12)
for (t2 in tableAnneeSuivante) {
    tableAnneeSuivante[t2].numeroAnnee = (dateToday.getFullYear() + 1)
}
console.log(tableAnneeSuivante)

// new Array année en cours + année suivante
const newCalendrier = tableAnneeEnCours.concat(tableAnneeSuivante)
console.log(newCalendrier)
console.log(newCalendrier[0])


console.log(newCalendrier[0])

for (let mois of newCalendrier) {
    let pageParMois = document.createElement('article')
    affichageCalendrier.appendChild(pageParMois)
    let moisString = document.createElement('section')
    pageParMois.appendChild(moisString)
    moisString.classList = "moisString"
    moisString.innerHTML += mois.leMois + " " + mois.numeroAnnee + "<br>"
    let cadreDesJours = document.createElement('section')
    pageParMois.appendChild(cadreDesJours)
    for (let i = 1; i <= mois.nombreDeJour; i++) {
        let jourDuMois = document.createElement('article')
        cadreDesJours.appendChild(jourDuMois)
        cadreDesJours.classList = "cadreDesJours"
        jourDuMois.innerHTML += i + " "
        jourDuMois.classList = "jourDuMois"
    }
    pageParMois.innerHTML += "<br>"
    pageParMois.classList = "pageParMois"
}




let pageDuMois = document.querySelectorAll('.pageParMois')
let StringDuMois = document.querySelectorAll('.moisString')
let calendrierPrecedent = document.querySelectorAll('.flecheCalendrier')[0]
let calendrierSuivant = document.querySelectorAll('.flecheCalendrier')[1]
let numeroPageActuelle = 0


calendrierPrecedent.addEventListener('click', () => { // Bouton du calendrier gauche

    if (numeroPageActuelle > 0) {
        for (let numPageCalendrier = 0; numPageCalendrier < newCalendrier.length; numPageCalendrier++) {
            pageDuMois[numPageCalendrier].style.display = "none"
        }
        numeroPageActuelle--
        pageDuMois[numeroPageActuelle].style.display = "flex"
        console.log(numeroPageActuelle)
    }
})
calendrierPrecedent.addEventListener('dblclick', (e) => {
    console.log('yop')
    e.preventDefault()
})
calendrierSuivant.addEventListener('click', () => { // Bouton du calendrier droit
    if (numeroPageActuelle < newCalendrier.length - 1) {

        for (let numPageCalendrier = 0; numPageCalendrier < newCalendrier.length; numPageCalendrier++) {
            pageDuMois[numPageCalendrier].style.display = "none"
        }
        numeroPageActuelle++
        pageDuMois[numeroPageActuelle].style.display = "flex"
        console.log(numeroPageActuelle)
    }
})
pageDuMois[0].style.display = "flex"
StringDuMois[0].style.color = "rgb(255, 173, 0)"
pageDuMois[0].children[1].children[dateToday.getDate() - 1].style.color = "rgb(255, 173, 0)"
pageDuMois[0].children[1].children[dateToday.getDate() - 1].style.border = "solid rgb(255, 173, 0)"
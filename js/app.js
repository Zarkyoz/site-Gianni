// // document.cookie = "username=John Doe; expires=Thu, 18 Dec 2013 12:00:00 UTC; path=/";
// // Cookie
// let cookieChecked = document.cookie.substring(0, document.cookie.indexOf("="))
// let cookieCheckedDeux = ""
// if (cookieChecked != "") {
//         cookieCheckedDeux = decodeURIComponent(document.cookie.substring(document.cookie.indexOf("=")+1))
// }

// if (cookieCheckedDeux != "") {

// } else { // fenetre de cookie
//         let body = document.querySelector('body')
//         let cookieDisplay = document.createElement('article')
//         body.appendChild(cookieDisplay)
//         cookieDisplay.id = "cookie_display"

//         let fenetreCookie = document.createElement('section')
//         cookieDisplay.appendChild(fenetreCookie)
//         fenetreCookie.id = "fenetre_cookie"
//         let textCookie = document.createElement('p')
//         let buttonCookie = document.createElement('article')
//         fenetreCookie.appendChild(textCookie)
//         textCookie.innerHTML = "je suis un cookie"
//         fenetreCookie.appendChild(buttonCookie)
//         let buttonCookieValidation = document.createElement('button')
//         let buttonCookieRefus = document.createElement('button')
//         buttonCookie.appendChild(buttonCookieValidation)
//         buttonCookieValidation.textContent = "accepter"
//         buttonCookie.appendChild(buttonCookieRefus)
//         buttonCookieRefus.textContent = "refuser"
//         // document.cookie = cookieChecked
//         // S'il accepte le cookie, enregistre le cookie et la question n'ai plus demander à la prochaine venu
//         buttonCookieValidation.addEventListener('click', () => {
//                 // document.cookie = "username=John Doe; expires=Thu, 18 Dec 2021 12:00:00 UTC; path=/";
//                 console.log('validation')
//                 function setCookie(name, value = "&§", expires = "", path = "", domain = "", secure = 0) {
//                         document.cookie = name + "=" + encodeURIComponent(value) +
//                         ((expires == "") ? "" : (";expires=" + expires.toUTCString())) +
//                         ((path == "") ? "" : (";path=" + path)) +
//                         ((secure == true) ? ";secure" : "")
//                 }
//                 // La ligne en commentaire juste en dessous permet d'effacer le cookie
//                 // let dt1An = new Date("2000-01-01")
//                 let dt1An = new Date()
//                 dt1An.setTime(dt1An.getTime() + (365 * 24 * 3600 * 1000))
//                 // durée de vie 1 an
//                 let today = new Date()
//                 console.log(dt1An + "  " + today)
//                 setCookie("firstVisiteCookie", today.getTime(), dt1An)
//                 body.removeChild(cookieDisplay)

//         })
//         // S'il refuse le cookie, enlève la fenêtre et repose la question la prochaine fois qu'il revient
//         buttonCookieRefus.addEventListener('click', () => {
//                 body.removeChild(cookieDisplay)
//         })
// }




// var date = new Date()
// var newdate = date.toUTCString()
// console.log(newdate)


// barre de navigation quand l'ecran est plus petit...
let buttonNavigation = document.getElementById('button_navigation')
let navBarre = document.getElementById('rubrique')
let navActive = false

buttonNavigation.addEventListener('click', () => {
        if (navActive == false) {
                navActive = true
                for (let bn = 0; bn < navBarre.children.length; bn++) {
                        // buttonNavigation.children[0].style.transform = "rotate(180deg) scale(2,0.5)"
                        navBarre.children[bn].style.display = "flex"
                }
        } else if (navActive == true) {
                navActive = false
                for (let bn = 0; bn < navBarre.children.length; bn++) {
                        navBarre.children[bn].style.display = "none"
                }
                navBarre.children[0].style.display = "flex"
                // buttonNavigation.children[0].style.transform = "rotate(0deg) scale(2,0.5)"
        }
})







//scrolling de l'header

// let scrolleur = document.getElementById('scroll')
// let posScrolleur = 0
// scrolleur.children[1].style.transform = "rotate(90deg) scale(0.5, 3) translate(-50%,5%)"
// window.onload = function(){
//     setTimeout(() => {
//         if(window.scrollY < window.innerHeight * 0.5){
//             scrolleur.style.display = "flex"
//             posScrolleur = 1                   
//         }
//         scrolleur.style.top = (window.innerHeight - (scrolleur.offsetHeight * 1.5)) + 'px' 
//     }, 3000);

// }

// window.addEventListener('scroll', ()=>{
//     if(posScrolleur == 1 && (window.scrollY > window.innerHeight * 0.5)){
//         scrolleur.style.display = "none"
//         posScrolleur = 0
//     }
// })
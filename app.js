let header = document.querySelector('header')
var btn_axe_f = document.getElementsByClassName('btnAxeF');
var text_axe_f = document.getElementsByClassName('axeFormation')


activeBtnAxeFormation(btn_axe_f[0], btn_axe_f[1], btn_axe_f[2], text_axe_f[0], text_axe_f[1], text_axe_f[2])
activeBtnAxeFormation(btn_axe_f[1], btn_axe_f[0], btn_axe_f[2], text_axe_f[1], text_axe_f[0], text_axe_f[2])
activeBtnAxeFormation(btn_axe_f[2], btn_axe_f[0], btn_axe_f[1], text_axe_f[2], text_axe_f[0], text_axe_f[1])



function activeBtnAxeFormation(btnUn, btnDeux, btnTrois, textUn, textDeux, textTrois) {
    btnUn.addEventListener('click', () => {
        btnUn.style.color =" rgb(255, 173, 0)"
        btnUn.style.border = "solid  rgb(255, 173, 0)"
        textUn.style.display = "flex"

        btnDeux.style.color ="rgb(5, 215, 251)"
        btnDeux.style.border = "solid rgb(5, 215, 251)"
        textDeux.style.display = "none"

        btnTrois.style.color ="rgb(5, 215, 251)"
        btnTrois.style.border = "solid rgb(5, 215, 251)"
        textTrois.style.display = "none"
    })

}
let rubrique = document.querySelector('#rubrique')
for( let t1 = 0; t1<rubrique.childElementCount; t1++){
    let t2 = rubrique.children[t1].children[0]
    document.addEventListener('scroll', ()=>{
        if(rubrique.offsetTop > header.offsetHeight){
            t2.style.fontSize = '15px'
            t2.style.backgroundColor = 'rgb(71, 71, 71)'
            t2.style.padding = '0px'
            rubrique.style.height = '30px'
        }else{
            t2.style.fontSize = '25px'
            t2.style.backgroundColor = 'rgb(25, 25, 25)'
            t2.style.padding = '30px'
            rubrique.style.height = '50px'  
        }
    })
}
if(rubrique.offsetTop < 700){
    console.log('top')
}else{
    console.log('bottom')
}
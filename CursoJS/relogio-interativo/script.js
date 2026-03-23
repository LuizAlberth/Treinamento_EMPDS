function carregar(){
    var msg = window.document.getElementById('msg')
    var img = window.document.getElementById('imagem')
    var data = new Date()
    var hora = data.getHours()
    //var hora = 13
    msg.innerHTML = `<strong>Agora são ${hora} horas.</strong>`

    if(hora>=0 && hora<12) {
        img.src='manha-redonda.jpg'
       document.body.style.background = '#c7ba0688'
    } else if (hora >= 12 && hora<18) {
        img.src='tarde-redonda.jpg'
         document.body.style.background = '#FF8C00'
    }else{
        img.src='noite-redonda.jpg'
         document.body.style.background = '#363636'
    }
}
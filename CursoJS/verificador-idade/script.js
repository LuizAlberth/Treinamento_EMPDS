function verificar(){
    var data = new Date()
    var ano = data.getFullYear()
    var fAno = document.getElementById('nasc')
    var res = document.getElementById('res')
    if(fAno.value.length == 0 || fAno.value>ano){
        window.alert('[ERRO] Verifique seus dados e tente novamente')
    }else{
       var fsex = document.getElementsByName('radsex')
       var idade = ano- Number(fAno.value)
       var genero = ''
       var img = document.createElement('img')
       img.setAttribute('id','foto')
       if(fsex[0].checked){
        genero = 'homem'
        if(idade>=0 && idade<=10){
            img.setAttribute('src','homem-crianca.jpg')
        }else if(idade<21){
            img.setAttribute('src','homem-jovem.jpg')
        }else if(idade<60){
            img.setAttribute('src','homem-adulto.jpg')
        }else{
            img.setAttribute('src','homem-idoso.jpg')
        }
        }else if(fsex[1].checked){
        genero = 'mulher'
        if(idade>=0 && idade<=10){
            img.setAttribute('src','mulher-crianca.jpg')
        }else if(idade<21){
            img.setAttribute('src','mulher-jovem.jpg')
        }else if(idade<60){
            img.setAttribute('src','mulher-adulta.jpg')
        }else{
            img.setAttribute('src','mulher-idosa.jpg')
        }
       }
       res.innerHTML = `Detectamos ${genero} com ${idade} anos`
       res.appendChild(img)
    }
}
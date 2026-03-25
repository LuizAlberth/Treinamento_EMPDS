function tabuada(){
    var txtn = document.getElementById('valor')
    var valor = Number(txtn.value)
    var res = document.getElementById('res')

    var conteudo = `A tabuada de ${valor} é: <br><br>`

    if(valor == 0){
        alert("Por favor coloque um número")
    }else{
         for(var a = 1; a<=10;a++){
        var val = valor*a
        conteudo += `${valor} x ${a} = ${val} <br>`
    }
    res.innerHTML = conteudo
    }

}
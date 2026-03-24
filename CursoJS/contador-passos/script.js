function contar(){
    var txtin = document.getElementById('inicio')
    var inicio = Number(txtin.value)
    var txtfim = document.getElementById('fim')
    var fim = Number(txtfim.value)
    var txtpas = document.getElementById('passo')
    var passo = Number(txtpas.value)
    var res = document.getElementById('res')

    res.innerHTML = "Contando: "

    while(inicio<=fim){
        res.innerHTML +=`${inicio} \u{1F449}`
        inicio += passo

    }

    res.innerHTML += ` \u{1F3C1}`
    
}
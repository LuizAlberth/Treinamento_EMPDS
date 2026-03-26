var resposta = ""
var valores = []

function adicionar(){
    var txtn = document.getElementById('numero')
    var valor = Number(txtn.value)
    var resultados = document.getElementById('valores')
    var res = document.getElementById('res')
    var dados = ''

    valores.push(valor)
    resposta += `O número ${valor} foi adicionado <br>`;

    resultados.innerHTML = resposta

    var dados = ''
    var soma = 0

    for(var a = 0; a < valores.length; a++){
        soma += valores[a]
    }

    dados = `A quantidade de valores inseridos é ${valores.length} <br>
    O maior valor é ${Math.max(...valores)}<br>
    O menor valor é ${Math.min(...valores)}<br>
    A soma dos valores é ${soma}<br>
    E a média dos valores é ${soma/valores.length}`

    res.innerHTML = dados


}

function finalizar(){
    resposta = ""
    valores = []

    document.getElementById('valores').innerHTML = "Aguardando números...";
    document.getElementById('res').innerHTML = "Resultado";

    var txtn = document.getElementById('numero');
    txtn.value = '';
}
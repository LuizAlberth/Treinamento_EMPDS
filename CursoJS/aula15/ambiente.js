let num = [3,2,1]

num.push(4)
num[4] = 5



console.log(`O vetor é ${num}`)
console.log(`O tamaho do vetor é ${num.length}`)
console.log(`O vetor em ordem crescente é ${num.sort()}`)

for(let posicao = 0;posicao<num.length;posicao++){
    console.log(num[posicao])
}

for(let pos in num){
    console.log(num[pos])
}
    

let pos = num.indexOf(3)
console.log(pos)
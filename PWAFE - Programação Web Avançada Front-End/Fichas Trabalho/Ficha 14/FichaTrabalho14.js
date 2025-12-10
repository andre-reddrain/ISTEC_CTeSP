/* Ficha de Trabalho 14
Criar funções utilizando a sintaxe das arrow functions para manipular arrays. O objetivo é aplicar funções como .map(), .filter() e .reduce()
Tarefas:
    1. Criar uma função quadradoDosNumeros que recebe um array de números como parâmetros e devolve um novo array com o quadrado de cada número.
    2. Criar uma função numerosMaioresQueDez que recebe um array de números e devolve um novo array contendo apenas os números maiores que 10.
    3. Criar uma função somaDosNumeros que recebe um array de números e devolve a soma de todos os números.
    4. Criar uma função numerosParesAoQuadrado que recebe um array de números e devolve um novo array com o quadrado de todos os números pares.
*/

function quadradoDosNumeros(array) {
    return array.map((elem => elem * elem))
}

function numerosMaioresQueDez(array) {
    return array.filter((elem => elem > 10))
}

function somaDosNumeros(array) {
    return array.reduce((acc, currentValue) => acc + currentValue, 0)
}

function numerosParesAoQuadrado(array) {
    return array.filter((elem => elem % 2 == 0)).map((elem => elem * elem))
}

var array = [1,2,3,4,5,6,7,8,9,10]
console.log(quadradoDosNumeros(array))
console.log(numerosMaioresQueDez(array))
console.log(somaDosNumeros(array))
console.log(numerosParesAoQuadrado(array))
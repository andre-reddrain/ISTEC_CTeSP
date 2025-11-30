/* Ficha de trabalho 12
No VSCode, o programa definirá um array de números e usará uma função de seta para calcular e exibir a soma de todos os números do array.
*/

const numeros = []
const max = 10

// Preenchimento do array
for (let i = 0; i < max; i++) {
    numeros.push(getRandomInt(max))
}

var soma = numeros.reduce((total, numero) => total + numero, 0)

console.log("Números: " + [...numeros])
console.log(`Soma dos números: ${soma}`)

/**
 * Gera um int de 0 até max.
 * @param {*} max Número máximo
 * @returns Int random
 */
function getRandomInt(max) {
  return Math.floor(Math.random() * max);
}
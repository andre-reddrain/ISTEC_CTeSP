/* Ficha de trabalho 13
No VSCode, o programa definirá um array de números e usará uma função de seta para filtrar e retornar apenas os números pares desse array.
Pode usar o método filter.
*/
const numeros = []
const max = 10

// Preenchimento do array
for (let i = 0; i < max; i++) {
    numeros.push(getRandomInt(max))
}

var pares = numeros.filter((numero) => numero % 2 == 0)

console.log("Números: " + [...numeros])
console.log(`Números pares: ${[...pares]}`)

/**
 * Gera um int de 0 até max.
 * @param {*} max Número máximo
 * @returns Int random
 */
function getRandomInt(max) {
  return Math.floor(Math.random() * max);
}
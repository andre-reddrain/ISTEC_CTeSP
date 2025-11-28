/* Ficha de Trabalho 8
No VSCode, crie um programa que solicita os números ao utilizador até que um número negativo seja inserido.
O programa deve armazenar os números num Set e exibir os números únicos no final.
Pode utilizar funções.
*/
import { createInterface } from "readline";

const rl = createInterface({
    input: process.stdin,
    output: process.stdout,
});

const numeros = new Set();
let num;

do {
    num = await pedirNumero(rl);
    if (isNaN(num)) {
        console.log("Não é um número")
        num = 0
    } else if (num >= 0) {
        numeros.add(num);
    }
} while (num >= 0);

rl.close();

console.log("\nNúmeros únicos inseridos:");
console.log([...numeros]);

/**
 * Recolhe o nº da terminal, introduzido pelo utilizador
 * @param {*} rl Readline interface
 * @returns Promise com o input do utilizador
 */
function pedirNumero(rl) {
    return new Promise((resolve) => {
        rl.question("Insira um número (negativo para terminar): ", (input) => {
            resolve(input);
        });
    });
}
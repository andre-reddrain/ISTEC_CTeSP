/* Ficha de trabalho 9
No VSCode, criar um programa que solicita nomes e idades ao utilizador até que um nome vazio seja inserido.
O programa deve armazenar os pares de nome e idade num Map e exibir os resultados no final.
*/
import { createInterface } from "readline";

const rl = createInterface({
    input: process.stdin,
    output: process.stdout,
});

const dados = new Map()

do {
    // Recolha e tratamento do Nome
    var nome = await pedirNome(rl)
    if (nome.trim() == "") {
        // Se está vazio, vai concluir
        break
    } else {
        do {
            // Recolha e tratamento da Idade
            var idade = parseInt(await pedirIdade(rl))

            if (isNaN(idade) || idade < 0) {
                console.log("Idade incorreta")
            } else if (idade >= 0) {
                dados.set(nome, idade)
            }
        } while (isNaN(idade) || idade < 0)
    }
} while (true)

rl.close()

console.log("\nDados inseridos:")
console.log([...dados])

/**
 * Recolhe o nome da terminal, introduzido pelo utilizador
 * @param {*} rl Readline interface 
 * @returns Promise com o input do utilizador
 */
function pedirNome(rl) {
    return new Promise((resolve) => {
        rl.question("Insira um nome (vazio para terminar): ", (input) => {
            resolve(input)
        })
    })
}

/**
 * Recolhe a idade da terminal, introduzida pelo utilizador
 * @param {*} rl Readline interface 
 * @returns Promise com o input do utilizador
 */
function pedirIdade(rl) {
    return new Promise((resolve) => {
        rl.question("Insira uma idade: ", (input) => {
            resolve(input)
        })
    })
}
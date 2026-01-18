/* Ficha de trabalho 32
Objetivo:
Praticar o uso do Spread Operator e dos Rest Parameters em JavaScript para manipulação de arrays e objetos.

Descrição do Exercício:
    1. Uso do Spread em Arrays:
        - Crie uma função chamada unirListas que aceita dois arrays e retorna um novo array contendo todos os elementos dos dois arrays.
    2. Uso do Spread em Objetos:
        - Crie uma função chamada atualizarPessoa que aceita um objeto com informações de uma pessoa e um objeto com novas propriedades.
        A função deve retornar um novo objeto que combine as propriedades do objeto que combine as propriedades do objeto original com as novas propriedades.
    3. Rest Parameters:
        - Crie uma função chamada mediaNotas que aceita num número variável de notas e retorna a média dessas notas.
    4. Combinação dos Conceitos:
        - Crie uma função chamada exibirResultado que aceita um título e um número variável de informações.
        A função deve exibir o título e, em seguida, todas as informações fornecidas.
        Utilize o Spread Operator para manipular as informações.

Resolva o exercício utilizando 2 ficheiros - index.html e app.js
*/

// 1. Uso do Spread em Arrays
function unirListas(lista1, lista2) {
    return [...lista1, ...lista2]
}

// 2. Uso do Spread em Objetos
function atualizarPessoa(pessoa, novasPropriedades) {
    return {
        ...pessoa,
        ...novasPropriedades
    }
}

// 3. Rest Parameters
function mediaNotas(...notas) {
    const totalNotas = notas.reduce((total, nota) => { return total + nota }, 0)
    return totalNotas / notas.length
}

// 4. Combinação dos Conceitos
function exibirResultado(titulo, ...informacoes) {
    console.log(titulo)

    let novasInformacoes = [...informacoes]

    novasInformacoes.forEach(informacao => {
        console.log(informacao)
    });
}

let lista1 = [1, 2, 3]
let lista2 = [7, 8, 9, 10]
console.log("Unir Listas: " + unirListas(lista1, lista2))

let pessoa = { "Nome": "Pessoa 1", "Idade": 24 }
let novasPropriedades = { "Morada": "Morada 1", "ZIP": 1234 }

console.log("Atualizar Pessoa: " + atualizarPessoa(pessoa, novasPropriedades))
console.log("Média Notas: " + mediaNotas(10, 15, 11, 8, 18))

let titulo = "Exemplo título"
exibirResultado(titulo, "Descrição: Exemplo descrição", "Autor: Autor 33")
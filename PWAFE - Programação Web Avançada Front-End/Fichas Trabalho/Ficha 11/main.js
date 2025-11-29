/* Ficha de Trabalho 11
No VSCode, criar um pequeno projeto que simula a gestão de uma loja online.
Separar o código em diferentes módulos para organizar as funcionalidades da loja, usando JavaScript Modules.
    1. Criar um projeto simples com os seguintes ficheiros:
        - index.html
        - main.js
        - products.js
        - cart.js
    2. Cada ficheiro JavaScript terá uma função específica:
        - products.js: Terá uma lista de produtos e funções para adicionar/remover produtos
        - cart.js: Será responsável por gerir o carrinho de compras (adicionar e remover itens)
        - main.js: Vai ligar tudo e exibir os produtos e o carrinho
    3. No index.html, incluem-se os ficheiros de script e exibe-se uma lista de produtos, juntamente com o conteúdo do carrinho.
*/

import * as Produtos from "./products.js"
import * as Carrinho from "./cart.js"

// LocalStorage
localStorage.setItem("produtos", JSON.stringify(Produtos.produtos))
localStorage.setItem("carrinho", JSON.stringify(Carrinho.carrinho))

var inputNomeProduto = document.getElementById("nomeProduto")
var inputPrecoProduto = document.getElementById("precoProduto")
var resProduto = document.getElementById("resProduto")
var listaProdutos = document.getElementById("listaProdutos")
var listaCarrinho = document.getElementById("listaCarrinho")

/**
 * Faz o load das listas de produtos e do carrinho
 */
export function loadStorage() {
    var produtos = JSON.parse(localStorage.getItem("produtos"))
    var carrinho = JSON.parse(localStorage.getItem("carrinho"))

    // Reset á lista de produtos
    listaProdutos.innerHTML = ""
    listaCarrinho.innerHTML = ""

    // Se tiver produtos, vai atualizar a lista
    if (produtos.length != 0) {
        // Atualizar HTML da lista de Produtos
        JSON.parse(localStorage.produtos).forEach(produto => {
            listaProdutos.innerHTML += `
                <li>
                    ${produto.nome} - ${produto.preco} €
                    <i class='bx bx-plus green' onclick="Carrinho.adicionarItem(${produto.id})"></i>
                    <i class='bx bx-minus red' onclick="Produtos.removerProduto(${produto.id})"></i>
                </li>`
        });
    }

    if (carrinho.length != 0) {
        // Atualizar HTML da lista do Carrinho
        JSON.parse(localStorage.carrinho).forEach(produto => {
            listaCarrinho.innerHTML += `
                <li>
                    ${produto.nome} - ${produto.preco} €
                    <i class='bx bx-minus red' onclick="Carrinho.removerItem(${produto.id})"></i>
                </li>`
        })
    }
}

document.getElementById("criarProduto").addEventListener('click', () => {
    var nomeProduto = inputNomeProduto.value.trim()
    var precoProduto = inputPrecoProduto.value

    // Verificação de inputs
    if (nomeProduto != "" && !isNaN(precoProduto) && precoProduto != "") {
        resProduto.innerHTML = ""
        Produtos.adicionarProduto(nomeProduto, precoProduto)
        loadStorage()
    } else {
        resProduto.innerHTML = "Inputs errados!"
    }
})

window.loadStorage = loadStorage
window.Carrinho = Carrinho
window.Produtos = Produtos
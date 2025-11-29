/* Estrutura de um produto
Id / Nome / Preço
*/
import { loadStorage } from "./main.js"

var produtos = []
var id = 1

function adicionarProduto(nome, preco) {
    produtos.push({id: id, nome: nome, preco: preco})
    localStorage.produtos = JSON.stringify(produtos)
    id++
}

function removerProduto(id) {
    produtos = produtos.filter(produto => produto.id !== id);
    localStorage.produtos = JSON.stringify(produtos)
    loadStorage()
}

export { produtos, adicionarProduto, removerProduto }
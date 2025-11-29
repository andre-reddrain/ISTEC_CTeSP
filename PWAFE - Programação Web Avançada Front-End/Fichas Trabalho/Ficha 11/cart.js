import { produtos } from "./products.js"
import { loadStorage } from "./main.js"

var carrinho = []

function adicionarItem(id) {
    const produto = produtos.find(p => p.id === id)
    carrinho.push(produto)
    localStorage.carrinho = JSON.stringify(carrinho)
    loadStorage()
}

function removerItem(id) {
    carrinho = carrinho.filter(produto => produto.id !== id);
    localStorage.carrinho = JSON.stringify(carrinho)
    loadStorage()
}

export { carrinho, adicionarItem, removerItem }
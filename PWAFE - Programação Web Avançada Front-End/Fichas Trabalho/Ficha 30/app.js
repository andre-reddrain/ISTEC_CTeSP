/* Ficha de trabalho 30
Problema: Gestor de Produtos

Imagine que está a desenvolver um sistema para gerir um catálogo de produtos de uma loja.
A sua tarefa é criar um conjunto de funções para as seguintes operações:
    1. Adicionar Produto - Crie uma função que recebe o nome do produto, o preço e a quantidade em stock, e retorna um objeto representando esse produto.
    2. Calcular Stock total - Crie uma função que recebe um array de produtos e retorna o valor total em stock de todos os produtos.
    3. Procurar Produto por Nome - Crie uma função que recebe um array de produtos e o nome de um produto e retorna o produto correspondente.
    4. Calcular Desconto - Crie uma função que aplica um desconto ao preço de um produto e retorna o novo preço.
*/

// 1. Adicionar Produto
function adicionarProduto(nome, preco, quantidade) {
    return {
        nome: nome,
        preco: preco,
        quantidade: quantidade
    }
}

// 2. Calcular Stock total
function calcularValorStockTotal(produtos) {
    let totalSum = 0

    totalSum = produtos.reduce((total, produto) => { return total + (produto.preco * produto.quantidade) }, 0 )
    return totalSum;
}

// 3. Procurar Produto por Nome
function procurarProdutoPorNome(produtos, nome) {
    return produtos.filter((produto) => produto.nome == nome)
}

// 4. Calcular Desconto
function calcularDesconto(produto, percentagemDesconto) {
    let desconto = produto.preco * (percentagemDesconto / 100);
    return produto.preco - desconto
}

const produto1 = adicionarProduto("Produto 1", 10, 10);
const produto2 = adicionarProduto("Produto 2", 15, 15);

const catalogo = [produto1, produto2];

console.log("Valor Stock total:", calcularValorStockTotal(catalogo));
console.log("Produto encontrado:", procurarProdutoPorNome(catalogo, "Produto 3"));
console.log("Preço com desconto:", calcularDesconto(produto1, 10));
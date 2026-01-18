/* Ficha de trabalho 31
Contexto: Uma empresa quer analisar os dados de vendas dos seus produtos. Para isso, precisamos de funções que:
    1. Calculam o total de vendas de um produto específico.
    2. Calculam a média de vendas de todos os produtos.
    3. Encontram o produto com a maior venda.
Dados: Suponha que tem um array de objetos onde cada objeto representa uma venda de produto. Cada objeto tem a seguinte estrutura:
{
    produto: "Nome do Produto",
    valor: 100.00,  // Valor da venda
    quantidade: 2   // quantidade vendida
}

Objetivo:
    1. Criar uma função calcularTotalProduto que recebe o nome do produto e o array de vendas, e retorna o total vendido desse produto.
    2. Criar uma função calcularMediaVendas que recebe o array de vendas e retorna a média de vendas dos produtos.
    3. Criar uma função produtoMaiorVenda que recebe o array de vendas e retorna o nome do produto com a maior venda.
*/

const vendas = [
  { produto: "Produto 1", valor: 300.00, quantidade: 2 },
  { produto: "Produto 2", valor: 100.00, quantidade: 5 },
  { produto: "Produto 3", valor: 400.00, quantidade: 1 },
  { produto: "Produto 4", valor: 200.00, quantidade: 3 }
];

function calcularTotalProduto(nome, vendas) {
    let objVenda = vendas.filter((venda) => venda.produto == nome)[0]
    return objVenda.valor * objVenda.quantidade
}

function calcularMediaVendas(vendas) {
    let media = vendas.reduce((total, venda) => { return total + (venda.valor * venda.quantidade)}, 0)
    return (media / vendas.length)
}

function produtoMaiorVenda(vendas) {
  return vendas.reduce((maior, venda) => {
    const totalVenda = venda.valor * venda.quantidade;
    const totalMaior = maior.valor * maior.quantidade;

    return totalVenda > totalMaior ? venda : maior;
  }).produto;
}

let nomeProduto = "Produto 3"

console.log(`Total Produto (${nomeProduto}): ` + calcularTotalProduto(nomeProduto, vendas));
console.log("Média de Vendas: " + calcularMediaVendas(vendas));
console.log("Produto com maior venda: " + produtoMaiorVenda(vendas));
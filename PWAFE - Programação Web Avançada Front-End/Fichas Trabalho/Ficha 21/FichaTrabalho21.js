/* Ficha de Trabalho 21
Expandir a classe Carro feita no exercício anterior para incluir a capacidade de gerir revisões do carro.
A classe deve ter os seguintes atributos e métodos:
    1. Atributos:
        - marca: A marca do carro (string)
        - modelo: O modelo do carro (string)
        - ano: O ano de fabricação do carro (número)
        - quilometragem: A quilometragem atual do carro (número)
        - revisoes: Um array que armazena as revisões do carro, onde cada revisão é um objeto com as propriedades data e descricao.
    2. Métodos:
        - informacoes(): Retorna uma string com as informações do carro no formato: "Marca: [marca], Modelo: [modelo], Ano: [ano], Quilometragem: [quilometragem] km."
        - atualizarQuilometragem(novaQuilometragem): Atualiza a quilometragem se o novo valor for maior que o atual.
        - adicionarRevisao(data, descricao): Adiciona uma nova revisão ao array de revisões.
        - listarRevisoes(): Retorna uma string com todas as revisões do carro.
*/


class Carro {
    constructor(marca, modelo, ano, quilometragem, revisoes) {
        this.marca = marca
        this.modelo = modelo
        this.ano = ano
        this.quilometragem = quilometragem
        this.revisoes = revisoes
    }

    informacoes() {
        return `Marca: ${this.marca}, Modelo: ${this.modelo}, Ano: ${this.ano}, Quilometragem: ${this.quilometragem} km`
    }

    atualizarQuilometragem(novaQuilometragem) {
        if (novaQuilometragem > this.quilometragem) {
            this.quilometragem = novaQuilometragem
        }
    }

    adicionarRevisao(data, descricao) {
        this.revisoes.push([data, descricao])
    }

    listarRevisoes() {
        return this.revisoes.reduce((str, revisao, index) => str + `Revisão ${index + 1}: Data: ${revisao[0]} / Descrição: ${revisao[1]} \n`, "")
    }
}

var carro = new Carro("BMW", "M3", 2002, 150000, [])
carro.adicionarRevisao(new Date().toISOString().split('T')[0], "Revisão número uno")
carro.adicionarRevisao(new Date().toISOString().split('T')[0], "Revisão número dos")
carro.adicionarRevisao(new Date().toISOString().split('T')[0], "Revisão número tres")

console.log(carro.informacoes())
console.log(carro.listarRevisoes())
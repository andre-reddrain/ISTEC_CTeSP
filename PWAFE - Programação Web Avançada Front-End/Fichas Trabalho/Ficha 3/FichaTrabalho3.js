var userInput = document.getElementById("userInput")
var errorMsg = document.getElementById("errorMsg")
var res = document.getElementById("res")

function listarNomes() {
    if (userInput.value === '') {
        errorMsg.innerHTML = "Por favor introduza nomes."
    } else {
        var nomes = userInput.value.split(",")

        errorMsg.innerHTML = ""
        res.innerHTML = ""

        // 1. Exibir o nº total de nomes na lista
        res.appendChild(document.createTextNode("Nº de nomes: " + nomes.length))
        res.appendChild(document.createElement("br"))

        // 2. Exibir a lista de nomes em ordem alfabética
        res.appendChild(document.createTextNode("Nomes em ordem alfabética: " + nomes.sort()))
        res.appendChild(document.createElement("br"))

        // 3. Exibir o primeiro e ultimo nome da lista
        res.appendChild(document.createTextNode("Primeiro nome: " + nomes[0] + " / Último nome: " + nomes[nomes.length - 1]))
    }
}
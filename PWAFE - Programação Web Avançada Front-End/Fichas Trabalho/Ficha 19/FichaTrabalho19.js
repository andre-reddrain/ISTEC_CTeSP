var nome = document.getElementById("nome")
var idade = document.getElementById("idade")
var res = document.getElementById("res")

function submeterDados() {
    // Verificações de Inputs
    if (nome.value.trim != '' && !isNaN(idade.value) && idade.value != '') {
        // Passou nas validações
        res.innerHTML = `Olá, ${nome.value}! Tem ${idade.value} anos.`
    } else {
        res.innerHTML = "Inputs errados!"
    }
}
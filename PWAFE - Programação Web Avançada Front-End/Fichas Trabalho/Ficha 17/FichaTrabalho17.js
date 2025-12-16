var userInput = document.getElementById("userInput")
var res = document.getElementById("res")

function converter() {
    let numero = Number(userInput.value)
    let string = String(userInput.value)
    let bool = Boolean(userInput.value)

    res.innerHTML = `
        <p>Número: ${numero}</p>
        <p>String: "${string}"</p>
        <p>Booleano: ${bool}</p>
    `
}
var userInput = document.getElementById("userInput")
var res = document.getElementById("res")

function operacoes() {
    res.innerHTML = ""  // Reset ao elemento res
    var numChars = userInput.value.length
    var upperCase = userInput.value.toUpperCase()
    var lowerCase = userInput.value.toLowerCase()
    var reversed = userInput.value.split("").reverse().join("")

    res.appendChild(document.createTextNode("Nº chars: " + numChars))
    res.appendChild(document.createElement("br"))

    res.appendChild(document.createTextNode("Uppercase: " + upperCase))
    res.appendChild(document.createElement("br"))

    res.appendChild(document.createTextNode("Lowercase: " + lowerCase))
    res.appendChild(document.createElement("br"))

    res.appendChild(document.createTextNode("String revertida: " + reversed))
    res.appendChild(document.createElement("br"))
}
/* Ficha de Trabalho 27
Criar um módulo que exporte uma função simples para verificar se um número é par ou ímpar e importar essa função num ficheiro principal para utilizá-la e exibir o resultado.

Sugestão de resolução:
1 - Criar o módulo de verificação de números (numeros.js)
    - Implementar e exportar a função verificarParOuImpar.
2 - Criar o ficheiro principal (app.js)
    - Importar a função do módulo numeros.js
    - Utilizar a função importada para verificar se alguns números são pares ou ímpares e imprimir os resultados na consola.
3 - Configurar o HTML (index.html)
    - Incluir o script principal (app.js) como um módulo ES2025.
*/
import { verificarParOuImpar } from "./numeros.js";

var userInput = document.getElementById("userInput")
var btn = document.getElementById("btnVerificar")
var res = document.getElementById("res")

btn.addEventListener("click", () => {
    var num = parseInt(userInput.value)
    if (isNaN(num)) {
        res.innerHTML = "Por favor insira um número inteiro"
    } else {
        var isPar = verificarParOuImpar(num)
        
        if (isPar) {
            res.innerHTML = num + " é par."
        } else {
            res.innerHTML = num + " é impar."
        }
    }
})
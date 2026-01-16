/* Ficha de trabalho 28
Crie uma página HTML que tenha um botão.
Quando o botão for clicado, um módulo JavaScript deve ser carregado dinamicamente.
O módulo deve exportar uma função chamada displayMessage que exibe uma mensagem na consola.
Use a importação dinâmica para carregar o módulo somente após o clique do botão.
*/

var btn = document.getElementById("carregarModulo")
var res = document.getElementById("res")

btn.addEventListener("click", async () => {
    var module = await import('./module.js')
    var message = "Módulo carregado dinâmicamente!"
    module.displayMessage(message)
    
    res.innerHTML = message
})
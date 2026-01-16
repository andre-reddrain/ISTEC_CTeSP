/* Ficha de trabalho 29
Implemente um pequeno programa JavaScript que utilize var, let e const em diferentes cenários.
O Objetivo é observar como cada uma dessas palavras-chave se comporta em diferentes contextos e quais são as diferenças entre elas.

Sugestão de Resolução:
1 - Hoisting com var e let:
    - Crie uma função que tente aceder uma variável declarada com var e outra com let antes de serem inicializadas.
2 - Imutabilidade de const:
    - Declare uma constante que armazene um valor numérico e tente alterar esse valor.
    - Declare uma constante que armazene um array e adicione novos elementos ao array sem substituir o array completo.
3 - Diferença de Âmbito entre var e let:
    - Crie um loop for com var e outro let para declarar o contador do loop.
    - Tente aceder ao contador fora do loop e observe o que acontece em cada.
*/

function hoisting() {
    // Antes da declaração
    console.log("(Antes da declaração) Var: " + variavelVar)
    // console.log("(Antes da declaração) Let: " + variavelLet) // ReferenceError: Cannot access 'variavelLet' before initialization
    
    var variavelVar = 10;
    let variavelLet = 10;

    console.log("(Depois da declaração) Var: " + variavelVar)
    console.log("(Depois da declaração) Let: " + variavelLet)
}

function consts() {
    const variavelConst = 10;
    // variavelConst = 11;  // TypeError: Assignment to constant variable.

    const arrayConst = [1, 2, 3]
    console.log("Array Inicial: " + arrayConst)
    arrayConst.push(4)
    console.log("Array após push: " + arrayConst)
}

function loops() {
    for (var varVar = 0; varVar < 3; varVar++) {
        console.log("Dentro do loop (var):", varVar);
    }

    console.log("Fora do loop (var):", varVar);

    for (let varLet = 0; varLet < 3; varLet++) {
        console.log("Dentro do loop (let):", varLet);
    }

    // console.log("Fora do loop (let):", varLet);  // ReferenceError: varLet is not defined
}

hoisting()
consts()
loops()
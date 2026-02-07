# Var, let e const em ECMAScript 2025

## var
**Declaração** - Utiliza-se a palavra-chave **var** para declarar variáveis.

**Âmbito** - As variáveis declaradas com var têm âmbito de função, não de bloco. Isso significa que uma variável declarada com var está disponível em toda a função em que foi declarada, mesmo que esteja dentro de um bloco (como um if ou um for).

```js
function exemploVar() {
    if (true) {
        var x = 10; // x é declarado com var
    }
    console.log(x); // 10, porque x é visível em toda a função
}
exemploVar();
```

## Let
**Declaração** - Utiliza-se a palavra-chave **let** para declarar variáveis.

**Âmbito** - Âmbito de bloco. Isso significa que uma variável declarada com let só está disponível dentro do bloco em que foi declarada.

```js
function exemploLet() {
    if (true) {
        let y = 20;     // y é declarado com let
        console.log(y); // 20, porque y está visivel dentro do bloco
    }
    // console.log(y);     // Erro: y não está definido fora do bloco
}
exemploLet();
```

## Const

**Declaração** - Utiliza-se a palavra-chave const para variáveis constantes.

**Âmbito** - As variáveis declaradas com const tem âmbito de bloco, assim como let.

**Imutabilidade** - A variável declarada com const deve ser inicializada na declaração e não pode ser reatribuída depois. No entanto, se o valor for um objeto ou um array, o conteúdo desse objeto ou array pode ser modificado.

```js
function exemploConst() {
    if (true) {
        const z = 30;   // z é declarado com const
        console.log(z); // 30, porque z está visível dentro do bloco
    }
    // console.log(z); // Erro: z não está definido fora do bloco

    // Trabalhando com objetos e arrays
    const obj = { nome: 'João' };
    obj.nome = 'Pedro';
    console.log(obj.nome);

    // obj = { nome: 'Ana' };  // Erro: Não é possível reatribuir uma constante
}
exemploConst();
```

## Comparação entre var, let e const

<table>
<tr><th>Característica<th>var<th>let<th>const
<tr><td><b>Âmbito<td>Âmbito de função<td>Âmbito de bloco<td>Âmbito de bloco
<tr><td><b>Reatribuição<td>Pode ser reatribuído<td>Pode ser reatribuído<td>Não pode ser reatribuído
<tr><td><b>Inicialização<td>Pode ser inicializado mais tarde<td>Pode ser inicializado mais tarde<td>Deve ser inicializado na declaração
</table>
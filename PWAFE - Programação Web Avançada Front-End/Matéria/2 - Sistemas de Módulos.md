# Sistema de Módulos em ECMAScript

## Módulos
Módulos são ficheiros separados de código JavaScript que exportam e importam funcionalidades (funções, objetos, variáveis).
Ajudam a organizar o código em partes reutilizáveis e evitar conflitos de nomes.

## Export e Import em ECMAScript

**Exportação Nomeada (named export)** - Exporta múltiplas partes de um módulo individualmente.

```js
// arquivo.js
export const nome = 'Maria';
export function saudacao() {
    return `Olá, ${nome}!`;
}
```

**Exportação Padrão (default export)** - Cada módulo pode ter apenas uma exportação padrão.

```js
const saudacao = () => 'Olá';
export default saudacao;
```

**Combinação das duas** - É possível ter ambos os tipos de exportação no mesmo ficheiro.

```js
// arquivo.js
export const nome = 'Maria';
export default function saudacao() {
    return `Olá, ${nome}`;
}
```

## Importação de Módulos

**Importação Nomeada** - Importa partes específicas do módulo usando o nome da exportação.

```js
// main.js
import { nome, saudacao } from './arquivo.js';
console.log(saudacao());
```

**Importação Padrão** - Importa o valor padrão de um módulo sem usar chavetas.

```js
// main.js
import saudacao from './arquivo.js';
console.log(saudacao());
```

**Renomeando Módulos ao Importar**
```js
import { saudacao as cumprimentar } from './arquivo.js';
console.log(cumprimentar());
```

**Importar tudo (import * as)**
```js
import * as utils from './arquivo.js';
console.log(utils.nome);
console.log(utils.saudacao());
```

## CommonJS (Node.js)
- CommonJS é o sistema de módulos usado no Node.js.
- Usa require() para importar e module.exports para exportar.

**Exportar em CommonJS**
```js
// modulo.js
const saudacao = () => 'Olá';
module.exports = saudacao;
```

**Importar em CommonJS**
```js
// main.js
const saudacao = require('./modulo.js');
console.log(saudacao());
```

## Comparação ES6 vs CommonJS
<table>
<tr><th>Característica<th>ES6 Módulos<th>CommonJS
<tr><td><b>Sintaxe de Importação<td>import<td>require()
<tr><td><b>Sintaxe de Exportação<td>export, export default<td>module.exports
<tr><td><b>Execução de Módulos<td>Static imports<td>Dynamic imports
<tr><td><b>Suporte em Navegadores<td>Suporte nativo<td>Não suportado
<tr><td><b>Suporte no Node.js<td>Sim (com mjs)<td>Sim (por padrão)
</table>

## Módulos Dinâmicos e Importações Assíncronas

**Importação Dinâmica (Dynamic Imports)** - Permite importar módulos de forma assíncrona (ideal para optimização de performance)

```js
import('./modulo.js').then((modulo) => {
    console.log(modulo.saudacao());
})
```

**Vantagens:**
- Melhora a performance de aplicações grandes ao carregar código sob demanda.
- Útil para o carregamento de bibliotecas pesadas ou recursos que não são usados imediatamente.
# Teoria dos conjuntos

- **Variáveis** - Qualquer elemento de $U_1, U_2, U_3 \dots \to x, y, z, v, w \dots$
- **Domínio** - Conjunto de elementos $\to U_1, U_2, U_3 \dots$
    - Quando substituímos uma variável por um elemento do respetivo domínio dizemos que **concretizamos a variável** e convertemos cada expressão numa **designação**:

<div align="center">

| $x$ | $y$ | $z$ | $a: x + 3$ | $b: x^2$ | $c: 2y - z$ |
| :---: | :---: | :---: | :---: | :---: | :---: |
| $-5$ | $3$ | $1$ | $-5 + 3$ | $(-5)^2$ | $2 \times 3 - 1$ |
| $0,1$ | $-2$ | $-1$ | $0,1 + 3$ | $(0,1)^2$ | $2 \times (-2) - (-1)$ |

</div>

## Conjuntos

- Representam-se normalmente por letras maiúsculas, $A, B, C \dots X, Y, Z$ e os seus elementos por letras minúsculas, $a, b, c \dots x, y, z$.
- Seja $A$ um conjunto e $x$ um objeto:
    - Se $x$ é um dos objetos de $A$, dizemos que **$x$ pertence a $A$** $\to$ **$x \in A$**
    - Se $x$ não é um dos objetos de $A$, dizemos que **$x$ não pertence a $A$** $\to$ **$x \notin A$**
- Conjuntos $A$ e $B$ dizem-se **iguais, $A=B$**, se e somente se **$\forall x, x \in A \iff x \in B$**
- A um conjunto sem qualquer elemento chama-se **conjunto vazio** e é representado por $\{ \}$ ou $\emptyset$
- Conjuntos podem ser definidos por:
    - **Extensão** - Conjunto $A$, com um número reduzido de elementos, $1, 2, 3, 4$ e $5$ pode ser representado por: **$A = \{1, 2, 3, 4, 5\}$**
    - **Compreensão** - Conjunto $B$, constituído pelos números inteiros relativos compreendidos entre -15 e 27, pode ser representado por: **$B = \{x \in \mathbb{Z}: -15 < x < 27\}$**
- **Inclusão:**
    - Se todos os elementos de um conjunto $A$ também são elementos do conjunto $B$, diz-se que **$A$ é um subconjunto de $B$** e escreve-se **$A \subset B$**
    - Se existir um elemento de $A$ que não seja um elemento de $B$, então $A$ não está contido em $B$ e **$A$ não é um subconjunto de $B$**, escreve-se **$A \not\subset B$**

## Quantificador Universal

- Dada uma condição $p(x)$, "**Qualquer que seja $x$, $p(x)$**" ou "**para todo o $x$, $p(x)$**" é uma proposição que é verdadeira quando e apenas quando se obtém uma proposição verdadeira sempre que se substitui $x$ em $p(x)$ por um objeto arbitrário.
    - "Qualquer que seja $x$, $p(x)$" representa-se por **$\forall x, p(x)$**
    - **$\forall$** designa-se **Quantificador Universal**
    - Exemplo:
        - **$r(x): x = x \to r(x)$ é universal porque é verdadeira qualquer que seja $x$**
        - **$s(x): x > 0 \to s(x)$ não é universal porque $s(-1)$ é uma proposição falsa**

    - **$\forall x \in A \implies p(x)$** representa-se por **$\forall x \in A, p(x)$**
        - Se esta proposição for verdadeira, dizemos que $p(x)$ é uma condição universal em $A$

## Quantificador Existencial

- Dada uma condição $p(x)$, **existe $x$ tal que $p(x)$** é uma proposição verdadeira se e somente se, para pelo menos um objeto $a$, $p(a)$ for verdadeira.
    - "Existe $x$ tal que $p(x)$" representa-se por **$\exists x : p(x)$**
    - O símbolo **$\exists$** designa-se por **Quantificador Existencial**
    - Se **$\exists x : p(x)$ for verdadeira, $p(x)$ é uma condição possível**
    - Se **$p(x)$ não for possível, dizemos que é uma condição impossível**

## Condições possíveis e impossíveis

- Dada uma condição $p(x)$ e um conjunto $U$, representamos a proposição **$\exists x : x \in U \land p(x)$ por $\exists x \in U : p(x)$**
    - **Se for verdadeira, designamos $p(x)$ por condição possível em $U$**
    - **Se for falsa, designamos $p(x)$ por condição impossível em $U$**

## Propriedade 13 - Segundas Leis de De Morgan

- Dada uma condição $p(x)$:
    - **A negação de $\forall x, p(x)$ é equivalente a $\exists x: \sim p(x)$**
    - **A negação de $\exists x, p(x)$ é equivalente a $\forall x, \sim p(x)$**

## Complementação

- Dados conjuntos $A$ e $B$, a **diferença entre $A$ e $B$ é o conjunto $\{x \in A: x \notin B \}$**.
- Representamos este conjunto por **$A \setminus B$**.
- Se **$B \subset A$** designamos **$A \setminus B$** por **"complementar de $B$ em $A$"** e representamo-lo por **$\bar B$** quando não houver ambiguidade.
    - **$\bar B$** é o conjunto de todos os elementos que não pertencem a $B$
- Exemplo:
    - Sejam $A = \{0, 1, 3, 6\}$ e $B = \{1, 2, 3, 4, 5\}$ e $C = \{1, 3\}$.
    - Se considerarmos que $A, B, C$ são subconjuntos de $U = \{0, 1, 2, 3, 4, 5, 6\}$
    - Então:
        - **$\bar A = U \setminus A = \{2, 4, 5\}$** $\to U$ menos $A$
        - **$\bar B = U \setminus B = \{0, 6\}$** $\to U$ menos $B$
        - **$\bar C = U \setminus C = \{0, 2, 4, 5, 6\}$** $\to U$ menos $C$
    - Notas:
        1. **$A \cap \bar A = \emptyset$**
        2. **$A \cup \bar A = U$**
        3. **$A \setminus B = A \cap \bar B$**
        4. **Em geral, $A \setminus B \neq B \setminus A$**

## União e Interseção

- Dados conjuntos $A$ e $B$,
    - **$A \cup B = \{x: x \in A \lor x \in B\}$** representa o **"conjunto união (ou reunião) de $A$ e $B$"**
    - **$A \cap B = \{x: x \in A \land x \in B\}$** representa o **"conjunto interseção de $A$ e $B$"**
- Exemplo:
    - $M = \{a, b, c\}$ e $N = \{a, e, d\}$
    - **$M \cup N = \{a, b, c, e, d\} \to$ União**
    - **$M \cap N = \{a\} \to$ Interseção (Elementos em comum)**
    - O valor lógico de $x \in M \lor x \in N$ e $x \in M \land x \in N$:

<div align="center">

| $x$ | $x \in M$ | $x \in N$ | $x \in M \lor x \in N$ | $x \in M \land x \in N$ |
| :---: | :---: | :---: | :---: | :---: |
| $a$ | $\color{green}V$ | $\color{green}V$ | $\color{green}V$ | $\color{green}V$ |
| $b$ | $\color{green}V$ | $\color{red}F$ | $\color{green}V$ | $\color{red}F$ |
| $c$ | $\color{green}V$ | $\color{red}F$ | $\color{green}V$ | $\color{red}F$ |
| $d$ | $\color{red}F$ | $\color{green}V$ | $\color{green}V$ | $\color{red}F$ |
| $e$ | $\color{red}F$ | $\color{green}V$ | $\color{green}V$ | $\color{red}F$ |

</div>

## Relacionar condições com conjuntos

- Num modo geral:
    - **$p(x) \lor q(x) \iff P \cup Q \to$ Disjunção $\iff$ Reunião**
    - **$p(x) \land q(x) \iff P \cap Q \to$ Conjunção $\iff$ Interseção**
    - **$\overline {P \cup Q} = \bar P \cap \bar Q$** $\to$ Mesma coisa que negação em lógica, inverte TUDO (1ª Lei de De Morgan)
    - **$\overline {P \cap Q} = \bar P \cup \bar Q$** $\to$ (2ª Lei de De Morgan)

## Correspondência entre proposições e conjuntos

- Equivalência - $\forall x, p(x) \iff q(x) \implies P = Q$ - Igualdade
- Negação - $\forall x, \sim p(x) \implies \bar P$ - Complementaridade
- Disjunção - $\forall x, p(x) \lor q(x) \implies P \cup Q$ - Reunião
- Conjunção - $\forall x, p(x) \land q(x) \implies P \cap Q$ - Interseção
- Implicação - $\forall x, p(x) \implies q(x) \implies P \subset Q$ - Inclusão

## Propriedade 16

- Dadas as condições $p(x)$ e $q(x)$, a **negação da proposição $\forall x, p(x) \implies q(x)$ é equivalente à proposição $\exists x : p(x) \land \sim q(x)$**
- $\forall x, p(x) \implies q(x)$ é falsa se e somente se existir $a$ tal que $p(a)$ é verdadeira e $q(a)$ é falsa.

## Propriedade 17

- Dadas as condições $p(x)$ e $q(x)$, a **proposição $\forall x, p(x) \iff q(x)$ é equivalente à proposição $\forall x, (p(x) \implies q(x)) \land (q(x) \implies p(x))$**
- A demonstração de $\forall x, (p(x) \implies q(x)) \land (q(x) \implies p(x))$ designa-se **"Demonstração por dupla implicação"**

## Propriedades das operações sobre conjuntos

- $A \subset B$ se e somente se $\bar B \subset \bar A$
- Consideremos $A, B, C$ três conjuntos de um universo $U$
    - **Propriedade comutativa**
        - **Interseção** - $A \cap B = B \cap A$
        - **Reunião** - $A \cup B = B \cup A$
    - **Propriedade associativa**
        - **Interseção** - $(A \cap B) \cap C = A \cap (B \cap C)$
        - **Reunião** - $(A \cup B) \cup C = A \cup (B \cup C)$
    - **Existência de um elemento neutro**
        - **Interseção** - $U$ é o elemento neutro da interseção. $A \cap U = U \cap A = A$
        - **Reunião** - $\emptyset$ é o elemento neutro da reunião. $A \cup \emptyset = \emptyset \cup A = A$
    - **Existência de um elemento absorvente**
        - **Interseção** - $\emptyset$ é o elemento absorvente da interseção. $A \cap \emptyset = \emptyset \cap A = \emptyset$
        - **Reunião** - $U$ é o elemento absorvente da reunião. $A \cup U = U \cup A = U$
    - **Idempotência**
        - **Interseção** - $A \cap A = A$
        - **Reunião** - $A \cup A = A$
    - **Distributividade da interseção em relação à reunião**
        - $A \cap (B \cup C) = (A \cap B) \cup (A \cap C)$
    - **Distributividade da reunião em relação à interseção**
        - $A \cup (B \cap C) = (A \cup B) \cap (A \cup C)$
    - **Leis de De Morgan para conjuntos**
        - $\overline {A \cap B} = \bar A \cup \bar B$
        - $\overline {A \cup B} = \bar A \cap \bar B$
     
## Aparte (Complementar de Intervalos Reais)

- **$\overline{]-\infty, 4[} = [4, +\infty[$** $\to$ O intervalo aberto fica fechado! O $-\infty$ troca para $+\infty$!
- **$\overline{[- \frac{3}{2}, +\infty[} = ]-\infty, - \frac{3}{2}[$** $\to$ O intervalo fechado fica aberto! O $+\infty$ troca para $-\infty$!

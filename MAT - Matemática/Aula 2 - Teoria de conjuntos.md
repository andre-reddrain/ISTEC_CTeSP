# Teoria dos conjuntos
- **Variáveis** - Qualquer elemento de U1, U2, U3 -> x, y, z, v, w...
- **Domínio** - Conjunto de elementos -> *U1, U2, U3...*
    - Quando substituimos uma variável por um elemento do respetivo domínio dizemos que **concretizamos a variável** e convertemos cada expressão numa desginação:
        <table>
         <tr><th colspan="3">Variavel<th colspan="3">Concretização das variáveis e designações resultantes</tr>
         <tr><td>x<td>y<td>z<td>a: x + 3<td>b: x<sup>2<td>c: 2y - z</tr>
         <tr><td>-5<td>3<td>1<td>-5 + 3<td>(-5)<sup>2<td>2 * 3 - 1</tr>
         <tr><td>0,1<td>-2<td>-1<td>0,1 + 3<td>(0,1)<sup>2<td>2 * (-2) - (-1)
        </table>

## - Conjuntos
- Representam-se normalmente por letras maiúsculas, $A, B, C... X ,Y ,Z$ e os seus elementos por letras minúsculas, $a, b, c... x, y, z$.
- Seja $A$ um conjunto e $x$ um objeto:
    - Se $x$ é um dos objetos de $A$, dizemos que **$x$ pertence a $A$** -> **$x ∈ A$**
    - Se $x$ não é um dos objetos de $A$, dizemos que **$x$ não pertence a $A$** -> **$x ∉ A$**
- Conjuntos $A$ e $B$ dizem-se **iguais, $A=B$**, se e somente se **$Ɐx, x ∈ A ⇔ x ∈ B$**
- A um conjunto sem qualquer elemento chama-se **conjunto vazio** e é representado por $\{ \}$ ou $∅$
- Conjuntos podem ser definidos por:
    - **Extensão** - Conjunto $A$, com um número reduzido de elementos, 1,2,3,4 e 5 pode ser representado por: **$A = \{1, 2, 3, 4, 5\}$**
    - **Compreensão** - Conjunto $B$, constítuido pelos números inteiros relativos compreendidos entre -15 e 27, pode ser representado por: **$B = \{x ∈ Z: −15 < x < 27\}$**
- **Inclusão:**
    - Se todos os elementos de um conjunto $A$ também são elementos do conjunto $B$, diz-se que **$A$ é um subconjunto de $B$** e escreve-se **$A ⊂ B$**
    - Se existir um elemento de $A$ que não seja um elemento de $B$, então $A$ não está contido em $B$ e **$A$ não é um subconjunto de $B$**, escreve-se  **$A ⊄ B$**

## - Quantificador Universal
- Dada uma condição $p(x)$, "**Qualquer que seja $x$, $p(x)$**" ou "**para todo o $x$, $p(x)$**" é uma proposição que é verdadeira quando e apenas quando se obtém uma proposição verdadeira sempre que se substitui $x$ em $p(x)$ por um objeto arbitrário.
    - "Qualquer que seja $x$, $p(x)$" representa-se por **Ɐx, p(x)**
    - **Ɐ** designa-se **Quantificador Universal**
    - Exemplo:
        - **$r(x):x = x$ -> $r(x)$ é universal porque é verdadeira qualquer que seja $x$**
        - **$s(x):x > 0$ -> $s(x)$ não é universal porque $s(-1)$ é uma proposição falsa**

    - **$Ɐx ϵ A$ => $p(x)$** representa-se por **$Ɐx ϵ A, p(x)$**
        - Se esta proposição for verdadeira, dizemos que $p(x)$ é uma condição universal em $A$

## - Quantificador Existencial
- Dada uma condição $p(x)$, **existe $x$ tal que $p(x)$** é uma proposição verdadeira se e somente se, para pelo menos um objeto $a$, $p(a)$ for verdadeira.
    - "Existe $x$ tal que $p(x)$" representa-se por **$Ǝx:p(x)$**
    - O símbolo **$Ǝ$** designa-se por **Quantificador Existencial**
    - Se **$Ǝx:p(x)$ for verdadeira, $p(x)$ é uma condição possível**
    - Se **$p(x)$ não for possivel, dizemos que é uma condição impossível**

## - Condições possíveis e impossíveis
- Dada uma condição $p(x)$ e um conjunto $U$, representamos a proposição **"$Ǝx: x ϵ U ∧ p(x)$" por "$Ǝx ϵ U:p(x)$"**
    - **Se for verdadeira, designamos $p(x)$ por condição possível em $U$**
    - **Se for falsa, designamos $p(x)$ por condição impossível em $U$**

## - Propriedade 13 - Segundas Leis de Morgan
- Dada uma condição $p(x)$:
    - **A negação de "$Ɐx, p(x)$" é equivalente a "$Ǝx: ~p(x)$"**
    - **A negação de "$Ǝx, p(x)$" é equivalente a "$Ɐx, ~p(x)$"**

## - Complementação
- Dados conjuntos $A$ e $B$, a **diferença entre $A$ e $B$ é o conjunto $\{x ∈ A: x ∉ B \}$**.
- Representamos este conjunto por **$A\backslash B$**.
- Se **$B ⊂ A$** designamos **$A\backslash B$** por **"complementar de $B$ em $A$"** e representamo-lo por **$\bar B$** quando não houver ambiguidade.
    - **$\bar B$** é o conjunto de todos os elementos que não pertencam a $B$
- Exemplo:
    - Sejam $A = \{0,1,3,6\}$ e $B = \{1,2,3,4,5\}$ e $C = \{1, 3\}$.
    - Se considerarmos que $A,B, C$ são subconjuntos de $U = \{0,1,2,3,4,5,6\}$
    - Então:
        - **$\bar A$ = $U\backslash A$ = $\{2,4,5\}$** -> $U$ menos $A$
        - **$\bar B$ = $U\backslash B$ = $\{0,6\}$** -> $U$ menos $B$
        - **$\bar C$ = $U\backslash C$ = $\{0,2,4,5,6\}$** -> $U$ menos $C$
    - Notas:
        1. **$A ∩ \bar A = ∅$**
        2. **$A ∪ \bar A = U$**
        3. **$A\backslash B = A ∩ \bar B$**
        4. **Em geral, $A\backslash B ≠ B\backslash A$**

## - União e Interseção
- Dados conjuntos A e B,
    - **$A ∪ B = \{x: x ∈ A ∨ x ∈ B\}$** representa o **"conjunto união (ou reunião) de A e B"**
    - **$A ∩ B = \{x: x ∈ A ∧ x ∈ B\}$** representa o **"conjunto interseção de A e B"**
- Exemplo:
    - $M = \{a,b,c\}$ e N = \{a,e,d\}$
    - **$M ∪ N = \{a, b, c, e, d\}$ -> União**
    - **$M ∩ N = \{a\}$ -> Interseção (Elementos em comum)**
    - O valor lógico de "$x ∈ M ∨ x ∈ N$" e "$x ∈ M ∧ x ∈ N$":
    <table>
     <tr><th>X<th>x ∈ M<th>x ∈ N<th>x ∈ M ∨ x ∈ N<th>x ∈ M ∧ x ∈ N
     <tr><td>a<td>V<td>V<td>V<td>V
     <tr><td>b<td>V<td>F<td>V<td>F
     <tr><td>c<td>V<td>F<td>V<td>F
     <tr><td>d<td>F<td>V<td>V<td>F
     <tr><td>e<td>F<td>V<td>V<td>F
    </table>

## - Relacionar condições com conjuntos
- Num modo geral:
    - **$p(x) ∨ q(x) <=> P ∪ Q$ -> Disjunção <=> Reunião**
    - **$p(x) ∧ q(x) <=> P ∩ Q$ -> Conjunção <=> Interseção**
    - **$\overline {P ∪ Q}$ = $\bar P ∩ \bar Q$** -> Mesma coisa que negação em lógica, inverte TUDO (1ª Lei)
    - **$\overline {P ∩ Q}$ = $\bar P ∪ \bar Q$**

## - Correspondência entre proposições e conjuntos
- Equivalência - $∀x, p(x) ⟺ q(x)$ -> $P =G Q$ - Igualdade
- Negação - $∀x, ~p(x)$ -> $\bar P$ - Complementaridade
- Disjunção - $∀x, p(x) ∨ q(x)$ -> $P ∪ Q$ - Reunião
- Conjunção - $∀x, p(x) ∧ q(x)$ -> $P ∩ Q$ - Interseção
- Implicação - $∀x, p(x) ⇒ q(x)$ -> $P ⊂ Q$ - Inclusão

## - Propriedade 16
- Dadas as condições $p(x)$ e $q(x)$, a **negação da proposição $∀x, p(x) ⟹ q(x)$ é equivalente à proposição $∃x: p(x) ⟹\text{\textasciitilde} q(x)$**
- $∀x, p(x) ⟹ q(x)$ é falsa se e somente se existir $a$ tal que $p(a)$ é verdadeira e $q(a)$ é falsa.

## - Propriedade 17
- Dadas as condições $p(x)$ e $q(x)$, a **proposição $∀x, p(x) ⟺ q(x)$ é equivalente á proposição $∀x, (p(x) ⟹ q(x)) ∧ (q(x) ⟹ p(x))$**
- A demonstração de $∀x, (p(x) ⟹ q(x)) ∧ (q(x) ⟹ p(x))$ designa-se **"Demonstração por dupla implicação**

## - Propriedades das operações sobre conjuntos
- $A ⊂ B$ se e somente se $\bar B ⊂ \bar A$
- Consideremos $A, B, C$ três conjuntos de um universo $U$
    - **Propriedade comutativa**
        - **Interseção** - $A ∩ B = B ∩ A$
        - **Reunião** - $A ∪ B = B ∪ A$
    - **Propriedade associativa**
        - **Interseção** - $(A ∩ B) ∩ C = A ∩ (B ∩ C)$
        - **Reunião** - $(A ∪ B) ∪ C = A ∪ (B ∪ C)$
    - **Existência de um elemento neutro**
        - **Interseção** - $U$ é o elemento neutro da interseção. $A ∩ U = U ∩ A = A$
        - **Reunião** - $∅$ é o elemento neutro da reunião. $A ∪ ∅ = ∅ ∪ A = A$
    - **Existência de um elemento absorvente**
        - **Interseção** - $∅$ é o elemento absorvente da interseção. $A ∩ ∅ = ∅ ∩ A = ∅$
        - **Reunião** - $U$ é o elemento absorvente da reunião. $A ∪ U = U ∪ A = U$
    - **Idempotência**
        - **Interseção** - $A ∩ A = A$
        - **Reunião** - $A ∪ A = A$
    - **Distributividade da interseção em relação à reunião**
        - $A ∩ (B ∪ C) = (A ∩ B) ∪ (A ∩ C)$
    - **Distributividade da reunião em relação à interseção**
        - $A ∪ (B ∩ C) = (A ∪ B) ∩ (A ∪ C)$
    - **Leis de Morgan para conjuntos**
        - $\overline {A ∩ B} = \bar A ∪ \bar B$
        - $\overline {A ∪ B} = \bar A ∩ \bar B$

- Aparte
    - $\overline {]-\infin , 4[}$ = $[4, +\infin[$ - Intervalo aberto fica fechado! $-\infin$ troca para $+\infin$!
    -

    - $\overline {[- \dfrac {3}{2}, +\infin[}$ = $]-\infin ,- \dfrac {3}{2}[ $ - Intervalo fechado fica aberto! $+\infin$ troca para $-\infin$!

    - A\B É IMPORTANTE! Fazer um resumo de "keywords" para decorar!
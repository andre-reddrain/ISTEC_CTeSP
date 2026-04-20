# Lógica
- **Axiomas** são proposições que se consideram verdadeiras se as deduzir de outras.

- **Teoremas** são proposições que não são "axiomas": contêm uma suposição inicial, a **Hipótese**, e uma conclusão, a **Tese**.
    - Ex: Em qualquer triângulo, a amplitude de um ângulo externo é igual à soma das amplitudes dos ângulos internos não adjacentes.
        - **Hipótese(H)** - "Seja A um ângulo externo de um triângulo T"
        - **Tese(T)** - "A amplitude de A é igual à soma das amplitudes dos ângulos internos não adjacentes"
- **Termo** ou **Designação** é toda a expressão com significado que representa um objeto.
- Duas designações A e B são sinónimas se representarem o mesmo ser. Escrevemos $A = B$.
- **Proposição** é toda a expressão suscetível de ser verdadeira(V) ou falsa(F)
- Designamos estes atributos por **valores lógicos** -> Podem ser definidos por **{V,F}** ou **{0,1}**
    - Ex: As expressões seguintes são proposições:
        1. Londres é a capital do Reino Unido - $\color{green}Verdadeiro$
        2. $3^0 > 1$ - $\color{red}Falso$
        3. $\pi = 3,14$ - $\color{red}Falso$
        4. $\text{m.d.c.}(20,30) = 4 + 2 \times 3$ - $\color{green}Verdadeiro$
        5. O Rio Douro nasce em Portugal - $\color{red}Falso$

## Propriedades

- **Propriedade 1 - Princípio de não contradição** - Uma proposição não pode ser simultaneamente verdadeira e falsa.
  - Conetivos lógicos:

<div align="center">

| Conetivo | Símbolo | Operação Lógica |
| :--- | :---: | :--- |
| não | $\sim$ | Negação |
| ou | $\lor$ | Disjunção |
| e | $\land$ | Conjunção |
| se...então | $\implies$ | Implicação |
| se e só se | $\iff$ | Equivalência |

</div>

- **Equivalência** - Dadas proposições $p$ e $q$, " $p$ é equivalente a $q$ " é uma proposição verdadeira se e só se $p$ e $q$ tiverem o mesmo valor lógico.

<div align="center">

| $p$ | $q$ | $p \iff q$ |
| :---: | :---: | :---: |
| $\color{green}V$ | $\color{green}V$ | $\color{green}V$ |
| $\color{green}V$ | $\color{red}F$ | $\color{red}F$ |
| $\color{red}F$ | $\color{green}V$ | $\color{red}F$ |
| $\color{red}F$ | $\color{red}F$ | $\color{green}V$ |

</div>

- **Negação** - Dada uma proposição $p$, "não $p$" é uma proposição verdadeira se $p$ for falsa e é falsa se $p$ for verdadeira.

- **Propriedade 2 - Lei da dupla Negação**: $\sim(\sim p) \iff p$

- **Conjunção** - Dadas proposições $p$ e $q$, "A conjunção de $p$ e $q$" é uma proposição verdadeira se $p$ e $q$ forem simultaneamente verdadeiras.

<div align="center">

| $p$ | $q$ | $p \land q$ |
| :---: | :---: | :---: |
| $\color{green}V$ | $\color{green}V$ | $\color{green}V$ |
| $\color{green}V$ | $\color{red}F$ | $\color{red}F$ |
| $\color{red}F$ | $\color{green}V$ | $\color{red}F$ |
| $\color{red}F$ | $\color{red}F$ | $\color{red}F$ |

</div>

- **Disjunção** - Dadas proposições $p$ e $q$, "A disjunção de $p$ e $q$" é uma proposição que é falsa se e só se $p$ e $q$ forem simultaneamente falsas.

<div align="center">

| $p$ | $q$ | $p \lor q$ |
| :---: | :---: | :---: |
| $\color{green}V$ | $\color{green}V$ | $\color{green}V$ |
| $\color{green}V$ | $\color{red}F$ | $\color{green}V$ |
| $\color{red}F$ | $\color{green}V$ | $\color{green}V$ |
| $\color{red}F$ | $\color{red}F$ | $\color{red}F$ |

</div>

- **Propriedade 3 - Princípio do terceiro excluído** - Dada uma proposição $p$, a proposição $p \lor \sim p$ é verdadeira.

- **Implicação** - Dadas proposições $p$ e $q$, "Implicação entre $p$ e $q$" é uma proposição que é falsa se e só se $p$ for verdadeira e $q$ for falsa.
  **Importante! $p \implies q \iff \sim p \lor q$**

<div align="center">

| $p$ | $q$ | $p \implies q$ |
| :---: | :---: | :---: |
| $\color{green}V$ | $\color{green}V$ | $\color{green}V$ |
| $\color{green}V$ | $\color{red}F$ | $\color{red}F$ |
| $\color{red}F$ | $\color{green}V$ | $\color{green}V$ |
| $\color{red}F$ | $\color{red}F$ | $\color{green}V$ |

</div>

- **Propriedade 4** - Dadas proposições $p$, $q$ e $r$ se $p \implies q$ e $q \implies r$, então $p \implies r$
Por convenção, em qualquer sequência de operações lógicas, a menos que existam parênteses, respeitam-se as seguintes prioridades:
    **Negação, Conjunção e Disjunção, Implicação e Equivalência**

- **Propriedade 5** - Dadas proposições $p$ e $q$, a proposição $\sim (p \implies q)$ é equivalente à proposição $p \land \sim q$.

- **Propriedade 6 - Princípio da dupla implicação** - Dadas proposições $p$ e $q$, a proposição $p \iff q$ é verdadeira se e somente se $p \implies q$ e $q \implies p$ forem ambas proposições verdadeiras.

- **Propriedade 7** - Dada uma proposição $p$ e representando por V (respetivamente F) uma qualquer proposição verdadeira (respetivamente falsa): **$p \land V \iff p$; $p \lor V \iff V$; $p \lor F \iff p$; $p \land F \iff F$**
    - Na operação lógica conjunção, **V é o elemento neutro e F o elemento absorvente**.
    - Na operação lógica disjunção, **V é o elemento absorvente e F o elemento neutro**.

- **Propriedade 8** - Dadas proposições $p$ e $q$, $\sim (p \land q) \iff \sim p \lor \sim q$ e $\sim (p \lor q) \iff \sim p \land \sim q$. Estas equivalências designam-se por **Primeiras Leis de Morgan**.

- **Propriedade 9 - Associativa**:
    - **Conjunção** - $(p \land q) \land r \iff p \land (q \land r)$
    - **Disjunção** - $(p \lor q) \lor r \iff p \lor (q \lor r)$

- **Propriedade 10 - Comutativa**:
    - **Conjunção** - $p \land q \iff q \land p$
    - **Disjunção** - $p \lor q \iff q \lor p$

- **Propriedade 11 - Distributiva**:
    - **Conjunção relativamente à disjunção** - $p \land (q \lor r) \iff (p \land q) \lor (p \land r)$
    - **Disjunção relativamente à conjunção** - $p \lor (q \land r) \iff (p \lor q) \land (p \lor r)$

- **Propriedade 12** - Dadas duas proposições $p$ e $q$, a proposição $p \implies q$ é equivalente à proposição $\sim q \implies \sim p$
    - $\sim q \implies \sim p$ é a **implicação contrarrecíproca** da implicação $p \implies q$

    

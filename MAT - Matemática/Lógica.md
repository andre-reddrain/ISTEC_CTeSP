# Lógica
- **Axiomas** são proposições que se consideram verdadeiras se as deduzir de outras.

- **Teoremas** são proposições que não são "axiomas": contêm uma suposição inicial, a **Hipótese**, e uma conclusão, a **Tese**.
    - Ex: Em qualquer triângulo, a amplitude de um ângulo externo é igual à soma das amplitudes dos ângulos internos não adjacentes.
        - **Hipótese(H)** - "Seja A um ângulo externo de um triângulo T"
        - **Tese(T)** - "A amplitude de A é igual à soma das amplitudes dos ângulos internos não adjacentes"
- **Termo** ou **Designação** é toda a expressão com significado que representa um objeto.
- Duas designações A e B são sinónimas se representarem o mesmo ser. Escrevemos A = B.
- **Proposição** é toda a expressão suscetível de ser verdadeira(V) ou falsa(F)
- Designamos estes atributos por **valores lógicos** -> Podem ser definidos por **{V,F}** ou **{0,1}**
    - Ex: As expressões seguintes são proposições:
        1 - Londres é a capital do Reino Unido - $\color{green}Verdadeiro$
        2 - 3^0 > 1 - $\color{red}Falso$
        3 - Pi = 3,14 - $\color{red}Falso$
        4 - m.d.c(20,30) = 4 + 2 x 3 - $\color{green}Verdadeiro$
        5 - O Rio Douro nasce em Portugal - $\color{red}Falso$

## Propriedades
- **Propriedade 1 - Princípio de não contradição** - Uma proposição não pode ser simultaneamente verdadeira e falsa.
    - Conetivos lógicos
    $$ \begin{array}{ccc}
    Conetivo & Símbolo & \text{Operação Lógica} \\
    não & ~\text{\textasciitilde} & \text{Negação} \\
    ou & \lor & \text{Disjunção} \\
    e & \land & \text{Conjunção} \\
   se...então & \implies & \text{Implicação} \\
   \text{se e só se} & \iff & \text{Equivalência} \\
   \end{array} $$

   Slide 8

   - Ex:
        1 - p: A Joana vai ao cinema
            A negação de p é ~p
            ~p: A Joana NÃO vai ao cinema
        2 - p: O Carlos tem 16 anos.
            q: A Rita é loura.
            A conjunção de p e q é p ᴧ q
            p ᴧ q: O Carlos tem 16 anos E a Rita é loura.
        3 - p: O Sol é uma estrela
            q: A bicicleta tem duas rodas
            A disjunção de p e q é p V q
            p V q: O Sol é uma estela ou a bicicleta tem duas rodas

    - [Equivalência] Dadas proposições p e q, "p é equivalente a q" é uma proposição verdadeira se e só se p e q tiverem o mesmo valor lógico.
        - Tabela de verdades
            p | q | p <=> q 
            V | V |    V
            V | F |    F
            F | V |    F
            F | F |    V
    - [Negação] Dada uma proposição p, "não p" é uma proposição verdadeira se p for falsa e é falsa se p for verdadeira.
    - Propriedade 2 - Lei da dupla Negação: ~(~p) <=> p
    - [Conjunção] Dadas proposições p e q, "A conjunção de p e q" é uma proposição verdadeira se p e q forem simultaneamente verdadeiras.
        - Tabela de verdades
            p | q | p ᴧ q 
            V | V |   V
            V | F |   F
            F | V |   F
            F | F |   F
    - [Disjunção] Dadas proposições p e q, "A disjunção de p e q" é uma proposição que é falsa se e só se p e q forem simultaneamente falsas.
        - Tabela de verdades
            p | q | p V q 
            V | V |   V
            V | F |   V
            F | V |   V
            F | F |   F
    - Propriedade 3 - Princípio do terceiro excluído - Dada uma proposição p, a proposição p V ~p é verdadeira
    - [Implicação] Dadas proposições p e q, "Implicação entre p e q" é uma proposição que é falsa se e só se p for verdadeira e q for falsa.
        - Tabela de verdades
            p | q | p => q 
            V | V |   V
            V | F |   F
            F | V |   V
            F | F |   V
    - Propriedade 4 - Dadas proposições p, q e r se p => q e q => r, então p => r
        Por convenção, em qualquer sequência de operações lógicas, a menos que existam parênteses, respeitam-se as seguintes prioridades: Negação, Conjunção e Disjunção, Implicação e Equivalência

    - Propriedade 5 - Dadas proposições p e q, a proposição ~(p => q) é equivalente à proposição p ᴧ ~q

    - Propriedade 6 - Princípio da dupla implicação - Dadas proposições p e q, a proposição ("p é equivalente a q") p <=> q é verdadeira se e somente se p => q e q => p forem ambas proposições verdadeiras.

    - Propriedade 7 - Dada uma proposição p e representando por V (respetivamente F) uma qualquer proposição verdadeira (respetivamente falsa):
        p ᴧ V <=> p, p V V <=> V, p V F <=> p, p ᴧ F <=> F
        - Na operação lógica conjunção, V é o elemento neutro e F o elemento absorvente
        - Na operação lógica disjunção, V é o elemento absorvente e F o elemento neutro

    - Propriedade 8 - Dadas proposições p e q, ~(p ᴧ q) <=> ~p V ~q e ~(p V q) <=> ~p ᴧ ~q. Estas equivalências designam-se por Primeiras Leis de Morgan.

    - Propriedade 9:
        - Associativa da conjunção - (p ᴧ q) ᴧ r <=> p ᴧ (q ᴧ r)
        - Associativa da disjunção - (p V q) V r <=> p V (q V r)

    - Propriedade 10:
        - Comutativa da conjunção - p ᴧ q <=> q ᴧ p
        - Comutativa da disjunção - p V q <=> q V p

    - Propriedade 11:
        - Distributiva da conjunção relativamente à disjunção - p ᴧ (q V r) <=> (p ᴧ q) V (p ᴧ r)
        - Distributiva da disjunção relativamente à conjunção - p V (q ᴧ r) <=> (p V q) ᴧ (p V r)

    - Propriedade 12 - Dadas duas proposições p e q, a proposição p => q é equivalente à proposição ~q => ~p
        - ~q => ~p é a implicação contrarrecíproca da implicação p => q
(Slide 54)

























Resumo importante:
    - Lógica:
        - Negação - ~p (Não)
        - Disjunção - P V Q (Ou) -> F se FF
        - Conjunção - P ᴧ Q (E) -> V se VV
        - Implicação - P => Q (Se...então) -> F se VF
        - Equivalência - P <=> Q (Se e só se) -> Ambas têm o mesmo valor lógico (VV FF)

    - Propriedade 1 - Princípio de não contradição -> Proposição não poder simultaneamente V ou F -> ~(p ᴧ ~p)
    - Propriedade 2 - Dupla negação -> ~(~p) <=> p
    - Propriedade 3 - Terceiro excluído -> p V ~p => V
    - Propriedade 4 - p => q e q => r, então p => r
    - Propriedade 5 - ~(p => q) -> p ᴧ ~q
    - Propriedade 6 - Princípio da dupla implicação -> p<=>q é V se p => q e q => p
    - Propriedade 7 - p ᴧ V <=> p, p V V <=> V, p V F <=> p, p ᴧ F <=> F
        - Conjunção - V é o elemento neutro e F o elemento absorvente
        - Disjunção - V é o elemento absorvente e F o elemento neutro
    - Propriedade 8 - Primeiras Leis de Morgan
        - ~(p ᴧ q) <=> ~p V ~q |
                               |- Troca-se o valor de tudo lá entro
        - ~(p V q) <=> ~p ᴧ ~q |
    - Propriedade 9:
        - Associativa da conjunção - (p ᴧ q) ᴧ r <=> p ᴧ (q ᴧ r)
        - Associativa da disjunção - (p V q) V r <=> p V (q V r)
    - Propriedade 10:
        - Comutativa da conjunção - p ᴧ q <=> q ᴧ p
        - Comutativa da disjunção - p V q <=> q V p
    - Propriedade 11:
        - Distributiva da conjunção relativamente à disjunção - p ᴧ (q V r) <=> (p ᴧ q) V (p ᴧ r)
        - Distributiva da disjunção relativamente à conjunção - p V (q ᴧ r) <=> (p V q) ᴧ (p V r)
    - Propriedade 12 - p => q <=> ~q => ~p -> ~q => ~p é a implicação contrarrecíproca de p => q

Exercícios para fazer
    Logica 5 6 7 8 9 10 11 12 17 18 19
    Teoria de conjuntos pag1 1 2 3 / pag2 1 2 3 4(nao 4.5) / pag3 todo / pag4 todo menos 13 / pag 5 tudo


    p => q <=> ~p V q
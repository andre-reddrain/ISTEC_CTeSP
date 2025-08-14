# Matrizes

## Definição e classificação de Matrizes

$A_{m*n}$ - Matriz A com ordem m x n
**M = Linhas**
**N = Colunas**

$A_{3*3} = \begin{bmatrix}
    1_{11} & 2_{12} & 3_{13} \\
    4_{21} & 5_{22} & 6_{23} \\
    7_{31} & 8_{32} & 9_{33}
\end{bmatrix}$

**Matriz Quadrada**: m = n. Possui 2 diagonais
$\begin{bmatrix}
    1 & 2 & 3 \\
    4 & 5 & 6 \\
    7 & 8 & 9
\end{bmatrix}$
Diagonal 1: 1 5 9
Diagonal 2: 3 5 7

**Matriz Retangular**: m ${=}\llap{/\,}$ n.
$\begin{bmatrix}
    1 & 2 \\
    3 & 4 \\
    5 & 6
\end{bmatrix}_{3*2}$

**Matriz Linha**: 1xn
$\begin{bmatrix}
    1 & 2 & 3
\end{bmatrix}_{1*3}$

**Matriz Coluna**: mx1
$\begin{bmatrix}
    1 \\
    2 \\
    3 \\
\end{bmatrix}_{3*1}$

**Matriz triangular**: **Matrizes quadradas** nas quais os elementos abaixo ou acima da diagonal principal são todos nulos:
- **Matriz triangular superior**: Elementos abaixo da diagonal principal são todos nulos
$\begin{bmatrix}
    1 & 2 & 3 \\
    0 & 4 & 5 \\
    0 & 0 & 6
\end{bmatrix}$
- **Matriz triangular inferior**: Elementos acima da diagonal principal são todos nulos
$\begin{bmatrix}
    1 & 0 & 0 \\
    2 & 3 & 0 \\
    4 & 5 & 6
\end{bmatrix}$

**Matriz diagonal**: Elementos acima e abaixo da diagonal principal são todos nulos
$\begin{bmatrix}
    1 & 0 & 0 \\
    0 & 2 & 0 \\
    0 & 0 & 3
\end{bmatrix}$

**Matriz identidade**: **Matriz diagonal**, onde todos os elementos da diagonal principal são iguais a 1
$\begin{bmatrix}
    1 & 0 & 0 \\
    0 & 1 & 0 \\
    0 & 0 & 1
\end{bmatrix}$

**Matriz nula**: Todos os elementos são nulos
$\begin{bmatrix}
    0 & 0 & 0 \\
    0 & 0 & 0 \\
    0 & 0 & 0
\end{bmatrix}$

**Matriz transposta**: Dada uma matriz A mxn, a sua transposta, AT, tem ordem nxm
A = $\begin{bmatrix}
    1 & 2 \\
    3 & 4 \\
    5 & 6
\end{bmatrix}$ AT = $\begin{bmatrix}
    1 & 3 & 5 \\
    2 & 4 & 6
\end{bmatrix}$
- **Matrizes iguais**: Dada uma matriz A e B, da mesma ordem, são iguais. A mn = Bmn
- **Matriz simétrica**: **Matriz quadrada** tal que A = AT

## Operações entre matrizes

**Adição de matrizes**: A e B, da mesma ordem, a matriz $C = A + B$, também da mesma ordem, é tal que os seus elementos são **$C_{ij} = A_{ij} + B_{ij}$**
- Propriedades:
    - **Comutativa**: $A + B = B + A$
    - **Associativa**: $A + (B + C) = (A + B) + C$
    - **Elemento neutro da adição**: $A + 0 = A$

$\begin{bmatrix}
    1 & 2 & 3 \\
    4 & 5 & 6 \\
    7 & 8 & 9
\end{bmatrix}$ + $\begin{bmatrix}
    3 & 7 & 2 \\
    8 & 1 & 9 \\
    5 & 4 & 6
\end{bmatrix}$ = $\begin{bmatrix}
    1 + 3 & 2 + 7 & 3 + 2 \\
    4 + 8 & 5 + 1 & 6 + 9 \\
    7 + 5 & 8 + 4 & 9 + 6
\end{bmatrix}$ = $\begin{bmatrix}
    4 & 9 & 5 \\
    12 & 6 & 15 \\
    12 & 12 & 15
\end{bmatrix}$

**Multiplicação por escalar**: A, de ordem m x n, e K, um escalar real. A matriz $D = KA$, também de ordem m x n, é tal que seus elementos são **$D_{ij} = KA_{ij}$**
- Propriedades:
    - **Distributiva em relação à adição de matrizes**: $K (A + B) = KA + KB$
    - **Distributiva em relação à adição de escalares**: $(K_{1} + K_{2})A = K_{1}A + K_{2}A$
    - **Elemento absorvente da multiplicação por escalar**: $0A = 0$
    - **Associativa**: $K_{1}(K_{2}A) = (K_{1}K_{2})A$

$2A = \begin{bmatrix}
    1 * 2 & 2 * 2 & 3 * 2 \\
    4 * 2 & 5 * 2 & 6 * 2 \\
    7 * 2 & 8 * 2 & 9 * 2
\end{bmatrix}$ = $\begin{bmatrix}
    2 & 4 & 6 \\
    8 & 10 & 12 \\
    14 & 16 & 18
\end{bmatrix}$

**Multiplicação de matrizes**: $A_{mn}$ e $B_{np}$. A matriz produto $E = AB$, tem ordem **$M P$** onde cada elemento $E_{ij}$ é obtido por meio da soma dos produtos dos elementos correspondentes da i-ésima linha de A pelos elementos da j-ésima coluna B.
- Propriedades:
    - **Não comutativa**: Em geral, $AB {=}\llap{/\,} BA$
    - **Elemento neutro da mutiplicação**: $AI = IA = A$, sendo $I$ a matriz identidade
    - **Distributiva à esquerda em relação à soma**: $A(B + C) = AB + AC$
    - **Distributiva à direita em relação à soma**: $(A + B)C = AC + BC$
    - **Associativa**: $(AB)C = A(BC)$
    - **Transposta**: ${(AB)^T} = B^TA^T$
    - **Matriz nula**: $0A = 0$ e $A0 = 0$

$A = \begin{bmatrix}
    3 & 2 \\
    5 & -1
\end{bmatrix} B = \begin{bmatrix}
    6 & 4 & -2 \\
    0 & 7 & 1
\end{bmatrix} A_{{\color{red}2} * {{\color{green}2}}} * B_{{\color{green}2}*\color{red}3} = C_{{\color{red}2}*\color{red}3}$
Nota: Multiplicação é impossível quando estes 2 valores a verde não forem iguais!

$C = A * B$
$C = \begin{bmatrix}
    3*6 + 2*0 & 3*4 + 2*7 & 3*(-2) + 2*1 \\
    5*6 + (-1)*0 & 5*4 + (-1)*7 & 5*(-1) + (-1)*1
\end{bmatrix}$

$= \begin{bmatrix}
    18+0 & 12+14 & -6+2 \\
    30+0 & 20-7 & -10-1
\end{bmatrix} = \begin{bmatrix}
    18 & 26 & -4 \\
    30 & 13 & -11
\end{bmatrix}$

## Determinantes
**Definição**: A toda **matriz quadrada** está associado um número, denominado **determinante** da matriz, que é obtido por meio de operações entre os elementos da matriz.
**Notação**: O determinante de uma matriz é detonado por meio de duas barras verticais: $det(A) = |A|$

### Cálculo de determinantes
**Matriz quadrada de ordem 1**: $|a_{11}| = a_{11}$

**Matriz quadrada de ordem 2**: O determinante é obtido pela diferença entre o produto dos elementos da diagonal principal e o produto dos elementos da diagonal secundária.
$\begin{bmatrix}
    a_{11} & a_{12} \\
    a_{21} & a_{22}
\end{bmatrix} = a_{11}a_{22} - a_{12}a_{21}$

**Matriz quadrada de ordem 3**: Regra de Sarrus
(Adicionar imagem do slide 22)

**Teorema de Laplace**: O determinante de uma matriz quadrada A de ordem $n \ge 2$ é dado pela soma dos produtos dos elementos de uma fila (linha ou coluna), pelos seus respetivos cofatores. **Sugestão**: *Escolher a fila com o maior número de zeros.*

(Fazer exs do slide 23 e 25)

## Matriz Inversa
Dada uma matriz A, **quadrada**, de ordem n, se existir uma matriz $A^{-1}$, da mesma ordem, tal que $AA^{-1} = A^{-1}A = In$, então $A^{-1}$ é a matriz inversa de A. Representamos a matriz inversa de A por **$A^{-1}$**.

Nem toda a matriz tem inversa. Para uma matriz A ser invertível, será necessário que o seu determinante seja diferente de 0.
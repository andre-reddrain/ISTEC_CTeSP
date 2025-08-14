# Algoritmos e Estrutura de Dados
- **Estruturas de dados** são métodos de representação de dados organizados de modo a serem usados eficientemente pelo programa.
- **Algoritmo** é um procedimento que especifica instruções passo a passo para resolver um problema ou executar uma tarefa específica.

**Programação**:
- Representação eficiente de Dados: **Estrutura de Dados** - Método de representação de dados. Ex: *Arrays, Listas, Árvores*
- Desenvolvimento de um procedimento passo a passo: **Algoritmos** - Procedimento que contém etapas para executar uma tarefa

**Definições Algoritmos**:
- **Algoritmo** - É um conjunto finito de regras através das quais se pode dar execução a um dado processo.
- **Processo** - É um conjunto ordenado de ações sujeito a critérios de decisão condicionados a valores de variáveis através do qual podemos atingir um dado objetivo.
- **Programa** - É essencialmente um algoritmo que diz ao computador os passos específicos e em que ordem eles devem ser executados.

    Diferentes algoritmos podem realizar a mesma tarefa usando um conjunto diferenciado de instruções em mais ou menos tempo, espaço ou esforço do que os outros.

**Um algoritmo deve ser**:
- **Finito** - Terminar após um nº finito de ações.
- **Inteligível** - As ações a executar devem ser definidas sem ambiguidade (objetivo)
- **Exequível** - As ações devem ser executadas num lapso de tempo satisfatório.
- **Caracterizável** - Existe um conjunto de entradas, do qual o processo depende, podendo existir um conjunto de saídas (resultados) de que se conheça a relação funcional com as entradas.

Um algoritmo presta-se de várias formas:
- Narrativa comum
- Pseudocódigo
- Fluxograma

**Diagramas de fluxos ou Fluxograma**
- Forma gráfica de representar as instruções e respetivas operações incluídas em determinado algoritmo para a solução de um dado problema.
    - Estruturas **Condicionais**
        - Se... Senão... Então (**if...else...if else**)
    - Estruturas **Ciclo**
        - Enquanto (condição)... fim enquanto (**while**)
        - Repetir até que... (**do...while**)
        - Para... até (**for**)

**Sequências Lógicas**
- Conjunto de instruções sequenciais utilizadas para cumprir determinada tarefa
- Ex: Soma de 2 valores
    - Escreva um algoritmo de um programa de computador que efetue a leitura de dois números numéricos inteiros, A e B, execute a sua soma e apresente o resultado obtido R.
    - Em **narrativa comum**: 
        - **Entrada** -> **Processamento** -> **Saída**
            - **Entrada** - Ler dois valores, representados por duas variáveis A e B
            - **Processamento** - Efetuar a soma das duas variáveis A e B, colocando o seu resultado na variável R
            - **Saída** - Mostrar o conteúdo da variável R, após o processamento

**Definições Programação**
- **Linguagens de programação** - Formas de código de algoritmos que obedecem a regras sintáticas e semânticas de forma a que se torne executável por um computador.
    - Logo, **escrever um programa** para um processo consiste em:
        - **Criar um algoritmo** em que esse processo se possa concretizar
        - **Traduzir esse algoritmo na linguagem de programação escolhida**, obedecendo rigorosamente às suas regras

**Algoritmos**
- **Operadores lógicos**
    - Operador de **Disjunção**: E
    - Operador de **Conjunção**: OU
    - Operador de **Negação**: NÃO

- **Expressões Aritméticas**
    <table>
     <tr><th>Operador<th>Tipo<th>Operação<th>Prioridade</tr>
     <tr><td>+<td>Binário<td>Adição<td>4</tr>
     <tr><td>-<td>Binário<td>Subtração<td>4</tr>
     <tr><td>*<td>Binário<td>Multiplicação<td>3</tr>
     <tr><td>/<td>Binário<td>Divisão<td>3</tr>
     <tr><td>MOD<td>Binário<td>Resto da divisão<td>3</tr>
     <tr><td>DIV<td>Binário<td>Divisão inteira<td>3</tr>
     <tr><td>**<td>Binário<td>Exponenciação<td>2</tr>
     <tr><td>+<td>Unário<td>Manutenção do Sinal<td>1</tr>
     <tr><td>-<td>Unário<td>Inversão do Sinal<td>1</tr>
    </table>

- **Operadores relacionais**
    <table>
     <tr><th>Operação<th>Símbolo<th>Exemplo<th>Resultado</tr>
     <tr><td>Igual<td>=<td>7 = 7<td>Verdadeiro</tr>
     <tr><td>Maior que<td>><td>10 > 20<td>Falso</tr>
     <tr><td>Menor que<td><<td>100 < 1000<td>Verdadeiro</tr>
     <tr><td>Menor ou igual a<td><=<td>1.25 <= 2.50<td>Verdadeiro</tr>
     <tr><td>Maior ou igual a<td>>=<td>1234 >= 1234<td>Verdadeiro</tr>
     <tr><td>Diferente de<td><><td>10 <> 10<td>Falso</tr>
    </table>
# Aula 2 - Vetores
- **Constantes** - São espaços na memória que armazenam **valores que não mudam durante a execução do programa**.
- **Variáveis** - São espaços na memória que podem armazenar diferentes tipos de dados e **cujo valor pode mudar durante a execução do programa**.
- **Organização da Memória RAM**
    1. **Segmento de Dados** - Onde as variáveis globais e estáticas são armazenadas
    2. **Segmento de Código** - Onde o código do programa é armazenado.
    3. **Heap** - Onde a memória dinâmica é alocada (usada para variáveis que são alocadas e desalocadas em tempo de execução)
    4. **Stack** - Onde as variáveis locais e os parâmetros de função são armazenados.

- **Tipos primitivos**
    - Inteiro (**int**) - Utilizado para representar **números inteiros**
    - Ponto flutuante (**float**) - Utilizado para representar **números decimais**
    - Caractere (**char**) - Utilizado para representar **um único caractere**
    - Booleano (**bool**) - Utilizado para representar **valores lógicos verdadeiro ou falso**

- **Tipos compostos**
    - Texto (**string**) - Utilizado para representar **sequências de caracteres**
    - Vetores-matrizes (**array*) - Utilizado para armazenar uma **coleção de elementos do mesmo tipo**
    - Estruturas (**struct**) - Utilizado para **criar tipos de dados personalizados que podem conter diferentes campos com diferentes tipos de dados**
    - **Classes** - Utilizado em linguagens de programação orientada a objetos para **criar objetos com propriedades e métodos**

- **Vetores** 
    - É definido por um conjunto de elementos **[0...,n-1]**, onde **x[0]** é o **primeiro elemento do vetor**.
    - **x[k]** lê-se **x índice de k**, sendo k uma constante inteira positiva
    - Informaticamente, um vetor é representado de **forma contígua e os seus elementos são armazenados em endereços de memória contíguos**. Este agrupamento de variáveis obedece sempre ao mesmo tipo de dados e é referenciada por um único nome.
    - Com vetores é-nos possível o tratamento de longas listas de dados por forma a:
        - Ordená-los por **ordem crescente**
        - Ordená-los por **ordem decrescente**
        - **Consultar o valor de um elemento posicionado na posição k do vetor**
        - Pesquisar / Verificar se existe um determinado valor numa posição k do vetor
        - **Alterar o valor de um elemento posicionado na posição k do vetor**
        - **Remover um elemento posicionado na posição k do vetor**
        - **Inserir um novo elemento na posição k+1**
    - Os **métodos de pesquisa** de um elemento pode ser feita através de
        - **Pesquisa sequencial**
        - **Pesquisa binária ou dicotómica**
    - Os métodos conhecidos na **ordenação de um vetor** são:
        - **Método de Ordenação por Troca de posição**
        - **Método das Bolhas**
        - **Método dos Mínimos Sucessivos**
        - **Método dos Máximos Sucessivos**
    - Existem algumas **desvantagens** na representação por continuidade
        1. **Algumas operações exigem grande esforço computacional** podendo ser determinante no resultado de desempenho do programa.
        2. **Ao declararem-se as variáveis no programa, a estimativa do comprimento máximo que o vetor deve ser conhecido**, pois o seu comprimento não pode ser alterado dinamicamente no programa
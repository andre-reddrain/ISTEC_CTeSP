# Análise de Dados

## Amostragem

### População

É o conjunto de **todas as entidades** envolvidas, e sobre a qual queremos generalizar um qualquer resultado. No contexto de avaliação de aplicações interativas, o termo população refere-se normalmente a todos os potenciais utilizadores de uma aplicação.

### Amostra

É um **subconjunto representativo da população** que nos permite **extrapolar** para estes resultados que de outra forma seriam **impossíveis de medir**. Em grande medida, é esse o objetivo da **estatística**: compreender o comportamento da população a partir do observado numa amostra.
***

## Variáveis

### Tipos de variáveis

- **Variável dependente** - É normalmente o que queremos **medir** num estado. São dependentes porque o seu **valor depende das condições do teste**. Essas condições são normalmente pelas **variáveis independentes**.

  Ex: Tempo / Erros / Tarefas / Clicks / Satisfação
- **Variável independente** - Estas **não dependem de outros fatores**, podendo variar apenas por intervenção do avaliador.
- **Nominal** - Valores não têm ordem.
- **Ordinal** - Valores têm ordem.
- **Rácio** - Valores têm proporção.
- **Continua** - Valores não têm valor base.
***

## Estatística Descritiva

### Média

A estatística descritiva mais recorrentemente encontrada é a média aritmética. É uma **medida de tendência central**, dado que revela um valor em redor do qual os vários valores da variável estão posicionados. Contudo, não dá uma ideia de distribuição, e em alguns casos, não reflete a realidade.

$$\bar{X} = \frac{\sum_{i=0}^{n} x_i}{n}$$

Exemplo: 

${Media} = \frac{2 + 3 + 3 + 2 + 2 + 2 + 20}{7} = 4.86$

### Variância

É necessário associar a média a uma **medida de dispersão**, que nos dê uma ideia de como estão distribuídos os valores. Para esse efeito, calcula-se a variância. Uma maior variância indica que os dados estão mais dispersos.

$$S^2 = \frac{\sum_{i=0}^{n} (x_i - \bar{X})^2}{(n-1)}$$

Exemplo: 

$A = (51, 54, 53, 54)$

$Media = \frac{51 + 54 + 53 + 54}{4} = 53$

$S^{2} = \frac{(51 - 53)^2 + (54 - 53)^2 + (53 - 53)^2 + (54 - 53)^2}{4} = 1,5$

### Desvio-Padrão

A variância **não se expressa nas mesmas unidades** que os valores que lhes deram origem. É por isso que se usa o desvio-padrão.

$$S = \sqrt{S^2}$$

Exemplo:

$A = (51, 54, 53, 54)$

$S = \sqrt{1,5} = 1,22$

### Moda

Outra **medida de tendência central**, recorrentemente usada é a moda, aplicável a variáveis nominais. **É o valor mais escolhido!**

### Mediana

Outra forma de saber em torno de que valor se situam os vários valores da amostra é calcular a mediana, outra **medida de tendência central**. Adicionalmente, a mediana tem a vantagem de, ao contrário da média, poder ser aplicada a **variáveis ordinais**. **É o valor que fica no meio!** Contudo, a amostra de números tem que ser ordenado!

### Decis, Quartis, Percentis

São medidas de dispersão que podem ser usadas nos casos em que o **desvio-padrão não é suficientemente** informativo. Sabes apenas a dispersão não é suficiente. É preciso saber como é que os valores estão distribuídos.

#### Percentis

Um percentil, a uma dada percentagem, é o valor que está na **posição da lista** que deixa antes de si essa percentagem de valores. Por exemplo, o percentil-30 deixará atrás de si 30% dos valores e depois 70%.

$$\frac{N}{100}p + 0,5$$

Exemplo:

$A = (16, **23**, 29, 33, 36, 43, 46, 56, 77, 81, 112)$

Percentil-10 = $\frac{11}{100} * 10 + 0,5 = 1,6$, arredondado para 2

#### Quartis e Decis

Os quartis, que dividem os dados em **quatro zonas** de igual número de valores, podem ser calculados da mesma forma. O quartil-1 (Q1) é igual ao percentil-25, Q2 ao percentil-50, e Q3 ao percentil-75.

De igual modo se calculam os decis, mas desta vez a intervalos de **10% em vez de 25%**.
***

## Inferência Estatística

### Estatísticas Indutivas

Dão-nos uma forma de tirar conclusões para toda a **população**, com base em valores de uma **amostra**. No fundo, permitem-nos **quantificar a "sorte"** e compreender até que ponto uma amostra é representativa da população, e como podem os parâmetros que as definem diferir, com um determinado **grau de confiança**.

### Confiança Estatística

Queremos saber pelo menos com que **probabilidade** o valor que encontrámos, com uma amostra, poderá ser **atípico face à população**. Queremos saber o grau de confiança que temos nos nossos resultados.

### Intervalo de Confiança

Para um dado grau de confiança, tradicionalmente **$a = 0.05$**, a probabilidade de, por acaso, a média da população estar fora do intervalo é de $a$. Ou seja, se repetíssemos a experiência 100 vezes, recolhendo 100 amostras diferentes, poderíamos esperar que em cinco delas a média estivesse fora do intervalo.

### Teste-t

O teste-t para uma amostra (também designado por teste-t de parâmetro único ou teste-t para uma amostra) é utilizado para **determinar se uma amostra provém de uma população com uma média específica**. Essa média populacional nem sempre é conhecida, mas às vezes é considerada uma hipótese.

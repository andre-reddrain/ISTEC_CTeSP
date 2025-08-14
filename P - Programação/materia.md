<style>
td {
    text-align: center;
}
</style>

Um programa é a descrição rigorosa numa linguagem de programação de um processo que permite ao computador resolver um problema.
1. Programas são compostos por módulos
2. Módulos contêm sequências de comandos
3. Alguns comandos são expressões
4. Expressões criam e manipulam objetos

Python é uma linguagem **OOP (Object-Oriented Programming)**. Tudo são objetos.

O código python segue regras muitos estritas. Obriga a **alinhar** ou **indentar** cada block de código de modo rígido.

No modo interativo, o interpretador funciona num ciclo conhecido por **Lê - Avalia - Escreve**.

## Variáveis
Uma variável é um nome pelo qual um objeto passa a poder ser designado. O nome é um atributo do objeto.
A variável tem um nome (**altura**), um valor (**1.81**), e um tipo (**float**).

### Nome das variáveis
Não podem ser usadas como nomes de variáveis as palavras reservadas com **False, None, True, and, as, assert, break, class, for, if, while...**.

### Tipos de dados
- **int** - Números sem parte decimal. Positivos ou negativos. (ex: '20')
- **float** - Números com parte decimal. Positivos ou negativos. (ex: '3.14')
- **complex** - Números com parte real e parte imaginária (ex: '1 + 2j')
- **bool** - Podem assumir o valor de verdadeiro ou o valor falso. (ex: '3 < 7')
- **strings** - Cadeias de caracteres. (ex: 'olá mundo')

## Operadores
<table>
<tr><th>Operações</th><th>Descrição</th></tr>
<tr><td><b>+</td><td>Adição</td>
<tr><td><b>-</td><td>Subtração (dois argumentos)</td>
<tr><td><b>*</td><td>Multiplicação</td>
<tr><td><b>/</td><td>Divisão</td>
<tr><td><b>//</td><td>Divisão truncada/inteira</td>
<tr><td><b>%</td><td>Resto</td>
<tr><td><b>-</td><td>Negação (um argumento)</td>
<tr><td><b>abs</td><td>Valor absoluto</td>
<tr><td><b>conjugate</td><td>Conjugado de um complexo</td>
<tr><td><b>divmod</td><td>Divisão truncada e resto</td>
<tr><td><b>pow</td><td>Exponenciação</td>
<tr><td><b>**</td><td>Exponenciação</td>
<tr><td><b>int(obj, base=10)</td><td>Converte Inteiro para base x</td>
<tr><td><b>float(obj)</td><td>Converte para float</td>
<tr><td><b>complex(real, imag=0.0)</td><td>Converte para complexo</td>
</table>

## Prioridades
A prioridade dos operadores determina a ordem pela qual as operações são realizadas numa expressão.

<table>
<tr><th>Operador</th><th>Símbolo</th></tr>
<tr><td>Parênteses</td><td><b>( )</td>
<tr><td>Exponenciação</td><td><b>**</td>
<tr><td>Unário</td><td><b>* - not</td>
<tr><td>Multiplicação e divisão</td><td><b>* / // %</td>
<tr><td>Adição</td><td><b>+ -</td>
<tr><td>Comparação (Relacionais)</td><td><b>< <= > >= == !=</td>
<tr><td>Operação composta</td><td><b>%= = += -= /= *=</td>
<tr><td>Conjunção</td><td><b>and</td>
<tr><td>Disjunção</td><td><b>or</td>
<tr><td>Atribuição</td><td><b>=</td>
</table>

**Ligação ao lado esquerdo**: Quando os operadores tem todos a mesma prioridade, os cálculos são efetuados da **esquerda para a direita**.
**3 * 4 * 5 * 6 <=> (((3 * 4) * 5) * 6) <=> 360**

**Ligação do lado direito**: Aplicada **apenas** à exponenciação.
**2 ** 2 ** 3 <=> (2 ** (2 ** 3)) <=> 256**

## Operadores booleanos
<table>
<tr><th>Operadores</th><th>Descrição</th></tr>
<tr><td>x and y</td><td>O e lógico</td>
<tr><td>x or y</td><td>O ou lógico</td>
<tr><td>not x</td><td>Negação lógica</td>
<tr><td>></td><td>Maior</td>
<tr><td>>=</td><td>Maior ou igual</td>
<tr><td><</td><td>Menor</td>
<tr><td><=</td><td>Menor ou igual</td>
<tr><td>==</td><td>Igual valor</td>
<tr><td>!=</td><td>Desigual (valor)</td>
<tr><td>is</td><td>Igual identidade</td>
<tr><td>is not</td><td>Desigual identidade</td>
</table>


eval - Converte os carateres do input num número

## Input
A função input permite pedir dados ao utilizador. Do teclado vem sempre uma string.
É necessário converter a string para o tipo de dados pretendido.
```python
valor = eval(input('Insira um valor: '))
```

## Print
A função print permite mostrar dados ao utilizador no ecrã. No ecrã só são apresentados caracteres.
A função print converte sempre o valor numa string.
Permite enviar vários valores separados por virgulas e fazer a conversão automaticamente.
Permite ainda formatar a impressão a partir do caracter %.
A formatação com o **%** permite imprimir como inteiros ou como reais, com ou sem sinal, com um determinado numero de casas decimais, encostado à esquerda ou à direita, etc...
```python
print(valor)
print('O numero inserido é', valor)
print('O dobro de %i é %i' % (valor, valor * 2))
```
Como alternativa à impressão formatada, podemos construir **strings formatadas**.
```python
x = 5
y = 10
resultado = f"A soma de {x} e {y} é {x + y}."
print(resultado)
```
A sequência de escape '\\' nos strings a imprimir permite formatar o modo como o texto vai ser apresentado no utilizador (\n \t \r \' \'' \\\ ...)
```python
print('uma linha\noutra linha')
# uma linha
# outra linha

print('imprimir a barra \\ e as aspas \" e a plica \'.')
# imprimir a barra \ e as aspas " e a plica '.

print('col1\tcol2\tcol3\tcol4')
# col1    col2    col3    col4
```

O parâmetro **end=** permite substituir o \n que o print insere no fim das linhas por outro caracter.
O parâmetro **sep=** permite substituir o espaço que o print insere entre os valores a imprimir por outro caracter.
```python
print('Bom', end=' ')
print('Dia')
# Bom Dia

print('um', 'dois', 'tres')
# um dois tres

print('um', 'dois', 'tres', sep='++')
# um++dois++tres
```

## Funções
Uma definição é uma abstração para uma operação mais ao menos complexa.
```python
def peso(altura):
    return (72.7 * altura) - 58

peso(1.81)  # 73.5870
peso(1.61)  # 59.0470
```

# Estruturas de controlo
```python
# Estrutura de seleção
if genero == 1:     # If
    # ...
elif genero == 2:   # Else If
    # ...
else:               # Else
    # ...

for i in range(5):  # For
    # range(5) -> 0 1 2 3 4
    break           # break termina a execução do ciclo for
    # ...
    continue        # continue avança para a próxima iteração
    # ...

while num < 0:      # While
    # ...
    break           # break termina a execução do while
    # ...
    continue        # continue avança para a próxima iteração
```
### else no ciclo for
Com o **else** as instruções adicionais só são executadas se o ciclo terminar normalmente no fim de todas as iterações (sem **break**)
```python
for i in range(5)
    # ...
else:
    # ...
```
Sem o **else** as instruções adicionais são sempre executadas.
```python
for i in range(5)
    # ...

# ...
```
### else no ciclo while
Com o **else** as instruções adicionais só são executadas se o ciclo terminar normalmente (sem **break**)
```python
while num < 0:
    # ...
else:
    # ...
```
Sem o **else** as instruções adicionais são sempre executadas.
```python
while num < 0:
    # ...

# ...
```

# Estruturas de dados
**range** é um iterador que devolve os elementos de uma sequência à medida que eles são necessários, evitando deste modo que estes estejam todos em memória.
```python
tuple(range(4))
# (0, 1 , 2, 3) -> Início em 0, excluí o 4

tuple(range(2, 6))
# (2, 3, 4, 5) -> Início em 2, excluí o 6

tuple(range(2, 13, 3))
# (2, 5, 8, 11) -> Início em 2, excluí o 13, passo 3
```

### Cadeias de caracteres

**Conversão**
**ord** permite converter um caracter para o seu código (ASCII), e outra para converter um código para caracter (**chr**).
```python
cc = 'A'
ord(cc) # 65
chr(65) # A
chr(67) # C
ord('a') # 97
```

**Comparação**
Podem ser comparadas usando os operadores convencionais de comparação: >, <, <==, ==, !=, >=.
Para se obter o resultado destas comparações usam-se os códigos dos seus caracteres.

**Operadores** - existe um conjunto de operações comuns aos vários tipos de sequências.

<table>
<th>Literal<th>Interpretação
<tr><td>+<td>Concatenação de cadeias de carateres
<tr><td>*<td>Cópias de superfícies de uma cadeia
<tr><td>len<td>Comprimento da cadeia
</table>

**Indexação**
Cada posição tem associadas um índice.
```python
# -12 -11 -10 -9 -8 -7 -6 -5 -4 -3 -2 -1
#  H   o   m   e  m     A  r  a  n  h  a
#  0   1   2   3  4  5  6  7  8  9  10 11
cadeia = 'Homem Aranha'
cadeia[3]   # 'e'
cadeia[-1]  # 'a'
cadeia[0]   # 'H'
```
**Fatiamento**
A notação [**inf:sup**] para obter uma fatia e [**inf:sup:step**] para obter a sequência de elemtnos espaçados regularmente.
```python
cadeia = 'Homem Aranha'
cadeia[1:4] # 1 a 4 -> 'ome'
cadeia[:5]  # 0 a 5 -> 'Homem'
cadeia[6:]  # 6 a X -> 'Aranha'
cadeia[:]   # X a X -> 'Homem Aranha'
cadeia[::2] # X a X, de 2 em 2 -> 'HmmAah'
cadeia[1:7:2]   # 1 a 7, de 2 em 2 -> 'oe '
cadeia[::-1]    # Inverso -> 'ahnarA memoH'
```
Podemos usar o operador de formatação de cadeias de caracteres **%**
```python
mensagem_2 = "A soma de %d com %d dá %d" % (num_1, num2, num_1 + num_2)
```

<table>
<th>Literal<th>Interpretação
<tr><td><i>cad</i> in <i>s</i><td>Determina se <i>cad</i> é sub cadeia de <i>s</i>
<tr><td>max(cad)<td>Qual o maior elemento da cadeia
<tr><td>min(cad)<td>Qual o menor elemento da cadeia
<tr><td>s.index(cad)<td>O índice da primeira ocorrência de cad em s
<tr><td>s.count(cad)<td>O número de ocorrências de cad em s
<tr><td>s.find(cad)<td>O índice da primeira ocorrência ou -1
<tr><td>s.isalpha()<td>Verdadeiro se só letras
<tr><td>s.isdigit()<td>Verdadeiro se só digitos
<tr><td>s.center(comprimento)<td>Centra numa cadeia de comprimento
<tr><td>s.lower()<td>Converte para minúsculas
<tr><td>s.upper()<td>Converte para maiúsculas
<tr><td>s.strip()<td>Retira brancos à esqueda e direita
<tr><td>s.replace(velho,novo)<td>Substitui ocorrências de velho por novo
<tr>s.endswitch(cad)<td>Verifica se s termina em cad
</table>

### Tuplos
São coleções ordenadas e heterogéneas (os seus elementos podem ser de qualquer tipo e diferentes)
Quando usamos tuplos passamos a usar o objeto como um todo, mas podemos aceder às suas componentes.
A marca sintática dos tuplos são os parênteses .
Tuplos formados apenas por sequências de números são um modo natural de representar **vetores**.
```python
tt = (1, 'a', 2, 'b')
tt      # (1, 'a', 2, 'b')
tt[0]   # 1
tt[3]   # 'b'
```

<table>
<th>Literal<th>Interpretação
<tr><td>+<td>Concatenação
<tr><td>*<td>Cópias de superfície de uma cadeia
<tr><td>len<td>Comprimento
<tr><td>in<td>Determina se um tuplo é sup tuplo de outro
<tr><td>max<td>Qual o maior elemento do tuplo
<tr><td>min<td>Qual o menor elemento do tuplo
<tr><td>index<td>Índice da primeira ocorrência
<tr><td>count<td>Número de ocorrências
<tr><td>[i:j:k]<td>Fatiamento
</table>

**Empacotamento**
É possivel referirmo-nos a tuplos sem usar a sua marca sintática.
Isto pode acontecer quando criamos um tuplo com a instrução de atribuição, ou quando uma função devolve como **return** mais do que um resultado.
```python
t_3 = 1,2,3,4,5
t_3     # (1, 2, 3, 4, 5)

def toto(n):
    return n, n**2, n**3

res = toto(4)
res     # (4, 16, 64)
```

**Construtor**
```python
tuplo_4 = tuple()
tuplo_4     # ()
tuplo_5 = tuple('abc')
tuplo_5     # ('a', 'b', 'c')
tuplo_6 = tuple(123)    # Error! 'int' object is not iterable
```

**Tuplos imbricados ou aninhados**
```python
t = ('Coimbra', (40.15,8.27))
t[1][0]     # 40.15
t[0][3]     # 'm

tt = ((1,2), (3, ((4,5),6),7))
tt[1][1][1] # 6
tt[1][1][0][1]  # 5
```

## Imutabilidade
Existem objetos no python que são **imutáveis**, ou seja, não é possível alterar o seu valor sem alterar a sua identidade, criando assim um novo objeto.
Aplica-se a **Tuplos, Números, Cadeias de carateres, Range e Sets**.

### Imutabilidade dos números
O valor **não** pode ser alterado, mas a variável pode ser associada a outro valor.
Ex: o número com o valor **123** é criado na memória a uma variável com o nome **a**.
Quando se atribui um novo valor a uma variável, é criado um **novo objeto** associado ao mesmo nome.
```python
a = 123
id(a)   # 2266509695152
b = a
id(b)   # 2266509695152

a = 321
id(a)   # 2266554699152
id(b)   # 2266509695152
```
A imutabilidade dos tuplos pode ser ultrapassada construindo um novo tuplo e associado o objeto resultante ao mesmo nome.

```python
tt = (1,2,3)
tt[1] = 6   # Error! 'tuple' object does not support item assignment
tt = (tt[0], 6, tt[2])
tt          # (1, 6, 3)
```
A imutabilidade das cadeias de carateres faz-se do mesmo modo.
```python
heroi = 'Homem Aranha'
heroi[0] = 'h'  # Error! 'str' objet does not support item assigment
heroi = heroi[:6] + 'Pi' + heroi[7:]
heroi           # 'Homem Piranha'
```

## Listas
Listas são coleções ordenadas de objetos, de comprimento variável, acedidas por posição, heterogéneas e mutáveis.
Listas são sequências, separados por vírguloas.
Os elementos no interior das listas podem ser de qualquer tipo, incluindo listas.
```python
lista = [0,1,2,3,4,5,6,7,8,9]
lista   # [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
lista[5] = 'muta'
lista   # [0, 1, 2, 3, 4, 'muta', 6, 7, 8, 9]
```

<table>
<tr><th>Nome<th>Operador<th>Significado
<tr><td>Indexação<td>[< n >]<td>Acede
<tr><td>Concatenação<td>L1 + L2<td>Junta
<tr><td>Repetição<td>L * n, n * L<td>Replica
<tr><td>Pertença<td>in, not in<td>Testa
<tr><td>Comprimento<td>len<td>Quantifica
<tr><td>Fatiamento<td>[::]<td>Parte
</table>

**Construtor**
```python
lista = list()          # []
lista = list('123')     # ['1', '2', '3']
lista = list((1,2,3))   # [1, 2, 3]
lista = list(range(5))  # [0, 1, 2, 3, 4]
```

**Cópia**
```python
vogais = ['A','E','I','O','U']
id(vogais)      # 11791776
copia = vogais[:]
copia           # ['A', 'E', 'I', 'O', 'U']
id(copia)       # 11797968
```

**Cópia profunda**
Para copiar listas com listas devemos fazer uma **cópia profunda** utilizando o método **deepcopy** do módulo **copy**

```python
import copy
vogais = ['A','E',['I','O'],'U','Z']
copia = copy.deepcopy(vogais)
copia   # ['A', 'E', ['I', 'O'], 'U', 'Z']
```
A instrução **del** permite remover um item da lista dado o seu índice em vez do seu valor. Também pode ser usada para remover fatias de uma lista ou limpar a lista inteira.
Também pode ser usado para apagar toda a variável.

```python
a = [0, 1, 2, 3, 4, 5, 6]
del a[0]
a       # [1, 2, 3, 4, 5, 6]
del a[2:4]
a       # [1, 2, 3, 6]
del a[:]
a       # []
```

<table>
<tr><th>Método<th>Operação
<tr><td><b>Não modificam<td>
<tr><td>list.index(obj,i=0,j=len(list))<td>Menor índice da ocorrência do objeto
<tr><td>list.count(obj)<td>Conta o número de vezes obj ocorre em list
<tr><td><b>Modificam<td>
<tr><td>list.append(obj)<td>Adiciona o objeto no fim da lista
<tr><td>list.extend(seq)<td>Junta seq à list
<tr><td>list.insert(index,ojb)<td>Insere o objeto na posição index
<tr><td>list.remove(obj)<td>Retira o objeto da lista
<tr><td>list.pop(index)<td>Retira o objeto da lista na posição index
<tr><td>list.reverse()<td>Inverte a lista
<tr><td>list.sort(cmp,key,reverse)<td>Ordena a lista
</table>

**Criar listas**
```python
import random

# Criar lista
lista = []

# Criar listas por compreensão
def gera_lista_b(n):
    return [random.randint(1,100) for i in range(n)]

# Criar listas por compreensão com filtro
lista = [i for i in [1,2,3,4,5,6] if i % 2 == 0]
lista   # [2, 4, 6]
```

## Dicionários
TODO Aula 4 Slide 37

## Comentários
```python
# Comentário de linha

""" 
Comentario
de várias
linhas
"""

def areaR(ladoA, ladoB)
    """
    Comentário de função
    """
    return ladoA * ladoB
```

## Módulos
Os módulos são ficheiros com código que permite aumentar as capacidades da linguagem de base.
Um módulo, para ser usado, tem que ser **previamente** importado.
Os módulos são, também, objetos.
Um modo simples de saber o que nos permitem fazer é inspecionar o objeto recorrendo ao comando **dir**.
```python
import math

def volume_esfera(raio):
    return (4/3) * math.pi * raio ** 3

dir(math)
help(math.sin)
```

## Modo não interativo
```python
# file areaRetang.py
"""
Calcula a area de um retangulo
"""
def areaR(ladoA, ladoB):
    return ladoA * ladoB

# Terminal python
>>> import areaRetang
>>> areaRetang.areaR(3, 5)
    15
>>>
```
# ADT - Abstract Data Type
- ADT é um tipo de dados cujo comportamento é definido por um conjunto de valores e operações.
- São usadas para simplificar diversas operações em programação.
- Os principais tipos de ADTs são:
    - Listas
    - Pilhas
    - Filas

## Listas
- Nas listas, os dados são armazenados de forma sequencial, em estruturas chamadas **Nós**.
- A lista mais comum é a **Lista encadeada (Linked List)**.
- Os **nós** são estruturas individuais que armazenam um campo de informação e um campo de enderenço (ponteiro ou link), sem a necessidade de se fazer a pré-alocação do espaço de memória no computador.
- O ponteiro ou link aponta para o próximo nó da lista.
- A lista pode ser **simples ou dupla** (dupla significa que a mesma lista está duplamente encadeada, apontando para elementos anteriores).
- Uma lisca encadeada também pode ser do tipo **circular** - O último elemento aponta para o primeiro elemento. Normalmente usada em aplicações geométricas e mapas com conjuntos cíclicos.
- Também usadas para a implementação de outro tipo de estruturas de dados, temos as pilhas e as filas.

### Lista encadeada
Uma lista encadeada é uma estrutura física de dados dinâmica e é composta por nós onde cada nó tem duas partes:
    1 - A **informação de dados** reais que devem ser armazenados na lista.
    2 - O **ponteiro/apontador (pointer/link)** é uma referência para o próximo nó da lista.
Com uma **estrutura de dados dinâmica** pode-se alocar a memória necessária enquanto o programa está a ser executado, podendo ser expandida ou reduzida durante o tempo de execução.

#### Diferenças entre uma lista encadeada e vetores
<table>
<tr><th>Listas Sequenciais<th>Vetores
<tr><td>1. Os dados em uma lista encadeada não são armazenados em locais de memória contíguos, ou seja, não existe uma correspondência direta entre o modo como os nós estão dispostos fisicamente no suporte físico e a sua ordenação lógica.<td>1. Nos vetores, os dados são armazenados em locais de memória contíguos.
<tr><td>2. A inserção e exclusão de elementos é mais fácil em listas encadeadas, não há necessidade de realocar ou reorganizar toda a estrutura da lista<td>2. Na inserção e exclusão de elementos, há necessidade de realocar ou reorganizar toda a estrutura da lista, isto envolve a troca de posição entre elementos.
<tr><td>3. É uma estrutura de dados que vai crescendo/diminuindo à medida que precisamos de armazenar/remover elementos. Tais estruturas são denominadas dinâmicas, pois usam alocação dinâmica para armazenar/remover elementos da lista.<td>3. Não se trata de uma estrutura de dados muito flexível, pois precisa-se de conhecer a dimensão do vetor.
<tr><td>4. Numa lista não temos acesso direto aos elementos da lista, há necessidade de a percorrer sequencialmente através da sua ordenação lógica.<td>
</table>

- A estrutura encadeada facilita a **concatenação ou a separação** de listas.
- A eliminação de um nó faz-se atualizando o nó precedente ao eliminar. O mesmo faz-se com a inserção.
- Para que seja possível percorrer todos os elementos da lsita, devemos explicitamente guardar o encadeamento dos elementos, o que é feito armazenando-se, juntamente com a informação de cada elemento, um ponteiro para o próximo elemento da lista.

#### Operações em listas
Podem-se realizar múltiplas operações sobre listas:
- **get()** - Retorna um elemento da lista numa posição específica
- **insert()** - Insere um elemento numa qualquer posição da lista
- **remove()** - Remove a primeira ocorrência de um elemento numa lista não vazia
- **removeAt()** - Remove um elemento que se encontra numa determinada posição numa lista não vazia
- **replace()** - Substitui um elemento em qualquer posição por outro elemento
- **size()** - Retorna o número de elementos de uma lista
- **isEmpty()** - Retorna um bool que indica se a lista está vazia ou não
- **isFull()** - Retorna um bool que indica se a lista está cheia ou não

#### Definição de uma lista encadeada
Sendo um nó constituído por uma parte com informação e outra parte com o apontador para o nó seguinte, a sua definição será a seguinte:
```json
tipo NÓ :: registo {
    dados: info,
    próximo: referência ao nó seguinte
}
```
Para implementar completamente esta estrutura, devemos ter ainda uma variável do tipo **referência a NÓ** para indicar qual o primeiro nó da lista, sendo a mesma feita por meio de uma primitiva.
A obtenção de nós para compor uma lista é feito por meio da primativa **obter(p)**, sendo p uma variável do tipo de **referência a NÓ**.
A execução deste comando faz com que seja atribuído, dinamicamente um espaço na memória do computador correspondente a este nó.

# Listas em C#

## Listas encadeadas simples

### Declaração de um nó
```csharp
Node temp = new(10);    // temp.info == 10; temp.link == null

// Declaração classe Node
// Esta classe é a base das nossas listas. SUPER IMPORTANTE
// Tê-la sempre declarada por baixo da lógica do projeto
public class Node(int info)
{
    public int info = info;     // Conteúdo do elemento
    public Node? link = null;   // Referência a outro elemento
}
```

### Inserção
A inserção de um nó numa lista pode ser feita:
- Numa lista vazia
- No início da lista
- No fim da lista
- Entre 2 nós da lista

#### Inserção de um nó no início da lista
**Lista de procedimentos**:
1 - Copiamos o link do cabeçalho para o nó a introduzir, neste caso o nó **temp**
2 - Colocamos o cabeçalho da lista a apontar para o nó que foi inserido no início da lista
Com isto, o nó temp passa a ser o primeiro da lista e o que era o primeiro nó da lista (start) passa a ser o segundo da lista.
```csharp
Node start = new(0);    // start.info == 0; start.link == null

temp.link = start;      // O elemento a seguir ao temp vai ser o start
start = temp;           // 1º elemento vai ser temp, e o elemento a seguir (2º) é o start
```

#### Inserção de um nó numa lista vazia
Depois da inserção, o cabeçalho da lista aponta para temp e **temp é o primeiro e o último da lista**, visto que temp.link = null
```csharp
temp.link = null;

start = temp;
```

#### Inserção de um nó no fim da lista
Depois da inserção, temp passa a ser o último da lista.
O último nó da lista vai ter o seu link como null, com isto, vai ficar a apontar para temp.

```csharp
p = start;      //p vai ser o 1º elemento da lista

// Enquanto o link não for null, quer dizer que existe um nó a seguir.
while (p.link != null)
    p = p.link;     // Aponta/avança para o nó seguinte

p.link = temp;      // O último elemento vai apontar para o nó temp
```

#### Inserção de um nó no meio da lista
**Lista de procedimentos**:
1 - O link do nó a inserir no meio da lista (temp) vai ficar igual ao link de *p*.
2 - O link do nó *p* vai apontar para o link de temp. Se o nó *p* for o último da lista, o link de *temp* seria null.
```csharp
temp.link = p.link;

p.link = temp;
```

#### Inserção de um nó no meio da lista, a seguir do nó que contém um valor x
Vai procurar, nó a nó, e vai validar o valor do nó a ser verificado. Se o nó tem o valor pretendido, vai-se inserir o nó *temp* no meio.
```csharp
p = start;

while (p != null) {
    if (p.info == x) break   // Se p.info corresponde a x, vai sair do ciclo while

    p = p.link;     // Aponta/avança para o nó seguinte
}

temp.link = p.link;

p.link = temp;
```

#### Inserção de um nó no meio da lista, antes do nó que contém um valor x
Vai procurar, nó a nó, e vai validar o valor do nó a ser verificado. Se o nó tem o valor pretendido, vai-se inserir o nó *temp* no meio.
```csharp
p = start;

while (p.link != null) {
    if (p.link.info == x) break  // Se o link de p tiver info corresponde a x, vai sair do ciclo while

    p = p.link;     // Aponta/avança para o nó seguinte
}

temp.link = p.link;

p.link = temp;
```

#### Inserção de um nó numa lista, numa determinada posição
//TODO Slide 10 - Testar se o código funciona corretamente, e dps escrever uma breve descrição
```csharp
p = start;
int i = 1;  // Ao percorrer todos os nós, vamos usar uma variável para representar a posição.
            //O 1º nó vai ter a posição 1, e vai incrementar por 1 por cada nó percorrido.

while (p.link != null) {
    if (i + 1 == x) break   // Ver se isto funciona de forma correta!!

    p = p.link;
    i++;
}

temp.link = p.link;

p.link = temp;
```

### Remoção
A remoção de um nó numa lista pode ser feita:
- Na sua 1ª posição
- Do seu único nó
- No final da lista
- Entre 2 nós da lista

#### Remoção de um nó no inicio da lista
O 1º nó deixa de fazer parte da lista.
O que era o 2º nó passou a ser o 1º.
```csharp
start = start.link;
```

#### Remoção do único nó da lista
A lista fica vazia.
```csharp
start = null;
```

#### Remoção de um nó no meio de 2 nós
O nó é eliminado, o link do nó anterior a ele passa a conter o link do link do nó que lhe segue.
```csharp
p.link = p.link.link;
```

#### Remoção de um nó no final da lista
O nó é eliminado, ficando o que se lhe antecede a apontar para nulo.
```csharp
p.link = null;
```

### Reverting
Reverting é reverter a lista.
```csharp
Node prev, p, next;

prev = null

p = start;

while (p != null) {
    next = p.link;  // O próximo nó é o link do atual
    p.link = prev;  
    prev = p;
    p = next;       // Passagem para o próximo nó
}

start = null;
```

## Listas encadeadas duplas

### Criação de um nó
É uma lista em que cada NÓ contém 2 apontadores, um apontador esquerdo(prev) e um apontador direito(next).
**Vantagens**:
- Pode ser percorrido em ambas direções
- A implementação de algumas operações pode ser mais fácil

**Desvantagens**:
- Requer mais armazenamento

Pode-se usar na implementação de estruras de dados em árvore:
- Undo/redo operations
- Sistemas de navegação que requerem que passagens para diante e para trás, como a web page navigation e em jogos com baralhos de cartas.
```csharp
Node class Constructor
{
    public Node prev;
    public Node next;
    public int info;

    public Node (int i)
    {
        info = i;
        prev = null;
        next = null;
    }
}
```

### Inserção de um nó numa lista vazia
O nó *temp* é o primeiro e o último da lista. Os seus links são null.
```csharp
start = temp;
```

### Inserção de um nó no início da lista
Lista de procedimentos:

1 - Copiamos o link do cabeçalho para o NÓ a introduzir (temp.next = start)
2 - Colocamos o NÓ prévio da lista a apontar para o NÓ que foi inserido no início da lista (start.prev = temp)
3 - Colocamos o cabeçalho da lista a apontar para o NÓ que foi inserido no inicio da lista (start = temp)
//TODO Este código deve estar mal. Slide 5
```csharp
p = start;

while (p.link != null) {
    p = p.link;
}

p.link = temp;
```

### Inserção de um nó no fim da lista
Lista de procedimentos:
1 - O "anterior" último da NÓ vai ficar a apontar para o NÓ a inserir (p.next == temp)
2 - Então NÓ a inserir não vai ficar a apontar para outro NÓ prévio de um lado (temp.prev = p)
3 - O NÓ a inserir, como fica na última posição, vai ter o link do "próximo node" igual a nulo. 
```csharp
p.next = temp;

temp.prev = p;
```

### Inserção de um nó no meio da lista, após a NODE
//TODO Slide 7
# Tabela de Conteúdos
1. [Noções Básicas](#basico)
	1. [Noções Importantes](#important)
   	2. [Trocar 2 valores variáveis](#trocar2vars)
	3. [Incrementos, Prefixos e Sufixos](#incrementos)
	4. [Divisões](#divisoes)
	5. [Atribuições em conjunto com operações](#atribuicaooperacao)
	6. [Operador Ternário](#ternario)
	7. [Switch](#switch)
	8. [Repetições (While, Do While, For)](#repeticoes)
	9. [Formatação Números](#formatacaoNumeros)
	10. [Pointers](#pointers)
	11. [Funções](#funcoes)
		1. [Funções por Valor](#funcoesValor)
		2. [Funções por Referência](#funcoesReferencia)
		3. [Funções por Pointers](#funcoesPointers)
	12. [Arrays](#arrays)
		1. [Arrays simples](#arrayuni)
		2. [Arrays bidimensionais](#arraysbi)
		3. [Arrays como parâmetros de funções](#arraysparam)
	13. [Strings](#strings)
	14. [Alocação dinâmica de memória](#dinamicaMemoria)
	15. [Estruturas](#estruturas)
		1. [Estruturas passadas por valor](#estruturasValor)
		2. [Estruturas passadas por referência de endereço](#estruturasRef)
		3. [Estruturas passadas por pointer](#estruturasPointer)
2. [Pedaços de Código](#pedacosCodigo)
	1. [Comparar 3 Valores](#comparar3valores)
	2. [Ordenar 3 Valores](#ordenar3valores)

# Noções Básicas <a id="basico"></a>

## Noções Importantes <a id="important"></a>
```c++
#include <iomanip>		// Fora da Main, usado para formatar números
#include <iostream>		// Fora da Main, usado para usar a consola (cout, cin...)

using namespace std;	// Fora da Main, usado para simplificar a chamada da terminal

cout << "Output text";  // Output para a consola
cin >> var              // Input para uma variável

setlocale(LC_ALL,""); 	// necessário nalguns compiladores, para escrever caracteres portugueses
```

## Trocar valor 2 variáveis <a id="trocar2vars"></a>
```c++
int n1, n2;

int aux; // Variável auxiliar

aux = n1;
n1 = n2;
n2 = aux;
```

## Incrementos, Prefixos e Sufixos <a id="incrementos"></a>
```c++
// Resultados são diferentes dependendo do compilador!
int x = 2;
int y = 2;

// Sufixo - Primeiro usa a variável e só depois a incrementa
x++;
x--;

// Prefixo - Primeiro incrementa a variável e só depois a utiliza
++y;
--y;
```

## Divisões <a id="divisoes"></a>
```c++
int n1 = 7;
int n2 = 2;
int resto;
float quociente;

// Ao dividir 2 valores inteiros, é feita uma divisão inteira
// Não interessa o tipo da variável onde se guarda o resultado!!!
quociente = n1 / n2;
	
// Se um dos valores for decimal, é feita uma divisão "normal",
// ou seja, o quociente (resultado) pode ter vírgulas
// Pode-se forçar um dos valores a ser decimal usando uma
// "coerção" -> converter (forçar) o n1 para um valor fracionário
quociente = (float)n1 / n2;
	
// Resto da divisão inteira
resto = n1 % n2; // lê-se "n1 mod n2" 
	
// Podemos usar constantes para fazer a conta
// Note-se que ao usar 2.0 em vez de apenas 2, o quociente aparece em formato decimal.
// É impossivel usar % se algum operador tiver vírgula.
```

## Atribuições em conjunto com operações <a id="atribuicaooperacao"></a>
```c++
int x = 3;

// Faz a operação +2, e guarda o valor em X. Mesma coisa que x = x + 2
x += 2; //+= -= *= /= %=
```

## Operador Ternário <a id="ternario"></a>
```c++
int x, y;
	
// Ternário -> condição ? Verdade : Falso
(x > 3) ? y = x + 1 : y = x + 10;
	
// versão otimizada: também faz o mesmo que o bloco anterior
y = (x > 3) ? x + 1 : x + 10;
```

## Switch <a id="switch"></a>
```c++
char x;
	
switch(x){
	case 'A':
	case 'a':
		// Caso x seja 'A' ou 'a'
		break;

	case 'B':
	case 'b':
		// Caso x seja 'B' ou 'b'
		break;
			
	case 'C':
	case 'c':
		// Caso x seja 'C' ou 'c'
		break;
			
	default:
		// Caso x não seja nenhuma das opções em cima
}
```

## Repetições (While, Do While, For) <a id="repeticoes"></a>
```c++
int a = 0;
int b = 50;

// Ciclo While - Enquanto...
while(a < b) {
	a = a + 4;
}
	
a = 0;

// Ciclo For - Para
for(b = 50; a < b; a = a + 4);

a = 0;

// Ciclo Do While - Fazer... Enquanto
do{
	a = a + 4;
}while( a<b );
```

## Formatação Números <a id="formatacaoNumeros"></a>
**Resumo**:
* **setw(n)** - Define o total de espaços para escrever o valor
* **setfill(char)** - Define qual o caracter de preenchimento
* **setprecision(n)** - Define o máximo de dígitos a mostrar (excluindo o .)
* **fixed** - Fixa o número de casas decimais. Se necessário, acrescenta zeros à direira
* **scientific** - Mostra o valor em notação científica
* **defaultfloat** - Anula o **fixed** e o **scientific**
```c++
// setw() - Define o total de espaços para escrever o valor
// Os números ficam alinhados à direita. Útil para tabelas
cout << setw(5) << 12 << endl;		//   12
cout << setw(5) << 123 << endl;		//  123
cout << setw(5) << 8 << endl;		//    8

// setfill() - Define qual o caracter a usar para preenchimento
// Só é preciso usar uma vez o setfill()
cout << setfill('-');
cout << setw(5) << 12 << endl;		//---12
cout << setw(5) << 123 << endl;		//--123
cout << setw(5) << 8 << endl;		//----8
cout << setfill(' ');

// setprecision() - Determina o nº máximo de dígitos a mostrar
// Inclui a parte inteira e a parte decimal, excluindo o '.'
cout << setprecision(3);
cout << 3.1416 << endl;				//3.14
cout << 123.4 << endl;				//123
cout << 1.23 << endl;				//1.23
	
// fixed - O setprecision() passa a determinar o nº de casas decimais
cout << fixed << setprecision(3);
cout << 3.1416 << endl;				//3.142
cout << 123.4 << endl;				//123.400
cout << 1.23 << endl;				//1.230
	
// setw() + fixed + setprecision() permite alinhar os valores decimais
cout << fixed << setprecision(3);
cout << setw(7) << 3.1416 << endl;	//  3.142
cout << setw(7) << 123.4 << endl;	//123.400
cout << setw(7) << 1.23 << endl;	//  1.230
	
// scientific - Notação científica
cout << scientific;
cout << 3.1416 << endl;				//3.142e+00
cout << 123.4 << endl;				//1.234e+02
cout << 1.23 << endl;				//1.230e+00

// defaultfloat anula o fixed e o scientific
cout << defaultfloat;
cout << 3.1416 << endl;				//3.14
cout << 123.4 << endl;				//123
cout << 1.23 << endl;				//1.23
```

## Pointers <a id="pointers"></a>

```c++
int main(int argc, char** argv) {
	int idade;	 	 // Criar uma variável para conter um inteiro
	int *pIdade; 	 // Criar uma variável do tipo "pointer" (apontador)
				 	 // que aponta para um inteiro
	
	idade = 78;  	 // colocar 78 dentro da idade
    cout << "Idade = ";
	cout << idade; 	 // Escreve 78 no ecrã
	
	pIdade = &idade; // pIdade fica com o endereço da variável idade
					 // & lê-se "endereço de" (address of)
					 // Diz-se que pIdade aponta para a idade
					 
	cout << "\nEndereco da idade = ";
    cout << pIdade;  // Escreve o endereço da variável idade
	cout << "\nOutra maneira de escrever o mesmo = ";
	cout << &idade;  // Outra maneira de escrever o mesmo
	
    cout << "\nEndereco de pIdade = ";
	cout << &pIdade; // Escreve o endereço da variável pIdade
	
    cout << "\nValor da idade, mas usando o pointer = ";
	cout << *pIdade; // Escreve o conteúdo do que está apontado pela pIdade
					 // ou seja, escreve o valor da idade, mas sem fazer
					 // uso da variável idade em si
	
	return 0;
}
```

## Funções <a id="funcoes"></a>
* Utilização de funções:
	* Passagem de parâmetros por **valor** (**Entrada só**)
	* Passagem de parâmetros por **referência de endereço** (**Entrada e/ou saída**)
	* Passagem usando **pointers** (**Entrada e/ou Saída**)

### Funções por Valor <a id="funcoesValor"></a>
```c++
// Parâmetros são só de ENTRADA
// Resultado tem de ser devolvido no NOME da própria função
int soma(int n1, int n2){
	return n1+n2;				// Devolve (n1+n2)
}

int main(int argc, char** argv) {
	int val1, val2, total;
	
	total = soma(val1, val2); 	// Chama a função soma(), e guarda o resultado em 'total'
		
	// IMPORTANTE: se os parâmetros forem passados por valor,
	// ao chamar a função podemos usar constantes
	
	// Exemplo: escrever o resultado da soma de 5 com 8
	cout << "\n5 + 8 = " << soma(5,8);
}
```

### Funções por Referência <a id="funcoesReferencia"></a>
```c++
// o 'num1' e 'num2' são passados por valor. São só de ENTRADA.
// O 'res' é passado por referência(&), desta forma, já pode ser de SAÍDA
void soma(int num1, int num2, int &res){
	res = num1 + num2;
}

int main(int argc, char** argv) {
	int val1, val2, total;
	
	// Chamada da função
	soma(val1, val2, total);
	
	cout << "Resultado = " << total << endl;
}
```

### Funções por Pointers <a id="funcoesPointers"></a>
```c++
void soma(int num1, int num2, int *res){
	*res = num1 + num2; // O apontado por "res" recebe o resultado
}

int main(int argc, char** argv) {
	int val1, val2, total;
	
	val1 = 10;
	val2 = 29;
	
	// Chamada da função
	// Passa-se o endereço do local onde queremos guardar o resultado
	soma(val1, val2, &total);
	
	cout << "Resultado da soma = " << total << endl;
	
	return 0;
}
```

## Arrays simples <a id="arrays"></a>

### Arrays simples <a id ="arraysuni"></a>
* Um array é um conjunto de espaços todos do mesmo tipo
* O array só tem UM nome que indica TODOS os espaços
	* Ex: Em vez de criar 10 variáveis, cria-se um array para conter os 10 elementos
* Para aceder a um elemento do array, usamos o seu **índice**
* Os índices começam em **ZERO**
```c++
// Exemplo inicializações de arrays
int notas[6];						// Criação de um array com dimensão 6 (0...5)
int notas[] = {3, 20, 4, 18, 1};	// Array já está preenchido, com dimensão 5
int notas[8] = {4, 7, 6}			// Array com dimensão 8, MAS só a 1ª, 2ª e 3ª posição já estão preenchidas
int notas[4] = {0}					// Inicia todos os valores a ZERO. Não funciona para outros valores
	
notas[2] = 3;		// Associação de um valor à "casa" 2 do array
	
notas[2] = notas[2]+10;		// Operações com valores do array

// For para "preencher" todos os valores do array
for(int i = 0; i < dim; i++) {
	notas[i] = 10;
}

// É obrigatório usar o '&' quando se pretende modificar o conteúdo do array
for(auto &el : notas ){
	el++;
}

// Nestes tipos de for, o auto é usado quando não é preciso saber o tipo de elementos no array
// Podemos indicar o tipo de elementos do array (int, char, string)...
// É uma espécie de (for each)

cout << "\nEscrever o array incrementado, mas usando uma instrução diferente\n";
// Pode-se usar uma versão "diferente" do for
for(int el : notas){
	cout << setw(4) << el;
}
```

### Arrays bidimensionais <a id="arraysbi"></a>
* Um array bidimensional é uma **matriz** (x, y)

```c++
int nota[3][4]; // Criação do array bidimensional

// Forma de percorrer o array
for (int i = 0; i < 3; i++) {
	// 1º For vai percorrer as linhas (neste caso, 3)
	cout << "Aluno " << i+1 << endl;
	for (int j = 0; j < 4; j++) {
		// 2º For vai percorrer as colunas (neste caso, 4)
		cin >> nota[i][j];
	}
}

/* Demonstração visual do array
[0,0] [0,1] [0,2] [0,3]
[1,0] [1,1] [1,2] [1,3]
[2,0] [2,1] [2,2] [2,3]
*/
```

### Arrays como parâmetros de funções <a id="arraysparam"></a>
* Para se fazer a passagem de um array como parâmentro, é necessário:
	* Passar o array:
		* É sempre passado por referência de endereço. Assim, as alterações feitas dentro da função são reconhecidas no exterio (I/O param)
		* Se pretendermos usar um array dentro de uma função e impedir que o seu conteúdo seja alterado, podemos adicionar "const" antes do tipo.
	* Passar a dimensão do array:
		* Por default, a função não conhece a dimensão do array. Temos que passar a dimensão como parâmetro.
		* Dim pode ser um int, é preferível usar o tipo apropriado size_t.

```c++
// Passagem de um array por referência (I/O Param)
// A função não conhece a dimensão do array (não está associada ao parâmetro)
void listar (int arr[], int dim) {
	for (int i=0; i<dim; i++) {
		cout << "Idade " << i+1 << ": " << arr[i] << endl;
	}
	// for (auto el: arr) - Dá erro!
}

void teste (const int ida[], size_t dim) {
	int soma=0;

	for(size_t i=0; i<dim; i++) {
		soma += ida[i];
	}

	cout << "É possível aceder ao conteúdo.\n"
		 << "Soma dos elementos: " << soma << endl;

	// ida[0] = 999; - Erro!
}
```

* Outra forma é declarar a função como **template**. Deixa de ser preciso especificar a dimensão do array.
* Desta forma, pode-se usar o ":" no for, pois a função conhece a dimensão do array.

```c++
template <typename T, size_t N>
void listar( T (&arr)[N] ) {
	size_t i=1;

	for (auto el : arr) {
		cout << "Idade " << i++ << ": " << el << endl;
	}
}
``` 

## Strings <a id="strings"></a>
* Strings podem ser usadas como:
	* No formato de array de caracteres.
	* No formato string (objeto).
* Para copiar strings:
	* Não se podem fazer atribuições tal como se fazem para os tipos simples.
	* Podemos usar a função strcpy(destino, origem).
	* Com o objeto string, podem-se fazer atribuições usando o =, tal como se faz para os outros tipos.

```c++
int main(int argc, char** argv) {
	// Array de chars
	char nome[20], apelido[20], nomeCompleto[40];

	// Para ler, deve-se usar a função cin.getLine()
	cin.getline(nome, 20);	// É obrigatório especificar a dimensão do array
	cin.getline(apelido, 20);

	// Percorrer uma string, char a char
	for(int i =0; i < strlen(nome): i++) {
		cout << nome[i];
	}

	for(int i = 0; nome[i] != '\0'; i++) {
		cout << nome[i];
	}

	// Copiar Strings
	strcpy(nomeCompleto, nome);~

	// Concatenar Strings
	strcat(nomeCompleto, " ");
	strcat(nomeCompleto, apelido);

	// Objeto string
	string nome2, apelido2, nomeCompleto2;

	getline(cin, nome2);	// Função para ler strings
	nome2

	// Percorrer uma string
	// Também se pode usar .length()
	// Não se deve usar o teste "nome2[i] != '\0', como se faz no array de char
	for (int i = 0; i < nome2.size(); i++) {
		cout << nome2[i];	// Escrever a string, char a char
	}

	// Copiar e/ou juntar strings
	nomeCompleto2 = nome2 + ' ' + apelido2;
}
```

## Alocação dinâmica de memória <a id ="dinamicaMemoria">
* Para utilização dinâmica de memória, há 2 instruções:
	* new - Pedir memória ao PC
	* delete - Libertar a memória
* As variáveis são criadas em **runtime**.
* Na altura em que se escreve o código, ainda não se sabe qual a dimensão que se pretende para as variáveis. (ex: Arrays)

```c++
int main(int argc, char** argv) {
	// Criar um pointer para um inteiro
	int *pNum = nullptr;
	
	// 1. Alocar memória para guardar o número
	pNum = new (nothrow) int;
	// Devolve um pointer "tipado" para o espaço alocado
	// nothrow serve para que não seja lançada uma exceção em caso de erro
	
	// 2. testar se conseguiu alocar a memória
	if( !pNum ) return 8; 
	// DOS error code 8 = insufficient memory
	// pNum fica com o endereço da memória alocada (se estiver tudo OK)
	// pNum fica vazio (com zero) se o sistema não conseguiu alocar memória
	
	// 3. Ler o número
	cout << "Escreva o valor: ";
	cin >> *pNum;
	
	// 4. Somar-lhe 4
	*pNum += 4;
	
	// 5. Escrever o resultado
	cout << "Resultado depois de somar 4: " << *pNum << endl;
	
	// 6. Libertar o espaço alocado
	delete pNum;
	
	// Pode-se usar o new para criar arrays.
	// Basta indicar o nº de elementos (5, neste caso) do array

	int *pArr = nullptr; // Criar o pointer para o array
	int *pAux = nullptr; // Criar o pointer auxiliar

	// Alocar memória para os 5 int
	pArr = new (nothrow) int[5]; 

	// Memória insuficiente
	if( !pArr ) return 8;

	// Preencher o array
	for(int i=0; i<5; i++) 
		pArr[i] = i+10;
	
	pAux = pArr;

	// Listar o array
	for(int i=0; i<5; i++) 
		cout << *pAux++ << ' ';
		
	delete[] pArr;
	// Atenção aos [] a seguir ao delete
	// Não há necessidade de especificar a dimensão do array
	// porque o C++ controla a dimensão do bloco que alocou

	return 0;
}
```

## Estruturas <a id="estruturas"></a>
```c++
// Definição da estrutura. Não implica reserva de espaço
// Criar um tipo novo chamado "pes"
struct pes {
	int num;		// Campo número de aluno 
	string nome;	// Campo nome
	int idade;		// Campo idade
};

// Função para listar uma pessoa
void listar(pes p){
	cout << "Número: " << p.num << endl;
	cout << "Nome: " << p.nome << endl;
	cout << "Idade: " << p.idade << endl;
}

const int MAXalunos = 2;

int main(int argc, char** argv) {
	// Criação de um array de estruturas
	pes turma[MAXalunos];
	
	// Ler, usando um ciclo de repetição, os dados de cada aluno
	cout << "\nDados para os alunos\n"
		 << "---------------------\n";
	for( auto &el : turma ){
		cout << "Número: "; cin >> el.num;
		cout << "  Nome: ";
		cin.ignore();
		getline(cin, el.nome);
		cout << " Idade: "; cin >> el.idade;
		cout << endl;
	}
	
	//	Escrever, usando um ciclo de repetição, os dados de cada aluno
	cout << "\nDados lidos dos alunos\n"
		 << "----------------------\n";
	for( auto el : turma ){
		cout << "Número: " << el.num << endl
			 << "  Nome: " << el.nome << endl
			 << " Idade: " << el.idade << endl
			 << endl;
	}
	
	return 0;
}
```

### Estruturas passadas por valor <a id="estruturasValor"></a>
* Quando uma estrutura é passada por valor para uma função:
	* Dentro da função, as alterações são feitas.
	* Fora da função, as alterações **NÃO SÃO** reconhecidas.
```c++
// Dentro da função, as alterações são feitas
void tentaAlterar(pes p){
	p.nome = "Pedro";
	p.idade+=3;
	listar(p);
}

// As alterações não são reconhecidas. A pessoa não foi alterada
tentaAlterar(pessoa);
listar(pessoa);
```
### Estruturas passadas por Referência de Endereço <a id="estruturasRef"></a>
* Quando uma estrutura é passada por referência de endereço para uma função:
	* Dentro da função, as alterações são feitas.
	* Depois da função, o nome e a idade foram modificados.
```c++
// Dentro da função, as alterações são feitas.
void alteraMesmo(pes &p){
	p.nome = "Artur";
	p.idade++;
	listar(p);
}

// As alterações são reconhecidas. A pessoa foi alterada.
alteraMesmo(pessoa);
listar(pessoa);
```

### Estruturas passadas por Pointer <a id="estruturasPointer"></a>
* Quando uma estrutra é passada por pointer para uma função:
	* Dentro da função, as alterações são feitas.
	* Depois da função, o nome e a idade foram modificados.

```c++
// Dentro da função pode-se usar (*p).nome ou p->nome
void alteraMesmoPointer(pes *p){
	p->nome = "Josefa";
	p->idade++;
	listar(*p);
}

// As alterações são reconhecidas. A pessoa foi alterada.
alteraMesmoPointer(&pessoa);
listar(pessoa);
```

# Pedaços de Código <a id="pedacosCodigo"></a>

## Comparar 3 valores <a id="comparar3valores"></a>
```c++
int main(int argc, char** argv) {
	int n1, n2, n3;
	
	// ler os 3 valores
	cout << "Valor 1 = "; cin >> n1;
	cout << "Valor 2 = "; cin >> n2;
	cout << "Valor 3 = "; cin >> n3;
	
	// testar
	if(n1>n2){
		if(n1>n3){
			cout << "Valor 1 é o maior";
		}else if(n1==n3){
			cout << "Valores 1 e 3 são maiores";
		}else{
			cout << "Valor 3 é o maior";
		}
	}else if(n2>n3){
		if(n1==n2){
			cout << "Valores 1 e 2 são os maiores";
		}else{
			cout << "Valor 2 é o maior";
		}
	}else if(n2==n3){
		if(n1==n2){
			cout << "São todos iguais";
		}else{
			cout << "Valores 2 e 3 são os maiores";
		}
	}else{
		cout << "Valor 3 é o maior";
	}
	
	return 0;
}
```

## Ordenar 3 valores <a id="ordenar3valores"></a>
```c++
int main(int argc, char** argv) {
	int n1, n2, n3, aux;
	
	// ler os 3 valores
	cout << "n1="; cin >> n1;
	cout << "n2="; cin >> n2;
	cout << "n3="; cin >> n3;
	
	// ordenar
	if(n1>n2){
		aux=n1;
		n1=n2;
		n2=aux;
	}
	// chegado aqui, n2 tem o maior dos 2
	
	if(n2>n3){
		aux=n2;
		n2=n3;
		n3=aux;
	}
	// chegado aqui, n3 tem o maior dos 3
	
	if(n1>n2){
		aux=n1;
		n1=n2;
		n2=aux;
	}
	// estão ordenados
	
	// escrever resultado
	cout << "Valores ordenados\n"
		 << "n1=" << n1
		 << "\nn2=" << n2
		 << "\nn3=" << n3;

	return 0;
}
```


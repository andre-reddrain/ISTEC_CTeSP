/*******************************************************************************
 * Criar Uma turma com 10 alunos
 * Ler os dados de cada aluno
 * Listar todos os alunos
 * Cada aluno tem:
 * 		- número
 * 		- nome
 * 		- idade
*/
#include <iostream>
#include <string>
#include <iomanip>
using namespace std;

int userInput(string mensagem) {
	// Pedido de variáveis ao utilizador
	bool check = false;
	int valorUtilizador;
	do {
		cout << mensagem;
		cin >> valorUtilizador;

		// Verificação do valor de utilizador
		if (cin.fail() || valorUtilizador <= 0 || valorUtilizador > 20) {
			cin.clear();
			cin.ignore();
		}
		else check = true;
	} while (!check);

	return valorUtilizador;
}

// Definição da estrutura. Não implica reserva de espaço
// Criar um tipo novo chamado "pes"
struct pes {
	int num;		// campo número de aluno 
	string nome;	// campo nome
	int idade;		// campo idade
};

const int MAXalunos = 2; // para testes. Depois pode mudar para 10

int main(int argc, char** argv) {

	setlocale(LC_ALL, "");

	// para fazer um conjunto de pessoas (array de estruturas)
	pes turma[MAXalunos];

	// ler, usando um ciclo de repetição, os dados de cada aluno
	cout << "\nDados para os alunos\n"
		<< "---------------------\n";
	for (auto& el : turma) { // não esquecer o &
		cout << "Número: "; cin >> el.num;
		cout << "  Nome: ";
		cin.ignore();
		getline(cin, el.nome);
		cout << " Idade: "; cin >> el.idade;
		cout << endl; // linha em branco entre dois alunos
	}

	//	Escrever, usando um ciclo de repetição, os dados de cada aluno
	cout << "\nDados lidos dos alunos\n"
		<< "----------------------\n";
	for (auto el : turma) {
		cout << "Número: " << el.num << endl
			<< "  Nome: " << el.nome << endl
			<< " Idade: " << el.idade << endl
			<< endl; // para ficar uma linha em branco entre 2 alunos
	}

	// Listar as pessoas de uma idade escolhida pelo utilizador
	cout << "Introduza uma idade: " << endl;
	int idade = userInput("");

	for (auto el : turma) {
		if (el.idade == idade) {
			cout << "Número: " << el.num << endl
				<< "  Nome: " << el.nome << endl
				<< " Idade: " << el.idade << endl
				<< endl; // para ficar uma linha em branco entre 2 alunos
		}
	}
	return 0;
}
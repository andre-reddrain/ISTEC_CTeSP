#include <iostream>
#include <iomanip>

using namespace std;

int main()
{
	bool check = false;
	int valorUtilizador;
	do {
		cout << "Por favor insira um valor: ";
		cin >> valorUtilizador;


		// Verificação do valor de utilizador
		if (cin.fail()) {
			cin.clear();
			cin.ignore();
		}
		else check = true;
	} while (!check);

    // Exercício 1 - Linha de asteriscos
	cout << "Exercício 1 - Linha de asteriscos\n";
	string ex1 = "";

	for (size_t i = 0; i < valorUtilizador; i++)
	{
		ex1.append("*");
	}
	
	cout << ex1;

	// Exercício 2 - Matriz de asteriscos
	cout << "\n\nExercício 2 - Matriz de asteriscos\n";
	string ex2 = "";

	for (size_t linha = 0; linha < valorUtilizador; linha++)
	{
		for (size_t coluna = 0; coluna < valorUtilizador; coluna++) {
			ex2.append("*");
		}
		ex2.append("\n");
	}

	cout << ex2;

	// Exercício 3 - Triângulo I
	cout << "\n\nExercício 3 - Triângulo I\n";
	string ex3 = "";

	for (size_t i = 0; i < valorUtilizador; i++)
	{
		ex3.append("*");
		cout << ex3 << endl;
	}

	// Exercício 4 - Triângulo II
	cout << "\n\nExercício 4 - Triângulo II\n";
	string ex4 = "";

	for (size_t i = 0; i < valorUtilizador; i++)
	{
		ex4.append("*");
		cout << setw(valorUtilizador) << ex4 << endl;
	}

	// Exercício 5 - Triângulo III
	cout << "\n\nExercício 5 - Triângulo III\n";
	string ex5 = "";

	for (size_t linha = 0; linha < valorUtilizador; linha++)
	{
		ex5 = "";
		for (size_t coluna = valorUtilizador; coluna > linha; coluna--)
		{
			ex5.append("*");
		}
		cout << ex5 << endl;
	}

	// Exercício 6 - Triângulo IV
	cout << "\n\nExercício 6 - Triângulo IV\n";
	string ex6 = "";

	for (size_t linha = 0; linha < valorUtilizador; linha++)
	{
		ex6 = "";
		for (size_t coluna = valorUtilizador; coluna > linha; coluna--)
		{
			ex6.append("*");
		}
		cout << setw(valorUtilizador) << ex6 << endl;
	}

	// Exercício 7 - Árvore
	cout << "\n\nExercício 7 - Árvore\n";
	string ex7 = "";

	int ex7lenght = 1 + (valorUtilizador * 2) - 2;

	for (size_t linha = 0; linha < valorUtilizador; linha++)
	{
		//TODO Passar isto tudo para dentro de uma função, visto que vai ser reutilizada pelo menos umas 3 vezes!
		ex7 = "";
		int espacosBranco = (valorUtilizador - 1 - linha);
		int asteriscos = 1 + (linha * 2);
		//cout << "Espaços em branco - " << temp << endl;

		for (size_t coluna = 0; coluna < ex7lenght; coluna++)
		{
			if (espacosBranco > 0) {
				ex7.append(" ");
				espacosBranco--;
			}
			else if (asteriscos > 0) {
				ex7.append("*");
				asteriscos--;
			}
		}

		cout << ex7 << endl;
	}

	// Exercício 8 - Árvore em pé
	cout << "\n\nExercício 8 - Árvore em pé\n";
	string ex8 = "";
	string peArvore = "";

	int ex8lenght = 1 + (valorUtilizador * 2) - 2;

	for (size_t linha = 0; linha < valorUtilizador; linha++)
	{
		ex8 = "";
		int espacosBranco = (valorUtilizador - 1 - linha);
		int asteriscos = 1 + (linha * 2);
		//cout << "Espaços em branco - " << temp << endl;

		for (size_t coluna = 0; coluna < ex8lenght; coluna++)
		{
			if (espacosBranco > 0) {
				ex8.append(" ");
				espacosBranco--;
			}
			else if (asteriscos > 0) {
				ex8.append("*");
				asteriscos--;
			}
		}

		if (linha == 0) peArvore = ex8;

		cout << ex8 << endl;
	}

	for (size_t i = 0; i < valorUtilizador; i++)
	{
		cout << peArvore << endl;
	}

	// Exercício 9 - Losango
	// Em teoria, vai desenhar a Arvore e dps vai "espelhar", a partir da base
	// É "reverter" a criação da Arvore
	/*
	Note que para o valor 4, o losango tem (4x2-1) linhas
		*
	   ***
	  *****
	 *******
	  *****
	   ***
		*
	*/

	// Exercício 10 - Moldura do losango
	/*
	*********
	**** ****
	***   ***
	**     **
	*       *
	**     **
	***   ***
	**** ****
	*********
	*/
}

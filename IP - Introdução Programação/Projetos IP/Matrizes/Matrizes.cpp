// Matrizes.cpp : This file contains the 'main' function. Program execution begins and ends there.
//

#include <iostream>
#include <string>

using namespace std;

/// <summary>
/// Pede um input ao Utilizador.
/// </summary>
/// <param name="mensagem">Mensagem mostrada na terminal</param>
/// <param name="tipoVariavel">Tipo de variável recolhida pelo utilizador, para validações (int, string)</param>
/// <returns>Variável introduzida pelo Utilizador</returns>
static string userInput(string mensagem, string tipoVariavel) {
    // Pedido de variáveis ao utilizador
    bool check = false;
    string valorUtilizador;

    //int valorUtilizador;
    do {
        try
        {
            cout << mensagem;
            cin >> valorUtilizador;

            if (tipoVariavel == "int") {
                // Verificação do valor de utilizador
                if (cin.fail() || stoi(valorUtilizador) <= 0) {
                    cin.clear();
                    cin.ignore();
                }
                else check = true;
            }
            else if (tipoVariavel == "string") {
                // Verificação do valor de utilizador
                if (cin.fail()) {
                    cin.clear();
                    cin.ignore();
                }
                else check = true;
            }
        }
        catch (const exception&)
        {
            cin.clear();
            cin.ignore();
        }
    } while (!check);

    return valorUtilizador;
}

int main()
{
    /*
     1 - Faça um programa que
         a) Pede os valores para uma matriz de MaxLn X MaxCol, declarados como constantes e cria a respectiva matriz transposta - Feito
         b) Altere o programa anterior de modo a que a matriz transposta seja criada dinamicamente
         c) Converta o programa anterior numa função
         void MatrixT(int *matrixOri, int*matrixTr, int ln, int cl)
     */

    const int MaxLn = 2;
    const int MaxCol = 3;

    int matrix[MaxLn][MaxCol];
    int matrixTr[MaxCol][MaxLn];

    for (int line = 0; line < MaxLn; line++)
    {
        for (int col = 0; col < MaxCol; col++)
        {
            string mensagem = "[";
            mensagem += to_string(line) + "," + to_string(col) + "] Por favor introduza um valor: ";

            int valor = stoi(userInput(mensagem, "int"));
            matrix[line][col] = valor;
            matrixTr[col][line] = valor;
        }
    }

    // Imprimir a matriz
    cout << "Matriz" << endl;
    for (int i = 0; i < MaxLn; i++)
    {
        for (int j = 0; j < MaxCol; j++)
        {
            cout << "\t" << matrix[i][j];
        }
        cout << endl;
    }

    // Imprimir a transposta
    cout << "Matriz Transposta" << endl;
    for (int i = 0; i < MaxCol; i++)
    {
        for (int j = 0; j < MaxLn; j++)
        {
            cout << "\t" << matrixTr[i][j];
        }
        cout << endl;
    }
}
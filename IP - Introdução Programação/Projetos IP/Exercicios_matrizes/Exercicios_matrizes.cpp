// Exercicios_matrizes.cpp : This file contains the 'main' function. Program execution begins and ends there.
//

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

int main()
{
    setlocale(LC_ALL, "");

    /*
        Faça um programa para ler várias notas (valores inteiros) para vários alunos.
        1. Pedir os valores e preencher o array
        2. Listar o conteúdo do array
        3. Listar a média de cada aluno à frente das suas notas
        4. Escrever a média (do teste) no final de cada coluna
        5. Escrever a média da turma
        As notas são valores entre 0 e 20 (não precisa testar) As médias são valores com duas casas decimais
        O programa deve ter as seguintes constantes:
        "MaxAluno" para o no de alunos (máximo 9)
        "MaxNota" para o no de notas por aluno (máximo 9)
        Resolva o problema por fases.
        cada ponto do enunciado é uma fase
        só resolva o ponto seguinte após o anterior funcionar
    */

    const size_t MaxAluno = 2;
    const size_t MaxNota = 3;

    int NotasAlunos[MaxAluno][MaxNota];
    string header = "        ";
    double media = 0;

    cout << "Escreva as " << MaxNota << " notas para cada aluno.\n";

    // 1. Pedir os valores e preencher o array
    for (int i = 0; i < MaxAluno; i++)
    {
        cout << "Aluno " << i + 1 << ": \n";
        for (int j = 0; j < MaxNota; j++)
        {
            cout << "Nota " << j + 1 << ": ";
            int nota = userInput("");
            NotasAlunos[i][j] = nota;
        }
    }

    // Construção da string Output
    // Header das notas
    for (int i = 0; i < MaxNota; i++)
    {
        header += "  T" + to_string(i + 1);
    }

    cout << header;

    // Alocação das notas + média
    for (int i = 0; i < MaxAluno; i++)
    {
        media = 0;
        cout << "\nAluno " << (i + 1) << ":";

        for (int j = 0; j < MaxNota; j++)
        {
            cout << setw(4) << NotasAlunos[i][j];
            media += NotasAlunos[i][j];
        }

        media = media / MaxNota;
        cout << setw(10) << "Média: ";
        cout << setprecision(3) << media;
    }
}
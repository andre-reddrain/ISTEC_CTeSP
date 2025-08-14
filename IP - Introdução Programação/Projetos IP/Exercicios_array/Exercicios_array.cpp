// Exercicios_array.cpp : This file contains the 'main' function. Program execution begins and ends there.
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
    setlocale(LC_ALL, "");

    //const int dimensaoArray = userInput("Por favor introduza a dimensão do array: ");
    const int dimensaoArray = 5;
    
    /* 
        Exercício 1. Fazer a média

        Criar um array para as DIM notas de um aluno
        1- Pedir os valores e preencher o array
        2- Listar o conteúdo do array
        3- Calcular a média da notas
    */
    cout << "Exercício 1 - Média de um array" << endl;
    int arrayNotas[dimensaoArray];
    int media = 0;

    // For para preencher o array com inputs do utilizador
    for (int i = 0; i < dimensaoArray; i++)
    {
        string mensagem = "[";
        mensagem += to_string(i) + "] Por favor introduza uma nota: ";

        arrayNotas[i] = stoi(userInput(mensagem, "int"));
    }

    // For para listar o conteúdo do array e fazer a média
    for (int i = 0; i < dimensaoArray; i++)
    {
        string mensagem = "[";
        mensagem += to_string(i) + "] Nota: ";
        mensagem += to_string(arrayNotas[i]);

        cout << mensagem << endl;

        media += arrayNotas[i];
    }

    cout << "Média das notas: " << (media / dimensaoArray) << endl;

    /*
        Exercício 2. Escrever os elementos de um array por ordem inversa

        1- Pedir as notas e ler os valores para um array
        2- Escrever as notas lidas
        3- Escrever novamente o array, mas por ordem inversa
    */
    cout << "Exercício 2 - Elementos de um array por ordem inversa" << endl;

    for (int i = dimensaoArray - 1; i >= 0; i--)
    {
        string mensagem = "[";
        mensagem += to_string(i) + "] - ";
        mensagem += to_string(arrayNotas[i]);

        cout << mensagem << endl;
    }

    /*
        Exercício 3. Inverter a ordem dos elementos de um array

        Nota: Inverter a ordem dos elementos não é o mesmo que escrever por ordem
        inversa. Quando se inverte a ordem dos elementos, o array é alterado.
        1- Pedir as notas e ler os valores para um array
        2- Escrever as notas lidas
        3- Inverter o conteúdo do array
        4- Escrever novamente o array, que agora fica por ordem inversa
    */
    cout << "Exercício 3 - Inverter a ordem dos elementos de um array" << endl;

    for (int i = 0; i < dimensaoArray; i++)
    {
        // Se chegou depois do meio do array, vai parar a inversão
        if ((int)ceil(dimensaoArray / 2) == i) break;

        int temp = arrayNotas[i];
        arrayNotas[i] = arrayNotas[dimensaoArray - 1 - i];
        arrayNotas[dimensaoArray - 1 - i] = temp;
    }

    // For para impressão do array
    for (int i : arrayNotas) cout << i << " ";

    /*
        Exercício 4. Inverter frase

        Pedir uma frase (sem espaços) terminada por um "." (máximo 40 caracteres)
        a) Ler as letras para um array.
        Nota: Não teste os excessos. O utilizador escreve menos de 40
        caracteres.
        b) Use "cin" para a leitura e "cout" para a escrita.
        c) Não pode usar strings (se não sabe o que são, de certeza que não as usa)
        d) Escrever as letras (frase), por ordem inversa da leitura
    */
    cout << "\nExercício 4 - Inverter frase" << endl;

    string mensagemUtilizador = userInput("Por favor introduza uma frase: ", "string");

    //TODO Fazer Inversão Frase - Deve ser o mesmo que inverter um array?

    /*
        Exercício 5. Contar letras

        Pedir uma frase (sem espaços) terminada por um "." (máximo 40 caracteres)
        a) Ler as letras para um array.
        b) Teste os excessos para não passar dos 40 caracteres. Desta forma não
        escreve fora do array.
        c) Use "cin" para a leitura e "cout" para a escrita.
        d) Não pode usar strings (se não sabe o que são, de certeza que não as usa)
        e) Diga quantas vezes encontrou a letra "n"
    */

    cout << "Exercício 5 - Contar letras" << endl;

    /*
        Exercício 6. Contar uma letra escolhida

        Pedir uma frase (sem espaços) terminada por um "." (máximo 40 caracteres)
        a) Ler as letras para um array.
        b) Teste os excessos para não passar dos 40 caracteres. Desta forma não
        escreve fora do array.
        c) Use "cin" para a leitura e "cout" para a escrita.
        d) Não pode usar strings (se não sabe o que são, de certeza que não as usa)
        e) Pedir uma letra ao utilizador
        f) Diga quantas vezes encontrou a letra escolhida pelo utilizador
    */

    cout << "Exercício 6 - Contar uma letra escolhida" << endl;

    /*
        Exercício 7. Contar vogais

        Pedir uma frase (sem espaços) terminada por um "." (máximo 40 caracteres)
        a) Ler as letras para um array.
        b) Teste os excessos para não passar dos 40 caracteres. Desta forma não
        escreve fora do array.
        c) Use "cin" para a leitura e "cout" para a escrita.
        d) Não pode usar strings (se não sabe o que são, de certeza que não as usa)
        e) Diga quantas vogais existem na frase.
    */

    cout << "Exercício 7 - Contar vogais" << endl;

    /*
        Exercício 8. Média das notas positivas

        Faça um programa para ler 6 notas
        1- Pedir os valores e preencher o array
        2- Listar o conteúdo do array
        3- Calcular a média só das notas positivas
    */

    cout << "Exercício 8 - Média das notas positivas" << endl;
}

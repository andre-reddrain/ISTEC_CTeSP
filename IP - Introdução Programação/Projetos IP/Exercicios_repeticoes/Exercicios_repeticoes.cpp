#include <iostream>
#include <iomanip>
#include <math.h>
#include <string>

using namespace std;

int main()
{
    setlocale(LC_ALL, "");

    // Pedido de variáveis ao utilizador
    bool check = false;
    int valorUtilizador;
    do {
        cout << "Por favor insira um valor: ";
        cin >> valorUtilizador;

        // Verificação do valor de utilizador
        if (cin.fail() || valorUtilizador <= 0) {
            cin.clear();
            cin.ignore();
        }
        else check = true;
    } while (!check);

    check = false;
    int valorUtilizador2;
    do {
        cout << "Por favor insira um valor: ";
        cin >> valorUtilizador2;

        // Verificação do valor de utilizador
        if (cin.fail() || valorUtilizador2 <= 0) {
            cin.clear();
            cin.ignore();
        }
        else check = true;
    } while (!check);

    /* 1. Contagem regressiva:
        Enunciado: Escreva um programa que pede ao utilizador para inserir um número inteiro positivo
        e realiza uma contagem regressiva a partir desse número até 0.
        Exemplo: Se o utilizador inserir o número 10, o programa deve imprimir de 10 até 0.
    */
    

    cout << "Exercício 1 - Contagem regressiva" << endl;
    for (int i = valorUtilizador; i >= 0; i--)
    {
        cout << i << endl;
    }

    /* 2. Soma dos números de 1 a N:
        Enunciado: Escreva um programa que recebe um número inteiro positivo N do utilizador e
        calcula a soma dos números de 1 a N.
        Exemplo: Se o utilizador inserir o número 5, o programa deve calcular 1 + 2 + 3 + 4 + 5 e
        imprimir o resultado (15).
    */
    cout << "Exercício 2 - Soma de 1 a N" << endl;
    int valorSoma = 0;
    for (int i = 1; i <= valorUtilizador; i++)
    {
        valorSoma += i;
    }
    cout << "Soma de 1 a " << valorUtilizador << ": " << valorSoma << endl;

    /* 3. Números pares de 1 a N:
        Enunciado: Escreva um programa que recebe um número inteiro positivo N do utilizador e
        imprime todos os números pares de 1 a N.
        Exemplo: Se o utilizador inserir o número 10, o programa deve imprimir 2, 4, 6, 8, 10.
    */
    cout << "Exercício 3 - Números pares de 1 a N" << endl;

    for (int i = 1; i <= valorUtilizador; i++)
    {
        if (i % 2 == 0) cout << i << endl;
    }

    /* 4. Tabuada de um número:
        Enunciado: Escreva um programa que recebe um número inteiro do utilizador e imprime a
        tabuada desse número (de 1 a 10).
        Exemplo: Se o utilizador inserir o número 7, o programa deve imprimir a tabuada de 7, de 1 a 10.
    */
    cout << "Exercício 4 - Tabuada de um número" << endl;
    for (int i = 1; i <= 10; i++)
    {
        cout << valorUtilizador << " X " << i << " = " << i * valorUtilizador << endl;
    }

    /* 5. Potências de 2:
        Enunciado: Escreva um programa que imprime as potências de 2 (2^0, 2^1, 2^2, ..., 2^N) até
        que o resultado seja maior que 1000.
        Exemplo: O programa deve imprimir 1, 2, 4, 8, 16, 32, 64, 128, 256, 512.
    */
    cout << "Exercício 5 - Potências de 2" << endl;
    for (int i = 0; i < 99; i++)
    {
        double potencia = pow(2, i);
        cout << potencia << endl;

        if (potencia > 1000) break;
    }

    /* 6. Fatorial de um número:
        Enunciado: Escreva um programa que recebe um número inteiro positivo do utilizador e calcula o fatorial desse número.
        Exemplo: Se o utilizador inserir o número 5, o programa deve calcular 5! (5 * 4 * 3 * 2 * 1) e imprimir o resultado (120).
    */
    cout << "Exercício 6 - Fatorial de um número" << endl;
    int valorFatorial = valorUtilizador;
    for (int i = valorUtilizador - 1; i >= 1; i--)
    {
        valorFatorial *= i;
    }
    cout << "Fatorial de " << valorUtilizador << ": " << valorFatorial << endl;

    /* 7. Soma dos dígitos de um número:
        Enunciado: Escreva um programa que recebe um número inteiro positivo do utilizador e calcula a soma dos dígitos desse número.
        Exemplo: Se o utilizador inserir o número 123, o programa deve calcular 1 + 2 + 3 e imprimir o resultado (6).
    */
    cout << "Exercício 7 - Soma dos dígitos de um número" << endl;

    string numero = to_string(valorUtilizador);
    valorSoma = 0;
    string output = "";

    for (int i = 0; i < numero.length(); i++)
    {
        int temp = (int)numero[i] - 48;
 
        if (i == numero.length() - 1) {
            output += to_string(temp) + " = ";
        }
        else {
            output += to_string(temp) + " + ";
        }
        valorSoma += temp;
    }

    cout << output << valorSoma << endl;

    /* 8. Números ímpares de 1 a N:
        Enunciado: Escreva um programa que recebe um número inteiro positivo N do utilizador e imprime todos os números ímpares de 1 a N.
        Exemplo: Se o utilizador inserir o número 10, o programa deve imprimir 1, 3, 5, 7, 9.
    */
    cout << "Exercício 8 - Números ímpares de 1 a N" << endl;

    for (int i = 0; i <= valorUtilizador; i++)
    {
        if (i % 2 != 0) cout << i << "; ";
    }

    /* 9. Multiplicação por somas sucessivas:
        Enunciado: Escreva um programa que recebe dois números inteiros positivos A e B do utilizador
        e calcula o produto de A e B usando apenas somas e, eventualmente, subtrações. Não pode usar multiplicações.
        Exemplo: Se o utilizador inserir os números 4 e 3, o programa deve calcular 4 + 4 + 4 e imprimir o resultado (12).
    */
    cout << "\nExercício 9 - Multiplicação por somas sucessivas" << endl;
    
    valorSoma = 0;
    output = "";

    for (int i = 0; i < valorUtilizador2; i++)
    {
        if (i == valorUtilizador2 - 1) {
            output += to_string(valorUtilizador) + " = ";
        }
        else {
            output += to_string(valorUtilizador) + " + ";
        }
        valorSoma += valorUtilizador;
    }

    cout << output << valorSoma << endl;

    /* 10. Divisão por subtrações sucessivas:
        Enunciado: Escreva um programa que recebe dois números inteiros positivos A e B do utilizador
        e calcula a divisão inteira de A por B usando apenas subtrações e somas. Não pode usar divisões.
        Exemplo: Se o utilizador inserir os números 14 e 3, o programa deve calcular quantas vezes 3 pode ser subtraído
    */
    cout << "Exercício 10 - Divisão por subtrações sucessivas" << endl;
    
    int valor = valorUtilizador;
    int count = 0;

    for (int i = 0; i < valorUtilizador; i++)
    {
        valor = valor - valorUtilizador2;
        
        if (valor >= 0) {
            count++;
        }
        else {
            break;
        }
    }

    cout << valorUtilizador2 << " pode ser subtraído " << count << " vezes de " << valorUtilizador << endl;
}

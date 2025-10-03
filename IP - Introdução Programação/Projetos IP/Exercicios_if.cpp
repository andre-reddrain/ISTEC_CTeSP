#include <iostream>
using namespace std;

int main()
{
    /*
        Pede 2 valores ao utilizador (podem ser positivos ou negativos)
            - Se a soma for positiva, escreva no ecrã "Soma positiva"
            - Se a soma for negativa, escreva no ecrã "Soma negativa"
            - Se a soma for zero, escreva no ecrã "Soma nula"
    */

    int valor1, valor2;
    cout << "Valor 1: "; cin >> valor1;
    cout << "Valor 2: "; cin >> valor2;

    int soma = valor1 + valor2;

    if (soma == 0) cout << "Soma nula";
    else if (soma > 0) cout << "Soma positiva";
    else if (soma < 0) cout << "Soma negativa";
}
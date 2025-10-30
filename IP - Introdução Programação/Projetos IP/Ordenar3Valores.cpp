// Ordenar3Valores.cpp : This file contains the 'main' function. Program execution begins and ends there.
//

#include <iostream>
using namespace std;

void compareValuesv1(int x, int y, int z) {
    int bigger = 0;
    int middle = 0;
    int lower = 0;

    if (x == y && x == z) {
        // São todos iguais
        cout << "Todos os números são iguais";
    }
    else {
        // Comparação dos valores x e y
        if (x > y) {
            // X é maior que Y
            if (x > z) {
                // X é o maior
                bigger = x;

                if (y > z) {
                    // Z é o menor
                    middle = y;
                    lower = z;
                }
                else {
                    // Y é o menor
                    middle = z;
                    lower = y;
                }
            }
            else {
                // X é maior que Y, mas menor que Z -> Z, X, Y
                bigger = z;
                middle = x;
                lower = y;
            }
        }
        else {
            // X é menor que Y
            if (y > z) {
                // X é menor que Y, e Y é maior que Z -> Y é o maior
                bigger = y;

                if (x > z) {
                    // Y é o maior, e X é maior que Z -> Y, X, Z
                    middle = x;
                    lower = z;
                }
                else {
                    // Y é o maior, e Z é maior que X -> Y, Z, X
                }
            }
        }
    }

    cout << bigger, middle, lower;
}

void compareValuesv2(int x, int y, int z) {

    cout << "Valores desordenados\n"
        << "N1=" << x
        << "\nN2=" << y
        << "\nN3=" << z << "\n\n";

    int bigger = 0;
    int middle = 0;
    int lower = 0;

    if (x > y && x > z) {
        // X é o maior
        bigger = x;

        // Comparar Y e Z
        if (y > z) {
            // Z é o menor
            lower = z;
            middle = y;
        }
        else {
            // Y é o menor
            lower = y;
            middle = z;
        }
    }
    else if (y > x && y > z) {
        // Y é o maior
        bigger = y;

        // Comparar X e Z
        if (x > z) {
            // Z é o menor
            lower = z;
            middle = x;
        }
        else {
            // X é o menor
            lower = x;
            middle = z;
        }
    }
    else if (z > x && z > y) {
        // Z é o maior
        bigger = z;

        // Comparar X e Y
        if (x > y) {
            // Y é o menor
            lower = y;
            middle = x;
        }
        else {
            // X é o menor
            lower = x;
            middle = y;
        }
    }

    //cout << bigger, middle, lower;
    cout << "Valores ordenados\n"
        << "N1=" << bigger
        << "\nN2=" << middle
        << "\nN3=" << lower << "\n\n";
}

int main()
{
    int x = 2;
    int y = 3;
    int z = 1;

    //compareValuesv1(x, y, z);
    compareValuesv2(3, 2, 1);
    compareValuesv2(3, 1, 2);
    compareValuesv2(2, 1, 3);
    compareValuesv2(2, 3, 1);
    compareValuesv2(1, 2, 3);
    compareValuesv2(1, 3, 2);

    return 0;
}

// Run program: Ctrl + F5 or Debug > Start Without Debugging menu
// Debug program: F5 or Debug > Start Debugging menu

// Tips for Getting Started: 
//   1. Use the Solution Explorer window to add/manage files
//   2. Use the Team Explorer window to connect to source control
//   3. Use the Output window to see build output and other messages
//   4. Use the Error List window to view errors
//   5. Go to Project > Add New Item to create new code files, or Project > Add Existing Item to add existing code files to the project
//   6. In the future, to open this project again, go to File > Open > Project and select the .sln file

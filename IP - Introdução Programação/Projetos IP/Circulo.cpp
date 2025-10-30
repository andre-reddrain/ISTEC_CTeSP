#define _USE_MATH_DEFINES

#include <cmath>
#include <iostream>
using namespace std;

int main()
{
    /*
        Pede ao utilizador o valor do raio de um círculo (com decimais)
        Diga qual a área e qual o perímetro
    */
    const double PI = atan(1.0) * 4;
    double raioCirculo;

    cout << "Insira o raio do circulo: "; cin >> raioCirculo;

    // Área do Círculo -> Pi * Raio^2
    //double areaCirculo = M_PI * raioCirculo^2;    // It no worky. M_PI doesn't work
    double areaCirculo = PI * (raioCirculo * raioCirculo);

    // Perímetro do Círculo -> 2 * Pi * Raio
    double perimetroCirculo = 2 * PI * raioCirculo;
    
    cout << "Area do Circulo: " << areaCirculo
        << "\nPerimetro do Circulo: " << perimetroCirculo;
}
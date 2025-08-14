#include <iostream>
using namespace std;

int main() {
    int x, y;

    cout << "x = "; cin >> x;
    cout << "y = "; cin >> y;

    if (x > y) {
        cout << "O maior é " << x;
    } else if (y > x) {
        cout << "O maior é " << y;
    } else {
        cout << "São iguais";
    }
    return 0
}
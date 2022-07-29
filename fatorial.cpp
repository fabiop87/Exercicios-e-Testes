#include <iostream>
#include <conio.h>

using namespace std;

int fatorial (int n);

int main() {

    int n;
    
    for (n = 1; n < 20; n++) {
        cout << "Fatorial de " << n << " = ";
        cout << fatorial( n ) << endl;
        
    }
    getch();
    return 0;
}

int fatorial (int n) {

    cout << n << " * "; 

    if (n < 2)
        return 1;

        return fatorial ( n - 1 ) * n;
}
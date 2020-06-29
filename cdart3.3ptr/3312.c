//3.3 ptr 1.2 get value at a address
#include <stdio.h>
int main(){
    //! showMemory(start=65520)
    double a = 42.98;
    double * addressOfA = &a;
    printf("At the address %p there is the value %.2lf\n",addressOfA,* addressOfA);
    char c = 'm';
    char * addressOfC = &c;//&nom, address of a var
    char d = * addressOfC; //value of
    * addressOfA = 32; //value of, de-ref, star without type prefix
    * addressOfA = * addressOfA + 1; //*nom, value of a pointee
    printf("At the address %p there is the value %.2lf\n",addressOfA,* addressOfA);
    return 0;
}

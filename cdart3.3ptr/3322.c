//3.3ptr 2.2 ptr as arg
#include <stdio.h>
void addThree(int *);//ptr as arg, no name needed in prototype
int main() {
    //! showMemory(start=65520)
    int a = 5;
    addThree(&a);
    printf("inside main, value of a: %d\n",a);
    return 0;
}
void addThree(int * a){ //need a name here
    *a = *a + 3;
    printf("inside addThree, value of a: %d\n",*a);
}

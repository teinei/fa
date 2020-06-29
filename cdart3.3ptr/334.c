//3.3ptr4 array as ptr arg, array ptr + ptr arg
#include <stdio.h>
void reset(int *);//ptr arg
int main() {
    //! showMemory(start=65520)
    int arr[3] = {15, 16, 17};
    reset(arr);
    return 0;
}
void reset(int * ptr){
    *(ptr + 0) = 0;
    *(ptr +1) = 0;
    *(ptr +2) = 0;
}

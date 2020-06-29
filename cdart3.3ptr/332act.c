//3.3ptr activity
#include <stdio.h>

void elixir(int *);

int main(void){
	int age;
	int *ageAddr = &age;
	scanf("%d", ageAddr);
	printf("Your current age is %d.\n", age);

	elixir(ageAddr);

	printf("Your new age will be %d!\n", age);
	return 0;
}


void elixir(int *age){
	if (*age>20){
		*age -= 10;
	} else {
		*age *= 2;
	}
}

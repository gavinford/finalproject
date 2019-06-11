#include <stdio.h>
#include <stdlib.h>

int main(int argc, char* argv[]){

  float num1, num2;
  int operation;

  if(argc != 4){

    printf("Error. Incorrect number of arguments\n");
    return 0;

  }

  num1 = atof(argv[1]);
  num2 = atof(argv[2]);
  operation = atoi(argv[3]);

  if(operation < 1 || operation > 4){

    printf("Error. Incorrect operation argument\n");
    return 0;

  }





  float add;
  float sub;
  float mult;
  float div;
  if(operation == 1)
  {//addition
    add = num1 + num2;
    printf("%f",add);
  }else if(operation == 2)
  {//subtraction
    sub = num1 - num2;
    printf("%f",sub);
  }else if(operation == 3)
  {//multiply
    mult = num1 * num2;
    printf("%f",mult);
  }else if(operation == 4)
  {//division
    div = num1 / num2;
    printf("%f",div);
  }else
  {
    printf("Error. Operation didn't complete.");
    printf("\n");
    return 0;
  }

  return 0;

  

}

#include <stdio.h>
#include <string.h>

int main(void)
{
    char buff[15];
    int pass = 0;

    printf("\n Enter the password : \n");
    gets(buff);

    if(strcmp(buff, "topSecretDoesntMatterDooBaaMehWehWhatNowWhyRandomMyHeadHurts"))
    {
        printf ("\n Wrong Password \n");
    }
    else
    {
        printf ("\n Correct Password \n");
        pass = 1;
    }

    if(pass)
    {
       /* Now Give root or admin rights to user*/
       printf("NCC{C_Vu1nerable_Much?_Know_The_m3thod_Limitation!}");
    }

    return 0;
}
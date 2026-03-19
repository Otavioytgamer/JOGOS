
#include <stdio.h>

int main() {
  
    char p1 = '1', p2 = '2', p3 = '3', p4 = '4', p5 = '5',
         p6 = '6', p7 = '7', p8 = '8', p9 = '9';
    
    char jogador = 'X';    
    int jogadas = 0;       
    int ganhou = 0;         
    int escolha;          
    
    while (jogadas < 9 && ganhou == 0) {
        system("cls");
        
       
        printf("\n     JOGO DA VELHA     \n\n");
        printf("   %c | %c | %c \n", p1, p2, p3);
        printf("  ---|---|---\n");
        printf("   %c | %c | %c \n", p4, p5, p6);
        printf("  ---|---|---\n");
        printf("   %c | %c | %c \n\n", p7, p8, p9);
        
        
        printf("Jogador %c, escolha uma posicao (1-9): ", jogador);
        scanf("%d", &escolha);
        
       
        int valida = 0;
        
        if (escolha == 1 && p1 == '1') { p1 = jogador; valida = 1; }
        else if (escolha == 2 && p2 == '2') { p2 = jogador; valida = 1; }
        else if (escolha == 3 && p3 == '3') { p3 = jogador; valida = 1; }
        else if (escolha == 4 && p4 == '4') { p4 = jogador; valida = 1; }
        else if (escolha == 5 && p5 == '5') { p5 = jogador; valida = 1; }
        else if (escolha == 6 && p6 == '6') { p6 = jogador; valida = 1; }
        else if (escolha == 7 && p7 == '7') { p7 = jogador; valida = 1; }
        else if (escolha == 8 && p8 == '8') { p8 = jogador; valida = 1; }
        else if (escolha == 9 && p9 == '9') { p9 = jogador; valida = 1; }
        else {
            printf("\nPosicao invalida ou ocupada! Aperte Enter.");
            getchar();   
            getchar();   
            continue;  
        }
        
      
        
        
        if (p1 == p2 && p2 == p3) ganhou = 1;
        if (p4 == p5 && p5 == p6) ganhou = 1;
        if (p7 == p8 && p8 == p9) ganhou = 1;
        
        
        if (p1 == p4 && p4 == p7) ganhou = 1;
        if (p2 == p5 && p5 == p8) ganhou = 1;
        if (p3 == p6 && p6 == p9) ganhou = 1;
        
        
        if (p1 == p5 && p5 == p9) ganhou = 1;
        if (p3 == p5 && p5 == p7) ganhou = 1;
        
        
        if (ganhou == 0) {
            if (jogador == 'X') {
                jogador = 'O';
            } else {
                jogador = 'X';
            }
            jogadas++;
        }
    }
    
    
    system("cls");
    
    printf("\n     JOGO DA VELHA     \n\n");
    printf("   %c | %c | %c \n", p1, p2, p3);
    printf("  ---|---|---\n");
    printf("   %c | %c | %c \n", p4, p5, p6);
    printf("  ---|---|---\n");
    printf("   %c | %c | %c \n\n", p7, p8, p9);
    
    if (ganhou == 1) {
        printf("PARABENS! O jogador %c VENCEU!!! \n\n", jogador);
    } else {
        printf("EMPATE! O jogo terminou sem vencedor.\n\n");
    }
    
    printf("Aperte Enter para sair...");
    getchar();
    getchar();
    
    return 0;
}
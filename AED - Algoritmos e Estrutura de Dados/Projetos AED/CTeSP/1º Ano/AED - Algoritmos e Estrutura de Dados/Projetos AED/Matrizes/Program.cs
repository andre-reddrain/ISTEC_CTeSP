// See https://aka.ms/new-console-template for more information
//Console.WriteLine("Hello, World!");

/*
    Ex.1
    Desenvolva um algoritmo em pseudocódigo que leia os elementos de um
    quadro de 4 linhas por 5 colunas de números inteiros, calcule a média dos
    valores de cada linha e o produto dos valores de cada coluna. Estes cálculos
    deverão ser informados ao utilizador no final do programa. 
 */

Console.WriteLine("## Exercício 1 ##");
int[,] matrizEx1 =
{
    { 1, 2, 3, 4, 5 },          //3
    { 6, 7, 8, 9, 10 },         //8
    { 11, 12, 13, 14, 15 },     //13
    { 16, 17, 18, 19, 20 }      //18

    //1056, 2856, 5616, 9576, 15000
};

int media = 0;
int? produto = 0;

// Iteração de linhas
for (int linha = 0; linha < matrizEx1.GetLength(0); linha++)
{
    media = 0;

    // Iteração de colunas
    for (int coluna = 0; coluna < matrizEx1.GetLength(1); coluna++)
    {
        media += matrizEx1[linha, coluna];
    }
    media = media / matrizEx1.GetLength(1);
    Console.WriteLine("Linha " + (linha + 1) + " - Média: " + media);
}

// Iteração de colunas
for (int coluna = 0; coluna < matrizEx1.GetLength(1); coluna++)
{
    produto = null;

    // Iteração de linhas
    for (int linha = 0; linha < matrizEx1.GetLength(0); linha++)
    {
        //Console.WriteLine("Coluna "+ coluna + "/ Linha " + linha + " -> " + matrizEx1[linha, coluna]);
        // Proteção do valor do produto inicial
        if (produto == null)
        {
            produto = matrizEx1[linha, coluna];
        } else
        {
            produto *= matrizEx1[linha, coluna];
        }
    }
    Console.WriteLine("Coluna " + (coluna + 1) + " - Produto: " + produto);
}

/*
 * Ex.2 - MULTIPLOS DE 3.
    Escreva em pseudo-código um programa que leia uma matriz 4x3 de números
    inteiros para de seguida determinar quantos números múltiplos de 3 constam.
    Devem ser mostradas no ecrã todos estes valores com a sua respectiva posição
    dentro da matriz. No final indique o total de números que são múltiplos de 3.
*/

Console.WriteLine("\n## Exercício 2 ##");
int[,] matrizEx2 =
{
    { 1, 2, 3},
    { 4, 5, 6},
    { 7, 8, 9},
    { 10, 11, 12 }
};

int count = 0;

// Iteração de linhas
for (int linha = 0; linha < matrizEx2.GetLength(0); linha++)
{
    // Iteração de colunas
    for (int coluna = 0; coluna < matrizEx2.GetLength(1); coluna++)
    {
        if (matrizEx2[linha, coluna] % 3 == 0)
        {
            Console.WriteLine("O número " + matrizEx2[linha, coluna] + ", na posição [" + linha + "," + coluna + "] é um múltiplo de 3.");
            count++;
        }
    }
}

Console.WriteLine("Na matriz, existem um total de " + count + " múltiplos de 3.");

/*
 * Ex.3 - Leia uma matriz 10 x 10 e escreva a localização (linha e a coluna) do maior valor.
*/

Console.WriteLine("\n## Exercício 3 ##");

int[,] matrizEx3 =
{
    { 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 },
    { 11, 12, 13, 14, 15, 16, 17, 18, 19, 20 },
    { 21, 22, 23, 24, 25, 26, 27, 28, 29, 30 },
    { 31, 32, 33, 34, 35, 36, 37, 38, 39, 40 },
    { 41, 42, 43, 44, 45, 46, 47, 48, 49, 50 },
    { 51, 52, 53, 54, 199, 56, 57, 58, 59, 60 },
    { 61, 62, 63, 64, 65, 66, 67, 68, 69, 70 },
    { 71, 72, 73, 74, 75, 76, 77, 78, 79, 80 },
    { 81, 82, 83, 84, 85, 86, 87, 88, 89, 90 },
    { 91, 92, 93, 94, 95, 96, 97, 98, 99, 100 }
};
int valorMaior = matrizEx3[0, 0];
int valorMaiorLinha = 0;
int valorMaiorColuna = 0;

// Iteração de linhas
for (int linha = 0; linha < matrizEx3.GetLength(0); linha++)
{
    // Iteração de colunas
    for (int coluna = 0; coluna < matrizEx3.GetLength(1); coluna++)
    {
        // Comparação da casa com o valor maior encontrado até agora
        if (matrizEx3[linha, coluna] > valorMaior)
        {
            valorMaior = matrizEx3[linha, coluna];
            valorMaiorLinha = linha;
            valorMaiorColuna = coluna;
        }
    }
}

Console.WriteLine("O valor maior na matriz é " + valorMaior + " e ocupa a posição [" + valorMaiorLinha + "," + valorMaiorColuna + "].");

/*
 * Ex.4 - Escreva o seguinte algoritmo: Uma matriz 12x6. Calcule a soma de todos os elementos pares e calcule a sua média.
*/

Console.WriteLine("\n## Exercício 4 ##");

int[,] matrizEx4 =
{
    { 1, 2, 3, 4, 5, 6 },
    { 7, 8, 9, 10, 11, 12 },
    { 13, 14, 15, 16, 17, 18 },
    { 19, 20, 21, 22, 23, 24 },
    { 25, 26, 27, 28, 29, 30 },
    { 31, 32, 33, 34, 35, 36 },
    { 37, 38, 39, 40, 41, 42 },
    { 43, 44, 45, 46, 47, 48 },
    { 49, 50, 51, 52, 53, 54 },
    { 55, 56, 57, 58, 59, 60 },
    { 61, 62, 63, 64, 65, 66 },
    { 67, 68, 69, 70, 71, 72 }
};
int? somaPares = null;
int countPares = 0;

// Iteração de linhas
for (int linha = 0; linha < matrizEx4.GetLength(0); linha++)
{
    // Iteração de colunas
    for (int coluna = 0; coluna < matrizEx4.GetLength(1); coluna++)
    {
        // Verificação se é número par
        if (matrizEx4[linha, coluna] % 2 == 0)
        {
            // Proteção do valor inicial da soma de pares
            if (somaPares == null)
            {
                somaPares = matrizEx4[linha, coluna];
            } else
            {
                somaPares += matrizEx4[linha, coluna];
            }
            countPares++;
        }
    }
}

media = (int)(somaPares / countPares);
Console.WriteLine("Existem " + countPares + " números pares, com um valor somado de " + somaPares + ", e com média de " + media);
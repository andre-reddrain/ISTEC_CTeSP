// 1. Imprimir números de 1 a 10 usando while

// 2.

// 3.

internal class Program
{
    private static void Main(string[] args)
    {
        // 4. Escrever um programa que pede ao utilizador para inserir dois números e exibe a soma deles
        Console.WriteLine("Exercício 4 - Soma de 2 números");

        Console.WriteLine("Introduza o 1º número: ");
        int num1 = Convert.ToInt16(Console.ReadLine());

        Console.WriteLine("Introduza o 2º número: ");
        int num2 = Convert.ToInt16(Console.ReadLine());

        Console.WriteLine("A soma de " + num1 + " e " + num2 + " é: " + (num1 + num2));

        // 5. Escrever um programa que verifica se um número inserido pelo utilizador é par ou ímpar
        Console.WriteLine("Exercício 5 - Verificar se um nº é par ou ímpar");

        Console.WriteLine("Introduza um número: ");
        num1 = Convert.ToInt16(Console.ReadLine());

        if (num1 % 2 == 0)
        {
            Console.WriteLine(num1 + " é par.");
        }
        else
        {
            Console.WriteLine(num1 + " é impar.");
        }

        // 6. Escrever um programa que calcula o fatorial de um número inserido pelo utilizador
        Console.WriteLine("Exercício 6 - Fatorial de um nº");

        Console.WriteLine("Introduza um número:");
        num1 = Convert.ToInt16(Console.ReadLine());

        int fatorial = 1;

        for (int i = num1; i > 0; i--)
        {
            fatorial *= i;
        }

        Console.WriteLine("Fatorial de " + num1 + " é " + fatorial);

        // 7. Escrever um programa que exibe os primeiros 'n' números da sequência de Fibonacci, onde 'n' é inserido pelo utilizador
        Console.WriteLine("Exercício 7 - Sequência de Fibonacci");
        Console.WriteLine("Introduza um número:");
        num1 = Convert.ToInt16(Console.ReadLine());

        string output = "";         // String que vai conter todos os nºs da sequência de Fibonacci, até N
        int? fibonacci = null;      // Int que vai conter o resultado da iteração da sequência. Nullable para a 1ª iteração da sequência
        num2 = 1;                   // Vai servir para somar ao resultado da iteração da sequência.

        for (int i = 1; i <= num1; i++)
        {
            // Se null, é a 1ª iteração. Vai definir o 1º valor da sequência (0)
            if (fibonacci == null)
            {
                fibonacci = 0;
                output += (fibonacci.ToString() + " ");
            }
            else
            {
                int temp = (int)fibonacci;  // Vai guardar o resultado da sequência, para futuras iterações
                fibonacci += num2;
                num2 = temp;                // Associa o valor guardado do resultado da sequência, para este poder ser somado em iterações seguintes

                output += (fibonacci.ToString() + " ");
            }
        }

        Console.WriteLine(output);

        // 8. 
    }
}
namespace Classes
{
    class Program
    {
        static void Main(string[] args)
        {
            //(1) Calculo da idade
            Console.WriteLine("Exercício 1 - Cálculo da idade");
            Pessoa pessoa1 = new("João Perreira", 2010);
            Console.WriteLine("A pessoa " + pessoa1.Nome + ", que nasceu no ano " + pessoa1.AnoNascimento + " tem " + pessoa1.CalcularIdade());

            //(2) Cálculo da área de um triangulo
            Console.WriteLine("Exercício 2 - Cálculo da área de um triangulo");
            Triangulo triangulo1 = new(20, 5);
            Console.WriteLine("A área do triângulo com altura " + triangulo1.Altura + " e base " + triangulo1.BaseTriangulo + " é " + triangulo1.CalcularArea());

            //(3) Cálculo da Maior idade
            Console.WriteLine("Exercício 3 - Cálculo da Maior idade");
            Pessoa pessoa2 = new("José Figueiredo", 1999);
            Pessoa pessoa3 = new("Alexandre Azevedo", 2000);

            List<Pessoa> pessoas = [pessoa1, pessoa2, pessoa3];
            List<Pessoa> pessoasOrdenadasPorIdade = pessoas.OrderByDescending(pessoa => pessoa.CalcularIdade()).ToList();
            //List<Order> SortedList = objListOrder.OrderBy(o => o.OrderDate).ToList();
            //List<int> idadePessoas = [pessoa1.CalcularIdade(), pessoa2.CalcularIdade(), pessoa3.CalcularIdade()];
            //idadePessoas.Sort();

            Console.WriteLine("A pessoa mais velha é " + pessoasOrdenadasPorIdade[0].Nome + ", com " + pessoasOrdenadasPorIdade[0].CalcularIdade() + " anos.");
        }
    }
}
using System;
					
public class Program
{
	public class Pessoa {
		public string Nome;
		public int Idade;
		
		public Pessoa(string nome, int idade){
			Nome = nome;
			Idade = idade;
		}
	}
	public static void Main()
	{
		Pessoa pessoa1 = new Pessoa("Teste1", 10);
		Pessoa pessoa2 = new Pessoa("Teste2", 13);
		Pessoa pessoa3 = new Pessoa("Teste3", 30);
		
		Console.WriteLine(pessoa1.Nome);
		Console.WriteLine(pessoa2.Idade);
		Console.WriteLine(pessoa3);
		
		// Doesn't work. Why?
		//Pessoa[] pessoas = new Pessoa[ pessoa1, pessoa2, pessoa3 ];
		
		Pessoa[] pessoas = { pessoa1, pessoa2, pessoa3 };
		
		Console.WriteLine(pessoas[0].Nome);
		
		/*
		public CalcularMaiorIdade(Pessoa[] pessoas)
		{
		}
		*/
	}
}
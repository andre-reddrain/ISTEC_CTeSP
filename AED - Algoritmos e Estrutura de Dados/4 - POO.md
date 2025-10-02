# POO (Programação Orientada a Objetos)
- **Classe** é uma estrutura que define o modelo de um objeto do mundo real a partir do qual são construídos objetos para serem utilizados, a partir das suas características e comportamentos de objetos ou pessoas (ex: Carro, Pessoa)
    - Uma classe pode ser dividida em 2 partes:
        - **Privada** - Funcionalidades que só podem ser acedidas através do código interno da classe.
        - **Pública** - Funcionalidades que só podem ser acedidas através do código exterior da classe.
    - **Definição de uma classe**:
        - **Campos (fields)** - Variáveis que podem ser acedidas por código exterior.
        - **Propriedades** - Tal como os campos, definem as características dos objetos.
        - **Métodos** - Ações que os objetos podem executar.
        - **Eventos** - Notificações que um objeto pode receber ou transmitir a outros objetos ou aplicações.
- **Atributos** são características dos objetos do mundo real transportos para o mundo computacional.
- **Métodos** são os comportamentos ou funções associadas a uma classe (ex: Acelarar, Comer)
- **Objetos** são as instâncias das classes, cujos comportamentos e estados são definidos pela classe.
- **Instâncias de uma classe** compartilham o mesmo conjunto de atributos, embora sejam diferentes quanto ao conteúdo. Pode-se dizer que uma instância é a concretização de uma classe.
- Pode-se pensar numa classe como um **molde que gera instâncias de certo tipo**, e que um objeto é **moldado na classe**.

## Os 4 pilares da POO

- **Abstração**
    - Observar comportamentos e estruturas do dia a dia e trazê-los para a linguagem computacional, transformando algo do mundo real num objeto na programação, com propriedades e métodos.

- **Encapsulamento**
    - É uma das principais técnicas da POO, visa a proteção de variáveis importantes dentro de uma classe que não podem ser manipuladas diretamente.(Slide 20)

- **Herança**
    - Uma das grandes vantagens de linguagens OO. Uma classe consegue herdar as propriedades de outra classe (ex: Cachorro herda de Mamífero).

- **Polimorfismo**
    - Consiste na alteração do funcionamento interno de um método herdado de um objeto pai.

**Exemplo classe**

```csharp
using System;
namespace calculaIdade
{
    public class Pessoa     // Classe Pessoa é pública, logo acedida por todos.
    {
        // Para definir uma propriedade é necessário definir uma variável privada.
        // Escrever na linha de comandos "propfull" cria automáticamente a estrutura
        // básica this, define que estamos a usar algo que pertence á classe e ao
        // objeto.
        private int anoNascimento;
        public int AnoNascimento
        {
            get {return this.anoNascimento;}
            set {this.anoNascimento = value;}
        }

        private String nome;
        public String Nome
        {
            get {return this.nome;}
            set{this.nome = value;}
        }

        public void ExibirDados()
        {
            // Trabalha com propriedades e não com a variável que armazena o valor
            Console.Writeline (“Nome: “ + this.Nome);
            Console.Writeline (“Ano de nascimento: “ + this.anoNascimento);
            int idade = this.CalcularIdade();
            Console.Writeline (“Idade: 0“ + idade);
        }

        private int CalcularIdade()
        {
            Datetime data = DateTime.Now;
            int ano = data.Year;
            int idade = ano – this.AnoNascimento;
            return idade;
        }
    }
}
```

**Exemplo Main**
```csharp
using System;
namespace calculaIdade
{
    class Program
    {
        static void Main ( string[] args )
        {
            Console.WriteLine("Programa - Calcular as idade:");

            Pessoa p = new Pessoa();    // Criação de uma instância da classe Pessoa
            Console.Write("Nome da Pessoa:");
            p.Nome = Console.ReadLine();
            Console.Write("Ano de Nascimento:");
            p.AnoNascimento = Convert.Toint32(Console.ReadLine());
            p.ExibirDados();
        }
    }
}
```
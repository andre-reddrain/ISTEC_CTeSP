using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Classes
{
    internal class Pessoa
    {
        private string nome;
        public string Nome
        {
            get { return nome; }
            set { nome = value; }
        }

        private int anoNascimento;
        public int AnoNascimento
        {
            get { return anoNascimento; }
            set { anoNascimento = value; }
        }

        public Pessoa(string nome, int anoNascimento)
        {
            Nome = nome;
            AnoNascimento = anoNascimento;
        }

        // Calcula a Idade da Pessoa
        internal int CalcularIdade()
        {
            DateTime data = DateTime.Now;
            int ano = data.Year;
            int idade = ano - this.AnoNascimento;
            return idade;
        }
    }
}

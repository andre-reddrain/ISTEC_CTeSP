public class Pessoa() {

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
    
    // Calcula a Idade da Pessoa
    private int CalcularIdade() {
        DateTime data = DateTime.Now;
        int ano = data.Year;
        int idade = ano - this.AnoNascimento
        return idade
    }
}
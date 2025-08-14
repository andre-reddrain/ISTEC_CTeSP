public class Triangulo
{
    private double base;
    public double Base
    {
        get { return base; }
        set { base = value; }
    }
    
    private double altura;
    public double Altura
    {
        get { return altura; }
        set { altura = value; }
    }

    // Área Triangulo -> (Base * Altura) / 2
    private double CalcularArea()
    {
        double area = (this.Base * this.Altura) / 2
        return area
    }
}
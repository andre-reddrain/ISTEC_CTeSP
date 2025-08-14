using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Classes
{
    internal class Triangulo
    {
        private double baseTriangulo;
        public double BaseTriangulo
        {
            get { return baseTriangulo; }
            set { baseTriangulo = value; }
        }

        private double altura;
        public double Altura
        {
            get { return altura; }
            set { altura = value; }
        }

        public Triangulo(double baseTriangulo, double altura)
        {
            BaseTriangulo = baseTriangulo;
            Altura = altura;
        }

        // Área Triangulo -> (Base * Altura) / 2
        internal double CalcularArea()
        {
            double area = (this.BaseTriangulo * this.Altura) / 2;
            return area;
        }
    }
}
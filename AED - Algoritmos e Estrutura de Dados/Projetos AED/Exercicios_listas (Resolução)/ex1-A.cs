//a. Um método para concatenar duas listas.

internal class Program {
    private static void Main(string[] args) {
        public void Concatenar(ListaSimplesEncadeada outraLista)  {
            if (Start == null) {
                Start = outraLista.Start;
                return;
            }

            Node p = Start;
            while (p.Link != null) {
                p = p.Link;
            }

            p.Link = outraLista.Start;
        }
    }
}
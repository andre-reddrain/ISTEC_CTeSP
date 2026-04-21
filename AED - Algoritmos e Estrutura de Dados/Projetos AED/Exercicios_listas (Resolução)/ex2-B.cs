//b. Um método que separa uma lista em duas novas listas.

internal class Program {
    private static void Main(string[] args) {
        public void SepararLista(out LinkedList lista1, out LinkedList lista2) {
            lista1 = new LinkedList();
            lista2 = new LinkedList();

            Node p = Head;
            int contador = 0;

            while (p != null) {
                if (contador % 2 == 0) {
                    lista1.Add(p.Data); 
                }
                else {
                    lista2.Add(p.Data); 
                }

                p = p.Next;
                contador++;
            }
        }
    }
}
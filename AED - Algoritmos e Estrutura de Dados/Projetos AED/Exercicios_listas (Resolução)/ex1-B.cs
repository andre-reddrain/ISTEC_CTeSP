//b. Um método que separa uma lista em duas novas listas.

internal class Program {
    private static void Main(string[] args)  {
        public void DividirLista(out LinkedList listaPares, out LinkedList listaImpares)  {
            listaPares = new LinkedList();
            listaImpares = new LinkedList();

            Node p = Head; 
            int contador = 0;

            while (p != null) {
                if (contador % 2 == 0)
                {
                    listaPares.Add(p.Data); 
                }
                else
                {
                    listaImpares.Add(p.Data); 
                }

                p = p.Next // Avançando o ponteiro
                contador++;
            }
        }
    }
}
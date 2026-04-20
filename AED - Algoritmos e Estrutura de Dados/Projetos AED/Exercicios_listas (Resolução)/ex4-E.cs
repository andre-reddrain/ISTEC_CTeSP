//e. fazer uma cópia da lista;

internal class Program {
    private static void Main(string[] args) {
        public ListaCircular Copiar() {
            ListaCircular novaLista = new ListaCircular();

            if (start == null) return novaLista;

            No p = start;
            do {
                novaLista.InserirEsquerda(p.info);
                p = p.next;
            } while (p != start);

            return novaLista;
        }
    }
}
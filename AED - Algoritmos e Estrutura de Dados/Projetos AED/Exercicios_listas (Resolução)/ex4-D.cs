//d. intercalar duas listas ordenadas;

internal class Program {
    private static void Main(string[] args) {
        public static ListaCircular Intercalar(ListaCircular l1, ListaCircular l2) {
            ListaCircular resultado = new ListaCircular();

            if (l1.start == null) return l2;
            if (l2.start == null) return l1;

            No p = l1.start, q = l2.start;

            do {
                if (p.info < q.info) {
                    resultado.InserirEsquerda(p.info);
                    p = p.next;
                }
                else {
                    resultado.InserirEsquerda(q.info);
                    q = q.next;
                }
            } while (p != l1.start && q != l2.start);

            while (p != l1.start) {
                resultado.InserirEsquerda(p.info);
                p = p.next;
            }

            while (q != l2.start) {
                resultado.InserirEsquerda(q.info);
                q = q.next;
            }

            return resultado;
        }
    }
}
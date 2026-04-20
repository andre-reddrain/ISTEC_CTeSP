//c. Um método para intercalar duas listas ordenadas em uma lista ordenada
internal class Program {
    private static void Main(string[] args) {
        public LinkedList IntercalarListasOrdenadas(LinkedList outraLista)  {
            LinkedList resultado = new LinkedList();
            Node p1 = Head, p2 = outraLista.Head;

            while (p1 != null || p2 != null) {
                if (p1 == null || p2 != null && p2.Data < p1.Data) {
                    resultado.Add(p2.Data);
                    p2 = p2.Next;
                }
                else {
                    resultado.Add(p1.Data);
                    p1 = p1.Next;
                }
            }

            return resultado;
        }
    }
}
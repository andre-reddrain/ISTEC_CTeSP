//a. Um método para concatenar duas listas.

internal class Program {
    private static void Main(string[] args) {
        public void ConcatenarListas(LinkedList outraLista) {
            if (Head == null) {
                Head = outraLista.Head;
                return;
            }

            Node p = Head;
            while (p.Next != null) {
                p = p.Next; 
            }

            p.Next = outraLista.Head;
            if (outraLista.Head != null) {
                outraLista.Head.Prev = p;
            }
        }
    }
}
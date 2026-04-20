//d. Um método que remova os nós da lista cujo valores se encontrem no intervalo de 20 a 40. Parta do pressuposto que a lista contém um conjunto de números inteiros positivos.

internal class Program {
    private static void Main(string[] args) {
        public void RemoverNoIntervalo(int inicio, int fim) {
           
            while (Head != null && Head.Data >= inicio && Head.Data <= fim) {
                Head = Head.Next;
            }

            Node p = Head;
            while (p?.Next != null) {
            if (p.Next.Data < inicio || p.Next.Data > fim)  {
                p = p.Next; 
            }
            else {
                p.Next = p.Next.Next; 
            }
        }
        }
    }
}
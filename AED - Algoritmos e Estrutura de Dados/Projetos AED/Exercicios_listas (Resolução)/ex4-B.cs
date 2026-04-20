//b. inserir um elemento à esquerda da cabeça da lista;

internal class Program {
    private static void Main(string[] args) {
        public void InserirEsquerda(int i) {
            No temp = new No(i);

            if (start == null) {
                start = temp;
                start.next = start;
            }
            else  {
                No p = start;
                while (p.next != start)
                    p = p.next;

                temp.next = start;
                p.next = temp;
                start = temp;
            }
        }
    }
}
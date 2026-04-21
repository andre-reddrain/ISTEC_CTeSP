//c. concatenar duas listas circulares;

internal class Program {
    private static void Main(string[] args) {
        public void Concatenar(ListaCircular outra) {

            if (start == null) {
                start = outra.start;
                return;
            }

            if (outra.start == null) return;

            No p = start;
            while (p.next != start)
                p = p.next;

            No q = outra.start;

            while (q.next != outra.start)
                q = q.next;

            p.next = outra.start;
            q.next = start;
        }
    }
}
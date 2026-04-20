//a. contar o número de elementos numa lista circular;

internal class Program {
    private static void Main(string[] args) {
        public int ContarElementos()  {
            if (start == null) return 0;

            int contador = 1;
            Node p = start.next;

            while (p != start) {
                contador++;
                p = p.next;
            }
            return contador;
        }
    }
}
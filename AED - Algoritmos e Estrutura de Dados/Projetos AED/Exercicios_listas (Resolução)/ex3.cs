/*Uma lista duplamente encadeada possui registros que tem ligações com o sucessor e o
predecessor na lista. Ainda, existe um tipo que possui um “nó cabeça”, que é um registro
auxiliar que apontapara o “primeiro” e o “último” registro da lista e é apontado por eles.
Implemente métodos parabusca, inserção e eliminação de elementos para este tipo de lista
dupla.*/

using System;

class Node {
    public int info;
    public Node prev, next;

    public Node(int i) {
        info = i;
        prev = null;
        next = null;
    }
}

class ListaDupla {
    private Node head, tail;

    public ListaDupla() {
        head = new Node(0); // Nó cabeça
        tail = new Node(0);
        head.next = tail;
        tail.prev = head;
    }

    // Inserção no fim
    public void InserirFim(int i) {
        Node temp = new Node(i);
        Node p = tail.prev;

        p.next = temp;
        temp.prev = p;
        temp.next = tail;
        tail.prev = temp;
    }

    // Inserção no início
    public void InserirInicio(int i) {
        Node temp = new Node(i);
        Node p = head.next;

        temp.next = p;
        temp.prev = head;
        head.next = temp;
        p.prev = temp;
    }

    // Procurar um nó
    public Node Procurar(int i) {
        Node p = head.next;
        while (p != tail)
        {
            if (p.info == i)
                return p;
            p = p.next;
        }
        return null;
    }

    // Remover um nó
    public bool Remover(int i) {
        Node temp = Procurar(i);
        if (temp != null) {
            temp.prev.next = temp.next;
            temp.next.prev = temp.prev;
            return true;
        }
        return false;
    }

    // Mostrar a lista
    public void Mostrar() {
        Node p = head.next;
        while (p != tail){
            Console.Write(p.info + " ");
            p = p.next;
        }
        Console.WriteLine();
    }
}

class Program
{
    static void Main() {
        ListaDupla lista = new ListaDupla();

        lista.InserirFim(10);
        lista.InserirFim(20);
        lista.InserirInicio(5);

        Console.WriteLine("Lista após inserções:");
        lista.Mostrar();

        Console.WriteLine("A Procurar 20...");
        Console.WriteLine(lista.Procurar(20) != null ? "Encontrado." : "Não encontrado.");

        Console.WriteLine("Removendo 10...");
        Console.WriteLine(lista.Remover(10) ? "Removido." : "Não encontrado.");

        Console.WriteLine("Lista após remoção:");
        lista.Mostrar();
    }
}

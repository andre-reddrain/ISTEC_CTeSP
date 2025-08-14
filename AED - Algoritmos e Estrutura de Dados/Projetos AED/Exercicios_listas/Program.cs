using System.Runtime.CompilerServices;
using System.Security.Cryptography.X509Certificates;

namespace Exercicios_listas
{
    internal class Program
    {
        static void Main(string[] args)
        {
            SimpleList simpleList1 = new();
            simpleList1.AddNode(new SimpleNode(1));
            simpleList1.AddNode(new SimpleNode(2));
            simpleList1.AddNode(new SimpleNode(3));
            simpleList1.AddNode(new SimpleNode(4));
            simpleList1.AddNode(new SimpleNode(5));
            simpleList1.AddNode(new SimpleNode(6));
            simpleList1.AddNode(new SimpleNode(7));
            simpleList1.AddNode(new SimpleNode(8));
            simpleList1.AddNode(new SimpleNode(9));
            simpleList1.AddNode(new SimpleNode(10));

            SimpleList simpleList2 = new();
            simpleList2.AddNode(new SimpleNode(11));
            simpleList2.AddNode(new SimpleNode(12));
            simpleList2.AddNode(new SimpleNode(13));
            simpleList2.AddNode(new SimpleNode(14));
            simpleList2.AddNode(new SimpleNode(15));
            simpleList2.AddNode(new SimpleNode(20));
            simpleList2.AddNode(new SimpleNode(17));
            simpleList2.AddNode(new SimpleNode(40));
            simpleList2.AddNode(new SimpleNode(19));
            simpleList2.AddNode(new SimpleNode(41));

            Console.WriteLine("Lista Simples 1");
            simpleList1.PrintNodes();
            Console.WriteLine("Lista Simples 2");
            simpleList2.PrintNodes();

            /**
             * Exercício 1 - Listas simples encadeadas
             * a) Método para concatenar duas listas
             * b) Método que separa uma lista em duas novas listas
             * c) Método para intercalar duas listas ordenadas em uma lista ordenada
             * d) Método que remova os nós da lista cujo valores se encontrem no intervalo de 20 a 40
             */
            // 1.a) Concatenar duas listas
            Console.WriteLine("1.a) Concatenar duas listas - Lista 1 & Lista 2");
            ConcatSimpleLists(simpleList1, simpleList2);
            simpleList1.PrintNodes();

            // 1.b) Separar uma lista em duas novas listas
            Console.WriteLine("1.b) Separar uma lista em duas novas listas - Lista 2 em Lista 1b1 e Lista 1b2");
            SimpleList list1b1 = new();
            SimpleList list1b2 = new();
            (list1b1, list1b2) = SeparateList(simpleList2);

            Console.WriteLine("Lista 1b1");
            list1b1.PrintNodes();

            Console.WriteLine("Lista 1b2");
            list1b2.PrintNodes();

            // 1.c) Intercalar duas listas numa só
            Console.WriteLine("1.c) Intercalar duas listas numa só - Lista 1 & Lista 2 em Lista 1c");
            SimpleList list1c = IntercalateLists(simpleList1, simpleList2);

            Console.WriteLine("Lista 1c");
            list1c.PrintNodes();

            // 1.d) Remover nós com valores entre 20 a 40 duma lista
            Console.WriteLine("1.d) Remover nós com valores entre 20 a 40 duma lista - Lista 1c");
            RemoveNodeWithValuesBetween(20, 40, list1c);
            Console.WriteLine("Lista 1c - Sem nós com valores entre 20 a 40");
            list1c.PrintNodes();

            /**
             * Exercício 2 - Listas duplamente encadeadas
             * a) Método para concatenar duas listas
             * b) Método que separa uma lista em duas novas listas
             * c) Método para intercalar duas listas ordenadas em uma lista ordenada
             */

            DoubleList doubleList1 = new();
            doubleList1.AddNode(new DoubleNode(1));
            doubleList1.AddNode(new DoubleNode(2));
            doubleList1.AddNode(new DoubleNode(3));
            doubleList1.AddNode(new DoubleNode(4));
            doubleList1.AddNode(new DoubleNode(5));
            doubleList1.AddNode(new DoubleNode(6));
            doubleList1.AddNode(new DoubleNode(7));
            doubleList1.AddNode(new DoubleNode(8));
            doubleList1.AddNode(new DoubleNode(9));
            doubleList1.AddNode(new DoubleNode(10));

            DoubleList doubleList2 = new();
            doubleList2.AddNode(new DoubleNode(11));
            doubleList2.AddNode(new DoubleNode(12));
            doubleList2.AddNode(new DoubleNode(13));
            doubleList2.AddNode(new DoubleNode(14));
            doubleList2.AddNode(new DoubleNode(15));
            doubleList2.AddNode(new DoubleNode(16));
            doubleList2.AddNode(new DoubleNode(17));
            doubleList2.AddNode(new DoubleNode(18));
            doubleList2.AddNode(new DoubleNode(19));
            doubleList2.AddNode(new DoubleNode(20));

            Console.WriteLine("Lista Dupla 1");
            doubleList1.PrintNodes();
            Console.WriteLine("Lista Dupla 2");
            doubleList2.PrintNodes();
            // 2.a) Concatenar duas listas

            // 2.b) Separar uma lista em duas novas listas

            // 2.c) Intercalar duas listas numa só
        }

        #region Classes

        public class SimpleNode
        {
            public int info;
            public SimpleNode? link = null;

            public SimpleNode(int info)
            {
                this.info = info;
            }
        }

        public class SimpleList
        {
            private SimpleNode start;
            public SimpleNode Start
            {
                get { return start; }
                set { start = value; }
            }

            private int size = 0;
            public int Size
            {
                get { return size; }
                set { size = value; }
            }


            /// <summary>
            /// Adiciona um nó à lista, independente se tenha nós ou não.
            /// </summary>
            /// <param name="node">Nó a ser adicionado</param>
            public void AddNode(SimpleNode node)
            {
                if (this.Start == null)
                {
                    this.Start = node;
                } else
                {
                    SimpleNode temp = this.Start;
                    while(temp.link != null)
                    {
                        temp = temp.link;
                    }

                    temp.link = node;
                }
                size++;
            }

            public void RemoveNode(SimpleNode node)
            {
                SimpleNode temp = this.Start;

                while (temp.link != null)
                {
                    if (temp.link == node)
                    {
                        temp.link = node.link;
                    }

                    temp = temp.link;
                }
                size--;
            }

            /// <summary>
            /// Faz print dos nodes da lista
            /// </summary>
            public void PrintNodes()
            {
                int i = 1;
                SimpleNode temp = this.Start;
                while(temp != null)
                {
                    Console.WriteLine("Node Nº " + i + ": Info = " + temp.info + " / Link = " + (temp.link != null ? "Yes" : "No"));
                    temp = temp.link;
                    i++;
                }
            }
        }

        public class DoubleNode
        {
            public int info;
            public DoubleNode? next = null;
            public DoubleNode? prev = null;

            public DoubleNode(int info)
            {
                this.info = info;
            }
        }

        public class DoubleList
        {
            private DoubleNode start;
            public DoubleNode Start
            {
                get { return start; }
                set { start = value; }
            }

            private int size = 0;
            public int Size
            {
                get { return size; }
                set { size = value; }
            }


            /// <summary>
            /// Adiciona um nó à lista, independente se tenha nós ou não.
            /// </summary>
            /// <param name="node">Nó a ser adicionado</param>
            public void AddNode(DoubleNode node)
            {
                if (this.Start == null)
                {
                    this.Start = node;
                }
                else
                {
                    DoubleNode temp = this.Start;
                    while (temp.next != null)
                    {
                        temp = temp.next;
                    }

                    temp.next = node;
                    node.prev = temp;
                }
                size++;
            }

            //TODO Modificar RemoveNode
            public void RemoveNode(DoubleNode node)
            {
                DoubleNode temp = this.Start;

                while (temp.next != null)
                {
                    if (temp.next == node)
                    {
                        temp.next = node.next;
                    }

                    temp = temp.next;
                }
                size--;
            }

            /// <summary>
            /// Faz print dos nodes da lista
            /// </summary>            
            public void PrintNodes()
            {
                int i = 1;
                DoubleNode temp = this.Start;
                while (temp != null)
                {
                    Console.WriteLine("Node Nº " + i + ": Info = " + temp.info + " / Next = " + (temp.next != null ? "Yes" : "No") + " / Prev = " + (temp.prev != null ? "Yes" : "No"));
                    temp = temp.next;
                    i++;
                }
            }
        }
        #endregion

        #region Exercício 1

        /// <summary>
        /// Faz a concatenação de 2 listas simples
        /// </summary>
        /// <param name="list1">Lista a receber os novos nós</param>
        /// <param name="list2">Lista com os novos nós</param>
        public static void ConcatSimpleLists(SimpleList list1, SimpleList list2)
        {
            SimpleNode lastNode = list1.Start;
            while(lastNode.link != null)
            {
                lastNode = lastNode.link;
            }

            lastNode.link = list2.Start;
        }

        /// <summary>
        /// Separa uma lista em 2 listas
        /// </summary>
        /// <param name="list">Lista a ser separada</param>
        /// <returns>2 listas</returns>
        public static (SimpleList, SimpleList) SeparateList(SimpleList list)
        {
            SimpleList list1 = new();
            SimpleList list2 = new();
            SimpleNode lastNode = list.Start;
            int halfList = list.Size / 2;
            int i = 0;

            while (lastNode != null)
            {
                if (i < halfList)
                {
                    list1.AddNode(new SimpleNode(lastNode.info));
                } else
                {
                    list2.AddNode(new SimpleNode(lastNode.info));
                }
                lastNode = lastNode.link;
                i++;
            }
            return (list1, list2);
        }

        /// <summary>
        /// Intercala 2 listas numa nova lista
        /// </summary>
        /// <param name="list1">Lista 1</param>
        /// <param name="list2">Lista 2</param>
        /// <returns>Nova lista, com os elementos das 2 listas, intercalados</returns>
        public static SimpleList IntercalateLists(SimpleList list1, SimpleList list2)
        {
            SimpleList returnList = new();
            int maxSize = list1.Size >= list2.Size ? list1.Size : list2.Size;
            int i = 0;

            SimpleNode lastNodeList1 = list1.Start;
            SimpleNode lastNodeList2 = list2.Start;

            while (i <= maxSize)
            {
                if (lastNodeList1.link != null)
                {
                    returnList.AddNode(new SimpleNode(lastNodeList1.info));
                    lastNodeList1 = lastNodeList1.link;
                }
                
                if (lastNodeList2.link != null)
                {
                    returnList.AddNode(new SimpleNode(lastNodeList2.info));
                    lastNodeList2 = lastNodeList2.link;
                }

                i++;
            }

            return returnList;
        }

        /// <summary>
        /// Remove nós com valor entre um conjunto específico de valores (ex: 1 a 10)
        /// </summary>
        /// <param name="lowerValue">Valor mais baixo do conjunto</param>
        /// <param name="higherValue">Valor mais alto do conjunto</param>
        /// <param name="list">Lista a ser removida os nós</param>
        public static void RemoveNodeWithValuesBetween(int lowerValue, int higherValue, SimpleList list)
        {
            SimpleNode lastNode = list.Start;

            while (lastNode != null)
            {
                if (lastNode.info >= lowerValue && lastNode.info <= higherValue)
                {
                    list.RemoveNode(lastNode);
                }

                lastNode = lastNode.link;
            }
        }

        #endregion

        #region Exercício 2

        #endregion
    }
}
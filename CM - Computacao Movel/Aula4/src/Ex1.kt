/* Exercício 1 - Leitura simples com try/catch
Crie um programa que:
    - Tente ler um ficheiro chamado dados.txt
    - Imprima o conteúdo linha a linha
    - Se o ficheiro não existir, imprima "Ficheiro não encontrado!"
*/
fun leituraSimples() {
    var caminho = ".\\dados.txt"
    var conteudo = ReadFile(caminho)

    if (conteudo != null) {
        println(conteudo)
    }
}
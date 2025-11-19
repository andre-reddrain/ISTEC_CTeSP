//TIP To <b>Run</b> code, press <shortcut actionId="Run"/> or
// click the <icon src="AllIcons.Actions.Execute"/> icon in the gutter.
import java.io.File

fun main() {
    // Exercício 1 - Leitura simples
    leituraSimples()

    // Exercício 2 - Conversão segura
    conversaoSegura()
}

/**
 * Reads a file
 *
 * @param filePath Path of the file.
 * @return Content of the file. Null if file doesn't exist
 */
fun ReadFile(filePath: String): List<String>? {
    try {
        val content = File(filePath).readLines()
        return content
    } catch (_: java.io.FileNotFoundException) {
        println("Ficheiro não encontrado!")
    } catch (e: Exception) {
        println(e.message)
    }

    return null
}
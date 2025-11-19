/* Exercício 1 - Verificar se tem direito a portes grátis
    Criar a função fun temDireitoAPortesGratis(valorCompra: Double, clientePremium: Boolean) : Boolean

    Regras:
        - Se for cliente premium - Tem sempre portes grátis
        - Se não for premium - Só tem portes grátis se a compra for igual ou superior a 30€
 */
fun temDireitoAPortesGratis(valorCompra: Double, clientePremium: Boolean) : Boolean {
    if (clientePremium) return true
    else if (valorCompra >= 30) return true

    return false
}
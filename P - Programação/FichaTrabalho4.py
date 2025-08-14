from datetime import datetime

def verificarInput(expected_type, message):
    print(message)
    while True:
        try:
            res = expected_type(input())
            return res
        except ValueError:
            print(message)

# 1. Escreva uma função que dado um número natural devolve o número com os seus dígitos invertidos.
def inverterNumero(num):
    string = str(num)
    
    return string[::-1]

while True:
    ex1Numero = verificarInput(int, '1) Introduza um nº natural: ')
    print(f'{ex1Numero} --- {inverterNumero(ex1Numero)}')
    break

# 2. Escreva uma função que dado o valor de um ângulo positivo x (em graus) devolve o valor aproximado do seu seno.
# sin(x) ≈ 4x(180 − x) / 40500 − x(180 − x)
def sin(ang):
    res = (4 * ang * (180 - ang)) / (40500 - ang * (180 - ang))
    return res

while True:
    ex2Angulo = verificarInput(int, '2) Introduza um ângulo: ')
    print(f'sin({ex2Angulo}) : {sin(ex2Angulo)}')
    break

# 3. Escreva uma função que dada uma data de nascimento na forma ‘dd/mm/aaaa’ devolve a frase ‘dd de MM de aaaa’.
# Exemplo: ‘17/02/2015’ -> ’17 de Fevereiro de 2015
# Nota: esta função deve ter uma função auxiliar que dado ‘mm’ devolve o respetivo mês.
ex3Meses = {
    "01": "Janeiro",
    "02": "Fevereiro",
    "03": "Março",
    "04": "Abril",
    "05": "Maio",
    "06": "Junho",
    "07": "Julho",
    "08": "Agosto",
    "09": "Setembro",
    "10": "Outubro",
    "11": "Novembro",
    "12": "Dezembro"
}

def validateDate(date):
    try:
        date = datetime.strptime(date, '%d/%m/%Y')
        print(f'{date.day} de {ex3Meses[str(date.month).zfill(2)]} de {date.year}')
        return True
    except Exception as e:
        print(f'Erro: {e}')
        return False

while True:
    ex3Data = verificarInput(str, '3) Introduza uma data com o formato dd/mm/aaaa: ')
    if validateDate(ex3Data): break

# 4. Escreva uma função que receba a massa (em quilos) e a altura (em metros) de um indivíduo, e calcule e devolva o IMC e a situação do indivíduo segundo a fórmula e a tabela.

# Resultado Situação
# < 17.00 Muito abaixo do peso
# [17.00..18.50[ Abaixo do peso
# [18.50..25.00[ Peso normal
# [25.00..30.00[ Acima do peso
# [30.00..35.00[ Obesidade I
# [35.00..40.00[ Obesidade II (severa)
# >= 40.00 Obesidade III (mórbida)
def IMC(peso, altura):
    res = peso / (altura * altura)
    return res

while True:
    ex4Peso = verificarInput(float, '4) Insira o peso (em quilos): ')
    ex4Altura = verificarInput(float, '4) Insira a altura (em metros): ')
    ex4IMC = IMC(ex4Peso, ex4Altura)
    ex4Situacao = ""

    if ex4IMC < 17.00: ex4Situacao = "Muito abaixo do peso"
    elif ex4IMC >= 17.00 and ex4IMC < 18.50: ex4Situacao = "Abaixo do peso"
    elif ex4IMC >= 18.50 and ex4IMC < 25.00: ex4Situacao = "Peso normal"
    elif ex4IMC >= 25.00 and ex4IMC < 30.00: ex4Situacao = "Acima do peso"
    elif ex4IMC >= 30.00 and ex4IMC < 35.00: ex4Situacao = "Obesidade I"
    elif ex4IMC >= 35.00 and ex4IMC < 40.00: ex4Situacao = "Obesidade II (severa)"
    else: ex4Situacao = "Obesidade III (mórbida)"

    print(f'Peso: {ex4Peso} kg / Altura: {ex4Altura} m / IMC: {ex4IMC} kg/m2 - {ex4Situacao}')
    break
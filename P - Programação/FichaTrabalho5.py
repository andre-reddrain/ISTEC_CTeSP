import random
import math

def verificarInput(expected_type, message):
    print(message)
    while True:
        try:
            res = expected_type(input())
            return res
        except ValueError:
            print(message)

# 1. Dado o número natural n, construa a lista por compreensão:
# a) com todos os números ímpares até n.
# b) com todos os n cubos dos números n.
# c) com todos os números até n que terminam em 4 ou em 7.
def checkEnd(num):
    num = str(num)
    lastNum = int(num[-1])

    if lastNum == 4 or lastNum == 7: return True
    return False

while True:
    ex1Numero = verificarInput(int, '1) Insira um nº natural: ')

    ex1ListaA = list(x for x in range(1, ex1Numero + 1) if x % 2 != 0)
    ex1ListaB = list(x * x * x for x in range(1, ex1Numero + 1))
    ex1ListaC = list(x for x in range(1, ex1Numero + 1) if checkEnd(x) == True)

    print(f'Lista A - Nºs impares - {ex1ListaA}')
    print(f'Lista B - N ao cubo - {ex1ListaB}')
    print(f'Lista C - Nº acabar em 4 e 7 - {ex1ListaC}')
    break

# 2. Dado o número de elementos, construa uma lista de números inteiros aleatórios entre 1 e 100
# (para gerar o número aleatório deve usar a função randint do módulo random).
# a) Obtenha o valor do maior e do menor elemento da lista.
# b) Obtenha a lista ordenada por ordem crescente.
# c) Obtenha a lista substituindo todos os valores múltiplos de 5 pelo valor 0.
# d) Obtenha a lista eliminando todos os valores cujos índices são múltiplos de 4. 
while True:
    ex2Limite = verificarInput(int, '2) Insira o nº de elementos pretendidos: ')
    ex2Lista = list(random.randint(1, 100) for _ in range(ex2Limite))

    # Criar cópias das Listas
    ex2ListaB = ex2Lista.copy()
    ex2ListaC = ex2Lista.copy()
    ex2ListaD = ex2Lista.copy()
    print(f'2) Lista - {ex2Lista}')

    print(f'2a) Valor maior: {max(ex2Lista)} / Valor menor: {min(ex2Lista)}')
    
    ex2ListaB.sort()
    print(f'2b) Lista ordenada (crescente): {ex2ListaB}')
    
    ex2ListaC = [0 if x % 5 == 0 else x for x in ex2ListaC]
    print(f'2c) Lista alterada: {ex2ListaC}')
    
    ex2ListaD = [x for x in ex2ListaD if x % 4 != 0]
    print(f'2d) Lista sem múltiplos de 4: {ex2ListaD}')
    break

# 3. Construa uma lista de números inteiros positivos até que o utilizador indique um número não
# positivo. No final apresente separadamente a soma dos números pares e a soma dos números
# ímpares.
ex3Lista = list()

while True:
    ex3Input = verificarInput(int, '3) Nº inteiro (concluir com um nº não positivo)')

    if (ex3Input < 0): break
    else: ex3Lista.append(ex3Input)

ex3ListaPar = [x for x in ex3Lista if x % 2 == 0]
ex3ListaImpar = [x for x in ex3Lista if x % 2 != 0]
print(f'3) Soma números pares:', sum(ex3ListaPar))
print(f'3) Soma números impares:', sum(ex3ListaImpar))

# 4. Construa uma lista de números inteiros positivos até que o utilizador indique um número
# inteiro que seja o dobro ou a metade do número anterior. No final apresente os seguintes
# resultados: a quantidade de números indicados; a soma e o produto dos números indicados;
# a quantidade de números indicados que são ímpares; os dois valores que forçaram a paragem
# da estrutura de controlo repetitiva.
ex4Lista = list()

while True:
    ex4Input = verificarInput(int, '4) Nº inteiro positivo (concluir com a metade ou o dobro do anterior)')

    if (ex4Input > 0):
        if not ex4Lista: ex4Lista.append(ex4Input)
        else:
            lastElement = ex4Lista[-1]
            ex4Lista.append(ex4Input)

            if (ex4Input == lastElement * 2 or ex4Input == lastElement / 2): break

print(f'4) Nºs indicados - {len(ex4Lista)}')
print(f'4) Soma - {sum(ex4Lista)}')

ex4Produto = 1
for val in ex4Lista:
    ex4Produto *= val

print(f'4) Produto - {ex4Produto}')

ex4ListaImpar = [x for x in ex4Lista if x % 2 != 0]
print(f'4) Nºs impares - {ex4ListaImpar}')

print(f'4) Valores que forçaram a paragem - {ex4Lista[-2]} / {ex4Lista[-1]}')

# 5. Construa uma lista de números reais formada pelo valor v e o respetivo peso p ([v p]) até
# que o utilizador indique o número 0.0. No final apresente o valor da média ponderada dos
# valores dados pelo utilizador (apresente o resultado arredondado à terceira casa decimal).
ex5Lista = list()

while True:
    ex5InputV = verificarInput(float, '5) Insira o valor de V (0 para cancelar): ')

    if (ex5InputV == 0): break
    ex5InputP = verificarInput(float, '5) Insira o valor de P: ')
    ex5Lista.append([ex5InputV, ex5InputP])

# Calcular média
somaN = 0
somaD = 0
if (len(ex5Lista) >= 1):
    for elem in ex5Lista:
        somaN += elem[0] * elem[1]
        somaD += elem[1]

    ex5Media = somaN / somaD
    print(f'5) Média - {ex5Media}')

# 6. Solicite ao utilizador uma lista de nomes de um conjunto de estudantes. Para cada um dos
# nomes, construa uma lista aleatória simulando as classificações obtidas nos três elementos
# da avaliação periódica (prova escrita 1, prova escrita 2 e trabalho laboratorial). Com as duas
# listas, construa a lista final com a situação académica de cada estudante: o nome, as
# classificações, a nota da parte teórica, a indicação se tem ou não a nota mínima, a nota da
# classificação final, o arredondamento da nota da classificação final e finalmente o status do
# estudante.
ex6Lista = list()

while True:
    ex6Input = verificarInput(str, '6) Nome de estudante (vazio para cancelar): ')

    if (ex6Input == ''): break

    ex6ListaClassificacoes = [random.randint(1, 20) for _ in range(3)]
    ex6NotaTeorica = (ex6ListaClassificacoes[0] + ex6ListaClassificacoes[1]) / 2
    ex6NotaMinima = ''

    if (ex6NotaTeorica < 9.5): ex6NotaMinima = 'Não tem nota mínima'
    else: ex6NotaMinima = 'Tem nota mínima'

    ex6NotaFinal = ((ex6NotaTeorica * 2) + ex6ListaClassificacoes[2]) / 3
    ex6NotaFinalArrendodada = math.ceil(ex6NotaFinal)

    ex6Status = 'Reprovado' if ex6NotaFinalArrendodada <= 9 else 'Passou'

    # Nome, Classificações, Nota teórica, Nota mínima, Nota final, Nota final (arrendondada), Status
    ex6Lista.append([ex6Input, ex6ListaClassificacoes, ex6NotaTeorica, ex6NotaMinima, ex6NotaFinal, ex6NotaFinalArrendodada, ex6Status])

for elem in ex6Lista:
    print(f'Nome: {elem[0]}')
    print(f'Classificações: {elem[1]}')
    print(f'Nota teórica: {elem[2]}')
    print(f'Nota mínima: {elem[3]}')
    print(f'Nota final: {elem[4]}')
    print(f'Nota final (arrendodada): {elem[5]}')
    print(f'Status: {elem[6]}')
    print('#########################')
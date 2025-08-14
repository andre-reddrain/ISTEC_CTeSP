import random

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

ex3ListaPar = [x for x in ]
print(f'3) Soma números pares: ')
print(f'3) Soma números impares: ')

# 4. Construa uma lista de números inteiros positivos até que o utilizador indique um número
# inteiro que seja o dobro ou a metade do número anterior. No final apresente os seguintes
# resultados: a quantidade de números indicados; a soma e o produto dos números indicados;
# a quantidade de números indicados que são ímpares; os dois valores que forçaram a paragem
# da estrutura de controlo repetitiva.

# 5. Construa uma lista de números reais formada pelo valor v e o respetivo peso p ([v p]) até
# que o utilizador indique o número 0.0. No final apresente o valor da média ponderada dos
# valores dados pelo utilizador (apresente o resultado arredondado à terceira casa decimal).

# 6. Solicite ao utilizador uma lista de nomes de um conjunto de estudantes. Para cada um dos
# nomes, construa uma lista aleatória simulando as classificações obtidas nos três elementos
# da avaliação periódica (prova escrita 1, prova escrita 2 e trabalho laboratorial). Com as duas
# listas, construa a lista final com a situação académica de cada estudante: o nome, as
# classificações, a nota da parte teórica, a indicação se tem ou não a nota mínima, a nota da
# classificação final, o arredondamento da nota da classificação final e finalmente o status do
# estudante.
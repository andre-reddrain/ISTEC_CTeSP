import re

def verificarInput(expected_type, message):
    print(message)
    while True:
        try:
            res = expected_type(input())
            return res
        except ValueError:
            print(message)

# 1. Dado um número natural, apresente ao utilizador a tabuada desse número.
def exercicio1():
    while True:
        ex1Numero = verificarInput(int, '1) Insira um número natural:')
        if ex1Numero >= 0:
            for i in range(1, 11):
                print(f'{ex1Numero} * {i} = {ex1Numero * i}')
            break

# 2. Dados dois números naturais, apresente ao utilizador todos os números que são números capicuas que existem entre eles.
def capicua(num):
    txt = str(num)
    rev = txt[::-1]

    if txt == rev:
        return True
    else:
        return False

def exercicio2():
    while True:
        ex2Numero = verificarInput(int, '2) Insira um número natural(1):')
        if (ex2Numero >= 0):
            break

    while True:
        ex2Numero2 = verificarInput(int, '2) Insira um número natural(2):')
        if (ex2Numero2 >= 0):
            break

    for i in range(ex2Numero,ex2Numero2 + 1):
        if (capicua(i)):
            print(f'O número {i} é capicua.')

# 3. Dada uma frase, apresente ao utilizar o número de vogais e o número de consoantes que ela tem.
def exercicio3():
    ex3Vogais = ['a', 'e', 'i', 'o', 'u']
    ex3Frase = verificarInput(str, '3) Insira uma frase:')
    ex3NumVogais = 0
    ex3NumConsoantes = 0

    for i in ex3Frase:
        if re.match(r'^[A-Za-z]+$', i):
            if i.lower() in ex3Vogais:
                ex3NumVogais += 1
            
            else:
                ex3NumConsoantes += 1

    print(f'Nº de Vogais: {ex3NumVogais} / Nº de Consoantes: {ex3NumConsoantes}')

# 4. Dado um número natural, apresente ao utilizador se ele é ou não um número primo.
def isPrimo(val):
    for i in range(2, val - 1):
        if val % i == 0:
            return False
    return True

def exercicio4():
    while True:
        ex4Numero = verificarInput(int, '4) Insira um número natural:')
        if (ex4Numero >= 0):
            break

    if isPrimo(ex4Numero):
        print(f'{ex4Numero} é primo.')
    else:
        print(f'{ex4Numero} não é primo.')

# 5. Enquanto o utilizador não digitar um ponto final ou um ponto de exclamação ou um ponto de interrogação, vá solicitando um caracter e no final apresente ao utilizador a frase composta
# por todos os caracteres digitados.
ex5Frase = ""

while True:
    ex5Char = verificarInput(str, '5) Introduza um caracter (para acabar, digite um: ".", "!", "?")')
    if len(ex5Char) == 1:
        match ex5Char:
            case "." | "!" | "?":
                ex5Frase += ex5Char
                break
                
            case _:
                ex5Frase += ex5Char
    else:
        print("Erro!")

print('5) Frase: ', end = "")

for i in ex5Frase:
    print(i, end = "")

# 6. Enquanto o utilizador desejar continuar, apresente um menu com as opções das codificações
# em python dos exercícios 1 a 4 e as respetivas execuções.
def printMenu():
    while True:
        print("\n##########")
        print("## Menu ##")
        print("##########")
        print("1 - Tabuada Nº Natural")
        print("2 - Nºs capicua de X a Y")
        print("3 - Nº Vogais/Consoantes numa frase")
        print("4 - Número Primo")
        print("0 - Sair")

        ex6Opcao = verificarInput(int, "Introduza a opção pretendida:")
        match ex6Opcao:
            case 1:
                exercicio1()
            case 2:
                exercicio2()
            case 3:
                exercicio3()
            case 4:
                exercicio4()
            case 0:
                break

printMenu()
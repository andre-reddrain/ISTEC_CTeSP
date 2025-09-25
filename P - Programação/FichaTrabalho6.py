def verificarInput(expected_type, message):
    print(message)
    while True:
        try:
            res = expected_type(input())
            return res
        except ValueError:
            print(message)

# 1. Escreve um programa em Python que peça ao utilizador para inserir um número inteiro
# positivo e faça uma contagem decrescente até zero, mostrando cada número no ecrã.
while True:
    ex1Input = verificarInput(int, '1) Insira um nº inteiro positivo: ')

    if (ex1Input >= 1): break
print('Começo da contagem decrescente')
for i in range (ex1Input, -1, -1):
    print(i)
print('Fim da contagem decrescente!')

# 2. Escreve uma função chamada classifica_nota que recebe uma nota validada (número entre 0 e 20)
# e retorna a classificação segundo a seguinte tabela:
# • Nota maior ou igual a 16: "Muito Bom"
# • Nota entre 14 (inclusive) e 16 (exclusivo): "Bom"
# • Nota entre 10 (inclusive) e 14 (exclusivo): "Suficiente"
# • Nota abaixo de 10: "Insuficiente"
# Depois, pede ao utilizador para inserir uma nota e imprime a classificação.
def classifica_nota(nota):
    if (nota >= 16): return 'Muito Bom'
    elif (nota >= 14 and nota < 16): return "Bom"
    elif (nota >= 10 and nota < 14): return "Suficiente"
    else: return "Insuficiente"

while True:
    ex2Input = verificarInput(float, '2) Insira uma nota (0-20): ')

    if (ex2Input >= 0 and ex2Input <= 20): break
print(classifica_nota(ex2Input))

# 3. Escreve duas funções:
# • valida_nota(nota) — que recebe um número e retorna True se estiver entre 0 e 20. Caso contrário, retorna False.
# • classifica_nota(nota) — que classifica a nota conforme o exercício 2.
# Depois, pede ao utilizador uma nota, e só imprime a classificação se a nota for válida; caso
# contrário, imprime uma mensagem de erro.
def valida_nota(nota):
    return (nota >= 0 and nota <= 20)

while True:
    ex3Input = verificarInput(float, '3) Insira uma nota (0-20): ')
    if (valida_nota(ex3Input)): break
    else: print("Nota inválida.")
print(classifica_nota(ex3Input))
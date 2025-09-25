import math

def verificarInput(expected_type, message):
    print(message)
    while True:
        try:
            res = expected_type(input())
            return res
        except ValueError:
            print(message)

# 1. Dado o número natural n, construa o tuplo por compreensão:
# a) com todos os n números múltiplos de 3.
# b) com todos os n pares da forma (n, n elevado 2).
# c) com todos os n ternos da forma (n, n elevado 3, n elevado 3 − n elevado 2).
# d) com todos os números até n que são múltiplos de 4 e de 6.
# e) com todos os números até n que são ímpares e que terminam em 5.
while True:
    ex1Input = verificarInput(int, '1) Insira um número natural: ')

    if (ex1Input >= 1): break
ex1A = tuple(3 * i for i in range(1, ex1Input + 1))
ex1B = tuple((i, i**2) for i in range(1, ex1Input + 1))
ex1C = tuple((i, i**3, i**3 - i**2) for i in range(1, ex1Input + 1))
ex1D = tuple(i for i in range(1, ex1Input + 1) if i % 4 == 0 and i % 6 == 0)
ex1E = tuple(i for i in range(1, ex1Input + 1) if i % 2 != 0 and str(i).endswith("5"))
print(f'1A): {ex1A}')
print(f'1B): {ex1B}')
print(f'1C): {ex1C}')
print(f'1D): {ex1D}')
print(f'1E): {ex1E}')

# 2. Dado o ano inicial e o ano final, construa o tuplo com todos os anos bissextos entre eles.
while True:
    ex2AnoInicial = verificarInput(int, '2) Indique o ano inicial: ')
    ex2AnoFinal = verificarInput(int, '2) Indique o ano final: ')
    break
ex2AnosBissextos = tuple(i for i in range(ex2AnoInicial, ex2AnoFinal + 1) if (i % 4 == 0 and i % 100 != 0) or (i % 400 == 0))
print(f'2) Anos bissextos entre {ex2AnoInicial} e {ex2AnoFinal}: {ex2AnosBissextos}')

# 3. Usando um tuplo, dado o número do mês, indique ao utilizador qual é esse mês e quantos dias tem.
def diaMes(mes):
    dias = 0
    match mes:
        case 1: return ('Janeiro', 31)
        case 2: return ('Fevereiro', 28)
        case 3: return ('Março', 31)
        case 4: return ('Abril', 30)
        case 5: return ('Maio', 31)
        case 6: return ('Junho', 30)
        case 7: return ('Julho', 31)
        case 8: return ('Agosto', 31)
        case 9: return ('Setembro', 30)
        case 10: return ('Outubro', 31)
        case 11: return ('Novembro', 30)
        case 12: return ('Dezembro', 31)

while True:
    ex3Input = verificarInput(int, '3) Insira o número do mês (1 - 12): ')
    if (ex3Input >= 1 and ex3Input <= 12): break
ex3Mes = diaMes(ex3Input)
ex3Res = tuple((ex3Mes[0], ex3Mes[1]))
print(ex3Res)

# 4. Construa um tuplo de palavras até que o utilizador indique o ponto final. Para cada uma das
# palavras do tuplo, indique a lista com a frequência com que aparece cada uma das vogais,
# frequência = (número de vezes que aparece /número total de vogais) × 100.
ex4Frase = list()
ex4Vogais = 'aeiou'
ex4TotalVogais = 0

while True:
    ex4Input = verificarInput(str, '4) Insira uma letra (concluir com .):')
    if (len(ex4Input) == 1):
        ex4Frase.append(ex4Input)
        if (ex4Input.lower() in ex4Vogais): ex4TotalVogais += 1
    if (ex4Input == '.'): break
ex4Tuplo = tuple(ex4Frase)

if (ex4TotalVogais == 0): print('Não tem vogais.')
else:
    for vogal in ex4Vogais:
        vogal = vogal.lower()
        frequencia = (sum(1 for char in ex4Tuplo if char.lower() == vogal) / ex4TotalVogais) * 100

        print(f'Vogal: {vogal.upper()} / Frequência: {frequencia}')

# 5. Construa o tuplo com a informação dos três lados de um triângulo até que o utilizador indique o tuplo nulo.
# Para cada triângulo, apresente a sua classificação quanto ao tipo de lados, o
# valor do seu perímetro e o valor da sua área.
ex5Triangulos = list()

while True:
    ex5Input = verificarInput(str, '5) Insira os 3 lados do triângulo (separar por ";"). Para concluir, insira todos os lados a 0:')
    if (ex5Input == "0;0;0"): break
    
    ex5Input = ex5Input.split(";")
    ex5Check = True

    if (len(ex5Input) == 3):
        for lado in ex5Input:
            try:
                lado = float(lado)
                if (lado <= 0):
                    ex5Check = False
                    break
            except:
                ex5Check = False
                break
        if ex5Check:
            # Todos os lados são válidos
            print("Todos os lados são válidos!")
            ex5Triangulos.append(tuple(ex5Input))
        else: print("Um ou mais lados são inválidos!")
    else: print("Erro! Um ou mais lados não foram inseridos.")

for triangulo in ex5Triangulos:
    a = float(triangulo[0])
    b = float(triangulo[1])
    c = float(triangulo[2])

    if a + b > c and a + c > b and b + c > a:
        # Perímetro
        perimetro = a + b + c

        # Área - É necessário calcular o semiperímetro (s)
        s = (a + b + c) / 2
        area = math.sqrt(s * (s - a) * (s - b) * (s - c))
        print(f"{triangulo} - Perímetro: {perimetro} / Área: {area}")
    else:
        print(f"{triangulo} é impossível.")

# 6. Em criptografia, a Cifra de César, também conhecida como cifra de troca, código de César
# ou troca de César, é uma das mais simples e conhecidas técnicas de criptografia. É um tipo
# de cifra de substituição na qual cada letra do texto é substituída por outra, um número fixo
# de vezes. Por exemplo, com uma troca de três posições, A seria substituído por D, B se
# tornaria E, e assim por diante.
# Pretendemos implementar a codificação e a descodificação de mensagens aplicando a Cifra
# de César. Comece por definir o tuplo formado pelas 26 letras minúsculas da tabela ASCII:
# ‘a’ – 97, ..., ‘z’ – 122. A codificação e a descodificação da letra x por uma troca fixa n é
# descrita matematicamente por,
# En(x) = (x + n) mod 26 
# e por
# Dn x) = (x − n) mod 26.

# 7. Construa o tuplo com a informação dos vários funcionários de uma empresa até que o
# utilizador escreva a palavra “fim”. Para cada funcionário há que pedir: nome, idade,
# ordenado, categoria (‘A’, ‘B’, ‘C’, ‘D’).
# a) Imprima o tuplo dos funcionários por ordem alfabética.
# b) Imprima o tuplo dos funcionários por ordem decrescente das idades e indique o número
# de funcionários que têm menos de 30 anos, o número de funcionários que têm entre 30 e
# menos de 45 anos, o número de funcionários que têm entre 45 menos de 55 anos e o
# número de funcionários que têm mais de 55 anos.
# c) Sabendo que o aumento salarial por cada uma das categorias é, respetivamente, 8 %,
# 7,5 %, 5 % e 3 %, e que além disso, a empresa vai distribuir dividendos pelos seus
# funcionários, incorporados mensalmente no seu ordenado, imprima o tuplo de
# funcionários por categoria e para cada funcionário apresente: o nome, o ordenado atual,
# o aumento salarial, o dividendo mensal e o ordenado final. Por cada categoria, o
# dividendo a distribuir é, respetivamente, 190 €, 225 €, 250 € e 300 €.
# No final, indique qual é o montante da massa salarial atual da empresa e qual é o aumento
# do montante da massa salarial futura.
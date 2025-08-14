def verificarInput(expected_type, message):
    print(message)
    while True:
        try:
            res = expected_type(input())
            return res
        except ValueError:
            print(message)

# 1. Dada a distância D (em metro) percorrida por um objeto em movimento retilíneo
# uniforme no tempo t (em segundo), determine e apresente o valor da sua velocidade v
# (em metro por segundo).
ex1Distancia = verificarInput(float, 'Insira a distância (metros):')
ex1Tempo = verificarInput(int, 'Insira o tempo (segundos):')
ex1Velocidade = ex1Distancia / ex1Tempo
print('1) Distancia(m): ', ex1Distancia, ' / Tempo(s) = ', ex1Tempo, ' / Velocidade(m por s): ', ex1Velocidade)

# 2. Dadas as passwords, userPass e savedPass, determine e apresente uma
# advertência ao utilizador no caso de elas não serem iguais.
ex2UserPass = verificarInput(str, 'Insira uma password (userPass):')
ex2SavedPass = verificarInput(str, 'Insira uma password (savedPass):')

print('2) UserPass: ', ex2UserPass, ' / SavedPass: ', ex2SavedPass)

if (ex2UserPass != ex2SavedPass):
    print('2) Userpass e SavedPass não são iguais.')
else:
    print('2) Userpass e SavedPass são iguais.')

# 3. Dado um ano do calendário gregoriano, determine e apresente se ele é ou não um ano
# bissexto.
ex3AnoCalendario = verificarInput(int, 'Insira um ano:')
if (ex3AnoCalendario % 4 == 0):
    print('3) ',ex3AnoCalendario, ' é bissexto.')
else:
    print('3) ',ex3AnoCalendario, ' não é bissexto.')

# 4. Dados o nome e a idade de dois indivíduos, determine e apresente qual é o indivíduo
# mais velho. Advirta o utilizador no caso de ambos os indivíduos tenham a mesma idade.
ex4Individuo1 = { 'nome': verificarInput(str, 'Insira um nome (Indivíduo 1):'), 'idade': verificarInput(int, 'Insira uma idade (Indivíduo 1):') }
ex4Individuo2 = { 'nome': verificarInput(str, 'Insira um nome (Indivíduo 2):'), 'idade': verificarInput(int, 'Insira uma idade (Indivíduo 2):') }

print('4) Indivíduo 1 - Nome: ', ex4Individuo1['nome'], ' / Idade: ', ex4Individuo1['idade'])
print('Indivíduo 2 - Nome: ', ex4Individuo2['nome'], ' / Idade: ', ex4Individuo2['idade'])
if (ex4Individuo1['idade'] == ex4Individuo2['idade']):
    print(ex4Individuo1['nome'], ' e ', ex4Individuo2['nome'], ' têm ambos a mesma idade: ', ex4Individuo1['idade'])
elif (ex4Individuo1['idade'] > ex4Individuo2['idade']):
    print(ex4Individuo1['nome'], ' é mais velho que ', ex4Individuo2['nome'])
else:
    print(ex4Individuo2['nome'], ' é mais velho que ', ex4Individuo1['nome'])

# 5. Dada a média final de um estudante de Programação, determine e apresente a
# respetiva classificação qualitativa (reprovado – suficiente – bom – muito bom –
# excelente).
ex5Media = verificarInput(float, 'Insira uma média:')
ex5Output = '5) ' + str(ex5Media) + ' - '
if (ex5Media <= 9):
    ex5Output += 'Reprovado'
elif (ex5Media > 9 and ex5Media <= 12):
    ex5Output += 'Suficiente'
elif (ex5Media > 12 and ex5Media <= 15):
    ex5Output += 'Bom'
elif (ex5Media > 15 and ex5Media <= 18):
    ex5Output += 'Muito Bom'
elif (ex5Media > 18):
    ex5Output += 'Excelente'

print(ex5Output)

# 6. Dados o género de um indivíduo (‘M’ – masculino, ‘F’ – feminino) e a sua altura,
# determine e apresente o seu peso ideal, usando as expressões,

# pM(h) = 72.7 ∗ h − 58.0 e pF

# (h) = 62.1 ∗ h − 44.7.
ex6Output = ''
ex6Genero = ''
ex6Altura = verificarInput(float, 'Insira uma altura (metros):')

while True:
    ex6Genero = verificarInput(str, 'Insira um género (M ou F):')
    if ex6Genero == 'M':
        ex6Output = 72.7 * ex6Altura - 58.0
        break
    elif ex6Genero == 'F':
        ex6Output = 62.1 * ex6Altura - 44.7
        break
print(f'6) Género: {ex6Genero} / Altura: {ex6Altura} / Peso Ideal: {ex6Output}')


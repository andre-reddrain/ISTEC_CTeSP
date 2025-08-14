import math

#region Exercício 1 - Expressões matemáticas
ex1a = 10 - 2 * 3
print('1a) 10 - 2 * 3 = ', ex1a)

ex1b = 5 + 2 - 1 * 6 - 4 / 2
print('1b) 5 + 2 - 1 * 6 - 4 / 2 = ', ex1b)

ex1c = 10 / 2 - 1 * 6
print('1c) 10 / 2 - 1 * 6 = ', ex1c)

ex1d = 10 / (2 - 1) * 6
print('1d) 10 / (2 - 1) * 6 = ', ex1d)

ex1e = 10 % 2 + 5 * 3 - 2
print('1e) 10 % 2 + 5 * 3 - 2 = ', ex1e)

ex1f = 5 - 4 ** 2 / 1 + 3
print('1f) 5 - 4 ** 2 / 1 + 3 = ', ex1f)

ex1g = 1 / 2 / 4.0
print('1g) 1 / 2 / 4.0 = ', ex1g)

ex1h = 1 / 2.0 / 4.0
print('1h) 1 / 2.0 / 4.0 = ', ex1h)

ex1i = 1 / 2.0 / 4
print('1i) 1 / 2.0 / 4 = ', ex1i)

ex1j = 1.0 / 2 / 4
print('1j) 1.0 / 2 / 4 = ', ex1j)

ex1k = 4 ** .5
print('1k) 4 ** .5 = ', ex1k)

ex1l = 4.0 ** (1 / 2)
print('1l) 4.0 ** (1 / 2) = ', ex1l)

ex1m = 4.0 ** (1 / 2) + 1 / 2
print('1m) 4.0 ** (1 / 2) + 1 / 2 = ', ex1m)

ex1n = 4.0 ** (1.0 / 2) + 1 / 2.0
print('1n) 4.0 ** (1.0 / 2) + 1 / 2.0 = ', ex1n)

ex1A = abs(4 - 20 / 3) ** 3
print('1A) abs(4 - 20 / 3) ** 3 = ', ex1A)

ex1B = divmod(12,3)
print('1B) divmod(12,3) = ', ex1B)

ex1C = divmod(-12,3)
print('1C) divmod(-12,3) = ', ex1C)

ex1D = divmod(7,4)
print('1D) divmod(7,4) = ', ex1D)

ex1E = pow(2,-2)
print('1E) pow(2,-2) = ', ex1E)

ex1F = pow(3,0)
print('1F) pow(3,0) = ', ex1F)

ex1G = pow(16,0.5)
print('1G) pow(16,0.5) = ', ex1G)

ex1H = abs(3 - pow(5,1.25))
print('1H) abs(3 - pow(5,1.25)) = ', ex1H)

ex1I = pow(4,8//2)
print('1I) pow(4,8//2) = ', ex1I)

#endregion

#region Exercício 2 - Números
ex2a = type(2)
print('2a) type(2) = ', ex2a)

ex2b = type(2.0)
print('2b) type(2.0) = ', ex2b)

ex2c = type(2 + 2)
print('2c) type(2 + 2) = ', ex2c)

ex2d = type(2 + 2.0)
print('2d) type(2 + 2.0) = ', ex2d)

ex2e = type(4 // 2)
print('2e) type(4 // 2) = ', ex2e)

ex2f = type(5 // 2)
print('2f) type(5 // 2) = ', ex2f)

ex2g = 5 // 2
print('2g) 5 // 2 = ', ex2g)

ex2h = -5 // 2
print('2h) -5 // 2 = ', ex2h)

ex2i = -3 ** 2
print('2i) -3 ** 2 = ', ex2i)

ex2j = (-3) ** 2
print('2j) (-3) ** 2 = ', ex2j)

ex2k = 2 ** 2 ** 3
print('2k) 2 ** 2 ** 3 = ', ex2k)

ex2l = (2 ** 2) ** 3
print('2l) (2 ** 2) ** 3 = ', ex2l)

#endregion

#region Exercício 3 - Operação de conversão de números
ex3a = int(5.6)
print('3a) int(5.6) = ', ex3a)

ex3b = int(-5.6)
print('3b) int(-5.6) = ', ex3b)

ex3c = int(9/5)
print('3c) int(9/5) = ', ex3c)

ex3d = float(-8)
print('3d) float(-8) = ', ex3d)

ex3e = float()
print('3e) float() = ', ex3e)

#endregion

#region Exercício 4 - Módulo math
ex4a = math.sqrt(9) ** round(2.6)
print('4a) sqrt(9) ** round(2.6) = ', ex4a)

ex4b = math.factorial(10)
print('4b) factorial(10) = ', ex4b)

ex4c = 1 / math.sqrt(2*math.pi)
print('4c) 1 / sqrt(2*pi) = ', ex4c)

ex4d = round(math.pi)
print('4d) round(pi) = ', ex4d)

ex4e = round(math.pi,4)
print('4e) round(pi,4) = ', ex4e)

ex4f = math.ceil(5.6) + math.floor(5.6)
print('4f) ceil(5.6) + floor(5.6) = ', ex4f)

ex4g = math.ceil(-5.6) + math.floor(-5.6)
print('4g) ceil(-5.6) + floor(-5.6) = ', ex4g)

#endregion

# Exercício 5 - Perímetro e Área de um triângulo
ex5raio = 4
ex5area = math.pi * (ex5raio^2)
ex5perimetro = 2 * math.pi * ex5raio
print('5) Raio: ', ex5raio, ' / Área = ', ex5area, ' / Perímetro: ', ex5perimetro)

# Exercício 6 - Horas, minutos e segundos
ex6horas = 17
ex6minutos = 53
ex6segundos = 23
ex6segundosTotal = (ex6horas * 60 * 60) + (ex6minutos * 60) + ex6segundos
print(ex6horas, 'h:', ex6minutos, 'm:', ex6segundos, 's -> Total de segundos: ', ex6segundosTotal)

# Exercício 7 - Média
# TODO 7. Dadas as classificações de todas as componentes da avaliação periódica da unidade curricular de Programação, determine e apresente a média final.
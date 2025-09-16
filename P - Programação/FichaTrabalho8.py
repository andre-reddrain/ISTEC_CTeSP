# 1. Construa o dicionário com pelo menos 4 elementos:
# a) formado pela sigla de um país europeu e o prefixo do número de telefone internacional.
# b) formado por uma operação aritmética e o substantivo que a define.
# c) formado pelo nome de uma fruta e a quantidade existente dessa fruta em stock.
# d) formado por um dígito e a sua designação escrita em três idiomas.
# e) formado por um número e o respetivo dia da semana.

# 2. Com um dos dicionários do exercício anterior:
# a) imprima todos os seus elementos.
# b) imprima apenas as suas chaves.
# c) insira um novo elemento no dicionário.
# d) elimine o segundo elemento do dicionário.
# e) altere o valor de um dos elementos usando a respetiva chave.

# 3. Dada uma frase, construa o dicionário que contém cada uma das letras da frase e o número
# de vezes que ela aparece.

# 4. Construa uma lista de datas (‘dd/mm/aaaa’) até que o utilizador indique a data vazia. No final
# escreva cada uma das datas em número romano

# 5. Construa um dicionário com vários produtos de uma pastelaria e o respetivo preço.
# Comece por apresentar ao utilizador a lista de produtos que tem disponível na pastelaria.
# Até que o utilizador indique a palavra “OK”, vá construindo a lista de produtos que ele deseja
# tomar, onde cada pedido é dado na forma (produto, quantidade).
# No final imprima o talão da despesa que o utilizador tem que pagar, onde cada produto é
# apresentado na forma quantidade − produto − preço e acrescente a taxa de 23 % de IVA.

# 6. Construa o dicionário com a informação de uma pessoa, onde a chave é o número do seu BI
# e o valor é o tuplo formado pelo nome, o género, a idade, a altura e o peso da pessoa. Para
# todos os elementos do dicionário construa um outro dicionário cuja chave continua a ser o
# número de BI da pessoa e o valor é o tuplo formado pelo nome, pelo índice de massa corporal
# (IMC), pela sua classificação e pelo índice de metabolismo basal m dado por,

# m(g, i, a, p) = {
# 66 − 6.8 ∗ i + 12.9 ∗ a + 6.3 ∗ p se g = M
# 655 − 4.7 ∗ i + 4.7 ∗ a + 4.3 ∗ p se g = F

# Observação: na Ficha 6 encontra a informação sobre o IMC.

# 7. Implemente o programa para gerir a base de dados de clientes de uma empresa. Cada um dos
# clientes da empresa é armazenado em um dicionário cuja chave é o seu NIF e o valor é um
# outro dicionário com os dados do cliente: nome, morada, telefone e email.
# Além disso, para cada cliente é ainda armazenado um outro dicionário com a lista de faturas
# que ele tem em pagamento e onde cada fatura apresenta o seu número e o seu valor.
# O programa deve perguntar ao utilizador por uma das opções do menu: 1 – Inserir cliente;
# 2 – Eliminar cliente; 3 – Listar cliente; 4 – Listar todos; 5 – Inserir fatura; 6 – Eliminar fatura;
# 7 – Sair, e implementar a respetiva funcionalidade.
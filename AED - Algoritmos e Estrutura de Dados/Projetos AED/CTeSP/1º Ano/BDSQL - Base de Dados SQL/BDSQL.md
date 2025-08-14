# Sistema de Informação (SI)
- Conjunto de componentes e processos que trabalham juntos para recolher, armazenar, processar, transmitir e apresentar informações de forma eficiente e eficaz.
- Objetivo principal: Fornecer informações precisas e atualizadas para apoiar as decisões e operações de uma organização.
- Hardware: Equipamentos físicos, dispositivos de armazenamento e dispositivos de rede.
- Software: Programas e sistemas operativos que executam as funções do SI.
- Base de Dados: Repositório de informações estruturadas ou não, organizadas que armazena e gere os dados do SI.
- Processos: Fluxos de trabalho e procedimentos que definem como od dados são recolhidos e processados.
- Pessoas: Ou utilizadores do SI que utilizam as informações fornecidas pelo SI para tomar decisões e executar "tarefas"

## Anatomia de um SI
- 3 Níveis
- Conceitos:
    - Host (Servidor)
    - Endpoint (Ponto de Rede)
    - Client/Server (Cliente / Servidor)
    - Linguagem programação (Java, Python)
    - Linguagem de marcação (HTML, Markdown)

# Diagramas de Entidade-Relacionamento (DER / ERD)
- Representações gráficas utilizadas para modelar e descrever a estrutura de uma base de dados relacional.
- Ferramenta importante para a análise, projeto e implementação de base de dados
- DER é composto por 3 elementos principais:
    - Entidades: Representam as tabelas da base de dados
    - Atributos: Representam as colunas das tabelas, que contêm os dados armazenados
    - Relacionamentos: Representam as relações entre as entidades
- Versões
    - Notação Crow's Foot
- Aplicações: Lucidchart, Creately, DBDiagram, ERDPlus, DrawSQL, QuickDBD, ER Draw Max, Draw.io

# Tipos de dados
- Primitivos: int, float, char, bool...
- Compostos: Arrays, Structures...
- Classes
- Unions { int i, float f }
- Enums { RED, GREEN, BLUE }
- Specialized: Datetime, time...

- Precisão: Cada tipo de dados tem as suas próprias espeficicações de precisão, o que significa que cada tipo de dados tem o seu próprio conjunto de regras para armazenamento e processamento de dados.
- Tamanho: Cada tipo de dados tem o seu próprio tamanho, o que significa que cada tipo de dados ocupa um espaço específico na memória.
- Armazenamento: Cada tipo de dados tem as suas próprias especificações de armazenamento, o que significa que cada tipo de dados é armazenado de uma forma específica.
- Formato: Cada tipo de dados tem o seu próprio formato, o que significa que cada tipo de dados é representado de uma forma específica.
- Operações: Cada tipo de dados tem as suas próprias operações permitidas, o que significa que cada tipo de dados pode ser usado para realizar operações específicas.

## Tipos de Dados (SQL Genérico)
- Numéricos
    - TINYINT / SMALLINT / MEDIUMINT / INT / BIGINT / FLOAT / DOUBLE / DECIMAL
- Texto
    - CHAR / VARCHAR / ENUM / SET
- Data e Hora
    - DATE / TIME / DATETIME / TIMESTAMP
- Binário
    - BINARY/VARBINARY/BLOB
- GeoEspacial
    - POINT / LINESTRING / POLYGON
- Outros
    - JSON / XML

# Chaves
- Chaves Primárias (PK) - Chave única que identifica uma linha numa tabela. É usada para distinguir uma linha da outra e é a chave que é usada para relacionar as tabelas.
- Chaves Estrangeiras (FK) - Chave que se refere à chave primária de outra tabela. É usada para estabelecer uma relação entre as tabelas.
- Tipos de chaves
    - Simples - Refere-se a uma coluna única numa tabela.
    - Compostas Refere-se a mais de uma coluna numa tabela.

## Necessidade das Chaves
1 - Integridade dos Dados - As chaves ajudam a garantir que os dados sejam consistentes e não contenham erros. A PK é usada para que não seja duplicada.
2 - Relacionamento entre tabelas - As FK permitem que as tabelas sejam relacionadas entre si. Facilita a realização de consultas complexas.
3 - Garantia de consistência - As chaves ajudam a garantir que os dados sejam consistentes e não contenham erros. Requisito para a confiabilidade dos dados.

# SQL
- SQL - Structured Query Language
- DDL - Data Definition Language - Define a estrutura da base de dados
    - CREATE TABLE - Cria uma nova tabela
    - ALTER TABLE - Modifica uma tabela existente
    - DROP TABLE - Remove uma tabela
- DML - Data Manipulation Language - Permite inserir, atualizar e excluir dados em tabelas
    - INSERT INTO - Insere novas linhas numa tabela
    - UPDATE - Modifica os valores em linhas existentes
    - DELETE FROM - Remove linhas de uma tabela
- DQL - Data Query Language - Permite consultar e recuperar dados de uma ou mais tabelas
    - SELECT - Extrai dados de uma ou mais tabelas
    - WHERE - Filtra os resultados de uma consulta
    - JOIN - Combina dados de duas ou mais tabelas
    - GROUP BY - Agrupa resultados de uma consulta
    - HAVING - Filtra os grupos criados com GROUP BY
- DCT - Data Control Language
- DTL - Data Transaction Language

## CRUD
- C - **Create**
- R - **Read**
- U - **Update**
- D - **Delete**

## Normas formais
- A normalização de tabelas em SQL é um processo fundamental para organizar dados de forma **eficiente** e **evitar** redundâncias e inconsistências.
- Garantir que as BDs sejam mais robustas, flexíveis e fácil de serem mantidas.
- Vantagens:
    - **Redução de redundância** - Evita a duplicação de dados, economiza espaço de armazenamento e facilitando a manutenção.
    - **Integridade dos dados** - Garante a consistência e a precisão dos dados.
    - **Flexibilidade** - Facilita a adição, remoção e modificação de dados, tornando a BD mais adaptável a mudanças.
    - **Melhoria no desempenho** - Queries SQL tendem a ser mais eficientes.

### 1ª Forma Normal (1NF)
- **Atomacidade** - Cada linha da tabela deve conter apenas um valor atômico e indivisível.
- **Chave Primária** - A tabela deve ter uma chave primária que identifique de forma única cada linha.
- **Não-repetição de grupos** - Não podem existir grupos de campos repetidos na mesma linha.

### 2ª Forma Normal (2NF)
- **Dependência total da chave primária** - Todos os atributos não-chave devem depender da chave primária inteira e não apenas de parte dela.

### 3ª Forma Normal (3NF)
- **Ausência de dependências transitivas** - Nenhum atributo não-chave deve depender de outro atributo não-chave.

### BCNF
- BC( Nome Autores )NF
- É uma melhoria da 3NF
- Uma tabela está em BCNF se, e somente se, para toda **dependência funcional X -> Y**, X for uma **superchave** da tabela.
- Superchave: Um conjunto de atributos que identifica de forma única uma linha de uma tabela.
    - Toda chave primária é uma superchave, mas nem todas as superchaves são chaves primárias.

# Comandos SQL
- /* Comentários são assim */
- **EXPLAIN** query - Mostra uma descrição de como a query é corrida

## Tabelas - Operações Campos
- **CREATE TABLE** tabela (atr1, atr2...) - Criar tabela
- **ALTER TABLE tabela MODIFY COLUMN col1** - Modifica a tabela  
- **DESCRIBE tabela** - Ver estrutura de uma tabela
- **SHOW tables** - Listar tabelas

## Tabelas - Operações Registos
- **INSERT INTO tabela (atr1, atr2...) VALUES (val1, val2...)** - Inserir registos na tabela

### Selects
- **SELECT** val1, val2 **FROM** tabela - Recolhe registos da base de dados
- **SELECT * AS** __ - Renomeia o output
- **SELECT count(\*)** - Faz uma count ao resultado.
- **SELECT ... ORDER BY** - Ordenar ascendente / descendente
- **SELECT ... GROUP BY** __ - Agrupa por X
- **SELECT ... LIMIT 3** - Limita o nº de registos da consulta

#### Joins
- **INNER JOIN** 
    - Só as linhas que possuem valores correspondentes em ambas as tabelas
- **LEFT OUTER JOIN**
    - As linhas da tabela da esquerda e as linhas correspondentes da tabela da direita
    - Se não houver correspondência na tabela da direita, os valores serão null
    ```sql
    SELECT Nome
    FROM Utilizadores
    LEFT OUTER JOIN Encomendas
    ON Utilizadores.ID = Encomendas.ID 
    ```
    ![](https://www.w3schools.com/sql/img_left_join.png "Left Outer Join")
- **RIGHT OUTER JOIN**
    - Oposto do LEFT OUTER JOIN
    - Retorna todas as linhas da tabela da direita e as linhas correspondentes da tabela da esquerda
    - Para encontrar todos os registos da tabela da direita, mesmo que não existam registos correspondentes na tabela da esquerda
- **FULL OUTER JOIN**
    - Combina os resultados do LEFT e RIGHT OUTER JOIN
    - Retorna todas as linhas de ambas as tabelas, independentemente de haver correspondência entre elas
    - Quando precisamos de todos os dados de ambas as tabelas, mesmo que não haja correspondência
- **CROSS JOIN**
    - Combina cada linha de uma tabela com cada linha da outra tabela, criando todas as combinações possíveis. CUIDADO!
    

## Tabelas - indices
- **CREATE INDEX** idx **ON** tabela - Cria um indice na tabela


## Left Join

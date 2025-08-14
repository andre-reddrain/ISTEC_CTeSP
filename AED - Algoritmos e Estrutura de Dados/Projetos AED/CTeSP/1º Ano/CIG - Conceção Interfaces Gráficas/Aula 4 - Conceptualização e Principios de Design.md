# Conceitos e Princípios
- Design físico foca-se no aspeto
- Design conceptual foca-se na compreensão

## Modelo Conceptual
- Um **modelo conceptual** é uma descrição de **alto nível** de como um sistema está organizado e funciona
- Descreve apenas o que os utilizadores **podem fazer** com o sistema e que conceitos **precisam de perceber** para usar o sistema
- Modelo conceptual não é:
    - A **interface** utilizador
    - O **modelo mental** do utilizador
    - Um ou mais **cenários de atividade**
    - A **arquitetura** do sistema
- As principais **metáforas** e **analogias** que são usadas
- Os **conceitos** que o sistema expõe aos utilizadores
- As **relações** entre os vários conceitos
- Os **mapeamentos** entre os conceitos do modelo
- Exemplo de um modelo conceptual:
    - **Metáfora**: Álbum de fotos - O nosso sistema vai ser como um álbum de fotografias tradicional (em papel) onde os utilizadores poderão colocar e retirar fotografias, adicionar comentários, organizar as fotografias por eventos, etc...
    - **Objetos**:
        - Fotografias (atributos: Data, Legenda)
        - Conjunto de fotografias (atributos: Titulo)
        - Evento (atributos: Local, Data)
        - Pessoa (atributos: Local, Data)
        - Arquivo (atributos: Nome, Partilhado)
        - Utilizador (atributos: Nome)
    - **Ações**:
        - Inserir/selecionar/retirar fotografia
        - Criar/editar/remover legenda
        - Criar/editar/remover evento
        - Criar/editar/remover/partilhar arquivo
    - **Relações entre conceitos**:
        - Um arquivo tem fotografias
        - Um conjunto de fotografias tem várias fotografias
        - Um evento tem fotografias
        - Um utilizador pode aceder a um arquivo partilhado
        - Uma fotografia pode ter pessoas
        - Uma pessoa pode estar em várias fotografias
    - **Mapeamento**:
        - Uma fotografia no nosso sistema é uma fotografia real
        - Uma legenda no sistema é um comentário escrito
        - Um arquivo no sistema é um arquivo físico

## Metáforas
- Uma metáfora é uma **função do mapeamento** que projeta conceitos ou atributos bem conhecidos de um domínio de origem num domínio de destino
- Escolha de metáforas:
    1. Definição funcional (**funcionamento**)
    2. Identificação dos problemas dos utilizadores (**coisas novas**)
    3. Geração de metáforas (**implícitas**)
- Avaliar metáforas
    1. Fornece uma estrutura?
    2. Que partes são relevantes para o problema?
    3. É facil de representar?
    4. Irão os utilizadores percebê-la?
    5. É extensível?

## Conceitos
- Os conceitos são **objetos** do domínio da tarefa, **atributos** dos objetos e **operações** sobre os objetos
- Se um conceito não está no modelo conceptual, então o sistema **não deve** exigir ao utilizador que esteja a par dele.
- **Relações entre conceitos** - As relações entre conceitos pretendem mostrar como é que cada **conceito** do modelo conceptual se **relaciona** com os outros **conceitos**.
- **Mapeamento entre conceitos** - Ao criarmos o modelo conceptual procuramos utilizar **conceitos** que têm uma **relação direta** com os conceitos que o utilizador usa no seu **dia a dia** ao realizar tarefas.

## Cenários de atividade
- Os cenários, em geral, são **histórias** de pessoas e das suas **atividades**, que incluem um **contexo**, um ou mais **atores** (utilizadores), um **objetivo** orientador e um enredo com **ações** e acontecimentos que perfazem uma ou mais **tarefas**.
- *Ex:* O João acabou de chegar das suas férias nas Caraíbas, onde teve com os seus amigos. Chegando a casa, o João tirou a sua nova máquina digital do saco e foi passar as fotografias para o BiblioPhoto, o seu programa para organizar e partilhar **fotografias**. Depois de se **autenticar** no sistema, o João **transferiu** as 1047 fotografias da máquina para o sistema. **Inseridas** as fotos na aplicação, o João começa a organizá-las, dividindo-as pelos vários dias das férias. Para isso, procura **fotografias** com a mesma data e **seleciona-as**. **Cria** um **arquivo**, cujo **nome** é data, e move as **fotografias** selecionadas para dentro deste.
    - Resposta às perguntas:
        1. Quem é o utilizador?
        2. Porque é que o utilizador está a usar a aplicação?
        3. Que objetivos tem?
        4. Como é realizada?

## Modelos Mentais
- Este modelo de funcionamento do sistema, construído gradualmente pelo utilizador chama-se modelo mental.
- O modelo mental ajuda o utilizador a definir expectativas, tornando os sistemas previsíveis e compreensíveis.

## Princípios de Design de Norman
1. Visibilidade
2. Retorno
3. Restrições
4. Coerência
5. Mapeamento
6. Evidência

## Regras de Ouro de Shneiderman
1. Manter a Coerência
2. Oferecer Usabilidade Universal
3. Fornecer Retorno Informativo
4. Desenhar diálogos que indiquem o fecho
5. Evitar Erros
6. Permitir a Reversão de Ações
7. Fornecer controlo e iniciativa ao utilizador
8. Reduzir carga na memória de curta duração

## Heurísticas de Nilsen
1. Tornar o estado do sistema visível
2. Correspondência: Sistema e o mundo real
3. Utilizador controla e exerce livre-arbítrio
4. Coerência e adesão a normas
5. Evitar erros
6. Reconhecimento em vez de lembrança
7. Flexibilidade e eficiência
8. Desenho estético e minimalista
9. Ajudar o Utilizador
10. Dar ajudar e documentação

**Resumo**
- O **modelo conceptual** é critico para a interface.
- As **metáforas** ajudam a perceber a interface.
- Os **cenários de atividade** descrevem tarefas.
- O **modelo mental** é o nosso objetivo final.
- As **heurísticas** guiam para o bom design.
- As heurísticas de Nilsen são as mais **abrangentes**.
- **Visibilidade**, **retorno**, **coerência** e **prevenção**.
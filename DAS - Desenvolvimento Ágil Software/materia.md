# Desenvolvimento Ágil de Software
O **desenvolvimento ágil de software** surgiu como uma resposta às limitações dos métodos tradicionais, que têm dificuldades em lidar com mudanças rápidas, cumprir prazos e optimizar recursos de forma eficaz.
Com foco na **flexibilidade e na colaboração**, essa abordagem transforma a produção de software num **processo mais dinâmico**, centrado nas **necessidades dos usuários**, por meio de **entregas frequentes, ajustes constantes** e maior eficiência.
Ao adotar os princípios da agilidade, as organizações **modernizam as suas práticas**, promovem uma cultura de **adaptação contínua** e **fortalecem a colaboração** entre as equipas.

## Principais características
- **Entrega frequente e incremental** de funcionalidades.
- **Colaboração próxima** entre developers, clientes e outros stakeholders.
- **Adaptabilidade a mudanças** mesmo em fases avançadas do projeto.
- Foco em **software funcional** ao invés de documentação extensa.
- Equipas **auto-organizadas** e comunicação constante.

## Principais metodologias ágeis
- **Scrum**
- **Kanban**
- **Extreme Programming (XP)**

## Tradicional vs Ágil
### Tradicional
- **As funcionalidade são definidas desde o inicio e não mudam**
- O projeto é planeado para entregar **tudo o que foi especificado**, o que exige controlar o prazo e o custo - mesmo que isso **comprometa a qualidade**
- A abordagem tradicional tenta eliminar riscos por meio de **planeamento detalhado e previsibilidade**

### Ágil
- O cliente e a equipa decidem juntos o que cabe **dentro de um prazo e orçamento fixos**
- O que é entregue pode mudar conforme as **prioridades e aprendizados do projeto**
- A **qualidade é preservada**, porque o foco está em entregar valor continuamente e com excelência, mesmo que nem todas as funcionalidades inicialmente desejadas sejam entregues

| Aspeto | Tradicional | Ágil |
| ------ | ----------- | ---- |
| **Planeamento** | Extensivo e antecipado | Iterativo e adaptativo |
| **Flexibilidade** | Baixa (mudanças são más) | Alta (mudanças são bem-vindas) |
| **Qualidade** | Pode ser sacrificada | É prioridade constante |
| **Entregas** | No final do projeto | Frequentes e incrementais |

## DevOps
**DevOps** é uma cultura e um conjunto de práticas que integram as equipas de **desenvolvimento (Dev)** e **operações (Ops)**, com o objetivo de:
- Automatizar e integrar os processos de desenvolvimento e entrega de software
- Reduzir o tempo entre o desenvolvimento de uma funcionalidade e a sua release
- Garantir mais **qualidade, velocidade e confiabilidade** nas entregas

![image](Imagens/devops.png)

## Visão de Governança de TI e Desenvolvimento de Software

| Nível | Model | Função |
| ----- | ----- | ------ |
| **Estratégico** | **EAP** - Enterprise Architecture Planning | **Planeamento estratégico** da arquitetura corporativa de TI (processos, dados, aplicações, tecnologia) |
| **Táctico** | **ALM/ADLM** - Application (Development) Lifecycle Management | Gestão do **Ciclo de Vida das Aplicações** <br>ADLM amplia o ALM ao incluir práticas ágeis, automação, integração contínua e colaboração DevOps, alinhando-se à estratégia |
| **Operacional** |**SDLC** - Software Development Life Cycle | Processo de desenvolvimento de Software (com fases como planeamento, análise, design, construção, testes, entrega e manutenção) |
| **Técnico/Ágil** | **ADML/AML** - Modelagens e Execução | Modelagem Ágil de Dados (ADML) e Sistemas (AML) (Ferramentas/metodologias específicas que suportam o SDL e ALM/ADLM) |
| **Técnico/Ágil** | **DevOps** - Modelagens e Execução | Práticas de entrega, automação, integração, deploy e operação contínua

### SDLC - Software Development Life Cycle
- O conceito de **SDLC existe há anos** e surge devido á crescente complexidade da gestão de projetos de desenvolvimento de software e à natureza inerente das entregas de software - que precisam de ser continuamente alteradas e atualizadas
- SDLC foi projetado para **controlar projetos de desenvolvimento** e adicionar **previsibilidade**, com o objetivo de entregar maior valor.
- Concebido para seguir uma abordagem mais **estruturada** e **incremental** - model em cascata/ modelo V

### ADLM - Application Development and Lifecycle Management
- Define especificamente como a gestão da parte do "desenvolvimento" da vida de um aplicativo e no qual elementos-chave são incluídos, como:
    - Definição e gestão de requisitos de software
    - Gestão de configuração e mudança de software
    - Planeamento de projetos de software com foco no planeamento ágil
    - Gestão de itens de trabalho
    - Gestão de qualidade
    - Gestão de defeitos
- Metodologias ágeis como o Scrum ou Kanban são frameworks de implementação do SDLC, e o ADLM é a gestão do ciclo de vida do software quando as metodologias ágeis são implementadas
- Com o ADLM, as metodologias ágeis têm precedência e, como resultado, atividades como gestão de configuração e mudanças de software e gestão de defeitos desempenharem um papel mais vital no desenvolvimento de software. O método ágil dá maior ênfase à capacidade não apenas de gerenciar mudanças de software, mas também adotá-las.

### EAP (EAPT) - Enterprise Agile Planning (Tools)
- Expande o conceito de ADLM, que vai do uso do Agile no nível de equipa/projeto para a implementação da filosofia Agile em escala, a fim de alcançar o desenvolvimento Agile de nível empresarial com o objetivo de gerar maior valor para toda a empresa e não apenas para a equipa.
- Auxilia na gestão do ciclo de vida do desenvolvimento quando metodologias como Agile e outras são implementadas para gerenciar o desenvolvimento de software ágil em escala empresarial, utilizando recursos-chave como:
    - Gestão de Portfólio de Projetos
    - Integração com Service Desk
    - Planeamento Ágil (classe corporativa)
    - Gestão de Backlog Ágil
    - Gestão de Lançamentos
- EAP é a gestão do ciclo de vida do desenvolvimento, quando metodologias ágeis em escala são implementadas numa organização

### DevOps
- DevOps visa preencher a lacuna entre a criação, a implementação e o uso do software.
- Atividades como integração e implementação contínua (CI/CD) e gestão de lançamentos são consideradas parte de DevOps.
- A ideia por trás de DevOps é entregar valor. DevOps coloca o valor do esforço de desenvolvimento nas mãos daqueles que podem fazer o melhor uso dele, em vez de optimizar inerentemente o processo de desenvolvimento. DevOps é agnóstico em relação à metodologia de desenvolvimento utilizada.

### ALM - Application Development and Lifecycle Management
- ALM abrange tudo, desde o nascimento ou concepção de uma aplicação até ao fim da sua vida.
- SDLC, ADLM, EAP e DevOps são todos parte e subconjunto do ALM, onde SDLC, ADLM e EAP concentram-se na gestão do lado do desenvolvimento, enquanto o DevOps concentra-se na gestão da segunda metade do ciclo de vida: lançamento, monitoramento e manutenção.
- ALM concentra-se mais em colaboração multifuncional, rastreabilidade e conformidade do ciclo de vida, reutilização avançada de ativos e gestão de variantes, riscos e segurança de aplicações.

### Etapas no ciclo de vida de uma aplicação
As etapas no ciclo de vida de uma aplicação são:
1. Especificação de requisitos
    - Envolve reunir e documentar os requisitos para o aplicativo. Inclui identificar as necessidades dos clientes finais, tal como identificar quaisquer requisitos funcionais e não funcionais.
2. Desenvolvimento
    - A aplicação é construída de acordo com as especificações do projeto. Inclui codificação, teste e depuração.
3. Testes
    - Após o desenvolvimento da aplicação, esta passa por testes rigorosos. Serve para garantir que esta atenda aos requisitos estabelecidos e funcione conforme esperado.
4. Implementação
    - Depois de testar e aprovar a aplicação, esta é implementada no ambiente de produção.
5. Manutenção
    - Envolve suporte e atualizações contínuas para garantir que a aplicação continua a responder às necessidades dos clientes finais.

## VCS (Version Control System)
**Sistemas de controlo de versão** têm como finalidade gerenciar versões de um documento/artefato.

**Tipos de VCS**:
1. VCS Locais
    - Ex: Computador com várias versões do documento
2. VCS Centralizados
    - Um **servidor central** e diversas áreas de trabalho, baseados na **arquitetura cliente-servidor**.
    - Atende muito bem a maioria das equipas de desenvolvimento de pequeno e médio porte, e que trabalhem numa rede local.
3. VCS Distribuídos
    - Cada área de trabalho tem o seu **próprio "servidor"**, ou seja, as operações de check-in e check-out são feitas na própria máquina.
    - As áreas de trabalho podem comunicar-se entre si.
    - Recomendados para equipas com muitos desenvolvedores e que se encontram em locais diferentes.

### Git - Sistema de controle de versão
- Trabalha com snapshots dos ficheiros no projeto.
- Tudo é verificado com CHECK-SUM com SHA-1.
- Quase todas as operações no Git são locais. Pode-se trabalhar offline sem problemas.

O Git tem 4 estados principais em que os ficheiros podem estar:
1. **Untracked** - Normalmente ficheiros novos, que o git ainda não os tocou.
1. **Commited** - Os dados estão armazenados de forma segura localmente.
2. **Modified** - O ficheiro foi alterado, mas não se fez o **commit** localmente.
3. **Staged** - A vesão atual de um ficheiro modificado vai fazer parte do próximo commit.

![image](Imagens/git_file_lifecicle.png)

#### Git Flow

**Git flow** é um modelo de fluxo de trabalho para o Git, não uma funcionalidade em si.
É uma estratégia para gerenciar branches de forma organizada, com o objetivo de facilitar o desenvolvimento colaborativo e lançamentos frequentes de software.
Define um conjunto de branches com papéis específicos e um fluxo de trabalho para gerenciar o desenvolvimento, lançamentos e manutenção de um projeto.

- **main / master** - Código da versão de produção. Versões estáveis.
- **hotfix** - Correções rápidas em produção, criadas a partir de main e merged de volta para a main e develop.
- **release** - Para preparar um lançamento, com correções e testes finais. Merged de volta para a main e develop.
- **develop** - Base para as novas funcionalidades, onde as alterações são integradas antes de irem para a main.
- **feature** - Desenvolvimento de novas funcionalidades, criadas a partir do develop e merged de volta após a conclusão.

![image](Imagens/git_flow.png)

#### GitHub Flow

**GitHub Flow** é uma alternativa mais simples ao GitFlow, ideal para equipas pequenas, pois não precisam de gerenciar várias versões.
Este modelo não tem ramificações de versão. Começa na main, os devs criam branches, que são depois merged de volta à main. A ramificação de recursos é excluída.
A ideia principal é manter o código mestre num estado constante de implantação e, portanto, pode suportar processos contínuos de integração e entrega.

**Passos do GitHub Flow**:
1. **Branch Principal (main)** - Representa a **versão estável** do código e é a **base** para todas as **novas funcionalidades**.
2. **Branches de Funcionalidade** - Para cada nova funcionalidade ou correção, cria-se um novo branch a partir do branch principal.
3. **Desenvolvimento e Commits** - O trabalho é realizado e registado em commits claros e descritivos na branch da funcionalidade.
4. **Pull Requests** - Após concluir o desenvolvimento ou correção, um pull request é aberto para **solicitar revisão** e **discussão**.
5. **Revisão e Merge** - Outros membros da equipa **revisam as mudanças** e, **se aprovadas**, a branch da funcionalidade é **merged** na branch principal.
6. **Implementação** - A branch principal (main) é então **implementada em produção**, garantindo que as últimas alterações aprovadas estejam disponíveis.

(TODO Imagem Slide 237)

#### GitLab Flow

# Slide 238

#### Ramificação do Git - Branches

(TODO Adicionar uma imagem de branches - ver slides 191 - X)

- **Branch** é o nome dado a uma versão (ramificação) do projeto.
- Possibilita gerenciar múltiplas alterações acontecendo simultaneamente.
- Branch é um ponteiro móvel que leva a um commit.
- Git não armazena dados como uma série de mudanças ou diferenças, mas sim como uma série de snapshots.
- O branch **'master'** não é um branch especial. É igual a qualquer outro branch. A única razão pela qual quase todos os repositórios têm um é porque o comando **git init** cria-o por padrão.
- O Git sabe em que branch nós estamos atualmente através de um ponteiro especial chamado **HEAD**.

##### Merge
- Junta os commits de um branch noutro.
- **Fast-forward** é um tipo especial de merge que **não cria um novo commit de merge**. Ele simplesmente "avança" o ponteiro da branch atual para o commit da outra branch, caso a branch atual esteja "atrás" e não tenha commits divergentes.

    **Pros**:
    - Operação não destrutiva
    
    **Contra**:
    - Commit extra
    - Histórico poluído
 
(TODO Imagem Slide 215 - Remover a parte direita com a mensagem)
 
##### Rebase
- Replica os commits de um branch para o atual.
- "Reescreve" o histórico de commits.
- Pode causar problemas em branches públicas ou partilhadas!
- Opção [-i] permite a alteração dos commits do rebase:
    - pick (p) - Usa o commit tal como está.
    - reword (r) - Permite alterar a mensagem.
    - edit (e) - Permite fazer alterações nesse commit.
    - squash (s) - Junta o commit com o commit anterior.
    - fixup (f) - Semelhante ao squash, mas descarta a mensagem do commit.
    - drop (d) - Remove o commit.
 
(TODO Adicionar uma imagem que explique bem o rebase)

##### Conflitos

Conflitos acontecem quando mais que uma pessoa alterou o **mesmo** pedaço de um ficheiro em **branches diferentes**.
Ao tentar fazer um merge com git merge, o git interrompe o processo e mostra uma mensagem. O ficheiro fica assim após o conflito:
```
<<<<<<< HEAD
linha da branch main
=======
linha da branch feature
>>>>>>>
```

Para resolver, edita-se o ficheiro **manualmente**, escolhendo qual versão manter (ou juntar as 2), e depois remover-se os marcadores.

#### Comandos GIT

- **git init** - Inicializa um repositório git
- **git status** - Visualizar o estado dos ficheiros do repositório
- **git config** - Configurar o git
- **git add** - Adiciona ficheiros ao repositório
- **git commit -m "Fix"** - Confirma as alterações no repositório
- **git log** - Mostra todos os commits do repositório
- **git show** - Mostra o último commit, em detalhe
- **git diff** - Mostra as modificações dos ficheiros
- **git checkout "filename"** - Reverter as alterações feitas num ficheiro
- **git reset HEAD "filename"** - Retira o ficheiro da área de staged para o ponto anterior
- **git reset --hard "hash"** - Retorna tudo como estava antes do commit
- **git blame "ficheiro"** - Exibe quem modificou cada linha de um ficheiro, incluindo data e commit

##### Branches

- **git branch -a** - Exibe os branches existentes (inclusive remotos).
- **git branch "nome"** - Cria o branch "nome".
- **git checkout -b "nome"** - Cria um branch e altera para ele.
- **git merge "nome"** - Merge dos commits do branch "nome" para o branch atual.
- **git checkout "nome"** - Alterna para o branch "nome".
- **git rebase <base>** - Replica os commits da branch <base> para o atual.
- **git branch -d <branch>** - Apaga o branch localmente.

#### Tagging

- **git tag** - Lista as tags existentes.
- **git tag <tag> [<commit>]** - Cria a tag <tag> para o último commit ou para o commit <commit>.
- **git tag -l <tag>** - Procura pela tag <tag>.

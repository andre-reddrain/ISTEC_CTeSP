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
4. **Pull Requests**
    - Após concluir o desenvolvimento ou correção, um pull request é aberto para **solicitar revisão** e **discussão**.
    - É uma proposta para dar merge nas alterações de um branch para outro.
    - Os colaboradores podem revisar e discutir o conjunto de alterações proposto antes de integrá-las à base do código principal.
    - Exibem as diferenças ou comparações entre o conteúdo do branch de origem e o branch de destino.
6. **Revisão e Merge** - Outros membros da equipa **revisam as mudanças** e, **se aprovadas**, a branch da funcionalidade é **merged** na branch principal.
7. **Implementação / Deploy** - A branch principal (main) é então **implementada / deployed em produção**, garantindo que as últimas alterações aprovadas estejam disponíveis.

(TODO Imagem Slide 236)

#### GitLab Flow

O **GitLab Flow** é ótimo quando se deseja manter vários ambientes e quando se prefere ter um **ambiente de testes** separado do ambiente de produção.
Sempre que o branch principal estiver pronto para ser deployed, é possivel dar merge novamente no branch de produção e liberá-lo.
Esta estratégia oferece **isolamento** adequado **entre ambientes**, permitindo que os developers mantenham várias versões de software em diferentes ambientes.
Enquanto o GitHub Flow pressupõe que se possa dar deploy na produção sempre que se faça um merge numa ramificação de recursos no master, o GitLab Flow procura resolver esse problema permitindo que o **código passe por ambientes internos antes de chegar à produção**.

(TODO Imagem Slide 237)

#### Tabela comparativa

| Característica | Git Flow | GitHub Flow | GitLab Flow |
| -------------- | -------- | ----------- | ----------- |
| Principal ramo base | master (prod) e develop | main (prod) | Varia conforme o modelo (prod ou envs) |
| Ramos típicos | master, develop, feature/\*, release/\*, hotfix/\* | main, feature/\* | main, feature/\*, staging, production |
| Foco principal | Ciclos de release e estabilidade | Integração contínua (CI) | CI/CD + ambientes reais |
| Complexidade | Alta | Baixa | Média |
| Deploy contínuo | Difícil de implementar | Facilita | Ideal para CD com múltiplos ambientes |
| Uso de pull requests | Sim, entre feature - develop | Sim, direto feature - main | Sim, normalmente com revisão |
| Ambientes suportados | Produção e pré-produção | Produção direto | Dev, test, pré-prod, produção |
| Controle de versões | Sim (ideal para versionamento semântico) | Não é o foco | Pode ser integrado com tags e pipelines |
| Ferramentas recomendadas | Git, GitHub, GitLab, BitBucket | GitHub | GitLab (con CI/CD, issues, boards) |
| Vantagens | Alta organização para projetos grandes | Simples e ágil para projetos contínuos | Flexível, bom para DevOps |
| Desvantagens | Muito ramo e burocracia em projetos simples | Pouco controle em projetos complexos | Requer configuração adequada de CI/CD |
| Ideal para | Projetos com versões bem definidas | Startups, aplicações web com CI/CD | Projetos com múltiplos ambientes e DevOps |

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

##### Repositório remoto
- **git remote add <nome> <url>** - Associa o repositório local ao remoto.
- **git clone <url>** - Cria uma cópia completa do repositório remoto. Cria também a ligação com o repositório remoto.
- **git push** - Envia os ficheiros do repositório local para o repositório remoto.
- **git fetch origin** - Atualiza o repositório local com as informações mais recentes do repositório remoto, sem alterar o código ou branches locais.
- **git pull origin** - Atualiza todos os dados do repositório ou do branch em que se está a trabalhar.

##### Branches

- **git branch -a** - Exibe os branches existentes (inclusive remotos).
- **git branch "nome"** - Cria o branch "nome".
- **git checkout -b "nome"** - Cria um branch e altera para ele.
- **git merge "nome"** - Merge dos commits do branch "nome" para o branch atual.
- **git checkout "nome"** - Alterna para o branch "nome".
- **git rebase <base>** - Replica os commits da branch <base> para o atual.
- **git branch -d <branch>** - Apaga o branch localmente.

##### Tagging

- **git tag** - Lista as tags existentes.
- **git tag <tag> [<commit>]** - Cria a tag <tag> para o último commit ou para o commit <commit>.
- **git tag -l <tag>** - Procura pela tag <tag>.

## Metodologias Ágeis de Gestão de Projetos

### Quadro Kanban

Kanban é uma ferramenta de gestão visual que controla fluxos de trabalho com cartões e colunas num quadro.
- Amplamente utilizado para implementar o Desenvolvimento Ágil de Software.
- Necessário **comunicação de capacidade** em tempo real e **transparência total** de trabalho.
- Itens de trabalho ganham **representação visual** num quadro Kanban, permitindo que os membros da equipa vejam o estado de cada parte do trabalho a qualquer momento.

Conforme as **atividades são executadas**, os **cartões são movidos de coluna em coluna**, permitindo a equipa **acompanhar o progresso** de um projeto ou processo para **identificar a capacidade** de novas demandas.
O principal objetivo é **facilitar o progresso de um fluxo de trabalho ou processo**, permitindo que todos os utilizadores e partes interessadas possam acompanhar de forma fácil o status de atividades e projetos.

#### Funcionamento

O Kanban funciona a partir de 3 elementos principais: **Cartão**, **Coluna** e **Quadro**, que compõe um fluxo de trabalho ou uma cadeia produtiva.
Com estes 3 elementos, a utilização do Kanban consiste basicamente em mover os cartões conforme o **status** vai alterando, dando um panorama do que está **pendente** e do que já foi **concluído**.
Um ponto importante é o caráter limitante do sistema, porque uma linha produtiva pode ter uma demanda muito maior do que a capacidade de produzir.
Só serão adicionadas as atividades que a equipa comporta, sendo as novas demandas inseridas conforme as entregas são realizadas.

#### Vantagens
- Menos burocracia - Não há necessidade de documentos formais de controle.
- Aumenta a motivação dos colaboradores - Valoriza mais a função de cada um.
- Reduz desperdícios e custos - Ocorre essa redução no deploy, na fabricação e também na redução de produtos no estoque.
- Dá visibilidade clara e objetiva - Visibilidade clara e objetiva dos problemas, uma vez que os estoques ajudam a esconder os problemas.
- Promove o trabalho em equipa - Todos precisam de trabalhar de acordo com o quadro de tarefas do Kanban.
- Reduz tempos de ciclos - Favorece a velocidade na entrega de materiais e da produção.
- Fácil de implementar - Fácil de implementar na prática, mesmo por fábricas sem tanta organização.
- Processo controlado pela produção - Melhora a qualidade do produto final, já que há mais eficiência e objetividade.
- Aumenta a autonomia - Aumenta a autonomia do processo e da equipa, que conseguem trabalhar usando a gestão visual do kanban.

(TODO Imagem Slide 299)

### Scrum
Baseado em 3 pilares:
1. **Transparência** - Os aspetos significativos do processo estejam visíveis para aqueles que são responsáveis pelo resultado. Garantir que todos partilham o mesmo entendimento sobre o que estão a ver.
2. **Inspeção** - Os utilizadores do Scrum devem inspecionar frequentemente os artefactos e o progresso em direção ao objetivo do Sprint. Serve para detetar variações indesejadas ou problemas.
3. **Adaptação** - O processo ou o material produzido deve ser ajustado o mais rápidamente possível para minimizar novos desvios.

#### Equipa do Scrum
- **Product Owner (PO)** - Representa o cliente. Define o que será feito (prioridades).
- **Scrum Master (SM)**
    - Atua como um **facilitador e guardião do processo Scrum**.
    - Deve manter a **equipa protegida** de interferências externas.
    - Garante que a equipa esteja totalmente **funcional e produtiva**.
    - Garante que o processo esteja seguindo da forma **esperada**.
    - **Facilita o processo. Remove obstáculos e garante que o Scrum seja seguido.**
- **Dev Team (Dev)**
    - Equipa multidisciplinar que **desenvolve e entrega o produto**.
    - Organiza-se de forma **auto gerenciável**.
    - Responsável por transformar itens do backlog em **incrementos funcionais**.
    - **Pessoas que controem o produto (developers, designers...)**.
 
#### Cerimónias
O ciclo de vida de um projeto de desenvolvimento é pontuado por um conjunto de reuniões, cada uma com um objetivo bem definido.

| Cerimônia | Finalidade | Participantes | Duração sugerida |
| --------- | ---------- | ------------- | ---------------- |
| **Sprint** | Ciclo completo de desenvolvimento | Todo a equipa | 1-4 semanas |
| **Sprint Planning** | Planear o que será feito na Sprint | PO, SM, Dev Team | 2h por semana de Sprint |
| **Daily Scrum** | Alinhar o trabalho diariamente | Dev Team (SM e PO podem observar) | Máx. 15 minutos |
| **Sprint Review** | Apresentar entregas e coletar feedback | Todo a equipa + stakeholders | 1h por semana de Sprint |
| **Sprint Retrospective** | Melhorar o processo de trabalho | PO, SM, Dev Team | 1h30 a 3h (geralmente) |

#### Artefatos

| Artefato | Responsável Principal | Descrição | Objetivo |
| -------- | --------------------- | --------- | -------- |
| **Product Backlog** | Product Owner | Lista dinâmica e priorizada de **tudo que o produto precisa ter**. | Centralizar, priorizar e refinar os requisitos do produto. |
| **Sprint Backlog** | Dev Team | Subconjunto do Product Backlog **selecionado para a Sprint atual**. | Planear e organizar o trabalho da Sprint. |
| **Increment** | Dev Team | **Soma dos itens "Done"** da sprint atual com os já entregues anteriormente | Fornecer valor tangível e utilizável ao final de cada Sprint. |

#### Artefatos adicionais (Não oficiais do Scrum Guide)
| Artefato Extra | Descrição | Objetivo |
| -------------- | --------- | -------- |
| **Definition of Done (DoD)** | Critérios que um item precisa atender para ser considerado "pronto" | Garantir qualidade e alinhamento nas entregas. |
| **Burndown Chart** | Gráfico que mostra o **trabalho restante ao longo do tempo** da Sprint. | Monitorar o progresso da equipa. |
| **Impediment Log** | Lista de impedimentos que bloqueiam ou atrapalham a equipa. | Acompanhar e remover obstáculos com apoio do SM. |

#### Processo SCRUM

(TODO Inserir Imagem Slide 302)

1. **Product Backlog**
    - Lista inicial de requisitos criada pelo **PO**, com tudo que precisa ser produzido para que a visão do produto seja alcançada.
    - Fornece **valor de negócio** ao cliente.
    - Manter as funcionalidades a serem implementadas pelo **Time Scrum**.
    - **Dinâmico**, tem sempre novos itens, e evolui à medida que o produto se desenvolve.

2. **Planning Meeting**

3. **Sprint Backlog**
    - Lista que contém apenas os requisitos a ser executados nesse sprint.
    - Evolui de acordo com o trabalho do Scrum Team nesse sprint.
    - As atividades que entram na sprint são "congeladas" no Product Backlog.
  
4. **Sprint**
    - O produto é desenvolvido.
    - O Scrum Team dedica-se a produzir e entregar incrementos funcionais do produto.
  
5. **Daily Meeting**
    - Reunião diária, com duração média de 15 minutos.
    - Através dela, a equipa ganha visibilidade do andamento do processo.
    - São respondidas 3 questões de extrema importância para o projeto:
        - O que fez desde a última reunião de equipa até este momento?
        - Que obstáculos está a enfrentar?
        - O que planeia fazer até a próxima reunião?
    - Nessa reunião descobre-se os problemas antes mesmo que haja perca de tempo.
    - As respostas não são relatórios e sim compromisso com os seus pares.
  
6. **Burndown Chart** - Gráfico atualizado a cada **Daily Scrum**, projetando a conclusão das tarefas do **Sprint Backlog**, uma forma simples e clara de representar o ritmo do desenvolvimento.

7. **Increment**
    - Ao final de cada sprint cria-se um incremento do produto, assim o produto irá ficando pronto de acordo com a prioridade definida ainda no **Product Backlog**.
    - Quando já tiverem sido criados incrementos suficientes para que o produto tenha valor e uso para os seus investidores, o produto então é entregue.
  
8. **Sprint Retrospective**
    - **Todos** participam (PO, SM e Dev).
    - Acontece ao final de um sprint.
    - Mostra resultados visíveis de tudo que foi feito, mostrando o que funcionou como esperado, o que ainda pode melhorar e o que será feito para se alcançar tal melhoria.
    - Somente apoós a **Sprint Retrospective** a equipa parte para o início da próxima **Sprint**.

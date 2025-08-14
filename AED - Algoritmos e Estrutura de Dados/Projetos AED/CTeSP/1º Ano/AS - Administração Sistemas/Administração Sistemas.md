# Tabela de Conteúdos
1. [Virtualização](#virtualizacao)
2. [Florestas, Árvores e Domínios](#florestas)
3. [Active Directory](#activeDirectory)
4. [RODC (Read Only Domain Controller)](#rodc)
5. [FSMO Roles (Flexible Single Master Operation Roles)](#fsmo)
6. [Workgroups](#workgroups)
7. [Domínio](#dominio)

# Virtualização <a id="virtualizacao"></a>
- É o processo de simulação de hardware e software num **ambiente virtual (software)**
- Exemplo:
    - Tradicionalmente teríamos cada aplicação/serviço a correr em cada servidor
    - **3 aplicações = 3 servidores**
    - Neste exemplo, a **Virtualização consiste em consolidar num ambiente virtual, de um único servidor físico**, os 3 servidores e as respetivas aplicações ou serviços, sistemas operativos ou hardware.
    - Num único servidor físico temos:
        - 3 Servidores (virtuais)
        - 3 Sistemas operativos: Windows, Linux, Unix
        - 3 aplicações: Email, Webserver, Database
    - Os únicos recursos de hardware que estão em uso são os do servidor físico onde as VMs estão em execução.
    - **A experiência para o utilizador é a mesma de utilizar 3 servidores físicos diferentes**. Não há qualquer diferença.
- O software que cria e corre a virtualização tem o nome de **Hypervisor**.
- É responsável por alocar e gerir os recursos físicos da máquina tais como:
    - Armazenamento
    - Memória RAM
    - CPUs
    - Entre outros...
- Existem **2 tipos de hypervisors**:
    - Tipo 1 - **Nativos ou Bare-metal**
        - **É executado diretamente no hardware da máquina** para gerir sistemas operativos guest.
        - Desempenha as mesmas funções do S.O de uma máquina comum, e os recursos da máquina virtual são definidos, pelo hypervisor, diretamente no hardware.
        - É comum em data centers empresariais ou outros ambientes baseados em servidores.
        - Exemplo: **vmware ESXi, Citrix XenServer, Microsoft Hyper-V**
    - Tipo 2 - **Hosted**
        - É executado num sistema operativo convencional como uma aplicação.
        - Abstrai os sistemas operativos guest, das VM's, do sistema operativo Host, da máquina física.
        - Os recursos das VM's são operados num sistema operacional host, que é executado no hardware.
        - É tipico de utilizadores comuns que desejam executar vários sistemas operativos num computador pessoal.
        - Exemplo: **VirtualBox, vmware**

# Florestas, Árvores e Domínios <a id="florestas"></a>
- **Qualquer domínio de Active Directory tem de fazer parte de uma Floresta e de uma árvore**.
- Um diagrama de um domínio é representado por um **triângulo**.
- Exemplo:
    - Comecemos com um domínio para uma empresa que acabou de ser criada
    - Neste momento temos **um domínio, uma floresta e uma Árvore**
    - Porque motivos podemos ter múltiplos Domínios?
        - **Para efeitos de Administração quando uma empresa se encontra espalhada por uma área geográfica alargada**
        - **Domínios filhos estão ligados ao domínio pai por relações de confiança**
        - **Relações de confiança permitem a partilha de recursos entre domínios**
        - **Cada domínio tem os seus Domain Admins que controlam o seu próprio domínio**
        - Existem depois os **Enterprise Admins que controlam todos os domínios**
        - **Podem existir filhos de filhos**, em função da necessidade
- Para que dois domínios façam parte da mesma floresta, existe um **conjunto de regras** que devem ser seguidas:
    - Os domínios a adicionar à floresta devem sê-lo quando são criados, ou seja, **devem ser adicionados no momento em que são criados**.
    - **Não é possível o domínio X já existir e o mesmo ser verdadeiramente adicionado à Floresta já existente**. Ex: Quando 2 empresas se fundem
    - É possível **criar uma relação de confiança entre os 2 domínios, contudo, tecnicamente são 2 florestas**
- **Quando 2 domínios fazem parte da mesma floresta, partilham o mesmo schema**, que é uma parte da base de dados do Active Directory responsável pela criação dos objetos e respetivos atributos
- **Podemos estabelecer uma relação de confiança entre dois domínios já existentes**, ambos podem partilhar recursos, mas alguns tipos especiais de objetos não serão replicados pois o schema é diferente
- **Se 2 domínios pertencem à mesma floresta, partilham o global catalog**.
- É através do **global catalog que podemos encontrar objetos no domínio**
- O **1º domínio a ser criado chama-se Root domain**.

# Active Directory <a id="activeDirectory"></a>
- Temos o Domain Controller que contém uma base de dados
- Essa base de dados é o **Active Directory**
- O nome da base de dados é **NTDS.dit**
- Originalmente a base de dados no Active Directory tinha apenas **3 partições**:
    - **Configuration**
    - **Schema**
    - **Domain**
- A Microsoft acrescentou uma **4ª partição** a partir do Windows Server 2003: **Application(Custom)**
- Partição **Configuration**:
    - **Só pode existir uma partição de configuração por floresta**
    - **Contém informações sobre a estrutura do Active Directory de toda a floresta**, incluindo:
        - **Domínios**
        - **Sites**
        - **Domain Controllers**
        - **Serviços disponíveis**
    - **As informações de configuração são replicadas para todos os Domain Controllers de uma floresta**
- Partição **Schema**:
    - Só pode haver **uma partição Schema por floresta**
    - A partição Schema **é armazenada em todos os Domain Controllers de uma floresta**.
    - A partição de Schema **contém definições de todos os objetos e atributos que podem ser criados no diretório assim como as regras para os criar e manipular**
    - **As informações de Schema são replicadas para todos os Domain Controllers com as definições de atributos**.
- Partição **Domain**:
    - Podem existir **muitas partições Domain por floresta**.
    - As partições Domain **contém informações sobre utilizadores, grupos, computadores e unidades organizacionais**.
    - A partição Domain **é replicada para todos os controladores de domínio desse domínio**
    - **Todos os objetos em cada partição Domain numa floresta são armazenadas no Global Catalog com apenas um subconjunto dos respetivos valores de atributos**.
- Partição **Application(Custom)**:
    - É uma partição custom porque podemos decidir o que queremos guardar
    - Ex: Se uma empresa desenvolve aplicações que criam um determinado tipo de objetos no Active Directory, a informação desses objetos podem ser guardadas nesta partição e replicadas para os outros Domain controllers designados por nós.
    - Não tem uma vasta utilidade

- **Global Catalog**
    - É uma função muito específica que é atribuida a um Domain Controller
        - **Contêm um subconjunto de atributos de todos os objetos de outros domínios na floresta**.
        - Dá suporte a pesquisa de objetos através da floresta.
    - Não replica todos os atributos dos objetos, mas sim um subconjunto desses atributos.

# RODC (Read-Only Domain Controller) <a id="rodc"></a>
- O objetivo era ter a possibilidade de criar um Domain Controller apenas de leitura
- Porquê um Servidor só de leitura?
- Exemplo:
    - Problema:
        - Só existem 10 utilizadores
        - Não existe equipa IT
        - É uma localização remota
        - Faz sentido replicar TODA o AD nesta localização?
        - Se acontecer algum problema no DC, vai ser replicado para toda a AD sem que ninguém o possa impedir?
    - Solução: **RODC - Read-Only Domain Controller**
        - Réplica do DC mas só de leitura, sem possibilidade de escrita.
        - **Permite que se faça cache apenas das passwords dos 10 utilizadores**, não replicando as passwords dos demais.
        - Se mais algum user ou admin do domínio tentar fazer login, usa o **Pass-through authentication**.

# FSMO Roles (Flexible Single Master Operation Roles) <a id="fsmo"></a>
- Funcionalidade que existe desde a fundação do Active Directory (2000).
- Existe um conjunto de funções / tarefas (roles) que só podem existir, em modo operacional, num DC.
- São 5 Roles:
    - 2 Forest Level Roles
    - 3 Domain Level Roles

- Mudar os FSMO Roles é uma tarefa normal.
- O processo de mudança pode ser feito por 2 motivos:
    - A necessidade de mudança de 1 ou mais roles, de um DC para outro, por motivos de performance ou outros, mantendo os 2 DCs em funcionamento.
    - Numa perspetiva de reposição de serviços por falha do DC que continha os Roles, quando apenas o DC de destino está em funcionamento.
- Esta é a diferença entre **Transferring** e **Seizing**.
- **Transferring** fazemos por opção, tendo os 2 DCs em funcionamento. Pode ser feito por GUI ou Powershell.
- **Seizing** fazemos em último recurso e apenas quando o DC que contém os roles não tem hipótese de voltar a funcionar. É sempre feito por Powershell.

- ## Forest Level Roles
    - **Domain Naming Master**
        - **Gere a partição de configuração do Active Directory**.
        - **Garante que todos os nomes dos domínios são únicos**, em toda a floresta.
        - **É consultado/informado sempre que se adiciona ou se remove um domínio na floresta**.
    - **Schema Master**
        - É o responsável pela execução de **atualizações ao schema do diretório**.
        - É o único que o pode fazer em toda a floresta.
        - **Quando o update do schema está concluído, o mesmo é replicado para os outros DCs**.
- ## Domain Level Roles
    - **RID Master (Relative Identifier Master)**
        - Todos os objetos do domínio têm um identificador único, o **SID - Security Identifier**.
        - O RID é a sequência final do SID e permite identificar qual o DC onde o objeto foi criado.
        - É o RID Master que atribui estes IDs, através da alocação de pools de 500 valores decimais a cada DC.
    - **Infrastructure Master**
        - Regista as referências entre domínios
        - Como funciona:
            - O Global Catalog permite saber que grupo é, e a que domínio pertence.
            - O Infrastructure Master regista relação entre grupos, objetos e permissões (Group to User references)
            - O Infrastructure Master faz track destas cross domain references
    - **PDC Emulator Master**
        - Age como Time Server do domínio
        - Qualquer alteração de segurança é replicado primeiro para o PDC Emulator Master
        - É a autoridade suprema nos conflitos de segurança.
        - As Group Policies residem no PCD Emulator Master.

# Workgroups <a id="workgroups"></a>
- Um workgroup é uma rede de computadores Windows ponto-a-ponto, em que os utilizadores têm credenciais de **início de sessão apenas no seu sistema e não noutros**.
- Tem uma administração distribuída em que **cada máquina é gerida de forma independente**.
- **Cada dispositivo tem o seu próprio armazenamento dedicado**.

# Domínio <a id="dominio"></a>
- O domínio é uma rede cliente/servidor em que os utilizadores **podem iniciar sessão a partir de qualquer dispositivo no domínio**.
- Tem uma administração centralizada e **todos os dispositivos podem ser geridos a partir de um dispositivo central**.
- Prefere o **armazenamento centralizado e todos os dados do utilizador podem ser armazenados de forma centralizada**.

# Utilizadores e OUs <a id="utilizadores"></a>
- Algo fundamental numa AD são as **OUs (Organizational Units)** e as contas de utilizador.
- Contas de Utilizador servem para definir quem são os utilizadores, como se autenticam e como conseguem acesso aos recursos.
- OUs são uma espécie de pasta que permite organizar os objetos da AD tornando mais fácil a sua visualização, gestão e localização.
- Neste caso as contas de utilizador ficarão guardadas nas OUs.
- As OUs guardam todos os objetos criados na AD tais como computadores, utilizadores, grupos, impressoras, contactos, entre outros.

## Tipos de grupos
- **Security Groups (SG)**
    - Podemos atribuir permissões a recursos partilhados
    - Quando um utilizador "inicia sessão" num computador, a máquina cria o "access token" do utilizador. O token de acesso contém todos os **SIDs (Security IDs)** dos SG de que o utilizador é membro.
- **Distribution Groups (DG)**
    - Podemos criar listas de distribuição de emial num ambiente Microsoft Exchange.
    - Não é possível atribuir permissões a Distribution Groups e, mesmo que o fizessemos, não teria qualquer efeito pois os SIDs não estão incluídos no DG.

## Scopes de grupos
- **Domain Local Groups**
    - Recomendado para gerir permissões de recursos porque este grupo pode ser aplicado em qualquer parte do domínio.
    - Um Domain Local Group pode incluir membros de qualquer tipo no domínio e membros de domínios confiáveis.
    - Ex: Se precisarmos gerir o acesso, de múltiplos utilizadores, a uma coleção de pastas num ou mais servidores, colocamo-los num Domain Local Group e gerimos as permissões através do grupo.

- **Universal Groups (UG)**
    - São úteis em florestas com vários domínios.
    - Permitem que se definam funções ou se giram recursos que abrangem mais de um domínio.
    - Cada UG é armazenado no domínio onde foi criado, mas os membros que constituem são armazenados no Global Catalog e replicados em toda a floresta.
    - Não deve ser usado em florestas com apenas um domínio.

- **Global Groups (GG)**
    - São usados essencialmente para definir coleções de objetos de domínio (utilizadores, outros GG e computadores) com base, por exemplo, em funções comerciais.
    - Servem principalmente como **grupos de funções**.
    - Grupos de utilizadores baseados na sua função (como RH ou Marketing).
    - Grupos de computadores baseados na sua função (como Workstations) por norma são grupos globais.

- **Local Groups**
    - São verdadeiramente locais.
    - São criados, definidos e estão disponíveis apenas para o computador específico no qual foram criados.
    - Não é recomendada a criação de novos grupos locais nos computadores de Domínio.
    - Na maioria dos casos, os grupos Utilizadores e Administradores são os dois únicos grupos locais a serem geridos.

TODO Slide 29 Aula 3
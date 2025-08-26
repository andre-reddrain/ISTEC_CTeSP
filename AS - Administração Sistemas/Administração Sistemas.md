# AS - Administração Sistemas

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

- **Universal Group Caching**
    - Quando um utilizador tenta iniciar sessão pela 1ª vez, o Domain Controller obtém a associação, desse utilizador, aos Universal Groups a partir de um **Global Catalog**.
    - Estas informações são colocadas em cache nesse DC para esse site indefinidamente e são atualizadas periodicamente a cada 8 horas.
    - Podem ser atualizados até 500 membros de *Universal Groups* de cada vez.
    - Vantagens:
        - Tempos de início de sessão mais rápidos.
        - Não é necessária a atualização de hardware para suportal o Global Catalog.
        - Baixo consumo de largura de banda da rede.

## gMSAs - Group Managed Service Accounts
- O Active Directory faz a gestão da conta trocando a password nos ciclos definidos e os serviço, desde que estejam preparados para esse cenário, serão configurados de forma transparente.
- As gMSAs não podem ser criadas graficamente, pelo que, só podem ser criadas via Powershell
```powershell
Add-KdsRootKey
Add-KdsRootKey -EffectiveImmediately
Add-KdsRootKey -EffectiveTime ((get-date).AddHours(-10))
```
- O comando foi desenvolvido pensando em infraestruturas de grandes dimensões e espalhadas por áreas geográficas alargadas, por isso leva 10 horas a estar disponível, garantindo a total replicação.
- **-EffectiveImmediately** - permite ficar disponível no DC onde foi executado mas leva as memas 10 horas para estar em toda a infraestrutura.
- **-EffectiveTime ((get-date).AddHours(-10))** - permite dar a volta ao período de espera de 10 horas, tendo efeito imediatamente. **SÓ DEVE SER USADO EM LABORATÓRIO/TESTE**.

No Domain Controller onde foi criada a Managed Service Account, a mesma está pronta a ser utilizada.
```powershell
New-ADServiceAccount -Name TestgMSA -DNSHostName testgmsa.mydomain.com -PrincipalsAllowedToDelegateToAccount "Grupo de Máquinas"
```
- **New-ADServiceAccount** - Comando para criar uma nova Managed Service Account.
- **-Name** - Nome da conta.
- **-DNSHostName** - Nome para ser criada uma entrada de DNS para a conta.
- **-PrincipalsAllowedToDelegateToAccount** - Nome do grupo cujas máquinas vão poder utilizar a Managed Service Account.

Nos Member Servers onde é necessário utilizar a Managed Service Account, a mesma tem de ser instalada.
```powershell
Add-WindowsFeature rsat-ad-powershell
Import-Module ActiveDirectory
Install-ADServiceAccount -Identity testgmsa
```
- **Add-WindowsFeature rsat-ad-powershell** - Adicionar as ferramentas de administração de domínio no powershell.
- **Import-Module ActiveDirectory** - Importar os comandos de configuração do Active Directory.
- **Install-ADServiceAccount -Identity testgmsa** - Instalar a Managed Service Account definida na própria Máquina.

# GPO - Group Policy Object
- É um conjunto de definições que define o aspeto de um sistema e o seu comportamento para um grupo definido de utilizadores ou dispositivos.
- A Microsoft fornece um programa que permite utilizar a *Group Policy Management Console* (GPMC).
- As GPOs podem estar associadas a Sites, Domínios ou Unidades Orginazacionais (OUs).
- Através do GPMC podemos criar GPOs que definem políticas baseadas no registo, opções de segurança, opções de instalação e manutenção de software, opções de scripts e opções de redirecionamento de pastas, por exemplo.
- Usamos GPOs para criar configurações de máquina ou de utilizador e aplicamo-las individualmente ou a grupos de objetos.
- Existem 3 tipos de GPO:
    - **Local Group Policy Objects**:
        - Coleção de GPOs que se aplicam apenas ao computador local e aos utilizadores que iniciam sessão nesse computador.
        - São usadas quando as configurações são aplicadas a um único computador ou utilizador do Windows.
        - Existem por defeito em todas as instalações do Windows.
    - **Non-local Group Policy Objects**:
        - Utilizadas quando as definições têm de ser aplicadas a um ou mais computadores ou utilizadores.
        - Aplicam-se a computadores ou utilizadores quando estes estão ligados a objetos do Active Directory, tais como Sites, Domínios ou Unidades Organizacionais (OUs).
    - **Starter Group Policy Objects**:
        - Introduzidas no Windows Server 2008.
        - Funcionam como modelos de GPOs.
        - Permitem criar e ter um grupo pré-configurado de definições que representam uma baseline para qualquer GPO a ser criada.
        - Estas definições estão pré-configuradas, sempre que se criar uma GPO usando uma *starter* como modelo.

**Benefícios**:
    - Mais segurança (ex: Limitar o acesso ao Painel de Controlo).
    - Gestão mais eficiente.
    - Facilidade de administração e atualização.
    - Melhor e mais eficiente aplicação de políticas de passwords.
    - Configuração do redirecionamento de pastas.

**Limitações**:
    - São executadas sequencialmente - podem levar a delays pois seguem uma ordem.
    - Flexibilidade é limitadas - Só podem ser aplicados a utilizadores ou computadores.
    - Limitação de Ativadores - Só podem ser aplicados no arranque, no início de sessão ou em intervalos definidos. Não podem "reagir" a alterações.
    - Difícil de manter - não existe uma opção de pesquisa ou filtro incorporada para encontrar uma definição específica numa GPO.
    - Sem controlo de versão - se for efetuada uma alteração incorreta, é impossível saber qual foi a alteração ou quem a efetuou.

**Ordem de Processamento**:
    - A ordem de processamento das GPOs afeta as definições que são aplicadas ao computador ou ao utilizador final.
    - Esta ordem de processamento é conhecida como **LSDOU: Local, Site, Domain, Organizational Unit**.
    - Em primeiro lugar, é processada a política do computador local, seguida das políticas do Active Directory do Site, depois do Domínio, e em seguida, para as OUs.
    - As GPOs em OUs aninhadas aplicam-se primeiro a partir da OU mais próxima da raiz e continuam a partir daí.
    - Se existirem conflitos, a última política aplicada vai prevalecer.

**Ordem de Prioridade** - OU -> Domain -> Site -> Local

Por defeito, as GPOs são atualizadas a cada 90 minutos para máquinas e utilizadores, e a cada 5 minutos para os *Domain Controllers*.
É possível forçar esta atualização, a qualquer momento, através da linha de comandos (*gpupdate /force*)

# Endereçamento IP

## Endereço IP
- IPv4 é um endereço de 32 bits representado, normalmente, no formato de 4 valores decimais separados por um ponto - x.x.x.x
- Cada valor decimal, adota o nome do octeto por ser a representação decimal de uma sequência e oito bits binários. Cada valor decimal pode variar entre 0 e 255.

## Máscara de sub-rede
- Uma sub-rede é utilizada para facilitar a manutenção da rede.
- Embora tenha muitos benefícios, a sub-rede requer hardware adicional (ex: routers), o que pode implicar custos adicionais de implementação.

**Benefícios**:
    - Manutenção mais fácil.
    - Segurança de rede avançada para que uma sub-rede não possa aceder a outra.
    - Tráfego de rede reduzido.
    - Ao usarmos sub-redes, não precisamos de adquirir endereços IP adicionais aos ISPs.

## DHCP - Dynamic Host Configuration Protocol
- Existem 2 formas de obter um IP:
    - **Estático** - Definido manualmente, permanecendo inalterado.
    - **Dinâmico** - Atribuido automaticamente como resposta a um pedido que é feito pelo dispositivo que necessita de um IP. É feita pelo DHCP.

### Instalação DHCP
- Para configurar o serviço de DHCP, necessitamos de instalar o role **DHCP Server**, contudo existem pré-requisitos:
    - Um computador a correr uma versão suportada do Windows Server.
    - IP estático definido no servidor.
    - Um intervalo de IPs para serem atribuídos.
    - Uma conta que seja membro do grupo dos Administradores ou equivalente.
- Autorizar o servidor DHCP no Active Directory
    - Servidores DHCP não autorizados que estão instalados em domínios do Active Directory podem não funcionar corretamente e não condererem endereços IP a clientes DHCP.
    - Desativação automática de servidores DHCP não autorizados é uma funcionalidade de segurança que impede que servidores DHCP não autorizados atribuam endereços IP incorretos a clientes na rede.

### Configuração DHCP
- Gerir Reservas de DHCP
    - Com as reservas de DHCP, podemos reservar um endereço IP para utilização permanentes por um cliente.
    - As reservas são armazenadas utilizando o MAC Address de uma placa de rede e asseguram que o servidor DHCP "aluga" exclusivamente um endereço IP específico a um MAC Address específico.
- Gerir Exclusões
    - Exclusão de DHCP é uma configuração através da qual, um único endereço IP ou um intervalo de endereços IP, são excluídos de serem atribuídos automaticamente aos clientes DHCP.
- Lease Duration
    - A duração da atribuição do IP, ou o período de tempo durante o qual o endereço IP pode ser utilizado antes de ser necessária uma renovação da atribuição.

### DHCP Failover
- Failover do DHCP fornece um método para que dois servidores DHCP comuniquem entre si.
- Dependendo da configuração, o failover DHCP pode fornecer redundância e balanceamento de carga, partilhando um ou mais pools entre dois ou mais servidores DHCP.
- Os servidores são conhecidos como **failover peers**.

# DNS - Domain Naming System
- É um serviço responsável por mapear nomes e endereços IP.
- É uma das peças fundamentais e centrais de todo o *Active Directory*.
- É uma base de dados **hierárquica** e **distribuída** composta principalmente por pares de noms de computadores e endereços IP.
- **Distribuída** significa que não existe uma base de dados única que contenha todos os dados. **Hierárquica** significa que não existe uma estrutura para a forma como as informações são armazenadas e acedidas na base de dados.
- Uma pesquisa de DNS requer frequentemente várias consultas a uma hierarquia de servidores DNS.
- Pode ser descrito como uma estrutura em árvore invertida.
- Toda a árvore DNS tem o nome **DNS namespace**.
- Cada domínio tem um ou mais servidores que são autoritativos para esse domínio.
- Os servidores de raiz (*root*) mantêm uma base de dados de endereços de outros servidores DNS que gerem nomes de domínio de topo, denominados **TLD - Top-Level Domain**.

## Base de dados do DNS
- Uma **zona** é um agrupamento de informações DNS que representa um ou mais domínios e possíveis subdomínios.
- As zonas contêm uma variedade de tipos de registos denominados **registos de recursos**, que contêm informações sobre recursos de rede.
- Os registos DNS podem ser adicionados e alterados através de:
    - Atualizações estáticas - O administrador introduz manualmente as informações do registo DNS
    - Atualizações dinâmicas - **DNS Dinâmico (DDNS)**

## Processo de pesquisa de DNS
- Podem ser efetuados 2 tipos de pesquisa de DNS:
    - **Consulta iterativa** - Um servidor DNS responderá com a melhor informação que tiver para satisfazer a consulta, ou poderá dar uma resposta de referência.
    - **Consulta recursiva** - Um servidor DNS processa a consulta até responder com um endereço que satisfaça a consulta ou com uma mensagem "Não sei".

## Funções do servidor DNS
- Os servidores DNS podem desempenhar uma ou mais das seguintes funções para uma zona:
    - **Authoritative Server** - detém uma cópia completa dos registos de recursos de uma zona.
    - **Forwarder** - um servidor DNS para o qual outros servidores DNS enviam pedidos que eles próprios não conseguem resolver.
    - **Conditional forwarder** - um servidor DNS para o qual outros servidores DNS enviam pedidos direcionados para um domínio específico.
    - **Caching-Only Server** - não possui zonas e a sua função é responder a consultas DNS, efetuar pesquisas recursivas em servidores de raiz ou enviar pedidos para reencaminhadores e, em seguida, colocar os resultados em cache.

## Instalação do DNS
- Começa com a instalação da Role **DNS Server** através do *Server Manager* ou do *PowerShell*.
- Se o DNS Server se destinar a gerir serviços de nomes de domínio para o *Active Directory*, a função DNS Server deve ser instalada num *Domain Controller*.
- O Windows deteta automaticamente se o servidor está ou não configurado como um *Domain Controller* e, em seguida, integra as zonas DNS com o *Active Directory*.

## Criação de zonas DNS
- Poderá ser necessário criar uma zona manualmente no DNS Manager se:
    - Não instalar o DNS na instalação do *Active Directory*.
    - Instalar o DNS num servidor que não seja um Domain Controller.
    - Criar uma zona *stub*.
    - Criar uma zona secundária para uma zona primária.
    - Criar uma zona primária ou secundária para um domínio da internet.

## Forward e Reverse Lookup Zones
- Antes de criar uma zona, é necessário decidir se se trata de uma *Forward Lookup Zone* ou de uma *Reverse Lookup Zone*:
    - ***Forward Lookup Zone (FLZ)*** - contém registos que traduzem nomes em endereços IP, tais como registos A, AAAA e MX.
    - ***Reverse Lookup Zone (RLZ)*** - contém registos PTR que mapeiam endereços IP para nomes e tem o nome do endereço de rede IP (IPv4 ou IPv6) dos computadores cujos registos contém.

## Criação de registos de DNS em zonas
- Os registos de recursos podem ser criados dinamicamente ou como registos estáticos
- Os registos dinâmicos são criados pelo recurso ou com um servidor DHCP.
- Os registos estáticos são criados manualmente por um administrador ou automaticamente pelo Windows.

### Registos dinâmicos
- São criados e atualizados pelo recurso ou pelo servidor DHCP quando um endereço IP é atribuido ou renovado.
- Sempre que um registo dinâmico é criado ou atualizado, são adicionados ao registo um valor de tempo de vida (TTL) e um carimbo de data e hora.
- TTL especifica o tempo que o registo deve permanecer na base de dados do DNS.
- Se o registo expirar, é eliminado da base de dados.

### Registos estáticos
- Não expiram e são criados manualmente por um administrador.
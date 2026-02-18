# 2 - Ameaças e Vulnerabilidades

## 2.1 - Tipos de Malware
**Malware** - Software que origina danos e incomodo no recurso em que se instala:
    - Sintomas de malware:
        - Danos no recurso atacado (ex: destruição, encriptação e roubo de informação)
        - Possível sobrecarga, maior lentidão e aquecimento de recurso atacado:
            - Como se um novo utilizador invisível e ilegítimo acedesse e pudesse dar comandos no recurso atacado em simultâneo com os utilizadores legítimos - possíveis sintomas adicionais:
                - Instalação de aplicações sem o consentimento do utilizador
                - Emails enviados sem o consentimento do seu utilizador responsável.
                - Consumo excessivo de bateria e de transmissão de dados
    - Medidas preventivas:
        - Não abrir attachs e clicar em links de mensagens suspeitas
        - Ter anti-virus atualizado para inspecionar ficheiros de downloads
        - Não interagir com websites suspeitos
        - Não ligar dispositivos periféricos desconhecidos e potencialmente inseguros
        - Não fazer download e instalar software de fontes não fiáveis e não seguras
        - Efetuasr backups periódicos

**Tipos de Malware**:
    - **Worms** - Auto-propagam-se entre os recursos por si atacados (Terminais, encaminhadores e redes).
        - Modelo de propagação - Initial Infection -> Target found -> Worm transmitted -> System compromised
    - **Vírus** - Necessitam de um ficheiro hospedeiro para atacar alvo e propagam-se (ex: PCs)
        - Maioria infeta ficheiros executáveis - Ativado quando os ficheiros são executados e carregados na memória dos recursos atacados
        - Propagam-se por cópia de ficheiros infetados entre recursos
    - **Troianos** - Escondem-se em programas/ficheiros legítimos para entrar no alvo poderem executar o ataque
        - Designação baseada na figura de "cavalo-de-troia"
        - Não se propagam, mas procuram criar falhas na segurança, exemplos:
            - Conceder acessos remotos ilícitos
            - Instalar mais malware, como bots que aguardam ordem de ataque
            - Copiar, modificar ou apagar ficheiros
        - Introduzem-se e escondem-se em ficheiros/programas normais e legítimos (mp3, jpeg)
    - **Ransomware** - Atacam alvo encriptando os seus dados e condicionam o acesso aos mesmos ao pagamento de um resgate monetário
        - Geralmente dados são encriptados e só após o pagamento do resgate e respetiva chave de desencriptação poderá ser disponibilizada
    - **Spyware** - Espiam atividades do utilizador de um recurso atacado sem o seu conhecimento e consentimento
        - Pode recolher e roubar vários tipos de informação:
            - Informação "teclada" - Keylogger
            - Dados confidenciais
            - Registo de atividades
        - Geralmente torna o sistema atacado mais lento em virtude das suas atividades
        - É passivo por não causar danos diretos, mas pode causar danos indiretos por possível uso ilícito da informação roubada.
    - **Rootkits** - Procurarem ter acesso privilegiado (root) ao recurso atacado para executarem as suas várias possíveis tarefas maliciosas (kit) de forma "invisível" para o alvo
        - Procurar roubar dados privados e/ou instalar malware adicional
        - Adicionalmente procura esconder o seu método de ataque (ex: alterar SO para que o mesmo não leia parte do HD onde o malware se instalou)
        - Diversas formas de propagação, exemplos:
            - Download de ficheiros infetados
            - Uso de pens USB com ficheiros infetados
        - 2 tipos de Rootkits:
            -**User-mode** - Comprometem aplicações do recurso atacado:
                - Afetam aplicações dos utilizadores
                - Podem esconder ficheiros, processos, portos e drives
                - Como não afetam SO podem ser detetados por anti-virus
            -**Kernel-mode** - Comprometem SO do recurso atacado:
                - Mais perigosos - correm ao nivel do SO
                - Mais difíceis de detetar e remover por anti-virus - podem causar mais danos e por mais tempo
        - Possíveis indicadores de que um recurso pode estar infetado por rootkit:
            - Ecrã negro aparecer periodicamente
            - Alterações de settings de aplicações sem o consentimento do utilizador
            - Páginas web lentas em virtude de sobrecarga de tráfego na interface da rede
        - Métodos para remoçáo de Rootkits:
            - User-mode - Anti-virus
            - Kernel-mode - Pode ser necessário formatar disco

### 2.1.7 - APT (Advanced Persistent Threat)
**APT (Ameaça Persistente Avançada)** - Tipo de malware com as seguintes características:
    - *Advanced* - Usa técnicas avançadas, que podem corresponder a vários tipos de malware
    - *Persistent* - Procura permanecer invisível no recurso infetado o máximo tempo possível para poder prolongar o ataque (ex: roubar o maior volume de informação possível)
    - *Threat* - Ameaça corresponde geralmente a roubo de informação confidencial
    - Procura atacar alvos com um determinado perfil selecionado - usado em espionagem económica ou militar
    - Podem operar em forma de bots (robots com malware)
        - Grupos de computadores comprometidos, que obedecem a ordens de Servidor C&C (Command and Control ou C2), controlado por atacante
        - Permanecem invisíveis o maior tempo possível, até receberem ordem de ataque
    - *Lógica de ataque de APT*:
        1. Recolha de informação para ataque
        2. Escolha de ponto de entrada na rede alvo para colocação de malware para ataque
        3. Malware recebe ordem de ataque de servidor C&C
        4. Acesso a outros recursos para pesquisa da informação procurada (lateral movement)
        5. Após detetada a informação procurada -> ataque vai consistir em roubo e transferência de dados
        6. Atacante recolhe dados roubados de servidor externo

### 2.1.8 - Exemplos de malware em terminais móveis
**FluBot** - Troiano para Android que visa roubar credenciais, interceptar SMS/2FA e propagar-se por mensagens SMS de phising via lista de contactos da vítima.
    - *Principal alvo*: Utilizadores de terminais Android que instalem apps fora da Play Store
    - *Forma de ataque*: Envio de mensagens maliciosas que procuram convencer a vítima a abrir links ou ficheiros e assim instalar um exploit e executar o respetivo payload.
    - *Objetivo*: Captura de credenciais bancárias, códigos de autenticação, efetuar transferências fraudulentas.

**Joker** - Troiano para Android cujo objetivo principal é registar a vítima em serviços premium pagos e, em algumas variantes, exfiltrar informação.
    - *Principal alvo*: Utilizadores de terminais Android que instalam apps fora da Play Store
    - *Forma de ataque*: Obter permissões de acesso do utilizador/terminal alvo
    - *Objetivo*: Causar danos financeiros ao alvo
    - *Sintomas*:
        - Cobranças desconhecidas na conta móvel (SMS para serviços premium).
        - Mensagens SMS ou notificações de subscrições desconhecidas.
        - Consumo anormal de dados e/ou bateria
        - Apps instaladas recentemente sem o consentimento e conhecimento do utilizador

**Pegasus** - Spyware desenvolvido pelo NSO Group, usado por clientes governamentais para vigilância direcionada de alvos específicos:
    - *Principal alvo*: Utilizadores de terminais móveis
    - *Forma de ataque*:
        - *Zero click* - Sem nenhuma interação com o utilizador. Os exploits são enviados por mensagens que explorar vulnerabilidades em componentes do sistema ou de apps.
        - Envio de mensagens maliciosas que procurar convercer a vítima a abrir link ou ficheiro e assim executar o exploit ou instalar um payload.
    - *Objetivo*: Espiar toda a atividade do terminal infetado e enviar informação capturada para servidores de comando-e-controlo (C2) do atacante.

**XcodeGhost** - Troiano para iOS em apps aparentemente legítimas que foram compiladas com código malicioso e não detetadas e publicadas na Apple Store
    - *Principal alvo*: Utilizadores de terminais Apple que instalam apps infetadas com código malicioso XcodeGhost.
    - *Forma de ataque*: Desenvolvedores que descarregam o Xcode da Apple adulterado ou usaram JSPatch para "hotfixes" de apps.
    - *Objetivo*: Código malicioso poder roubar informações privadas/confidenciais do terminal alvo e enviar para servidores de comando-e-controto do atacante.

**Medidas de recuperação em caso de deteção de malware em terminal**:
    1. Desligar da rede - Impedir que malware se propague ou roube mais informação
    2. Fazer reset à terminal - Limpar memória e reiniciar terminal em modo de segurança (Android) para impedir Apps de serem executadas.
    3. Identificar e remover a App maliciosa
    4. Corret Anti-virus - Efetuar verificação completa do sistema para identificar e remover outras Apps e/ou ficheiros infetados.
    5. Verificar e, se necessário, atualizar o S.O e Apps (sempre via loja oficial)
    6. Alterar passwords - Prevenir o caso de terem sido roubadas pelo malware
    7. Se medidas anteriores não forem suficiente - Restaurar o sistema (reset de fábrica)

### 2.1.9 - Tools de análise de Malware
**Malware "conhecido"**:
    1. Procura de assinaturas (padrões) que identificam malware já conhecido em ficheiros
        - Ex: Anti-virus - Dificuldade na deteção de Malware Polimórfico (malware com mutações que altera assinatura cada vez que infeta uma terminal)

**Malware (ainda) "desconhecido"**:
    2. Inspecionar componentes internas de SW suspeito:
        - Uso de tools para identificar os componentes do malware (ex: YARA)
            - YARA possibilita criar regras para verificar se malware está a usar uma determinada componente.
    3. Estudo de comportamento de SW suspeito:
        - Apropriado para identificar e combater malware Polimórfico
        - Uso de tools para estudar malware (ex: IDA (Interactive DisAssembler))
            - IDA é um disassembler de SW que converte código máquina em código Assembly de modo a facilitar a análise do SW suspeito

## 2.2 - Vulnerabilidades comuns no Software
**Vulnerabilidades de Software** - Introduzidas durante a fase de programação do software, ou seja um bug com implicações de segurança
    - Exemplos:
        - *Buffer Overflow* - Quando são colocados num buffer (memória de um recurso informático) um volume de dados que excede a sua capacidade.
        - *Race conditions* - Processo atacante conseguir concorrer com processo legitimo e aceder ao mesmo recurso privado/confidencial do recurso legitimo.
        - *Validação de Inputs* - Falhas em validação dos dados pedidos aos utilizadores de uma aplicação.

**Definição de exposição que pode originar vulnerabilidade de software**: A system configuration issue or a mistake in software that allows access to information or capabilities that can be used by a hacker as a stepping-stone into a system or network.

**Definição de vulnerabilidade no software**: A mistake in software that can be directly used by a hacker to gain access to a system or network.

Necessário efetuar testes de SW para deteção de possíveis vulnerabilidades:
    - Usar aplicações para testes de segurança do código nas suas diferentes fases de desenvolvimento - "mandatório" para SW de aplicações críticas:
        - Estáticas - para análise de código fonte
        - Dinâmicas - para análise de código em execução
        - Interativas - para análise de código em execução de modo interativo

### 2.2.1 - Buffer Overflow
- Originado quando é colocado num buffer um volume de dados que excede a sua capacidade
- Possível em linguagens de programação como C ou C++ - Náo verificam se limite dos buffers são violados.
    - Noutras linguagens, os limites do buffer são verificados (ex: Jave e C#)
    - Pode ocorrer de modo:
        - Acidental - Engano de utilizadores
        - Intencional - Forçado por atacantes
    - Medida preventiva - Evitar algumas funções, testar e validar o SW
- Ataques por Buffer Overflow com 2 variantes possiveis:
    1. *Overflow na heap* - Overflow explorando acesso a zona de memória onde os dados dos programas são armazenados dinamicamente (ex: reserva incorreta de memória)
    2. *Overflow na pilha* - Overflow explorando a zona de memória onde são tipicamente guardados os argumentos, variáveis locais e endereço de retorno das funçõesn (pilha)
        - Conteúdo da pilha impacta fluxo do programa e a escrita num conjunto de locais inapropriados da pilha pode provocar efeitos maliciosos
        - Medida - Usar debuggers para testar SW e detetar falhas que possibilitem escrita na pilha

### 2.2.2 - Race Conditions
- Cenário em que processo atacante consegue concorrer com processo legítimo e aceder ao mesmo recurso privado/confidencial do recurso legítimo
- Vulnerabilidade de Race Conditions pode surgir quando os processos são executados  de forma faseada (atacantes podem tirar partido de intervalo em que recursos ou informação alvo possam ficar temporariamente acessíveis)

### 2.2.3 - Validação de inputs
- Cenário em que não é feita uma validação do tipo de dados pedidos aos utilizadores de uma aplicação
    - Procedimento pode causar crash de aplicações:
        - Voluntário, feita por atacantes
        - Involuntário, feita por enganos dos utilizadores
    - Medida: Aplicação ser programada para apenas aceitar inputs validados

## 2.3 - Vulnerabilidades comuns nas redes
- **Captura de informação confidencial** - Captura de mensagens que possam conter informação confidencial em texto limpo ou identificadas mesmo que encriptadas
    - Atacante *Man-In-The-Middle*, poder usar sniffer para captura de mensagens na rede.
    - *Medida* - Usar protocolos de comunicação segura que transportam mensagens cifradas em todo o caminho (ex: https - Mensagens podem ser lidas, mas não devem ser compreendidas)
- **Session hijacking** - Redirecionamento de sessão por atacante (Man-in-the-middle)
    - Atacante conseguir redirecionar para si um fluxo de comunicação entre 2 entidades atacadas (ex: ARP Spoofing)
        - **ARP (Address Resolution Protocol) Spoofing**
            - Protocolo que possibilita obter o MAC Address de um terminal a partir do seu endereço IP - Necessário para possibilitar comunicação interna numa mesma LAN
            - Cada terminal guarda cache ARP com mapeamento endereços IP/MAC de outros terminais da sua LAN com quem comunica
            - Tabela com conteúdo dinâmico em função de respostas a pedidos ARP dos outros terminais comunicantes
            - ARP Spoofing - Envenenamento de cache ARP com MAC address do terminal de atacante para redirecionamento de tráfego com destino a terminal atacado para o terminal do atacante. Se tiver sucesso, vai possibilitar session hijacking dentro de uma LAN.
            - *Medidas preventivas para evitar envenenamento de caches ARP*:
                - Usar inspeção de mensagens ARP:
                    - Switches validarem relação IP/MAC de mensagens ARP recebidas nas suas portas e bloquearem mensagens ARC com relação inválida.
                - Monitorização da rede para deteção e notificação de cenários estranhos:
                    - Uso de IDS - Monitorização de tráfego em nós centrais que encaminham tráfego
- **Denial of Service (DoS)**:
    - *Objetivo*: Impedir que um serviço opere normalmente, impossibilitando o acesso dos utilizadores/clientes legítimos ao mesmo
    - *Sintomas*:
        - Sobrecarga dos servidores com excesso de pedidos de acesso
        - Sobrecarga de rede de acesso a servidores com tráfego "inútil
    - *Exemplos de estratégias*:
        1. Exploração de vulnerabilidades dos protocolos:
            - Cliente envia n mensagens SYN para Servidor com endereços origem falsos e diferentes
            - Servidor aloca recursos até exaustão sem esperar por receber ACKs de endereços falsos
        2. Exploração de funcionalidade dos protocolos:
            - Uso indevido de endereços de difusão com pedido de resposta para endereço origem falso do alvo.
        3. Ataques DoS com exploração de funcionalidade dos protocolos:
            - Uso indevido de endereços de difusão (Smurf / Fraggle)
                - **Ataque Smurf** - Pode ser originado em simultâneo de vários atacantes coordenados:

## 2.4 - Vulnerabilidades específicas das redes sem fios
- *Uso de Hotspots maliciosos (Evil Twin) em redes Wifi públicas* - Interceção de comunicações privadas de terminais legítimos por antenas falsas e maliciosas
    - Access Point (AP) malicioso radia sinal mais forte e com o mesmo SSID de AP legítimo - Procurar que terminal alvo se ligue ao AP malicioso para poder intercetar e caputrar as suas comunicações privadas - Man In the middle
    - *Medidas preventivas* - Utilizar VPN em redes públicas
- *Uso de protocolos de comunicação inseguros* - Uso de protocolos de comunicação mais antigos e com mais vulnerabilidades, que facilitem a captura de informação privada/confidencial
    - Protocolos mais antigos são menos seguros e têm mais vulnerabilidades (ex: WEP, WPA, 2G)
    - *Medida* - Utilizar protocolos mais recentes (WPA2, WPA3, 4G, 5G)
- *Ataques por downgrade em redes móveis* - Forçar terminal móvel a mudar para tecnologia de rede mais antiga e com mais vulnerabilidades, que facilitem a captura de informação privada/confidencial.
    - *Exemplo* - Antena celular falsa envia mensagem a terminal vitima a informar que rede de tecnologia corrente ficou indisponível - terminal vai registar-se em rede de tecnologia mais antiga.
    - *Medidas preventivas*:
        - Desativar suporte a 2G
        - Aplicações sensíveis: Usar criptografia P2P (VPN)
- *Casos de fraude por SIM swapping* - Clonagem de cartões de terminais móveis para inputar atividades e custos de comunicações fraudulentas ao proprietário legítimo do cartão clonado. Atacante pode também capturar e usar informação privada do cartão para atividades ilícitas.
    - *Medida* - Deteção de cenário de fraude por operadores:
        - SIMs iguais & IMEIs diferentes & localizações diferentes - Geram tráfego em datas/horas diferentes
        - *Medida* - Utilizador usar autenticação com base na identificação do seu terminal

## 2.5 - Vulnerabilidades comuns na WEB

### 2.5.1 - Cross Site Scripting (XSS)
- Usado em aplicações Web
- Originados por scripts maliciosos que explorar vulnerabilidades para execução de ataques no acesso a sites.
- Causado por erros de filtragem de inputs de dados (ex: preenchimento de formulários com scripts)
- *Medidas preventivas*:
    - Validação de inputs de dados - Usar black list para impedir inputs com caracters e strings associados a scripts, por parte de atacantes (clientes) - impedir a entrada de código malicioso no servidor
    - Usar CPS (Content Security Policy):
        - Complemento de validações de inputs
        - Servidor especificar fontes e conteúdos confiáveis que poderão ser corridos a partir do browser - impedir a execução de código malicioso do lado do cliente

### 2.5.2 - SQL Injection
**SQL (Structure Query Language) Injection**:
    - Usado em aplicações da WEB
    - Originados por vulnerabilidades que possibilitam queries maliciosas a Bases de Dados para obter mais dados, ou danificar
    - Causado por erros de filtragem de inputs de dados
    - *Medidas* - Validação de inputs de dados:
        - Usar black list para impedir inputs de caracteres e strings associados a queries, por parte de atacantes.
        - Forçar uso de queries parametrizáveis - tratar de parâmetros como dados e não como código

### 2.5.3 - Divulgação involuntária de dados
**Exemplos**:
    - Utilizadores exporem publicamente na internet dados que revelam informação pessoal, que possam ser uteis para atacantes:
        - Ex: Fotos como comentários com informação de nomes em redes sociais - poder ajudar adivinhar passwords fracas
        - Mensagens de rede que não seguem regras de segurança e divulgam demasiada e desnecessária informação "útil" para atacantes

### 2.5.4 - Adware
**ADvertisement softWARE**:
    - Software que gera anúncios no browser do recurso atacado que geral não são provenientes dos sites visitados pelo seu utilizador:
        - Anuncios insistentes e incomodativos prejudicam o funcionamento do terminal atacado.
        - Se o utilizador alvo clicar nesses anúncios, estes podem ter malware
        - Podem-se propagar por mensagens ou acesso a sites maliciosos
    - Sintomas de Adware:
        - Aparecem novos anúncios surpreendentes, por não serem de sites visitados
        - O browser fica lento
        - O browser fica subitamente cheio de novas barras de ferramentas ou plug-ins
        - A página inicial do browser ser alterada sem o conhecimento e consentimento do utilizador

## 2.6 - Metodologias de ataque
Exemplos de metodologias de ataque a recursos informáticos:
    - **IP Spoofing** - Usado por atacantes para falsificar a sua identidade e redirecionar tráfego
        - Usar identificação falsa para dificultar a sua identificação em caso de ataques
        - Redirecionar tráfego para alvo cujo IP (legítimo e falso) é usado pelo atacante como origem do tráfego (ex: Usado em ataques DDoS)
        - *Medida preventiva* - Usar filtro de endereços permitidos em firewalls
    - **Ataques DDoS** - Ataques DoS desencadeados de forma coordenada e de várias frentes
        - *Objetivo* - Amplificar efeito DoS por ter origem em várias frentes
        - *Estratégias possíveis*:
            - **Usar redes Botnets**:
                - Envio de malware para atacar terminais de uma rede sem serem detetados pela firewall da rede e utilizador legitimo
                    - Entrar diretamente em vários terminais do DDoS
                    - Entrar num terminal da rede e propagar-se automaticamente para outros computadores, que também irão participar no DDoS (formato de vírus ou worm) (ex: Lista de contactos do email)
                    - Anunciar o estado do contágio à fonte ou coordenados, via backdoors por si criados (ex: Email)
                    - Esperar por ordem ou data/hora de ataque coordenado a alvo (formato troiano)
                - *Como evitar* - Controlo de acesso eficaz via Firewalls de redes de terminais atacados e atualizações de SW para eliminação de vulnerabilidades que possibilitem entrada de malware
                - Terminais infetados podem efetuar ataques coordenados ao mesmo alvo
            - **Exploração de mecanismos de pergunta/resposta**:
                - Exemplo: ataques via Servidores DNS
                    - Serem direcionadas para o alvo mensagens com respostas (DNS response) de dimensão bastante superior ao das mensagens das respetivas perguntas (DNS queries) feitas pelo atacante
                        - Atacante forja DNS record que origine uma DNS response com uma dimensão bastante superior à respetiva mensagem de DNS query, num servidor DNS por si controlado <-> Record Amplificador
                        - Atacante envia várias DNS queries para Record Amplificador para vários servidores DNS recursivos com o endereço de origem do pedido falsificado
                        - Servidores DNS respondem e inundam terminal do alvo com mensagens de grande dimensão
                        - *Efeitos do ataque* - Sobrecarga de terminal da vítima e possível congestão da rede de acesso a vítima
                    - *Medida preventiva* - Usando verificação da origem das mensagens DNS e impedir mensagens de/para servidores DNS suspeitos
    - **Ataques DNS** - Resolução errada de nomes DNS (DNS Spoofing)
        - Procedimentos para registar e associar a nomes verdadeiros endereços IP enganadores <-> máquinas controladas por atacantes
            - Pode afetar todos os utilizadores da rede do servidor DNS atacado - quando necessitarem de resolver o nome do IP enganador (alterado)
        - DNS não foi originalmente desenhado para evitar ataques Spoofing
        - *Características de ataque*:
            - Utiliza procedimento de envenenamento de cache DNS - efeito do ataque persiste enquanto a memória cache (dinâmica) não for limpa
            - Cache DNS - Memória onde servidores DNS guardam temporáriamente os registos dos últimos pares nome/endereço traduzidos
    - **Phishing** - Seduzir os alvos com informação apelativa para que estes ativem malware ou respondam com informação privada pedida
    - **Roubo de dados privados (com recurso a malware)** - Atacante acede e transfere dados de recurso atacado
        - Exemplo: Ataque *Reverse Shell com playlist itunes maliciosa*:
            1. Atacante envia email de phishing para interior da rede
            2. Vitima clica involuntariamente em link que vai pedir ficheiro com malware
            3. Ficheiro com malware (apple_playlist_itunes) é transferido para PC da vítima
            4. Malware instala Reverse Sheel, que inicia ligação da vitima para atacante, não sendo, ao contrário do sentido inverso, impedida pela Firewall
    - **Descoberta de passwords fracas** - Ameaça de acesso não autorizado à rede
        - Mecanismo de descoberta de passwords são facilitados se forem fracas:
            - Passwords de fácil descoberta por terceiros intrusos:
                - Constituídas por palavras de fácil memorização pelos seus utilizadores
                - Tamanho curto
                - Repetidas em diferentes serviços
            - Maior conhecimento da vida pessoal do alvo ou por divulgação involuntária de dados vai possibilitar:
                - Maior probabilidade de sucesso de adivinhar password
            - Passwords pequenas são mais fáceis e rápidas de crackar
        - **Critérios para criação de password forte**:
            - Ter pelo menos 12 caracteres (ideal 16)
            - Não conter informações pessoais do utilizador
            - Conter diferentes tipos de caracteres: letras maiúsculas/minúsculas, números e caracteres especials
            - Ser renovada periodicamente e bastante diferente da anterior
        - **Métodos de descoberta de passwords**:
            - **Password sniffing**
            - **Cracking de passwords**:
                - Brute-force - tentativa e erro de todas as combinações possíveis
                - Dicionário - consulta de listas de passwords
                    - Procedimento de tentativa de cracking offline de passwords a partir do respetivo hash.
                    - Passwords em Hash previamente capturadas por acesso ilegítimo a recurso onde são armazenadas
            - **Shoulder surf** - Observar outra pessoa a teclar a password
            - **Desk search** - Procurar por passwords escritas em papeis de secretaria
    - **Remoção de provas de ataque (com recurso a malware)** - Ações de atacante para esconder vestígios do ataque e dificultar a sua deteção e identificação.

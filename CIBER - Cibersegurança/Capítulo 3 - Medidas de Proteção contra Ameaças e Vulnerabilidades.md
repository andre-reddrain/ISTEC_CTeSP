# 3 - Medidas de Proteção contra Ameaças e Vulnerabilidades

## 3.1 - Processo da Gestão de Risco
O processo de gestão de risco:
- Exercício estruturado, no âmbito do qual a organização identifica possíveis ameaças que possam explorar vulnerabilidades dos seus ativos (recursos com valor)
    - Pressuposto - nenhum sistema informático aberto é 100% seguro - Necessário gerir e minimizar o risco
    - Contínuo ao longo do tempo para poder responder ao aparecimento de novas ameaças/riscos
    - Medidas tomadas definem a política de cibersegurança da organização
- Organizações que tendem a relaxar na politica de cibersegurança são geralmente:
    - Organizações com menos recursos informáticos e financeiros
    - Core business diferente de Tecnologias de Informação - Menos conhecimentos e sensibilidade para Cibersegurança
    - Microempresas e PME (Pequenas e Medias Empresas) - Menor mediatismo e dinheiro dessas prganizações costuma diminuir risco de ataques.
- Composto pelas seguintes fases:
    1. Estabelecimento/definição do contexto (específico para cada organização)
        - Definição de critérios, ativos e responsabilidades na gestão do risco
    2. Levantamento de risco:
        - Identificar: controlos e potenciais vulnerabilidades dos ativos identificados e analisados
        - Analisar: aplicar metodologia/critério para análise/avaliação do risco
        - Avaliar: prever o risco (impacto x probabilidade) dos ataques (conhecidos), se concretizados, para auxiliar na tomada de decisão para o seu tratamento.
    3. Tratamento do risco:
        - Identificar medidas de segurança a tomar para gerir/reduzir risco encontrado
    4. Aceitação do risco:
        - Após o seu tratamento ou se o mesmo for classificado como baixo
    5. Comunicação e consulta + monitorização e revisão do risco
        - Definição de um plano/guia de comunicação e consulta do risco
        - Monitorizar com regularidade o ambiente da organização de forma a poder detetar novos riscos e repetir o processo

## 3.3 - Medidas/controlos de tratamento do risco nas Organizações
**Principais normas de cibersegurança** - especificam medidas/controlos:
- **ISO 27001**:
    - Norma europeia/internacional que estabelece os requisitos para um sistema de gestão de segurança de informação (SGSI)
    - Fornece um conjunto abrangente de controlos e práticas na gestão de segurança da informação para as organizações.
    - Apropriado para as empresas que procuram reconhecimento que pode ser confirmado via certificação ISO 27001
- **NIST 800-37 e 800-53**:
    - Framework: Desenvolvido pelo NIST (National Institute of Standards and Technology) dos EUA, para a gestão do risco de modo a ajudar a proteger os sistemas de informação das organizações.
    - Definido com base nas normas SP 800-37 (framework de gestão de risco) e SP 800-53 (controlos de segurança e privacidade)

## 3.4 - Firewalls
**Objetivos das Firewalls**:
- Implementação de política de segurança para defesa de perímetro da rede <-> recursos informáticos de uma organização:
    - Proteção/defesa por "isolamento" de máquinas da rede interna:
        - De interações não autorizadas entre as redes interna e externa
    - Controlo de acesso, fluxo e conteúdos
        - De interações autorizadas entre as redes interna e externa
- Colocadas num único ponto de entrada/saída das fronteiras das redes a proteger:
    - Permitem implementar políticas de segurança de forma centralizada - Interceta e controla todo o tráfego que entra/sai da rede
    - Sistema de componentes de hardware e software planeado com o objetivo de restringir o acesso ao interior (e para o exterior) de uma rede:
        - Hardware - routers e equipamentos acoplados com routers
        - Software - filtros e monitores de tráfego, geralmente incorporados como funcionalidades de routers.
- **Tarefas da responsabilidades de uma Firewall da rede**:
    - Implementar políticas de segurança centralizadas:
        - Num ponto único de entrada/saída da rede
    - Disponibilizar interação com outras funcionalidades de segurança (ex: autenticação de utilizador em complemento de controlo de acesso)
- **Tarefas que não são da responsabilidade de uma Firewall da rede**:
    - Proteção contra ameaças originadas dentro da rede protegida - podem ser evitadas por firewalls de terminais (host-based) para proteção de máquinas individuais

### 3.4.2 - Componentes das Firewalls
**Componentes das Firewalls com DMZ**:
- Filtros de pacotes, para controlo de pacotes IP que transitam na comunicação de entrada e saída da rede (IN-OUT)
    - 1 Filtro para tráfego interno + 1 filtro para tráfego externo - geralmente incorporados em routers
    - Protegem a Gateway para que não possa ser contactada diretamente por pacotes do exterior.
    - Se Gateway e filtros localizados na mesma máquina <-> *máquina-bastião*
- Gateway ou filtro aplicacional - máquina com a função de controlar interações ao nível da aplicação na comunicação IN-OUT
- **DMZ (DeMilitarized Zone)**: rede de interligação entre as redes interna e externa via Gateway e filtros, que pode ser acedida por pacotes do exterior, mas que não deverão ter acesso ao interior da rede.
    - Na DMZ devem também ser colocados os servidores de acesso público localizados dentro do perímetro da rede a proteger
    - Atualmente em decrescimento por tendência de substituição por recurso a servidores em Data Centers na nuvem

### 3.4.4 - DMZ
- Sub-rede de uma organização onde se colocam servidores que podem ser acedidos do exterior (ex servidores HTTP para divulgar na internet produtos e seviços da organização/empresa)
- Servidores com sistemas e aplicações de "risco" devem poder ser "sacrificávies":
    - Servidores não devem possuir informação que não possa ser reposta na íntegra após eventual ataque (antecipar cenário de ataque)
- Redução de risco de DMZ:
    - Limitar máquinas "sacrificáveis" à sua função, minimizando a interação com outras máquinas da rede interna
        - **Objetivo** - impedir o comprometimento de máquinas da rede interna a partir de servidores públicos
    - Restringir o acesso a máquinas da DMZ única e exclusivamente ao que é esperado para as aplicações que correm nas mesmas

### 3.4.5 - Funcionalidades das Firewalls
- Funcionalidades disponibilizadas pelas Firewalls:
    - **Filtro de pacotes estático/stateless (1ªGen)**:
        - Controlo de acesso efetuado pacote-a-pacote com base na análise de conteúdos de parâmetros com valores estáticos nos cabeçalhos dos pacotes de uma ligação. Ex:
            - Endereços IP de origem e destino
            - Portos de serviços camada de transporte, de origem e destino
            - Sentido das ligações
            - Protocolos usados
        - ACL (Access Control List) - conjunto de regras definidas em filtro de pacotes para controlo de acessos de Firewall
            - Decisões de deixar passar ou bloquear/eliminar pacotes tomadas pacote-a-pacote IP
        - No modelo estático não é guardado qualquer tipo de informação sobre o estado da ligação (stateless)
        - **Vantagens**:
            - Simples de implementar e gerir
            - Baixo custo
            - Eficiente e transparente para o utilizador configurador
        - **Desvantagens**:
            - Ineficazes contra ataques baseados em falsificação de identificação
            - Conjunto de variáveis para estabelecimento de regras é curto
            - Não monitorizam o estado das ligações - ter que usar filtros dinâmicos/stateful
    - **Filtro de pacotes dinâmico/stateful (2ªGen)**:
        - Controlo de acesso efetuado com base na análise de parâmetros com valores variáveis por ligação transportados nos cabeçalhos dos pacotes examinados
        - Suporta regras de filtros de pacotes estáticos
            - Quando é estabelecida uma sessão legítima, a Firewall mantém e monitoriza o registo do estado da respetiva ligação, nomeadamente, os valores de parâmetros estáticos e variáveis específicos de cada uma:
                - Endereços e portos de serviços (parâmetros "estáticos")
                - Porto cliente (parâmetro "variável" por ligação)
                - Identificador de sessão (parâmetro "variável" por ligação)
                - Nºs de sequência (SEQN) e confirmação (ACK) de pacotes - SEQN inicial ser nº aleatório para dificultar descoberta.
            - Firewall só deve "aceitar" pacotes cujos valores dos parâmetros controlados estejam em conformidade com o estado/contexto corrente da ligação
            - No estabelecimento de uma nova sessão aplicam-se inicialmente as regras por defeito para filtragem de pacotes estática
        - Mecanismo mais seguro do que filtros estáticos - Obriga atacante a ter informação mais detalhada sobre sessões ativas
    - **Filtro/Gateway aplicacional (3ªGen)**:
        - Controlo de acesso efetuado via proxy, com base em análise de especificidades de um determinado protocolo de uma aplicação
        - Suporta regras de filtros de pacotes estáticos e dinâmicos
        - Utilizado um proxy por protocolo da aplicação, para controle das funcionalidades do respetivo protocolo.
            - Funcionalidades que não são analisadas pelos filtros anteriores
            - Filtros de pactores (1º/2ºgen) apenas analisam parâmetros de cabeçalhos de protocolos de camadas inferiores comuns a todas as aplicações
        - Permitem definir políticas de segurança flexíveis e completas, ex:
            - Definição de regras específicas por protocolo de aplicação (ex: remover attaches ".exe" proteção contra malware em emails)
        - Filtro aplicational - Exemplo de funcionamento de WAF - Web Application Firewall
    - **Next Generation Firewall (NGFW)**:
        - Combina as funcionalidades anteriores com adicionais: IDS/IPS, DPI
            - *DPI (Deep Packet Inspection)*:
                - Poder capturar e contextualizar mensagens de todos os protocolos de todas as camadas OSI de todos os fluxos de comunicações
                    - Bloquear fluxos de comunicações que não cumpram critério de segurança
                - Pode suportar outras aplicações da rede: analise de dados, estatisticas dos vários tipos de tráfego/serviços
            - *IDS (Intrusion Detection System)*:
                - Deteção de tentativas de intrusão na rede protegida pela Firewall
            - *Inspeção de tráfego SSL/TLS encriptado (https)*_
                - Poder desencriptar para poder inspecionar tráfego que chega/sai da rede protegida
        - Correlacionar a informação analisada nas diferentes funcionalidades de modo a conseguir uma resposta mais rápida e eficaz na proteção da rede
        - Facilitar correlacionar a informação analisada nas diferentes funcionalidades de modo a conseguir uma resposta mais rápida e eficaz na proteção da redes.
            - **Objetivo**: poder verificar quem, o que, onde, quando e como o tráfego ocorre

- Funcionalidade de Proxy:
    - Função de representante de serviço da rede para o exterior:
        - Gestão de ligações remotas de uma determinada aplicação.
            - Controlo de acessos por utilizador/ligação/aplicação/serviço:
                - Controlo de todas as comunicações entre um cliente (externo) e um servidor (interno) que disponibiliza a aplicação/serviço
                - Possibilidade de condicionar/bloquear ligações em função do não cumprimento de critérios de segurança definidos para uso da aplicação/serviço (ex: serviço de email - eliminar e-mails de spam)
            - Monitorização de atividades de utilizadores da aplicação - registo em logs

#### 3.4.5.5 - Firewalls SASE
**SASE (Secure Access Service Edge)**:
- O controlo de acessos centralizados da núvem com POPs (Pontos de Presença) locais - poder controlar o acesso a todo o tipo de recursos (locais e remotos), sem necessidades de usar diferentes Firewalls nos possíveis diferentes locais de acesso aos recursos a proteger
    - Apropriado para empresas com modelos de trabalho hibridos ou remotos
    - Perímetro a proteger deixa de ser fisico ou fixo - segurança definida com base na identidade e contexto dos acessos, independentemente da sua localização (*ZTA: Zero Trust Architecture*)

#### 3.4.5.7 - Network Address Translation
**Network Address Translation (NAT)**:
- Utilização de endereços privados nas comunicações internas que são convertidos em endereços públicos nas comunicações externas
    - IANA recomenda gama de endereços privados:
        - 10.x.x.x (classe A), 172.[16..31].x.x (classe B), 192.168.x.x (classe C)
- Funcionalidade complementar das Firewalls com os seguintes objetivos:
    - Esconder do exterior informação da topologia da rede
    - Impedir comunicações originadas em máquinas externas de endereçarem diretamente maquinas internas (por não conhecerem os seus endereços privados)
        - Se rede protegida não tiver servidores públicos (DMZ) não deverá ser possível iniciar comunicações do exterior por utilizadores que não tenham credenciais para autenticação na rede corporativa
    - Mascarar identificação de comunicações internas (IP Masquerading)
            - Endereços privados são repetidos em n redes privadas diferentes, enquanto endereços públicos são unívocos
- Poupança de endereços IPv4 públicos em redes de maiores dimensões, em que o tráfego interno tem um volume bastante superior ao tráfego para o exterior (objetivo adicional à segurança)
- Cenário NAT - NAT utiliza *address translation table* para efetuar mapeamento de endereços privados <-> públicos

**NAT dinâmico <-> IP Masquerading**:
- Usado no tráfego originado do interior da rede (ex: PAT (Port Address Translation))
- *Objetivo* - Esconder rede privada por detrás de endereços públicos da sua gateway
    - Dificultar a identificação dos terminais internos por usarem endereços privados
- Alteração dinâmica por gatewat de endereços de origem e portos nos fluxos de pacotes de saída da rede
    - Quando pacote interno passa por gateway para um destino exterior, esta efetua a conversão:
        - [IP Privado: Porto Privado] - [IP Público: Porto Público]
    - IP Público pode variar por comunicação ou ser o mesmo para todas as comunicações - usar PAT: Port Address Translation
    - Gateway guarda a tradução que efetuou em Address Translation Table
        - Poder redirecionar respostas vindas do exterior para o seu verdadeiro destino da rede interna, com base em informação da tabela de tradução

**NAT estático <-> Port Forwarding**:
- Usado no tráfego originado do exterior da rede
- *Objetivo* - Esconder servidores privados e topologia da rede por detrás de endereço público da sua gateway
- Alteração estática por gateway de endereços de destino nos fluxos de pacotes de entrada para acesso a servidor no interior da rede:
    - São definidas combinações: [IP Público gateway: Porto Serviço]
    - O mesmo endereço IP público poderá ser usado para endereçar diferentes servidores de diferentes serviços, com o porto do mesmo
    - Quando pacote externo passa por gateway para o servidor interno, esta efetua a conversão: [IP Público: Porto Serviço] - [IP Privado: Porto Serviço]
    - Todos os acessos externos ao servidor deverão ser redirecionados para um determinado endereço privado [IP Privado: Porto Serviço] na rede protegida
    - Endereço interno do servidor nunca é do conhecimento dos clientes externos
        - Endereço interno poderá ser alterado de forma transparente para o exterior
        - O mesmo serviço pode ter vários servidores na DMZ, podendo os pedidos do exterior ser distribuídos pelos mesmos de forma transparente para o exterior

### 3.4.6 - Caso de estudo: ACLs Cisco
**ACLs (Access Control Lists)**:
- Lista sequencial de instruções de permissão ou negação de acessos - ACEs (Access Control Entries)
- Podem ser usadas em routers (Firewalls de filtros) - Solução mais segura - serem complementadas por Firewalls/Gateways aplicacionais
- Possíveis configurações de ACLs para controlo de acessos:
    - Por protocolo, porto de serviço e endereços IP origem/destino
    - Por sentido de tráfego: entrada ou saída
    - Por interface de router
- *Aplicação* - podem ser usadas para controlo de acessos a serviços - Nas comunicações para o exterior devem ser complementadas com Gateway Aplicacional
- *Funcionamento de ACL*:
    - Corresponde a fluxograma para controlo de acessos com base em valores de parâmetros analisados. Ex:
        - Permitir acesso web (porto 80) a users da rede A, mas negar-lhes acesso aos restantes serviços
        - Negar acesso web a users de rede B, mas possibilitar-lhe acesso aos restantes serviços da rede
- *Tipos de ACLs*:
    - Standard - Para bloquear tráfego não autorizado em função do seu endereço origem
        - Localização: próxima do destino do tráfego a filtrar
    - Extended - Para bloquear tráfego não autorizado em função da sua origem, destino, protocolo e serviço, antes de entrar na rede/recurso a proteger - + precisão - + usada
        - Localização: próxima da fonte do tráfego a filtrar

## 3.5 - IDS
**Sistemas de deteção de intrusões (IDS - Intrusion Detection System)**
- *Objetivos*:
    - Deteção de atividades anormais que possam ser tentativas de intrusão:
        - Deteção por análise de tráfego recolhido na rede de tentativas de acesso (externo ou interno) não autorizado a recursos da rede protegida - possibilidade de comprometer a integridade, confidencialidade ou disponibilidade de um recurso
        - Deve ser configurado em conformidade com politica de segurança da rede a proteger
    - Notificação (via alarmes) e registo de tentativas de intrusão em logs, que poderão ser acompanhadas de:
        - Medidas reativas à deteção de intrusões (função IPS - Intrusion Prevention System)
        - Aprendizagem de medidas para evitar repetição com sucesso das mesmas intrusões
- *Funcionamento do IDS*:
    - Mecanismo (componentes de HW e/ou SW) para monitorização de tráfego na rede protegida - recolha e análise de dados, notificação, reação e aprendizagem
    - Complementam Firewalls:
        - Não impedem ataques, mas geram notificações/comprovativos
        - Além do tráfego externo, podem monitorizar o tráfego interno
            - Ataques internos são menos prováveis, mas têm mais facilidade em causar danos

### 3.5.1 - Perfil de uma Intrusão
**Perfil de uma Intrusão**:
- A configuração de um IDS deve ter em conta a capacidade de reconhecer o perfil de uma tentativa de intrusão, que pode corresponder a alguns dos seguintes passos:
    - Atacante tira partido de vulnerabilidades identificadas para aceder a rede alvo:
        - Ex: efetuar intrusão bem sucedida a uma máquina "legitima" para a usar como base para o ataque aos alvos
    - Após conseguir aceder à rede atacante tenta reconhecimento interno para identificar vulnerabilidades especificas e máquina(s) alvo:
        - Grande probabilidade de atacante originar tráfego "suspeito" para este reconhecimento - deverá ser identificado por IDS
- Atacante usa intrusão para causar danos aos alvos:
    - Roubo de informação importante
    - Destruição de informação importante
    - Alteração de informação importante
    - Negação de serviços
- Atividades que indiciam e executam ataque deverão ser reconhecidas, notificadas e registadas por IDS

### 3.5.2 - Arquitetura de IDSs
**Arquitetura funcional de IDSs**:
- Geralmente constituida por 4 módulos:
    - E-Boxes - Sensores de captura de eventos elementares
    - A-Boxes - módulos de análise
    - D-Boxes - módulos de armazenamento de eventos (provas forenses) e de resultados da análise com deteção de intrusões (alarmes)
    - C-Boxes ou R-Boxes - módulos com medidas de reação a alarmes

### 3.5.3 - Métricas de Qualidade de um IDS
**Qualidade de um IDS**:
- Métricas de qualidade em função das intrusões que são capazes de detetar:
    - Percentagem de nº de intrusões verdadeiras detetadas
    - Percentagem de nº de alarmes sem intrusão <-> falsos positivos
        - Falsos positivos em demasia - desacreditam um IDS
    - Percentagem de nº de intrusões verdadeiras sem alarmes <-> falsos negativos (mais grave do que falsos positivos)
        - Falsos negativos em demasia - tornam um IDS inútil, no context no qual é usado
    - Melhor qualidade de um IDS deverá ser caracterizada por:
        - Maior percentagem de nº de intrusões verdadeiras detetadas
        - Menor percentagem de geração de falsos negativos e falsos positivos

### 3.5.4 - Honey pots
**Potes de mel (honey pots)**
- Componente de IDS cujo objetivo principal é atrair e iludir um atacante:
    - Conduzir atacante a atacar recursos aparentemente interessantes, mas sem utilidade em termos de rede
    - Desviar atacante de recursos organizacionais importantes
    - Devem ser colocados na entrada da rede para "facilitar" a intrusão
- Objetivo secundário:
    - Recolha de provas de ataques (informação forense, como prova de crime para responsabilização criminal), exemplo:
        - Modo de intrusão
        - Origem de ataques
        - Rasto deixado pelo atacante
    - Alimentar mecanismos de aprendizagem automática (ex: assinaturas de ataques/intrusões)

### 3.5.5 - Classificação de IDSs
**Classificação de IDSs**:
- IDSs podem ser classificados em função das diversas características operacionais:
    - Método de deteção:
        - IDSs baseados em assinaturas
        - IDSs baseados em comportamento
    - Celeridade de deteção:
        - IDSs baseados em "tempo-real"
        - IDSs baseados em tempo-real virtual
    - Reatividade à deteção:
        - IDSs ativos / IPSs
        - IDSs passivos
    - Tipo colaboração à deteção:
        - Singular
        - Cooperativa
    - Fonte de eventos capturados:
        - IDSs baseados em terminais: H-IDS (Host based IDS)
        - IDSs baseados em redes: N-IDS (Network based IDS)
- IDSs baseados em **assinaturas** (ou conhecimento):
    - Efetuam análise de atividades do sistema para procura de padrões de ataques/intrusões conhecidos <-> assinaturas. Exemplos:
        - Assinatura de TCP SYN flood <-> ausência excessiva de TCP ACKs
        - Assinatura de um vírus <-> existência de strings conhecidas no código do sw malicioso
            - Programa de anti-virus tradicional <-> IDS baseado em assinaturas
    - *Vantagem*:
        - Devem conseguir detetar todos os ataques por si conhecidos
    - *Desvantagens*:
        - Só detetam ataques conhecidos
        - Necessitam de uma base de dados de assinaturas sempre atualizada
- IDSs baseados em **comportamento** (ou anomalias):
    - Procuram definir um padrão de comportamento normal de um sistema
        - Deteção de desvios abruptos a esse comportamento <-> intrusões
        - Requer normalmente que o sistema passe por um período de aprendizagem para construção de padrão de normalidade - utilização de técnicas:
            - IA
            - Análise e modelação estatística
        - *Vantagens*:
            - Mais abrangentes, mas ainda menos precisos do que IDSs baseados em assinaturas
            - Tendência para serem maioritários no futuro - deverão conseguir inferir e detetar ataques desconhecdiso (0-day)
        - *Desvantagens*:
            - Possível dificuldade no ajuste do grau de sensibilidade à deteção de intrusões

## 3.6 - SIEM (Security Information and Event Management)
**Objetivos dos SIEM**:
- Duas funcionalidades: SIM (gestão de info) + SEM (gestão de eventos):
    1. Gestão da informação de segurança (SIM):
        - Ligar SIEM aos diferentes fontes/ativos importantes da rede selecionados para recolha de dados para posterior monitorização de cibersegurança
        - Definição de quais os cenários de recolha de dados para logs em conformidade com política de cibersegurança da organização - filtrar volume de dados a recolher
        - Recolha periódica por SIEM de logs de todos os ativos e com critérios selecionados
    2. Gestão de eventos de segurança (SEM):
        - *Analytics*: Identificação de todos os eventos de segurança classificados como relevantes em conformidade com política de cibersegurança da organização:
            - SIEM deve ter a capacidade de compreender, identificar e distinguir um evento de cibersegurança dos eventos de comportamento normal da rede
        - *Alertas*: geração e alarmes em "tempo-real" para eventos detetados e classificados como de maiores ameaças - pedir intervenção de equipa de SOC
        - *Armazenamento*: deeventos detetados como ameaças para análise em tempo posterior (auditoria e provas forenses)
        - *Visualização*: geração de reports com gráficos user-friendly dos eventos em "tempo-real" ou on-demand - facilitar o report de incidentes de segurança a entidades internas (monitorização e aprendizagem) e externas (auditoria e provas forenses)

### 3.6.2 - SIEM / IDS
**SIEM / IDSs**:
- SIEM é complemento mais completo de IDS
    - SIEM é apropriado sobretudo para organizações com muitos recursos informáticos e que processam grandes volumes de tráfego
- SIEM usa informações de logs recolhidos de diversos elementos de rede: IDSs, IPSs, Firewalls, Servidores, Bases de Dados, etc, para agregar, correlaccionar, analisar e identificar os eventos de segurança
- SIEM possibilita fazer análise mais completa e contextualizada do estado de cibersegurança da rede
    - Poder tomar medidas para além da deteção de tráfego hostil de intrusões (função IDS)
        - Por se basear na análise de mais informação - maior facilidade na identificação grande variedade de ameaças
    - *Objetivo*: Poder detetar vulnerabilidades de cibersegurança em toda a rede antes de estas serem exploradas (ex: intrusões com sucesso)

### 3.6.3 - SOAR
**SOAR (Security Orchestration, Automation and Response)**:
- Orquestração de interações entre vários nós/aplicações de segurança para análise "comportamental" (IA) dos fluxos de dados correlacionados e contextualizados na rede
    - Possibilitar resposta automatizada e rápida a ameaças/intrusões detetadas
    - Possibilitar a produção de relatórios de gestão dos eventos de segurança detetados
- Facilita a gestão mais eficaz do aumento do nº de incidentes de segurança
    - Apropriado para redes que processam grandes volumes e de várias fontes de tráfego (+ risco)
- Possibilita reduzir MTTD (Mean Time To Detect), MTTR (Mean Time To Response) e risco - resposta mais eficiente contra deteção de ameaças
- É complemento de SIEM
- Efetua orquestração/coordenação de interações entre vários elementos de segurança - possibilitar análise "inteligente & eficaz" e respostas maioritáriamente automatizadas - conseguir tempos de deteção e resposta mais rápidos contra ameaças detetadas
- Comparação entre IDS/SIEM/SOAR:
        <table>
        <tr><th><th>IDS<th>SIEM<th>SOAR
        <tr><td><b>Função principal:<td>Deteção de atividades suspeitas<td>Correlação e contextualização de eventos de segurança para deteção de incidentes<td>Orquestração, automação e resposta automatizada de incidentes
        <tr><td><b>Operação com base<td>Tráfego na rede / Hosts<td>Logs com eventos de ativos importantes da rede<td>Integração e interação entre ferramentas de segurança
        <tr><td><b>Correlação entre diferentes elementos da rede<td>Não (apenas IDS cooperativo)<td>Sim<td>Sim
        <tr><td><b>Resposta automatizada<td>Não (apenas IPS)<td>Limitada (gera ações simples)<td>Sim
        </table>

## 3.7 - Arquitetura Zero Trust (ZTA)
**Principais objetivos de ZTA <-> ZST (ZT Security)**:
- Eliminar a confiança implícita (Zero Trust)
    - Zero Trust parte do princípo de que nenhum utilizador, aplicação, dispositivo ou rede é confiável por defeito, mesmo que esteja dentro da organização
    - *Objetivo*: reduzir drasticamente a superfície de ataque
    - Ex: Medida: autenticar, autorizar e encriptar todos acessos internos e externos
- Verificar continuamente a identidade e o contexto (*Never trust, always verify*)
    - Antes de conceder acesso, o sistema valida quem é o utilizador, qual o dispositivo usado, a localização, o horário, configurações de segurança, etc...
    - *Objetivo*: assegurar que apenas identidades legítimas e verificadas podem aceder a recursos a proteger
    - Ex: Medida: uso de 2FA, negar acesso a dispositivos com SW desatualizado
- Aplicar o princípio do "*Menor privilégio (Least Privilege)*"
    - Cada utilizador, seviço ou aplicação deve ter apenas permissão de acesso ao mínimo e explicitamente necessário de recusos
    - *Objetivo*: limitar o impacto de acessos indevidos (intencionais ou acidentais)
    - Ex: Medida: usar IAM (*Identity and Access Management*) - controlar quem tem acesso, a que recursos e o que pode fazer nos mesmos
- Segmentar e proteger recursos individualmente
    - Usar microsegmentação, isolando redes, recursos e dados
    - *Objetivo*: impedir que um atacante que consiga aceder a um recurso, postriormente consiga um possível deslocamento lateral para outros recursos dentro da rede
    - Ex: Medida: uso de firewalls em terminais e VLANs para separação de tráfego/serviços
- Monitorização continua:
    - ZT exige monitorização constante, análise comportamental e contextualizada, auditorias e deteção de anomalias
    - *Objetivo*: identificar rápidamente comportamentos suspeitos para poder reagir imediatamente a deteção de tentativas de intrusão
    - Ex: Medida: usar IDSs/SIEMs/SOARs
- Autenticação adaptativa:
    - O acesso deve ajustar-se automaticamente a deteção de mudanças de contexto, como, localização e comportamento do utilizador
    - *Objetivo*: tornar a segurança dinâmica e resiliente
    - Ex: Medida: se detetado um comportamento estranho de um utilizador - reduzir privilégios ou bloquer a sua conta automaticamente

## 3.8 - Mecanismos de testes de defesa de redes
**Objetivos**:
- Efetuar testes a elementos de defesa e recursos das redes para identificar possíveis falhas ou vulnerabilidades em, por exemplo:
    - Firewalls
    - IDSs/SIEMs/SOARs
    - Servidores
    - Base Dados
- Falhas ou vulnerabilidades detetadas (novos riscos) deverão ser corrigidas
    - Implementação de medidas de cibersegurança adicionais e necessárias para minimizar a probabilidade da sua exploração (redução do risco)
- Testes recorrem a aplicações que usam vulnerabilidades conhecidas para testar se mecanismos de defesa das redes estão preparados para impedir as mesmas (ex: pentests e análise de vulnerabilidades)
- Testes de penetração em redes (Pentests), usados em 2 cenários:
    1. Peritos de cibersegurança para testar e analisar mecanismos de defesa da rede, contra ataques externos, para melhoria dos mesmos
        - Com conhecimento e em coordenação com os elementos do SOC da rede
    2. Hackers para testarem vulnerabilidades de redes para possíveis ataques
        - Sem conhecimento dos elementos do SOC da rede
    - *Objetivos*:
        - Antecipar possíveis ataques externos à rede - Encontrar falhas na rede, por exploração de vulnerabilidades detetadas, antes que estas possam ser exploradas por atacantes
        - Auditar mecanismos de cibersegurança - verificação das configurações por entidade perita externa em coordenação com elementos de SOC da rede testada
        - Formação em cibersegurança:
            - Possibilidade de elementos de SOC de rede testada:
                - Identificarem possíveis impactos de vulnerabilidades existentes
                - Estudarem as medidas necessárias a implementar para reduzir os seus riscos
        - Testar novas tecnologias/equipamentos - Testes de cibersegurança antes de entrada ao serviço ou entrega a clientes - mais fácil, seguro e económico testar antes de colocar ao serviço
- Análise de vulnerabilidades (de gestão de risco) / Pentests:
<table>
<tr><th><th>Análise de vulnerabilidade<th>PENTEST
<tr><td><b>Periocidade<td>Uma vez por mês<td>Pelo menos uma vez por ano
<tr><td><b>Relatório<td>Uma lista abrangente de vulnerabilidades, que pode incluir falsos positivos<td>Lista as vulnerabilidades que foram exploradas com sucesso
<tr><td><b>Quem executa o serviço<td>Equi+a de segurança interna ou empresa especializada (geralmente de forma automatizada)<td>Empresa especializada em PENTEST (geralmente com interatividade humana)
<tr><td><b>Resultado esperado<td>Identificar uma ampla gama de possíveis vulnerabilidades (Análise teórica - não explora Vulner)<td>Apresentar vulnerabilidades que foram exploradas (Análise prática - explora Vulner)
</table>

### 3.8.1 - Testes de penetração de redes
Exemplos de aplicações de pentests:
- *Port scanners* - deteção de serviços da rede
- *Sniffers* - captura e análise de tráfego confidencial na rede
- *Password crackers* - adivinhar passwords fracas
- *Multiusos* - diferentes módulos de pentesting

### 3.8.7 - Repositório de vulnerabilidades
**Objetivo** - Registar todas as vulnerabilidades detetadas:
- Possibilitar a monitorização do aparecimento de novas vulnerabilidades, de diversas origens não correlacionadas
- Necessidade de criação de repositório centralizado - criadas 2 bases de dados:
    1. **MITRE (Massachusetts Institute of Technology Research & Engineering)**
        - Sempre que uma nova vulnerabilidade é descoberta e reportada:
            - Ser cadastrada na lista de CVEs (Common Vulnerabilities and Exposures) do repositório MITRE, com a seguinte sintaxe:
                - CVE-YYYY-NNNN
                    - Ano em que foi reportada: YYYY
                    - Identificador: NNNN
    2. **NVD (National Vulnerability Database)**

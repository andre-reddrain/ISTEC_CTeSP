# 1 - Introdução às redes e comunicação de dados

## 1.1 - Definição de rede de computadores
**Rede de computadores**: 
- Conjunto de computadores/terminais ligados entre si ou via outros elementos de rede (encaminhadores) através de um determinado suporte físico (meio de transmissão).
- Meio de transmissão suporta a comunicação de dados entre os computadores/terminais, de acordo com determinadas regras (protocolos).

**Componentes de uma rede de computadores**:
- Computadores (no mínimo 2). Ex: PCs, impressoras, servidores, tablets, smartphones...
- Elementos de rede encaminhadores. Ex: Routers, switches...
- Meios de transmissão. Ex: Wireless, Cabo coaxial, fibra ótica, fio de cobre...

**Objetivos de uma rede de computadores**:
- Permitir que diversos computadores comuniquem entre si e disponibilizem serviços
    - Aumento de produtividade + redução de custos financeiros e humanos

**Sem** uma rede de computadores:
- O acesso à informação e serviços seria muito mais lento e com mais custos
- Os serviços online não seriam possíveis
- A produtividade das pessoas e empresas seria muito menor e com mais custos
**Com** uma rede de computadores:
- O acesso à informação passa a ser independente da localização <-> globalização via internet

**Vantagens para as empresas**
- Aumentar produtividade por uso de serviços de rede:
    - Partilha de recursos - Colocar programas, equipamentos e dados à disposição dos seus colaboradores
    - Comunicação pessoal - E-mail, chat, videoconferência...
    - Facilitar gestão/escalabilidade - Possibilidade de adicionar recursos e utilizadores à rede mantendo a performance e regras de funcionamento corrente
- Redução de custos por economia na:
    - Gestão da informação
    - Comunicação
    - Partilha de recursos

**Vantagens para as pessoas individuais**:
- Aumentar produtividade por uso de serviços de rede:
    - Comunicação pessoal
- Acesso a informação remota
- Entretenimento interativo
- Redução de custos na comunicação & acesso à informação

## 1.2 - A internet como sistema de comunicação planetário
**Internet**
- Possibilita o acesso universal a informação/serviços remotos
    - Globalização <-> Independência da localização do utilizador e da informação/serviço a que pretende aceder
    - Transformação Digital <-> "Informação/serviços à distância de um click"
- Definição técnica da internet:
    - Conjunto de redes e respetivos terminais
        - Heterogéneas, interligadas entre si
        - Independentes de tecnologia e meio físico de transmissão
        - Têm em comum a utilização dos protocolos TCP ou UDP e IP
    - Protocolos de transporte de mensagens (C4 OSI): TCP ou UDP
        - **TCP (Transmission Control Protocol)** - Garante fiabilidade da ligação com sincronismo entre terminais (sync)
        - **UDP (User Datagram Protocol)** - Não garante a fiabilidade da ligação e sem sincronismo entre terminais (async)
    - Protocolo de encaminhamento de pacotes (mensagens C3 OSI)
        - **IP (Internet Protocol)**
            - Possibilita o encaminhamento de mensagens, em pacotes IP, entre dois terminais, entre quaisquer redes
            - Suporta a comunicação planetária/universal entre pessoas e/ou máquinas

## 1.3 - Atributos da comunicação de dados
Atributos da comunicação de dados: funcionalidades que definem as características dos protocolos de comunicação
- Tipo de comutação - Modo de encaminhamento das mensagens na rede: Circuitos, Pacotes
- Tipo de caminhos - Definição do modo de caminho das mensagens na rede:
    - Com conexão / Orientados à ligação
    - Sem conexão / Não orientados à ligação
- Garantia de **QoS (Quality of Service)** - Definição da prioridade para processamento e encaminhamento de mensagens na rede
- Controlo de erros - Deteção da eventual existência de erros nas mensagens transportadas ao longo da rede que levam à sua retransmissão
- Controlo de fluxo - Possibilidade do recetor informar o emissor da quantidade de dados que pode receber deste, num dado instante

### 1.3.1 - Tipos de comutação
**Comutação de circuitos (CS: Circuit Switch)**
- Necessário "conquistar" vários troços dedicados da rede, desde o emissor ao recetor, até estabelecer um circuito dedicado
- Possibilidade de não ser possível transmissão de mensagens por congestionamento da rede:
    - Impossível estabelecer ligação dedicada (não existência de "linha livre"). Ex: Pico de tráfego de serviço de telefone móvel na passagem de ano
- Após estabelecimento de ligação (circuito) não existem atrasos de propagação:
    - Rede não necessita de efetuar processamento ou armazenamento da informação que nela circula
- Apropriada para aplicações de ritmo constante. Ex: Voz / telefone tradicional

**Comutação de Pacotes (PS: Packet Switch)**
- Mensagens de diferentes ligações e utilizadores partilham recursos da rede (não usam ligações dedicadas)
    - Não necessário estabelecimento de circuito dedicado, entre emissor e recetor
        - Sempre possível transmissão de mensagens do emissor para a rede
    - Necessidade de processamento de mensagens em nós da rede
        - Possibilidade de existência de atrasos em virtude de:
            - Sobrecarga de tráfego na rede
            - Possibilidade de perdas de mensagens
- Atualmente é o tipo de comutação mais utilizado. Ex: Redes IP multi-serviços
    - Possibilita a implementação de mecanismos de garantia de QoS para transportar aplicações multimédia
    - Maior flexibilidade:
        - Potencia uma melhor ocupação dos recursos da rede, por partilha dos mesmos
        - Facilita a utilização/definição de caminhos alternativas, durante a comunicação
        - Podem transportar quaisquer tipo de serviços - Pode ser usado com serviços "com conexão" e "sem conexão"
    - Mais económico e simples:
        - Equipamentos mais económicos, de mais simples configuração e gestão do que os equipamentos das redes de comutação de circuitos
        - Dados podem ser transmitidos via internet (rede de comutação de pacotes)

**Linha comutada**
- Circuito temporário e previamente estabelecido antes de se iniciar comunicação
- Ligação dedicada estabelecida apenas durante o intervalo de tempo necessário para a transmissão de informação entre 2 entidades
- Após terminação de ligação, os recursos ocupados são libertados
- Apropriado para entidades geradoras de pouco tráfego. Ex: Utilizadores de serviço telefónico

**Linha alugada/dedicada**
- Circuito permanente com ocupação permanente de recursos
- Não necessário estabelecimento de chamada para iniciar transmissão de dados
- Maior segurança e disponibilidade de recursos
- Apropriado para entidades geradores de muito tráfego. Ex: empresas
- Atualmente têm a concorrência do serviço **VPN (Virtual Private Network)** que possibilita o transporte de dados privados de forma segura em redes públicas. Mais económico

### 1.3.2 - Tipos de Serviços de caminhos
**Serviços com conexão/orientados à ligação**
- Todas as mensagens da mesma ligação fazem o mesmo percurso - garante ordem cronológica na chegada
- Modelados a partir do sistema telefónico tradicional, ligação com 3 fases:
    1 - Estabelecimento
    2 - Transferência de dados
    3 - Terminação
- Pode ser usado em Comutação de circuitos ou pacotes
- Apropriado para aplicações mais prioritárias. Ex: transferência de dados por circuito virtual

**Serviços sem conexão/não orientados à ligação**
- Mensagens da mesma ligação podem não fazer o mesmo percurso - Não garante ordem cronológica na chegada
- Modelados a partir do sistema de correio postal
- Comunicação a partir de mensagens independentes (Datagramas) - Mesmo destino / percursos diferentes
- Só pode ser usado em comutação de pacotes - Ex: aplicações menos prioritárias, tipo ping

### 1.3.3 - Garantia de QoS
**Garantia de Qualidade de Serviço (QoS)**
- A qualidade de um serviço é um atributo que define a sua prioridade, avaliada pelos seguintes parâmetros:
    - Perdas de dados, por:
        - Sobrecarga da rede
        - Encaminhamento incorreto
    - Atrasos ou variações de atrasos (jitter) na receção de dados, por:
        - Ritmo de transmissão requerido
- Rede deve satisfazer QoS, acordado para suporte a determinado serviço, podendo usar os seguintes mecanismos (redes PS):
    1 - Marcação, diferenciação e encaminhamento de mensagens em função das respetivas diferentes prioridades
    2 - Reserva de recursos para encaminhamento de mensagens em função das respetivas prioridades
    3 - Sobredimensionamento da rede

### 1.3.4 - Controlo de erros
**Controlo de erros de transmissão**
- Anexação à mensagem original de informação adicional redundante para controlo de erros de transmissão no recetor/destinatário
    - n = total de bits na mensagem
    - m = número de bits que representam a mensagem original da aplicação
    - r = número de bits adicionais de redundância/verificação
    - Verificação de erros:
        - Emissor: ${r_e}$ = f(${m_e}$)
        - Recetor: 
            se ${r_r}$ = f($m_r$) -> Não deteta erro!
            se ${r_r}$ != f($m_r$) -> Deteta erros e pede retransmissão de mensagem
    - Exemplo de função f(${m_e}$) = checksum -> Somatório de blocos de dados da mensagem

### 1.3.5 - Controlo de Fluxo de dados
**Controlo de fluxo de dados (Flow Control)**
- Protocolo que "regula" o débito da transmissão
    - Recetor informa emissor de timing e volume de dados máximo que pode receber num dado instante -> Evitar necessidade de retransmissão de mensagens por erros/perdas <=> aumento desnecessário de tráfego na rede. Ex: Janela deslizante, usado em TCP
- Terminais emissor e recetor podem não ter a mesma capacidade de processamento de dados. Ex: transmissão de um ficheiro para uma impressora, sobrecarregada com muitas outras tarefas em espera para processamento/impressão
- Garantir que recetor consegue processar/armazenar volume de mensagens recebidas

## 1.4 - Redes fiáveis
Características necessárias para redes fiáveis:
- Tolerância a falhas
    - Usar uma topologia de rede com redundância de recursos e caminhos. Ex: Nós de rede com mais do que uma ligação a outros nós
- Escabilidade
    - Usar uma topologia de rede que possibilite a sua expansão sem impactar utilizadores e tráfego existente. Ex: Estrela com switch
- Garantia de QoS
    - Usar protocolos de routing com diferenciação de tráfego por prioridades. Ex: Protocolo Diffserv
- Segurança
    - Usar mecanismos de segurança/proteção das redes. Ex: Firewall

## 1.5 - Segurança nas Redes
**Objetivos da segurança informática**:
- Proteger e controlar o acesso a recursos informáticos:
    - Informação(dados) e serviços - Equipamentos que suportam a informação e serviços
    - Impedir o acesso por entidades não autorizadas. Ex: Intrusos, inimigos, espiões...
    - Garantir a segurança da informação/serviços e equipamentos - Confidencialidade, Integridade e Disponibilidade
- Garantir comunicação segura de informação privada (Cibersegurança)
- Garantir boa reputação do detentor dos recursos informáticos
- Entidades vulneráveis -> todas as que estão ligadas em rede

**Pilares da cibersegurança**:
- Confidencialidade
    - Garantir que dados privados não são acedidos por outras entidades (sem autorização). Ex: Transmissão de dados entre 2 entidades não devem ser legíveis/compreendidos por terceiros:
        - Comunicação de dados com encriptação
        - Gestão segura de chaves de encriptação
- Integridade
    - Garantir que podem ser detetadas alterações a dados transmitidos:
        - Acidentalmente por erros de transmissão
        - Propositadamente por terceira entidade sem autorização
    - Autencidade - Garantir a identidade/autoria da origem dos dados transmitidos
    - Não-Repudiação - Impossibilidade de negação de identidade/autoria
- Disponibilidade - Garantir a operacionalidade da rede e seviços/informação

**Medidas de Cibersegurança**
- Objetivo: Defesa contra ameaças e ataques via redes de comunicação
- Como funcionam:
    - Prevenção - Medidas para impedir sucesso de ataque. Ex: Firewall - Efetuar controlo de acessos a rede
    - Deteção - Medidas para detetar ataque. Ex: Uso de IDS (Intrusion Detection Systems)
    - Recuperação - Medidas para reposição do estado total ou parcial antes do ataque. Ex: Backups periódicos

## 1.6 - Tendências das Redes
Tendências recentes das Redes:
- Internet of Things (IoT)
    - Possibilitar a objetos/maquinas inanimados (dispositivos) comunicar via redes IP/Internet. Ex: Contador de eletricidade que comunica resultados de contagem para central via rede elétrica
- Computação na nuvem
    - Possibilitar a entidades o acesso a recursos de software e/ou hardware remotos, dedicados ou partilhados, físicos ou virtuais, via internet ou links dedicados
    - Possibilitar redução de custos + maior agilidade para expansões de recursos
        - Exemplo de recursos: CPU, memória, armazenamento, etc...
        - Localização de recursos remotos: Data Centers de fornecedores de serviços na cloud...
- Software Defined Network (SDN)
    - Possibilitar separar controlo (routing) e dados (mensagens). Ex: Suportar gestão centralizada de controlo de nós de rede a partir de controlador SDN

# 2 - Introdução aos Protocolos
**Protocolos**:
- São regras para possibilitar a comunicação entre diferentes elementos de rede, mesmo com possíveis diferentes formas de representar a mesma informação. Ex: Suportar a comunicação entre elementos de rede de diferentes fabricantes

## 2.2 - Estrutura de mensagens de protocolos
Objetivos da segmentação de dados (na Origem A) em pacotes mais pequenos:
- Redução dos atrasos de tempo de transmissão
- Redução da ocupação de recursos da rede. Ex: Buffers de nós
- Adaptação a formato de protocolos de camadas inferiores
- Possibilidade de intermediar pacotes de diferentes utilizadores
- Cumprir requisitos de dimensão máxima de mensagens nas redes (MTU - Maximum Transmission Unit)

**Cabeçalhos**
- Campo com informação de controlo dos protocolos anexada a campo dados
- Necessários para novos pacotes após divisão de dados na Origem
- Maior complexidade - Introdução de mais informação de controlo
    - Menor tamanho de pacotes - Maior % de informação de controlo (cabeçalho)
    - Convém existir compromisso entre tamanho de campos de dados e cabeçalho
- Terminal Destinatário efetua reagrupamento de informação dividida na Origem + remoção de cabeçalhos de camadas inferiores

## 2.3 - Modelo OSI (Open Systems Interconnection)
![alt text](./Imagens/Modelo_OSI.png)

## 2.4 - O Modelo TCP/IP
**Modelo TCP/IP** - Usado em redes IP externa (internet) ou internas (intranets)
- Camadas 7&6&5 de OSI concentradas numa única camada de aplicação

## 2.5 - Os standards IEEE

### 2.5.1 - Os standards IEEE / Ethernet
Ethernet: Norma 802.3 IEEE para LANs
- Define tecnologia inicialmente mais utilizada em LANs:
    - Efetua controlo de erros (LLC) e acesso a meio de transmissão (MAC)
    - Suporta diferentes topologias e meios de transmissão - Inicialmente utilizada apenas com topologia Bus e cabos de cobre (LANs)
    - Baixo custo
    - Fácil de implementar e gerir
- Flexível: Evoluiu para também suportar outras topologias, redes maiores e meios de transmissão mais rápidos (atualmente mais usados)
    - Topologia Estrela
    - Redes MANs e WANs com Gigabit Ethernet
    - Meios de transmissão fibra ótica
- Usa CSMA (Carrier Sense Multiple Access) / CD (Collision Detection) para controlo de acesso a rede com meio de Tx partilhado half-duplex
    - CSMA - Terminais escutarem meio de Tx para só transmitirem quando este estiver livre
    - CD - Reforçar sinal de colisão para melhor ser ouvido por todos os terminais de uma LAN (ex: Bus) - Meio Tx ocupado até sinal de colisão ser removido da rede
        - Colisão acontece quando 2 terminais detetarem o meio de Tx livre em simultâneo -> podem transmitir as suas mensagens em simultâneo

# 3 - Projeto de LANs

## 3.2 - Meios de transmissão
**Meios de Transmissão**
- Guiados
    - Fio de Cobre
        - Transmissão de sinais elétricos
        - Económico e de fácil instalação
        - Baixa imunidade a interferências
        - Grande atenuação -> Menor espaçamento entre repetidores
        - Velocidades médias/elevadas de transmissão em distâncias curtas
        - Aplicações - Telefone, xDSL
    - Cabo coaxial
        - Transmissão de sinais elétricos
        - Maior imunidade a interferências -> Menor atenuação que fio de cobre
        - Maiores velocidades de transmissão em maiores distancias do que cobre
        - Aplicações TV Cabo, LANs, DOCSIS
    - Fibra óptica
        - Transmissão de sinais óticos a uma dada frequência
            - Conversão de sinal elétrico de terminais/nós em luz para fibra
        - Componentes das fibras: Vidro (melhor desempenho), Plástico
        - Pequeno tamanho e peso
        - Maior imunidade a interferências - Não são afetadas por campos eletromagnéticos externos
        - Baixa atenuação - Maior espaçamento entre repetidores
        - Suporte a grandes velocidades de transmissão
        - Desvantagens "relativas"
            - Instalação mais cara do que cobre
            - Ligações de terminações (alinhamento de fibras)
        - Aplicações
            - Interligação de redes
            - Comunicações de longa distância, MANs e WANs
            - Ligações residenciais
        - Incentivos
            - Necessidade de maior largura de banda para satisfazer massificação de conteúdos mais exigentes. Ex: Canais TV/streaming em FullHD e UltraHD
            - Desempenho de cobre e cabo condicionados por atenuação e limitados a pequenas distancias
- Não guiados
    - Sem fios (wireless)
        - Transmissão de ondas eletromagnéticas através do ar
            - Ondas Rádio
            - Micro ondas
            - Bluetooth. Ex: Comunicação entre equipamentos pessoais
        - Tecnologia recente e com rápida expansão
        - Velocidades de transmissão em crescimento, mas inferiores a fibra
        - Aplicações
            - Suporte a mobilidade - Utilizadores com atividades que implicam deslocações frequentes
            - Locais de difícil geográfica/económica instalação de cablagem
            - Instalações temporárias
            - Poupança de cablagem

## 3.3 - Elementos encaminhadores
Elementos de rede que possibilitam a comunicação entre redes e terminais não ligados diretamente entre si <-> Interligação de redes e terminais
    - Encaminham mensagens. Não são a origem nem destino das mesmas
    - Possibilitam a comunicação/conectividade entre redes e terminais sem que estes tenham que estar ligados diretamente entre si

**Tipos de elementos encaminhadores**
- Repetidores
    - Regeneram (amplificam/repetem) sinal - Expandem o sinal para além dos limites dos cabos
    - Não processam conteúdo do sinal (mensagens) - Funções de camada Física (Camada 1 OSI)
- Hubs
    - Concentrador de tráfego de diferentes terminais. 1 Terminal -> 1 Porta
    - Utilizados para ligar terminais de uma mesma LAN
    - Não processam conteúdo do sinal
        - Não lêm mensagens que recebem
        - Mensagens recebidas numa porta são encaminhadas para todas as restantes
        - Funções de camada Física (Camada 1 OSI)
        - Podem ter função de repetidor em redes de maiores dimensões
- Switch
    - Encaminhador de mensagens
        - Verificação de endereço de terminal destino
        - Comutação de trama apenas para porta com ligação a terminal destino
        - Funções de camada Ligação de Dados (Camada 2 OSI)
    - Usado em topologia em estrela
- Bridge
    - Ligação de 2 ou mais segmentos de LANs (Bridged LAN)
        - Receção e processamento de tramas (mensagens C2)
            - Verificação de endereço de terminal destino
            - Encaminhamento de tramas entre diferentes segmentos apenas se o terminal destino se encontrar noutro segmento - Possibilita o isolamento de tráfego entre diferentes LANs
        - Possibilita ligação de LANs de diferentes tecnologias
- Routers
    - Possibilitam encaminhamento de mensagens entre diferentes redes
        - Redes autónomas e de diferentes tecnologias/dimensão (heterogéneas)
        - Encaminhamento de pacotes entre redes com base em processamento de endereço destino público unívoco de significado universal (IP) -> Função camada Rede 3 (OSI)
    - Contêm tabelas de routing com informação de caminho apropriado
        - Estáticas -> Caminho invariável
        - Dinâmicas -> Caminho variável em função do estado da rede, com base no uso de protocolos de routing dinâmico
            - Controlo mais eficaz de cenários de congestionamento
            - Apropriado para redes maiores

Encaminhamento de mensagens feito com base em endereços de cabeçalhos
- Endereço local: Identificador físico local em placa NIC (Network I/f Card) - MAC Address (Sub-camada da camada 2 OSI)
- Endereço público: Identificador lógico universal - IP Address (Camada 3 OSI)

## 3.4 - Topologias de Rede
Topologias de rede - Define a forma como os nós da rede estão ligados entre si - Dispositivos de conectividade e terminais

**Tipos de topologias**
- **Malha completa (full-mesh)** - Todos os nós estão ligados entre si
    - Elevado desempenho
    - Elevada redundância de caminhos
    - "Atraso" mínimo - Não há necessidade de encaminhamento de mensagens entre nós intermédios
    - Dificuldade de expansão/gestão da rede
    - Dispendiosa
    - Topologia pouco realista e pouco usada em LANs
- **Malha incompleta** - Apenas alguns nós estão ligados diretamente entre si
    - Bom desempenho
    - Mais utilizada que malha completa
        - Menor custo que malha completa
        - Mais fácil expansão/gestão de rede
    - "Atraso" de mensagens dependente de necessidade de passagem por nós intermédios
- **Estrela** - Todos os nós periféricos com ligações dedicadas a umm nó central
    - Encaminhamento de mensagens entre terminais periféricos sempre via nó central
        - "Atraso" máximo de um nó intermédio
    - Escalável - Facilidade de expansão/gestão
        - Regras de funcionamento da rede independentes de nº de terminais periféricos
        - Capacidade limitada pelo nº de portas do nó central
    - Baixo custo
    - Desempenho e fiabilidade limitados pelo nó central - Single Point of Failure
        - Nó central mais complexo - Encaminhador de mensagens. Ex: Switch
        - Nós periféricos mais simples - Não encaminham mensagens. Apenas originam e recebem mensagens
- **Árvore** - Cascata de estrelas ligadas entre si
    - Características semelhantes às de topologia em estrela
    - Várias hierarquias de nós
- **Bus** - Todos os nós estão ligados a um meio de transmissão comum
    - Requer mecanismos de controlo de acesso ao meio de Tx partilhado. Ex: CSMA
        - Só pode transmitir um nó de cada vez
        - Para evitar colisões nós só podem transmitir mensagens quando o meio de Tx estiver livre
        - Em caso de colisão -> Sinal de colisão é reforçado para melhor informar todos os nós para não transmitirem mensagens
    - Facilmente expansível
    - Baixo custo
    - Cada nó monitoriza o bus e copia apenas as mensagens que lhe são destinados
    - Mensagens removidos nas terminações do Bus
    - Corte no meio de transmissão pode originar paragem da rede
- **Anel** - Cada nó está ligado a outros dois nós (ponto-a-ponto) em circuito fechado
    - Nós com 2x funções - Encaminhador + terminal
        - Encaminhador - Nós com função de garantir conectividade da rede
        - Terminal - Nó pode originar e receber mensagens. Ex. LANs
    - Dificil gestão
        - Falha num nó e/ou quebra numa ligação pode originar paragem da rede
        - Inserção/remoção de um nó pode originar paragem da rede
    - Requer mecanismo de controlo de acesso ao meio. Ex: Token Ring

### 3.4.1 - Método de controlo de acesso CSMA (Carrier Sense Multiple Access)
- Método de acesso a meio de transmissão partilhado "com competição entre terminais" mais popular
- Apropriado para LANs
    - Tempos de propagação pequenos - Semelhante entre todos os pares fonte-destino
    - Estado do canal pode ser detetado rapidamente - Quando computador transmite uma mensagem todos os outros podem detetá-la rapidamente

**CSMA**
- Processo de transmissão de mensagens em meio de transmissão partilhado (usado em redes Ethernet)
    1 - Nó emissor de mensagens escuta se meio de transmissão está livre
    2 - Se estiver ocupado -> esperar que meio fique livre para transmitir
    3 - Quando estiver livre -> transmite mensagem
        - Mensagem transmitida com sucesso sem erros (cenário ideal)
        - Mensagem colide com outra mensagem de outro nó - necessário retransmitir mensagem
    4 - Se necessário retransmissão de mensagem
        - Emissor espera tempo aleatório para poder retransmitir mensagem

### 3.4.2 - Métodos de Acesso ao meio de tranmissão: Token Ring
- Método de controlo de acesso por passagem de testemunho (token ring)
    - Método de acesso a meio de transmissão partilhado "sem competição entre terminais"
    - Testemunho (Token)
        - Padrão especial de bits que circula de nó para nó
        - Cada nó pode transmitir/receber uma mensagem quando receber testemunho
    - Transmissão de uma mensagem
        - Nó insere a sua mensagem à frente do testemunho e atrás de outras eventuais mensagens que já circulam
        - Após volta completa, a mensagem inserida é a 1ª mensagem do "comboio"
            - Facilita remoção da mensagem, por nó emissor da mesma
            - Nó emissor vai poder fazer o controlo de integridade da mensagem transmitida e após volta completa na rede
        - Monitorização de mensagens
            - Todos os nós monitorizam as mensagens que estão na rede
            - Responsáveis por identificar e aceitar as mensagens que lhe são dirigidas
            - Reencaminhar para nó seguinte todas as mensagens

## 3.5 - Topologias de redes Wi.Fi
Rede Local sem Fios Wi-Fi (Wireless Fidelity) ou WLAN (Wireless LAN)
- Redes estruturadas - Todas as comunicações de terminais móveis feitas via ponto de acesso
    - Rede residencial - Geral/1 célula
    - Rede empresarial - N células - Mais capacidade e cobertura
        - Configuração em infra-estrutura - Conjunto de células interligadas por infra-estrutura da rede
        - Sobreposição de células - Possibilita roaming com conectividade
- Tecnologia recente e em grande expansão
- Sujeitas aos riscos de segurança das redes sem fios
    - Comunicação utiliza canais de rádio em modo de difusão (broadcast)
    - Qualquer terminal dentro da área de difusão de antena transmissora pode receber o sinal com a informação transmitida, mesmo que só tenha 1 destinatário
- Cada célula usa um canal com uma determinada freqência específica para ambos os sentidos da comunicação (half-duplex): Uplink e downlink
- Mecanismos de suporte à evolução de velocidades de transmissão em meio de transmissão sem fios partilhado
    1 - Uso de canais com maior largura de banda em frequências mais elevadas. Ex: 5GHz
    2 - Uso de múltiplos pares de antenas emissoras/recetoras
    3 - Uso de tecnologias de transmissão de dados com maior eficiência espectral -> Transmitir maior volume de dados nos mesmos recursos rádio
- Controlo de acesso à rede rigoroso com protocolo CSMA/CA
    - Sinais rádio broadcast mais sujeitos a fenómenos naturais de interferências e atenuações
        - Ex: Em função de diferentes localizações e distâncias de terminais a Ponto de Acesso
            - Maior necessidade de evitar colisões de mensagens para compensar fenómenos naturais da transmissão de sinais rádio
            - Possibilitar uma melhor qualidade das redes Wi-Fi
        - Após verificação que canal está livre (**CSMA - Carrier Sense Multiple Access**)
            - Comunicar à rede (Ponto de Acesso) intenção de usar meio de transmissão durante intervalo de tempo <-> enviar mensagens **RTS (Request To Send)**
            - Necessário receber "ok" da rede para poder transmitir <-> receber mensagem **CTS (Clear To Send)**
            - Objetivo - Controlar problema de terminal escondido
        - CSMA/CA - Método de acesso "híbrido" entre "com competição" (CSMA - Ouvir meio) e "sem competição" (CA - Questionar AP)

### 3.5.1 - Método de Acesso ao meio de transmissão - CSMA/CA
**Problema do terminal escondido**:
    - Quando duas estações terminais estão em extremos de uma célula de um mesmo AP, pode acontecer o seguinte fenómeno:
        - Ambas as estações conseguem transmitir/receber sinais para/do AP no centro da célula
        - Pelo menos uma das estações não consegue ouvir os sinais da outra
    - Necessário mecanismo em que estações antes de transmitirem as suas mensagens devem perguntar ao AP se meio de transmissão está livre
        - Porque apenas AP consegue escutar e controlar toda a célula

# 4 - Protocolos da camada de Transporte (C4 OSI)

## 4.1 - Protocolo TCP
Protocolo TCP (Transmission Control Protocol)

Principais objetivos/características
1 - Com conexão entre extremidade/terminais
- Comunicação síncrona
    - **Necessário pré-estabelecimento de conexão entre terminais emissor/recetor antes de se iniciar a comunicação**
    - Controlado o estado da ligação com base em valores de 2 parâmetros de controlo: nº de sequência (SEQ) e nº de confirmação (ACK)

2 - Fiabilidade/controlo de erros, para garantia de:
- Comunicação sem erros
    - Utilização de parâmetros e temporizadores para controlo de erros
    - Usa protocolo da janela deslizante para retransmissão de dados com erros ou não-confirmados
    - Ordem cronológica
        - Numera mensagens para controlo da ordem de sequência das mesmas
        - Caso segmentos cheguem a destino por ordem não sequencial, podem ser reordenados antes de ser enviados para aplicação

3 - Controlo de fluxo
- Usa protocolo da janela deslizante para controlo de quantidade de máxima de dados que o recetor consegue receber num determinado instante
    - Com base em valore de parâmetro de controlo - WIN (Window Size)
- Minimizar a necessidade de retransmissão de dados por indisponibilidade de recetor

4 - Efetua um único fluxo de dados
- Controlo efetuado sobre um único fluxo que pode transportar dados de diferentes aplicações entre os mesmos terminais
    - Mensagens TCP podem transportar dados de diferentes aplicações
- Sem comutação
- Sem garantia de QoS
- Pouco apropriado para aplicações de tempo-real
    - Controlo de erros - Potencia atrasos e repetições
- Mensagem TCP chama-se Segmento
    - Unidade básica de transmissão
- Endereço camada 4 - Porto
    - Porto identifica um fluxo de dados de uma ligação entre 2 terminais

## 4.2 - Protocolo UDP
Protocolo UDP (User Datagram Protocol)
- Principais objetivos/características
    - Protocolo camada 4, alternativo a TCP, porque não podem correr juntos
    - Simples: Não efetua controlo de erros e fluxo de dados
    - Sem conexão entre extremidades - **Comunicação assíncrona**
    - Utilizado em aplicações onde a prontidão ou simplicidade são mais importantes do que a exactidão, apropriado para aplicações
        - Tempo real e que não há tempo para retransmissões. Ex: Voz
        - Transmitem pequenas quantidades de informação

## 4.3 - Protocolos para aplicações de tempo-real

### 4.3.1 - RTP
RTP (Real time Transport Protocol)
- Protocolo para transporte de dados de aplicações em tempo-real, que suportem um ligeiro nível de perdas e atrasos temporais em redes IP
- Transporta fluxo de dados + informação com temporização de pacotes (**timestamp nos cabeçalhos**)
- Identifica o tipo de informação transportada
- Numera e controla pacotes transmitidos
- Complementa UDP, por aplicações de tempo-real não serem "compatíveis" com TCP - Não faz sentido pedir a retransmissão de eventuais mensagens erradas em aplicações de tempo-real
- Controlo de fluxo de dados RTP é feito por outros protocolos. Ex: RTCP
- ***Pacote RTP é encapsulado em mensagem UDP**

### 4.3.2 - SCTP
SCTP (Stream Controlo Transmission Protocol)
- Protocolo para controlo de transmissão fiável (sem erros) de fluxos de dados com as seguintes principais diferenças/evolução de TCP:
    - Orientado á ligação com 4 wat hand-shaking para maior segurança
    - Controlo de Multi-streams: Gestão individual de fluxos de dados de diversas aplicações entre 2 entidades terminais SCTP
    - Multi-homing - A cada extremo de uma ligação SCTP, pode ser atribuído mais do que um endereço IP
        - Melhor tolerância a falhas - Possibilitar seleção de caminhos alternativos com base nos diferentes endereços IP do multi-homing
- Garante transferência fiável de dados por fluxo, semelhante a TCP
- Apropriado para aplicações de controlo de streaming de audio / vídeo
- Pacote SCTP é encapsulado em pacote IP
- Principais diferenças entre SCTP e TCP:
    1 - SCTP tem maior proteção contra ataques DoS
    2 - Associação SCTP possibilita gestão individual de múltiplos fluxos por aplicação
    3 - Multi-homing - Terminais poderão ser endereçados por mais do que um endereço IP
        - Associação SCTP pode ser definida pelo uso de mais do que 1 par de endereços IP entre cada terminal cliente/servidor
            - 1ºpar - IP1 Cliente / IP3 Servidor
            - 2ºpar - IP2 Cliente / IP4 Servidor
        - Possibilitar redundância de comunicação
            - Se ligação do 1º par falhar -> Comunicação efetuada via ligação do 2º par
            - Maior independência de caminhos de associações -> Maior eficácia

# 5 - Protocolo IP e auxiliares

## 5.1 - Principais características do IP
IP possibilita um serviço mais flexível e económico (Packet Switch) do que redes tradicionais (Circuit Switch)
- Pode ser usado para todos os serviços: Tradicionais (dados) e multimédia com requisitos QoS (redes multi-serviços)
- Utilização de novos protocolos para implementação de mecanismos de QoS. Ex: RTP, SCTP...

**Protocolo IP**
- Funções de camada de rede C3 OSI
    - Encaminhamento de pacotes entre redes heterogéneas
        - Com base em endereçamento público e unívoco de significado univoco de significado universal
    - Comutação de pacotes
    - Não orientado à ligação - Diferentes pacotes podem fazer diferentes caminhos da mesma ligação
    - Não fiável - Não faz controlo de erros e de fluxo
    - Não garante QoS -> Best Effort

## 5.3 - Classes de Endereços IP
**Endereços IP**
- Todas as redes públicas e parte dos seus elementos (routers/terminais) possuem um endereço IP público e unívoco, atribuído por entidades coordenadoras:
    - IANA - Internet Assigned Numbers Authority, que delega em continentais
        - Europa: RIPE - Reseaux IP Européens (RIR), que delega em nacionais
            - Portugal: FCCN - Fundação para computação científica nacional
- Todos os endereços IP (v4) possuem um comprimento de 32 bits, divididos em 3 campos:
    - Identificador de classe de endereço
    - Número de identificação de Rede
    - Número de identificação de Host (Elemento Terminal de Rede)
- Conceito inicial:
    - Definição de classes de endereços -> Possibilitar a definição de redes de diferentes dimensões
    - Definidos 5 tipos de formato, distinguidos pelo número de terminais:
        - Classe A - 126 redes com ~16.7 milhões de terminais cada
        - Classe B - ~16 mil redes com ~65 mil terminais cada
        - Classe C - ~2 milhões de redes com 254 terminais cada
        - Classe D - Endereços para multicasting
        - Classe E - Reservado para uso futuro
- Problemas do endereçamento IP v4
    - Crescimento de redes -> redução da quantidade de endereços IP disponíveis
    - Utilização de classes não optimiza o uso de endereços IP
    - Tabelas de routing com dimensão limitada e com dificuldade em acompanhar o crescimento de nº de redes endereçáveis
- Soluções temporárias
    - Routing sem classes
        - **Subnets** - Segmentação de terminais em sub-redes para facilitar gestão interna de redes
        - **Supernets** - Agregação de endereços class "C" contínuos para optimizar utilização de espaço de endereçamento IPv4
        - Endereços privados/NAT
            - Uso de endereços privados em comunicações internas, apenas convertidos em endereços públicos para comunicações externas
        - Endereços dinâmicos - Uso de endereços variáveis de uma pool de endereços partilhados
- Solução efetiva - **IPv6** - nova versão com endereços de 128 bits

## 5.4 - Routing sem classes
Routing sem classes
- Pode ser usada em supernets ou subnets
- Usa notação CIRD
    - a.b.c.d / x
        - x -> nº de bits que identificam rede -> 32-x bits identificam Terminal
        - a.b.c.d -> bits comuns de prefixo para identificação de endereço IP de **supernet (x < 24) ou subnet (x > 24)**, em endereços de classe C
        - Routers usam máscara para obter bits que representam Rede&Subnet
            - Construção da máscara: bits Rede(%Subnet) -> "1's"; bits Terminal: "0's"
    - Exemplos:
        - Classe C: 200.1.128.0 e 200.1.129.0 => $2^9$ endereços Terminal (2 redes)
            - Supernet com 2 Redes -> 200.1.128.0/23, Máscara = 255.255.254.0
            - Se 4 subnets na mesma rede -> 200.1.128.0/25, Máscara = 255.255.255.128

## 5.5 - Subnets
- Facilitar gestão interna de redes
    - Segmentação do comapo terminal em: Subnet + Terminais por Subnet
    - Possibilitar melhorar gestão, desempenho e segurança dos serviços
        - Separação/Redução de tráfego (por subnet) -> Melhor gestão e desempenho
        - Isolamento de fluxos de tráfego por serviço -> Complementar VLANs -> + Segurança -> Separação/isolamento completo de fluxos de tráfego de diferentes serviços por Subnet/VLAN
        - Melhor gestão/aproveitamento dos endereços internos da rede
    - Invisíveis para redes exteriores, porque não leem campo terminal
- Divisão de campo nº terminal, em 2:
    - Nº Subnet (prefixo) + Nº Terminal em Subnet (sufixo)
        - Cálculo de subnet para encaminhamento de pacotes por routers

- **VLSM - Variable Lenght Subnet Mask**
    - Possibilidade de criar vários níveis hierárquicos de subnets de dimensão variável dentro de uma mesma rede. Exemplo:
        - Nível 1 (SN1): 2 bits de Subnet -> 4 Subnets/16382 terminais (14 bits)
        - Nível 2 (SN2): 4 SN1, com 4 bits de Subnet -> Cada SN1 com 16 subnets/1022 terminais (10 bits)
        - Possibilita optimização de atribuição de endereços IP dentro de uma rede

## 5.6 - Supernets
- Solução para optimizar utilização de endereçamento IPv4
    - Combater desperdício de endereços IP públicos
        - Campo terminal representado por nº de bits necessário para endereçar todos os terminais da rede (e não múltiplo de octeto, como nas classes)
        - Agregação de múltiplos endereços de classe C, contínuos - com prefixo igual
    - Simplificar tabelas de routers -> 1 só entrada para endereços agregados da supernet com o mesmo prefixo.
    - Ex: Rede com 500 terminais
        - Com classe - Endereço classe B -> Desperdício de ~65 mil endereços
        - Com CIRD -> Agregação de 2 endereços classe C, contínuos.
            - Ex: 200.1.128.0 e 200.1.129.0 <=> 200.1.128.0/23
- Supernet para simplificação de tabelas de router
    - Ex: Agregação de endereços contínuos, para poderem ter o mesmo prefixo de rede
        - Classe C: 192.168.0.0 a 192.168.255.0 -> $2^{16}$ endereços terminal
            - Supernet com 256 redes "C" agregadas numa única rede: 192.168.0.0/16

## 5.7 - Endereços Privados / NAT - Network Address Translation
Objetivo inicial - poupança de endereços IP públicos
- Uso de endereços privados em comunicações internas, convertidos em endereços públicos apenas para comunicações externas
    - Comunicação interna - Utilização de endereços privados
    - Comunicação para exterior - Mapeamento de endereço privado em endereço público
    - Conversão de endereço privado <-> público efetuado em Firewall/NAT device
Objetivo adicional - Maior segurança
- Utilização de endereços privados para mascarar identidade de rede/terminais e poder esconder informações da rede (ex. Topologia, nº de terminais)
- Endereços privados são repetidos em n redes privadas diferentes, enquanto endereços públicos são unívocos
NAT dinâmico <-> IP Masquerading
- Usado no tráfego de saída da rede
- Objetivos:
    - Segurança - Esconder rede privada por detrás de endereços públicos da sua gateway
    - Poupança de endereços públicos
- Alteração dinâmica por gateway de endereços de origem e portos nos fluxos de pacotes de saída da rede
    - Quando pacote interno passa por gateway para um destino exterior, essa efetua a conversão
    - IP Público pode variar por comunicação ou ser o mesmo para todas as comunicações
    - Gateway guarda a tradução que efetuou no Address Translation Table
NAT estático <-> Port Forwarding
- Usado no tráfego de entrada da rede
- Objetivos
    - Segurança - Esconder servidores privados e topologia da rede por detrás de endereço público da sua gateway
    - Poupança de endereços públicos
- Alteração estática por gateway de endereços de destino nos fluxos de pacotes de entrada para acesso a servidor no interior da rede

## 5.8 - Endereços Dinâmicos
Objetivo inicial -> Poupança de endereços IP públicos em ISPs, quando:
- Nº total de users > Nº endereços IP > Nº total de users activos em simultâneo
- Deixa de ser necessário uso de endereços estáticos para todos os clientes
    - Com uso de NAT e serviços sempre ligados este objetivo perde relevância
Objetivo adicional -> Facilitar gestão de atribuição de endereços em redes IP
- Usa protocolo **DHCP (Dynamic Host Configuration Protocol)**
    - Clientes requisitam endereço variável e temporário (lease time) a servidor DHCP, que gere uma pool de endereços dinâmicos
    - No final do acesso (ou expiração do lease time) o endereço é libertado para outros clientes. Se lease time expirar com cliente ainda ligado -> Lease time renovado e endereço mantido
- Não deve ser usado se Cliente disponibilizar serviços públicos (ex. Web Server)
- Necessário atualização de servidor DNS com novos endereços ->+ complexidade
    - Mais apropriado usar endereços IP estáticos

### 5.9.1 - Protocolos "auxiliares" de IP/Gestão: ICMP
Protocolos "auxiliares" de IP
- Funcionam na camada 3 com funcionalidades adicionais às do IP
- Protocolo **ICMP (Internet Control Message Protocol)**
    - Protocolo de controlo e testes
        - Gestão da rede
        - Teste de acessibilidade de destinos (redes ou terminais)
        - Transporte de alterações de tabelas de routing
    - Utiliza IP para envio de mensagens
    - Ex: **Ping**
- Protocolo **ARP (Address Resolution Protocolo)**
    - Utilizado para obter endereço Camada 2 (MAC) a partir de endereço IP => MAC Address é necessário para switches conseguirem encaminhar mensagens entre terminais da mesma LAN
    - Exemplo de funcionamento de protocolo ARP
        1 - Terminal que necessita de saber endereço MAC de um outro terminal, com quer comunicar, envia mensagem ARP request contendo o IP desse terminal em difusão para toda a rede
        2 - Switch/Router recebe e reenvia ARP request em difusão para todos os terminais da rede e aguarda ARP reply apenas do terminal do IP, para reencaminhar ARP reply apenas para terminal requisitante
        3 - Enquanto estiver ligado, o terminal mantem tabela/cache ARP com todos os pares IP/MAC dos elementos com o qual comunicou -> Objetivo: apenas ser necessário resolver 1x endereço IP/MAC

206 a 209
212 a 214
222 a 224
227 a 229
234
236 a 237
241 a 242
246
248
252
256 a 258
260 a 261
265
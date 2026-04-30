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

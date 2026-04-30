# 4 - Protocolos da camada de Transporte (C4 OSI)

## 4.1 - Protocolo TCP (Transmission Control Protocol)

**Principais objetivos/características**
1. Com conexão entre extremidade/terminais
    - Comunicação síncrona
        - **Necessário pré-estabelecimento de conexão entre terminais emissor/recetor antes de se iniciar a comunicação**
        - Controlado o estado da ligação com base em valores de 2 parâmetros de controlo: nº de sequência (SEQ) e nº de confirmação (ACK)

2. Fiabilidade/controlo de erros, para garantia de:
    - Comunicação sem erros
        - Utilização de parâmetros e temporizadores para controlo de erros
        - Usa protocolo da janela deslizante para retransmissão de dados com erros ou não-confirmados
        - Ordem cronológica
            - Numera mensagens para controlo da ordem de sequência das mesmas
            - Caso segmentos cheguem a destino por ordem não sequencial, podem ser reordenados antes de ser enviados para aplicação

3. Controlo de fluxo
    - Usa protocolo da janela deslizante para controlo de quantidade de máxima de dados que o recetor consegue receber num determinado instante
        - Com base em valore de parâmetro de controlo - WIN (Window Size)
    - Minimizar a necessidade de retransmissão de dados por indisponibilidade de recetor

4. Efetua um único fluxo de dados
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

## 4.2 - Protocolo UDP (User Datagram Protocol)
- Principais objetivos/características
    - Protocolo camada 4, alternativo a TCP, porque não podem correr juntos
    - Simples: Não efetua controlo de erros e fluxo de dados
    - Sem conexão entre extremidades - **Comunicação assíncrona**
    - Utilizado em aplicações onde a prontidão ou simplicidade são mais importantes do que a exactidão, apropriado para aplicações
        - Tempo real e que não há tempo para retransmissões. Ex: Voz
        - Transmitem pequenas quantidades de informação

## 4.3 - Protocolos para aplicações de tempo-real

### 4.3.1 - RTP (Real time Transport Protocol)
- Protocolo para transporte de dados de aplicações em tempo-real, que suportem um ligeiro nível de perdas e atrasos temporais em redes IP
- Transporta fluxo de dados + informação com temporização de pacotes (**timestamp nos cabeçalhos**)
- Identifica o tipo de informação transportada
- Numera e controla pacotes transmitidos
- Complementa UDP, por aplicações de tempo-real não serem "compatíveis" com TCP - Não faz sentido pedir a retransmissão de eventuais mensagens erradas em aplicações de tempo-real
- Controlo de fluxo de dados RTP é feito por outros protocolos. Ex: RTCP
- ***Pacote RTP é encapsulado em mensagem UDP**

### 4.3.2 - SCTP (Stream Controlo Transmission Protocol)
- Protocolo para controlo de transmissão fiável (sem erros) de fluxos de dados com as seguintes principais diferenças/evolução de TCP:
    - Orientado á ligação com 4 wat hand-shaking para maior segurança
    - Controlo de Multi-streams: Gestão individual de fluxos de dados de diversas aplicações entre 2 entidades terminais SCTP
    - Multi-homing - A cada extremo de uma ligação SCTP, pode ser atribuído mais do que um endereço IP
        - Melhor tolerância a falhas - Possibilitar seleção de caminhos alternativos com base nos diferentes endereços IP do multi-homing
- Garante transferência fiável de dados por fluxo, semelhante a TCP
- Apropriado para aplicações de controlo de streaming de audio / vídeo
- Pacote SCTP é encapsulado em pacote IP
- Principais diferenças entre SCTP e TCP:
    1. SCTP tem maior proteção contra ataques DoS
    2. Associação SCTP possibilita gestão individual de múltiplos fluxos por aplicação
    3. Multi-homing - Terminais poderão ser endereçados por mais do que um endereço IP
        - Associação SCTP pode ser definida pelo uso de mais do que 1 par de endereços IP entre cada terminal cliente/servidor
            - 1ºpar - IP1 Cliente / IP3 Servidor
            - 2ºpar - IP2 Cliente / IP4 Servidor
        - Possibilitar redundância de comunicação
            - Se ligação do 1º par falhar -> Comunicação efetuada via ligação do 2º par
            - Maior independência de caminhos de associações -> Maior eficácia

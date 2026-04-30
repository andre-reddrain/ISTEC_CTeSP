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
Elementos de rede que possibilitam a comunicação entre redes e terminais não ligados diretamente entre si <-> Interligação de redes e terminais:
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

(TODO Adicionar imagens para os tipos de topologias)

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
    1. Nó emissor de mensagens escuta se meio de transmissão está livre
  	2. Se estiver ocupado -> esperar que meio fique livre para transmitir
    3. Quando estiver livre -> transmite mensagem
        - Mensagem transmitida com sucesso sem erros (cenário ideal)
        - Mensagem colide com outra mensagem de outro nó - necessário retransmitir mensagem
    4. Se necessário retransmissão de mensagem
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
    1. Uso de canais com maior largura de banda em frequências mais elevadas. Ex: 5GHz
    2. Uso de múltiplos pares de antenas emissoras/recetoras
    3. Uso de tecnologias de transmissão de dados com maior eficiência espectral -> Transmitir maior volume de dados nos mesmos recursos rádio
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

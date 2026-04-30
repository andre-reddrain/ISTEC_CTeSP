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
        1. Terminal que necessita de saber endereço MAC de um outro terminal, com quer comunicar, envia mensagem ARP request contendo o IP desse terminal em difusão para toda a rede
        2. Switch/Router recebe e reenvia ARP request em difusão para todos os terminais da rede e aguarda ARP reply apenas do terminal do IP, para reencaminhar ARP reply apenas para terminal requisitante
        3. Enquanto estiver ligado, o terminal mantem tabela/cache ARP com todos os pares IP/MAC dos elementos com o qual comunicou -> Objetivo: apenas ser necessário resolver 1x endereço IP/MAC

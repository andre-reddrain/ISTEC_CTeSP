# Capítulo 4 - Protocolos de comunicação segura e Serviços VPN

Requisitos para protocolos de suporte a comunicação segura:
- Autenticação de entidades
- Gestão segura de chaves de criptografia
- Confidencialidade dos dados transmitidos
- Controlo de integridade e autenticação de origem de dados transmitidos

Segurança implementada ao nível da rede:
- "Dispensar" soluções de segurança ao nível da camada de aplicação
    - Evitar custo de desenvolvimento/aquisição
    - Evitar peso computacional de programas de segurança ao nível da camada de aplicação - potenciar menor desempenho da aplicação
- Invisível para aplicações e utilizadores
- Uso obrigatório em redes públicas

## 4.1 - Protocolos SSL/TLS
**Secure Socket Layer (SSL) / Transport Layer Security (TLS)**
Sub-protocolo Handshake:
- Autentica as entidades em comunicação com recurso a certificados:
    - Autenticação de servidor é obrigatória e a do cliente opcional:
        - Autenticação de servidor por cliente - após browser/cliente receber certificado de servidor vai validar a sua autenticidade com base em: assinatura, identidade e periodo de validade. Se certificado for validado - servidor autenticado
- Negocia os algoritmos usados pelo Protocolo de Registos
    - Estabelece as chaves de cifra e MAC das mensagens
    - Inicializa e sincroniza o estado da sessão e respetivas ligações
- Autenticação com base em certificados (em alternativa a passwords):
    - **Vantagens**:
        - Maior segurança (baseado em criptografia assimétrica)
        - Dificil de falsificar ou roubar - especialmente se o certificado estiver protegido por hardware
        - Facilitar a autenticação mútua
        - Permite autenticação sem password, reduzindo risco de phishing
    - **Desvantagens**:
        - Mais complexo para implementar e gerir (emissão, revogação, renovação de certificados)
        - Requer infraestrutura PKI (Public Key Infrastructure) - + dispendioso
        - Utilizadores podem necessitar de dispositivos compatíveis
Sub-protocolo de Registos:
- Chamado após handshake
- Controla confidencialidade de dados
- Controla integridade e autenticação de origem da informação
- Controla o transporte de dados do servidor para o cliente e vice-versa. Exemplo de procedimentos na transmissão (na receção são efetuados os inversos):
    1. Fragmentação de dados em blocos
    2. Compressão de blocos
    3. Calcula e adiciona MAC a cada bloco, usando algoritmo e chave de encriptação definidos em Handshake
    4. Encripta bloco com MAC, usando algoritmo e chave de encriptação definidos em Handshake
    5. Entrega de criptograma a camada 4 para serem transmitidos para a rede
Sub-protocolo de Alerta:
- Utilizado para envio de mensagens de notificações entre as duas entidades comunicantes, para informação de cenários de erro
Sub-protocolo de Mudança de Cifra:
- Utilizado para possibilitar mudança de chaves de encriptação na transmissão de blocos de uma sessão em curso
Exemplos de protocolos de serviços que utilizam SSL/TLS:
- SMTP + SSL/TLS = SSMTP
- TELNET+ SSL/TLS = TELNETS
- HTTP + SSL/TLS = HTTPS

## 4.2 - Protocolo IPSec
Suporta o transporte segudo de pacotes IP - Autenticação, encriptação e controlo de integridade na camada de rede entre duas entidades peer
Principais características do IPSec (IP Security):
- Estabelecimento de associações de segurança entre as entidades comunicantes, com base nas seguintes funcionalidades:
    - Funcionalidades de segurança via cabeçalhos de extensão:
        - **AH: Autentication Header** - Garante autenticidade e integridade de pacotes IP com base em MAC (Checksum)
        - **ESP: Encapsulation Security Payload** - Garante confidencialidade e integridade de pacotes IP
        - Cabeçalhos transportam informação de controlo das funcionalidades
    - Dois modos de funcionamento:
        - Transporte - Proteção de dados do utilizador. Utilizado em comunicação extremo-a-extremo
        - Túnel - Proteção de todo o pacote. Pacote é tratado como dados de um novo pacote com um novo header
- **Associações de Segurança**:
    - Conjunto de regras e parâmetros que possibilitam o estabelecimento de uma comunicação segura IPSec entre duas entidades comunicantes:
        - Regras de segurança acordadas em handshake entre terminais:
            - Algoritmo de encriptação (ESP)
            - Algoritmo de autenticação (AH)
            - Algoritmo de controlo de integridade (AH e ESP)
        - Parâmetros relevantes especificados ou acordados:
            - Identificador de SA: SPI (Security Parameter Index)
            - Parâmetros de autenticação e encriptação (acordadas em handshake) - chaves de cifra a usar
            - Endereço IP destino
            - Modo do protocolo usado: túnel ou transporte (especificado pelo utilizador)
        - São unidirecionais:
            - Para comunicações bidirecionais é necessário uma SA para cada direção da comunicação
        - São utilizados protocolos de gestão de chaves na internet para estabelecimento de SAs (handshake), exemplo:
            1. Autenticação das entidades comunicantes
            2. Estabelecimento de 1ª SA para handshake seguro de regas e parâmetros de suporte a comunicação de dados segura
            3. Estabelecimento de 2ª SA para transmissão de dados de forma segura, com base em regras e parâmetros definidos em handshake deSA
            4. Transmissão de dados protegidos em SA IPSec

- **Comparação entre protocolos IPSec e SSL/TLS**
<table>
<tr><th><th>IPSec<th>SSL/TLS
<tr><td><b>Camada OSI<td>Camada 3 (Rede)<td>Camada 5/7 (Sessão/Aplicação)
<tr><td><b>Proteção<td>Todo o tráfego IP<td>Sessões de aplicações
<tr><td><b>Granularidade<td>Rede <-> Rede<td>Aplicação <-> Aplicação
<tr><td><b>Portas/protocolos<td>ESP (50), UDP 500 (IKE)/4500 (ESP)<td>TCP 443 (https)
<tr><td><b>Autenticação<td>Chaves, certificados<td>Certificados
<tr><td><b>Casos típicos<td>Site-to-site, VPN permanente<td>Client-to-site (acesso remote), web, APIs
<tr><td><b>Complexidade<td>Maior<td>Menor
</table>

## 4.3 - VPN (Virtual Private Networks)
**Objetivo**:
- Possibilitar interligação de terminais e redes privadas através de canais de comunicação seguros e virtualmente dedicados (túneis) de redes públicas
**Vantagens**:
- Redução de custos:
    - Substituição de linhas alugadas/dedicadas na interligação de LANs e WANs, por uso de internet
    - Poupança de deslocações físicas a local de equipamentos remotos - facilitar tele-trabalho
- Tirar partido da evolução da Internet:
    - Possibilidade de utilizar diferentes terminais e redes de acesso
    - Tendência para aumento de velocidade + redução de custos
- Contornar restrições locais de acessos remotos
    - Acesso é visto como sendo originado na localização de terminação da VPN e não na localização do cliente
**Desvantagem**:
- Possível degradação do desempenho pela utilização da internet (não garante QoS)
**VPN SSL/TLS**:
- Usada maioritariamente em cenários client-to-site
- + flexível - orientado para acessos a determinados serviços:
    - Na rede corporativa o controlo de acesso é feito também por trás da Firewall darede - + granularidade no controlo de acessos
    - Possibilitar acesso remoto apenas a determinados serviços da rede
**VPN IPSec**:
- Usada maioritariamente em cenários site-to-site
- Orientado para acesso a rede - possibilita acesso remoto de forma transparente a recursos da rede corporativa (como se acesso fosse local)
# 1 - Introdução e conceitos básicos de Cibersegurança

## 1.1 - Objetivos da Cibersegurança
**Proteger os recursos/ativos informáticos** - 
    - Informação/dados e serviços + equipamentos que os suportam (alojam, transportam e processam)
        - Impedir o acesso, alteração e danificação por entidades não autorizadas (ex: Intrusos, concorrentes, inimigos, espiões)
    - Garantir a Confidencialidade, Integridade e Disponibilidade (CID) dos recursos a proteger nos seus 3 estados:
        - Armazenamento, transporte e processamento
**Garantir boa reputação do detentor dos recursos informáticos**.
**Entidades vuneráveis -> todas as que estão ligadas em rede**
    - Governos, empresas, pessoas individuais.

**CNCS (Centro Nacional de Cibersegurança)**:
    - Entidade coordenadora da Cibersegurança em Portugal
    - Missão, contribuir para que cidadãos e empresas usem o ciberespaço de uma forma livre, confiável e segura.

**Principais pilares da Cibersegurança**
    -**Confidencialidade**:
        - Garantir que recursos privados (confidenciais) não são cedidos por outras entidades (sem autorização) (ex: transmissão de dados entre 2 entidades não devem ser legíveis/compreendidos por terceiros)
    -**Integridade**:
        - Controlo e deteção dde eventuais alterações não autorizadas dos recursos.
        -**Autenticidade** - Garantir a identidade/autoria da origem dos dados transmitidos
        -**Não-repudiação** - Impossibilidade de negação de identidade/autoria.
    -**Disponibilidade**:
        - Garantir a operacionalidade da rede e serviços/informação.

**Segurança e Risco**
    - Objetivo - Obter compromisso entre segurança máxima e risco mínimo aceitável
        - Saber que não é possível garantir 100% de segurança.
        - Conseguir gerir e reduzir o risco para um nível aceitável.

## 1.2 - Conceitos de Vulnerabilidade e Risco
**Conceitos básicos**:
    - Ciber-riscos:
        - Possibilidade de ocorrência de eventos com impacto prejudicial para a organização. (ex: erros humanos, como comportamentos que possam potenciar ciber-ataques).
    - Ativos:
        - Recursos com valor para uma organização -> requerem proteção (ex: bases de dados com informações de faturação).
    - Vulnerabilidade:
        - Fraqueza num ativo que pode ser explorada por uma ameaça (ex: Software desatualizado, como S.O, Anti-virus).
    - Incidente:
        - Evento com efeito adverso real na segurança de uma rede e seus recursos e que pode conduzir a ciberataque (ex: acesso não autorizado a informação confidencial).

**Gestão do risco** - Avaliação do nível de risco dos ativos de organização:
    1. Levantamento dos Riscos de uma organização:
        - Identificação e determinação do valor dos Ativos
        - Identificação das possíveis ameaças e vulnerabilidades nas configurações dos ativos
    2. Avaliação do nível dos riscos associados aos ativos
        - Riscos elevados - Serem tratados - tomar medidas para a redução do nível (mitigação)
        - Riscos baixos - Podem ser aceites

**Risco = Ativo X Ameaças X Vulnerabilidade**

**Exemplos de aplicação de conceitos básicos**:
    - **Vulnerabilidade** - Fraqueza de um sistema que o torna mais exposto a ataques.
    - **Ameaça** - Possibilidade de dano resultante da exploração com sucesso de vulnerabilidade (ex: PC pode aceitar ficheiro com virus não detetado por Anti-virus).
    - **Ataque** - Conjunto de procedimentos que levam à execução de atividades ilícitas, geralmente explorando vulnerabilidades e concretizando as respetivas ameaças (ex: virus infetar e poder destruir ficheiros do PC)
    - **Impacto de Ataque** - Custo de um ataque se concretizar (ex: custo da perda dos ficheiros destruídos ou apagados por vírus).
    - **Risco = Probabilidade de ameaça x impacto de ataque** - Probabilidade de uma ameaça explorar uma vulnerabilidade com determinado impacto (ex: risco elevado se ficheiro infetado por processado/transmitido com frequência entre diferentes computadores e o respetivo vírus ter impacto relevante).

**Fases de ciclo de vida de uma vulnerabilidade**
    1. **Divulgação (Disclosed)** - Quando a vulnerabilidade é divulgada em comunidades de hackers, mas não explorada porque o *exploit* não está disponível.
    2. **Existência (Existing)** - O *exploit* é disponibilizado e há um aumento na taxa de exploração por ataques ainda desconhecidos (dia zero).
    3. **Correção (Fixed)** - O Patch do fornecedor com código *anti-exploit* é desenvolvido e gradualmente aplicado - sistemas vulneráveis são progressivamente corrigidos e a taxa de exploração começa a decrescer.
    4. **Erradicação (Eradicated)** - A vulnerabilidade e respetivo *exploit* deixa de ser uma ameaça prática.

## 1.3 - Visão Geral de Medidas de Cibersegurança
**Medidas de Cibersegurança**:
    - Objetivo: defesa contra ameaças e ataques
        - Medida "comportamental": Utilizados com formação em Cibersegurança para terem comportamentos apropriados e responsáveis.
    - Tipos de medidas/controlos de implementação:
        - **Prevenção** 
            - Medidas para impedir sucesso de ataque (ex: Firewalls)
            - Medidas de confidencialidade:
                - Identificação
                - Autenticação
                - Autorização/controlo de acessos
                - Codificação/encriptação (criptografia)
        - **Deteção**
            - Medidas para detetar ataque (ex: IDS - Intrusion Detection System)
            - Medidas de integridade e deteção:
                - Controlo de integridade
                - Não-repudiação
                - Deteção de atividades suspeitas
        - **Recuperação**
            - Medidas para reposição do estado total ou parcial antes do ataque (ex: Backups)
            - Medidas de disponibilidade/tolerância a falhas/ataques:
                - Backup de dados
                - Redundância de recursos

### 1.3.1 - Medidas de Confidencialidade
**Medidas de confidencialidade**:
    - Identificação:
        - Parâmetro que identifica univocamente um utilizador para com a rede: UserId
    - Autenticação:
        - Procedimento para verificar a identidade do utilizador.
        - Tipicamente, baseada num segredo que apenas o utilizador:
            - Conhece: Password
            - Tem: Smart card, terminal associado
            - É (biometria)
        - Tipos de autenticação:
            - Direta com a outra entidade comunicante
                - 1 Sentido (cliente para servidor/rede).
                - 2 Sentidos (mútua: Cliente para servidor e servidor para cliente).
            - Baseada numa 3ª entidade - Servidor de autenticação
                - Controlo de acesso centralizado
            - Complementadas com uso de Segundo factor de autenticação
                - Pedido de um 2º comprovativo da identidade do utilizador a autenticar, via outro canal de comunicação (ex: telemóvel)

**Autorização/controlo de acessos**:
    - Procedimento de verificação de autorização de acesso a recursos informáticos por parte de um utilizador/entidade
        - Controlo de entrada/saída de Rede - Usar firewall
        - Controlo de identidade e permissões de acesso de utilizadores a recursos da rede - Usar IAM (Identity and Access Management)
            - Tipos de permissões de acesso de utilizador a recurso:
                - Não acesso (por defeito), leitura, escrita, eliminação.
                - Por defeito não ter acesso a recursos, exceto aos que necessita <-> Zero trust policy
        - Controlo de fluxos de comunicações de/para terminais da rede (endpoints) - Usar NAC (Network Access Control)

**Codificação/cifragem/encriptação (confidencialidade)**
    - Assegurar que a informação confidencial e privada não vai ser acedida e compreendida por terceiros (sem autorização).
    - Recorre a criptografia para encriptação de dados armazenados, transmitidos e processados.

### 1.3.2 - Medidas de Deteção
**Medidas de Integridade**:
    - Autenticidade, controlo de Integridade e não-repudiação:
        - Controlo da integridade da informação nos seus 3 estados (ex: MAC (Message Authentication Code) / Assinatura digital)

**Medidas de monitorização para deteção de atividades suspeitas**:
    - Usar equipamentos de monitorização e análise de tráfego. Ex:
        - **IDS (Intrusion Detection System)**- Deteta atividades suspeitas e gera alarmes.
        - **IPS (Intrusion Prevention System)** - Deteta e impede atividades suspeitas e gera alarmes.

### 1.3.3 - Medidas de Disponibilidade/tolerância a falhas/ataques
**Procedimentos de tolerância a falhas**:
    - Efetuar backups periódicos de dados - Facilita reposição de dados "atacados"
    - Garantir redundância de máquinas com serviços "atacados" - Minimizar indisponibilidade de serviços

## 1.4 - Visão Geral de Ameaças à Cibersegurança
**Principais objetivos de ataques/ameaças**:
    - Causar incómodo e danos pessoais/empresariais:
        - Roubo de informação por transferência não autorizada
        - Destruição de informação
        - Indisponibilidade a recursos
        - Redução de produtividade
        - Perdas financeiras
        - Danos reputacionais

### 1.4.1 - Tipos de ataques/ameaças
**Exemplos de tipos de ataques/ameaças**:
    - **Engenharia social** - Manipulação psicológica de pessoas para a execução de ações ou para a a divulgação de informações confidenciais (ex: Phising mails)
    - **Malware (MALicious softWARE)** - Software que contêm código malicioso para atacar recurso da vítima (ex: virus)
    - **Canais dissimulados/backdoors** - Exploração de vulnerabilidade ou ação de Malware para preparar acesso não autorizado a recursos da rede.
    - **Captura de informação (Sniffing)** - Captura de informação confidencial com analisadores de tráfego de red ou acesso aos seus registos
    - **Negação de Serviço (Denial-of-Service)** - Ataque a servidores da rede para colocar serviços indisponíveis      
    - **Pessoal** - Comportamentos ignorantes e irresponsáveis que podem conduzir a possíveis ataques
    - **Espionagem económica ou militar**
    - **Serviço de hacking (HaaS: Hacking as a Service)** - Possibilidade de contratação de serviço de hackers para atividades maliciosas.
    - **Não intencionais**:
        - **Infraestruturas** - Falhas de equipamentos/energia, erros de programas ou Sistemas operativos.
        - **Ambiental** - Desastres naturais.

### 1.4.2 - Principais ataques/ameaças correntes
**Principais ataques/ameaças correntes e respetivas medidas de mitigação**:
    - Exploração de vulnerabilidades conhecidas:
        - Medida - Atualizações periódicas de SW
    - Receção e leitura de emails maliciosos com links HTML para sites com malware:
        - Medida - Não clicar em links de e-mails desconhecidos/estranhos
    - Uso indevido da internet para acesso a sites com malware:
        - Medidas:
            - Usar analisadores de segurança de sites visitados
            - Usar *WAF - Web Application Firewall*
            - Usar configurações de segurança em browsers
            - Não instalar SW de fontes não fiáveis e não seguras
    - Falsificação de identidade (Spoofing) para captura de informação confidencial (Phishing):
        - Medida - Não responder a mensagens e chamadas que peçam informação confidencial
        - Exemplos:
            1. Email com identidade falsa para requisitar informação confidencial
            2. Alerta inserido em email de origem externa - Para colaboradores internos suspeitarem de links e ficheiros em attach contidos em e-mails de origem externa.
            3. Receção de SMS fraudulenta (smishing).
            4. Receção de chamada de voz fradulenta.
    - Dispositivos portáteis perdidos ou roubados:
        - Medida: Encriptação de discos e respetivos dados
    - Utilização imprudente de redes Wi-Fi públicas:
        - Medida: Usar sempre ligações encriptadas para transmissão de dados privados (ex: VPNs)
    - Uso de passwords fracas:
        - Medida: Usar password fortes
    - Falta de plano de contigência em caso de ataques:
        - Medida: Garantir redundância de serviços e backups periódicos de dados
    - Ataques internos:
        - Menos prováveis do que ataques externos, mas com maior facilidade em causar mais danos - maior conhecimento e menor controlo
        - Medida: Controlo e monitorização de acessos internos aos recursos internos

44
49 a 50
52
54
56
58
61 a 62
64 a 65
68 a 73
76 a 80
82 a 103
108 a 109
111 a 112
114
116 a 123
126
129 a 131
133 a 134
138
142 a 144
148
156 a 158
160 a 161
163 a 166
196 a 170
173 a 177
179 a 184
186 a 189
201 a 202
204 a 206
210 a 214
216
228 a 231
235 a 238
240 a 244
247 a 252
263
275
280
282
286 a 289
296 a 299
305 a 309
315 a 318
322
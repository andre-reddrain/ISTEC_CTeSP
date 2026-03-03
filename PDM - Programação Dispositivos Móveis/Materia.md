# Aula 3 - Acesso a Dados

## Dados Locais vs Remotos
**Locais**
- Armazenados no dispositivo. Acesso offline.
- Usado em preferências, cache, dados offline.
- **Vantagens**:
    - Funciona offline
    - Acesso rápido
    - Maior privacidade
- **Desvantagens**:
    - Espaço limitado
    - Sem sincronização
    - Perda em caso de falha

**Remotos**
- Armazenados em servidor. Requer internet.
- Usado em dados partilhados, sincronização.
- **Vantagens**:
    - Dados partilhados
    - Backup automático
    - Sincronização real-time
- **Desvantagens**:
    - Requer internet
    - Latência de rede
    - Custos de servidor

**Híbridos**
- Cache local + sincronização remota
- Carregar dados do cache local primeiro
- Buscar dados remotos em background
- Atualizar UI quando dados remotos chegarem

### Desafios comuns
- Sicronização de dados (conflitos)
- Gestão de conectividade
- Segurança (autenticação, encriptação)
- Performance e latência

### Boas práticas
- Usar cache para melhorar performance
- Verificar conectividade antes de chamadas remotas
- Implementar retry logic para falhas
- Validar dados localmente antes de enviar
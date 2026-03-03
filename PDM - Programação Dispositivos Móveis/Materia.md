# Aula 1 - Integração de Mapas

## Google Cloud Console
Plataforma web da Google para gerir serviços em nuvem.
- Interface centralizada para recursos Google Cloud
- Acesso a APIs (Maps, Storage, BigQuery, etc.)
- Criação de projetos e gestão de credenciais
- Monitorização e faturação de serviços

# Aula 2 - Utilização de Sensores
Sensores medem movimento, orientação e condições ambientais em dispositivos Android.
- Acesso via SensorManager
- Cada dispositivo tem sensores diferentes
- Podem ser hardware ou software

## Sensores de movimento
- **TYPE_ACCELEROMETER** - Aceleração X,Y,Z em m/s²
- **TYPE_GYROSCOPE** - Taxa de rotaçãoem rad/s
- **TYPE_GRAVITY** - Força gravitacional isolada
- **TYPE_STEP_COUNTER** - Contador de passos

## Sensores ambientais e posição
- **TYPE_LIGHT** - Iluminação ambiente em lux
- **TYPE_PROXIMITY** - Distância a objetos em cm
- **TYPE_PRESSURE** - Pressão atmosférica em hPa
- **TYPE_MAGNETIC_FIELD** - Campo magnético em μT

## Listar sensores
Usar getSensorList() para obter todos os sensores:
- **Sensor.TYPE_ALL** lista todos os sensores
- Cada Sensor tem nome, tipo e vendor

## Configuração básica
Para usar sensores em Kotlin:
- Adicionar imports necessários
- Obter SensorManager via getSystemService
- Verificar sensor disponível com getSensorList

## Imports necessários
**SensorManager** - Gere todos os sensores do dispositivo
**Sensor** - Representa um sensor individual

```kotlin
import android.hardware.SensorManager
import android.content.Context
import android.hardware.Sensor
import android.util.Log
```

## Listar Sensores

```kotlin
val sensorManager = getSystemService(
  Context.SENSOR_SERVICE) as SensorManager

val sensorList = sensorManager
  .getSensorList(Sensor.TYPE_ALL)

sensorList.forEach { sensor ->
  Log.d("Sensors", "Nome: ${sensor.name}")
}
```

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
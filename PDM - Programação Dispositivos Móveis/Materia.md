# Aula 1 - Integração de Mapas

## Google Cloud Console
Plataforma web da Google para gerir serviços em nuvem.
- Interface centralizada para recursos Google Cloud
- Acesso a APIs (Maps, Storage, BigQuery, etc.)
- Criação de projetos e gestão de credenciais
- Monitorização e faturação de serviços

## Gradle (Module: app)
Dependências no **build.gradle**:
```kotlin
implementation("com.google.android.gms:play-services-maps:18.2.0")
implementation("com.google.android.gms:play-services-location:21.3.0")
```

## AndroidManifest.xml
Dentro de <**application**>:
```kotlin
<meta-data
    android:name="com.google.android.geo.API_KEY"
    android:value="[COLAR API KEY AQUI]"/>
```

Permissões (fora de application):
```kotlin
<uses-permission android:name="android.permission.ACCESS_FINE_LOCATION" />
<uses-permission android:name="android.permission.INTERNET" />
```

## Layout (activity_main.xml)
Adicionar fragment do mapa:
```kotlin
<androidx.fragment.app.FragmentContainerView
    android:id="@+id/map"
    android:name="com.google.android.gms.maps.SupportMapFragment"
    android:layout_width="match_parent"
    android:layout_height="match_parent" />
```

## MainActivity
Implementar **OnMapReadyCallback**:
```kotlin
class MainActivity : AppCompatActivity(), OnMapReadyCallback {

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)
        
        val mapFragment = supportFragmentManager
            .findFragmentById(R.id.map) as SupportMapFragment
        mapFragment.getMapAsync(this)
    }

    override fun onMapReady(googleMap: GoogleMap) {
        val mMap = googleMap
        val lisboa = LatLng(38.7223, -9.1393)
        mMap.moveCamera(
            CameraUpdateFactory.newLatLngZoom(lisboa, 12f)
        )
    }
}
```

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

# Aula 4 - Aspetos de Segurança
- Proteger dados dos utilizadores.
- Evitar perdas financeiras.
- Manter reputação da app.
- Cumprir legislação (RGPD).

## Princípios Fundamentais
**Confidencialidade** - Dados acessíveis apenas a autorizados.
**Integridade** - Dados não alterados indevidamente.
**Disponibilidade** - Acesso quando necessário.

## Vulnerabilidades comuns
- Injeção SQL
- Cross-Site Scripting (XSS)
- Armazenamento inseguro de dados
- Autenticação fraca

## Autenticação
Verificar a identidade do utilizador:
- Username e password
- Biometria (impressão digital, face)
- Tokens de autenticação (JWT)

## Encriptação de Dados
**Local** - Encriptar dados sensíveis no dispositivo
**Remoto** - Usar HTTPS para comunicação segura

## Boas Práticas Básicas
- Nunca armazenar passwords em texto simples
- Validar inputs do utilizador
- Usar permissões mínimas necessárias
- Manter bibliotecas atualizadas
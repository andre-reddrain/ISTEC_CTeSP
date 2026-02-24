package com.example.exerciciomapas

import android.Manifest
import android.content.pm.PackageManager
import android.graphics.Color
import android.os.Bundle
import androidx.appcompat.app.AppCompatActivity
import androidx.core.app.ActivityCompat
import androidx.core.content.ContextCompat
import com.google.android.gms.location.FusedLocationProviderClient
import com.google.android.gms.location.LocationServices
import com.google.android.gms.maps.CameraUpdateFactory
import com.google.android.gms.maps.GoogleMap
import com.google.android.gms.maps.OnMapReadyCallback
import com.google.android.gms.maps.SupportMapFragment
import com.google.android.gms.maps.model.BitmapDescriptorFactory
import com.google.android.gms.maps.model.LatLng
import com.google.android.gms.maps.model.LatLngBounds
import com.google.android.gms.maps.model.MarkerOptions
import com.google.android.gms.maps.model.PolylineOptions

class MainActivity : AppCompatActivity(), OnMapReadyCallback {

    private lateinit var mMap: GoogleMap
    private lateinit var fusedLocationClient: FusedLocationProviderClient

    companion object {
        private const val LOCATION_PERMISSION_REQUEST = 1
    }

    private var permissionGrantedAction: (() -> Unit)? = null

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        fusedLocationClient = LocationServices.getFusedLocationProviderClient(this)

        val mapFragment = supportFragmentManager
            .findFragmentById(R.id.map) as SupportMapFragment
        mapFragment.getMapAsync(this)
    }

    /**
     * Quando o mapa estiver pronto, vai fazer os exercícios.
     */
    override fun onMapReady(googleMap: GoogleMap) {
        mMap = googleMap
        // val lisboa = LatLng(38.7223, -9.1393)
        // mMap.moveCamera(
        //     CameraUpdateFactory.newLatLngZoom(lisboa, 12f)
        // )

        // Exercício 1
        //Exercicio1()

        // Exercício 2
        //Exercicio2()

        // Exercício 3
        Exercicio3()
    }

    private fun checkLocationPermission(onGranted: () -> Unit) {
        if (ContextCompat.checkSelfPermission(
                this,
                Manifest.permission.ACCESS_FINE_LOCATION
            ) != PackageManager.PERMISSION_GRANTED
        ) {
            ActivityCompat.requestPermissions(
                this,
                arrayOf(Manifest.permission.ACCESS_FINE_LOCATION),
                LOCATION_PERMISSION_REQUEST
            )

            // Guarda a ação a executar depois da permissão
            permissionGrantedAction = onGranted
        } else {
            onGranted()
        }
    }

    /**
     * Exercício 1 - Localização no Mapa
     */
    private fun Exercicio1() {
        // Executa o exercício caso o utilizador tenha dado as permissões
        checkLocationPermission {
            getUserLocation()
        }
    }

    /**
     * Recolhe a localização do utilizador, se tiver permissões para tal
     */
    private fun getUserLocation() {
        // Verificação de permissões
        if (ActivityCompat.checkSelfPermission(
                this,
                Manifest.permission.ACCESS_FINE_LOCATION
            ) != PackageManager.PERMISSION_GRANTED
        ) return

        mMap.isMyLocationEnabled = true

        // Vai tentar recolher a localização do utilizador.
        // Caso sucesso, vai adicionar o marker no mapa
        fusedLocationClient.lastLocation.addOnSuccessListener { location ->
            location?.let {
                // Recolha das coordenadas do utilizador
                val userLatLng = LatLng(it.latitude, it.longitude)

                // Adiciona o marker ao mapa, com o título "EU AQUI!"
                mMap.addMarker(
                    MarkerOptions()
                        .position(userLatLng)
                        .title("EU AQUI!")
                )

                // Coloca a câmera em cima do marker
                mMap.animateCamera(
                    CameraUpdateFactory.newLatLngZoom(userLatLng, 16f)
                )
            }
        }
    }

    /**
     * Exercício 2 - 5 Spots Personalizados
     */
    private fun Exercicio2() {
        checkLocationPermission {
            val boundsBuilder = LatLngBounds.Builder()

            // Lista de 5 localizações de Lisboa, com coordenadas e icon
            val spots = listOf(
                Triple(
                    LatLng(38.7079, -9.1366),
                    "Praça do Comércio",
                    BitmapDescriptorFactory.HUE_RED
                ),
                Triple(
                    LatLng(38.6916, -9.2160),
                    "Torre de Belém",
                    BitmapDescriptorFactory.HUE_BLUE
                ),
                Triple(
                    LatLng(38.6970, -9.2065),
                    "Mosteiro dos Jerónimos",
                    BitmapDescriptorFactory.HUE_GREEN
                ),
                Triple(
                    LatLng(38.7139, -9.1335),
                    "Castelo de São Jorge",
                    BitmapDescriptorFactory.HUE_ORANGE
                ),
                Triple(
                    LatLng(38.7276, -9.1527),
                    "Parque Eduardo VII",
                    BitmapDescriptorFactory.HUE_VIOLET
                )
            )

            // Para cada local, vai adicionar um marker no mapa
            spots.forEach { (latLng, title, hue) ->
                mMap.addMarker(
                    MarkerOptions()
                        .position(latLng)
                        .title(title)
                        .icon(BitmapDescriptorFactory.defaultMarker(hue))
                )

                boundsBuilder.include(latLng)
            }

            val bounds = boundsBuilder.build()

            // Coloca a câmera na zona perto dos marcadores
            mMap.animateCamera(
                CameraUpdateFactory.newLatLngBounds(bounds, 100)
            )
        }
    }

    /**
     * Exercício 3 - Rota com Polyline
     */
    private fun Exercicio3() {
        checkLocationPermission {
            // Lista dos vários pontos da rota (Coordenadas)
            val points = listOf(
                LatLng(38.7223, -9.1393),
                LatLng(38.7169, -9.1399),
                LatLng(38.7104, -9.1409),
                LatLng(38.7036, -9.1782)
            )

            // Lista dos vários pontos da rota (Nome da localização)
            val titles = listOf(
                "Avenida da Liberdade",
                "Rossio",
                "Cais do Sodré",
                "LX Factory"
            )

            val boundsBuilder = LatLngBounds.Builder()

            // Para cada ponto, vai criar um marker no mapa
            points.forEachIndexed { index, latLng ->
                mMap.addMarker(
                    MarkerOptions()
                        .position(latLng)
                        .title(titles[index])
                )
                boundsBuilder.include(latLng)
            }

            // Cria uma "linha" que liga todas as localizações
            val polylineOptions = PolylineOptions()
                .addAll(points)
                .color(Color.BLUE)
                .width(8f)

            // Adiciona a linha ao mapa
            mMap.addPolyline(polylineOptions)

            val bounds = boundsBuilder.build()

            // Coloca a câmera na zona perto dos marcadores
            mMap.animateCamera(
                CameraUpdateFactory.newLatLngBounds(bounds, 100)
            )
        }
    }

    /**
     * Resultado do pedido de permissões ao utilizador
     */
    override fun onRequestPermissionsResult(
        requestCode: Int,
        permissions: Array<out String>,
        grantResults: IntArray
    ) {
        // Vai pedir as permissões
        super.onRequestPermissionsResult(requestCode, permissions, grantResults)

        // Caso o utilizador aceite as permissões, não precisa de as pedir novamente
        if (requestCode == LOCATION_PERMISSION_REQUEST &&
            grantResults.isNotEmpty() &&
            grantResults[0] == PackageManager.PERMISSION_GRANTED
        ) {
            permissionGrantedAction?.invoke()
            permissionGrantedAction = null
        }
    }
}
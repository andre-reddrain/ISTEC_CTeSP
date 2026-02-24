package com.example.exerciciosensores

import android.os.Bundle
import androidx.activity.enableEdgeToEdge
import androidx.appcompat.app.AppCompatActivity
import androidx.core.view.ViewCompat
import androidx.core.view.WindowInsetsCompat
import android.hardware.SensorManager
import android.content.Context
import android.hardware.Sensor
import android.hardware.SensorEvent
import android.hardware.SensorEventListener
import android.widget.TextView
import android.widget.Toast
import kotlin.math.sqrt

class MainActivity : AppCompatActivity(), SensorEventListener {
    private lateinit var sensorManager: SensorManager
    private var accelerometer: Sensor? = null
    private var lightSensor: Sensor? = null
    private var stepCounter: Sensor? = null

    // Elementos UI
    private lateinit var txtLuz: TextView
    private lateinit var txtPassos: TextView

    private var passosIniciais: Float? = null

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContentView(R.layout.activity_main)
        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main)) { v, insets ->
            val systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars())
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom)
            insets
        }

        // Elementos UI
        txtLuz = findViewById(R.id.txtLuz)
        txtPassos = findViewById(R.id.txtPassos)

        // Sensores
        sensorManager = getSystemService(Context.SENSOR_SERVICE) as SensorManager

        accelerometer = sensorManager.getDefaultSensor(Sensor.TYPE_ACCELEROMETER)
        lightSensor = sensorManager.getDefaultSensor(Sensor.TYPE_LIGHT)
        stepCounter = sensorManager.getDefaultSensor(Sensor.TYPE_STEP_COUNTER)

        // Verificação dos sensores
        if (lightSensor == null) {
            txtLuz.text = "Sensor de luz não disponível"
        }

        if (stepCounter == null) {
            txtPassos.text = "Sensor de passos não disponível"
        }
    }

    override fun onResume() {
        super.onResume()

        // Para cada sensor, se existir, vai registar um listener
        accelerometer?.also {
            sensorManager.registerListener(this, it, SensorManager.SENSOR_DELAY_NORMAL)
        }

        lightSensor?.also {
            sensorManager.registerListener(this, it, SensorManager.SENSOR_DELAY_NORMAL)
        }

        stepCounter?.also {
            sensorManager.registerListener(this, it, SensorManager.SENSOR_DELAY_NORMAL)
        }
    }

    override fun onPause() {
        super.onPause()
        sensorManager.unregisterListener(this)
    }

    // Listener para os sensores
    override fun onSensorChanged(event: SensorEvent) {
        when (event.sensor.type) {
            // Sensor Accelerometer - Detetor de shakes
            Sensor.TYPE_ACCELEROMETER -> {
                val x = event.values[0]
                val y = event.values[1]
                val z = event.values[2]

                val magnitude = sqrt(x * x + y * y + z * z)

                if (magnitude > 15) {
                    Toast.makeText(this, "Sacudido!", Toast.LENGTH_SHORT).show()
                }
            }

            // Sensor Light - Monitor de Luz
            Sensor.TYPE_LIGHT -> {
                val lux = event.values[0]
                txtLuz.text = "Luz: $lux lx"
            }

            // Sensor Step Counter - Contador de Passos
            Sensor.TYPE_STEP_COUNTER -> {
                val totalPassos = event.values[0]

                if (passosIniciais == null) {
                    passosIniciais = totalPassos
                }

                val passosDesdeInicio = totalPassos - passosIniciais!!
                txtPassos.text = "Passos: ${passosDesdeInicio.toInt()}"
            }
        }

    }

    override fun onAccuracyChanged(senso: Sensor?, accuracy: Int) {}
}
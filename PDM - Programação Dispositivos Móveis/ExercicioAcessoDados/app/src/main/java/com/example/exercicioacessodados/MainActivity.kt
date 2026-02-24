package com.example.exercicioacessodados

import android.content.Context
import android.content.SharedPreferences
import android.os.Bundle
import android.widget.Button
import android.widget.EditText
import android.widget.Switch
import android.widget.TextView
import android.widget.Toast
import androidx.appcompat.app.AppCompatActivity
import androidx.appcompat.app.AppCompatDelegate
import androidx.core.widget.doAfterTextChanged
import kotlinx.coroutines.CoroutineScope
import kotlinx.coroutines.Dispatchers
import kotlinx.coroutines.launch
import kotlinx.coroutines.withContext
import android.widget.ImageView
import com.bumptech.glide.Glide

class MainActivity : AppCompatActivity() {

    private lateinit var prefs: SharedPreferences

    // Elementos UI
    private lateinit var txtContador: TextView
    private lateinit var btnIncrementar: Button
    private lateinit var edtNome: EditText
    private lateinit var switchDark: Switch

    private lateinit var imgCat: ImageView
    private lateinit var btnCat: Button

    private val PREFS_NAME = "app_prefs"
    private val KEY_CONTADOR = "contador"
    private val KEY_NOME = "nome"
    private val KEY_DARK = "dark_mode"

    private var contador = 0

    override fun onCreate(savedInstanceState: Bundle?) {
        prefs = getSharedPreferences(PREFS_NAME, Context.MODE_PRIVATE)

        val darkAtivo = prefs.getBoolean(KEY_DARK, false)
        AppCompatDelegate.setDefaultNightMode(
            if (darkAtivo) AppCompatDelegate.MODE_NIGHT_YES else AppCompatDelegate.MODE_NIGHT_NO
        )

        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        // Elementos UI
        txtContador = findViewById(R.id.txtContador)
        btnIncrementar = findViewById(R.id.btnIncrementar)
        edtNome = findViewById(R.id.edtNome)
        switchDark = findViewById(R.id.switchDark)
        imgCat = findViewById(R.id.imgCat)
        btnCat = findViewById(R.id.btnCat)

        // Recuperar valores ao abrir
        contador = prefs.getInt(KEY_CONTADOR, 0)
        txtContador.text = contador.toString()

        edtNome.setText(prefs.getString(KEY_NOME, ""))
        switchDark.isChecked = darkAtivo

        // Exercício 1 - Contador persistente
        btnIncrementar.setOnClickListener {
            contador++
            txtContador.text = contador.toString()
            prefs.edit().putInt(KEY_CONTADOR, contador).apply()
        }

        // Exercício 2 - Preferências de Utilizador
        edtNome.doAfterTextChanged { texto ->
            prefs.edit().putString(KEY_NOME, texto?.toString() ?: "").apply()
        }

        switchDark.setOnCheckedChangeListener { _, isChecked ->
            prefs.edit().putBoolean(KEY_DARK, isChecked).apply()
            AppCompatDelegate.setDefaultNightMode(
                if (isChecked) AppCompatDelegate.MODE_NIGHT_YES else AppCompatDelegate.MODE_NIGHT_NO
            )
        }

        // Exercício 3 - Consumir API
        btnCat.setOnClickListener {
            buscarGato()
        }
    }

    // Vai buscar um gato à TheCatApi
    private fun buscarGato() {
        CoroutineScope(Dispatchers.IO).launch {
            try {
                val response = RetrofitClient.api.getRandomCat()

                if (response.isNotEmpty()) {
                    val imageUrl = response[0].url

                    withContext(Dispatchers.Main) {
                        Glide.with(this@MainActivity)
                            .load(imageUrl)
                            .into(imgCat)
                    }
                }
            } catch (e: Exception) {
                withContext(Dispatchers.Main) {
                    Toast.makeText(this@MainActivity, "Erro ao buscar gato", Toast.LENGTH_SHORT).show()
                }
            }
        }
    }
}
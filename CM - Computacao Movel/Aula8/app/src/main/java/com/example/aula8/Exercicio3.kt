package com.example.aula8

import android.os.Bundle
import android.util.Log
import android.widget.Button
import android.widget.TextView
import androidx.activity.enableEdgeToEdge
import androidx.appcompat.app.AppCompatActivity
import androidx.core.view.ViewCompat
import androidx.core.view.WindowInsetsCompat
import com.google.android.material.textfield.TextInputEditText

class Exercicio3 : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContentView(R.layout.activity_exercicio3)
        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main)) { v, insets ->
            val systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars())
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom)
            insets
        }

        val calcularEnergiaBtn = findViewById<Button>(R.id.buttonCalcularEnergia)
        calcularEnergiaBtn.setOnClickListener {
            var horasSonoStr = findViewById<TextInputEditText>(R.id.textInputHorasSono).text.toString()
            var nivelAtividadeStr = findViewById<TextInputEditText>(R.id.textInputNivelAtividade).text.toString()

            val txtRes = findViewById<TextView>(R.id.tvResultadoEnergia)

            if (horasSonoStr.isEmpty() || nivelAtividadeStr.isEmpty()) {
                // Erro!
                txtRes.text = "Erro! Horas sono / Nivel atividade não definidos"
            } else {
                try {
                    val horasSono = horasSonoStr.toInt()
                    val nivelAtividade = nivelAtividadeStr.toInt()

                    if (horasSono < 0 || horasSono > 24 || nivelAtividade < 0 || nivelAtividade > 10) {
                        // Erro!
                        txtRes.text = "Erro! Horas sono / Nivel atividade incorretos!"
                    } else {
                        val energia = (horasSono * 4 + nivelAtividade * 6) / 2
                        if (energia < 40) {
                            txtRes.text = "Energia: $energia - 😴"
                        } else if (energia >= 40 && energia < 70) {
                            txtRes.text = "Energia: $energia - 🫩"
                        } else {
                            txtRes.text = "Energia: $energia - ☺️"
                        }
                    }
                } catch (e: Exception) {
                    txtRes.text = "Erro"
                }
            }
        }
    }
}
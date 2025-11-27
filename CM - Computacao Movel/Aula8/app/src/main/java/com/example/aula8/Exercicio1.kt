package com.example.aula8

import android.os.Bundle
import android.widget.Button
import android.widget.TextView
import androidx.activity.enableEdgeToEdge
import androidx.appcompat.app.AppCompatActivity
import androidx.core.view.ViewCompat
import androidx.core.view.WindowInsetsCompat
import com.google.android.material.textfield.TextInputEditText

class Exercicio1 : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContentView(R.layout.activity_exercicio1)
        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main)) { v, insets ->
            val systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars())
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom)
            insets
        }

        val calcularBtn = findViewById<Button>(R.id.buttonIMC)
        calcularBtn.setOnClickListener {
            val peso = findViewById<TextInputEditText>(R.id.textInputPeso).text.toString()

            val altura = findViewById<TextInputEditText>(R.id.textInputAltura).text.toString()

            val txtRes = findViewById<TextView>(R.id.textViewResEx1)

            if (peso.isEmpty() || altura.isEmpty()) {
                // Erro!
                txtRes.text = "Erro! Altura / Peso não definidos!"
            } else {
                val imc = calcularIMC(peso.toDouble(), altura.toDouble())

                if (imc < 18.5) txtRes.text = "IMC: $imc - Abaixo do peso"
                else if (imc >= 18.5 && imc <= 24.9) txtRes.text = "IMC: $imc - Peso normal"
                else if (imc >= 25.0 && imc <= 29.9) txtRes.text = "IMC: $imc - Sobrepeso"
                else if (imc >= 30) txtRes.text = "IMC: $imc - Obesidade"
                else txtRes.text = "IMC: $imc - Não existe"
            }
        }
    }

    fun calcularIMC(peso: Double, altura: Double) : Double {
        val imc = peso / (altura * altura)
        return Math.round(imc * 100.0) / 100.0
    }
}
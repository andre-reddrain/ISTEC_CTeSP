package com.example.aula7

import android.os.Bundle
import android.widget.Button
import android.widget.TextView
import androidx.activity.enableEdgeToEdge
import androidx.appcompat.app.AppCompatActivity
import androidx.core.view.ViewCompat
import androidx.core.view.WindowInsetsCompat
import com.google.android.material.textfield.TextInputEditText

class Exercicio2 : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContentView(R.layout.activity_exercicio2)
        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main)) { v, insets ->
            val systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars())
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom)
            insets
        }

        val calcularBtn = findViewById<Button>(R.id.buttonDias)
        calcularBtn.setOnClickListener {
            val idade = findViewById<TextInputEditText>(R.id.textInputIdade).text.toString()

            val txtRes = findViewById<TextView>(R.id.textViewResEx2)

            if (idade.isEmpty()) {
                // Erro!
                txtRes.text = "Erro! Idade não definida!"
            } else {
                val idadeDias = idade.toInt() * 365
                txtRes.text = "Dias de vida: $idadeDias"
            }
        }
    }
}
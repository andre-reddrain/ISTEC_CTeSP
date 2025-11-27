package com.example.aula8

import android.os.Bundle
import android.widget.Button
import android.widget.TextView
import android.widget.SeekBar
import androidx.activity.enableEdgeToEdge
import androidx.appcompat.app.AppCompatActivity
import androidx.core.view.ViewCompat
import androidx.core.view.WindowInsetsCompat

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

        val calcularHumorBtn = findViewById<Button>(R.id.buttonHumor)
        calcularHumorBtn.setOnClickListener {
            var slideBar1 = findViewById<SeekBar>(R.id.seekBar)
            var slideBar2 = findViewById<SeekBar>(R.id.seekBar2)

            val txtRes = findViewById<TextView>(R.id.textViewHumorRes)

            val totalHumor = (slideBar1.progress + slideBar2.progress) / 2

            if (totalHumor < 25) {
                txtRes.text = "😢"
            } else if (totalHumor < 50) {
                txtRes.text = "😐"
            } else if (totalHumor < 75) {
                txtRes.text = "😊"
            } else {
                txtRes.text = "😁"
            }
        }
    }
}
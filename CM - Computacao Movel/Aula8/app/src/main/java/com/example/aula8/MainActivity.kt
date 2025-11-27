package com.example.aula8

import android.content.Intent
import android.os.Bundle
import android.widget.Button
import androidx.activity.enableEdgeToEdge
import androidx.appcompat.app.AppCompatActivity
import androidx.core.view.ViewCompat
import androidx.core.view.WindowInsetsCompat

class MainActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContentView(R.layout.activity_main)
        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main)) { v, insets ->
            val systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars())
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom)
            insets
        }

        val buttonEx1 = findViewById<Button>(R.id.buttonEx1)
        buttonEx1.setOnClickListener {
            val intent = Intent(this, Exercicio1::class.java)
            startActivity(intent)
        }

        val buttonEx2 = findViewById<Button>(R.id.buttonEx2)
        buttonEx2.setOnClickListener {
            val intent = Intent(this, Exercicio2::class.java)
            startActivity(intent)
        }

        val buttonEx3 = findViewById<Button>(R.id.buttonEx3)
        buttonEx3.setOnClickListener {
            val intent = Intent(this, Exercicio3::class.java)
            startActivity(intent)
        }
    }
}
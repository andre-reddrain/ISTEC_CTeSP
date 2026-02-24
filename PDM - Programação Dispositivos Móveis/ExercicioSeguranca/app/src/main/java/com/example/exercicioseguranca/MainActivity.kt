package com.example.exercicioseguranca

import android.content.Context
import android.os.Bundle
import android.widget.Button
import android.widget.EditText
import android.widget.Toast
import androidx.appcompat.app.AppCompatActivity
import androidx.biometric.BiometricManager
import androidx.biometric.BiometricPrompt
import androidx.core.content.ContextCompat

class MainActivity : AppCompatActivity() {

    // Elementos UI
    private lateinit var edtUsername: EditText
    private lateinit var edtPassword: EditText
    private lateinit var btnLogin: Button
    private lateinit var btnBio: Button

    private val PREFS_NAME = "login_prefs"
    private val KEY_USERNAME = "username"

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        // Elementos UI
        edtUsername = findViewById(R.id.edtUsername)
        edtPassword = findViewById(R.id.edtPassword)
        btnLogin = findViewById(R.id.btnLogin)
        btnBio = findViewById(R.id.btnBio)

        val prefs = getSharedPreferences(PREFS_NAME, Context.MODE_PRIVATE)

        // Recuperar username guardado nas prefs
        edtUsername.setText(prefs.getString(KEY_USERNAME, ""))

        btnLogin.setOnClickListener {
            val username = edtUsername.text.toString().trim()
            val password = edtPassword.text.toString().trim()

            // Verificação simples Login
            if (username.isEmpty() || password.isEmpty()) {
                Toast.makeText(this, "Preenche username e password", Toast.LENGTH_SHORT).show()
                return@setOnClickListener
            }

            prefs.edit().putString(KEY_USERNAME, username).apply()
            Toast.makeText(this, "Login feito com sucesso!", Toast.LENGTH_SHORT).show()
        }

        // Exercício 2 - Biometria
        btnBio.setOnClickListener {
            autenticarComBiometria()
        }
    }

    // Auntenticação com Biometria
    private fun autenticarComBiometria() {
        val biometricManager = BiometricManager.from(this)

        // Verifica se consegue autenticar com biometria
        val canAuth = biometricManager.canAuthenticate(
            BiometricManager.Authenticators.BIOMETRIC_STRONG
        )

        if (canAuth != BiometricManager.BIOMETRIC_SUCCESS) {
            val msg = when (canAuth) {
                BiometricManager.BIOMETRIC_ERROR_NO_HARDWARE ->
                    "Este dispositivo não tem biometria."
                BiometricManager.BIOMETRIC_ERROR_HW_UNAVAILABLE ->
                    "Biometria indisponível neste momento."
                BiometricManager.BIOMETRIC_ERROR_NONE_ENROLLED ->
                    "Sem biometria registada. Regista uma impressão/face nas definições."
                else -> "Biometria não suportada."
            }
            Toast.makeText(this, msg, Toast.LENGTH_SHORT).show()
            return
        }

        val executor = ContextCompat.getMainExecutor(this)

        val callback = object : BiometricPrompt.AuthenticationCallback() {
            override fun onAuthenticationSucceeded(result: BiometricPrompt.AuthenticationResult) {
                super.onAuthenticationSucceeded(result)
                Toast.makeText(this@MainActivity, "Sucesso na autenticação!", Toast.LENGTH_SHORT).show()
            }

            override fun onAuthenticationFailed() {
                super.onAuthenticationFailed()
                Toast.makeText(this@MainActivity, "Biometria não reconhecida.", Toast.LENGTH_SHORT).show()
            }

            override fun onAuthenticationError(errorCode: Int, errString: CharSequence) {
                super.onAuthenticationError(errorCode, errString)
                Toast.makeText(this@MainActivity, "Erro: $errString", Toast.LENGTH_SHORT).show()
            }
        }

        val biometricPrompt = BiometricPrompt(this, executor, callback)

        val promptInfo = BiometricPrompt.PromptInfo.Builder()
            .setTitle("Autenticação biométrica")
            .setSubtitle("Confirma para entrar")
            .setNegativeButtonText("Cancelar")
            .build()

        biometricPrompt.authenticate(promptInfo)
    }
}
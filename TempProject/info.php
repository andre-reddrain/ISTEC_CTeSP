<?php
    header("Content-Type: application/json");

    // Recolha da informação vinda do front-end
    $data = json_decode(file_get_contents("php://input"), true);

    // Variáveis locais para LDAP
    $ldap_host = "ldap://10.0.0.2:389";
    $ldap_domain = "@AndreRosa.com";
    $ldap_user = $data["username"] . $ldap_domain;

    // Tentativa de ligação ao servidor LDAP - Não abre uma ligação, mas verifica se os parâmetros (ldap_host) conseguem abrir uma ligação, quando necessária
    $ldap_con = ldap_connect($ldap_host) or die("Could not connect to LDAP Server.");

    // Especificação da versão do protocolo LDAP (Versão 3)
    ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);

    if ($ldap_con) {
        // Bind da diretoria LDAP com um RDN e password - Vindos do front-end
        $ldapbind = @ldap_bind($ldap_con, $ldap_user, $data["password"]);

        // var_dump($ldapbind); //$ldapbind is a bool

        // ldapbind é um bool. Se true, é porque o utilizador foi autenticado com sucesso
        if ($ldapbind) {
            http_response_code(200);    // 200 - Success
        } else {
            http_response_code(400);    // 400 - Bad Request
        }
    }
?>
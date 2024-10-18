<?php
    // Definir as variáveis de conexão
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPassword = '';  // Insira sua senha aqui, ou deixe vazio se não houver senha
    $dbName = 'formulario-teste';  // Verifique se o nome está correto
    $dbPort = 3307;  // Porta configurada no arquivo de configuração MySQL

    // Conectar ao banco de dados MySQL
    $conexao = new mysqli($dbHost, $dbUser, $dbPassword, $dbName, $dbPort);

    // Verificar a conexão
    if ($conexao->connect_error) {
        die("Falha na conexão: " . $conexao->connect_error);
    } else {
        echo "Conexão efetuada com sucesso!";
        print_r('<br>');

    }
?>

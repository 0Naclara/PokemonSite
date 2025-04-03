<?php
// // Conectar ao banco de dados
// $host = "localhost"; // Servidor MySQL
// $user = "root";      // Usuário do banco de dados
// $pass = "";          // Senha do banco de dados
// $db = "meubanco";    // Nome do banco de dados

// $conn = new mysqli($host, $user, $pass, $db);

// // Verificar conexão
// if ($conn->connect_error) {
//     die("Falha na conexão: " . $conn->connect_error);
// }

// // Capturar os dados do formulário
// $usuario = $_POST['usuario'];
// $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Hash na senha

// // Inserir no banco
// $sql = "INSERT INTO usuarios (usuario, senha) VALUES ('$usuario', '$senha')";
// if ($conn->query($sql) === TRUE) {
//     echo "Cadastro realizado com sucesso!";
// } else {
//     echo "Erro ao cadastrar: " . $conn->error;
// }

// // Fechar conexão
// $conn->close();
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome  = $_POST["nome"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT); // Hash da senha

    // Dados de conexão com o banco de dados
    $servername = "localhost"; 
    $username   = "root";
    $password   = "";
    $dbname     = "database_integrador"; 

    session_start(); 
    $_SESSION["nome"] = $nome; // Armazenar o nome na sessão

    header("Location: area_cliente.php"); // Redirecionar para a área do cliente
    exit();


    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Preparar a query SQL (evitando SQL injection)
        $sql = "INSERT INTO usuarios (nome, email, senha, tipo) VALUES (:nome, :email, :senha, 'cliente')";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);

        $stmt->execute();

        echo "Cliente cadastrado com sucesso!";

    } catch(PDOException $e) {
        echo "Erro ao cadastrar cliente: " . $e->getMessage();
    }

    $conn = null; // Fechar a conexão
} 
?>
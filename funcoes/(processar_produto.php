<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome  = $_POST["nome"];
    $preco = $_POST["preco"];

    // Upload da imagem
    $target_dir = "uploads/"; // Pasta onde as imagens serão salvas
    $target_file = $target_dir . basename($_FILES["imagem"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Verificar se o arquivo é realmente uma imagem
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["imagem"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            echo "O arquivo não é uma imagem.";
            $uploadOk = 0;
        }
    }

    // Permitir apenas certos formatos de imagem
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "Somente arquivos JPG, JPEG e PNG são permitidos.";
        $uploadOk = 0;
    }

    // Verificar se $uploadOk está definido como 0 por um erro
    if ($uploadOk == 0) {
        echo "Desculpe, seu arquivo não foi enviado.";
    // Se tudo estiver OK, tentar fazer o upload do arquivo
    } else {
        if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file)) {
            // Inserir no banco de dados
            $servername = "localhost";
            $username   = "seu_usuario_mysql";
            $password   = "sua_senha_mysql";
            $dbname     = "database_integrador"; 

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "INSERT INTO produtos (nome, preco, imagem) VALUES (:nome, :preco, :imagem)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':nome', $nome);
                $stmt->bindParam(':preco', $preco);
                $stmt->bindParam(':imagem', $target_file); // Salva o caminho da imagem

                $stmt->execute();
                echo "Produto inserido com sucesso!";

            } catch(PDOException $e) {
                echo "Erro ao inserir produto: " . $e->getMessage();
            }
            $conn = null;

        } else {
            echo "Desculpe, houve um erro ao enviar seu arquivo.";
        }
    }
}
?>
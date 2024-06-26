<?php
// Verifica se o método da requisição é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $nome  = $_POST["nome"];
    $preco = $_POST["preco"];

    // Diretório onde os arquivos serão enviados
    $target_dir = "../uploads/";
    // Caminho completo do arquivo alvo
    $target_file = $target_dir . basename($_FILES["imagem"]["name"]);
    $uploadOk = 1;
    // Obtém a extensão do arquivo
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Verifica se o botão de envio foi clicado e se o arquivo é uma imagem válida
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["imagem"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            echo "O arquivo não é uma imagem.";
            $uploadOk = 0;
        }
    }

    // Verifica se a extensão do arquivo é JPG, JPEG ou PNG
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "Somente arquivos JPG, JPEG e PNG são permitidos.";
        $uploadOk = 0;
    }

    // Se houver algum erro no upload, exibe uma mensagem
    if ($uploadOk == 0) {
        echo "Desculpe, seu arquivo não foi enviado.";

    } else {
        // Se tudo estiver correto, tenta mover o arquivo para o diretório de destino
        if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file)) {
            // Configurações do banco de dados
            $servername = "localhost";
            $username   = "root";
            $password   = "";
            $dbname     = "database_integrador";

            try {
                // Conexão com o banco de dados usando PDO
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Prepara e executa a query SQL para inserir o produto no banco de dados
                $sql = "INSERT INTO produtos (nome, preco, imagem) VALUES (:nome, :preco, :imagem)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':nome', $nome);
                $stmt->bindParam(':preco', $preco);
                $stmt->bindParam(':imagem', $target_file);

                $stmt->execute();
                echo "Produto inserido com sucesso!";
                // Redireciona para a página de inserção de produtos
                header("location: ../admin/inserir_produtos.php");

            } catch(PDOException $e) {
                echo "Erro ao inserir produto: " . $e->getMessage();
            }
            // Fecha a conexão com o banco de dados
            $conn = null;

        } else {
            echo "Desculpe, houve um erro ao enviar seu arquivo.";
        }
    }
}
?>

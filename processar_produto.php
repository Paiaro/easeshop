<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome  = $_POST["nome"];
    $preco = $_POST["preco"];

 
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["imagem"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["imagem"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            echo "O arquivo não é uma imagem.";
            $uploadOk = 0;
        }
    }

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "Somente arquivos JPG, JPEG e PNG são permitidos.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Desculpe, seu arquivo não foi enviado.";
    
    } else {
        if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file)) {
            $servername = "localhost";
            $username   = "root";
            $password   = "";
            $dbname     = "database_integrador"; 

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "INSERT INTO produtos (nome, preco, imagem) VALUES (:nome, :preco, :imagem)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':nome', $nome);
                $stmt->bindParam(':preco', $preco);
                $stmt->bindParam(':imagem', $target_file);

                $stmt->execute();
                echo "Produto inserido com sucesso!";
                header("location: ../admin/inserir_produtos.php");

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
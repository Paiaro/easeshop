<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "database_integrador";


$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
mysqli_set_charset($conexao, "utf8");

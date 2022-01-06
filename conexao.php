<?php
date_default_timezone_set("America/Sao_Paulo");
$servidor = "localhost";
/*$usuario = "viaexp72_viaport";
    $senha = "j+pW(Ye^&S4u";
    $dbname = "viaexp72_viaexpressaportaria"; */
$usuario = "root";
$senha = "";
$dbname = "projeto_portaria";


//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if (!$conn) {
    die("Falha na conexao: " . mysqli_connect_error());
} else {
    //echo "Conexao realizada com sucesso";
}

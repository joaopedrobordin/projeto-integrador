<?php

include "conexao.php";

$pesquisa = "";
$pesquisa = ($_GET['busca']);

$result_pesquisa = "SELECT * FROM "
$resutt_respost = mysql_query($conn, $result_pesquisa)

$sqlPesquisa = "SELECT * FROM tb_produtos WHERE %$_GET['busca']% ";
$sqlResultado_Usuario = mysql_query($conexao, $sqlResultado_Usuario)
while ($sqlInfosDoUser = mysql_fetch_assoc($sqlResultado_Usuario)){
    echo "nome" . $sqlInfosDoUser['nome'] . "<br>";
    echo "preco" . $sqlInfosDoUser['preco'] . "<br>";
    echo "categoria" . $sqlInfosDoUser['categoria'] . "<br>";
}






?>
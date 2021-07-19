<?php

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$nascimento = $_POST['nascimento'];

if(isset($_POST['convenio'])){
    $convenio = $_POST['convenio'];
}else{
    $convenio = 'Não';
}

$diagnostico = $_POST['diagnostico'];

$dir = "imagens/";
$arquivo = $_FILES['arquivo'];
$foto = $dir . $arquivo['name'];

move_uploaded_file($arquivo['tmp_name'] , "$dir/" . $arquivo['name']);


include "../include/conexao.php";
$sqlInserir = "INSERT INTO tb_pacientes
(nome, telefone, nascimento, convenio, diagnostico, foto) 
values( 
    '{$nome}' , 
    '{$telefone}', 
    '{$nascimento}',
    '{$convenio}',
    '{$diagnostico}',
    '{$foto}'
    );";

$resultado = mysqli_query($conexao, $sqlInserir);

if($resultado){
    header('Location:pacientes-listar.php?mensagem=cadastrado');
}else{
    echo "Ops, ocorreu um erro!";
}
?>
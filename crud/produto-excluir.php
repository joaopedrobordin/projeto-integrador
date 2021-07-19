<?php

include "../include/conexao.php";

$id_paciente = $_GET['id'];

$sqlExcluir = "DELETE FROM tb_pacientes WHERE id = {$id_paciente}";

$resultado = mysqli_query($conexao , $sqlExcluir);

if($resultado){
    header('Location:pacientes-listar.php?mensagem=excluido');
}else{
    echo "Ocorreu algum problema";
}

?>
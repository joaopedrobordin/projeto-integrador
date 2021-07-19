<?php
include "../include/cabecalho.php"; 

$id_paciente = $_GET['id'];

include "../include/conexao.php";
$sqlBusca = "SELECT * FROM tb_pacientes WHERE id={$id_paciente};";

$listaDePacientes = mysqli_query($conexao , $sqlBusca);

$nome = $telefone = $nascimento = $convenio = $diagnostico = "";

while($paciente = mysqli_fetch_assoc($listaDePacientes)){
    $nome = $paciente['nome'];
    $telefone = $paciente['telefone'];
    $nascimento = $paciente['nascimento'];
    $convenio = $paciente['convenio'];
    $diagnostico = $paciente['diagnostico'];
}
?>


<div class="container">
    <div class="row">
        <form class=text-center name="formulario-inserir-pacientes" action="pacientes-alterar.php" method="post">    
        <input name="id_paciente" type="hidden" value="<?php echo $_GET['id']; ?>">
        <div class="col">
                    <label class="form-label">Nome:</label>
                    <input name="nome" class="form-control" value="<?php echo $nome ; ?>">
                </div>
                <div class="col">
                    <label class="form-label">Telefone:</label>
                    <input name="telefone" class="form-control" value="<?php echo $telefone ; ?>">
                </div>
                <div class="col">
                    <label class="form-label">Data de Nascimento:</label>
                    <input class="form-control text-center" id="nascimento" 
                    name="nascimento" type="date" <?php echo $nascimento ; ?>>
                    </div>
                <div class="form-check form-switch">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Convênio:</label>
                    <?php $marcado = ""; 
                    if($convenio == "sim"){
                        $marcado = "checked";
                    }?>
                    <input class="form-check-input" value="sim" type="checkbox" name="convenio" 
                    style="font-size: 20px" <?php echo $marcado;?>>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" <?php echo $diagnostico ; ?> name="diagnostico"
                    style="height: 100px"></textarea>
                    <label>Diagnóstico:</label>
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
                </div>
        </form>
    </div>
</div>
<?php include "../include/rodape.php"; ?>
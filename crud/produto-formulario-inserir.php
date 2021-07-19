<?php include "../include/cabecalho.php"; ?>
    <div class="container">
        <div class="row">
            <form class=text-center name="formulario-inserir-pacientes" action="pacientes-inserir.php" 
            method="post" enctype="multipart/form-data">
                <div class="col">
                    <label class="form-label">Nome:</label>
                    <input name="nome" class="form-control">
                </div>
                <div class="col">
                    <label class="form-label">Telefone:</label>
                    <input name="telefone" class="form-control">
                </div>
                <div class="col">
                    <label class="form-label">Data de Nascimento:</label>
                    <input class="form-control text-center" id="nascimento" 
                    name="nascimento" type="date">
                    </div>
                <div class="form-check form-switch">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Convênio:</label>
                    <input class="form-check-input" type="checkbox" value="Sim" name="convenio" 
                    style="font-size: 20px">
                </div>
                <div class="form-floating">
                    <textarea class="form-control" name="diagnostico"
                    style="height: 100px"></textarea>
                    <label>Diagnóstico:</label>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Foto:</label>
                    <input class="form-control" type="file" id="formFile" name="arquivo">
                </div>

                <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
                </div>
            </form>
        </div>
    </div>
<?php include "../include/rodape.php"; ?>
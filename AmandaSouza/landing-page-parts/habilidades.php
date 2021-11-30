<?php include '../config/cabecalho.php' ?>
<?php
    include '../model/blog-model-pessoal.php';
    $introduction = introSection();
    include '../view/body_main.php';
?>

<div> 
    <h1 class="font-weight-bold text-center h1 my-5 conteudo" id="habilidades">Habilidades</h1>
        <p><b>HTML</p></b>
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">85%</div>
            </div>
        </br> </br>

        <p><b>CSS</p></b>
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
            </div>
        </br></br>

        <p><b>VSCode/VStudio</p></b>
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">80%</div>
            </div>
        </br></br>

        <p><b>Windows</p></b>
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 95%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">95%</div>
            </div>
        </br></br>
</div>
</div>

<?php include '../config/rodape.php' ?>
<?php include '../util/footer.php' ?> 
<?php include '../scripts.php' ?>
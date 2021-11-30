<?php include '../config/cabecalho.php' ?>
<?php
    include '../model/blog-model-pessoal.php';
    $introduction = introSection();
    include '../view/body_main.php';
?>
    <section id="team" class="section team-section pb-4 wow fadeIn" data-wow-delay="0.3s">

    <h1 class="font-weight-bold text-center h1 my-5 conteudo" id="profissionais" >Experiências Profissionais</h1>
    <div class="row mb-lg-4 text-center text-md-left">
        <div class="col-lg-6 col-md-12 mb-4">
         <div class="col-md-6 float-left">
            <div class="avatar mx-auto mb-md-0 mb-3">
                <img src="https://yt3.ggpht.com/ytc/AKedOLSs8gzOPsns7jFDcfX9Wa0k8jkO_NOtJ781d2PC=s900-c-k-c0x00ffffff-no-rj" class="z-depth-1" alt="First sample avatar image">
            </div>
        </div>

        <div class="col-md-6 float-right">
            <h3><strong>FUNDAÇÃO BRADESCO</strong></h3>
            <h6><strong>ESTAGIÁRIA DE T.I. PORTAIS E E-LEARNING</strong></h6>
            <h6 class="font-weight-bold grey-text mb-4">2021</h6>
            <p class="grey-text">Auxiliar na prestação de suporte técnico de cursos, auxiliar na construção de Web Design, auxiliar no desenvolvimento Web Front-End para cursos, auxiliar na documentação de atividades de desenvolvimento, contribuir na prototipação de interfaces, conduzir a manutenção e organização de arquivos efetuar levantamento de informações e auxiliar na elaboração de relatórios.</p>
        </div>
    </div>
    <div class="col-lg-6 col-md-12 mb-4">

        <div class="col-md-6 float-left">
            <div class="avatar mx-auto mb-md-0 mb-3">
                <img src="https://i.ibb.co/TYg67Lq/logo-del-rey.png" class="z-depth-1" alt="Second sample avatar image">
            </div>
        </div>

        <div class="col-md-6 float-right">
            <h3><strong>VIAÇÃO DEL REY TRANSPORTES LTDA.</strong></h3>
            <h6><strong>AUXILIAR TÉCNICO DE INFORMÁTICA</strong></h6>
            <h6 class="font-weight-bold grey-text mb-4">2019-2021</h6>
            <p class="grey-text">Suporte na solução de problemas, contatar fornecedores de produtos, bilhetagem eletrônica, reparos e configurações de equipamentos.</p>
        </div>
    </div>
    </div>
</div>

</section>

<?php include '../config/rodape.php' ?>
<?php include '../util/footer.php' ?> 
<?php include '../scripts.php' ?>


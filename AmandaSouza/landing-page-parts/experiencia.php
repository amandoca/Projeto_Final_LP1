<?php include '../config/cabecalho.php' ?>
<?php
    include '../model/blog-model-pessoal.php';
    $introduction = introSection();
    include '../view/body_main.php';
?>

<h1 class="font-weight-bold text-center h1 my-5 conteudo" id="fiz-faco" >O que eu já fiz e o que faço agora?</h1>

<p class="text-center grey-text mb-5 mx-auto w-responsive lead">Abaixo irei falar um pouquinho sobre meu lado profissional...</p>

<div class="row">


<?php
    $row = [
        'fas fa-4x fa fa-desktop pink-text',
        'SUPORTE TÉCNICO',
        'Meu primeiro emprego na área da informática foi em HelpDesk, dando suporte aos usuários de todos departamentos da empresa que trabalhei e manutenção de equipamentos, hardware, software, juntamente com bilhetagem eletrônica.',
        'fas fa-4x fa-pencil-alt cyan-text',
        'DESIGN',
        'Não tenho muita experiência nesta área, mas neste novo trabalho de estagiária, estou aprendendo mexer no pacote Adobe, como Illustrator e Photoshop.',
        'fas fa-4x fas fa-code indigo-text',
        'WEB DEVELOPMENT',
        'Atualmente sou estagiária de Desenvolvimento Web, trabalho com front-end, desenvolvendo cursos on-line da Fundação Bradesco.'
    ];

    include 'experiencia-row.php'
?>


<? $recentPost?>

</div>
</div>
</div>
<?php include '../config/rodape.php' ?>
<?php include '../util/footer.php' ?> 
<?php include '../scripts.php' ?>
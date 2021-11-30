<?php include 'config/cabecalho.php' ?>

<?php
    include 'model/blog-model-pessoal.php';
    $introduction = introSection('OLÁ, BEM VINDO AO MEU PORTÓFOLIO LINGUAGEM DE PROGRAMAÇÃO 1');
    include 'util/header.php';
?>

<?php include 'view/form-post.php'?>

<?php include 'config/rodape.php'?>

<?php include 'scripts.php'?>


<script type="text/javascript" src="mdb/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="mdb/js/mdb.min.js"></script>
<script>
    new WOW().init();

    // MDB Lightbox Init
    $(function () {
      $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
    });

</script>
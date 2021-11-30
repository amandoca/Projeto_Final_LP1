<?php include 'config/cabecalho.php' ?>

<?php

    include_once 'model/db-manager.php';
    insertPost1($_POST);
?>


<?php
    include 'model/blog-model-pessoal.php';
    $introduction = introSection('OLÁ, BEM VINDO AO MEU PORTÓFOLIO LINGUAGEM DE PROGRAMAÇÃO 1');
    include 'util/header.php';
?>

<ul class="nav md-pills pills-default d-flex justify-content-center">
  <li class=" btn peach-gradient waves-effect waves-light">
      <a href="https://localhost/AmandaSouza/lista-post.php" target="_blank">VOLTAR</a>
  </li>
</ul>


 <div class="container">
     <div class="row mt-5">
         <div class="col-md-6">
             <p class="alert alert-danger text-center">ID</p>
         </div>
         <div class="col-md-6">
             <p class="alert alert-primary text-left"><?= $_POST['id'] ?></p>
         </div>
     </div>
     <div class="row mt-5">
         <div class="col-md-6">
             <p class="alert alert-danger text-center">Usuário</p>
         </div>
         <div class="col-md-6">
             <p class="alert alert-primary text-left"><?= $_POST['usuario'] ?></p>
         </div>
     </div>
     <div class="row mt-5">
         <div class="col-md-6">
             <p class="alert alert-danger text-center">Senha</p>
         </div>
         <div class="col-md-6">
             <p class="alert alert-primary text-left"><?= $_POST['senha'] ?></p>
         </div>
     </div>
 </div>



 <!-- /content -->

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
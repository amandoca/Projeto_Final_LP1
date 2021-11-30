<?php include 'config/cabecalho.php' ?>

<?php
    include 'model/blog_model.php';
    include 'model/data-model-autor.php';
    $introduction = introSection('OLÁ, BEM VINDO AO MEU PORTÓFOLIO LINGUAGEM DE PROGRAMAÇÃO 1');
    include 'util/header.php';
?>
<section class="section extra-margins pb-3 text-center text-lg-left wow fadeIn" data-wow-delay="0.3s">
<h2 class="font-weight-bold text-center h1 my-5">AUTORES</h2>
<?php
  include_once 'model/blog_model.php';
$table = getPostTable1()
?>

<ul class="nav md-pills pills-default d-flex justify-content-center">
  <li class=" btn peach-gradient waves-effect waves-light">
      <a href="https://localhost/AmandaSouza/new-autor.php" target="_blank">ADICIONAR AUTOR</a>
  </li>
</ul>

<?php include 'view/lista-autores.php' ?>

<?php include 'config/rodape.php'?>

<?php include 'scripts.php'?>
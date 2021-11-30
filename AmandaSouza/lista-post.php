<?php include 'config/cabecalho.php' ?>

<?php
    include 'model/blog_model.php';
    include 'model/data-model.php';
    $introduction = introSection('OLÁ, BEM VINDO AO MEU PORTÓFOLIO LINGUAGEM DE PROGRAMAÇÃO 1');
    include 'util/header.php';
?>

<section class="section extra-margins pb-3 text-center text-lg-left wow fadeIn" data-wow-delay="0.3s">
<h2 class="font-weight-bold text-center h1 my-5">ÁREA DE EDIÇÃO DOS POSTS</h2>
<?php
  include_once 'model/blog_model.php';
$table = getPostTable()
?>

<ul class="nav md-pills pills-default d-flex justify-content-center">
    <li class="nav-item btn peach-gradient waves-effect waves-light">
        <a href="https://localhost/AmandaSouza/new-post.php" target="_blank">ADICIONAR POST</a>
    </li>
    <li class=" btn peach-gradient waves-effect waves-light">
        <a href="https://localhost/AmandaSouza/lista-autor.php" target="_blank">VISUALIZAR AUTORES</a>
    </li>
</ul>


<?php include 'view/lista.php' ?>

<ul class="nav md-pills pills-default d-flex justify-content-center">
  <li class="btn btn-danger  btn-lg">
      <a href="https://localhost/AmandaSouza/index.php" target="_blank">SAIR</a>
  </li>
</ul>

<?php include 'util/footer.php'?>

<?php include 'config/rodape.php'?>

<?php include 'scripts.php'?>
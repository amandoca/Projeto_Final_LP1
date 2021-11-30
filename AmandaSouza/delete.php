<?php include 'config/cabecalho.php' ?>

<?php 
    include_once 'model/db-manager.php';
    $id = $_GET['id'];
    $data = getPost($id);
?>

<?php include 'view/form-post.php'?>

<?php include 'config/rodape.php'?>

<?php include 'scripts.php'?>
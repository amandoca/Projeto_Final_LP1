<?php include 'config/cabecalho.php' ?>

<?php
    include 'model/blog_model.php';
    include 'model/data-model-autor.php';
    $introduction = introSection('OLÁ, BEM VINDO AO MEU PORTÓFOLIO LINGUAGEM DE PROGRAMAÇÃO 1');
    include 'util/header.php';
?>

<?php 
    include_once 'model/db-manager.php';
    $id = $_GET['id'];
    $data = getUser($id);
?>

<?php include 'view/form-autor.php'?>

<?php include 'config/rodape.php'?>

<?php include 'scripts.php'?>
<?php include 'config/cabecalho.php' ?>

<?php
    include 'model/blog_model.php';
    include 'model/data-model.php';
    $introduction = introSection('OLÁ, BEM VINDO AO MEU PORTÓFOLIO LINGUAGEM DE PROGRAMAÇÃO 1');
    include 'util/header.php';
?>

<section class="section extra-margins pb-3 text-center text-lg-left wow fadeIn" data-wow-delay="0.3s">
<h2 class="font-weight-bold text-center h1 my-5">POSTS DOS AUTORES</h2>
<section class="pb-4">
    <div class="bg-white border rounded-5">
    
    <section class="w-100 p-4 text-center">
      <div class="table-responsive">
        <table class="table align-middle">
          <thead>
            <tr>
              <th scope="col" class="w-25"><b>Amanda Souza</b></th>
              <th scope="col" class="w-25"><b>Jorel</b></th>
              <th scope="col" class="w-25"><b>Steve Magal</b></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>MASP <code>MUSEU DE ARTE DE SÃO PAULO</code></td>
              <td>Museu <code>AFRO-BRASIL</code> </td>
              <td>Casa das <code>ROSAS</code></td>
            </tr>
            <tr class="align-bottom">
              <td>Museu <code>CATAVENTO</code></td>
              <td>Pinacoteca de <code>SÃO PAULO</code></td>
              <td>Farol <code>SANTADER</code></td>
            </tr>
            <tr>
              <td>Memorial da <code>AMÉRICA LATINA</code></td>
              <td>Museu do <code>FUTEBOL</code></td>
              <td>Museu da Arte Moderna de <code>SÃO PAULO</code></td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

<?php include 'config/rodape.php'?>

<?php include 'scripts.php'?>



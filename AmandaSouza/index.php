<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Amanda Souza</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="icon" href="mdb/img/favicon-32x32.png" />
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mdb.min.css" rel="stylesheet">

</head>

<?php
    include 'model/blog-model-pessoal.php';
    $introduction = introSection();
    include 'view/body_main.php';
    ?> </div>

<?php include 'config/rodape.php' ?> 
<?php include 'util/footer.php' ?> 



<script type="text/javascript" src="mdb/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="mdb/js/mdb.min.js"></script>
<script>
    new WOW().init();

    $(function () {
      $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
    });

</script>
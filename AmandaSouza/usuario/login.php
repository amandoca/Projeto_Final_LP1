<?php include '../config/cabecalho.php' ?>
<?php
    include '../model/blog_model.php';
    include '../model/data-model.php';
    $introduction = introSection('OLÁ, BEM VINDO AO MEU PORTÓFOLIO LINGUAGEM DE PROGRAMAÇÃO 1');
    include '../util/header.php';
?>


  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet"> 


  <style>
html,
    body,
    header,
    .view {
      height: 100vh;
    }

    @media (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 815px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .view  {
        height: 650px;
      }
    }

    .intro-2 {
        background: url("https://mdbootstrap.com/img/Photos/Horizontal/Nature/full page/img%20(11).jpg")no-repeat center center;
        background-size: cover;
    }
    .top-nav-collapse {
        background-color: #3f51b5 !important;
    }
    .navbar:not(.top-nav-collapse) {
        background: transparent !important;
    }
    @media (max-width: 768px) {
        .navbar:not(.top-nav-collapse) {
            background: #3f51b5 !important;
        }
    }
    @media (min-width: 800px) and (max-width: 850px) {
        .navbar:not(.top-nav-collapse) {
            background: #3f51b5!important;
        }
    }

    .card {
        background-color: rgba(229, 228, 255, 0.2);
    }
    .md-form label {
        color: #ffffff;
    }
    h6 {
        line-height: 1.7;
    }


    .card {
        margin-top: 30px;

    }

    .md-form input[type=text]:focus:not([readonly]),
    .md-form input[type=password]:focus:not([readonly]) {
        border-bottom: 1px solid #8EDEF8;
        box-shadow: 0 1px 0 0 #8EDEF8;
    }
    .md-form input[type=text]:focus:not([readonly])+label,
    .md-form input[type=password]:focus:not([readonly])+label {
        color: #8EDEF8;
    }

    .md-form .form-control {
        color: #fff;
    }
</style>
</head>

<body>
<section class="view intro-2">
  <div class="mask rgba-stylish-strong h-100 d-flex justify-content-center align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-lg-5">


        <form action="../lista-post.php" method="POST">
          <div class="card wow fadeIn" data-wow-delay="0.3s">
            <div class="card-body">

              <div class="form-header purple-gradient">
                <h3><i class="fas fa-user mt-2 mb-2"></i>Login</h3>
              </div>

              <div class="md-form">
                <i class="fas fa-user prefix white-text"></i>
                <input type="text" id="orangeForm-name" class="form-control">
                <label for="orangeForm-name">Usuário</label>
              </div>

              <div class="md-form">
                <i class="fas fa-lock prefix white-text"></i>
                <input type="password" id="orangeForm-pass" class="form-control">
                <label for="orangeForm-pass">Senha</label>
              </div>

              <div class="text-center">
                <input class="btn purple-gradient btn-lg" type="submit" value="entrar" id="entrar" name="entrar"><br>
                </form>
                <hr>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
if (isset($_POST['id'])){
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if(($usuario=="Jorel") && ($senha=="jorel123")){
header("Location: http://localhost/AmandaSouza/lista-post.php");

}elseif (($usuario=="Lara") && ($senha=="lara123")){
header("Location: http://localhost/AmandaSouza/lista-post.php");

}elseif (($usuario=="Steve Magal") && ($senha=="steve123")){
header("Location: http://localhost/AmandaSouza/lista-post.php");

}else{
header("Location: http://localhost/AmandaSouza/usuario/login.php"); }
}
?>

  <!--  SCRIPTS  -->
  <!-- JQuery -->
  <script type="text/javascript" src="../mdb/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../mdb/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../mdb/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../mdb/js/mdb.min.js"></script>
  <script>
    new WOW().init();

  </script>

</body>

</html>

<?php include '../config/rodape.php'?>

<?php include '../scripts.php'?>
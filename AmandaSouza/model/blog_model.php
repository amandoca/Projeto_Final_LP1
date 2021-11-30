<?php
    function introSection($title) {
        return '

<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar aqua-gradient">
    <div class="container">
        <a class="navbar-brand" href="#">
            <strong>MDB</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="https://localhost/AmandaSouza/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://localhost/AmandaSouza/landing-page-parts/comeco.php">Começo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://localhost/AmandaSouza/landing-page-parts/experiencia.php">O que eu já fiz?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://localhost/AmandaSouza/landing-page-parts/habilidades.php">Habilidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://localhost/AmandaSouza/landing-page-parts/profissional.php">Experiências Profissionais</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://localhost/AmandaSouza/landing-page-parts/contato.php">Contato</a> 
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://localhost/AmandaSouza/posts.php">Posts</a> 
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://localhost/AmandaSouza/usuario/login.php">LOGIN</a> 
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Intro Section -->
<div class="view jarallax" data-jarallax=\'{"speed": 0.2}\' style="background-image: url(\'https://i.ibb.co/X7yR0DK/Rainbow-Gradient-Pink-Orange-and-Blue-Zoom-Virtual-Background.png\'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <div class="mask rgba-indigo-slight">
        <div class="container h-100 d-flex justify-content-center align-items-center">
            <div class="row pt-5 mt-3">
                <div class="col-md-12 mb-3">
                    <div class="intro-info-content text-center">
                        <h1 class="display-3 blue-text mb-5 wow fadeInDown" data-wow-delay="0.3s">ME...MYSELF...AND
                            <a class="blue-text font-weight-bold">I</a>
                        </h1>
                        <h5 class="text-uppercase blue-text mb-5 mt-1 font-weight-bold wow fadeInDown" data-wow-delay="0.3s">'.$title.'</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>';
}

function getRecentPosts(array $matriz) {
    $recentPost = '';
    foreach ($matriz as $row){
        $recentPost .= postRow($row);
    }
    return $recentPost;
}

function postRow($row){
  $html = '<div class="row">

  <div class="col-lg-4 mb-4">
    <!--Featured image-->
    <div class="view overlay z-depth-1">
      <img src="' . $row[0] .'" class="img-fluid" alt="First sample image">
      <a>
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
  </div>
  
  <div class="col-lg-7 mb-4">
    <a href="" class="' . $row[1] .'">
      <h6 class="pb-1"><i class="fas fa-heart"></i><strong> ' . $row[2] .' </strong></h6>
    </a>
    <h4 class="mb-4"><strong>' . $row[3] .'</strong></h4>
    <p>' . $row[4] .'</p>
    <p>by <a><strong>' . $row[5] .'</strong></a>, ' . $row[6] .'</p>
    <a class="btn btn-primary">Read more</a>
  </div>
  
  </div>
  <hr class="mb-5">';

  return $html;
}


include_once 'db-manager.php';
function getPostTable() {
    $m = getPosts();
    $html = '';

    foreach ($m as $row) {
        $html .= '<tr>';
        $html .= '<td>'.$row[0].'</td>';
        $html .= '<td>'.$row[2].'</td>';
        $html .= '<td>'.$row[3].'</td>';
        $html .= '<td>'.$row[4].'</td>';
        $html .= '<td>'.createLink($row[6]).'</td>';
        $html .= '</tr>';
    }

    return $html;
}

function createLink($id) {
    $html = '<a href="http://localhost/AmandaSouza/edit.php?id='.$id.'">  <i class="far fa-edit green-text"></i></a>';
    $html .= '<a href="http://localhost/AmandaSouza/delete.php?id='.$id.'"> <i class="far fa-trash-alt red-text"></i></a>';
    return $html;

}

include_once 'db-manager.php';
function getPostTable1() {
    $m = getPosts1();
    $html = '';

    foreach ($m as $row) {
        $html .= '<tr>';
        $html .= '<td>'.$row[0].'</td>';
        $html .= '<td>'.$row[1].'</td>';
        $html .= '<td>'.$row[2].'</td>';
        $html .= '<td>'.createLink2($row[0]).'</td>';
        $html .= '</tr>';
    }

    return $html;
}

function createLink2($id) {
    $html = '<a href="http://localhost/AmandaSouza/conteudo.php?id='.$id.'">  <i class="fas fa-user-clock fa-2x"></i></a>';
    return $html;

}
<?php
    function introSection() {
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
                        <h5 class="text-uppercase blue-text mb-5 mt-1 font-weight-bold wow fadeInDown" data-wow-delay="0.3s">OLÁ, BEM VINDO AO MEU PORTÓFOLIO LINGUAGEM DE PROGRAMAÇÃO 1</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>';
}


// function postRow($row) {
//     $html = ' 
//     <div class="row">
//     <div class="col-md-4 mb-4">
//         <i class="< '. $row[0] .'>"></i>
//         <h4 class="font-weight-bold my-4"><'. $row[1] .'></h4>
//         <p class="grey-text">< '. $row[2] .'> </p>
//     </div>

//     <div class="col-md-4 mb-4">
//         <i class="<'. $row[3] .'>"></i>
//         <h4 class="font-weight-bold my-4">< '. $row[4] .'></h4>
//         <p class="grey-text">< '. $row[5] .'></p>
//     </div>

//     <div class="col-md-4 mb-4">
//         <i class="<'. $row[6] .' "></i>
//         <h4 class="font-weight-bold my-4">< '. $row[7] .'></h4>
//         <p class="grey-text">< '. $row[8] .'></p>
//     </div>
// </div>';

// return $html; 

// }

// $m [
//     [
//         'fas fa-4x fa fa-desktop pink-text',
//         'SUPORTE TÉCNICO',
//         'Meu primeiro emprego na área da informática foi em HelpDesk, dando suporte aos usuários de todos departamentos da empresa que trabalhei e manutenção de equipamentos, hardware, software, juntamente com bilhetagem eletrônica.',
//         'fas fa-4x fa-pencil-alt cyan-text',
//         'DESIGN',
//         'Não tenho muita experiência nesta área, mas neste novo trabalho de estagiária, estou aprendendo mexer no pacote Adobe, como Illustrator e Photoshop.',
//         'fas fa-4x fas fa-code indigo-text',
//         'WEB DEVELOPMENT',
//         'Atualmente sou estagiária de Desenvolvimento Web, trabalho com front-end, desenvolvendo cursos on-line da Fundação Bradesco.'
//     ]
// ];

//  $recentPost = '';

//  foreach ($m as $row){

//     $recentPost .= postRow($row);
//  }
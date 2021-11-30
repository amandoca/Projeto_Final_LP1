<?php

$con = mysqli_connect("localhost","root","","AmandaSouza");

function getPosts() {

    global $con;

    $sql = "SELECT imagem, cor_categoria, categoria, titulo, conteudo, autor, id data FROM post";
    $res = mysqli_query($con, $sql);
    return mysqli_fetch_all($res);
}

function getPosts1() {

    global $con;

    $sql = "SELECT * FROM usuario"; 
    $res = mysqli_query($con, $sql);
    return mysqli_fetch_all($res);
}

function getPost($id) {
    global $con;
    $sql = "SELECT imagem, categoria, titulo, conteudo FROM post WHERE id = $id";
    $res = mysqli_query($con, $sql);
    return mysqli_fetch_row($res);
}


function getUser($id) {
    global $con;
    $sql = "SELECT autor, senha, conteudo FROM usuario WHERE id = $id";
    $res = mysqli_query($con, $sql);
    return mysqli_fetch_all($res);
}


function editPost($data){
    global $con;

    $sql = "UPDATE post SET imagem = ".$data['imagem'].", categoria=".$data['categoria'].",";
    $sql .= "titulo= ".$data['titulo'].", conteudo=".$data['imagem']." WHERE id = ".$data['id'];
    mysqli_query($con, $sql);
}

function editAutor($data){
    global $con;

    $sql = "UPDATE usuario SET usuario = ".$data['autor'].", senha=".$data['senha'].", conteudo=".$data['conteudo'];
    $sql .= " WHERE id = ".$data['id'];
    mysqli_query($con, $sql);
}

function insertPost($data) {
    global $con;

    $sql = "INSERT INTO post (imagem, cor_categoria, categoria, titulo, conteudo, autor)";
    $sql .= " VALUES ('".$data['imagem']."', '".$data['cor_categoria']."', '".$data['categoria'].
    "', '".$data['titulo']."', '".$data['conteudo']."', '".$data['autor']."')";
    return mysqli_query($con, $sql);
}


function insertPost1($data) {
    global $con;

    $sql = "INSERT INTO usuario (id, autor, senha, conteudo)";
    $sql .= " VALUES ('".$data['id']."', '".$data['autor']."','".$data['senha']."','".$data['conteudo']."')";
    return mysqli_query($con, $sql);
}

function deletePost($data){
    global $con;
    $sql = "DELETE FROM post WHERE id = ".$data['id'];
    return mysqli_query($con, $sql);
    }

function deleteAutor($data){
    global $con;
    $sql = "DELETE FROM usuario WHERE id = ".$data['id'];
    return mysqli_query($con, $sql);
    }
?>

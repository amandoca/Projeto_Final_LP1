<?php
    include_once 'model/db-manager.php';
    deletePost($_POST);
    header('Location: http://localhost/AmandaSouza/lista-post.php');
?>
<?php

    $editing = isset($data);
    $url = $editing ? 'edita-autor.php' : 'cria-autor.php';
?>

<div class="row">
    <div class="col-md-6 mx-auto">
        <form class="text-center border border-light p-5" action="<?= $url ?>" method="POST">

            <p class="h4 mb-4">Autor e Senha</p>
            <input value="<?= $editing ? $data[0] : '' ?>" type="text" id="id" name="id" class="form-control mb-4" placeholder="ID usuário">
            <input value="<?= $editing ? $data[1] : '' ?>" type="text" id="usuario" name="usuario" class="form-control mb-4" placeholder="Autor">
            <input value="<?= $editing ? $data[2] : '' ?>" type="password" id="senha" name="senha" class="form-control mb-4" placeholder="Senha">
            <button class="btn btn-success btn-block btn-rounded z-depth-1" type="submit"><?= $editing ? 'Editar' : 'Criar' ?></button>

        </form>
    </div>
</div>

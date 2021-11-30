<?php

    $editing = isset($data);
    $url = $editing ? 'edita-post.php' : 'cria-post.php';
?>

<div class="row">
    <div class="col-md-6 mx-auto">
        <form class="text-center border border-light p-5" action="<?= $url ?>" method="POST">

            <p class="h4 mb-4">Crie seu incrível post!</p>
            <input value="<?= $editing ? $data[0] : '' ?>" type="text" id="imagem" name="imagem" class="form-control mb-4" placeholder="URL da imagem">
            
            <?php if(! $editing): ?>

                <input type="text" id="cor_categoria" name="cor_categoria" class="form-control mb-4" placeholder="Cor da categoria">

            <?php endif ?>
            <input value="<?= $editing ? $data[1] : '' ?>" type="text" id="categoria" name="categoria" class="form-control mb-4" placeholder="Categoria">
            <input value="<?= $editing ? $data[2] : '' ?>" type="text" id="titulo" name="titulo" class="form-control mb-4" placeholder="Título">
            <input value="<?= $editing ? $data[3] : '' ?>" type="text" id="conteudo" name="conteudo" class="form-control mb-4" placeholder="Conteudo">
            
            <?php if(! $editing): ?>
                <input type="text" id="autor" name="autor" class="form-control mb-4" placeholder="Autor">
            <?php endif ?>

            <?php if($editing): ?>
                <input type="hidden" name="id" value="<?= $id ?>">
            <?php endif ?>

            <button class="btn btn-success btn-block btn-rounded z-depth-1" type="submit"><?= $editing ? 'Editar' : 'Criar' ?></button>

        </form>
    </div>
</div>

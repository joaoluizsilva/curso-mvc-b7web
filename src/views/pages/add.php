<?php $render('header'); ?>

<div class="container">
    <h2>ADICIONAR NOVO USUÁRIO</h2>
    <form action="<?= $base; ?>/novo" method="post">
        <div class="mt-3">
            <label for="">Nome</label>
            <input type="text" name="nome" id="" class="form-control" placeholder="">
        </div>
        <br>
        <div class="mt-3">
            <label for="">Email</label>
            <input type="text" name="email" id="" class="form-control" placeholder="">
        </div>
        <div class="mt-3">
            <input type="submit" value="Adicionar" class="btn btn-success">
        </div>
    </form>
</div>

<?php $render('footer'); ?>
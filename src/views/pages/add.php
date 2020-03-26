<?php $render('header');?>

<a href="<?=$base;?>">Voltar</a>

<h2>Adicionar Usuário</h2>

<form method="POST" action="<?=$base;?>/novo">
    <label for="nome">
        Nome:<br>
        <input type="text" name="nome">
        <br><br>
    </label>

    <label for="nome">
        E-mail:<br>
        <input type="email" name="email">
        <br><br>
    </label>

    <input type="submit" value="Adicionar">
</form>

<?php $render('footer');?>
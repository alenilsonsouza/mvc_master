<?php $render('header');?>

<a href="<?=$base;?>">Voltar</a>

<h2>Editar Usuário</h2>

<form method="POST" action="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar">
    <label for="nome">
        Nome:<br>
        <input type="text" name="nome" value="<?=$usuario['nome'];?>">
        <br><br>
    </label>

    <label for="nome">
        E-mail:<br>
        <input type="email" name="email" value="<?=$usuario['email'];?>">
        <br><br>
    </label>

    <input type="submit" value="Salvar">
</form>

<?php $render('footer');?>
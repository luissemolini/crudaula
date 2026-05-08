<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Aluno</title>
</head>
<body>
    <form action="index.php?action=atualizar" method="POST" >
        <input type="text" name="nome" value="<?php echo $aluno['nome'] ?>">

        <input type="email" name="email" value="<?php echo $aluno['email'] ?>">

        <input type="number" name="idade" value="<?php echo $aluno['idade'] ?>">

        <input type="hidden" name="id" value="<?php echo $aluno['id']; ?>">

        <button type="submit"> Atualizar </button>
    </form>
</body>
</html>
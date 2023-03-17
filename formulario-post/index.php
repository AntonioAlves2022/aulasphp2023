<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="enviar.php" method="post">
        <label for="nome">Seu nome: </label>
        <input type="text" name="nome">

        <label for="idade">Sua idade: </label>
        <input type="text" name="idade">

        <input type="submit" value="Salvar">
        <br><br>
        <input type="checkbox" name="confirma" value="OK">
        Li e aceito o contrato.
    </form>
</body>

</html>
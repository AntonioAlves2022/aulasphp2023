<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="enviar.php" method="get">
        <label for="idade">Digite sua idade:</label>
        <input type="text" name="idade">
        <br><br>
        <fieldset>
            <label for="pergunta">
                Você já fez aniversário este ano ?
            </label>
            <input type="radio" name="pergunta" value="SIM">SIM
            <input type="radio" name="pergunta" value="NAO">NÃO
        </fieldset><br><br>
        <input type="submit" value="Salvar">
    </form>
</body>

</html>
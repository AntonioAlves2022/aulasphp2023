<?php
include_once("conexao.php");

// verifica se os campos do form foram preenchidos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];

    //prepara o sql com os parametros
    $sql = "INSERT INTO usuarios (nome, email, telefone) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    //vincula os parametros ao statement
    $stmt->bind_param("sss", $nome, $email, $telefone);

    //Executa o statement
    if ($stmt->execute()) {
        //redireciona de volta para a index.php
        header("location:index.php");
        exit();
    } else {
        echo "Erro ao cadastrar o novo contato";
    }
}

// fecha a conexão
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar contato</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"
        integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="container">
        <h1>Inserir novo contato</h1>
        <form method="post">
            <div class="form-group">
                <label for="nome">Nome do contato</label>
                <input type="text" name="nome" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Endereço de E-mail</label>
                <input type="text" name="email" class="form-control">
            </div>

            <div class="form-group">
                <label for="telefone">Endereço de E-mail</label>
                <input type="text" name="telefone" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary mt-4 ms-0">
                <i class=" fa-solid fa-floppy-disk pe-2"></i>
                Salvar
            </button>

        </form>
    </div>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"
        integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
</body>

</html>
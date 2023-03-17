<?php
include_once("conexao.php");

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda PHP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"
        integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <a href="novo.php" class="btn btn-primary mt-4 mb-4 ms-4">
        <i class="fa-solid fa-user-plus ps-2 pe-2"></i>
        Cadastrar contato
    </a>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th colspan="2">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?= $row["id"] ?></td>
                <td><?= $row["nome"] ?></td>
                <td><?= $row["email"] ?></td>
                <td><?= $row["telefone"] ?></td>
                <td>
                    <a href="editar.php?id=<?= $row["id"] ?>">Editar</a>
                </td>

                <td>
                    <a href="excluir.php?id=<?= $row["id"] ?>">Excluir</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"
        integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>

<?php 
    $conn->close();
?>
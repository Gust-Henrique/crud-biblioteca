<?php 
require_once 'conexao-php';

$sql = "SELECT * FROM livros";
$consulta = $conexao->query($sql);
$livros = $consulta->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <style>
       
    </style>
</head>
<body>
    <h1>Biblioteca</h1>

    <p><a href="criar.php">Adicionar novo livro</a></p>

    <?php if (count($livros) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Ano</th>
                    <th>Gênero</th>
                    <th>Quantidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($livros as $livro): ?>
                    <tr>
                        <td><?= htmlspecialchars($livro['titulo']) ?></td>
                        <td><?= htmlspecialchars($livro['autor']) ?></td>
                        <td><?= $livro['ano_publicacao'] ?></td>
                        <td><?= htmlspecialchars($livro['genero']) ?></td>
                        <td><?= $livro['quantidade'] ?></td>
                        <td>
                            <a href="editar.php?id=<?= $livro['id'] ?>">Editar</a> |
                            <a href="deletar.php?id=<?= $livro['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir este livro?')">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Nenhum livro cadastrado ainda.</p>
    <?php endif; ?>
</body>
</html>
<?php
require_once 'config.php';
require_once 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);
$lista = $usuarioDao->findAll();
?>

<a href="adicionar.php">Adicionar Usuario</a>
<br>
<br>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>

    <?php foreach($lista as $usuario): ?>
        <tr>
            <td><?= $usuario->getId() ?></td>
            <td><?= $usuario->getName() ?></td>
            <td><?= $usuario->getEmail() ?></td>
            <td>
                <a href="editar.php?id=<?=$usuario->getId()?>">[Editar]</a>
                <a  href="excluir.php?id=<?=$usuario->getId()?>" onclick="return confirm('Tem certeza que deseja excluir?')">[Excluir]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
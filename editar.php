<?php
require_once 'config.php';
require_once 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);
$usuario = false;
$id = filter_input(INPUT_GET, 'id');
    
    if($id) {
        $usuario = $usuarioDao->findById($id);
    } 

    if($usuario === false) {
        header("Location: index.php");
        exit;
    }
?>
<h1>Editar Usuário</h1>

<form action="editar_action.php" method="POST">
    <input type="hidden" name="id" value="<?= $usuario->getId(); ?>"/>
    <label>
        Nome: <br/>
        <input type="text" name="name" value="<?= $usuario->getName(); ?>">
    </label> <br/> <br/>

    <label>
        Email: <br/>
        <input type="email" name="email" value="<?= $usuario->getEmail(); ?>">
    </label> <br/> <br/>

    <input type="submit" value="Salvar">
</form>
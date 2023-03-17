<?php 
include "../controller/UsuarioController.php";

if(!empty($_POST)){
    $usuario = new UsuarioController();
    $usuario->salvar($POST);
}
?>

<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <form action="UsuarioForm.php" method="POST">
        <label>Nome</label><br>
        <input type="text" name="nome"/><br>
        <label>Telefone</label><br>
        <input type="text" name="telefone"/>

        <input type="submit" value="Salvar"/>
    <?= '<h1>Messages</h1>'; ?>
    </form>
  </body>
</html>
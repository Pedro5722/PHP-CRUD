<?php
require 'config.php';

$usuario = [];
$id = filter_input(INPUT_GET, 'id');
if($id){
  $sql = $pdo->prepare('SELECT * FROM users WHERE id = :id');
  $sql->bindValue(":id", $id);
  $sql->execute();

  if($sql->rowCount() > 0){
    $usuario =$sql->fetch();
  }else{
    header('location: index.php');
    exit;
  }

}else{
  header('location: index.php');
}
?>

<h1>Editar usuário</h1>
<form method="POST" action="editar_usuario.php">

  <input type="hidden", name="id" value="<?=$usuario['id']?>"/>
  <label for="nome">
    NOME: <input type="text", name="nome" value="<?=$usuario['nome']?>"/>
  </label>
  <label for="email">
    EMAIL: <input type="email", name="email" value="<?=$usuario['email']?>"/>
  </label>
  
  <input type="submit", name="enviar"/>


</form>






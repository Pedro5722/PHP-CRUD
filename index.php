<?php
  require 'config.php';
  $lista =[];
  $sql = $pdo->query("SELECT * FROM users");
  if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
  };
?>

<title>MY CRUD</title>

<h1>Listagem de Usuários</h1>

<table border="1">
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Email</th>
    <th>AÇÕES</th>
  </tr>
  <?php foreach ($lista as $usuario):?>
    <tr>
      <td><?=$usuario['id'];?> </td>
      <td><?=$usuario['nome'];?> </td>
      <td><?=$usuario['email'];?> </td>
      <td>
        <a href="editar.php?id=<?=$usuario['id'];?>">editar</a>
        <a href="excluir.php?id=<?=$usuario['id'];?>">excluir</a>
      
      </td>
    </tr>
  <?php endforeach; ?>
</table>

<a href="cadastrar.php">CADASTRAR USUARIO</a>


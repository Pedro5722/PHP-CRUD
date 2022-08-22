<?php
  require 'config.php';
  
  $id = filter_input(INPUT_POST, 'id');
  $nome = filter_input(INPUT_POST, 'nome');
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

  if($id && $email){
    $sql = $pdo->prepare("UPDATE users SET nome = :nome, email = :email WHERE id = :id");
    $sql->bindValue(":nome", $nome);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":id", $id);
    $sql->execute();
    header("location: index.php");
    exit;
  }

?>
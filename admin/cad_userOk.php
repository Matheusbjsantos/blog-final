<?php 

include "../config/connection.php";

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = md5($_POST['senha']);

//preparar
$stmt = $conectar->prepare("INSERT INTO users (nome, login, senha) VALUES(:nome, :login, :senha)");

//trocar
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':login', $login);
$stmt->bindParam(':senha', $senha);

//executar
$stmt->execute();

header("Location:cad_user.php");



//echo "$nome - $login - $senha";
?>

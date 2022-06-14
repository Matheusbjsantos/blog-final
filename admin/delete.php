<?php
include_once('../config/connection.php');
$stmt = $conectar->prepare("DELETE FROM post WHERE id = :ID");
$id = $_GET['id'];
$stmt->bindParam(":ID", $id);
$stmt->execute();

echo "Registro apagado";
?>


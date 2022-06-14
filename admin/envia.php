<?php 

include_once('../config/connection.php');

   $stmt = $conectar->prepare("INSERT INTO post (title, description, data, image) VALUES(:TITLE, :DESCRIPTION, :DATA, :IMAGE)");


$title = $_POST['title'];
$data = $_POST['data'];
$description = $_POST['description'];
$image = $_FILES['image'];

   move_uploaded_file($image['tmp_name'], '../uploads/'.$image['name']);

$arquivo = 'uploads/'.$image['name'];

$stmt->bindParam(":TITLE", $title);
   $stmt->bindParam(":DESCRIPTION", $description);
   $stmt->bindParam(":DATA", $data);
   $stmt->bindParam(":IMAGE", $arquivo);
   $stmt->execute();

     /*redireciona o arquivo */
   header("Location: view2.php");



//echo $title."<br>";
//echo $data."<br>";
//echo $description."<br>";


 ?>
<?php
session_start();
require_once 'conexaobd.php';

$nomeusuario = $_SESSION['usuario'];

$consulta = "select * from cad_telas where email = '$nomeusuario'";

$result = mysqli_query($conexao,$consulta) or die ('Erro na consulta!');

$rows = mysqli_fetch_assoc($result);


$projeto = $rows['nome_projeto'];
$pagina = $rows['tela'];


$log = $_GET['log'];

$status = 1;

$cons = "insert into cad_feedback (nome_usuario,projeto,pagina,status,log) values ('$nomeusuario','$projeto','$pagina', $status,'$log') ;";


mysqli_query($conexao,$cons) or die ('Erro na consulta!');

mysqli_close($conexao);

echo ('
<script>
alert("Validação realizada com Sucesso!");
window.location.href = "indexcliente1.php";
</script>
');

//header('Location: login.html');

   // exit();   


?>
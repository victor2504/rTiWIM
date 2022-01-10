<?php
require_once 'conexaobd.php';
$nome = $_POST['nomeusuario'];
$sobrenome = $_POST['sobrenomeusuario'];
$projeto = $_POST['projeto'];
$email = $_POST['emailUsuario'];
$senha = $_POST['senhausuario'];


if(isset ($_POST['checkboxcliente'])){
    $tipo_usuario = 1 ;

}else if(isset ($_POST['checkboxdesenvolvedor'])){

    $tipo_usuario = 2 ;

}

$consulta = "select * from cad_usuario where email = '$email' and senha = '$senha'";

$result = mysqli_query($conexao,$consulta) or die ('Erro na consulta!');

$rows = mysqli_fetch_assoc($result);

$id = $rows['id_usuario'];



$consulta = "update cad_usuario  set nome = '$nome', sobrenome = '$sobrenome' ,projeto = '$projeto',email = '$email',senha = '$senha' ,tipo = $tipo_usuario where id_usuario = $id ;";


mysqli_query($conexao,$consulta) or die ('Erro na consulta!');

mysqli_close($conexao);

echo ('
<script>
alert("Alteração realizada com Sucesso!");
window.location.href = "indexdesen.php";
</script>
');

//header('Location: login.html');

   // exit();   


?>
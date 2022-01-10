<?php
require_once 'conexaobd.php';
$nomeprojeto = $_POST['nomeprojeto'];
$nometela = $_POST['nometela'];
$emailcliente = $_POST['emailcliente'];
$linktela = $_POST['linktela'];



if(empty($_POST['nomeprojeto']) or empty($_POST['nometela']) or empty($_POST['emailcliente']) or empty($_POST['linktela']) ){

    echo ('
    <script>
    alert("Preencha todos os campos!");
    window.location.href = "cad_tela_site.html";
    </script>
    ');  

}else{


$status = 1;
$consulta = "insert into cad_telas values ('0','$nomeprojeto','$nometela','$emailcliente','$linktela', $status) ;";


mysqli_query($conexao,$consulta) or die ('Erro na consulta!');

mysqli_close($conexao);

echo ('
<script>
alert("Cadastro realizado com Sucesso!");
window.location.href = "indexdesen.php";
</script>
');

//header('Location: login.html');

   // exit();   

}
?>
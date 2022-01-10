<?php
session_start();
require_once('conexaobd.php');
$user =  $_SESSION['usuario'];
$senha =  $_SESSION['senha'];

$consulta = "select * from cad_usuario where email = '$user' and senha = '$senha'";

$result = mysqli_query($conexao,$consulta);

$rows = mysqli_fetch_assoc($result);


$nomeuser = $rows['nome'];
$sobreuser = $rows['sobrenome'];
$projetouser = $rows['projeto'];
$emailuser = $rows['email'];
$senhauser = $rows['senha'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

  <script>
    function funcaovoltar()
    {
      window.location.href = "indexcliente1.php";
    }
    </script>
    
    <script type='text/javascript'>
  window.smartlook||(function(d) {
    var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
    var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
    c.charset='utf-8';c.src='https://rec.smartlook.com/recorder.js';h.appendChild(c);
    })(document);
    smartlook('init', '87e30c5e77c31abd6d3fdefcdf3243ceb9938b62');
</script>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Perfil - rTiWIM </title>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/test.css" rel="stylesheet" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icons/favicon-32x180.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/icons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/icons/favicon-1616.png" />
</head>


<body class="corpocadusuario">
<section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="https://i.ibb.co/BCK93mj/rtiwim.png" class="img-fluid"
            alt="Sample image" >
        </div>
        <div class="col-md-6 col-lg-6 col-xl-4 offset-xl-1">
          <form id = "formcad" action="alter_usuario.php" method="POST" >
            
             
            <div class="divider d-flex align-items-center my-1">
             
              <h1>Alterar Cadastro</h1>
            </div>
  
            <!-- Nome input -->
            <div class="form-outline mb-4">
              <input name = "nomeusuario" type="text" id="form3Example3" class="form-control form-control-lg"
                value = "<?php echo $nomeuser?> "/>
              <label class="form-label" for="form3Example3">Nome</label>
            </div>
  
            <!-- Sobre Nome input -->
            <div class="form-outline mb-3">
              <input name = "sobrenomeusuario" type="text" id="form3Example4" class="form-control form-control-lg"
                value = "<?php echo $sobreuser?> " />
              <label class="form-label" for="form3Example4">Sobre Nome</label>
            </div>

            <!-- Projeto input -->
            <div class="form-outline mb-3">
                <input name = "projeto" type="text" id="form3Example4" class="form-control form-control-lg"
                  value ="<?php echo $projetouser?> "/>
                <label class="form-label" for="form3Example4">Projeto</label>
              </div>
            
            <!-- Email input -->
            <div class="form-outline mb-3">
                <input name = "emailUsuario" type="email" id="form3Example4" class="form-control form-control-lg"
                  value = "<?php echo $emailuser?> " />
                <label class="form-label" for="form3Example4">Email</label>
              </div>
            
            <!-- Senha input -->
            <div class="form-outline mb-3">
                <input name = "senhausuario" type="password" id="form3Example4" class="form-control form-control-lg"
                  value ="<?php echo $senhauser?> "/>
                <label class="form-label" for="form3Example4">Senha</label>
              </div>


             <!-- Confirmação de Senha input -->
             <div class="form-outline mb-3">
                <input name = "confsenha" type="password" id="form3Example4" class="form-control form-control-lg"
                  value = "<?php echo $senhauser?> "/>
                <label class="form-label" for="form3Example4">Confirmação de Senha</label>
              </div>  

            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox Cliente -->
              <div class="form-check mb-0">
                <input name = "checkboxcliente" class="form-check-input me-2" type="checkbox" value="" id="checkcliente" />
                <label class="form-check-label" for="form2Example3">
                  Cliente
                </label>
              </div>
              <div class="form-check mb-0">
                <input name = "checkboxdesenvolvedor" class="form-check-input me-2" type="checkbox" value="" id="checkdesenvolvedor" />
                <label class="form-check-label" for="form2Example3">
                  Desenvolvedor
                </label>
              </div>
            </div>
  
            <div class="text-center text-lg-start mt-4 pt-1">
              <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.0rem; padding-right: 2.0rem;">Atualizar</button>
                <button type="button" onclick="funcaovoltar()" class="btn btn-primary btn-lg"
                style="padding-left: 2.0rem; padding-right: 2.0rem;">Voltar</button>
            </div>

            
          <?php  
           mysqli_close($conexao);
          ?>
          </form>
        </div>
      </div>
    </div>
    
      <!-- Copyright -->
  
      <!-- Right 
      <div>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="#!" class="text-white">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </div>
      
    </div>
    -->
  </section>

   </body>
  </html>
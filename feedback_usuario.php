
<?php
session_start();
require_once 'conexaobd.php';

$emailusuario = $_SESSION['usuario'];


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

     
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
    <title>Validar Páginas - rTiWIM </title>
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

    <script>
    function funcaovoltar()
    {
      window.location.href = "indexdesen.php";
    }
    </script>

<script>
    function validar()
    {
      //Validar Site
    }
    </script>

<script>
    $(function(){
    $(document).on('click', '.btn-danger', function(e) {
        e.preventDefault;
        var nome = $(this).closest('tr').find('td[data-nome]').data('nome');
        window.location.href = nome;
        
    });
});
    </script>
    
</head>


<body class="corpocadusuario">
<section class="vh-100" >
<div class="text-center text-lg-start mt-4 pt-1">
              <!--  <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.0rem; padding-right: 2.0rem;">Atualizar</button>-->
                <button type="button" onclick="funcaovoltar()" class="btn btn-primary btn-lg"
                style="padding-left: 2.0rem; padding-right: 2.0rem;">Voltar</button>
</hr>
                <h1>Validação de Feedbacks</h1>
            </div>
    
          <form id = "formcad" action="alter_cad_usuario.php" method="POST" >
            
             
           
            <div> 
                <table class="table table-striped">
                    <thead>
                      <tr id="teste">
                        <th scope="col">#</th>
                        <th scope="col">Usuário</th>
                        <th scope="col">Página</th>
                        <th scope="col">Log</th>
                        
                        
                      </tr>
                    </thead>

                    <?php 
                    $consulta = "select * from cad_feedback ;";
                    $result = mysqli_query($conexao,$consulta);

                    if($result){
                      while($row = mysqli_fetch_assoc($result)){                    
                    ?>
                    <tbody>
                      <tr>
                        <th scope="row"><?php echo "<p></p>",$row['id_feedback'] ?></th>
                        <td><?php echo "<p></p>",$row['nome_usuario'] ?></td>
                        <td><?php echo "<p></p>",$row['pagina'] ?></td>
                        <td><?php echo "<p></p>",$row['log'] ?></td>
                        
                      </tr>
                      </tbody>
                      <?php
                      }
                      }
                      mysqli_close($conexao);
                      ?>
                  </table>

            </div>
            
  
           

            
  
          </form>
       
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
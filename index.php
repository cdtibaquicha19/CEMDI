<?php
  session_start();
  if(isset($_SESSION['id'])){
    header('location: controller/redirec.php');
  }
?>
<!DOCTYPE html>
<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema CEMDI </title>
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/sweetalert.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
    <div class="container-fluid"></div>
      <div class="row">
  <div  class="col-md-6" sty>
          <video style="position:fixed; width:50%;" src="http://sistema.cemdi.com.co/img/pexels-artem-podrez-6823847.mp4" autoplay="true" muted="true" loop="true" poster="img/pexels-artem-podrez-6823847.mp4"></video>
  
      </div>

     <div style="background-color:white; height:900px;padding:150px" class="col-md-6">
          <!-- Margen superior (css personalizado )-->
			
          <div class="spacing-1" style="text-align: center;">
            <img  width="50%" src="img/logo joaking curvas.png">
			</div>
          <!-- Estructura del formulario -->
          <fieldset>
            <legend class="center">Sistema Gestión V 3.1</legend>
            <!-- Caja de texto para usuario -->
            <label class="sr-only" for="user">Usuario</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-user"></i></div>
              <input type="text" class="form-control" id="user" placeholder="Ingresa tu usuario">
            </div>

            <!-- Div espaciador -->
            <div class="spacing-2"></div>

            <!-- Caja de texto para la clave-->
            <label class="sr-only" for="clave">Contraseña</label>
            <div class="input-group">
              <div class="input-group-addon">
				  <a  href="#" id="show_password" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> 
				  </a>
				</div>
				
				 <input type="password" autocomplete="off" class="form-control" id="clave"  placeholder="Ingresa tu contraseña"></input>
            </div>
            <!-- Animacion de load (solo sera visible cuando el cliente espere una respuesta del servidor )-->
            <div class="row" id="load" hidden="hidden">
              <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
                <img src="img/load.gif" width="100%" alt="">
              </div>
              <div class="col-xs-12 center text-accent">
                <span>Validando información...</span>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-8 col-xs-offset-2">
                <div class="spacing-2"></div>
                <button type="button" class="btn btn-primary btn-block" name="button" id="login">Iniciar sesion</button>
              </div>
            </div>
            <section class="text-accent center">
              <div class="spacing-2"></div>            
            </section>
          </fieldset>
        </div>
      </div>



    </div>
	  
	  



<script type="text/javascript">
function mostrarPassword(){
		var cambio = document.getElementById("clave");
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = "password";
			$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}
	} 
	
	$(document).ready(function () {
	//CheckBox mostrar contraseña
	$('#ShowPassword').click(function () {
		$('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
	});
});
</script>



    <!-- / Final Formulario login -->

    <!-- Jquery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- SweetAlert js -->
    <script src="js/sweetalert.min.js"></script>
    <!-- Js personalizado -->
    <script src="js/operaciones.js"></script>
  </body>
</html>

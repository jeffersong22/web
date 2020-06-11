<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contactos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<?php
		include "includes/estilo.php";
	?>
</head>
<body>
	<?php
		include "includes/header.php";
		include "includes/nav.php";
		include "includes/slider.php";
	?>
	<section class="contenido">
	<center>
    <div class="contacto">
	<div class="horario">

        <h2 >Dirección y correo electrónico</h2>
        <p >Colombia. Cucuta Norte Santander, Barrio Santander</p>
        <a style="color: #fff;text-decoration:none;" href="">jeffersonrgomez24@gmail.com</a>
	<br><br>
            <h2>Horarios de atención</h2>
            <p>Lunes-Viernes 11:00-00:00</p>
            <p>Sábados-Domingos 15:00-00:00</p>
			<br>
			<h3 style="color: #fff;">Telefono</h3>
            <a style="color: #fff; text-decoration:none;" href="">0375822094</a>
           
            </div>
            
		</div>

		<style>
			.horario{
				border: 1px solid black;
				background: url('imagenes/h1.jpg');
				color: #fff;
			}
			.g{
				border: none;
				text-decoration: none;
			}
			pre{
				border: 1px solid black;

			}
		</style>
        
		</center>
	
<div class="container">
  <div style="text-align:center">
    <h2>¡Quiero recibir notificaciones!</h2>
    <p> Queremos que te contactes con nosotros para compartir tus opiniones, comentarios o si deseas mayor información acerca de una sección de tu interés. 
            Ingresa tus datos en el siguiente formulario y con mucho gusto te responderemos a la brevedad posible.</p>
  </div><br><br>
  <div class="row">
    <div class="column">
   
      <form action="/action_page.php">
        <label for="fname">Primer nombre</label>
        <input type="text" id="fname" name="firstname" placeholder="Primer nombre">
        <br>
        <label for="lname">Apellido</label>
        <input type="text" id="lname" name="lastname" placeholder="Apellido">
        <br>
        <label for="country">País</label>
        <select id="country" name="País">
          <option value="australia">Colombia</option>
          <option value="canada">Mexico</option>
          <option value="usa">USA</option>
        </select>
        <hr>
        <br>
        <label for="subject">Tema</label>
        <textarea id="subject" name="subject" placeholder="Escribe algo.." style="height:100px; width: 100%;"></textarea>
        <input class="botonn" type="submit" value="Enviar">
      </form>
   
    </div>
  </div>
</div>


    
<style>
  .row{
    max-width: 90%;
    border: 1px solid rgba(3, 3, 3, 3);
    padding: 20px 15px;
    margin: auto;
    background-color: black;
    border-radius: 10px;
  }
  .column{
    max-width: 100%;
    margin: auto;
    text-align:center;
    
  }
 input{
   width: 100%;
   color: black;
   padding: 2px;
 }
 .botonn{
  width: 100%;
   color: #fff;
   cursor: pointer;
   padding: 15px;
   background: url('imagenes/h1.jpg');
 }
 select{
   padding: 10px;
   width: 100%;

 }
 form{
   max-width: 100%;
 }
 label{
   height: 30px;
   color: #fff;
 }
</style>



<hr>
<br><br>
	</section>
	<?php
		include "includes/footer.php";
	?>
</body>
</html>
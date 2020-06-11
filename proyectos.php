
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Proyectos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
				<b><h3>Galería</h3></b>
				<h1><b>plataforma de facturacion electronica</b></h1>
				<p>Quisieras tener un buen control de tus productos, entregar facturas a tus clientes, que podras registrar.
					Esta plataforma tiene un menu adaptable muy genial ademas de especificar su ubicacion fecha y control administrador, supervisor y vendedor
					roles que seran importantes manejar en tu empresa de productos.
					Tenemos, para registrar los usuario o empleados que podrian acceder ala plataforma, como ver la lista de usuarios registrados.
					lo mismo tenemos para registrar productos o agregar mas productos, editar cambiar su precio y eliminar.
				</p>
				<br>
				<div class="w3-container">
 <b><p>Has Click para ver la imagen</p></b>
</div>

<div class="w3-row-padding">
  <div class="w3-container w3-third">
    <img src="imagenes/inicio.png" style="width:100%;cursor:pointer" 
	onclick="onClick(this)" class="w3-hover-opacity">
	<img src="imagenes/list_usu.png" style="width:100%;cursor:pointer" 
	onclick="onClick(this)" class="w3-hover-opacity">
	<h2><b>Inicio Y Usuario</b></h2>
	<p>Aqui damos a mostrar el inicio del la plataforma,
	mas la configuracion de cambio de clave y empresa a registrar.</p>
  </div>
  <div class="w3-container w3-third">
  <img src="imagenes/vender.png" style="width:100%;cursor:pointer"
  onclick="onClick(this)" class="w3-hover-opacity">
  <img src="imagenes/ventas.png" style="width:100%;cursor:pointer"
  onclick="onClick(this)" class="w3-hover-opacity">

  <h2><b>Listas Ventas</b></h2>
	<p>Aqui damos a mostrar la Lista de ventas echas donde se pueden ver tambien facturas anuladas y otras pagadas,
		tambien puedes filtrar o buscar la factura por fecha, hacer una nueva factura.
	</p>
  </div>
  <div class="w3-container w3-third">
    <img src="imagenes/regis_product.png" style="width:100%;cursor:pointer" 
	onclick="onClick(this)" class="w3-hover-opacity">
	<img src="imagenes/list_product.png" style="width:100%;cursor:pointer" 
	onclick="onClick(this)" class="w3-hover-opacity">
	<h2><b>Listas productos</b></h2>
	<p>Aqui damos a mostrar la lista de productos agregados,
		 donde tambien podremos registrar mas productos, editarlos o eliminarlos</p>
		 <br>
		 <br>
		 </div>

	<h2><b>Facturas pagadas</b></h2>
    <img src="imagenes/factura.png" style="width:100%;cursor:pointer" 
	onclick="onClick(this)" class="w3-hover-opacity">
	<img src="imagenes/anuladas.png" style="width:100%;cursor:pointer" 
	onclick="onClick(this)" class="w3-hover-opacity">
	<h2><b>Facturas pagadas y anuladas</b></h2>
	<p>Aqui damos a mostrar facturas pagadas ya registradas,
		 donde tambien podemos observar las facturas anuladas.
		 en ella van los datos ya registrados de la empresa,
		 y los datos del vendedor, el cliente que jalamos de la lista de los clientes.
		 Hora, fecha, y el numero de factura.
		
		</p>

		 <br>
		 <br>

  <div class="caja">
  <h2><b>Total de facturas pagadas y anuladas</b></h2>
    <img src="imagenes/total_ventas.png" style="width:100%;cursor:pointer" 
	onclick="onClick(this)" class="w3-hover-opacity">
	<p>Aqui damos a mostrar la suma del total de las facturas pagas,
		y el total de las facturas anuladas.
		 </p>
		 <br>
		 <br>
  </div>

 

  </div>
</div>
<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
  <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
  <div class="w3-modal-content w3-animate-zoom">
    <img id="img01" style="width:100%">
  </div>
</div>

<script>
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}
</script>
				
		</section>
		<section class="contenido">
				<h2>Pagina Web Restaurante</h2>
				<div class="w3-container">
  <p>Has Click para ver la imagen</p>
</div>

<div class="w3-row-padding">
  <div class="w3-container w3-third">
    <img src="imagenes/iniciores.png" style="width:100%;cursor:pointer" 
	onclick="onClick(this)" class="w3-hover-opacity">
	<h2>Inicio restaurante DelizaumPetit</h2>
<p>Aqui vemos la vista inicio de la pagina web responsi</p>  </div>
  <div class="w3-container w3-third">
    <img src="imagenes/recetas.png" style="width:100%;cursor:pointer" 
	onclick="onClick(this)" class="w3-hover-opacity">
	<img src="imagenes/recetas1.png" style="width:100%;cursor:pointer" 
	onclick="onClick(this)" class="w3-hover-opacity">
	<h2>Recetas de la pagina web</h2>
<p>Aqui vemos la vista recetas donde puedes mirar los platos favoritos</p>

</div>
  <div class="w3-container w3-third">
    <img src="imagenes/contac.png" style="width:100%;cursor:pointer" 
	onclick="onClick(this)" class="w3-hover-opacity">
	<h2>Contacto restaurante DelizaumPetit</h2>
<p>Aqui vemos la vista contacto para contactar con la empresa y darte nuestros servicios.</p>  </div>
</div>

<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
  <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
  <div class="w3-modal-content w3-animate-zoom">
    <img id="img01" style="width:100%">
  </div>
</div>

<script>
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}
</script>
				
		</section>


		
		<?php
			include "includes/footer.php";
		?>
</body>
</html>

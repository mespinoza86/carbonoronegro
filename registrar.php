<?php


$conex = mysql_connect("localhost","root","","carbon_oro_negro_cotizaciones");

	if($conex){
		echo "todo correcto";
	}else{
		echo "error";	
	}
?>
	<h3 class="email-bt-product">Te has inscrito correctamente</h3>
	<?php	
	if(isset($_POST['register'])){
		if(strlen($_POST['name']) > 1 &&
	   		strlen($_POST['email']) > 1 &&
	   		strlen($_POST['telefono']) > 1){
		
			$name = trim($_POST['name']);
			$email = trim($_POST['email']);
			$telefono = trim($_POST['telefono']);
			
			$consulta = "INSERT INTO cotizaciones(email, nombre, telefono, producto, Cantidad) VALUES ('$email','$nombre','$telefono','carbon','5')";
			$resultado = mysqli_query($conex, $consulta);
			if($resultado) {
				?>
				<h3  class="email-bt-product">Te has inscrito correctamente</h3>
				<?php
			}else{
				?>
				<h3  class="email-bt-product">ha ocurrido un error</h3>
				<?php
			}

		}else{	
			?>
			<h3>Complete todos los campos por favor</h3>
			<?php
		
		}
	}		





?>
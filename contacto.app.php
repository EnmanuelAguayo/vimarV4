<?php

##Declaracion de variables:
$errores = "";
$enviado = "";

## COMPROBAR SI EL FORMULARIO HA SIDO ENVIADO, ES DECIR, 
## PRESIONO EL BOTON DE ENVIAR PERO CORROBORAMOS QUE HAYA COMPLETADO TODOS LOS DATOS:
if(isset($_POST["enviar_mensaje"])){
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$celular = $_POST["celular"];
	$correo = $_POST["correo"];
	$descripcionProyecto = $_POST["descripcionProyecto"];

//validacion y filtro
	#nombre
	if(!empty($nombre))	{
		$nombre = trim($nombre); #borrar espacios
		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING); #borramos caracteres especiales
	} else {
		$errores .= "Por favor ingresa un nombre <br />"; 
	}

	#apellido
	if (!empty($apellido)) {
		$apellido = trim($apellido); #borrar espacios
		$apellido = filter_var($apellido, FILTER_SANITIZE_STRING); #borramos caracteres especiales
	} else {
		$errores .= "Por favor ingresa un apellido <br />";
	}

	#celular
	if (!empty($celular)) {
		$celular = trim($celular); #borrar espacios
		$celular = filter_var($celular, FILTER_SANITIZE_STRING); #borramos caracteres especiales
	} else {
		$errores .= "Por favor ingresa un celular <br />";
	}

	#correo
	if (!empty($correo)) {
		$correo = filter_var($correo, FILTER_SANITIZE_EMAIL); #borramos caracteres especiales

		if(!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
			$errores .= "Por favor ingresa un correo válido <br />";
		}//aqui validamos: si no es un correo valido entonces retorna errores, si es un correo valido entonces retorna el correo.
	} else {
		$errores .= "Por favor ingresa un correo <br />"; //comprobamos que el correo no este vacio.
	} 

	#descripcionProyecto
	if (!empty($descripcionProyecto)) {
		$descripcionProyecto = trim($descripcionProyecto); #borrar espacios
		$descripcionProyecto = filter_var($descripcionProyecto, FILTER_SANITIZE_STRING); #borramos caracteres especiales
	} else {
		$errores .= "Por favor ingresa la descripcion del proyecto <br />";
	}


	if(!$errores) {
		$enviar_a = "enmanuelruizdiaz@hotmail.com";
		$asunto = "Correo enviado desde vidriosMallorca.com";
		$mensaje_preparado = "De: " . $nombre . " " . $apellido . "\n";
		$mensaje_preparado = "Celular: " . $celular . "\n";
		$mensaje_preparado .= "Correo: " . $correo . "\n";
		$mensaje_preparado .= "Tipo proyecto: " . $descripcionProyecto;

		$enviado = true;
		//mail($enviar_a, $asunto, $mensaje_preparado); ##para que funcione debemos alzar nuestra página a un hosting.
		
	}


}//validacion de envio


require_once("contacto.php");


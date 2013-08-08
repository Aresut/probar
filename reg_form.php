<?php
session_name('responsiveForm');
session_start();

// Directorio Raíz de la app
// Es utilizado en templateEngine.inc.php
$root = '';

// números de captcha
$_SESSION['inicia_form'] = true;

if(!empty($_SESSION)){
	// Incluimos el template engine
	include('includes/templateEngine.inc.php');

	// Cargamos la plantilla
	$twig->display('reg_form.html',array(
		"titulo" => "Formulario responsivo en pasos",
		"piePagina" => "<p>cazaresluis.com | &copy; 2013 </p>"
	));
}
	

?>
<?php
session_name('demoForm');
session_start();

// Directorio Raíz de la app
// Es utilizado en templateEngine.inc.php
$root = '';

// números de captcha
$_SESSION['numero_a'] = mt_rand(1,9);
$_SESSION['numero_b'] = mt_rand(1,9);

if(!empty($_SESSION)){
	// Incluimos el template engine
	include('includes/templateEngine.inc.php');

	// Cargamos la plantilla
	$twig->display('default_layout.html',array(
		"numero_a" => $_SESSION['numero_a'],
		"numero_b" => $_SESSION['numero_b'],
		"titulo" => "Formulario responsivo en pasos",
		"piePagina" => "<p>cazaresluis.com | &copy; 2013 </p>"
	));
}
	

?>
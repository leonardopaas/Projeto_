<?php
print_r($_POST);
$email = $_POST['email'];
$senha = $_POST['senha'];
$arrayusuario = listaUsuarios();

foreach ($arrayusuario as $key) {
	if ($email == $arrayusuario['email'] && $senha == $arrayusuario['senha']) {
		# code...
	}
}

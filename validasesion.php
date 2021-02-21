<?php
// validasesion.php

// incluye conexion.php
require_once("conexion.php");

// inicia sesión
session_start();

// si no existe la variable de sesión idtemp o si su valor es vacío
if (!isset($_SESSION["idtemp"]) || $_SESSION["idtemp"] == "") {
		// si hubo sesión iniciada por usuario
		if (isset($usuario)) {
				// establece conexión a la base de datos bd_usuarios_siec
				$conexion = conectarse("bd_usuarios_siec");
				// actualiza el campo idtemp_usua del usuario con sesion iniciada
				$ssqlidtemp = "UPDATE tbl_usuarios "
						. "SET idtemp_usua = '' "
						. "WHERE (login_usua = '" . $usuario . "')";
				$rsidtemp = mysqli_query($conexion, $ssqlidtemp) or die("Error al actualizar tbl_usuarios.idtemp_usua... " . mysql_error());
		}
		// redirecciona el flujo al archivo index.php
		header("Location: ../index.php");
}
else {
		// establece conexión a la base de datos bd_usuarios_siec
		$conexion = conectarse("bd_usuarios_siec");
		// selecciona los campos del usuario con sesión activa
		$ssqlusuario = "SELECT * FROM tbl_usuarios WHERE (idtemp_usua = '" . $_SESSION["idtemp"] . "')";
		$rsusuario = mysqli_query($conexion, $ssqlusuario) or die("Error al consultar usuario con sesi&oacute;n activa... " . mysql_error());
		// crea la variable $usuario
		$filausuario = mysqli_fetch_array($rsusuario);
		$usuario = $filausuario["login_usua"];
		$rol = $filausuario["rol_usua"];
}
?>

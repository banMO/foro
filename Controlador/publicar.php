<?php
header('Location: http://localhost/ProyectoSprint3/Vista/publicar_asesor.php'); 
	require_once('../Modelo/publicacion_class.php');
	
	
$ana=$_POST['grupoempresa'];
$identificador="*";
	
	if(isset($_POST["enviar"])){
	
	if(isset($_POST["campoTitulo"])){
	$titulo      = $_POST["campoTitulo"];
	$descripcion   = $_POST["campoDescripcion"];
	$ruta        = $_POST["recurso"];
	$fehap=$_POST["fecha1"];
	$horap=$_POST["hora1"];
	$eshora=strftime($horap).":00";
	$fecha       = date('Y-m-d');
	$hora        =  date("G:H:i");

	$des=$descripcion.$identificador.$ana;
		}
	}
	
$publicacion = new Publicacion('leticia','publicaciones','habilitado',$titulo,$fecha,$hora,1024,$ruta,TRUE,TRUE,$des,$fechap,$eshorap);
	
			 
	
	

?>
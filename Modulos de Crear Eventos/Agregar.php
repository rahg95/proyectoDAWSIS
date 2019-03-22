<?php 
require('../class/claseEventos.php')
?>

<?php
if (isset($_POST['enviar'])) {
	$finicio = isset($_POST['finicio']) ? $_POST['finicio'] : "";
	$hinicio = isset($_POST['hinicio']) ? $_POST['hinicio'] : "";
	$ffinal = isset($_POST['ffinal']) ? $_POST['ffinal'] : "";
	$hfinal = isset($_POST['hfinal']) ? $_POST['hfinal'] : "";
	$titulo = isset($_POST['titulo']) ? $_POST['titulo'] : "";

	$lugar = isset($_POST['lugar']) ? $_POST['lugar'] : "";
	$info = isset($_POST['info']) ? $_POST['info'] : "";
	$cat = isset($_POST['cat']) ? $_POST['cat'] : "";
	//$file = isset($_POST['file']) ? $_POST['file'] : "";
	$html = "";
	$html .= "<!DOCTYPE html>";
	$html .= "<html lang='es'>";
	$html .= "<head>";
	$html .= "<title>Evento Agregado</title>";
	$html .= "<meta charset='utf-8'>";
	$html .= "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
	$html .= "<link rel='stylesheet' type='text/css' href='../css/style.css'/>
";
	$html .= "</head>";
	$html .= "<body>";
	$html .= "<br>";
	$html .= "<br>";
	$html .= " <a href='../Agregar Evento.php' class='botona'>\n";
	$html .= "Regresar</a>\n";
	echo $html;


	Eventos::mostrarEventos($finicio,$hinicio,$ffinal,$hfinal,$titulo,$lugar,$info,$cat);

}


	$html = "";
	$html .= "</body>";
	$html .= "<html>";
	echo $html;
?>
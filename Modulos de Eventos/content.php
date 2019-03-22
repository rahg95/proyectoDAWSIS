<?php
	$mostrarart ="art1";
	$mostrarart();

	function art1(){
		$html = "<div id='content'>";
		$html .= "<h2>Eventos</h2>";
		$html .= "<article class='post clearfix articulos' id='articulo1'>";
		$html .= "<img src='img/Eventos/evento1.jpg' class='entrada img1'";
		$html .= "<h3>Talleres de Búsqueda de Empleo</h3>";
		$html .= "<p>Talleres de Búsqueda de Empleo: En asociación con otras instituciones se desarrollan diversos talleres que brindan herramientas básicas para enfrentar satisfactoriamente un proceso de selección.</p>";
		$html .= "</article>";
		echo $html;
	}
?>
	

<?php
$mostrarart = "art2";
$mostrarart();

	function art2(){
		$html = "";
		$html .= "<article class='post clearfix articulos' id='articulo2'>";
		$html .= "<img src='img/Eventos/evento2.jpg' class='entrada img2'";
		$html .= "<h3>Jornadas de Inscripción</h3>";
		$html .= "<p>Jornadas de Inscripción: El objetivo primordial es que los alumnos, egresados y graduados puedan inscribir su curriculum actualizado en la base de datos ya existente.</p>";
		$html .= "</article>";
		echo $html;
	}			
?>



<?php
	$mostrarart = "art3";
	$mostrarart();
	
	function art3(){
		$html = "";
		$html .= "<article class='post clearfix  articulos' id='articulo3'>";
		$html .= "<img src='img/Eventos/evento3.jpg' class='entrada img3'";
		$html .= "<h3>Ferias de Trabajo</h3>";
		$html .= "<p>Ferias de Trabajo: El propósito es acercar la oferta laboral a los alumnos, egresados y graduados de la Universidad Don Bosco y facilitarle a las empresas la búsqueda de profesionales calificados.</p>";
		$html .= "</article>";
		$html .= "</div>";
		echo $html;
	}			
?>
<?php

class Eventos {
 
	public static function mostrarEventos($finicio,$hinicio,$ffinal,$hfinal,$titulo,$lugar,$info,$cat){

			echo "<div id='pagewrap'>\n<h2 style='color: white;'>Datos del Evento</h2>\n";
			echo "<table id='tabla1'>\n";
			echo "\t<tr>\n\t\t<th  colspan=\"2\">\n\t\t\tDetalles\n\t\t</th>\n\t</tr>\n";
			echo "\t<tr>\n\t\t<td>\n\t\t\tFecha de inicio: \n\t\t</td>\n\t\t<td class=\detail\">\n\t\t\t", $finicio, "\n\t\t</td>\n\t\t\t</t>\n";
			echo "\t<tr>\n\t\t<td>\n\t\t\tHora de inicio: \n\t\t</td>\n\t\t<td class=\detail\">\n\t\t\t", $hinicio, "\n\t\t</td>\n\t\t\t</t>\n";
			echo "\t<tr>\n\t\t<td>\n\t\t\tFecha final: \n\t\t</td>\n\t\t<td class=\detail\">\n\t\t\t", $ffinal, "\n\t\t</td>\n\t\t\t</t>\n";
			echo "\t<tr>\n\t\t<td>\n\t\t\tHora final: \n\t\t</td>\n\t\t<td class=\detail\">\n\t\t\t ", $hfinal, "\n\t\t</td>\n\t\t\t</t>\n";
			echo "\t<tr>\n\t\t<td>\n\t\t\tTitulo: \n\t\t</td>\n\t\t<td class=\number\">\n\t\t\t ", $titulo, "\n\t\t</td>\n\t\t\t</t>\n";
			echo "\t<tr>\n\t\t<td>\n\t\t\tLugar: \n\t\t</td>\n\t\t<td class=\number\">\n\t\t\t ", $lugar, "\n\t\t</td>\n\t\t\t</t>\n";
			echo "\t<tr>\n\t\t<td>\n\t\t\tInformacion: \n\t\t</td>\n\t\t<td class=\number\">\n\t\t\t ", $info, "\n\t\t</td>\n\t\t\t</t>\n";
			echo "\t<tr>\n\t\t<td>\n\t\t\tCategoria: \n\t\t</td>\n\t\t<td class=\number\">\n\t\t\t ", $cat, "\n\t\t</td>\n\t\t\t</t>\n";
	}

}

?>
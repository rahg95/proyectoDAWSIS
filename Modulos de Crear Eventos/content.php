<?php
    $eventos = "event";
    $eventos();


    function event(){
        $html = "";
        $html .= "<center>";
        $html .= "<div class='content'>";
        $html .= "<form id='form2' action='Modulos de Crear Eventos/Agregar.php' method='POST'>";
        $html .= "<legend class='text-center header'>";
        $html .= "<h2>Crear evento</h2>";
        $html .= "</legend>";
        $html .= "<br>";
        $html .= "<label>Fecha/hora inicio</label>";
        $html .= "<br>";
        $html .= "<input type='date' name='finicio' id='finicio' class='date'/>";
        $html .= "<input type='time' name='hinicio' id='hinicio' min='08:00' max='21:00' value='08:00' class='date'>";
        $html .= "<br>";
        $html .= "<label>Fecha/hora final</label>";
        $html .= "<br>";
        $html .= "<input type='date' name='ffinal' id='ffinal' class='date'/>";
        $html .= "<input type='time' name='hfinal' id='hfinal' min='08:00' max='21:00' value='08:00' class='date'>";
        $html .= "<br>";
        $html .= "<label>Titulo</label><input id='titulo' name='titulo' id='titulo' type='text' placeholder='Titulo' class='txt'>";
        $html .= "<br>";
        $html .= "<label>Lugar</label><input id='lugar' name='lugar' id='lugar' type='text' placeholder='Lugar' class='txt'>";
        $html .= "<br>";
        $html .= "<label>Informacion</label><textarea class='txt'  name='info'  id='info' placeholder='Ingrese la informacion' rows='6'></textarea>";
        $html .= "<br>";
        $html .= "<label>Categorias</label>";
        $html .= "<select name='cat' id='cat' class='txt'>";
        $html .= "<option value='social'>Social</option>";
        $html .= "<option value='privada'>Privada</option>";
        $html .= "<option value='gubernamental'>Gubernamental</option>";
        $html .= "<option value='empresarial'Empresarial</option>";
        $html .= "</select>";
        $html .= "<br>";
        $html .= "<span class='badge badge-secondary'><h3>Imagen</h3></span><input type='file' name='file' id='file' class='txt file'>";
        $html .= "<div id='boton1'>";
        $html .= "<input type='button' id='enviar' name='enviar' value='Enviar'>";
        $html .= "</div>";
        $html .= "<br>";
        $html .= "</form>";
        $html .= "</div>";
        $html .= "</center>";

        echo $html;

    }
?>
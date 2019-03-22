<header id="header">
	<hgroup>
		<img src="img/logo.png" id="logo" alt="logo">
		<h2 id="site-description" class="temaGoogle" >Agenda electronica con manejo de eventos por categorias</h2>
	</hgroup>

	<nav>
		<ul id="main-nav" class="clearfix">
			<?php
				$menuoptions = array(
					"opcion0" => array(
						"menu0" => "Inicio"
					),
					"opcion1" => array(
						"menu1" => "Empresas contratadoras"
					),
					"opcion2" => array(
						"menu2" => "Agregar Evento",						
					),
					"opcion3" => array(
						"menu3" => "Experiencias de exito"
					), 
					"opcion4" => array(
						"menu4" => "Temas de interes"
					),
					"opcion5" => array(
						"menu5" => "Contactanos"
					)
				);

				$opcion = "opcion";
				$menu = "menu";
				$listitems = "";

				for($i=0;$i<6;$i++){
					if($i==0){
						$listitems .= "<li><a href='index.php'>". $menuoptions[$opcion.$i][$menu.$i]."</a></li>";
					}else if($i == 2){
						$listitems .= "<li><a href='Eventos.php'>Eventos</a><ul><li><a href='".$menuoptions[$opcion.$i][$menu.$i].".php'>".$menuoptions[$opcion.$i][$menu.$i]."</a></li></ul></li>";
					}else{
						$listitems .= "<li><a href='".$menuoptions[$opcion.$i][$menu.$i].".php'>". $menuoptions[$opcion.$i][$menu.$i]."</a></li>";
					}

				}
				echo $listitems;
			?>
		</ul>
	</nav>
	<form id="searchform" action="javascript:void(0);">
		<input id="s" placeholder="Buscar" type="Search"/>
	</form>
</header>
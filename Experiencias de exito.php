<?php
	require ('Modulos generales/header.inc.php')
?>

<body>
	<div id="pagewrap">
		<!-- #header y #nav -->
		<?php
			require ('Modulos generales/nav.inc.php');
		?>
		
		<?php
			require ('Modulos de Experiencias/content.php');
		?>

		<?php
			require ('Modulos generales/sidebar.php');
		?>

		<?php
			require ('Modulos generales/footer.inc.php');
		?>
	</div>
</body>
</html>
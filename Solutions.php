<?php 
/*
	Template Name: Solutions
*/
?>
		<?php
			include (TEMPLATEPATH."/header2.php");
		?>	
<div class="Single">
	<section id="solutions" class="Products-landing">
	<div class="u-container">
		<h2 class="u-title u-titleW">Te ofrecemos soluciones</h2>
		<div class="u-flexbox">
			<div class="u-content">
				<p class="u-text u-textW">
					Tenemos a su disposicion Sistemas Biométricos que garantizan acceso solo de personal autorizado 
					a determinadas areas de su empresa, contamos con Relojes Biométricos que le garantizan un control total 
					de asistencia de sus empleados, con estos Sistemas usted tendrá:    

				</p>
				<ul>
					<li>Control de entradas/salidas de empleados</li>
					<li>Llegadas tardías</li>
					<li>Calculo de Horas Extras</li>
					<li>Fácil manejo de Reportes</li>
					<li>Efectivo registro de horas trabajadas</li>
					<li>Control de Acceso a determinadas areas de la empresa</li>
				</ul>
			</div>
			<div class="u-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/control-asistencia.png" alt=""/>
			</div>
			<a href="//localhost:8080/compor/contacto/" class="u-contactanos u-contactanosR">Preguntanos</a>
		</div>
		

		
	</div>
</section>
<section class="u-boxS">
	<?php
			include (TEMPLATEPATH."/soluciones.php");
		?>	
</section>
</div>	

<?php get_footer();?>
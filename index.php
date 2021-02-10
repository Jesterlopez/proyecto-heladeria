<?php
get_header();
?>

<div class="contenedor-inicio">
	<img src="<?php bloginfo('template_url')?>/img/Logo.svg" alt="">
</div>
<div>
<br>
</div>
<div class="bienvenida">
	<h1>Bienvenidos a Helados JALID</h1>
	<h2>... Dandole sabor a tu vida ...</h2>
	<br>
		<p>Elaborados de forma artesanal, con leche fresca del día y exquisitos veteados, 
		nuestros helados gozan de un gusto y una textura que los hacen únicos e irresistibles,
		 gracias a la perfecta combinación de materias primas naturales y de primera calidad.
		</p>
			<br>
	</div>


<div class="sabores-padre">
<?php if(have_posts()) : while (have_posts()) : the_post() ?>
	<div class="sabores-hijo">
			<?php if(has_post_thumbnail()){the_post_thumbnail('thumbnail');} 
			else {
       	       echo '<img class="no-imagen" src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/no-imagen.svg">';} ?>
			<p class="nom-helado">
			<?php the_title(); ?>
			</p>
			<p>Descripcion:</p>
			<p class="descripcion-helado">
				<?php the_excerpt(); ?>
			</p>
		</div>
	<?php endwhile; else :?>
<H3>No hay articulos</h3>
<?php endif;?>
</div>


<div class="titulos">
	<h3>Otros Productos</h3>
	<hr>
</div>
<div class="contenedor-otros">
	<div class="otros-hijo border-style">
	<img src="<?php bloginfo('template_url')?>/img/pd/batido4.jpg" alt="">
		<p>Batidos</p>
		<br>
	</div>

	<div class="otros-hijo border-style">
	<img src="<?php bloginfo('template_url')?>/img/pd/frape4.jpg" alt="">
		<p>Frapes</p>
		<br>
	</div>

	<div class="otros-hijo border-style" >
	<img src="<?php bloginfo('template_url')?>/img/pd/postre1.jpg" alt="">
		<p>Postres</p>
		<br>
	</div>
</div>
<div class="btn">
<button role="link" onclick="window.location='<?php bloginfo('url');?>/productos/'">Mas sabores</button>
</div>

<?php
get_footer();
?>
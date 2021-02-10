<?php
include_once 'plantilla/inicio.php';
?>

<div class="error-padre">
	<div class="error-hijo">
	<p class="text-error">!oooops Error</p>
	<button class="btn-inicio" role="link" onclick="window.location='<?php bloginfo('url'); ?>'"><a>INICIO</a></button>
		<p class="text-error">404</p>
		
	</div>
</div>
<?php
// include_once 'plantilla/footer.html';
include_once 'plantilla/cierre.php';
?>
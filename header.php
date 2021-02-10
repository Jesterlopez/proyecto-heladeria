<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">
  
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="<?php bloginfo('template_url')?>/img/favicon.png">
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/estilo.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/barra.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/footer.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/404.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/contacto.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/productos.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/quienes_somos.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Capriola&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Port+Lligat+Slab&display=swap" rel="stylesheet">

        <script src="<?php bloginfo('template_url')?>/js/jquery.min.js"></script>
        <title>Helados JALID</title>
</head>
<body>
		<nav>
		<div class="logo">
			<img class="img1" src="<?php bloginfo('template_url')?>/img/Lg.png" alt="">
			<img class="img2" src="<?php bloginfo('template_url')?>/img/Lg2.png" alt="">
			<!-- <h4>JALID</h4> -->
		</div>
		<?php 
              wp_nav_menu (array(
                'menu' => 'Menu Top',
                'container'       => 'ul',
                'container_id'    => 'lista',
                'menu_class'      => 'links',
                'item_wrap'       => '<ul>%3$s</u>',
                'theme_location'  => 'menu-top'

              ));
        ?>
		<!-- <ul class="links">
			<li class="link"><a href="index.php">Inicio</a></li>
			<li class="link"><a href="quienes_somos.php">Quienes Somos</a></li>
			<li class="link"><a href="productos.php">Productos</a></li>
			<li class="link"><a href="contacto.php">Contacto</a></li>
		</ul> -->
		<div class="icon-bar">
			<div class="linea1"></div>
			<div class="linea2"></div>
			<div class="linea3"></div>
		</div>
	</nav>


<?php
// include_once 'plantilla/inicio.php';
// include_once 'plantilla/barra.php';
get_header();
?>
<div class="contacto">
    <div class="contacto-inicio">
        <h3 class="texto-banner">para Mayor Informacion</h3>
        <h1 id="titulo-contacto">Contáctanos</h1>
    </div>
</div>
    <div class="contenedor-contacto">
        <div class="contenedor-formulario">
                <form id="formulario" action="<?php echo esc_url(admin_url('admin-post.php'))?>" method="POST">
                  <div class="formulario-grupo">
                    <label>Nombre:</label>
                    <input class="control" type="text" name="nombre" placeholder="Juan López" autocomplete="off" required>
                  </div>
                  <div class="formulario-grupo">
                    <label>Email:</label>
                    <input class="control" type="email" name="email" placeholder="juan2913@gmail.com" required>
                  </div>
                  <div class="formulario-grupo">
                    <label>Numero de telefono:</label>
                    <input class="control" type="text" name="telefono" placeholder="89323556" required>
                  </div>
                  <div class="formulario-grupo">
                    <label>Mensaje:</label>
                    <textarea class="control" name="mensaje" placeholder="Escribe tu mensaje..." required></textarea>
                  </div>
                  <div class="formulario-btn">
                    <button class="btn-formulario" type="submit">Enviar Mensaje</button>
                  </div>
                </form>
        </div>
        <div class="contenedor-imagen">

        </div>
</div>

<?php
get_footer();
?>
<?php get_header();?>
<?php if(have_posts()) : while (have_posts()) : the_post() ?>
<?php echo the_content();?>
<?php endwhile; else :?>
<H3>No hay articulos</h3>
<?php endif;?>
<?php get_footer();?>
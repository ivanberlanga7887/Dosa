<?php get_header(); ?>

<div id="site-content" class="position-relative">
  <?php
    get_template_part('partials/front-page/site-hero');
    get_template_part('partials/front-page/site-categorias');
    get_template_part('partials/front-page/section-industria-offshore');
    get_template_part('partials/front-page/site-infraestructura-global-cadiz');
    get_template_part('partials/front-page/site-red-global');
    get_template_part('partials/front-page/site-noticias');
    //get_template_part( 'partials/common/grid-lines' );*/
  ?>
</div>

<?php get_footer(); ?>
<section id="categorias" class="categorias over-lines d-flex">
    <div class="container-site py-5">
        
            <div class="row">
                <div class="left p-5 col-12 col-lg-6 h-100">
					
                    <div class="texts d-flex flex-column content-center flex-nowrap h-100 pt-5 mt-5">
						<h2 class="mt-4 p-3">50 años asegurando el éxito <br> de los proyectos más complejos.</h2>
                        <!--
                        <div class="img-zoom-wrapper rounded-2">
                            <img class="img-zoom card-img-top object-fit-fill w-100 rounded" src="<?php //echo //get_template_directory_uri(); ?>/assets/img/proyectos-horizontal.jpg" alt="">
                        </div>
                        -->
                        <p class="big-text mt-4 ps-4">Fundada en 1972,Dragados Offshore</strong> es especialista en la ejecución deplataformas offshore</strong> para la extracción y procesamiento depetróleo y gas natural</strong>, así como en laconstrucción de subestaciones offshore y onshore</strong>. Sucompromiso con la excelencia</strong> les ha consolidado como unreferente en la industria</strong>, ganándose laconfianza de clientes, socios y colaboradores</strong>.

                        </p>
                        <a href="#" class="btn-link text-uppercase">Ver todos
                            <img width="30" class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
                        </a>
                    </div>
                </div>
                <?php
                $cards = [
                    [
                        'img' => 'plataformas-fijas.jpg',
                        'title' => 'Plataformas fijas',
                        'text' => 'Estructuras marinas permanentes para extracción de petróleo y gas natural.',
                    ],
                    [
                        'img' => 'plataformas-flotantes.jpg',
                        'title' => 'Plataformas flotantes',
                        'text' => 'Estructuras marinas flotantes para extraer petróleo y gas en aguas profundas.',
                    ],
                    [
                        'img' => 'eolica-offshore.jpg',
                        'title' => 'Eólica offshore',
                        'text' => 'Generación de energía limpia con aerogeneradores marinos en alta mar.',
                    ],
                    [
                        'img' => 'construccion-modular.jpg',
                        'title' => 'Construcción modular',
                        'text' => 'Fabricación y ensamblaje en tierra para plataformas offshore de alta eficiencia.',
                    ],
                    [
                        'img' => 'submarino.jpg',
                        'title' => 'Submarino',
                        'text' => 'Proyectos subacuáticos de tecnología avanzada.',
                    ],
                    [
                        'img' => 'proyectos-especiales.jpg',
                        'title' => 'Proyectos Especiales',
                        'text' => 'Soluciones únicas y a medida para necesidades complejas.',
                    ]
                ];
                ?>

                <div class="right col-12 col-lg-6">
                    <?php for ($row = 0; $row < 3; $row++): // Loop for three rows ?>
                        <div class="row">
                            <?php foreach (array_slice($cards, $row * 2, 2) as $card): // Loop for two cards per row ?>
                                <!--card-->
                                <div class="card p-5 pb-1 col-12 col-lg-6">
                                    <div class="wrapper rounded-2">
                                        <img class="img-zoom card-img-top object-fit-cover w-100 rounded" src="<?php echo get_template_directory_uri() . '/assets/img/' . $card['img']; ?>" alt="">
                                    </div>
                                    <div class="card-body py-3 px-0">
                                        <h3 class="card-title"><?php echo $card['title']; ?></h3>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endfor; ?>               
            </div>
        </div>
    </div>
</section>

<style>
.categorias {
	background: #f1f1f1;
}
</style>

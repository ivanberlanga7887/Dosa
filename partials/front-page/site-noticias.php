<section class="noticias over-lines bg-gray">
    <div class="container-site py-5">
        <div class="row">
            <div class="col-12  col-lg-8 mx-auto">
                <div class="row">
                    <div class="col-12 col-lg-4 d-lg-none">
                        <h2>Actualidad</h2>
                        <p class="big-text ps-5">
                        Nuestro equipo se esfuerza por superar cada desafío. Esa actitud da lugar a logros significativos.
                        </p>∫
                        <a href="#" class="btn-link text-uppercase">
                            Ver todos
                            <img width="30" class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
                        </a>
                    </div>
	                <?php
	                $cards = [
		                [
			                'title' => '50HERTZ ADJUDICA A DRAGADOS OFFSHORE EL PROYECTO LANWIN3',
                            'img' => 'http://dosa.saotech.es/wp-content/uploads/2024/10/proyecto-lanwin3.jpg',
                            'categoria' => 'Sistemas Integrados'
		                ],
		                [
			                'title' => 'SISTEMA DE MONITORIZACIÓN MODULAR Y ADAPTABLE PARA INFRAESTRUCTURAS OFFSHORE',
                            'img' => 'http://dosa.saotech.es/wp-content/uploads/2024/10/sistema-monitorizacion.jpg',
                            'categoria' => 'Sistemas Integrados'
		                ],
		                [
			                'title' => 'DRAGADOS OFFSHORE. NUEVO YARD EN ALGECIRAS (ESPAÑA)',
                            'img' => 'http://dosa.saotech.es/wp-content/uploads/2024/10/nuevo-yard-algeciras.jpg',
                            'categoria' => 'Corporativa'
		                ],
		                [
			                'title' => 'RENOVACIÓN CERTIFICACION SAFETY CULTURE LEADER - NIVEL 3',
                            'img' => 'http://dosa.saotech.es/wp-content/uploads/2024/10/certificado-safety-culture-leader.jpg',
                            'categoria' => 'Calidad'
		                ],
	                ];
	                ?>

                    <div class="col-12 col-lg-6">
                        <div class="row">
			                <?php for ($i = 0; $i < 2; $i++): // Two columns ?>
                                <div class="col <?php echo $i == 1 ? 'pt-5' : ''; ?>">
					                <?php foreach (array_slice($cards, $i * 2, 2) as $card): // Loop through two cards per column ?>
                                        <div class="card">
                                            <div class="img-zoom-wrapper" style="height:140px">
                                                <img class="card-img-top img-zoom object-fit-cover h-100 w-100" src="<?php echo $card['img']; ?>" alt="">
                                            </div>
                                            <div class="cart-txt">
                                                <div class="meta-cats"><?php echo $card['categoria']; ?></div>
                                                <h2 class="">
			                                        <?php echo $card['title']; ?>
                                                </h2>
                                                <a href="#" class="btn-link text-uppercase mt-4">
                                                    Ver más
                                                    <img width="30" class="" src="<?php echo get_template_directory_uri() . '/assets/img/arrow-right.svg'; ?>" alt="">
                                                </a>
                                            </div>
                                        </div>
					                <?php endforeach; ?>
                                </div>
			                <?php endfor; ?>
                        </div>
                    </div>

                    <div class="col-lg-5 offset-lg-1 d-none d-lg-block align-self-center">
                        <h2>Actualidad</h2>
                        <p class="big-text ps-5">
                        Nuestro equipo se esfuerza por superar cada desafío. Esa actitud da lugar a logros significativos.
                        </p>
                        <a href="#" class="btn-link text-uppercase">
                            Ver todos
                            <img width="30" class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
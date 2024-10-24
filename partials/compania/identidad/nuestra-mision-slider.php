<?php
$slides = [
	[
		'src'     => 'https://img.freepik.com/free-photo/crop-architect-opening-blueprint_23-2147710985.jpg?t=st=1729170836~exp=1729174436~hmac=fa4d351ff6f726c80719a9cb3e7d3e91b56dbbcb9b08e6c2907ceacee8a7b722&w=655',
		'menu_item'   => 'Seguridad',
		'content' => 'La seguridad es la prioridad, respaldada por una política de Zero Accidentes HSE. La empresa se enorgullece de la capacitación de sus empleados en prevención de accidentes, dotándolos de conocimientos, herramientas y recursos para garantizar un entorno de trabajo seguro.'
	],
	[
		'src'     => 'https://img.freepik.com/free-photo/tiler-working-renovation-apartment_23-2149278557.jpg?t=st=1729171111~exp=1729174711~hmac=3a1d2cea510cc7e6e2320213fa147a908d03cc343a49e043b4bfa87f4b23ab1b&w=655',
		'menu_item'   => 'Personas',
		'content' => 'Se valora a las personas como el núcleo de la empresa. Se fomenta una cultura de dignidad, respeto y empoderamiento, permitiendo que cada miembro del equipo alcance su máximo potencial en un ambiente colaborativo.'
	],
	[
		'src'     => 'https://img.freepik.com/free-photo/construction-silhouette_1150-8336.jpg?t=st=1729173395~exp=1729176995~hmac=f7b807f0bfde29aaf41670709799db2b06a086c6bacbd5e688623d1bddf49b49&w=655',
		'menu_item'   => 'Enfoque al Cliente',
		'content' => 'La empresa está orientada a resultados, comprometida con superar las expectativas de sus clientes mediante la entrega de productos y servicios de alta calidad, con flexibilidad para adaptarse a sus necesidades específicas.'
	],
	[
		'src'     => 'https://img.freepik.com/free-photo/crop-architect-opening-blueprint_23-2147710985.jpg?t=st=1729170836~exp=1729174436~hmac=fa4d351ff6f726c80719a9cb3e7d3e91b56dbbcb9b08e6c2907ceacee8a7b722&w=655',
		'menu_item'   => 'Innovación',
		'content' => 'Mantener relaciones sólidas con clientes, equipos y comunidades, apoyando el crecimiento social y económico de manera responsable y sostenible, siguiendo las mejores prácticas de la industria.'
	],
	[
		'src'     => 'https://img.freepik.com/free-photo/tiler-working-renovation-apartment_23-2149278557.jpg?t=st=1729171111~exp=1729174711~hmac=3a1d2cea510cc7e6e2320213fa147a908d03cc343a49e043b4bfa87f4b23ab1b&w=655',
		'menu_item'   => 'Resultados',
		'content' => 'Se valora a las personas como el núcleo de la empresa. Se fomenta una cultura de dignidad, respeto y empoderamiento, permitiendo que cada miembro del equipo alcance su máximo potencial en un ambiente colaborativo.'
	],
	[
		'src'     => 'https://img.freepik.com/free-photo/construction-silhouette_1150-8336.jpg?t=st=1729173395~exp=1729176995~hmac=f7b807f0bfde29aaf41670709799db2b06a086c6bacbd5e688623d1bddf49b49&w=655',
		'menu_item'   => 'Sostenibilidad',
		'content' => 'La motivación es ofrecer un servicio profesional y proyectos de alta calidad. La empresa se enfoca en construir relaciones duraderas con sus clientes, trabajando estrechamente para asegurar el éxito en cada proyecto.'
	]
];
?>
<section class="nuestra-mision py-5">
    <div id="carouselExampleDark" class="carousel carousel-dark slide d-flex" data-bs-ride="carousel">
      <!-- menu -->
        <div class="wrapper-menu col-md-3">
            <div class="carousel-indicators rounded">
				<?php foreach ( $slides as $index => $slide ):
					$activeClass = ( $index === 0 ) ? 'active' : '';
					?>
                    <div class="<?= $activeClass ?> menu-item d-flex" type="button" data-bs-target="#carouselExampleDark"
                         data-bs-slide-to="<?= $index ?>" aria-label="Slide <?= $index + 1 ?>">
                        <span class="index">0<?php echo $index; ?></span>
                        <h3 class="menu-item-title"><?= $slide['menu_item'] ?></h3>
                    </div>
				<?php endforeach; ?>
            </div>
        </div>
        <div class="col-md-9 d-flex align-items-stretch">
            <div class="carousel-inner d-flex align-items-stretch">
                <!-- slides -->
				<?php foreach ( $slides as $index => $slide ): ?>
                    <div class="carousel-item <?= ( $index === 0 ) ? 'active' : '' ?>">
                        <div class="row d-flex align-items-stretch">
                            <div class="col-md-6">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="section-name">Valores</div>
                                    <h3><?= $slide['menu_item'] ?></h3>
                                    <p class="big-text"><?= $slide['content'] ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <div class="overflow-hidden">
                                <img src="<?= $slide['src'] ?>" class="carousel-img d-block rounded" alt="...">
                              </div>
                            </div>
                        </div>
                    </div>
				<?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
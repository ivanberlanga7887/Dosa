<section id="section-2">
    <div class="container py-5 over-lines">
        <div class="row pt-5 pb-3">
            <h2 class="mb-4">Instalaciones operativas</h2>
            <div class="col-lg-6 col-12 position-relative">
                <div class="pt-3">
                    <p>Dragados Offshore opera a nivel mundial desde seis ubicaciones clave: dos patios en Cádiz (España), dos en Tampico y Altamira (México), una base logística en Ciudad del Carmen (México) y oficinas en Ciudad de México y Houston (EE. UU.)
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-12 position-relative">
                <div class="pt-3">
                    <p>Sus instalaciones, diseñadas para albergar proyectos complejos offshore, permiten la construcción durante todo el año gracias a su ubicación geográfica y condiciones climáticas favorables.</p>
                </div>
            </div>
        </div>

        <div class="row pb-5 instalaciones-cards">
            <?php
            $cards = [
                [
                    'image' => 'infraestructura-global-cadiz.jpg',
                    'title' => 'El patio de Cádiz',
                    'text' => '<b>El patio de Cádiz</b>, inaugurado en 1975, es la sede central de la empresa y está ubicado en la Costa Atlántica, cerca de la ciudad de Cádiz y a 100 km del Estrecho de Gibraltar. Renovado en 2003 y 2009, se ha convertido en una de las instalaciones más modernas de Europa. El patio cuenta con 22 talleres cubiertos, especializados en tuberías, pulido y pintura, además de 86,000 m² de áreas de almacenaje. Su muelle de agua profunda conecta directamente con el mar abierto a través de un canal de navegación de 500 m de ancho y 4 km de largo, dragado a -12 m L.A.T.'
                ],
                [
                    'image' => 'patio-algeciras.jpg',
                    'title' => 'El patio de Algeciras',
                    'text' => 'El <b>patio de Algeciras</b>, ubicado en las instalaciones portuarias de Campamento en San Roque, Cádiz, opera bajo una concesión vigente hasta 2040 que abarca aproximadamente 400,000 m². Este espacio incluye un muelle exterior de 263 metros de longitud, que facilita el embarque y desembarque de elementos. Destinado a servir como astillero, el patio se utilizará para la integración de módulos de dos plataformas de 2 GW, complementando las instalaciones existentes en Puerto Real (Cádiz), donde se fabrican e integran los módulos de otras cuatro grandes plataformas offshore.'
                ],
                [
                    'image' => 'infraestructura-global-cadiz.jpg',
                    'title' => 'El patio de Tampico',
                    'text' => 'Dragados Offshore inauguró el <b>patio de Tampico</b> en 2003 tras cinco años de proyectos exitosos en el mercado mexicano. Ubicado en el lado sur del Río Pánuco en Pueblo Viejo, Veracruz, cerca de la ciudad de Tampico en el Golfo de México, esta instalación fue diseñada específicamente para la construcción de proyectos offshore. El patio ocupa 350,000 m², con más de 70,000 m² de áreas de fabricación que incluyen talleres para trabajos de calderería, soldadura, tubería e hidromecánica. Además, cuenta con más de 90,000 m² de áreas de almacenaje, dos muelles con caminos para deslizamiento y una capacidad de soporte del suelo superior a 20 toneladas por m².'
                ],
                [
                    'image' => 'patio-algeciras.jpg',
                    'title' => 'El patio de Altamira',
                    'text' => 'En 2013, la compañía amplió sus operaciones en México con la incorporación de un segundo patio en el país, el cuarto a nivel global:  el <b>patio de Altamira</b>. Esta expansión estratégica no solo responde a la creciente demanda del mercado local, sino que también busca captar proyectos potenciales en América del Norte y América del Sur.'
                ]
            ];

            foreach ($cards as $card) {
                ?>
                <div class="col-lg-6 col-12">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $card['image']; ?>" alt="">
                        <div class="card-body p-4">
                            <h5 class="card-title"><?php echo $card['title']; ?></h5>
                            <p class="card-text"><?php echo $card['text']; ?></p>
                        </div>
                        <a href="#" class="title btn-action"><?php echo $card['title']; ?></a>
                    </div>
                </div>
                <?php
            }
            ?>

        </div>
</section>
<script>
    const cards = document.querySelectorAll('.instalaciones-cards .card')

    // Fade Over
    cards.forEach(btn => {
        btn.addEventListener('click', (evt) => {
            evt.preventDefault();
        })
        btn.addEventListener('mouseenter', (evt) => {
            btn.closest('.card').classList.toggle('over')
        })
        btn.addEventListener('mouseleave', (evt) => {
            btn.closest('.card').classList.toggle('over')
        })
    })

    // Set Height
    let maxHeight = 0;
    cards.forEach((item) => {
        let height = item.offsetHeight;
        if (height > maxHeight) {
            maxHeight = height;
        }
    });
    cards.forEach(item => {
        item.style.height = `${maxHeight}px`;
    });
</script>
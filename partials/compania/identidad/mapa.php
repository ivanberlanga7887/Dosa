<section class="red-global over-lines">
	<div class="container py-5">
		<div class="row">
			<div class="col-9 mx-auto">
				<h2 class="text-center">
					Una red global que permite ofrecer soluciones completamente integradas y adaptadas a las necesidades específicas de sus clientes.
				</h2>
				<?php get_template_part( 'partials/front/mapa' );?>
			</div>
		</div>
	</div>
</section>
<style>
    #DOSAmap #MAPA, #DOSAmap #NOMBRES, #DOSAmap #PUNTOS, #DOSAmap #LINEAS {
        opacity: 0;
    }
</style>
<script>

    const mapa = document.querySelector("#DOSAmap #MAPA");
    const nombres = document.querySelector("#DOSAmap #NOMBRES");
    const puntos = document.querySelector("#DOSAmap #PUNTOS");
    const lineas = document.querySelector("#DOSAmap #LINEAS");

    gsap.registerPlugin(ScrollTrigger);

    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: mapa,
            start: "top 50%",
            end: "100% bottom",
            scrub:1
        },
    });

    // Animaciones secuenciales
    tl.to(mapa, { opacity: 1})
        .to(nombres, { opacity: 1}, "+=1")  // empieza después de 0.5s
        .to(puntos, { opacity: 1}, "+=1")   // empieza después de 0.5s
        .to(lineas, { opacity: 1}, "+=1");  // empieza después de 0.5s


</script>
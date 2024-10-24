// ----------------------------------------------------------------------------
// @author  Sao Branding 2024
// ----------------------------------------------------------------------------


(function($) {
    $(document).ready(function() {

        console.log('Starting ...');

        var hamburger = document.querySelector(".hamburger");
        var animation = 'linear';
        var top = $(window).scrollTop()
        var x = 150;
        var timeOut = 1500;
        var isSiteBtt = false;
        var isToggleMenu = false;

        var siteNav = $('#site-nav');

        // --------------------------------------------------------------------

        hamburger.addEventListener("click", function() {
            hamburger.classList.toggle("is-active");
        });

        // --------------------------------------------------------------------

        $(window).scroll(function() {

            var scroll = $(window).scrollTop();

            // console.log('this: ' + $(window).scrollTop());
            // console.log('top: ' + top);

            if (scroll > top) {
                siteNav.removeClass('active');
                siteNav.removeClass('up');
            } else {
                siteNav.addClass('active');
                siteNav.addClass('up');
            }

            if ($(window).scrollTop() > x) {

            } else {

                if (siteNav.hasClass('up')) {
                    siteNav.removeClass('active');
                    siteNav.removeClass('up');
                }
            }

            top = scroll;
        });

        // --------------------------------------------------------------------

        const isMobile = window.matchMedia("(max-width: 1024px)").matches;

        if (!isMobile) {
            const tl = gsap.timeline({
                scrollTrigger: {
                    trigger: "#site-hero",
                    start: "top top",
                    end: "bottom top", // Extiende el punto final para que se vea la animación completa
                    scrub: true,
                    pin: true,
                    pinSpacing: true, // Desactiva pinSpacing para evitar problemas de espacio
                    markers: false
                }
            });
            tl.to("#video-image-wrapper h1", {
                opacity: 0,
                ease: "power2.inOut"
            }, "<-0.2") // Hace que el h1 empiece a desaparecer un poco antes del inicio de la animación principal
            .to("#video-image-wrapper", {
                width: "50%",
                left: "50%",
                ease: "power2.inOut"
            })
            .to("#left-content", {
                opacity: 1,
                y: -100,
                ease: "power2.inOut"
            }); // Sincroniza la aparición del contenido de la izquierda con el movimiento del video
        
            // Refresca ScrollTrigger para asegurarse de que las posiciones sean correctas en diferentes tamaños de pantalla
            ScrollTrigger.refresh();
        }
        
        //Front Page Categorias
        if (!isMobile) {
            gsap.to(".categorias .left .texts", {
                scrollTrigger: {
                    trigger: ".categorias .left .texts",
                    start: "top top",
                    end: "bottom-=20% top",
                    pin: true,
                    pinSpacing: true,
                    markers: false
                }
            })
        }
        //Animación foto azul Secció Offshore
        if (!isMobile) {
            const container = document.querySelector(".industria-offshore");
            const image1 = document.querySelector("img.blue");
            const ctaContainer = document.querySelector(".container-cta-inner-content")
            const extraText = document.querySelector(".extra-txt")

            const tl = gsap.timeline({
                scrollTrigger: {
                    trigger: container,
                    start: "top 20%",
                    end: "100% bottom",
                    scrub:1,
                },
            });
        
        // Animaciones secuenciales
        tl.to(image1, { opacity: 0})
        }

        //Animación mapa
        if (!isMobile) {
            const mapa = document.querySelector("#DOSAmap #MAPA");
            const nombres = document.querySelector("#DOSAmap #NOMBRES");
            const puntos = document.querySelector("#DOSAmap #PUNTOS");
            const lineas = document.querySelector("#DOSAmap #LINEAS");

            gsap.registerPlugin(ScrollTrigger);

            ScrollTrigger.refresh();

            const tl = gsap.timeline({
                scrollTrigger: {
                    trigger: mapa,
                    start: "top 50%",
                    end: "100% bottom",
                    scrub:1,
                    markers:false
                },
            });
        
        // Animaciones secuenciales
        tl.to(mapa, { opacity: 1})
        .to(nombres, { opacity: 1}, "+=1") 
        .to(puntos, { opacity: 1}, "+=1")  
        .to(lineas, { opacity: 1}, "+=1"); 
        }

            // Compañía - Instalaciones
            if (!isMobile) {

                const columns = document.querySelectorAll('.card-container');
            
                columns.forEach((column, index) => {
            
                    const cardText = column.querySelector(".card-text .text");
                    let transitionFinished = false; // Para saber si la transición ha terminado
            
                    column.addEventListener('mouseenter', () => { 
                        transitionFinished = false; // Reiniciar al hacer hover
            
                        // Expandir hacia la derecha o izquierda
                        if (index % 2 === 0) {
                            column.classList.add('expanded-right');
                        } else {
                            column.classList.add('expanded-left');
                        }
                    });
            
                    column.addEventListener('mouseleave', () => {
                        // Remover todas las clases al salir del hover, pero respetar la transición
                        column.classList.remove('expanded-right', 'expanded-left', 'expanded-end');
                        cardText.style.display = "none";
                    });
            
                    // Detectar cuando la transición de 'flex-basis' ha finalizado
                    column.addEventListener('transitionend', (event) => {
                        if (event.propertyName === 'flex-basis') {
                            transitionFinished = true; // Marcar que la transición ha terminado
            
                            // Mostrar el texto solo si tiene las clases correctas
                            if (column.classList.contains('expanded-left') || column.classList.contains('expanded-right')) {
                                column.classList.add('expanded-end'); // Añadir la clase que marca el final de la expansión
                                cardText.style.display = "block"; // Mostrar el texto
                            } else {
                                cardText.style.display = "none"; // Ocultar si no tiene las clases
                            }
                        }
                    });
                });
            }
            

        /*
        if (!isMobile) {
            const columns = document.querySelectorAll('.card-container');
            const container = document.querySelector(".instalaciones-cards")
            const containerHeight = container.offsetHeight;



            columns.forEach((column, index) => {
                const originalHeight = column.offsetHeight; // Guardar la altura original
                const cardText = column.querySelector(".card-text .text")
                const image = column.querySelector('.card-img-top')
        
                column.addEventListener('mouseenter', () => {

                    if (index === columns.length - 1) {
                        column.classList.add('expanded-left');

                    } else {
                        column.classList.add('expanded-right');
                    }
                    //cardText.style.height = containerHeight + 'px';
                    image.style.display ="none";
                    cardText.style.display ="block"
                    cardText.style.opacity ="1"
                    //column.style.height = originalHeight + 50 + 'px'; // Ajustar altura al expandir
                });
        
                column.addEventListener('mouseleave', () => {
                    column.classList.remove('expanded-right', 'expanded-left');
                    image.style.display ="block";
                    cardText.style.display ="none"
                    cardText.style.opacity ="0"
                    //column.style.height = originalHeight + 'px'; // Restaurar altura original
                });
            });
        }
        */

        //Front Page Referentes
        /*
        const textBox = document.querySelector('.text-box-wrapper');
        const hiddenElementsOnStart = gsap.utils.toArray('.hidden-on-start');
        const hiddenElementsOnEnd = gsap.utils.toArray('.hidden-on-end');

        // Animación al hacer mouseenter: Expande desde la esquina inferior derecha
        textBox.addEventListener('mouseenter', () => {
            gsap.set(textBox, {
                transformOrigin: "bottom right" // Punto de origen de la transformación en la esquina inferior derecha
            });
         
            let tl = gsap.timeline();

            tl.to(textBox, {
                width: "100%",
                height: "100%",
                left: 0,
                right: 0,
                bottom: 0,
                top: 0,
                duration: 0.2,
                ease: "power2.inOut"
            });
            hiddenElementsOnEnd.forEach(element => {
                tl.to(element, {
                    opacity: 0,
                    display: "none",
                    duration: 0.2,
                    ease: "power2.inOut"
                }, ">");
            });
            hiddenElementsOnStart.forEach(element => {
                tl.to(element, {
                    opacity: 1,
                    display: "block",
                    height: "auto",
                    duration: 0.2,
                    ease: "power2.inOut"
                }, "+=0.1");
            });


        // Animación al hacer mouseleave: Contrae hacia la esquina inferior derecha
        textBox.addEventListener('mouseleave', () => {

            let tl = gsap.timeline();



            tl.to(textBox, {
                width: "auto", // Vuelve al tamaño original
                height: "auto",
                left: "auto", // Restablece las posiciones
                right: "0",   // Asegurarse de que el cuadro se contraiga hacia la derecha
                top: "50%",
                bottom:"auto",
                duration: 0.2,
                ease: "power2.inOut"
            })
            hiddenElementsOnStart.forEach(element => {
                tl.to(element, {
                    display:"none",
                    opacity: 0,
                    height: 0,
                    duration: 0.2,
                    ease: "power2.inOut"
                }, "+=0.1");
            });
            hiddenElementsOnEnd.forEach(element => {
                tl.to(element, {
                    opacity: 1,
                    display: "block",
                    duration: 0.2,
                    ease: "power2.inOut"
                }, ">");
            });
           
        
        }); 
    });*/

       /*

        toSection.on('click', function(e){
            e.preventDefault();

            var target = $($(this).children('a').attr('href'));

            $('html, body').animate({
                scrollTop : target.offset().top + 0
            }, 300, animation);
        });

        siteBtt.on('click', function(e){
            e.preventDefault();

            $('html, body').animate({
                scrollTop: 0
            }, 400, animation);

            isSiteBtt = false;
        });
        */

    });
})(jQuery);

// -------------------------------------------
// -> Vanilla JavaScript  bLock
// -------------------------------------------





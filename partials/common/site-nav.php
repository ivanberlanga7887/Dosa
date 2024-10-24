<nav class="container-fluid h-100">

    <div class="row h-100">
        <div class="col-9 col-lg-3 lg-wrapper h-100">

            <a href="/">
                <img id="lg-white" src="<?php echo get_template_directory_uri(); ?>/assets/img/lg-white.png"  width="240" />
                <img id="lg" src="<?php echo get_template_directory_uri(); ?>/assets/img/lg.png"  width="240" />
            </a>

        </div>
        <?php
                wp_nav_menu( array(
                    'theme_location' => 'menu-principal', // El identificador del menú registrado en functions.php
                    'container' => 'div',                 // El contenedor HTML (puede ser div, nav, etc.)
                    'container_class' => 'menu-principal col-6', // Clase CSS para el contenedor
                    'menu_class' => 'nav-menu col-6 h-100 d-none d-lg-flex justify-content-start',           // Clase CSS para los elementos <ul> del menú
                    'walker' => new Custom_Nav_Walker(),
                    'fallback_cb' => false,               // Callback si no hay menú configurado
                ) );
                ?>
        <div class="col-3 h-100 d-none d-lg-flex justify-content-end menu-idiomas">
         
            <ul class="d-flex">
                <li class="search">
                    <a href="#">
                        <img id="lg-white" src="<?php echo get_template_directory_uri(); ?>/assets/img/lupa.svg"  width="20" />
                        <img id="lg" src="<?php echo get_template_directory_uri(); ?>/assets/img/lupa-black.svg"  width="20" />
                    </a>
                </li>
                <li>
                    <a href="#" class="title light">
                        <span>
                            <?php _e('ES'); ?>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#" class="title light">
                        <span>
                            <?php _e('EN'); ?>
                        </span>
                    </a>
                </li>
            </ul>

        </div>
        
        <div class="col-3 h-100 d-lg-none" style="border-left: 1px solid rgba(255,255,255,0.25);">

            <button class="hamburger hamburger--spin my-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#MobileMenu" aria-controls="MobileMenu">
                <span class="hamburger-box mt-1">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
            

            <div class="offcanvas offcanvas-start" tabindex="-1" id="MobileMenu" aria-labelledby="MobileMenuLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="MobileMenuLabel">Offcanvas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul>
                        <?php 
                        // Loop para generar el HTML
                            foreach ($menuItems as $item) {
                                $menuKey = array_key_first($item); // Para obtener la clave del primer (y único) item dentro del array
                                $menu = $item[$menuKey];
                                ?>
                                <li>
                                    <a href="<?php echo esc_url($menu['url']); ?>" class="text-secondary">
                                        <span>
                                            <?php _e($menu['name']); ?>
                                        </span>
                                    </a>
                                </li>
                                <?php
                            }
                        ?>   

                    </ul>
                </div>
            </div>

        </div><!-- .lg -->

    </div><!-- .row -->
                    
</nav>

<style>
    #MobileMenu ul li a {}
    #MobileMenu ul li a span {
        color:rgb(0,0,0)!important;
        font-size: 18px!important;
        line-height: 3!important;
    }
    .search {
        padding-top:2.5rem;
    }
    .menu-principal .menu-item:nth-child(2) .dropdown-menu-custom .wrapper {
        background:#07509c;
        color:#fff;
    }
    .menu-principal .menu-item-has-children .dropdown-menu-custom  a {
        font-weight:500!important;
    }
    .menu-principal .menu-item-has-children .dropdown-menu-custom  a:hover {
        color:var(--main-red);
    }
    .dropdown-menu-custom {
        display:none;
        background-color:#fff;
        padding-left:0;
        column-gap: 1rem;
        position:absolute;
        width: 40rem;
        min-height: 274px;
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1);
    }

    .dropdown-menu-custom .wrapper {
        display:flex;
        flex-direction:column;
        padding: 2rem;
        background: #feca00;
        white-space: nowrap;
        width:50%;
    }
    .dropdown-menu-custom .wrapper .menu-item {
        padding-bottom: 0.5rem;
    }

    /* Mostrar el dropdown cuando se hace hover sobre el elemento del menú */
    .menu-item:hover .dropdown-menu-custom {   
        display: inline-flex;
        opacity: 1;
        visibility: visible;
    }
    .menu-principal .menu-item-has-children:after {
        content:'';
        color:#e92227;
        position:absolute;
        width: 10px;
        height:10px;
        top:50px;
        right: 0;
        background-image: url(http://dosa.saotech.es/wp-content/uploads/2024/10/chevron.svg);
        background-repeat:no-repeat;
    }
</style>


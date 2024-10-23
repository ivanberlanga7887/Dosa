<?php

class Custom_Nav_Walker extends Walker_Nav_Menu {

    private $top_level_item_count = 0; // Variable para contar los top-level items

    // Inicia el submenú
    function start_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat("\t", $depth);
        $classes = 'dropdown-menu-custom'; // Clase CSS para los submenús

        // Si estamos en el nivel 1 (submenú), mostramos el título del ítem superior con frases personalizadas
        if ( $depth === 0 && ! empty( $this->top_level_item_title ) ) {
            $output .= "\n$indent<ul class=\"$classes\">\n";

            // Frase personalizada según el top-level item
            if ( $this->top_level_item_count == 1 ) {
                $output .= '<div class="dropdown-title">' /*. esc_html( $this->top_level_item_title )*/ . ' Construir excelencia a nivel mundial: La Promesa de Dragados Offshore</div>';
            } elseif ( $this->top_level_item_count == 2 ) {
                $output .= '<div class="dropdown-title">' /*. esc_html( $this->top_level_item_title )*/ . ' Soluciones integrales de ingeniería, especialización en plataformas offshore y energías renovables.</div>';
            } else {
                $output .= '<div class="dropdown-title">' . esc_html( $this->top_level_item_title ) . '</div>'; // Mostrar el nombre del ítem superior sin frase
            }
        } else {
            $output .= "\n$indent<ul class=\"$classes\">\n";
        }

        // Añadir el envoltorio (wrapper) que contendrá los elementos del menú
        $output .= '<div class="wrapper">';
    }

    // Finaliza el submenú
    function end_lvl( &$output, $depth = 0, $args = null ) {
        // Cerrar el div.wrapper y el ul
        $output .= '</div>'; // Cerrar el div.wrapper
        $output .= "</ul>\n";
    }

    // Inicia el elemento del menú
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        $li_attributes = '';
        $class_names = $value = '';

        // Clases predeterminadas para los elementos del menú
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        // Si el elemento tiene submenús (nivel 0), guardamos el título del ítem superior
        if ( in_array('menu-item-has-children', $item->classes) && $depth === 0 ) {
            $this->top_level_item_title = apply_filters( 'the_title', $item->title, $item->ID );
            $this->top_level_item_count++; // Incrementamos el contador para identificar el primer y segundo ítem
            $classes[] = 'dropdown';
        }

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = ' class="' . esc_attr( $class_names ) . '"';

        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
        $id = strlen($id) ? ' id="' . esc_attr( $id ) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names . $li_attributes . '>';

        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target ) ? $item->target : '';
        $atts['rel']    = ! empty( $item->xfn )    ? $item->xfn    : '';
        $atts['href']   = ! empty( $item->url )    ? $item->url    : '';

        // Si tiene submenús y está en el nivel superior, agregar 'data-toggle="dropdown"' y clases adicionales
        if ( in_array('menu-item-has-children', $item->classes) && $depth === 0 ) {
            $atts['href']          = '#'; // El enlace no debe ser clicable si tiene submenús
            $atts['data-toggle']   = 'dropdown';
            $atts['class']         = 'nav-link'; // Clases adicionales
            $atts['aria-haspopup'] = 'true';
            $atts['aria-expanded'] = 'false';
        } else {
            $atts['class'] = 'nav-link';
        }

        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        // Generar el enlace del menú
        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';

        // Agregar <span> al texto de los elementos de nivel superior
        if ( $depth === 0 ) {
            $item_output .= '<span>' . $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after . '</span>';
        } else {
            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        }

        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

    // Finaliza el elemento del menú
    function end_el( &$output, $item, $depth = 0, $args = array() ) {
        $output .= "</li>\n";
    }
/*
    // Detecta si el elemento tiene hijos (submenús)
    function display_element( $element, &$children_elements, $max_depth, $depth = 0, $args, &$output ) {
        // Verificar si el elemento tiene hijos (submenús)
        $element->has_children = ! empty( $children_elements[ $element->ID ] );

        // Llamar al método original
        parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }*/
}



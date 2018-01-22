<?php

/* Collection of Walker classes */
/*

    wp_nav_menu()

    <div class="menu-container">
        <ul> // start_lvl()
            <li><a><span> // start_el()

                </a></span>

                <ul>
                </li> // end_el()

            <li><a>Link</a></li>
            <li><a>Link</a></li>
            <li><a>Link</a></li>

        </ul> // end_lvl()
    </div>

*/
/*

class Walker_Nav_Primary extends Walker_Nav_menu {

    function start_lvl( &$output, $depth = 0, $args = array() ){ //Startar ul
        $indent = str_repeat("\t",$depth);
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n"; //Lägger till en dropdown i menyn.
    }

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0  ) { //Startar li, a, span

        $indent = ($depth) ? str_repeat("\t",$depth) : '';

        $li_attributes = '';
        $class_names = $value = '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes; //Kollar om arryen är tom, om inte return vår item i vår start_el

        $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
        $classes[] = ($item->current || $item->current_item_anchestor) ? 'active': '';
        $classes[] = 'menu-item-' . $item->ID;
        if( $depth && $args->walker->has_children ) {
            $classes[] = 'dropdown-submenu';
        }

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes),
            $item, $args ) ); //Lägger till ett filter så wordpress hittar vår kod och inte krashar.
        $class_names = ' class="' . esc_attr($class_names) . '" ';

        $id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
        $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : ''; //Kollar om id är mer än 0, är det helt tomt skrivs en tom sträng ut

        $output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>'; //Connect variablerna

        $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : ''; //Kollar om titeln är tom, annars skriv ut en tom sträng
        $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : ''; //Kollar om target är tom, annars skriv ut en tom sträng
        $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : ''; //Kollar om rel är tom, annars skriv ut en tom sträng
        $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : ''; //Kollar om url är tom, annars skriv ut en tom sträng

        $attributes .= ! empty( $args->walker->has_children ) ? ' class="dropdown-toggle" data-toggle="dropdown" ' : '';

        $item_output = $args->before; //Skriver ut alla variabler vi definerade och skiver ut dem mellan <li>-taggen.
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= ( $depth == 0 &&$args->walker->has_children ) ? ' <b class="caret"></b></a>' : '</a>';
        $item_output .= $args->after;

        $output .= apply_filters  ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

    }
 /*
        function end_el(){ // stänger li a span

        }

        function end_lvl(){ // stänger ul

        }
}
    */

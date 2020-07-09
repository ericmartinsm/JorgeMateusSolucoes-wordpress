<?php
 

// carregando nossos scripts e folhas de estilos
function load_scripts(){

    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array('jquery'),'4.5.0', true ); //array ('jquery') quer dizer que o boostrap tem que ser enfileirado depois do jquery, pois o boots depende do jq para funcionar

    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' , array(), '1.0','all');

    wp_enqueue_style('template', get_template_directory_uri(). '/css/template.css', array(), '1.0','all'); // funcao vai enfileirar nossos arquivos css 
}
add_action('wp_enqueue_scripts', 'load_scripts'); // vai fazer com que seja chamado a funcao load_scripts dentro dfo wp_enqueue_scripts que é um hooks que é executado no inicio



// registrando nossos menus

register_nav_menus(
    array(
        'my_main_menu'=>'Main Menu'
    )
    );


    function add_favicon() {
        echo '<link rel="shortcut icon" type="image/png" href="'.get_template_directory_uri().'/images/favico.png" />';
        }
        add_action('wp_head', 'add_favicon');
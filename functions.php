<?php

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function my_theme_enqueue_styles() {
  $parenthandle = 'twentytwenty-style';
  $theme = wp_get_theme();
  wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', array(), $theme->parent()->get('Version'));
  wp_enqueue_style( 'child-style', get_stylesheet_uri(), array($parenthandle), $theme->get('Version'));
}

function addFormToContact() {
  if (is_page(45) && in_the_loop()) {
    $html = "<form>
             <label for='name'>Nommbre</label><br>
             <input id='name' type='text' placeholder='Nombre'></input><br>
             <label for='lname'>Apellidos</label><br>
             <input id='lname' type='text' placeholder='Apellidos'></input><br>
             <label for='email'>Email</label><br>
             <input id='email' type='email' placeholder='correo@mail.com'></input><br>
             <label for='message'>Mensaje</label><br>
             <textarea id='message' type='email' placeholder='Que curso te interesa? cuentanos!'></textarea><br>
             </form>";
    echo $html;
  }
}

add_filter('the_content', 'addFormToContact');
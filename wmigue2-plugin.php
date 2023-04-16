<?php

/**
 * Plugin Name: wmigue
 * Plugin URI: https://miweb.com.ar
 * Description: Inserta tagger
 * Version: 1.0.0
 * Author: wmigue
 * Author URI: https://miweb.com.ar
 * License: GPL2
 */

add_shortcode("wmigue2", function ($atts, $content) {

    ob_start();

    $out = ob_get_clean();

    // importo script que voy a utilizar
    wp_enqueue_script('wmigue-script', plugin_dir_url(__FILE__) . 'backend1.js', array(), '1.0.0', true);

    // Localizo un script, para luego usar esta url en el archivo que hace los fetch.
    wp_localize_script('wmigue-script', 'wmigue_backend', array('fetchar1' => plugins_url('backend1.php', dirname(__FILE__) . '/wmigue2-plugin')));

?>

    <div class="divHTML">
        <label>Palabra clave</label><br>
        <input class="form-control " id="query" ><br>
        <label>Tags</label><br>
        <input class="form-control " id="tags" style="width:75vw" placeholder="los tags deben ir separados por comas">
        <br><button class="click-wm">GUARDAR</button>
        <div class="status"></div>
    </div>
  




<?php
    return $out;
});
?>
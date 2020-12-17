<?php
/**
 * Plugin Name: Very First Plugin
 * Plugin URI: http://chriskottisse.ikt.khk.ee/
 * Version: 1.0
 * Author: Chris Kottisse
 * Author URI: http://chriskottisse.ikt.khk.ee/
**/

function alert_message()
{
    ?>
    <script type="text/javascript">
        function codeAddress() {
            alert('Tere tulemast');
        }
        window.onload = codeAddress;
    </script>

    <?php
}

add_action('wp_head', 'alert_message');
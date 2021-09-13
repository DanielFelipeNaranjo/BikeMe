<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
   // Custom Styles CSS
   wp_enqueue_style( 'sp-style','/style.css' );
   // Bootstrapp CSS
   wp_enqueue_style( 'sp-bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css' );
}
?>
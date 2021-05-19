<?php

/**
 * Register Custom Block Styles
 */
if ( function_exists( 'register_block_style' ) ) {
    function twentytwenty_child_block_styles_register_block_styles() {

        /**
         * Register block style
         */
        register_block_style(
            'core/cover',
            array(
                'name'         => 'stick-to-top',
                'label'        => 'Stick to top',
            )
        );
    }

    add_action( 'init', 'twentytwenty_child_block_styles_register_block_styles' );
}
<?php

class PurinaTheme {

    function __construct() {

        add_theme_support( 'post-thumbnails' );

    }

}

global $purinaTheme;

$purinaTheme = new PurinaTheme();

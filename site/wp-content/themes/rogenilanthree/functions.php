<?php

const WINDOWS_SYSTEMS = [
	[ 'name' => 'Casement Windows', 'slug' => 'casement-windows' ],
	[ 'name' => 'Sliding Windows', 'slug' => 'sliding-windows' ],
	[ 'name' => 'Awning Windows', 'slug' => 'awning-windows' ],
	[ 'name' => 'Single/Double Hung Windows', 'slug' => 'single-double-hung-windows' ],
	[ 'name' => 'Picture Windows', 'slug' => 'picture-windows' ],
	[ 'name' => 'Tilt & Turn Windows', 'slug' => 'tilt-turn-windows' ],
	[ 'name' => 'Folding Windows', 'slug' => 'folding-windows' ],
	[ 'name' => 'Bay & Bow Windows', 'slug' => 'bay-bow-windows' ],
	[ 'name' => 'Sound-Proof Windows', 'slug' => 'sound-proof-windows' ],
	[ 'name' => 'Specialty Windows', 'slug' => 'specialty-windows' ],
	[ 'name' => 'Intelligent/Electric Windows', 'slug' => 'intelligent-electric-windows' ],
	[ 'name' => 'Shutter Windows', 'slug' => 'shutter-windows' ],
];

const DOORS_SYSTEMS = [
	['name' => 'Exterior Doors', 'slug' => 'exterior-doors' ],
	['name' => 'Folding Doors', 'slug' => 'folding-doors' ],
	['name' => 'Sliding Doors', 'slug' => 'sliding-doors' ],
	['name' => 'Stacking Doors', 'slug' => 'stacking-doors' ],
	['name' => 'Casement Doors', 'slug' => 'casement-doors' ],
	['name' => 'Double Doors', 'slug' => 'double-doors' ],
];

const MORE_PRODUCTS = [
	['name' => 'Garage Door', 'slug' => 'garage-door' ],
	['name' => 'Skylight', 'slug' => 'skylight' ],
	['name' => 'Sunroom', 'slug' => 'sunroom' ],
	['name' => 'Combination Window And Door', 'slug' => 'combination-window-and-door' ],
	['name' => 'Curtain Wall', 'slug' => 'curtain-wall' ],
	['name' => 'Glass Railing', 'slug' => 'glass-railing' ],
];

function my_theme_enqueue_styles(): void
{
    wp_deregister_script('jquery');
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('bootstrap-min-css', get_template_directory_uri() . '/assets/bootstrap-5.3.3/css/bootstrap.min.css');

    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', [], '3.6.0', true);
    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js', [], '2.10.2', true);
    wp_enqueue_script('bootstrap-min-js', get_template_directory_uri() . '/assets/bootstrap-5.3.3/js/bootstrap.js', [], '5.3.3', true);

}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function nav_dropdown_items_class($atts): void
{
    $atts = shortcode_atts([
        'name' => 'group',
    ], $atts, 'nav_dropdown_items_class');
    $array = [
        'group' => 'absolute bg-grey left-3/4 opacity-0 group-hover:opacity-100 bg-neutral-100 shadow-lg rounded 
    z-10 -translate-x-1/2 -translate-y-2 group-hover:translate-y-3 transition-all duration-500 ease-in-out',
        'item' => 'block p-3 border-b text-gray-700 hover:bg-gray-700/[.05] hover:text-gray-700/[.8]',
    ];
    echo $array[$atts['name']];

}

add_shortcode('nav_dropdown_items_class', 'nav_dropdown_items_class');
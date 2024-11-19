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
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', [], '1.0.0');
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', [], '3.6.0', true);
	wp_enqueue_script('tailwindcss', 'https://cdn.tailwindcss.com', [], '1.0.0');
	wp_enqueue_script('nav', get_template_directory_uri() . '/assets/scripts/nav.js', [], '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function nav_dropdown_items_class($atts): void
{
    $atts = shortcode_atts([
        'name' => 'group',
    ], $atts, 'nav_dropdown_items_class');
    $array = [
        'group' => 'absolute bg-grey left-full opacity-0 group-hover:opacity-100 bg-neutral-100 shadow-lg rounded 
    z-10 xl:-translate-x-[68%] lg:-translate-x-[58%] md:-translate-x-[50%] -translate-y-2 group-hover:translate-y-3 transition-all duration-500 ease-in-out',
        'item' => 'block p-3 md:border-b text-gray-700 hover:bg-gray-700/[.05] hover:text-gray-700/[.8]',
    ];
    echo $array[$atts['name']];

}

add_shortcode('nav_dropdown_items_class', 'nav_dropdown_items_class');


//底部悬浮联系弹窗

function footer_contact_form_shortcode(): false|string {
	ob_start();
	?>
	<div id="floating-button" onclick="toggleFooterContactForm()"><i class="flaticon-sheet"></i></div>
	<!-- Contact Form Section -->
	<div id="footer-contact-form" class="max-w-screen-md mx-auto bg-white p-8 rounded-md shadow-md">
		<form class="grid grid-cols-1 md:grid-cols-2 gap-6">
			<!-- Email Field -->
			<div class="col-span-2">
				<label for="email" class="block text-sm font-bold mb-2 text-gray-700">E-MAIL *</label>
				<input type="email" id="email" placeholder="Email" class="w-full px-2 border-0 border-b border-stone-900 text-[0.75rem] leading-[3.125rem] focus:outline-0">
			</div>
			<!-- Phone Field -->
			<div>
				<label for="phone" class="block text-sm font-bold mb-2 text-gray-700">PHONE</label>
				<input type="text" id="phone" placeholder="Phone" class="w-full px-2 border-0 border-b border-stone-900 text-[0.75rem] leading-[3.125rem] focus:outline-0">
			</div>
			<!-- Country Field -->
			<div>
				<label for="country" class="block text-sm font-bold mb-2 text-gray-700">COUNTRY</label>
				<input type="text" id="country" placeholder="Country" class="w-full px-2 border-0 border-b border-stone-900 text-[0.75rem] leading-[3.125rem] focus:outline-0">
			</div>
			<!-- Message Field -->
			<div class="col-span-2">
				<label for="message" class="block text-sm font-bold mb-2 text-gray-700">MESSAGE *</label>
				<textarea id="message" rows="1" placeholder="Please tell us about your requirements" class="w-full px-2 border-0 border-b border-stone-900 text-[0.75rem] leading-[3.125rem] focus:outline-0"></textarea>
			</div>
			<!-- Submit Button -->
			<div class="col-span-2">
				<button type="submit" class="w-full p-3 bg-red-600 text-white font-bold rounded">SEND</button>
			</div>
		</form>
	</div>
	<?php
	return ob_get_clean();
}

add_shortcode( 'footer_contact_form', 'footer_contact_form_shortcode' );

function custom_breadcrumbs() {
	// 首页链接
	$home_link = home_url('/');
	$breadcrumbs = '<a href="' . $home_link . '">Home</a>';

	// 检查是否为首页
	if ( is_home() || is_front_page() ) {
		echo '<div class="breadcrumbs">' . $breadcrumbs . '</div>';
		return;
	}

	// 获取其他页面的层级
	if ( is_single() ) {
		// 获取分类信息
		$category = get_the_category();
		if ( $category ) {
			$breadcrumbs .= ' › <a href="' . get_category_link( $category[0]->term_id ) . '">' . $category[0]->name . '</a>';
		}
		$breadcrumbs .= ' › <span>' . get_the_title() . '</span>';
	} elseif ( is_page() ) {
		if ( $post = get_post( get_the_ID() ) ) {
			if ( $post->post_parent ) {
				$parent_link = get_permalink( $post->post_parent );
				$parent_title = get_the_title( $post->post_parent );
				$breadcrumbs .= ' › <a href="' . $parent_link . '">' . $parent_title . '</a>';
			}
		}
		$breadcrumbs .= ' › ' . get_the_title();
	} elseif ( is_category() ) {
		$breadcrumbs .= ' › ' . single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$breadcrumbs .= ' › ' . single_tag_title( '', false );
	} elseif ( is_archive() ) {
		$breadcrumbs .= ' › ' . post_type_archive_title( '', false );
	} elseif ( is_search() ) {
		$breadcrumbs .= ' › Search Result：' . get_search_query();
	} elseif ( is_404() ) {
		$breadcrumbs .= ' › Page Not Found';
	}

	// 输出面包屑导航
	echo '<div class="breadcrumbs">' . $breadcrumbs . '</div>';
}

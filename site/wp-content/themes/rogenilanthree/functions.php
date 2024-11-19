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


//底部悬浮联系弹窗 & Back to Top

function footer_contact_form_shortcode(): false|string {
	ob_start();
	?>
    <div id="floating-button" onclick="toggleFooterContactForm()"><i class="fa-regular fa-pen-to-square"></i></div>
    <div id="go-to-top-btn" class="bg-red-600" onclick="topFunction()"><i class="fa-solid fa-arrow-up"></i></div>
    <script>function topFunction() { document.body.scrollTop = 0; document.documentElement.scrollTo({top: 0, behavior: "smooth"}) }</script>
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


function add_custom_meta_for_categories() {
	if ( is_category() ) {
		$category      = get_queried_object();
		$category_slug = $category->slug; // 获取分类的 slug
		$category_id   = $category->term_id; // 获取分类的 ID
		$acf_title     = get_field( 'title', 'category_' . $category_id );
		// 根据分类 slug 或 ID 输出不同的 meta 标签
		if ( $category_slug == 'windows' ) {
			echo '<meta name="description" content="Find out more about the various custom design options that we offer for our high-quality aluminium windows.">';
			$custom_title = 'Aluminium Windows';
		} elseif ( $category_slug == 'casement-windows' ) {
			echo '<meta name="description" content="">';
			$custom_title = 'Casement Windows';
		} elseif ( $category_slug == 'sliding-windows' ) {
			echo '<meta name="description" content="">';
			$custom_title = 'Sliding Windows';
		} elseif ( $category_slug == 'awning-windows' ) {
			echo '<meta name="description" content="">';
			$custom_title = 'Awning Windows';
		} elseif ( $category_slug == 'single-double-hung-windows' ) {
			echo '<meta name="description" content="">';
			$custom_title = 'Single/Double Hung Windows';
		} elseif ( $category_slug == 'picture-windows' ) {
			echo '<meta name="description" content="">';
			$custom_title = 'Picture Windows';
		} elseif ( $category_slug == 'tilt-turn-windows' ) {
			echo '<meta name="description" content="">';
			$custom_title = 'Tilt &amp; Turn Windows';
		} elseif ( $category_slug == 'folding-windows' ) {
			echo '<meta name="description" content="">';
			$custom_title = 'Folding Windows';
		} elseif ( $category_slug == 'bay-bow-windows' ) {
			echo '<meta name="description" content="">';
			$custom_title = 'Bay & Bow Windows';
		} elseif ( $category_slug == 'sound-proof-windows' ) {
			echo '<meta name="description" content="">';
			$custom_title = 'Sound-Proof Windows';
		} elseif ( $category_slug == 'specialty-windows' ) {
			echo '<meta name="" content="">';
			$custom_title = 'Specialty Windows';
		} elseif ( $category_slug == 'intelligent-electric-windows' ) {
			echo '<meta name="description" content="">';
			$custom_title = 'Intelligent/Electric Windows';
		} elseif ( $category_slug == 'shutter-windows' ) {
			echo '<meta name="description" content="">';
			$custom_title = 'Shutter Windows';
		} elseif ( $category_slug == 'doors' ) {
			echo '<meta name="description" content="">';
			$custom_title = 'Aluminium Doors';
		} elseif ( $category_slug == 'exterior-doors' ) {
			echo '<meta name="description" content="">';
			$custom_title = 'Exterior Doors';
		} elseif ( $category_slug == 'folding-doors' ) {
			echo '<meta name="description" content="">';
			$custom_title = 'Folding Doors';
		} elseif ( $category_slug == 'sliding-doors' ) {
			echo '<meta name="description" content="">';
			$custom_title = 'Sliding Doors';
		} elseif ( $category_slug == 'stacking-doors' ) {
			echo '<meta name="description" content="">';
			$custom_title = 'Stacking Doors';
		} elseif ( $category_slug == 'casement-doors' ) {
			echo '<meta name="description" content="">';
			$custom_title = 'Casement Doors';
		} elseif ( $category_slug == 'double-doors' ) {
			echo '<meta name="description" content="">';
			$custom_title = 'Double Doors';
		} elseif ( $category_slug == 'more-products' ) {
			echo '<meta name="description" content="Special category content for ID 123">';
			$custom_title = 'More Products';
		} elseif ( $category_slug == 'garage-door' ) {
			echo '<meta name="description" content="">';
			$custom_title = 'Garage Door';
		} elseif ( $category_slug == 'skylight' ) {
			echo '<meta name="description" content="">';
			$custom_title = 'Skylight';
		} elseif ( $category_slug == 'sunroom' ) {
			echo '<meta name="description" content="">';
			$custom_title = 'Sunroom';
		} elseif ( $category_slug == 'combination-window-and-door' ) {
			echo '<meta name="description" content="">';
			$custom_title = 'Combination Window And Door';
		} elseif ( $category_slug == 'curtain-wall' ) {
			echo '<meta name="description" content="">';
			$custom_title = 'Curtain Wall';
		} elseif ( $category_slug == 'glass-railing' ) {
			echo '<meta name="description" content="">';
			$custom_title = 'Glass Railing';
		} elseif ( $category_slug == 'blog' ) {
			echo '<meta name="description" content="">';
			$custom_title = 'Blog';
		} else {
			echo '<meta name="description" content="">';
		}
	}

	if ( is_page( 'our-story' ) ) {
		$custom_title = 'Our Story';
	} elseif ( is_page( 'why-choose-us' ) ) {
		$custom_title = 'Why Choose Us';
	} elseif ( is_page( 'contact-us' ) ) {
		$custom_title = 'Contact Us';
	}

	if ( ! is_category() ) {
		$acf_title = get_field( 'title' );
	}
	if ( is_single() ) {
		$custom_title = get_the_title();
	}

	$title = '<title>';

	if ( $acf_title ) {
		$title .= $acf_title;
	} else {
		if ( $custom_title ) {
			$title .= $custom_title . ' | ' . get_bloginfo( 'name' );
		} else {
			$title .= get_bloginfo( 'name' );
		}
	}
	$title .= '</title>';
	echo $title;
}

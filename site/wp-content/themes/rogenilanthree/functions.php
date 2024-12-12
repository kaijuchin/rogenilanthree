<?php
add_filter( 'show_admin_bar', '__return_false' );
const WINDOWS_SYSTEMS = [
	[ 'name' => 'Casement Windows', 'slug' => 'casement-windows', 'nav_image' => '/assets/images/nav/nav_tb_01.png' ],
	[ 'name' => 'Sliding Windows', 'slug' => 'sliding-windows', 'nav_image' => '/assets/images/nav/nav_tb_02.png' ],
	[ 'name' => 'Awning Windows', 'slug' => 'awning-windows', 'nav_image' => '/assets/images/nav/nav_tb_07.png' ],
	[ 'name' => 'Picture Windows', 'slug' => 'picture-windows', 'nav_image' => '/assets/images/nav/nav_tb_05.png' ],
	[
		'name'      => 'Tilt & Turn Windows',
		'slug'      => 'tilt-turn-windows',
		'nav_image' => '/assets/images/nav/nav_tb_04.png'
	],
	[ 'name' => 'Folding Windows', 'slug' => 'folding-windows', 'nav_image' => '/assets/images/nav/nav_tb_10.png' ],
	[ 'name' => 'Bay & Bow Windows', 'slug' => 'bay-bow-windows', 'nav_image' => '/assets/images/nav/nav_tb_09.png' ],
	[
		'name'      => 'Sound-Proof Windows',
		'slug'      => 'sound-proof-windows',
		'nav_image' => '/assets/images/nav/nav_tb_01.png'
	],
	[ 'name' => 'Specialty Windows', 'slug' => 'specialty-windows', 'nav_image' => '/assets/images/nav/nav_tb_06.png' ],
	[ 'name' => 'Shutter Windows', 'slug' => 'shutter-windows', 'nav_image' => '/assets/images/nav/nav_tb_01.png' ],
	[
		'name'      => 'Single/Double Hung Windows',
		'slug'      => 'single-double-hung-windows',
		'nav_image' => '/assets/images/nav/nav_tb_03.png'
	],
	[
		'name'      => 'Intelligent/Electric Windows',
		'slug'      => 'intelligent-electric-windows',
		'nav_image' => '/assets/images/nav/nav_tb_01.png'
	],


];

const DOORS_SYSTEMS   = [
	[ 'name' => 'Exterior Doors', 'slug' => 'exterior-doors', 'nav_image' => '/assets/images/nav/nav_door_01.png' ],
	[ 'name' => 'Folding Doors', 'slug' => 'folding-doors', 'nav_image' => '/assets/images/nav/nav_door_07.png' ],
	[ 'name' => 'Sliding Doors', 'slug' => 'sliding-doors', 'nav_image' => '/assets/images/nav/nav_door_05.png' ],
	[ 'name' => 'Stacking Doors', 'slug' => 'stacking-doors', 'nav_image' => '/assets/images/nav/nav_tb_01.png' ],
	[ 'name' => 'Casement Doors', 'slug' => 'casement-doors', 'nav_image' => '/assets/images/nav/nav_door_06.png' ],
	[ 'name' => 'Double Doors', 'slug' => 'double-doors', 'nav_image' => '/assets/images/nav/nav_door_08.png' ],
];

const MORE_PRODUCTS   = [
	[ 'name' => 'Garage Door', 'slug' => 'garage-door', 'nav_image' => '/assets/images/nav/nav_more_03.png' ],
	[ 'name' => 'Skylight', 'slug' => 'skylight', 'nav_image' => '/assets/images/nav/nav_more_01.png' ],
	[ 'name' => 'Sunroom', 'slug' => 'sunroom', 'nav_image' => '/assets/images/nav/nav_more_02.png' ],
	[ 'name' => 'Curtain Wall', 'slug' => 'curtain-wall', 'nav_image' => '/assets/images/nav/nav_more_05.png' ],
	[ 'name' => 'Glass Railing', 'slug' => 'glass-railing', 'nav_image' => '/assets/images/nav/nav_more_06.png' ],
	[
		'name'      => 'Combination Window And Door',
		'slug'      => 'combination-window-and-door',
		'nav_image' => '/assets/images/nav/nav_more_08.png'
	],
];

const FRIENDLY_LINKS  = [
	[ 'name' => 'Richocean China', 'slug' => 'richocean-china', 'link' => 'https://www.richoceanchina.com/' ],
];
function my_theme_enqueue_styles(): void {
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', [], '3.6.0' );
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', [], '1.0.0' );
	wp_enqueue_script( 'tailwindcss', 'https://cdn.tailwindcss.com', [], '1.0.0' );
	wp_enqueue_script( 'nav', get_template_directory_uri() . '/assets/scripts/nav.js', [], '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function nav_dropdown_items_class( $atts ): void {
	$atts  = shortcode_atts( [
		'name' => 'group',
	], $atts, 'nav_dropdown_items_class' );
	$array = [
		'group' => 'absolute bg-grey left-full opacity-0 group-hover:opacity-100 bg-neutral-100 shadow-lg rounded 
    z-10 xl:-translate-x-[68%] lg:-translate-x-[58%] md:-translate-x-[50%] -translate-y-2 group-hover:translate-y-3 transition-all duration-500 ease-in-out',
		'item'  => 'block p-3 md:border-b text-gray-700 hover:bg-gray-700/[.05] hover:text-gray-700/[.8]',
	];
	echo $array[ $atts['name'] ];

}

add_shortcode( 'nav_dropdown_items_class', 'nav_dropdown_items_class' );


//底部悬浮联系弹窗 & Back to Top

function add_custom_meta_for_categories() {
	$acf_title = get_field( 'title' ) ?? '';
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
		} elseif ( $category_slug == 'our-story' ) {
			echo '<meta name="description" content="">';
			$custom_title = 'Our Story';
		} elseif ( $category_slug == 'why-choose-us' ) {
			echo '<meta name="description" content="">';
			$custom_title = 'Why Choose Us';
		} elseif ( $category_slug == 'corporate-video' ) {
			echo '<meta name="description" content="">';
			$custom_title = 'Corporate Video';
		} elseif ( $category_slug == 'visit-factory' ) {
			echo '<meta name="description" content="">';
			$custom_title = 'Visit Factory';
		} else {
			echo '<meta name="description" content="">';
		}
	}

	if ( is_page( 'contact-us' ) ) {
		$custom_title = 'Contact Us';
	}

	if ( ! is_category() ) {
		$acf_title = get_field( 'title' );
	}
	if ( is_single() ) {
		$custom_title = get_the_title();
	}

	if ( is_front_page() ) {
		$custom_title = 'Global Luxury Aluminum Windows and Doors Manufacturer | Richocean Windows & Doors';
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


function custom_product_category_template_shortcode( $atts ) {
	// 获取当前查询对象，确保是分类页面
	if ( ! is_category() ) {
		return null;
	}

	ob_start(); // 开启输出缓冲区

	get_header(); // 包含页眉

	$category = get_queried_object();

	// 开始生成页面内容
	?>
    <section class="relative py-16 bg-cover bg-center flex items-center justify-center"
             style="background-image: url('<?= get_field( 'banner_image', 'category_' . $category->term_id )['link'] ?: get_theme_file_uri( '/assets/images/banner_01.jpg' ) ?>');">
        <div class="bg-black bg-opacity-60 text-white p-8 md:p-12 lg:p-16 max-w-2xl">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
				<?= strtoupper( $category->name ) ?>
            </h1>
        </div>
    </section>
    <section class="py-16">
        <div class="container mx-auto p-8">
            <!-- Header Section -->
            <div class="mb-8">
                <h2 class="text-4xl font-bold text-gray-800 mb-4"><?= strtoupper( $category->name ) ?></h2>
                <nav class="text-gray-600">
                    <!--                    <a href="#" class="hover:text-red-500">Home</a> &nbsp; &gt; &nbsp; <a href="#"-->
                    <!--                                                                                          class="hover:text-red-500">Windows</a>-->
                    <!--                    &nbsp; &gt; &nbsp; <span class="font-bold text-gray-800">Casement Windows</span>-->
					<?php custom_breadcrumbs(); ?>
                </nav>
            </div>
            <!-- Articles Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
				<?php
				$posts_per_page = get_option( 'posts_per_page' );
				$paged          = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$query          = new WP_Query( [
					'posts_per_page' => $posts_per_page,
					'cat'            => $category->term_id,
					'paged'          => $paged
				] );
				$directory      = get_template_directory() . '/assets/images/' . $category->slug . '/';

				$images = array_merge(
					glob( $directory . '*.jpg' ),
					glob( $directory . '*.jpeg' ),
					glob( $directory . '*.png' ),
					glob( $directory . '*.gif' )
				);

				$urls = [];
				foreach ( $images as $image ) {
					$urls[] = '/assets/images/' . $category->slug . '/' . basename( $image );
				}
				$default_images_count = count( $urls ) ?: 1;
				$count                = 0;
				if ( $query->have_posts() ): while ( $query->have_posts() ): $query->the_post(); ?>
					<?php
					$count              = $count % $default_images_count;
					$post_thumbnail_url = get_field( 'image' )['link'] ?: ( $urls ? get_theme_file_uri( $urls[ $count ++ ] ) : get_theme_file_uri( '/assets/images/richocean-logo.png' ) );
                    $post_thumbnail_alt = get_field( 'image' )['alt'] ?: get_the_title();
					$post_title         = get_the_title();
					$post_excerpt       = get_the_excerpt();
					$permalink          = get_permalink();
					?>
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden border">
                        <a target="_blank" href="<?= $permalink ?>">
                        <img src="<?= $post_thumbnail_url ?>"
                             alt="<?= $post_thumbnail_alt ?>"
                             class="w-full h-68 object-cover <?= count( $urls ) == 0 ? 'p-8' : '' ?>">
                        <div class="p-6 flex flex-col justify-between md:h-[220px]">
                            <div>
                                <h3 class="text-2xl font-bold text-gray-800 mb-4"><?= $post_title ?></h3>
                                    <p class="text-gray-600 mb-6"><?= wp_trim_words( $post_excerpt, 8 ) ?></p>
                            </div>
                            <a target="_blank" href="<?= $permalink ?>"
                               class="text-red-500 font-bold flex items-center hover:text-red-700">MORE INFO
                                <span class="ml-2">&rarr;</span></a>
                        </div>
                        </a>
                    </div>
				<?php endwhile; endif;
				wp_reset_postdata(); ?>
            </div>
        </div>
        <!-- Pagination -->
        <div class="flex justify-center items-center space-x-2">

			<?php
			$total_pages  = ceil( $query->found_posts / $posts_per_page ); // Assuming '10' is the posts_per_page value, adjust if different
			$current_page = $paged;

			// Only display pagination if there's more than one page
			if ( $total_pages > 1 ):
				echo '<div class="flex justify-center items-center space-x-2">';
				if ( $current_page > 1 ):
					echo '<button class="w-8 h-8 text-gray-600 border rounded-md hover:bg-gray-200" onclick="location.href=\'' . get_pagenum_link( max( 1, $current_page - 1 ) ) . '\';">' . __( '<', 'textdomain' ) . '</button>';
				endif;
				for ( $i = 1; $i <= $total_pages; $i ++ ):
					echo '<button class="w-8 h-8 ' . ( $i == $current_page ? 'bg-red-600 text-white' : 'text-gray-600' ) . ' border rounded-md hover:bg-gray-200"'
					     . ' onclick="location.href=\'' . get_pagenum_link( $i ) . '\';">' . $i . '</button>';
				endfor;
				if ( $current_page < $total_pages ):
					echo '<button class="w-8 h-8 text-gray-600 border rounded-md hover:bg-gray-200" onclick="location.href=\'' . get_pagenum_link( min( $total_pages, $current_page + 1 ) ) . '\';">' . __( '>', 'textdomain' ) . '</button>';
				endif;
				echo '</div>';
			endif;
			?>
        </div>
    </section>

	<?php
	wp_reset_postdata(); // 重置查询数据
	get_footer(); // 包含页脚

	return ob_get_clean(); // 获取缓冲区内容并清空
}

add_shortcode( 'product_category_template', 'custom_product_category_template_shortcode' );

//根据分类获取默认图片
function custom_category_gallery_template_shortcode( $atts ) {
	if ( is_category() ):
		$category = get_queried_object();
		if ( $category ):
			$atts      = shortcode_atts( [
				'category_name' => $category->slug
			], $atts, 'category_gallery_template' );
			$directory = get_template_directory() . '/assets/images/' . $atts['category_name'] . '/';

			$images = array_merge(
				glob( $directory . '*.jpg' ),
				glob( $directory . '*.jpeg' ),
				glob( $directory . '*.png' ),
				glob( $directory . '*.gif' )
			);

			$urls = [];
			foreach ( $images as $image ) {
				$urls[] = '/assets/images/' . $atts['category_name'] . '/' . basename( $image );
			}

			if ( isset( $atts['only_urls'] ) && $atts['only_urls'] ) {
				return $urls;
			}

			$default_images_count = count( $urls );
			$count                = 0;

			$category_query = new WP_Query( [ 'cat' => $category->term_id, ] );
			if ( $category_query->have_posts() ):
				while ( $category_query->have_posts() ): $category_query->the_post();
					$count     = $count % $default_images_count;
					$image_url = get_field( 'image' )['link'] ?? get_theme_file_uri( $urls[ $count ++ ] );

					echo '<div class="col-md-3 mb-4">
                            <a href="' . $image_url . '" data-fancybox="images" data-caption="">
                                <img src="' . $image_url . '" class="img-fluid" alt="">
                            </a>
                        </div>';

				endwhile;
			endif;
		endif;
	endif;
}

add_shortcode( 'category_gallery_template', 'custom_category_gallery_template_shortcode' );


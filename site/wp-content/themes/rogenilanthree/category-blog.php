<?php get_header(); ?>
<section class="p-8 bg-gray-50 relative">
    <div class="absolute top-0 right-0 w-full h-full overflow-hidden">
        <p class="hidden md:block text-[10rem] font-weight text-gray-200 whitespace-nowrap leading-none opacity-75 translate-x-1/2 translate-y-1/3">
            Security
        </p>
        <p class="text-[2.6rem] hidden md:block absolute bottom-8 right-8 text-3xl font-bold text-red-600">
            Focus <span class="text-blue-800">on high quality aluminium windows and doors!</span>
        </p>
    </div>
    <div class="bg-black bg-opacity-60 text-white p-8 md:p-12 lg:p-16 max-w-2xl">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
            Aluminium Windows
        </h1>
        <p class="mb-6 text-base md:text-lg">
            Richocean Windows - Customization at Your Fingertips. Window types, colors, usage scenarios, and
            requirements – everything is customizable. With rich experience and exceptional products, we meet the
            diverse needs of individual homes, construction companies, decorating firms, and dealers, earning unanimous
            recognition from our clients.
        </p>
    </div>
</section>
<section class="p-8 mt-8">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
			<?php
			$posts_per_page = get_option( 'posts_per_page' );
			$category_slugs = [ 'blog' ];
			$category_ids   = [];
			foreach ( $category_slugs as $slug ) {
				$category = get_category_by_slug( $slug );
				if ( $category ) {
					$category_ids[] = $category->term_id;
				}
			}
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			$query = new WP_Query( [
				'posts_per_page' => $posts_per_page,
				'category__in'   => $category_ids,
				'paged'          => $paged
			] );
            if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>
            <?php
	            $post_thumbnail_url = get_field('image')['link'] ?: get_theme_file_uri('/assets/images/richocean-logo.png');
	            $post_title         = get_the_title();
	            $post_excerpt        = get_the_excerpt();
	            $permalink          = get_permalink();
            ?>
            <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col items-center">
                <img src="<?= $post_thumbnail_url  ?>" alt="" class="w-full h-full object-cover mb-4">
                <h3 class="text-lg font-bold text-gray-800 mb-2"><?= $post_title ?></h3>
                <p class="text-gray-500 mb-4"><?= wp_trim_words($post_excerpt, 8) ?></p>
                <a href="<?= $permalink ?>" class="inline-block bg-orange-500 text-white px-6 py-3 rounded-full hover:bg-orange-600 transition duration-300">Read More</a>
            </div>
            <?php endwhile; endif; wp_reset_postdata(); ?>
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
    </div>
</section>


<?php get_footer(); ?>

<?php get_header(); ?>
    <section class="relative h-screen bg-cover bg-center flex items-center justify-start"
             style="background-image: url('<?= get_theme_file_uri( '/assets/images/banner_01.jpg' ) ?>');">
        <div class="bg-black bg-opacity-60 text-white p-8 md:p-12 lg:p-16 max-w-2xl">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                Richocean has quality and innovation at its heart
            </h1>
            <p class="mb-6 text-base md:text-lg">
                Explore our range of aluminum windows and doors, perfect for both refurbishments and new builds.
                Our systems blend high-performance design with innovative features, providing a comfortable, secure, and
                low-maintenance solution you can rely on.
            </p>
        </div>
    </section>
    <section class="p-16 bg-gray-50">
        <div class="container mx-auto px-4 py-16 grid grid-cols-1 gap-[10rem] md:grid-cols-3">
            <div class="text-center">
                <div class="w-24 h-px mx-auto mb-4 bg-red-500"></div>
                <h3 class="text-xl font-bold mb-4">CHINA WINDOW & DOOR REPRESENTATIVE</h3>
                <p class="text-gray-700">
                    We have a completely independent product development team, dozens of international certifications
                    and testing certificates. We continue to be the market leader in China for product design, strength,
                    safety, and customer service.
                </p>
            </div>
            <div class="text-center">
                <div class="w-24 h-px mx-auto mb-4 bg-red-500"></div>
                <h3 class="text-xl font-bold mb-4">HIGH PRODUCTION CAPACITY & FLEXIBILITY</h3>
                <p class="text-gray-700">
                    We have 20,000 square meters of production workshop, 150 workers, and 3 automatic production lines.
                    And the sales volume has been growing at a rate of 30% per year.
                </p>
            </div>
            <div class="text-center">
                <div class="w-24 h-px mx-auto mb-4 bg-red-500"></div>
                <h3 class="text-xl font-bold mb-4">EXPERIENCE MATTERS</h3>
                <p class="text-gray-700">
                    We have a completely independent product development team, dozens of international certifications
                    and testing certificates. We continue to be the market leader in China for product design, strength,
                    safety, and customer service.
                </p>
            </div>
        </div>
    </section>
    <section class="p-16 hidden md:block">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-12">RICHOCEAN WINDOWS AND DOORS</h2>
            <div class="container mx-auto px-4">
                <div class="flex justify-center flex-col">
                    <div class="container mx-auto">
                        <p class="text-2xl font-bold text-left mb-6 text-stone-400">WINDOWS</p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
							<?php foreach ( WINDOWS_SYSTEMS as $item ): ?>
                                <a target="_blank" href="<?= get_category_link( get_cat_ID( $item['name'] ) ); ?>">
                                    <div class="bg-white p-4 shadow-md flex items-center space-x-4">
                                        <img src="<?= get_theme_file_uri( $item['nav_image'] ) ?>"
                                             alt="<?= $item['name'] ?>" class="w-12 h-12">
                                        <span class="text-lg font-semibold hover:text-red-500 transition duration-300"><?= $item['name'] ?></span>
                                    </div>
                                </a>
							<?php endforeach; ?>
                        </div>
                    </div>
                    <div class="container mx-auto">
                        <p class="text-2xl font-bold text-left mt-6 mb-6 text-stone-400">DOORS</p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
			                <?php foreach ( DOORS_SYSTEMS as $item ): ?>
                                <a target="_blank" href="<?= get_category_link( get_cat_ID( $item['name'] ) ); ?>">
                                    <div class="bg-white p-4 shadow-md flex items-center space-x-4">
                                        <img src="<?= get_theme_file_uri( $item['nav_image'] ) ?>"
                                             alt="<?= $item['name'] ?>" class="w-12 h-12">
                                        <span class="text-lg font-semibold hover:text-red-500 transition duration-300"><?= $item['name'] ?></span>
                                    </div>
                                </a>
			                <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="container mx-auto">
                        <p class="text-2xl font-bold text-left mt-6 mb-6 text-stone-400">MORE PRODUCTS</p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
			                <?php foreach ( MORE_PRODUCTS as $item ): ?>
                                <a target="_blank" href="<?= get_category_link( get_cat_ID( $item['name'] ) ); ?>">
                                    <div class="bg-white p-4 shadow-md flex items-center space-x-4">
                                        <img src="<?= get_theme_file_uri( $item['nav_image'] ) ?>"
                                             alt="<?= $item['name'] ?>" class="w-12 h-12">
                                        <span class="text-lg font-semibold hover:text-red-500 transition duration-300"><?= $item['name'] ?></span>
                                    </div>
                                </a>
			                <?php endforeach; ?>
                        </div>
                    </div>

                    <!--                    <div class="w-1/12 flex items-center relative">-->
                    <!--                        <div class="swiper-button-prev"></div>-->
                    <!--                    </div>-->
                    <!--                    <div class="w-10/12">-->
                    <!--                        <div class="swiper mySwiper">-->
                    <!--                            <div class="swiper-wrapper">-->
                    <!--	                            --><?php
					//	                            $category_slugs = [ 'windows', 'doors', 'more-products' ];
					//	                            $category_ids   = [];
					//	                            foreach ( $category_slugs as $slug ) {
					//		                            $category = get_category_by_slug( $slug );
					//		                            if ( $category ) {
					//			                            $category_ids[] = $category->term_id;
					//		                            }
					//	                            }
					//	                            $query = new WP_Query( [
					//		                            'post_type'      => 'post',
					//		                            'posts_per_page' => 8,
					//		                            'category__in'   => $category_ids,
					//	                            ] );
					//	                            if ( $query->have_posts() ): while ( $query->have_posts() ): $query->the_post(); ?>
                    <!--		                            --><?php
					//		                            $post_image_url = get_field( 'image' )['link'] ?: get_theme_file_uri( '/assets/images/1646980923461464.jpg' );
					//		                            $post_title     = wp_trim_words( get_the_title(), 4 );
					//		                            $post_excerpt   = wp_trim_words( get_the_excerpt(), 8 );
					//		                            $permalink      = get_permalink();
					//		                            ?>
                    <!--                                    <div class="swiper-slide bg-white rounded-lg shadow-md overflow-hidden">-->
                    <!--                                        <div class="p-4">-->
                    <!--                                            <a target="_blank" href="-->
					<?php //= $permalink ?><!--">-->
                    <!--                                                <img src="-->
					<?php //= $post_image_url ?><!--" alt="Image 1" class="w-full h-64 object-cover">-->
                    <!--                                                <div class="mt-4">-->
                    <!--                                                    <h3 class="text-lg font-bold mb-2">-->
					<?php //= $post_title ?><!--</h3>-->
                    <!--                                                    <p class="text-gray-600">-->
					<?php //= $post_excerpt ?><!--</p>-->
                    <!--                                                </div>-->
                    <!--                                            </a>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--	                            --><?php //endwhile; endif; ?>
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                    <div class="w-1/12 flex items-center relative">-->
                    <!--                        <div class="swiper-button-next"></div>-->
                    <!--                    </div>-->
                </div>
            </div>
        </div>
    </section>
    <section class="p-16 bg-gray-50 hidden md:block">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-12">CORPORATE VIDEO</h2>
            <div class="container mx-auto p-8 grid grid-cols-1">
                <iframe width="100%" height="640" src="https://www.youtube.com/embed/ysTlnqW3bWI?si=fXGdGhvQICkIGG6c"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <section class="p-16">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4">WHY CHOOSE ALUMINUM?</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 my-20">
                <!-- Maximum Brightness -->
                <div class="flex flex-col items-center">
                    <img src="https://alucorpstorage02.blob.core.windows.net/cms/aluk/media/fra/aluminium-icons/aluk_icon_light_full-black-2.png"
                         alt="Maximum brightness" class="w-32 h-32 mb-4">
                    <p class="font-medium">Maximum brightness</p>
                </div>
                <!-- Durable & Recyclable -->
                <div class="flex flex-col items-center">
                    <img src="https://alucorpstorage02.blob.core.windows.net/cms/aluk/media/fra/aluminium-icons/aluk_icon_recyclability_full-black-2.png"
                         alt="Durable & recyclable" class="w-32 h-32 mb-4">
                    <p class="font-medium">Durable & recyclable</p>
                </div>
                <!-- Enhanced Security -->
                <div class="flex flex-col items-center">
                    <img src="https://alucorpstorage02.blob.core.windows.net/cms/aluk/media/fra/aluminium-icons/aluk_icon_security_full-black-2.png"
                         alt="Enhanced security" class="w-32 h-32 mb-4">
                    <p class="font-medium">Enhanced security</p>
                </div>
                <!-- Easy to Maintain -->
                <div class="flex flex-col items-center">
                    <img src="https://alucorpstorage02.blob.core.windows.net/cms/aluk/media/fra/aluminium-icons/aluk_icon_cleaning_full-black-2.png"
                         alt="Very easy to maintain" class="w-32 h-32 mb-4">
                    <p class="font-medium">Very easy to maintain</p>
                </div>
            </div>
        </div>
    </section>
    <section class="p-16 bg-gray-50">
        <div class="container mx-auto text-center">
            <h2 class="text-xl font-semibold text-gray-500 mb-2">Designed for Comfort, Built for Success</h2>
            <h1 class="text-4xl font-bold text-gray-800 mb-10">PRODUCTS</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
				<?php
				$category_slugs = [ 'blog' ];
				$category_ids   = [];
				foreach ( $category_slugs as $slug ) {
					$category = get_category_by_slug( $slug );
					if ( $category ) {
						$category_ids[] = $category->term_id;
					}
				}
				$query = new WP_Query( [
					'post_type'      => 'post',
					'posts_per_page' => 8,
					'category__in'   => $category_ids,
				] );
				if ( $query->have_posts() ): while ( $query->have_posts() ): $query->the_post(); ?>
					<?php
					$post_image_url = get_field( 'image' )['link'] ?: get_theme_file_uri( '/assets/images/1646980923461464.jpg' );
					$post_title     = wp_trim_words( get_the_title(), 4 );
					$post_excerpt   = wp_trim_words( get_the_excerpt(), 8 );
					$permalink      = get_permalink();
					?>
                    <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col items-center">
                        <img src="<?= $post_image_url ?>"
                             alt="Meeting Room Furniture" class="w-full h-full object-cover mb-4">
                        <h3 class="text-lg font-bold text-gray-800 mb-2"><?= $post_title ?></h3>
                        <p class="text-gray-500 mb-4"><?= $post_excerpt ?></p>
                        <a href="<?= $permalink ?>"
                           class="inline-block bg-orange-500 text-white px-6 py-3 rounded-full hover:bg-orange-600 transition duration-300">Read
                            More</a>
                    </div>
				<?php endwhile; endif; ?>
            </div>
        </div>
    </section>
    <section class="container mx-auto p-12 lg:flex lg:items-center lg:justify-between">
        <div class="lg:w-1/2">
            <h2 class="text-3xl lg:text-4xl font-bold mb-4">Customized for you</h2>
            <h3 class="text-red-500 text-xl mb-4">Top aluminium doors and windows manufacturer in china</h3>
            <p class="text-gray-700 mb-6">
                Each product has its own unique customization elements, including the size.shape, configuration,
                hardware, color (some products can even be two-tone)and finish process, so you can create a
                one-of-a-kind window or door, nomatter which product you choose.
            </p>
        </div>
        <div class="lg:w-1/2 mt-8 lg:mt-0 lg:ml-8">
            <img src="<?= get_theme_file_uri( '/assets/images/quyu5_01.jpg' ) ?>"
                 alt="Furniture Sketch" class="w-full h-auto rounded shadow-lg">
        </div>
    </section>
    <section class="container mx-auto p-12 lg:flex lg:items-center lg:justify-between">
        <div class="lg:w-1/2 ">
            <img src="<?= get_theme_file_uri( '/assets/images/quyu5_02.jpg' ) ?>"
                 alt="Furniture Sketch" class="w-full h-auto rounded shadow-lg">
        </div>
        <div class="lg:w-1/2 mt-8 lg:mt-0 lg:ml-8">
            <h2 class="text-3xl lg:text-4xl font-bold mb-4">Thermally efficient low and u-values</h2>
            <h3 class="text-red-500 text-xl mb-4">Top aluminium doors and windows manufacturer in china</h3>
            <p class="text-gray-700 mb-6">
                Choosing the perfect colours for your windows and doors doesn’t have to be challenging! Use our helpful
                colour selector guide to help you decide.
            </p>
        </div>

    </section>
    <section class="container mx-auto p-16 lg:flex lg:items-center lg:justify-between">
        <div class="lg:w-1/2">
            <h2 class="text-3xl lg:text-4xl font-bold mb-4">The safest delivery</h2>
            <h3 class="text-red-500 text-xl mb-4">5 layers packaging guarantee zero damage</h3>
            <p class="text-gray-700 mb-6">
                We pack each window individually and in four layers, and finally into woodenboxes with non-fumigation,
                and at the same time, there will be a lot of shock-proof measures in the container to protect your
                items. We ensure that yourproducts will arrive at the sites in good condition after long-distance
                trans-portation.
            </p>
        </div>
        <div class="lg:w-1/2 mt-8 lg:mt-0 lg:ml-8">
            <img src="<?= get_theme_file_uri( '/assets/images/quyu5_03.jpg' ) ?>"
                 alt="Furniture Sketch" class="w-full h-auto rounded shadow-lg">
        </div>
    </section>
    <section class="container mx-auto p-16 lg:flex lg:items-center lg:justify-between">
        <div class="container">
            <div class="lb_xgt"
                 style="background: url('<?= get_theme_file_uri( '/assets/images/projects/lbbjt_01.jpg' ) ?>')  no-repeat 100% 100%;">
                <dl class="lbtxt wow slideInUp animated" style="visibility: visible; animation-name: slideInUp;">
                    <dt>Welcome to be our dealer</dt>
                    <dd style="padding-top:20px;">Richocean experts are experienced in working with architects,
                        builders and
                        homeowners to ensure your vision becomes a reality.
                    </dd>
                    <dd>We offer more flexible and affordable solutions than franchising. Come and expand your
                        business or
                        start a new one with us.
                    </dd>
                </dl>
                <p><img src="<?= get_theme_file_uri( '/assets/images/projects/dtu_01.png' ) ?>"></p>
                <div class="bd">
                    <div class="carousel-container">
                        <ul class="picList">
                            <li class="clone">
                                <div class="pic"><img
                                            src="<?= get_theme_file_uri( '/assets/images/projects/dianpu5.jpg' ) ?>">
                                </div>
                            </li>
                            <li>
                                <div class="pic"><img
                                            src="<?= get_theme_file_uri( '/assets/images/projects/dianpu1.jpg' ) ?>">
                                </div>
                            </li>
                            <li>
                                <div class="pic"><img
                                            src="<?= get_theme_file_uri( '/assets/images/projects/dianpu2.jpg' ) ?>">
                                </div>
                            </li>
                            <li>
                                <div class="pic"><img
                                            src="<?= get_theme_file_uri( '/assets/images/projects/dianpu3.jpg' ) ?>">
                                </div>
                            </li>
                            <li>
                                <div class="pic"><img
                                            src="<?= get_theme_file_uri( '/assets/images/projects/dianpu4.jpg' ) ?>">
                                </div>
                            </li>
                            <li>
                                <div class="pic"><img
                                            src="<?= get_theme_file_uri( '/assets/images/projects/dianpu5.jpg' ) ?>">
                                </div>
                            </li>
                            <li class="clone">
                                <div class="pic"><img
                                            src="<?= get_theme_file_uri( '/assets/images/projects/dianpu1.jpg' ) ?>">
                                </div>
                            </li>
                            <!-- Add more clones if needed -->
                        </ul>
                    </div>
                </div>

                <h3>Through Collaborations And Partnerships, We Amplify Our Impact.</h3>
                <div class="yqlj">
                    <ul>
                        <li>
                            <img src="<?= get_theme_file_uri( '/assets//images/projects/yqlj_01.jpg' ) ?>">
                        </li>
                        <li>
                            <img src="<?= get_theme_file_uri( '/assets/images/projects/yqlj_02.jpg' ) ?>">
                        </li>
                        <li>
                            <img src="<?= get_theme_file_uri( '/assets/images/projects/yqlj_03.jpg' ) ?>">
                        </li>
                        <li>
                            <img src="<?= get_theme_file_uri( '/assets/images/projects/yqlj_04.jpg' ) ?>">
                        </li>
                        <li>
                            <img src="<?= get_theme_file_uri( '/assets/images/projects/yqlj_05.jpg' ) ?>">
                        </li>
                        <li>
                            <img src="<?= get_theme_file_uri( '/assets/images/projects/yqlj_06.jpg' ) ?>">
                        </li>
                        <li>
                            <img src="<?= get_theme_file_uri( '/assets/images/projects/yqlj_07.jpg' ) ?>">
                        </li>
                        <li>
                            <img src="<?= get_theme_file_uri( '/assets/images/projects/yqlj_08.jpg' ) ?>">
                        </li>
                        <li>
                            <img src="<?= get_theme_file_uri( '/assets/images/projects/yqlj_09.jpg' ) ?>">
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <section class="p-16">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4">What Projects Can We Take?</h2>
            <p class="text-gray-500 mb-8">Testing in accordance to NFRC / AS2047 / ISO9001 / CE</p>
            <div class="flex flex-wrap justify-center space-x-4 mb-12">
                <span class="font-medium">&#10003; High-end Villa</span>
                <span class="font-medium">&#10003; Private Homes</span>
                <span class="font-medium">&#10003; Apartments</span>
                <span class="font-medium">&#10003; Multi-family</span>
                <span class="font-medium">&#10003; Row Houses</span>
                <span class="font-medium">&#10003; Hotels</span>
                <span class="font-medium">&#10003; Schools</span>
                <span class="font-medium">&#10003; Offices</span>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project Card 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="<?= get_theme_file_uri( '/assets/images/projects/project1.jpg' ) ?>') ?>"
                         alt="Private Homes" class="w-full h-56 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-1">Private Homes</h3>
                        <p class="text-gray-500">Indianapolis, Indiana, USA</p>
                    </div>
                </div>
                <!-- Project Card 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="<?= get_theme_file_uri( '/assets/images/projects/project2.jpg' ) ?>"
                         alt="High-end Villa" class="w-full h-56 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-1">High-end Villa</h3>
                        <p class="text-gray-500">Los Angeles, California, USA</p>
                    </div>
                </div>
                <!-- Project Card 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="<?= get_theme_file_uri( '/assets/images/projects/project3.jpg' ) ?>"
                         alt="Hotels" class="w-full h-56 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-1">Hotels</h3>
                        <p class="text-gray-500">Indore, India</p>
                    </div>
                </div>
                <!-- Project Card 4 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="<?= get_theme_file_uri( '/assets/images/projects/project4.jpg' ) ?>"
                         alt="Villa Group" class="w-full h-56 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-1">Villa Group</h3>
                        <p class="text-gray-500">Kingston, Jamaica</p>
                    </div>
                </div>
                <!-- Project Card 5 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="<?= get_theme_file_uri( '/assets/images/projects/project5.jpg' ) ?>"
                         alt="Apartments" class="w-full h-56 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-1">Apartments</h3>
                        <p class="text-gray-500">Chow Tai Fook Mansion, Hongkong</p>
                    </div>
                </div>
                <!-- Project Card 6 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="<?= get_theme_file_uri( '/assets/images/projects/project6.jpg' ) ?>"
                         alt="Multi-family" class="w-full h-56 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-1">Multi-family</h3>
                        <p class="text-gray-500">Dar Al Zain, Muscat, Oman</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-16 bg-gray-50">
        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Contact Information Section -->
            <div class="text-left">
                <h2 class="text-red-600 font-bold text-lg mb-4">CONTACT & REACH US</h2>
                <h1 class="text-4xl font-bold text-gray-800 mb-6">CONTACT & REACH US</h1>
                <p class="text-gray-600 mb-8">
                    We will be pleased to help with your general enquiries about our aluminium windows and doors and to
                    help you find a local authorised dealer
                </p>

                <p>
                    There are a number of ways you can contact us. You can:
                </p>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <span class="text-orange-500 mr-3">&#10004;</span>
                        <p class="text-gray-600">Fill in our contact form below</p>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-500 mr-3">&#10004;</span>
                        <p class="text-gray-600">Phone us at 17607086086</p>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-500 mr-3">&#10004;</span>
                        <p class="text-gray-600">Email us at Kai@rogenilan.com</p>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-500 mr-3">&#10004;</span>
                        <p class="text-gray-600">Marketing Center at 23/F, Weiye International Building, Dali Town,
                            Foshan City, Guangdong Province, China</p>
                    </li>

                </ul>
            </div>
            <!-- Contact Form Section -->
            <div class="bg-white p-16 rounded-lg shadow-lg">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Talk to Our Expert</h2>
                <form action="<?= esc_url( admin_url( 'admin-post.php' ) ) ?>" method="POST" class="space-y-6">
                    <input type="hidden" name="action" value="submit_contact_form">
                    <input type="email" name="email" placeholder="Your Email"
                           class="w-full border border-gray-300 p-4 rounded-md focus:outline-none focus:border-gray-500"
                           required>
                    <input type="text" name="phone" placeholder="Your Phone"
                           class="w-full border border-gray-300 p-4 rounded-md focus:outline-none focus:border-gray-500"
                           required>
                    <input type="text" name="country" placeholder="Your Country"
                           class="w-full border border-gray-300 p-4 rounded-md focus:outline-none focus:border-gray-500">
                    <textarea name="message" rows="5" placeholder="Enter Your Message.."
                              class="w-full border border-gray-300 p-4 rounded-md focus:outline-none focus:border-gray-500"
                              required></textarea>
                    <button type="submit"
                            class="w-full bg-red-600 text-white py-4 rounded-md font-bold hover:bg-red-700 transition duration-300">
                        SUBMIT MESSAGE
                    </button>
                </form>
            </div>
        </div>
    </section>


<?php get_footer(); ?>
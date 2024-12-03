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
    <!-- Main Section -->
    <section class="hidden w-full p-16 bg-brown-900 md:flex flex-col lg:flex-row bg-[#8A573B]">
        <div class="container flex w-2/3 mx-auto">
            <!-- Left Section: Content -->
            <div class="lg:w-3/4 bg-[#8A573B] text-white p-8 rounded-lg">
                <h2 class="text-3xl font-bold mb-4 text-center lg:text-left">Innovative Furniture Designs Tailored to
                    Every Space</h2>
                <p class="text-gray-200 mb-6 mt-12 text-left lg:text-left leading-6">At Boke Furniture, we provide
                    high-quality, customizable Office, Hotel, and Home furniture solutions. Tailored for developers,
                    wholesalers, and importers, our offerings blend design, function, and sustainability. Since 2012, we
                    have been committed to craftsmanship and delivering premium furniture that enhances any space.</p>
                <div class="flex justify-center lg:justify-start gap-4">
                    <!-- Images -->
                    <!--                    <img class="h-24 w-auto"-->
                    <!--                         src="https://bokefurniture.com/wp-content/uploads/2024/06/Office-Workstation-removebg-preview.png"-->
                    <!--                         alt="Office Workstation">-->
                    <!--                    <img class="h-24 w-auto"-->
                    <!--                         src="https://bokefurniture.com/wp-content/uploads/2024/10/Hotel_Bedroom-1.png"-->
                    <!--                         alt="Hotel Bedroom">-->
                    <!--                    <img class="h-24 w-auto"-->
                    <!--                         src="https://bokefurniture.com/wp-content/uploads/2024/05/Luxury_Dining_Collections-removebg-preview.png"-->
                    <!--                         alt="Luxury Dining Collections">-->
                    <!--                    <img class="h-24 w-auto"-->
                    <!--                         src="https://bokefurniture.com/wp-content/uploads/2024/05/Modular-Lounge-Furniture.png"-->
                    <!--                         alt="Modular Lounge Furniture">-->
                </div>
            </div>

            <!-- Right Section: Form -->
            <div class="lg:w-[540px] bg-gray-100 p-8 relative mt-[-160px] shadow-lg">
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
                    <textarea name="message" rows="2" placeholder="Enter Your Message.."
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
                    <img src="<?= get_theme_file_uri( '/assets/images/aluk_icon_light_full-black-2.png' ) ?>"
                         alt="Maximum brightness" class="w-32 h-32 mb-4">
                    <p class="font-medium">Maximum brightness</p>
                </div>
                <!-- Durable & Recyclable -->
                <div class="flex flex-col items-center">
                    <img src="<?= get_theme_file_uri( '/assets/images/aluk_icon_recyclability_full-black-2.png' ) ?>"
                         alt="Durable & recyclable" class="w-32 h-32 mb-4">
                    <p class="font-medium">Durable & recyclable</p>
                </div>
                <!-- Enhanced Security -->
                <div class="flex flex-col items-center">
                    <img src="<?= get_theme_file_uri( '/assets/images/aluk_icon_security_full-black-2.png' ) ?>"
                         alt="Enhanced security" class="w-32 h-32 mb-4">
                    <p class="font-medium">Enhanced security</p>
                </div>
                <!-- Easy to Maintain -->
                <div class="flex flex-col items-center">
                    <img src="<?= get_theme_file_uri( '/assets/images/aluk_icon_cleaning_full-black-2.png' ) ?>"
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
    <section class="hidden md:block p-16 bg-white">
        <div class="container mx-auto px-4 py-8">
            <div class="flex flex-col md:flex-row items-center bg-white p-16">
                <!-- Text Content -->
                <div class="md:w-1/2 w-full md:pr-8">
                    <h2 class="text-3xl font-bold mb-2">1. Tailor-Made Windows & Doors Solutions</h2>
                    <p class="text-xl text-red-600 mb-4">Exquisite Craftsmanship</p>
                    <p class="text-gray-700 mb-6">At Richocean, we specialize in crafting custom-made doors and windows
                        with expert precision, ensuring top-quality results from design to
                        delivery.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center"><span class="text-red-600 mr-2"><i
                                        class="fas fa-check-circle"></i></span> Personalized design consultations
                        </li>
                        <li class="flex items-center"><span class="text-red-600 mr-2"><i
                                        class="fas fa-check-circle"></i></span> 3D renderings and material selection
                        </li>
                        <li class="flex items-center"><span class="text-red-600 mr-2"><i
                                        class="fas fa-check-circle"></i></span> Customized to space and style
                            requirements
                        </li>
                        <li class="flex items-center"><span class="text-red-600 mr-2"><i
                                        class="fas fa-check-circle"></i></span> Quality-controlled production ensuring
                            high standards.
                        </li>
                    </ul>
                    <a target="_blank" href="<?= site_url( 'contact-us' ) ?>"
                       class="bg-red-600 text-white px-6 py-3 inline-block mt-1 hover:bg-red-700 transition">Contact
                        Us</a>
                </div>
                <!-- Image -->
                <div class="md:w-1/2 w-full mt-6 md:mt-0 flex justify-center">
                    <img src="<?= get_theme_file_uri( '/assets/images/20241203/1.jpg' ) ?>"
                         alt="Furniture Design" class="rounded-lg shadow-md h-[350px]">
                </div>
            </div>
            <div class="flex flex-col md:flex-row items-center bg-white p-16">
                <!-- Text Content -->
                <div class="md:w-1/2 w-full md:pr-8">
                    <h2 class="text-3xl font-bold mb-2">2.Exceptional Door and Window
                        Manufacturing</h2>
                    <p class="text-xl text-red-600 mb-4">Timeless Craftsmanship</p>
                    <p class="text-gray-700 mb-6">We provide professional, tailor-made door and window solutions
                        designed to enhance functionality and elevate the customer experience.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center"><span class="text-red-600 mr-2"><i
                                        class="fas fa-check-circle"></i></span> Designed for the perfect blend of
                            functionality and aesthetics in modern
                            doors and windows
                        </li>
                        <li class="flex items-center"><span class="text-red-600 mr-2"><i
                                        class="fas fa-check-circle"></i></span> Customized OEM and ODM solutions for
                            clients worldwide
                        </li>
                        <li class="flex items-center"><span class="text-red-600 mr-2"><i
                                        class="fas fa-check-circle"></i></span> Design and innovation through
                            collaborative planning
                        </li>
                        <li class="flex items-center"><span class="text-red-600 mr-2"><i
                                        class="fas fa-check-circle"></i></span> Precision cutting and hand assembly for
                            long-lasting durability
                        </li>
                        <li class="flex items-center"><span class="text-red-600 mr-2"><i
                                        class="fas fa-check-circle"></i></span> Meticulous craftsmanship for beauty and
                            resilience
                        </li>
                    </ul>
                    <a target="_blank" href="<?= site_url( 'contact-us' ) ?>"
                       class="bg-red-600 text-white px-6 py-3 inline-block mt-1 hover:bg-red-700 transition">Contact
                        Us</a>
                </div>
                <!-- Image -->
                <div class="md:w-1/2 w-full mt-6 md:mt-0 flex justify-center">
                    <img src="<?= get_theme_file_uri( '/assets/images/20241203/2.jpg' ) ?>"
                         alt="Furniture Design" class="rounded-lg shadow-md h-[350px]">
                </div>
            </div>
            <div class="flex flex-col md:flex-row items-center bg-white p-16">
                <!-- Text Content -->
                <div class="md:w-1/2 w-full md:pr-8">
                    <h2 class="text-3xl font-bold mb-2">3.Bulk Door and Window Orders</h2>
                    <p class="text-xl text-red-600 mb-4">Efficient Large-Scale Procurement</p>
                    <p class="text-gray-700 mb-6">Our streamlined bulk procurement process simplifies your door and
                        window orders. We deliver high-quality, coordinated products on time
                        and within budget at competitive prices, making us an ideal choice for
                        multi-site businesses or large facilities.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center"><span class="text-red-600 mr-2"><i
                                        class="fas fa-check-circle"></i></span> Competitive bulk pricing
                        </li>
                        <li class="flex items-center"><span class="text-red-600 mr-2"><i
                                        class="fas fa-check-circle"></i></span> Timely and reliable multi-location
                            delivery
                        </li>
                        <li class="flex items-center"><span class="text-red-600 mr-2"><i
                                        class="fas fa-check-circle"></i></span> Dedicated customer management
                        </li>
                    </ul>
                    <a target="_blank" href="<?= site_url( 'contact-us' ) ?>"
                       class="bg-red-600 text-white px-6 py-3 inline-block mt-1 hover:bg-red-700 transition">Contact
                        Us</a>
                </div>
                <!-- Image -->
                <div class="md:w-1/2 w-full mt-6 md:mt-0 flex justify-center">
                    <img src="<?= get_theme_file_uri( '/assets/images/20241203/3.jpg' ) ?>" alt="Furniture Design"
                         class="rounded-lg shadow-md">
                </div>
            </div>
            <div class="flex flex-col md:flex-row items-center bg-white p-16">
                <!-- Text Content -->
                <div class="md:w-1/2 w-full md:pr-8">
                    <h2 class="text-3xl font-bold mb-2">4.Global Shipping and Logistics</h2>
                    <p class="text-xl text-red-600 mb-4">Worldwide Delivery</p>
                    <p class="text-gray-700 mb-6">Expand your global operations with our efficient shipping solutions.
                        Our
                        logistics team ensures timely and safe delivery of furniture, handling all
                        customs and import processes seamlessly, no matter your business
                        location.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center"><span class="text-red-600 mr-2"><i
                                        class="fas fa-check-circle"></i></span> Detailed logistics and shipping planning
                        </li>
                        <li class="flex items-center"><span class="text-red-600 mr-2"><i
                                        class="fas fa-check-circle"></i></span> Customs documentation assistance
                        </li>
                        <li class="flex items-center"><span class="text-red-600 mr-2"><i
                                        class="fas fa-check-circle"></i></span> Customized to space and style
                            requirements
                        </li>
                        <li class="flex items-center"><span class="text-red-600 mr-2"><i
                                        class="fas fa-check-circle"></i></span> Real-time shipping updates
                        </li>
                    </ul>
                    <a target="_blank" href="<?= site_url( 'contact-us' ) ?>"
                       class="bg-red-600 text-white px-6 py-3 inline-block mt-1 hover:bg-red-700 transition">Contact
                        Us</a>
                </div>
                <!-- Image -->
                <div class="md:w-1/2 w-full mt-6 md:mt-0 flex justify-center">
                    <img src="<?= get_theme_file_uri( '/assets/images/20241203/4.jpg' ) ?>"
                         alt="Furniture Design" class="rounded-lg shadow-md">
                </div>
            </div>
            <div class="flex flex-col md:flex-row items-center bg-white p-16">
                <!-- Text Content -->
                <div class="md:w-1/2 w-full md:pr-8">
                    <h2 class="text-3xl font-bold mb-2">5.After Sales Support</h2>
                    <p class="text-xl text-red-600 mb-4">Dedicated customer service</p>
                    <p class="text-gray-700 mb-6">Our after-sales support ensures that your windows and doors remain
                        high quality and functional, and helps you resolve any issues after your
                        purchase.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center"><span class="text-red-600 mr-2"><i
                                        class="fas fa-check-circle"></i></span> Warranty covers repair or replacement.
                        </li>
                        <li class="flex items-center"><span class="text-red-600 mr-2"><i
                                        class="fas fa-check-circle"></i></span> Maintenance advice.
                        </li>
                        <li class="flex items-center"><span class="text-red-600 mr-2"><i
                                        class="fas fa-check-circle"></i></span> Round-the-clock customer service.
                        </li>
                    </ul>
                    <a target="_blank" href="<?= site_url( 'contact-us' ) ?>"
                       class="bg-red-600 text-white px-6 py-3 inline-block mt-1 hover:bg-red-700 transition">Contact
                        Us</a>
                </div>
                <!-- Image -->
                <div class="md:w-1/2 w-full mt-6 md:mt-0 flex justify-center">
                    <img src="<?= get_theme_file_uri( '/assets/images/20241203/ComfyUI_temp_juapm_00001_.png' ) ?>"
                         alt="Furniture Design" class="rounded-lg shadow-md">
                </div>
            </div>
        </div>

    </section>
    <section class="hidden md:block p-16">
        <div class="container mx-auto px-4 py-8">
            <div class="container mx-auto p-6 text-center">
                <div class="flex justify-center items-center">
                    <!-- Cards Section -->
                    <div class="grid grid-cols-1 md:grid-cols-1 gap-8 w-[25%] elementor-9698">
                        <!-- Card 1 -->
                        <div class="border-4 border-sky-100 rounded-lg shadow-md p-6 flex items-start ">
                            <div>
                                <h3 class="font-semibold text-lg text-gray-800">3D Free Design Consultation</h3>
                                <p class="text-gray-600 mt-1">Receive expert design guidance tailored to bring your
                                    vision
                                    to life.</p>
                            </div>
                            <div class="elementor-widget-wrap elementor-element-populated elementor-element elementor-element-61f2d3f5">
                                <div class="elementor-element elementor-element-61f2d3f5 elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon" data-id="61f2d3f5" data-element_type="widget" data-widget_type="icon.default">
                                    <div class="elementor-widget-container relative -right-3/4">
                                        <div class="elementor-icon-wrapper">
                                            <div class="elementor-icon">
                                                <i aria-hidden="true" class="icon icon-Design-3"></i>			</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="border-4 border-sky-100 rounded-lg shadow-md p-6 flex items-start ">
                            <div>
                                <h3 class="font-semibold text-lg text-gray-800">Worldwide Delivery & Installation</h3>
                                <p class="text-gray-600 mt-1">Efficient global shipping and professional installation
                                    services.</p>
                            </div>
                            <div class="elementor-widget-wrap elementor-element-populated elementor-element elementor-element-61f2d3f5">
                                <div class="elementor-element elementor-element-61f2d3f5 elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon" data-id="61f2d3f5" data-element_type="widget" data-widget_type="icon.default">
                                    <div class="elementor-widget-container relative -right-3/4">
                                        <div class="elementor-icon-wrapper">
                                            <div class="elementor-icon">
                                                <i aria-hidden="true" class="icon icon-customer-support"></i>			</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="border-4 border-sky-100 rounded-lg shadow-md p-6 flex items-start ">
                            <div>
                                <h3 class="font-semibold text-lg text-gray-800">Global Delivery & Setup</h3>
                                <p class="text-gray-600 mt-1">Worldwide shipping with professional setup.</p>
                            </div>
                            <div class="elementor-widget-wrap elementor-element-populated elementor-element elementor-element-61f2d3f5">
                                <div class="elementor-element elementor-element-61f2d3f5 elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon" data-id="61f2d3f5" data-element_type="widget" data-widget_type="icon.default">
                                    <div class="elementor-widget-container relative -right-3/4">
                                        <div class="elementor-icon-wrapper">
                                            <div class="elementor-icon">
                                                <i aria-hidden="true" class="icon icon-speed"></i>			</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="mx-8 w-[50%]">
                        <!-- 3D Image Section -->
                            <img src="<?= get_theme_file_uri( '/assets/images/20241203/Product_Cases-Logo_Design-20241130.jpg' ) ?>"
                                 alt="3D Design" class="w-full max-w-lg rounded-full shadow-lg mx-auto">
                    </div>
                    <!-- Cards Section -->
                    <div class="grid grid-cols-1 md:grid-cols-1 gap-8 w-[25%] elementor-9698">
                        <!-- Card 4 -->
                        <div class="border-4 border-sky-100 rounded-lg shadow-md p-6 flex items-start ">

                            <div class="elementor-widget-wrap elementor-element-populated elementor-element elementor-element-61f2d3f5">
                                <div class="elementor-element elementor-element-61f2d3f5 elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon" data-id="61f2d3f5" data-element_type="widget" data-widget_type="icon.default">
                                    <div class="elementor-widget-container relative -left-full">
                                        <div class="elementor-icon-wrapper">
                                            <div class="elementor-icon">
                                                <i aria-hidden="true" class="icon icon-leaf"></i>			</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h3 class="font-semibold text-lg text-gray-800">Energy-efficient and eco-friendly</h3>
                                <p class="text-gray-600 mt-1">providing superior insulation to maintain comfort and
                                    reduce energy costs.</p>
                            </div>
                        </div>

                        <!-- Card 5 -->
                        <div class="border-4 border-sky-100 rounded-lg shadow-md p-6 flex items-start ">

                            <div class="elementor-widget-wrap elementor-element-populated elementor-element elementor-element-61f2d3f5">
                                <div class="elementor-element elementor-element-61f2d3f5 elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon" data-id="61f2d3f5" data-element_type="widget" data-widget_type="icon.default">
                                    <div class="elementor-widget-container relative -left-full">
                                        <div class="elementor-icon-wrapper">
                                            <div class="elementor-icon">
                                                <i aria-hidden="true" class="fas fa-headphones-alt"></i>			</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h3 class="font-semibold text-lg text-gray-800">Showcasing China's Door and
                                    Window Excellence</h3>
                                <p class="text-gray-600 mt-1">Certified by CE, AS2047, NFRC, and CSA, ensuring toptier performance, durability, and safety standards.</p>
                            </div>
                        </div>

                        <!-- Card 6 -->
                        <div class="border-4 border-sky-100 rounded-lg shadow-md p-6 flex items-start ">

                            <div class="elementor-widget-wrap elementor-element-populated elementor-element elementor-element-61f2d3f5">
                                <div class="elementor-element elementor-element-61f2d3f5 elementor-widget__width-auto elementor-view-default elementor-widget elementor-widget-icon" data-id="61f2d3f5" data-element_type="widget" data-widget_type="icon.default">
                                    <div class="elementor-widget-container relative -left-full">
                                        <div class="elementor-icon-wrapper">
                                            <div class="elementor-icon">
                                                <i aria-hidden="true" class="icon icon-Target"></i>			</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h3 class="font-semibold text-lg text-gray-800">OEM Service</h3>
                                <p class="text-gray-600 mt-1">Custom manufacturing solutions perfectly aligned with
                                    your brand s needs.</p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Title Section -->
<!--                <h1 class="text-4xl font-bold text-gray-800">Your Complete Furniture <span-->
<!--                            class="text-red-600">Solution</span>-->
<!--                </h1>-->
<!--                <p class="text-lg text-gray-500 mt-2">Elevating Spaces, Boosting Efficiency</p>-->


                <!-- Main Content Section -->
                <div class="flex flex-col lg:flex-row items-center justify-center mt-10 gap-8">


                </div>

                <!-- Inquire Button -->
                <div class="mt-10">
                    <a target="_blank" href="<?= site_url('contact-us') ?>"
                            class="bg-red-600 text-white font-semibold py-3 px-6 hover:bg-red-700 focus:outline-none">
                        Inquire
                        Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container mx-auto p-12 lg:flex lg:items-center lg:justify-between">
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
        </div>
        <div class="container mx-auto p-12 lg:flex lg:items-center lg:justify-between">
            <div class="lg:w-1/2 ">
                <img src="<?= get_theme_file_uri( '/assets/images/quyu5_02.jpg' ) ?>"
                     alt="Furniture Sketch" class="w-full h-auto rounded shadow-lg">
            </div>
            <div class="lg:w-1/2 mt-8 lg:mt-0 lg:ml-8">
                <h2 class="text-3xl lg:text-4xl font-bold mb-4">Thermally efficient low and u-values</h2>
                <h3 class="text-red-500 text-xl mb-4">Top aluminium doors and windows manufacturer in china</h3>
                <p class="text-gray-700 mb-6">
                    Choosing the perfect colours for your windows and doors doesn’t have to be challenging! Use our
                    helpful
                    colour selector guide to help you decide.
                </p>
            </div>
        </div>
        <div class="container mx-auto p-16 lg:flex lg:items-center lg:justify-between">
            <div class="lg:w-1/2">
                <h2 class="text-3xl lg:text-4xl font-bold mb-4">The safest delivery</h2>
                <h3 class="text-red-500 text-xl mb-4">5 layers packaging guarantee zero damage</h3>
                <p class="text-gray-700 mb-6">
                    We pack each window individually and in four layers, and finally into woodenboxes with
                    non-fumigation,
                    and at the same time, there will be a lot of shock-proof measures in the container to protect your
                    items. We ensure that yourproducts will arrive at the sites in good condition after long-distance
                    trans-portation.
                </p>
            </div>
            <div class="lg:w-1/2 mt-8 lg:mt-0 lg:ml-8">
                <img src="<?= get_theme_file_uri( '/assets/images/quyu5_03.jpg' ) ?>"
                     alt="Furniture Sketch" class="w-full h-auto rounded shadow-lg">
            </div>
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
    <section class="hidden md:block bg-white">
        <div class="p-16">
            <h1 class="text-4xl font-bold text-gray-800 mb-6 text-center">Tailored Services for Your Business Needs</h1>
            <h2 class="text-xl font-semibold text-gray-500 mb-2 text-center">Empowering Your Enterprise with RICHOCEAN s
                Expertise</h2>
            <div class="container mx-auto p-4">
                <div class="flex flex-col md:flex-row items-center bg-white px-16 py-8 gap-12">
                    <!-- Text Content -->
                    <div class="md:w-1/3 w-full flex px-6 py-12 shadow-lg">
                        <div class="md:w-1/4">
                            <img src="<?= get_theme_file_uri( '/assets/images/nav/nav_tb_02.png' ) ?>"
                                 alt="Sliding Windows"
                                 class="w-16 h-16 mx-auto">
                        </div>
                        <div class="md:w-3/4">
                            <h3 class="text-3xl font-bold mb-4">Customized Product Design</h3>
                            <p class="text-gray-700 mb-6 leading-8">We offer a wide range of customization
                                options to meet the unique needs of different
                                clients, including size, style, color, and
                                functionality. This helps clients attract a
                                targeted consumer market and enhance their
                                competitive edge.</p>
                            <a target="_blank" href="<?= site_url( 'contact-us' ) ?>"
                               class="bg-red-600 text-white px-6 py-3 inline-block mt-1 hover:bg-red-700 transition">Contact
                                Us</a></div>
                    </div>
                    <div class="md:w-1/3 w-full flex px-6 py-12 shadow-lg">
                        <div class="md:w-1/4">
                            <img src="<?= get_theme_file_uri( '/assets/images/nav/nav_tb_02.png' ) ?>"
                                 alt="Sliding Windows"
                                 class="w-16 h-16 mx-auto">
                        </div>
                        <div class="md:w-3/4">
                            <h3 class="text-3xl font-bold mb-4">High-Quality Certifications</h3>
                            <p class="text-gray-700 mb-6 leading-8">Our doors and windows are certified by
                                multiple international standards, including CE,
                                AS2047, NFRC, and CSA, ensuring top-quality
                                and reliability. Clients can leverage these
                                certifications to demonstrate high standards
                                and safety to end consumers, boosting market
                                trust.</p>
                            <a target="_blank" href="<?= site_url( 'contact-us' ) ?>"
                               class="bg-red-600 text-white px-6 py-3 inline-block mt-1 hover:bg-red-700 transition">Contact
                                Us</a></div>
                    </div>
                    <div class="md:w-1/3 w-full flex px-6 py-12 shadow-lg">
                        <div class="md:w-1/4">
                            <img src="<?= get_theme_file_uri( '/assets/images/nav/nav_tb_02.png' ) ?>"
                                 alt="Sliding Windows"
                                 class="w-16 h-16 mx-auto">
                        </div>
                        <div class="md:w-3/4">
                            <h3 class="text-3xl font-bold mb-4">Energy-Efficient and EcoFriendly Features</h3>
                            <p class="text-gray-700 mb-6 leading-8">We use advanced energy-saving technologies
                                and materials, such as thermal break
                                aluminum and double-glazed insulated glass,
                                to promote energy efficiency and
                                sustainability. This helps clients reduce energy
                                costs while complying with increasingly
                                stringent environmental regulations.</p>
                            <a target="_blank" href="<?= site_url( 'contact-us' ) ?>"
                               class="bg-red-600 text-white px-6 py-3 inline-block mt-1 hover:bg-red-700 transition">Contact
                                Us</a></div>
                    </div>

                </div>
                <div class="flex flex-col md:flex-row items-center bg-white px-16 pb-16 gap-12">
                    <!-- Text Content -->
                    <div class="md:w-1/3 w-full flex px-6 py-12 shadow-lg">
                        <div class="md:w-1/4">
                            <img src="<?= get_theme_file_uri( '/assets/images/nav/nav_tb_02.png' ) ?>"
                                 alt="Sliding Windows"
                                 class="w-16 h-16 mx-auto">
                        </div>
                        <div class="md:w-3/4">
                            <h3 class="text-3xl font-bold mb-4">Fast Delivery and Efficient
                                Production</h3>
                            <p class="text-gray-700 mb-6 leading-8">With modern production equipment and a
                                well-managed supply chain, we can offer fast
                                delivery and large-scale manufacturing to
                                meet market demand on time, helping clients
                                seize market opportunities quickly.</p>
                            <a target="_blank" href="<?= site_url( 'contact-us' ) ?>"
                               class="bg-red-600 text-white px-6 py-3 inline-block mt-1 hover:bg-red-700 transition">Contact
                                Us</a></div>
                    </div>
                    <div class="md:w-1/3 w-full flex px-6 py-12 shadow-lg">
                        <div class="md:w-1/4">
                            <img src="<?= get_theme_file_uri( '/assets/images/nav/nav_tb_02.png' ) ?>"
                                 alt="Sliding Windows"
                                 class="w-16 h-16 mx-auto">
                        </div>
                        <div class="md:w-3/4">
                            <h3 class="text-3xl font-bold mb-4 text-[24px]">Professional After-Sales Support</h3>
                            <p class="text-gray-700 mb-6 leading-8">We provide comprehensive technical support
                                and after-sales services, including installation
                                guidance, product warranties, and quality
                                tracking. Our worry-free after-sales services
                                help strengthen customer loyalty and improve
                                brand reputation.</p>
                            <a target="_blank" href="<?= site_url( 'contact-us' ) ?>"
                               class="bg-red-600 text-white px-6 py-3 inline-block mt-1 hover:bg-red-700 transition">Contact
                                Us</a></div>
                    </div>
                    <div class="md:w-1/3 w-full flex px-6 py-12 shadow-lg">
                        <div class="md:w-1/4">
                            <img src="<?= get_theme_file_uri( '/assets/images/nav/nav_tb_02.png' ) ?>"
                                 alt="Sliding Windows"
                                 class="w-16 h-16 mx-auto">
                        </div>
                        <div class="md:w-3/4">
                            <h3 class="text-3xl font-bold mb-4">Competitive Pricing and HighQuality Raw Materials</h3>
                            <p class="text-gray-700 mb-6 leading-8">As a manufacturer, we source raw materials
                                directly and optimize production processes to
                                ensure competitive pricing while maintaining
                                high product quality, helping clients achieve
                                higher profit margins in the market.</p>
                            <a target="_blank" href="<?= site_url( 'contact-us' ) ?>"
                               class="bg-red-600 text-white px-6 py-3 inline-block mt-1 hover:bg-red-700 transition">Contact
                                Us</a></div>
                    </div>

                </div>
            </div>

        </div>

    </section>
    <section class="hidden md:block px-16 pb-16 bg-white elementor elementor-9698">
        <h1 class="text-4xl font-bold text-gray-800 mb-6 text-center">Simplified Process: RICHOCEAN's Workflow</h1>
        <h2 class="text-xl font-semibold text-gray-500 mb-16 text-center">First, we conduct a thorough consultation to
            fully understand your requirements, ensuring our approach aligns perfectly with your business
            goals.</h2>
        <div class="container mx-auto p-4">
            <section
                    class="elementor-section elementor-inner-section elementor-element elementor-element-53023186 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="53023186" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-132679fb"
                         data-id="132679fb" data-element_type="column"
                         data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-background-overlay"></div>
                            <div class="elementor-element elementor-element-3b3e5fea elementor-absolute elementor-widget elementor-widget-image"
                                 data-id="3b3e5fea" data-element_type="widget"
                                 data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                 data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img loading="lazy" decoding="async" width="209" height="209"
                                         src="<?= get_theme_file_uri( '/assets/images/1-1.png' ) ?>"
                                         class="attachment-full size-full wp-image-9657" alt=""
                                         sizes="(max-width: 209px) 100vw, 209px"></div>
                            </div>
                            <div class="elementor-element elementor-element-536c4b65 elementor-absolute elementor-hidden-tablet elementor-hidden-phone elementor-widget elementor-widget-image"
                                 data-id="536c4b65" data-element_type="widget"
                                 data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                 data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img loading="lazy" decoding="async" width="675" height="90"
                                         src="<?= get_theme_file_uri( '/assets/images/Arrow.png' ) ?>"
                                         class="attachment-full size-full wp-image-9658" alt=""
                                         sizes="(max-width: 675px) 100vw, 675px"></div>
                            </div>
                            <div class="elementor-element elementor-element-383d75e2 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box"
                                 data-id="383d75e2" data-element_type="widget"
                                 data-widget_type="elementskit-icon-box.default">
                                <div class="elementor-widget-container">
                                    <div class="ekit-wid-con">        <!-- link opening -->
                                        <!-- end link opening -->

                                        <div class="elementskit-infobox text-center text- icon-top-align elementor-animation-   ">
                                            <div class="elementskit-box-header elementor-animation-">
                                                <div class="elementskit-info-box-icon  ">
                                                    <i aria-hidden="true"
                                                       class="elementkit-infobox-icon icon icon-Consultancy"></i>
                                                </div>
                                            </div>
                                            <div class="box-body">
                                                <h3 class="elementskit-info-box-title">
                                                    Initial Consultation </h3>
                                                <p>At the beginning of the project, we will
                                                    engage in an in-depth discussion to
                                                    understand your needs, preferences, and
                                                    project scope, laying the foundation for a
                                                    tailor-made solution.
                                                </p>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2449ad4"
                         data-id="2449ad4" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-1dd33082 elementor-absolute elementor-hidden-tablet elementor-hidden-phone elementor-widget elementor-widget-image"
                                 data-id="1dd33082" data-element_type="widget"
                                 data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                 data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img loading="lazy" decoding="async" width="675" height="90"
                                         src="<?= get_theme_file_uri( '/assets/images/Arrow.png' ) ?>"
                                         class="attachment-full size-full wp-image-9658" alt=""
                                         sizes="(max-width: 675px) 100vw, 675px"></div>
                            </div>
                            <div class="elementor-element elementor-element-1569d0ae ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box"
                                 data-id="1569d0ae" data-element_type="widget"
                                 data-widget_type="elementskit-icon-box.default">
                                <div class="elementor-widget-container">
                                    <div class="ekit-wid-con">        <!-- link opening -->
                                        <!-- end link opening -->

                                        <div class="elementskit-infobox text-center text- icon-top-align elementor-animation-   ">
                                            <div class="elementskit-box-header elementor-animation-">
                                                <div class="elementskit-info-box-icon  ">
                                                    <i aria-hidden="true"
                                                       class="elementkit-infobox-icon icon icon-design"></i>
                                                </div>
                                            </div>
                                            <div class="box-body">
                                                <h3 class="elementskit-info-box-title">Design and Customization</h3>
                                                <p>Our highly skilled design team will bring
                                                    your vision to life, offering 3D
                                                    visualizations and a wide range of
                                                    customization options to meet and exceed
                                                    your expectations.</p>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-53bd7c13 elementor-absolute elementor-widget elementor-widget-image"
                                 data-id="53bd7c13" data-element_type="widget"
                                 data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                 data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img loading="lazy" decoding="async" width="209" height="209"
                                         src="<?= get_theme_file_uri( '/assets/images/2-1.png' ) ?>"
                                         class="attachment-full size-full wp-image-9660" alt=""
                                         sizes="(max-width: 209px) 100vw, 209px"></div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2c7190c9"
                         data-id="2c7190c9" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-7fbf8491 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box"
                                 data-id="7fbf8491" data-element_type="widget"
                                 data-widget_type="elementskit-icon-box.default">
                                <div class="elementor-widget-container">
                                    <div class="ekit-wid-con">        <!-- link opening -->
                                        <!-- end link opening -->

                                        <div class="elementskit-infobox text-center text- icon-top-align elementor-animation-   ">
                                            <div class="elementskit-box-header elementor-animation-">
                                                <div class="elementskit-info-box-icon  ">
                                                    <i aria-hidden="true"
                                                       class="elementkit-infobox-icon icon icon-factory"></i>
                                                </div>
                                            </div>
                                            <div class="box-body">
                                                <h3 class="elementskit-info-box-title">Manufacturing and Quality
                                                    Assurance</h3>
                                                <p>We carefully craft doors and windows
                                                    using premium materials, with each
                                                    product undergoing rigorous quality checks
                                                    to ensure it meets our high standards.</p>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-517d3ef5 elementor-absolute elementor-widget elementor-widget-image"
                                 data-id="517d3ef5" data-element_type="widget"
                                 data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                 data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img loading="lazy" decoding="async" width="209" height="209"
                                         src="<?= get_theme_file_uri( '/assets/images/3-1.png' ) ?>"
                                         class="attachment-full size-full wp-image-9662" alt=""
                                         sizes="(max-width: 209px) 100vw, 209px"></div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-67e61b92"
                         data-id="67e61b92" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-2b1fcf3b ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box"
                                 data-id="2b1fcf3b" data-element_type="widget"
                                 data-widget_type="elementskit-icon-box.default">
                                <div class="elementor-widget-container">
                                    <div class="ekit-wid-con">        <!-- link opening -->
                                        <!-- end link opening -->

                                        <div class="elementskit-infobox text-center text- icon-top-align elementor-animation-   ">
                                            <div class="elementskit-box-header elementor-animation-">
                                                <div class="elementskit-info-box-icon  ">
                                                    <i aria-hidden="true"
                                                       class="elementkit-infobox-icon icon icon-settings1"></i>
                                                </div>
                                            </div>
                                            <div class="box-body">
                                                <h3 class="elementskit-info-box-title">Logistics and After-Sales
                                                    Service</h3>
                                                <p>After production, we arrange international
                                                    logistics for timely delivery and provide
                                                    comprehensive after-sales service to
                                                    ensure your satisfaction and the success of
                                                    your project.
                                                </p>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-5c02a733 elementor-absolute elementor-hidden-tablet elementor-hidden-phone elementor-widget elementor-widget-image"
                                 data-id="5c02a733" data-element_type="widget"
                                 data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                 data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img loading="lazy" decoding="async" width="675" height="90"
                                         src="<?= get_theme_file_uri( '/assets/images/Arrow.png' ) ?>"
                                         class="attachment-full size-full wp-image-9658" alt=""
                                         sizes="(max-width: 675px) 100vw, 675px"></div>
                            </div>
                            <div class="elementor-element elementor-element-47d401c elementor-absolute elementor-widget elementor-widget-image"
                                 data-id="47d401c" data-element_type="widget"
                                 data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                 data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img loading="lazy" decoding="async" width="209" height="209"
                                         src="<?= get_theme_file_uri( '/assets/images/2-1-1-1.png' ) ?>"
                                         class="attachment-full size-full wp-image-9664" alt=""
                                         sizes="(max-width: 209px) 100vw, 209px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

    </section>
    <section
            class="hidden md:block p-16 elementor elementor-9698 elementor-section elementor-top-section elementor-element elementor-element-322d0c06 custom-ele-section-css elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="322d0c06" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-77956979 animated fadeInLeft"
                 data-id="77956979" data-element_type="column"
                 data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-57ef4f4b elementor-widget-tablet__width-inherit elementor-widget elementor-widget-heading"
                         data-id="57ef4f4b" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">Partnering for Success: Our
                                Diverse Clientele
                            </h2></div>
                    </div>
                    <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-16924bbd elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="16924bbd" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-247ad814 elementor-hidden-mobile"
                                 data-id="247ad814" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-41d037f8 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                         data-id="41d037f8" data-element_type="widget"
                                         data-widget_type="divider.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-divider">
<span class="elementor-divider-separator">
    </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-462e82cf"
                                 data-id="462e82cf" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-82b5e17 elementor-widget elementor-widget-heading"
                                         data-id="82b5e17" data-element_type="widget"
                                         data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Services</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="elementor-element elementor-element-a7fc72b elementor-widget elementor-widget-text-editor"
                         data-id="a7fc72b" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <p>At Richocean, we pride ourselves on delivering tailored solutions that
                                meet the unique needs of a wide array of industry professionals. Our
                                comprehensive services cater to the specific demands of each client
                                segment, ensuring satisfaction across the board.</p>
                            <p>&nbsp;</p></div>
                    </div>
                    <div class="elementor-element elementor-element-79b52dd8 elementor-widget elementor-widget-spacer"
                         data-id="79b52dd8" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-5db82eb7 elementor-mobile-align-center elementor-widget elementor-widget-button"
                         data-id="5db82eb7" data-element_type="widget" data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a class="elementor-button elementor-button-link elementor-size-sm"
                                   href="<?= site_url( 'contact-us' ) ?>"
                                   target="_blank" rel="nofollow">
    <span class="elementor-button-content-wrapper">
                <span class="elementor-button-text">Request Design Consult</span>
</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-449a0337 animated fadeInRight"
                 data-id="449a0337" data-element_type="column"
                 data-settings="{&quot;animation&quot;:&quot;fadeInRight&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-3a368f4e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="3a368f4e" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b258043"
                                 data-id="b258043" data-element_type="column"
                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-769b2338 elementor-view-default elementor-widget elementor-widget-icon"
                                         data-id="769b2338" data-element_type="widget" data-widget_type="icon.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-icon-wrapper">
                                                <div class="elementor-icon">
                                                    <i aria-hidden="true" class="fas fa-business-time"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-3ea00c0e elementor-widget elementor-widget-heading"
                                         data-id="3ea00c0e" data-element_type="widget"
                                         data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Wholesalers</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-3ee43035 elementor-widget elementor-widget-spacer"
                                         data-id="3ee43035" data-element_type="widget"
                                         data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-23c005bc elementor-widget elementor-widget-text-editor"
                                         data-id="23c005bc" data-element_type="widget"
                                         data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>Richocean offers wholesalers a
                                                diverse range of high-quality, costeffective doors and windows,
                                                providing reliable bulk purchasing
                                                options to meet large-scale
                                                demand with superior
                                                performance and design.</p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-46fca0e6"
                                 data-id="46fca0e6" data-element_type="column"
                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-438a8563 elementor-view-default elementor-widget elementor-widget-icon"
                                         data-id="438a8563" data-element_type="widget" data-widget_type="icon.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-icon-wrapper">
                                                <div class="elementor-icon">
                                                    <i aria-hidden="true" class="far fa-building"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-6197957e elementor-widget elementor-widget-heading"
                                         data-id="6197957e" data-element_type="widget"
                                         data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Builders</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-3f742313 elementor-widget elementor-widget-spacer"
                                         data-id="3f742313" data-element_type="widget"
                                         data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-42f59249 elementor-widget elementor-widget-text-editor"
                                         data-id="42f59249" data-element_type="widget"
                                         data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>Trusted by builders for our
                                                durable, aesthetically appealing
                                                doors and windows, Richocean
                                                delivers functional solutions that
                                                enhance any construction or
                                                renovation project, combining
                                                strength with style.</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-30e88029 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="30e88029" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2cacd532"
                                 data-id="2cacd532" data-element_type="column"
                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-57f7cb41 elementor-view-default elementor-widget elementor-widget-icon"
                                         data-id="57f7cb41" data-element_type="widget" data-widget_type="icon.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-icon-wrapper">
                                                <div class="elementor-icon">
                                                    <i aria-hidden="true" class="icon icon-commerce"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-2a25c1e5 elementor-widget elementor-widget-heading"
                                         data-id="2a25c1e5" data-element_type="widget"
                                         data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Dealers</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-7ad56da5 elementor-widget elementor-widget-spacer"
                                         data-id="7ad56da5" data-element_type="widget"
                                         data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-26024fe9 elementor-widget elementor-widget-text-editor"
                                         data-id="26024fe9" data-element_type="widget"
                                         data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>With a focus on premium quality
                                                and customization, Richocean
                                                provides door and window dealers
                                                with a wide selection of products
                                                that cater to diverse customer
                                                needs, helping them stay ahead in
                                                a competitive market.</p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-53da8870"
                                 data-id="53da8870" data-element_type="column"
                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-2030d209 elementor-view-default elementor-widget elementor-widget-icon"
                                         data-id="2030d209" data-element_type="widget" data-widget_type="icon.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-icon-wrapper">
                                                <div class="elementor-icon">
                                                    <i aria-hidden="true" class="fas fa-city"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-5a5508a2 elementor-widget elementor-widget-heading"
                                         data-id="5a5508a2" data-element_type="widget"
                                         data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Renovation
                                                Companies</h2></div>
                                    </div>
                                    <div class="elementor-element elementor-element-1c91d0b9 elementor-widget elementor-widget-spacer"
                                         data-id="1c91d0b9" data-element_type="widget"
                                         data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-12f2e22d elementor-widget elementor-widget-text-editor"
                                         data-id="12f2e22d" data-element_type="widget"
                                         data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>Richocean s energy-efficient and stylish
                                                doors and windows offer renovation
                                                companies the perfect blend of design
                                                flexibility and performance, ensuring
                                                seamless integration into every
                                                renovation project, from residential to
                                                commercial.</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-white">
        <div class="container mx-auto text-center p-16">
            <h2 class="text-4xl font-bold mb-4">What Projects Can We Take?</h2>
            <p class="text-gray-500 mb-8">Testing in accordance to NFRC / AS2047 / ISO9001 / CE</p>
            <div class="flex flex-wrap justify-center space-x-4 mb-12">
                <div class="font-medium"><span class="text-red-600 mr-2"><i
                                class="fas fa-check-circle"></i></span> High-end Villa
                </div>
                <div class="font-medium"><span class="text-red-600 mr-2"><i
                                class="fas fa-check-circle"></i></span> Private Homes
                </div>
                <div class="font-medium"><span class="text-red-600 mr-2"><i
                                class="fas fa-check-circle"></i></span> Apartments
                </div>
                <div class="font-medium"><span class="text-red-600 mr-2"><i
                                class="fas fa-check-circle"></i></span> Multi-family
                </div>
                <div class="font-medium"><span class="text-red-600 mr-2"><i
                                class="fas fa-check-circle"></i></span> Row Houses
                </div>
                <div class="font-medium"><span class="text-red-600 mr-2"><i
                                class="fas fa-check-circle"></i></span> Hotels
                </div>
                <div class="font-medium"><span class="text-red-600 mr-2"><i
                                class="fas fa-check-circle"></i></span> Schools
                </div>
                <div class="font-medium"><span class="text-red-600 mr-2"><i
                                class="fas fa-check-circle"></i></span> Offices
                </div>
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
                    Start your journey towards transfo rming your space with Richocean s high-quality
                    doors and windows. From the initial design consultation to the final installation, our
                    dedicated team is here to bring your vision to li fe with precision and style. Contact
                    us today to create the perfect doors and windows for your project.
                </p>

                <ul class="space-y-4">
                    <li class="flex items-start">
                        <span class="text-orange-500 mr-3"><span class="text-red-600 mr-2"><i
                                        class="fas fa-check-circle"></i></span></span>
                        <p class="text-gray-600">Over 10 Years of Expertise in the Door and Window Industry</p>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-500 mr-3"><span class="text-red-600 mr-2"><i
                                        class="fas fa-check-circle"></i></span></span>
                        <p class="text-gray-600">Global Partners in Over 120 Countries</p>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-500 mr-3"><span class="text-red-600 mr-2"><i
                                        class="fas fa-check-circle"></i></span></span>
                        <p class="text-gray-600">95% Customer Satisfaction Rate</p>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-500 mr-3"><span class="text-red-600 mr-2"><i
                                        class="fas fa-check-circle"></i></span></span>
                        <p class="text-gray-600">Rapid Response Within 12 Hours</p>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-500 mr-3"><span class="text-red-600 mr-2"><i
                                        class="fas fa-check-circle"></i></span></span>
                        <p class="text-gray-600">Custom Design Solutions for Unique Projects</p>
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
    <section class="elementor elementor-9277 elementor-kit-34">
        <div class="elementor-section elementor-top-section elementor-element elementor-element-eba665b elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
             data-id="eba665b" data-element_type="section"
             data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-66e9ee1a"
                     data-id="66e9ee1a" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-5d4bca3b elementor-widget elementor-widget-heading"
                             data-id="5d4bca3b" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Reach Greater Business
                                    Heights by Partnering with RICHOCEAN</h2></div>
                        </div>
                        <div class="elementor-element elementor-element-54d5221 elementor-widget elementor-widget-spacer"
                             data-id="54d5221" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-139c4efc elementor-align-center elementor-widget elementor-widget-button"
                             data-id="139c4efc" data-element_type="widget" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <a target="_blank" class="elementor-button elementor-button-link elementor-size-sm"
                                       href="<?= site_url( 'contact-us' ) ?>">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">TALK TO SPECIALIST &gt;</span>
					</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

<?php get_footer(); ?>
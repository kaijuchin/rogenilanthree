<?php get_header(); ?>
    <section class="relative h-screen bg-cover bg-center flex items-center justify-start"
             style="background-image: url('https://www.richoceanchina.com/wp-content/themes/rogenilantwo/assets/images/banner_01.jpg');">
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
    <section class="p-8">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4">Why Choose Aluminum?</h2>
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
    <section class="p-8 bg-gray-50">
        <div class="container mx-auto text-center">
            <h2 class="text-xl font-semibold text-gray-500 mb-2">Designed for Comfort, Built for Success</h2>
            <h1 class="text-4xl font-bold text-gray-800 mb-10">Products</h1>
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
					$post_image_url = get_field( 'image' )['link'] ?: 'http://www.rogenilan.com/upload/images/360_360/1646980923461464.jpg';
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
            <h2 class="text-3xl lg:text-4xl font-bold mb-4">1. China Window & Door Representative</h2>
            <h3 class="text-red-500 text-xl mb-4">Crafted to Perfection</h3>
            <p class="text-gray-700 mb-6">
                We have a completely independent product developmentteam, dozens ofinternational certifications and
                testingcertificates.we continue to be the market leader in Chinafor product design, strength, safety and
                customer service.
            </p>
            <ul class="list-none mb-6 space-y-3">
                <li class="flex items-start">
                    <span class="text-red-600 mr-2">✔️</span> Personalized design consultations
                </li>
                <li class="flex items-start">
                    <span class="text-red-600 mr-2">✔️</span> 3D renderings and material selection
                </li>
                <li class="flex items-start">
                    <span class="text-red-600 mr-2">✔️</span> Customized to space and style requirements
                </li>
                <li class="flex items-start">
                    <span class="text-red-600 mr-2">✔️</span> Quality-controlled production ensuring high standards
                </li>
            </ul>
        </div>
        <div class="lg:w-1/2 mt-8 lg:mt-0 lg:ml-8">
            <img src="https://bokefurniture.com/wp-content/uploads/2024/10/furniture-consult-design.jpg"
                 alt="Furniture Sketch" class="w-full h-auto rounded shadow-lg">
        </div>
    </section>
    <section class="container mx-auto p-12 lg:flex lg:items-center lg:justify-between">
        <div class="lg:w-1/2 ">
            <img src="https://bokefurniture.com/wp-content/uploads/2024/10/furniture-consult-design.jpg"
                 alt="Furniture Sketch" class="w-full h-auto rounded shadow-lg">
        </div>
        <div class="lg:w-1/2 mt-8 lg:mt-0 lg:ml-8">
            <h2 class="text-3xl lg:text-4xl font-bold mb-4">2. High Production Capacity& Flexibility</h2>
            <h3 class="text-red-500 text-xl mb-4">Crafted to Perfection</h3>
            <p class="text-gray-700 mb-6">
                We have a completely independent product developmentteam, dozens ofinternational certifications and
                testingcertificates.we continue to be the market leader in Chinafor product design, strength, safety and
                customer service.
            </p>
            <ul class="list-none mb-6 space-y-3">
                <li class="flex items-start">
                    <span class="text-red-600 mr-2">✔️</span> Personalized design consultations
                </li>
                <li class="flex items-start">
                    <span class="text-red-600 mr-2">✔️</span> 3D renderings and material selection
                </li>
                <li class="flex items-start">
                    <span class="text-red-600 mr-2">✔️</span> Customized to space and style requirements
                </li>
                <li class="flex items-start">
                    <span class="text-red-600 mr-2">✔️</span> Quality-controlled production ensuring high standards
                </li>
            </ul>
        </div>

    </section>
    <section class="container mx-auto p-12 lg:flex lg:items-center lg:justify-between">
        <div class="lg:w-1/2">
            <h2 class="text-3xl lg:text-4xl font-bold mb-4">3. Experience Matters</h2>
            <h3 class="text-red-500 text-xl mb-4">Crafted to Perfection</h3>
            <p class="text-gray-700 mb-6">
                We have a completely independent product developmentteam, dozens ofinternational certifications and
                testingcertificates.we continue to be the market leader in Chinafor product design, strength, safety and
                customer service.
            </p>
            <ul class="list-none mb-6 space-y-3">
                <li class="flex items-start">
                    <span class="text-red-600 mr-2">✔️</span> Personalized design consultations
                </li>
                <li class="flex items-start">
                    <span class="text-red-600 mr-2">✔️</span> 3D renderings and material selection
                </li>
                <li class="flex items-start">
                    <span class="text-red-600 mr-2">✔️</span> Customized to space and style requirements
                </li>
                <li class="flex items-start">
                    <span class="text-red-600 mr-2">✔️</span> Quality-controlled production ensuring high standards
                </li>
            </ul>
        </div>
        <div class="lg:w-1/2 mt-8 lg:mt-0 lg:ml-8">
            <img src="https://bokefurniture.com/wp-content/uploads/2024/10/furniture-consult-design.jpg"
                 alt="Furniture Sketch" class="w-full h-auto rounded shadow-lg">
        </div>
    </section>
    <section class="container mx-auto p-12 lg:flex lg:items-center lg:justify-between">
        <div class="container">
            <div class="lb_xgt">
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
                <p><img src="https://www.richoceanchina.com/wp-content/themes/rogenilantwo/skin/images/dtu_01.png"></p>
                <div class="bd">
                    <div class="carousel-container">
                        <ul class="picList">
                            <li class="clone">
                                <div class="pic"><img
                                            src="https://www.richoceanchina.com/wp-content/themes/rogenilantwo/skin/images/dianpu5.jpg">
                                </div>
                            </li>
                            <li>
                                <div class="pic"><img
                                            src="https://www.richoceanchina.com/wp-content/themes/rogenilantwo/skin/images/dianpu1.jpg">
                                </div>
                            </li>
                            <li>
                                <div class="pic"><img
                                            src="https://www.richoceanchina.com/wp-content/themes/rogenilantwo/skin/images/dianpu2.jpg">
                                </div>
                            </li>
                            <li>
                                <div class="pic"><img
                                            src="https://www.richoceanchina.com/wp-content/themes/rogenilantwo/skin/images/dianpu3.jpg">
                                </div>
                            </li>
                            <li>
                                <div class="pic"><img
                                            src="https://www.richoceanchina.com/wp-content/themes/rogenilantwo/skin/images/dianpu4.jpg">
                                </div>
                            </li>
                            <li>
                                <div class="pic"><img
                                            src="https://www.richoceanchina.com/wp-content/themes/rogenilantwo/skin/images/dianpu5.jpg">
                                </div>
                            </li>
                            <li class="clone">
                                <div class="pic"><img
                                            src="https://www.richoceanchina.com/wp-content/themes/rogenilantwo/skin/images/dianpu1.jpg">
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
                            <img src="https://www.richoceanchina.com/wp-content/themes/rogenilantwo/skin/images/yqlj_01.jpg">
                        </li>
                        <li>
                            <img src="https://www.richoceanchina.com/wp-content/themes/rogenilantwo/skin/images/yqlj_02.jpg">
                        </li>
                        <li>
                            <img src="https://www.richoceanchina.com/wp-content/themes/rogenilantwo/skin/images/yqlj_03.jpg">
                        </li>
                        <li>
                            <img src="https://www.richoceanchina.com/wp-content/themes/rogenilantwo/skin/images/yqlj_04.jpg">
                        </li>
                        <li>
                            <img src="https://www.richoceanchina.com/wp-content/themes/rogenilantwo/skin/images/yqlj_05.jpg">
                        </li>
                        <li>
                            <img src="https://www.richoceanchina.com/wp-content/themes/rogenilantwo/skin/images/yqlj_06.jpg">
                        </li>
                        <li>
                            <img src="https://www.richoceanchina.com/wp-content/themes/rogenilantwo/skin/images/yqlj_07.jpg">
                        </li>
                        <li>
                            <img src="https://www.richoceanchina.com/wp-content/themes/rogenilantwo/skin/images/yqlj_08.jpg">
                        </li>
                        <li>
                            <img src="https://www.richoceanchina.com/wp-content/themes/rogenilantwo/skin/images/yqlj_09.jpg">
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <section class="p-8">
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
                    <img src="https://www.richoceanchina.com/wp-content/themes/rogenilantwo/skin/images/project1.jpg"
                         alt="Private Homes" class="w-full h-56 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-1">Private Homes</h3>
                        <p class="text-gray-500">Indianapolis, Indiana, USA</p>
                    </div>
                </div>
                <!-- Project Card 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://www.richoceanchina.com/wp-content/themes/rogenilantwo/skin/images/project2.jpg"
                         alt="High-end Villa" class="w-full h-56 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-1">High-end Villa</h3>
                        <p class="text-gray-500">Los Angeles, California, USA</p>
                    </div>
                </div>
                <!-- Project Card 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://www.richoceanchina.com/wp-content/themes/rogenilantwo/skin/images/project3.jpg"
                         alt="Hotels" class="w-full h-56 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-1">Hotels</h3>
                        <p class="text-gray-500">Indore, India</p>
                    </div>
                </div>
                <!-- Project Card 4 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://www.richoceanchina.com/wp-content/themes/rogenilantwo/skin/images/project4.jpg"
                         alt="Villa Group" class="w-full h-56 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-1">Villa Group</h3>
                        <p class="text-gray-500">Kingston, Jamaica</p>
                    </div>
                </div>
                <!-- Project Card 5 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://www.richoceanchina.com/wp-content/themes/rogenilantwo/skin/images/project5.jpg"
                         alt="Apartments" class="w-full h-56 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-1">Apartments</h3>
                        <p class="text-gray-500">Chow Tai Fook Mansion, Hongkong</p>
                    </div>
                </div>
                <!-- Project Card 6 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://www.richoceanchina.com/wp-content/themes/rogenilantwo/skin/images/project6.jpg"
                         alt="Multi-family" class="w-full h-56 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-1">Multi-family</h3>
                        <p class="text-gray-500">Dar Al Zain, Muscat, Oman</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-8 bg-gray-50">
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
                        <p class="text-gray-600">Phone us at 0086-15813395645</p>
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
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Talk to Our Expert</h2>
                <form action="#" method="POST" class="space-y-6">
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
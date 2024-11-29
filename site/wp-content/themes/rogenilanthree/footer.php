<footer class="py-10 px-4 bg-gray-900 text-gray-400">
    <div class="max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Contact Section -->
        <div>
            <img src="<?= get_theme_file_uri('/assets/images/richocean-white-logo.png'); ?>" alt="" class="mb-4 w-56">
            <ul class="pl-0" style="text-align: left; line-height: 1.6rem; margin-top: 2rem;">
                <li style="margin-bottom: 1rem;"><i class="fas fa-phone-alt" style="margin-right: 8px;"></i>Phone us at +86 17607086086 </li>
                <li style="margin-bottom: 1rem;"><i class="fas fa-envelope" style="margin-right: 8px;"></i>Email us at <a class="text-red-600 font-bold border-b border-red-600 no-underline transition-all duration-500 ease-[cubic-bezier(0.54,0.1,0,0.99)]" href="mailto:Kai@rogenilan.com">Kai@rogenilan.com</a> </li>
                <li style="margin-bottom: 1rem;"><i class="fas fa-map-marker-alt" style="margin-right: 8px;"></i>Marketing Center at 23/F, Weiye International Building, Dali Town, Foshan City, Guangdong Province, China</li>
            </ul>
        </div>
        <!-- WINDOWS Section -->
        <div>
            <h3 class="text-red-500 mb-4">WINDOWS</h3>
            <ul class="space-y-2">
                <?php foreach (WINDOWS_SYSTEMS as $item): ?>
                <li><a target="_blank" href="<?= get_category_link( get_category_by_slug( $item['slug'] ) ); ?>" class="text-gray-400 hover:text-white transition duration-300">
                        <?= $item['name']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <!-- DOORS Section -->
        <div>
            <h3 class="text-red-500 mb-4">DOORS</h3>
            <ul class="space-y-2">
			    <?php foreach (DOORS_SYSTEMS as $item): ?>
                    <li><a target="_blank" href="<?= get_category_link( get_category_by_slug( $item['slug'] ) ); ?>" class="text-gray-400 hover:text-white transition duration-300">
						    <?= $item['name']; ?></a></li>
			    <?php endforeach; ?>
            </ul>
        </div>
        <!-- More Products Section -->
        <div>
            <h3 class="text-red-500 mb-4">More Products</h3>
            <ul class="space-y-2">
			    <?php foreach (MORE_PRODUCTS as $item): ?>
                    <li><a target="_blank" href="<?= get_category_link( get_category_by_slug( $item['slug'] ) ); ?>" class="text-gray-400 hover:text-white transition duration-300">
						    <?= $item['name']; ?></a></li>
			    <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <!-- Footer Bottom -->
    <div class="border-t border-gray-800 mt-8 pt-8 text-center">
        <h2 class="text-xl font-semibold mb-4">FOLLOW US</h2>
        <div class="flex justify-center space-x-6">
            <!-- LinkedIn Icon -->
            <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                <i class="fab fa-linkedin-in text-2xl"></i>
            </a>
            <!-- Twitter Icon -->
            <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                <i class="fab fa-twitter text-2xl"></i>
            </a>
            <!-- Facebook Icon -->
            <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                <i class="fab fa-facebook-f text-2xl"></i>
            </a>
            <!-- YouTube Icon -->
            <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                <i class="fab fa-youtube text-2xl"></i>
            </a>
            <!-- Instagram Icon -->
            <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                <i class="fab fa-instagram text-2xl"></i>
            </a>
        </div>
    </div>
</footer>
<?php echo do_shortcode('[footer_contact_form]'); ?>
<?php wp_footer(); ?>
<!-- Swiper.js Library -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
        },
    });
</script>
</body>
</html>
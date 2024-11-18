<?php get_header(); ?>

<section class="pt-12 bg-gray-50 relative m-auto text-center text-sm">
	<?php custom_breadcrumbs(); ?>
</section>
<section class="px-8 py-12 bg-gray-50 relative m-auto">
    <h1 class="text-center font-extrabold text-[3.8em] leading-[1.1em] py-[0.5em]"><?php the_title(); ?></h1>
    <div class="md:w-[50%] container m-auto text-[1.2rem] leading-loose">
		<?php the_content(); ?>
    </div>
</section>
<section class="px-8 py-12 hidden md:block">
    <div class="container mx-auto relative">
        <div class="flex items-center mb-8">
            <i class="fas fa-window-maximize text-red-600 text-3xl mr-3"></i>
            <h2 class="text-3xl font-bold text-gray-800">Related Articles</h2>
        </div>
        <div class="relative">
            <!-- Carousel Wrapper -->
            <div id="carousel" class="flex space-x-4 overflow-x-hidden scrollbar-hide snap-x snap-mandatory">
                <!-- Article -->
                <div class="min-w-[300px] bg-white rounded-lg shadow-lg overflow-hidden border snap-start">
                    <img src="https://foshanwindowsdoors.com/wp-content/themes/rogenilan/uploads/240831/1-240S11K000137.jpg"
                         alt="Customize Your Entry Door" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg text-center font-semibold text-gray-800">Customize Your Entry Door</h3>
                    </div>
                </div>
            </div>
            <!-- Carousel Controls -->
            <button id="prevButton"
                    class="absolute top-1/2 -translate-y-1/2 -left-16 bg-white border rounded-full p-3 shadow-md hover:bg-gray-200 transition duration-300 focus:outline-none">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button id="nextButton"
                    class="absolute top-1/2 -translate-y-1/2 -right-16 bg-white border rounded-full p-3 shadow-md hover:bg-gray-200 transition duration-300 focus:outline-none">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const carousel = document.getElementById('carousel');
        const prevButton = document.getElementById('prevButton');
        const nextButton = document.getElementById('nextButton');

        nextButton.addEventListener('click', () => {
            carousel.scrollBy({left: 300, behavior: 'smooth'});
        });
        prevButton.addEventListener('click', () => {
            carousel.scrollBy({left: -300, behavior: 'smooth'});
        });
    });
</script>
<?php get_footer(); ?>

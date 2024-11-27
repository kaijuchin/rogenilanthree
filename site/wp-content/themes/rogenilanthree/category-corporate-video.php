<?php get_header(); ?>
<section class="relative py-16 bg-cover bg-center flex items-center justify-center"
         style="background-image: url('<?= get_field('banner_image')['link'] ?: get_theme_file_uri( '/assets/images/banner_01.jpg' ) ?>');">
	<div class="bg-black bg-opacity-60 text-white p-8 md:p-12 lg:p-16 max-w-2xl">
		<h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
			Corporate Video
		</h1>
	</div>
</section>
<section class="p-16">
	<div class="container mx-auto">
		<iframe width="100%" height="640" src="https://www.youtube.com/embed/ysTlnqW3bWI?si=fXGdGhvQICkIGG6c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
	</div>
</section>
<?php get_footer(); ?>

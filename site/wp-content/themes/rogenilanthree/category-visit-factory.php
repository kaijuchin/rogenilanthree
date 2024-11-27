<?php get_header(); ?>
<section class="relative py-16 bg-cover bg-center flex items-center justify-center"
         style="background-image: url('<?= get_field('image')['link'] ?: get_theme_file_uri( '/assets/images/banner_01.jpg' ) ?>');">
	<div class="bg-black bg-opacity-60 text-white p-8 md:p-12 lg:p-16 max-w-2xl">
		<h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
			Visit Factory
		</h1>
	</div>
</section>
<section class="p-16">
	<div class="container mx-auto">
		<iframe src="https://www.720yun.com/vr/02ajz7tv5v8" width="100%" height="640" frameborder="0" scrolling="no"></iframe>
	</div>
</section>
<?php get_footer(); ?>

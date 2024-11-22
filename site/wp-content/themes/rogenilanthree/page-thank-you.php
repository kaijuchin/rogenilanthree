<?php get_header(); ?>
<div class="container max-w-screen-lg mx-auto p-8">
	<div class="flex flex-col justify-center items-center space-y-4 thank-you-container">
		<div class="text-center thank-you-content p-6">
			<h1 class="text-3xl font-bold text-green-600">Thank You!</h1>
			<p class="text-gray-700 mb-4">Your message has been successfully received. We will reach out to you
				soon.</p>
			<a target="_self" href="<?php echo home_url(); ?>"
			   class="btn btn-primary px-6 py-2 rounded-lg hover:text-blue-700 transition duration-300">Back to Home</a>
		</div>
	</div>
</div>
<?php get_footer(); ?>

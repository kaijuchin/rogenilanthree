<?php get_header() ?>
<section class="relative py-16 bg-cover bg-center flex items-center justify-center"
         style="background-image: url('<?= get_field('banner_image')['link'] ?: get_theme_file_uri( '/assets/images/banner_01.jpg' ) ?>');">
    <div class="bg-black bg-opacity-60 text-white p-8 md:p-12 lg:p-16 max-w-2xl">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Contact Us</h2>
    </div>
</section>
<section class="p-8 bg-gray-50">
	<div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">

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
		<div class="bg-white p-8 rounded-lg shadow-lg">
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
	<div class="p-12">

		<!-- 地图容器 -->
		<div id="map" style="width: 100%; height: 500px;"></div>

		<!-- 引入 Leaflet CSS 和 JS -->
		<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
		<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

		<!-- 初始化地图的脚本 -->
		<script>
            document.addEventListener('DOMContentLoaded', function() {
                // 创建地图
                var map = L.map('map').setView([23.112265, 113.138199], 15);

                // 添加 OpenStreetMap 瓦片层
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '© OpenStreetMap 贡献者'
                }).addTo(map);

                // 添加标记
                L.marker([23.112265, 113.138199]).addTo(map)
                    .bindPopup('23/F, Weiye International Building, Dali Town, Foshan City, Guangdong Province, China')
                    .openPopup();
            });
		</script>


	</div>
	<img src="//sc04.alicdn.com/kf/H553dbd69cb6f41df9a2acd49717ad0eed/222016583/H553dbd69cb6f41df9a2acd49717ad0eed.jpg" alt="">
	<img src="//sc04.alicdn.com/kf/Ha666f3c081984ea3a218abadfecd110bj/222016583/Ha666f3c081984ea3a218abadfecd110bj.jpg" alt="">

</section>
<?php get_footer() ?>

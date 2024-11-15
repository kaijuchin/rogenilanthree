<footer class="py-10 px-4 bg-gray-900 text-gray-400">
    <div class="max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Contact Section -->
        <div>
            <img src="<?= get_theme_file_uri('/assets/images/richocean-white-logo.png'); ?>" alt="" class="mb-4 w-56">
            <p class="text-sm">0086-15813395645</p>
            <p class="text-sm"><a href="mailto:Kai@rogenilan.com ">Kai@rogenilan.com </a></p>
            <p class="text-sm">Marketing Center at 23/F, Weiye International Building, Dali Town, Foshan City, Guangdong Province, China</p>
        </div>
        <!-- WINDOWS Section -->
        <div>
            <h3 class="text-red-500 mb-4">WINDOWS</h3>
            <ul class="space-y-2">
                <?php foreach (WINDOWS_SYSTEMS as $item): ?>
                <li><?= $item['name']; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <!-- DOORS Section -->
        <div>
            <h3 class="text-red-500 mb-4">DOORS</h3>
            <ul class="space-y-2">
			    <?php foreach (DOORS_SYSTEMS as $item): ?>
                    <li><?= $item['name']; ?></li>
			    <?php endforeach; ?>
            </ul>
        </div>
        <!-- More Products Section -->
        <div>
            <h3 class="text-red-500 mb-4">More Products</h3>
            <ul class="space-y-2">
			    <?php foreach (MORE_PRODUCTS as $item): ?>
                    <li><?= $item['name']; ?></li>
			    <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <!-- Footer Bottom -->
    <div class="border-t border-gray-800 mt-8 pt-8 text-center">
        <p class="text-sm">COPYRIGHT 2012 - 2023 All Rights Reserved By Richocean</p>
        <div class="flex justify-center space-x-4 mt-4">
            <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-youtube"></i></a>
            <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>
</footer>
<?php echo do_shortcode('[footer_contact_form]'); ?>
<script src="<?= get_theme_file_uri('/assets/scripts/nav.js'); ?>"></script>
<script>

    function toggleFooterContactForm() {
        var form = document.getElementById('footer-contact-form');
        console.log(form.style.display)
        if (form.style.display === 'none' || form.style.display === '') {
            form.style.display = 'flex';
        } else {
            form.style.display = 'none';
        }
    }

    document.getElementById('footer-contact-form').addEventListener('submit', function(event) {
        event.preventDefault();
        // 在此处添加表单提交逻辑，例如通过 AJAX 将数据发送到服务器
        // 获取表单数据
        var formData = new FormData(this);

        // 发送 AJAX 请求
        fetch('/wp-admin/admin-ajax.php', {
            method: 'POST',
            body: formData
        })
            .then(data => {
                if (data.status === 200) {
                    alert('留言已提交！');
                    document.getElementById('footer-contact-form').reset(); // 重置表单
                    document.getElementById('footer-contact-form').style.display = 'none';
                } else {
                    alert('提交失败，请重试。');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                // alert('提交过程中出现错误，请稍后重试。');
            });

    });
</script>
</body>
</html>
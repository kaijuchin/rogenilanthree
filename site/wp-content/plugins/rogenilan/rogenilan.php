<?php
/*
Plugin Name: Rogenilan Plugin
Description: Customize Functions
Version: 1.0
Author: Lucky Shark
*/
if (!defined('ABSPATH')) {
	exit;
}

function custom_import_menu()
{
	add_menu_page(
		'Data Import',
		'Data Import',
		'manage_options',
		'custom-import',
		'custom_import_page',
	);
}

function custom_import_page()
{
	?>
	<div class="wrap">
		<h1>Import Categories</h1>
		<form method="post" enctype="multipart/form-data">
			<input type="file" name="import_json_file" accept=".json" required/>
			<br><br>
			<input type="hidden" name="custom_import_json_action" value="1">
			<input type="submit" class="button button-primary" value="Please upload a JSON file.">
		</form>
	</div>
	<?php
}

add_action('admin_menu', 'custom_import_menu');

function handle_custom_import()
{
	if (isset($_POST['custom_import_json_action']) && $_POST['custom_import_json_action'] == '1') {
		if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['import_json_file'])) {
			$uploaded_file = $_FILES['import_json_file'];

			if ($uploaded_file['error'] === UPLOAD_ERR_OK && $uploaded_file['type'] === 'application/json') {
				import_json_to_category($uploaded_file);
				add_action('admin_notices', function () {
					echo '<div class="notice notice-success is-dismissible"><p>JSON 文件导入成功！</p></div>';
				});
			} else {
				// 显示文件上传错误消息
				add_action('admin_notices', function () use ($uploaded_file) {
					echo '<div class="notice notice-error is-dismissible"><p>文件上传失败：' . esc_html($uploaded_file['error']) . '</p></div>';
				});
			}
		} else {
			// 显示没有选择文件的错误
			add_action('admin_notices', function () {
				echo '<div class="notice notice-error is-dismissible"><p>请先选择 JSON 文件！</p></div>';
			});
		}
	}
}

add_action('admin_init', 'handle_custom_import');

function import_json_to_category($file)
{
	// 获取文件内容并解析为数组
	$json_data = file_get_contents($file['tmp_name']);
	// 解析 JSON 数据
	$data = json_decode($json_data, true);

	if (!$data) {
		return 'Invalid JSON data';
	}

	// 记录已插入的分类及其 ID，方便后续设置父子关系
	$terms_map = [];

	foreach ($data as $item) {
		$parent_id = 0;

		// 如果存在 parent_slug，则获取相应的父分类 ID
		if (!empty($item['parent_slug'])) {
			// 检查父分类是否已经存在（在数据库或已插入的映射表中）
			if (isset($terms_map[$item['parent_slug']])) {
				$parent_id = $terms_map[$item['parent_slug']];
			} else {
				$parent_term = get_term_by('slug', $item['parent_slug'], 'category');
				$parent_id = $parent_term ? $parent_term->term_id : 0;
			}
		}

		// 检查分类是否已存在
		$term = term_exists($item['name'], 'category');

		if (!$term) {
			// 插入分类并记录新分类的 ID
			$new_term = wp_insert_term(
				$item['name'],  // 分类名称
				'category',     // 分类类型
				[
					'slug' => $item['slug'],
					'parent' => $parent_id,
				]
			);

			if (!is_wp_error($new_term)) {
				$terms_map[$item['slug']] = $new_term['term_id'];
			}
		} else {
			// 分类已存在，将现有的 term ID 添加到映射表
			$terms_map[$item['slug']] = $term['term_id'];
		}
	}
}

// 自定义面包屑
function custom_breadcrumbs() {
	// 首页链接
	$home_link   = home_url( '/' );
	$breadcrumbs = '<a href="' . $home_link . '">Home</a>';

	// 检查是否为首页
	if ( is_home() || is_front_page() ) {
		echo '<div class="breadcrumbs">' . $breadcrumbs . '</div>';

		return;
	}

	// 获取其他页面的层级
	if ( is_single() ) {
		// 获取分类信息
		$category = get_the_category();
		if ( $category ) {
			$breadcrumbs .= ' › <a href="' . get_category_link( $category[0]->term_id ) . '">' . $category[0]->name . '</a>';
		}
		$breadcrumbs .= ' › <span>' . get_the_title() . '</span>';
	} elseif ( is_page() ) {
		if ( $post = get_post( get_the_ID() ) ) {
			if ( $post->post_parent ) {
				$parent_link  = get_permalink( $post->post_parent );
				$parent_title = get_the_title( $post->post_parent );
				$breadcrumbs  .= ' › <a href="' . $parent_link . '">' . $parent_title . '</a>';
			}
		}
		$breadcrumbs .= ' › <span>' . get_the_title();
	} elseif ( is_category() ) {
		$category_id = get_queried_object_id();
		// Get parent category ID
		$parent_category = get_term( $category_id, 'category' )->parent;

		// If there is a parent category, get the parent category title
		if ( $parent_category ) {
			$parent_category_title = get_cat_name( $parent_category );
			$breadcrumbs .= ' › <a href="' . get_category_link( $parent_category ) . '">' . $parent_category_title . '</a>';
		}

		$breadcrumbs .= ' › <span>' . single_cat_title( '', false ) . '</span>';

	} elseif ( is_tag() ) {
		$breadcrumbs .= ' › <span>' . single_tag_title( '', false ) . '</span>';
	} elseif ( is_archive() ) {
		$breadcrumbs .= ' › <span>' . post_type_archive_title( '', false ) . '</span>';
	} elseif ( is_search() ) {
		$breadcrumbs .= ' › Search Result：' . get_search_query();
	} elseif ( is_404() ) {
		$breadcrumbs .= ' › Page Not Found';
	}

	// 输出面包屑导航
	echo '<div class="breadcrumbs">' . $breadcrumbs . '</div>';
}

function footer_contact_form_shortcode(): false|string {
	ob_start();
	?>
    <div id="floating-button" onclick="toggleFooterContactForm()"><i class="fa-regular fa-pen-to-square"></i></div>
    <div id="go-to-top-btn" class="bg-red-600" onclick="topFunction()"><i class="fa-solid fa-arrow-up"></i></div>
    <script>function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTo({top: 0, behavior: "smooth"})
        }</script>
    <!-- Contact Form Section -->
    <div id="popup-footer-form" class="max-w-screen-md mx-auto bg-white p-8 rounded-md shadow-md">
        <form action="<?= esc_url( admin_url( 'admin-post.php' ) ) ?>" enctype="multipart/form-data" method="POST"
              id="footer-contact-form" class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <input type="hidden" name="action" value="submit_contact_form">
            <input type="hidden" name="ajax" value="1">
            <!-- Email Field -->
            <div class="col-span-2">
                <label for="email" class="block text-sm font-bold mb-2 text-gray-700">E-MAIL *</label>
                <input type="email" id="email" name="email" placeholder="Email"
                       data-val-regex="Please Enter Correct Email Address"
                       data-val-regex-pattern="^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$"
                       class="w-full px-2 border-0 border-b border-stone-900 text-[0.75rem] leading-[3.125rem] focus:outline-0">
            </div>
            <!-- Phone Field -->
            <div>
                <label for="phone" class="block text-sm font-bold mb-2 text-gray-700">PHONE</label>
                <input type="text" id="phone" name="phone" placeholder="Phone"
                       class="w-full px-2 border-0 border-b border-stone-900 text-[0.75rem] leading-[3.125rem] focus:outline-0">
            </div>
            <!-- Country Field -->
            <div>
                <label for="country" class="block text-sm font-bold mb-2 text-gray-700">COUNTRY</label>
                <input type="text" id="country" name="country" placeholder="Country"
                       class="w-full px-2 border-0 border-b border-stone-900 text-[0.75rem] leading-[3.125rem] focus:outline-0">
            </div>
            <!-- Message Field -->
            <div class="col-span-2">
                <label for="message" class="block text-sm font-bold mb-2 text-gray-700">MESSAGE *</label>
                <textarea id="message" rows="1" name="message" placeholder="Please tell us about your requirements"
                          class="w-full px-2 border-0 border-b border-stone-900 text-[0.75rem] leading-[3.125rem] focus:outline-0"></textarea>
            </div>
            <!-- Submit Button -->
            <div class="col-span-2">
                <button type="submit" class="w-full p-3 bg-red-600 text-white font-bold rounded">SEND</button>
            </div>
        </form>
    </div>
    <script>

        function toggleFooterContactForm() {
            var form = document.getElementById('popup-footer-form');
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
	<?php
	return ob_get_clean();
}

add_shortcode( 'footer_contact_form', 'footer_contact_form_shortcode' );

function handle_contact_form_submission() {
	if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
		$email   = sanitize_email( $_POST['email'] );
		$phone   = sanitize_text_field( $_POST['phone'] );
		$country = sanitize_textarea_field( $_POST['country'] );
		$message = sanitize_text_field( $_POST['message'] );
		$ajax    = sanitize_text_field( $_POST['ajax'] ) ?? 0;

		$contact_data = array(
			'post_title'   => 'Message from ' . $email ?? $phone,
			'post_content' => $message,
			'post_type'    => 'contact',
			'post_status'  => 'publish',
			'meta_input'   => array(
				'email'   => $email,
				'phone'   => $phone,
				'country' => $country,
				'message' => $message
			),
		);
		wp_insert_post( $contact_data );
		if ( $ajax ) {
			return [ 'code' => 200, 'message' => 'Thank you for your message!' ];
		}
		wp_redirect( home_url( '/thank-you/' ) );

		exit;
	}

	return null;
}

add_action( 'admin_post_submit_contact_form', 'handle_contact_form_submission' );
add_action( 'admin_post_nopriv_submit_contact_form', 'handle_contact_form_submission' );
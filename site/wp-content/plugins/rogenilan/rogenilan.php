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

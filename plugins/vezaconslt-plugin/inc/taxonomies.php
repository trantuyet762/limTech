<?php

namespace VEZACONSLTPLUGIN\Inc;

use VEZACONSLTPLUGIN\Inc\Abstracts\Taxonomy;

class Taxonomies extends Taxonomy
{
	public static function init()
	{
		// $labels = array(
		// 	'name'              => _x('Danh mục giảng viên', 'wpvezaconslt'),
		// 	'singular_name'     => _x('Danh mục giảng viên', 'wpvezaconslt'),
		// 	'search_items'      => __('Tìm kiếm danh mục giảng viên', 'wpvezaconslt'),
		// 	'all_items'         => __('Tất cả danh mục giảng viên', 'wpvezaconslt'),
		// 	'parent_item'       => __('Danh mục cha', 'wpvezaconslt'),
		// 	'parent_item_colon' => __('Danh mục cha:', 'wpvezaconslt'),
		// 	'edit_item'         => __('Chỉnh sửa danh mục', 'wpvezaconslt'),
		// 	'update_item'       => __('Cập nhật danh mục', 'wpvezaconslt'),
		// 	'add_new_item'      => __('Thêm mới danh mục', 'wpvezaconslt'),
		// 	'new_item_name'     => __('Danh mục giảng viên mới', 'wpvezaconslt'),
		// 	'menu_name'         => __('Danh mục giảng viên', 'wpvezaconslt'),
		// );
		// $args   = array(
		// 	'hierarchical'       => true,
		// 	'labels'             => $labels,
		// 	'show_ui'            => true,
		// 	'show_admin_column'  => true,
		// 	'query_var'          => true,
		// 	'public'             => true,
		// 	'publicly_queryable' => true,
		// 	'rewrite'            => false,
		// );
		// register_taxonomy('lecturer-category', 'lecturer', $args);

		// $labelEventCat = array(
		// 	'name'              => _x('Danh mục sự kiện', 'wpvezaconslt'),
		// 	'singular_name'     => _x('Danh mục sự kiện', 'wpvezaconslt'),
		// 	'search_items'      => __('Tìm kiếm danh mục sự kiện', 'wpvezaconslt'),
		// 	'all_items'         => __('Tất cả danh mục sự kiện', 'wpvezaconslt'),
		// 	'parent_item'       => __('Danh mục cha', 'wpvezaconslt'),
		// 	'parent_item_colon' => __('Danh mục cha:', 'wpvezaconslt'),
		// 	'edit_item'         => __('Chỉnh sửa danh mục', 'wpvezaconslt'),
		// 	'update_item'       => __('Cập nhật danh mục', 'wpvezaconslt'),
		// 	'add_new_item'      => __('Thêm mới danh mục', 'wpvezaconslt'),
		// 	'new_item_name'     => __('Danh mục sự kiện mới', 'wpvezaconslt'),
		// 	'menu_name'         => __('Danh mục sự kiện', 'wpvezaconslt'),
		// );
		// $argEventCat   = array(
		// 	'hierarchical'       => true,
		// 	'labels'             => $labelEventCat,
		// 	'show_ui'            => true,
		// 	'show_admin_column'  => true,
		// 	'query_var'          => true,
		// 	'public'             => true,
		// 	'publicly_queryable' => true,
		// 	'rewrite'            => array('slug' => 'danh-muc-su-kien'),
		// );
		// register_taxonomy('events_cat', 'events', $argEventCat);
	}
}

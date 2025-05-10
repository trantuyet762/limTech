<?php
return array(
	'title'      => 'Cấu hình bài viết',
	'id'         => 'vezaconslt_meta_post',
	'icon'       => 'el el-cogs',
	'position'   => 'normal',
	'priority'   => 'core',
	'post_types' => array('post'),
	'sections'   => array(
		array(
			'id'     => 'vezaconslt_post_meta_setting',
			'fields' => array(
				array(
					'id'    => 'hot',
					'type'  => 'checkbox',
					'std' => 0,
					'title' => esc_html__('Bài viết nổi bật', 'vezaconslt'),
				),
			),
		),
	),
);

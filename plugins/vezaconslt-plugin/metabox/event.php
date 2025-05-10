<?php
return array(
	'title'      => 'Cấu hình sự kiện',
	'id'         => 'vezaconslt_meta_event',
	'icon'       => 'el el-cogs',
	'position'   => 'normal',
	'priority'   => 'core',
	'post_types' => array('events'),
	'sections'   => array(
		array(
			'id'     => 'vezaconslt_post_meta_setting',
			'fields' => array(
				array(
					'id'    => 'hot',
					'type'  => 'checkbox',
					'std' => 0,
					'title' => esc_html__('Sự kiện nổi bật', 'vezaconslt'),
				),
			),
		),
	),
);

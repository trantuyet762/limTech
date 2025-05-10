<?php
return array(
    'title'      => 'Cấu hình phòng học',
    'id'         => 'vezaconslt_meta_room',
    'icon'       => 'el el-cogs',
    'position'   => 'normal',
    'priority'   => 'core',
    'post_types' => array('room'),
    'sections'   => array(
        array(
            'id'     => 'vezaconslt_product_image',
            'title'  => 'Thư viện hình ảnh',
            'icon'   => 'el el-icon-gallery',
            'fields' => array(
                array(
                    'id'    => 'gallery',
                    'type'  => 'gallery',
                    'title' => esc_html__('Các hình ảnh', 'vezaconslt'),
                ),
            ),
        ),
    ),
);

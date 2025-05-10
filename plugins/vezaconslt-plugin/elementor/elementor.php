<?php

namespace VEZACONSLTPLUGIN\Element;

class Elementor
{
	static $widgets = array(
		'home_block_1',
		'home_block_2',
		'home_block_3',
		'home_block_4',
		'home_block_5',
		'page_all_author',
	);
	static function init()
	{
		add_action('elementor/init', array(__CLASS__, 'loader'));
		add_action('elementor/elements/categories_registered', array(__CLASS__, 'register_cats'));
	}
	static function loader()
	{
		foreach (self::$widgets as $widget) {
			$file = VEZACONSLTPLUGIN_PLUGIN_PATH . '/elementor/' . $widget . '.php';
			if (file_exists($file)) {
				require_once $file;
			}
			add_action('elementor/widgets/widgets_registered', array(__CLASS__, 'register'));
		}
	}
	static function register($elemntor)
	{
		foreach (self::$widgets as $widget) {
			$class = '\\VEZACONSLTPLUGIN\\Element\\' . ucwords($widget);
			if (class_exists($class)) {
				$elemntor->register_widget_type(new $class);
			}
		}
	}
	static function register_cats($elements_manager)
	{
		$elements_manager->add_category(
			'vezaconslt',
			[
				'title' => esc_html__('Chung', 'vezaconslt'),
				'icon'  => 'fa fa-plug',
			]
		);
		$elements_manager->add_category(
			'vezaconslt_home',
			[
				'title' => esc_html__('Trang Chủ', 'vezaconslt'),
				'icon'  => 'fa fa-plug',
			]
		);
		$elements_manager->add_category(
			'vezaconslt_introduce',
			[
				'title' => esc_html__('Giới Thiệu', 'vezaconslt'),
				'icon'  => 'fa fa-plug',
			]
		);
	}
}
Elementor::init();

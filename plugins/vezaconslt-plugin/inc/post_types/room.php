<?php

namespace VEZACONSLTPLUGIN\Inc\Post_Types;

use VEZACONSLTPLUGIN\Inc\Abstracts\Post_Type;

if (! function_exists('add_action')) {
    exit;
}
class Room extends Post_Type
{
    protected $post_type = 'room';
    protected $menu_icon = 'dashicons-welcome-learn-more';
    protected $taxonomies = array();
    public static $instance;
    public static function instance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public static function init()
    {
        self::instance()->menu_name = esc_html__('Phòng học', 'vezaconslt');
        self::instance()->singular  = esc_html__('Phòng học', 'vezaconslt');
        self::instance()->plural    = esc_html__('Phòng học', 'vezaconslt');
        self::instance()->supports    = array('title');
        add_action('init', array(self::instance(), 'register'));
    }
    public function rewrites()
    {
        return false;
    }
    public function args()
    {
        $args = array('supports' => $this->supports(), 'rewrite' => $this->rewrites());
        $args['public'] = false;
        $args['show_ui'] = true;
        $args['has_archive'] = false;
        if ($taxonomies = $this->taxonomies) {
            $args['taxonomies'] = $taxonomies;
        }
        if ($menu_icon = $this->menu_icon) {
            $args['menu_icon'] = $menu_icon;
        }
        return $args;
    }
}

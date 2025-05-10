<?php
namespace VEZACONSLTPLUGIN\Inc\Post_Types;
use VEZACONSLTPLUGIN\Inc\Abstracts\Post_Type;
if (! function_exists('add_action')) {
    exit;
}
class Event extends Post_Type
{
    protected $post_type = 'events';
    protected $menu_icon = 'dashicons-groups';
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
        self::instance()->menu_name = esc_html__('Sự kiện', 'vezaconslt');
        self::instance()->singular  = esc_html__('Sự kiện', 'vezaconslt');
        self::instance()->plural    = esc_html__('Sự kiện', 'vezaconslt');
        self::instance()->supports    = array('title', 'thumbnail', 'editor','excerpt');
        add_action('init', array(self::instance(), 'register'));
    }
    public function rewrites()
    {
        return array('slug'=>'chi-tiet-su-kien');
    }
}

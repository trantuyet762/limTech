<?php

namespace VEZACONSLTPLUGIN\Element;

use Elementor\Controls_Manager;
use Elementor\Controls_Stack;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Scheme_Color;
use Elementor\Group_Control_Border;
use Elementor\Repeater;
use Elementor\Widget_Base;
use Elementor\Utils;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Plugin;

class About extends Widget_Base
{
    public function get_name()
    {
        return 'vezaconslt_about';
    }
    public function get_title()
    {
        return esc_html__('Banner các trang', 'vezaconslt');
    }
    public function get_icon()
    {
        return 'eicon-form-horizontal';
    }
    public function get_categories()
    {
        return ['vezaconslt'];
    }
    protected function _register_controls()
    {
        $this->start_controls_section(
            'about_start',
            [
                'label' => esc_html__('Banner các trang', 'vezaconslt'),
            ]
        );
        $this->add_control(
            'banner',
            [
                'label' => esc_html__('Banner', 'vezaconslt'),
                'type' => Controls_Manager::MEDIA,
                'default' => ['url' => Utils::get_placeholder_image_src(),],
            ]
        );
        $this->end_controls_section();
    }
    /**
     * Render button widget output on the frontend.
     * Written in PHP and used to generate the final HTML.
     *
     * @since  1.0.0
     * @access protected
     */
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $allowed_tags = wp_kses_allowed_html('post');
?>
        <section class="bg-no-repeat bg-cover bg-center xl:h-[730px] lg:h-[515px] sm:h-[343px] h-[183px]" style="background-image: url('<?php echo $settings['banner']['url']; ?>');">
        </section>
        <section class="main-breadcrumb my-[2rem]">
            <div class="container">
                <div class="breadcrumb text-[1.125rem]">
                    <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
                </div>
            </div>
        </section>
<?php
    }
}

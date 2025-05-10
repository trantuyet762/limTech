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

class List_Author extends Widget_Base
{
    public function get_name()
    {
        return 'vezaconslt_list_author';
    }
    public function get_title()
    {
        return esc_html__('Danh sách tác giả', 'vezaconslt');
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
            'list_author_start',
            [
                'label' => esc_html__('Danh sách tác giả', 'vezaconslt'),
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => esc_html__('Tiêu đề', 'vezaconslt'),
                'type' => Controls_Manager::TEXT,
                'default' => 'Nhập tiêu đề',
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
        <section class="tacgia mt-[1.5625rem] sm:mt-[2.5rem]">
            <div class="container">
                <div>
                    <div class=" mt-[1.25rem] sm:mt-[2.5rem] tacgia-container">
                        <div>
                            <h2 class="text-center ">
                                <?php echo $settings['title']; ?>
                            </h2>
                        </div>
                        <div class="tacgia-items mt-[1rem] sm:mt-[1.25rem] grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                            <?php for ($i = 1; $i <= 6; $i++) { ?>
                                <div class="p-[1rem] gap-y-[1rem] tacgia-item">
                                    <div class="img-tacgia-items shrink-0">
                                        <a href="#" title="" class="c-img rounded-[0.625rem] overflow-hidden block img__ pt-[64%]">
                                            <img src="theme/frontend/images/tacgia_1.png" alt="tacgia_name">
                                        </a>
                                    </div>
                                    <div class="text-center">
                                        <a class="name-tacgia">
                                            Nguyễn Anh Tuấn
                                        </a>
                                        <p class="level-name-tacgia">Tên chức vụ</p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
    }
}

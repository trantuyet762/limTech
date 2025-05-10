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

class Page_All_Author extends Widget_Base
{
    public function get_name()
    {
        return 'vezaconslt_page_all_author';
    }

    public function get_title()
    {
        return esc_html__('Trang tất cả tác giả', 'vezaconslt');
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
            'page_all_author_start',
            [
                'label' => esc_html__('Trang tất cả tác giả', 'vezaconslt'),
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

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $allowed_tags = wp_kses_allowed_html('post');
        $authors = get_users();
?>
        <?php get_template_part('template/breadcrumbs'); ?>

        <section class="tacgia mt-[1.5625rem] sm:mt-[2.5rem]">
            <div class="container">
                <div class="mt-[1.25rem] sm:mt-[2.5rem] tacgia-container">
                    <div>
                        <h1 class="text-center ">
                            <?php echo $settings['title']; ?>
                        </h1>
                    </div>
                    <div class="tacgia-items mt-[1rem] sm:mt-[1.25rem] grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                        <?php foreach ($authors as $author) { ?>
                            <div class="p-[1rem] gap-y-[1rem] tacgia-item">
                                <div class="img-tacgia-items shrink-0">
                                    <a href="<?php echo get_author_posts_url($author->ID); ?>" title="<?php echo get_author_full_name($author->ID); ?>" class="c-img rounded-[0.625rem] overflow-hidden block img__ pt-[64%]">
                                        <img src="<?php echo get_avatar_url($author->ID); ?>" alt="<?php echo get_author_full_name($author->ID); ?>">
                                    </a>
                                </div>
                                <div class="text-center">
                                    <a href="<?php echo get_author_posts_url($author->ID); ?>" title="<?php echo get_author_full_name($author->ID); ?>" class="name-tacgia">
                                        <?php echo get_author_full_name($author->ID); ?>
                                    </a>
                                    <p class="level-name-tacgia">
                                        <?php echo esc_html(get_the_author_meta('position', $author->ID)); ?>
                                    </p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
<?php
    }
}

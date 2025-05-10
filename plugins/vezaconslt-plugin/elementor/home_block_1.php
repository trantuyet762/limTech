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

class Home_Block_1 extends Widget_Base
{
    public function get_name()
    {
        return 'vezaconslt_home_block_1';
    }
    public function get_title()
    {
        return esc_html__('Khối 1', 'vezaconslt');
    }
    public function get_icon()
    {
        return 'eicon-form-horizontal';
    }
    public function get_categories()
    {
        return ['vezaconslt_home'];
    }
    protected function _register_controls()
    {
        $this->start_controls_section(
            'home_block_1_start',
            [
                'label' => esc_html__('Khối 1', 'vezaconslt'),
            ]
        );
        $this->add_control(
            'image',
            [
                'label' => esc_html__('Ảnh', 'vezaconslt'),
                'type' => Controls_Manager::MEDIA,
                'default' => ['url' => Utils::get_placeholder_image_src(),],
            ]
        );
        $this->add_control(
            'solgan',
            [
                'label' => esc_html__('Slogan', 'vezaconslt'),
                'type' => Controls_Manager::TEXT,
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
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 6,
        );
        $posts = get_posts($args);
        $list_posts_1 = array_slice($posts, 0, 1); // 1 item
        $list_posts_2 = array_slice($posts, 1, 2); // 2 item
        $list_posts_3 = array_slice($posts, 3, 3); // 3 item
?>
        <section class="pt-4 pb-7 md:pt-7 lg:py-10">
            <div class="container">
                <div class="flex flex-wrap -mx-2.5 gap-y-5">
                    <div class="w-full lg:w-3/4 px-2.5">
                        <div class="flex flex-wrap -mx-2.5 gap-y-5 mb-5">
                            <div class="w-full md:w-2/3 px-2.5">
                                <div class="flex flex-col h-full">
                                    <a href="<?php echo get_the_permalink($list_posts_1[0]->ID); ?>" class="c-img pt-[55%] grow img__ mb-3 md:mb-4 block md:rounded-[5px] overflow-hidden max-sm:w-[calc(100%+2rem)] max-sm:-mx-4">
                                        <img src="<?php echo get_the_post_thumbnail_url($list_posts_1[0]->ID, 'large'); ?>" alt="<?php echo $list_posts_1[0]->post_title; ?>">
                                    </a>
                                    <h3 class="mb-3 md:mb-4">
                                        <a href="<?php echo get_the_permalink($list_posts_1[0]->ID); ?>" class="line-clamp-2 font-bold hover:text-cl-primary text-[1.25rem] xl:text-[1.5rem]" title="<?php echo $list_posts_1[0]->post_title; ?>">
                                            <?php echo $list_posts_1[0]->post_title; ?>
                                        </a>
                                    </h3>
                                    <div class="flex justify-between items-center text-[#2A6049] font-roboto mb-3 md:mb-4 max-md:text-[0.875rem]">
                                        <div>
                                            <a href="<?php echo get_category_link(get_the_category($list_posts_1[0]->ID)[0]->term_id); ?>" class=" font-semibold">
                                                <?php echo get_the_category($list_posts_1[0]->ID)[0]->name; ?>
                                            </a>
                                        </div>
                                        <div class="flex items-center gap-x-0.5">
                                            <span class="w-[20px] -translate-y-[2px]">
                                                <?php include 'template/svgs/date.php'; ?>
                                            </span>
                                            <span class="">
                                                <?php echo vezaconslt_time_ago($list_posts_1[0]->ID); ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="s-content line-clamp-3 font-roboto text-[0.875rem] opacity-80">
                                        <?php echo wp_trim_words($list_posts_1[0]->post_excerpt); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/3 px-2.5">
                                <?php foreach ($list_posts_2 as $post): ?>
                                    <div class="mb-4 last:mb-0 max-md:border-b max-md:border-[#262626]/20 max-md:pb-5">
                                        <a href="<?php echo get_the_permalink($post->ID); ?>" class="c-img pt-[54.5%] img__ mb-3 block rounded-[5px] overflow-hidden">
                                            <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'medium'); ?>" alt="<?php echo $post->post_title; ?>">
                                        </a>
                                        <h3 class="mb-1">
                                            <a href="" class="line-clamp-2 font-bold hover:text-cl-primary" title="Cách Nấu Cháo Chim Bồ Câu Thơm Ngon Bổ Dưỡng">
                                                Cách Nấu Cháo Chim Bồ Câu Thơm Ngon Bổ Dưỡng
                                            </a>
                                        </h3>
                                        <div class="flex justify-between items-center text-[#2A6049] font-roboto">
                                            <div>
                                                <a href="<?php echo get_category_link(get_the_category($post->ID)[0]->term_id); ?>" class="text-[0.875rem] font-semibold">
                                                    <?php echo get_the_category($post->ID)[0]->name; ?>
                                                </a>
                                            </div>
                                            <div class="flex items-center gap-x-0.5">
                                                <span class="w-[14px] -translate-y-[1px]">
                                                    <?php include 'template/svgs/date.php'; ?>
                                                </span>
                                                <span class="text-[0.75rem]">
                                                    <?php echo vezaconslt_time_ago($post->ID); ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-2.5 gap-y-5">
                            <?php foreach ($list_posts_3 as $post): ?>
                                <div class="w-full md:w-1/3 px-2.5">
                                    <div class="max-md:border-b flex flex-col max-md:border-[#262626]/20 max-md:pb-5">
                                        <a href="<?php echo get_the_permalink($post->ID); ?>" class="c-img pt-[61%] img__ mb-3 block rounded-[5px] overflow-hidden order-1">
                                            <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'medium'); ?>" alt="<?php echo $post->post_title; ?>">
                                        </a>
                                        <div class="flex justify-between items-center text-[#2A6049] font-roboto md:mb-2 order-3 md:order-2">
                                            <div>
                                                <a href="<?php echo get_category_link(get_the_category($post->ID)[0]->term_id); ?>" class="text-[0.875rem] font-semibold">
                                                    <?php echo get_the_category($post->ID)[0]->name; ?>
                                                </a>
                                            </div>
                                            <div class="flex items-center gap-x-0.5">
                                                <span class="w-[14px] -translate-y-[1px]">
                                                    <?php include 'template/svgs/date.php'; ?>
                                                </span>
                                                <span class="text-[0.75rem]">
                                                    <?php echo vezaconslt_time_ago($post->ID); ?>
                                                </span>
                                            </div>
                                        </div>
                                        <h3 class="order-2 md:order-3 max-md:mb-2">
                                            <a href="<?php echo get_the_permalink($post->ID); ?>" class="line-clamp-2 font-bold hover:text-cl-primary" title="<?php echo $post->post_title; ?>">
                                                <?php echo $post->post_title; ?>
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/4 px-2.5">
                        <div class="rounded-[5px] bg-cover bg-center bg-no-repeat pb-60 h-full" style="background-image: url('<?php echo esc_url($settings['image']['url']); ?>');">
                            <div class="py-4 px-5 border-b-[3px] border-[#fe3] rounded-[5px] bg-cl-secondary">
                                <p class="font-bold text-white text-center">
                                    <?php echo esc_html($settings['solgan']); ?>
                                </p>
                                <div class="max-w-[236px] mx-auto img__contain">
                                    <img src="<?php echo mb_image('logo_header'); ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
    }
}

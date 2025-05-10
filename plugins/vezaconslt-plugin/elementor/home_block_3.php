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

class Home_Block_3 extends Widget_Base
{
    public function get_name()
    {
        return 'vezaconslt_home_block_3';
    }

    public function get_title()
    {
        return esc_html__('Khối 3', 'vezaconslt');
    }

    public function get_icon()
    {
        return 'eicon-form-horizontal';
    }

    public function get_categories()
    {
        return ['vezaconslt_home'];
    }

    private function get_categories_options($parent_id = 0)
    {
        $categories = get_categories(['parent' => $parent_id]);
        $options = [];

        foreach ($categories as $category) {
            $options[$category->term_id] = $category->name;
        }

        return $options;
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'home_block_3_start',
            [
                'label' => esc_html__('Khối 3', 'vezaconslt'),
            ]
        );
        $this->add_control(
            'category',
            [
                'label' => esc_html__('Chọn danh mục', 'vezaconslt'),
                'type' => Controls_Manager::SELECT,
                'options' => $this->get_categories_options(),
                'default' => '', // Thay thế bằng ID danh mục mặc định nếu có
            ]
        );
        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $allowed_tags = wp_kses_allowed_html('post');
        $category = get_category($settings['category']);
        $children = get_categories(array('parent' => $settings['category']));
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 8,
            'category__in' => $settings['category'],
        );
        $posts = get_posts($args);
?>
        <section class="pt-4 pb-7 md:pb-10">
            <div class="container">
                <div class="flex flex-wrap -mx-2.5 gap-y-5">
                    <div class="w-full lg:w-3/4 px-2.5">
                        <div class="flex justify-between items-center mb-5">
                            <h2 class="text-[1.5rem] w-[130px] lg:w-[180px] lg:text-[2rem] font-bold line-head relative before:bg-cl-secondary after:bg-[#F5FF6C] pl-3 shrink-0">
                                <?php echo esc_html($category->name); ?>
                            </h2>
                            <div class="swiper-list-cat-news w-[calc(100%-150px)] lg:w-[calc(100%-200px)] px-8 relative">
                                <div class="swiper text-[0.75rem] md:text-[0.875rem] lg:text-[1rem]">
                                    <div class="swiper-wrapper">
                                        <?php foreach ($children as $child): ?>
                                            <div class="swiper-slide !w-fit">
                                                <a href="<?php echo get_category_link($child->term_id); ?>" class="hover:text-cl-primary">
                                                    <?php echo esc_html($child->name); ?>
                                                </a>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <div class="btn-next-cat-news absolute top-1/2 -translate-y-1/2 right-0">
                                    <span class="size-7 flex justify-center items-center">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </div>
                                <div class="btn-prev-cat-news absolute top-1/2 -translate-y-1/2 left-0">
                                    <span class="size-7 flex justify-center items-center">
                                        <i class="fa-solid fa-angle-left"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <?php foreach (array_slice($posts, 0, 5) as $post): ?>
                            <div class="flex max-md:flex-col gap-4 md:gap-5 pb-5 mb-5 border-b border-[#262626]/20 last:mb-0 last:pb-0 last:border-none">
                                <div class="md:w-[288px] shrink-0">
                                    <a href="<?php echo get_the_permalink($post->ID); ?>" class="c-img pt-[66.3%] rounded-[5px] overflow-hidden block img__">
                                        <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'medium'); ?>" alt="">
                                    </a>
                                </div>
                                <div class="space-y-3 md:space-y-4">
                                    <h3 class="">
                                        <a href="<?php echo get_the_permalink($post->ID); ?>" class="line-clamp-2 text-black hover:text-cl-primary lg:text-[1.25rem] font-bold">
                                            <?php echo $post->post_title; ?>
                                        </a>
                                    </h3>
                                    <div class="flex max-md:justify-between text-cl-secondary gap-x-10 md:gap-x-12 lg:gap-x-[3.75rem] font-roboto">
                                        <h5>
                                            <a href="<?php echo get_category_link($post->ID); ?>" class="font-semibold hover:text-cl-primary text-[0.875rem] md:text-[1rem]">
                                                <?php echo $post->name; ?>
                                            </a>
                                        </h5>
                                        <div class="flex items-center">
                                            <span class="w-[14px] md:w-5 mr-1 -translate-y-[1px]">
                                                <?php include 'template/svgs/date.php'; ?>
                                            </span>
                                            <span class="text-[0.75rem] md:text-[1rem]">
                                                <?php echo vezaconslt_time_ago($post->ID); ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="s-content line-clamp-2 font-roboto opacity-80">
                                        <?php echo $post->post_excerpt; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="w-full lg:w-1/4 px-2.5">
                        <p class="text-[1.5rem] font-bold line-head relative before:bg-cl-secondary after:bg-[#F5FF6C] pl-3 mb-5">
                            Bạn cần biết
                        </p>
                        <?php foreach (array_slice($posts, 5, 3) as $post): ?>
                            <div class="mb-4 last:mb-0 pb-4 last:pb-0 border-b md:border-none md:pb-0 border-[#262626]/20 last:border-none">
                                <a href="<?php echo get_the_permalink($post->ID); ?>" class="c-img mb-3 pt-[59%] img__ block rounded-[5px] overflow-hidden">
                                    <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'medium'); ?>" alt="">
                                </a>
                                <h3 class="mb-2 md:mb-3">
                                    <a href="<?php echo get_the_permalink($post->ID); ?>" class="line-clamp-3 font-bold hover:text-cl-primary text-[1rem] lg:text-[1.25rem]" title="<?php echo $post->post_title; ?>">
                                        <?php echo $post->post_title; ?>
                                    </a>
                                </h3>
                                <div class="flex justify-between items-center text-cl-secondary font-roboto mb-2">
                                    <div>
                                        <a href="<?php echo get_category_link($post->ID); ?>" class="font-semibold">
                                            <?php echo $post->name; ?>
                                        </a>
                                    </div>
                                    <div class="flex items-center gap-x-0.5">
                                        <span class="w-[14px] md:w-5 mr-1 -translate-y-[1px]">
                                            <?php include 'template/svgs/date.php'; ?>
                                        </span>
                                        <span class="text-[0.75rem] md:text-[1rem]">
                                            <?php echo vezaconslt_time_ago($post->ID); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="s-content line-clamp-2 font-roboto text-[0.875rem] lg:text-[1rem] opacity-70">
                                    <?php echo $post->post_excerpt; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
<?php
    }
}

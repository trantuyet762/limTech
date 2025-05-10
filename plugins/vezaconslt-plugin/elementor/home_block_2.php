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

class Home_Block_2 extends Widget_Base
{
    public function get_name()
    {
        return 'vezaconslt_home_block_2';
    }

    public function get_title()
    {
        return esc_html__('Khối 2', 'vezaconslt');
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
            'home_block_2_start',
            [
                'label' => esc_html__('Khối 2', 'vezaconslt'),
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
        <section class="bg-cl-secondary pt-10 pb-[3.75rem] mt-4 mb-7 md:mb-10 text-white">
            <div class="container">
                <div class="flex flex-wrap -mx-2.5 gap-y-5">
                    <div class="w-full lg:w-3/4 px-2.5">
                        <div class="flex justify-between items-center mb-5">
                            <h2 class="text-[1.5rem] w-[130px] lg:w-[180px] lg:text-[2rem] font-bold line-head relative before:bg-white after:bg-white text-white pl-3 shrink-0">
                                <?php echo $category->name; ?>
                            </h2>
                            <div class="swiper-list-cat-news w-[calc(100%-150px)] lg:w-[calc(100%-200px)] px-8 relative">
                                <div class="swiper text-[0.75rem] md:text-[0.875rem] lg:text-[1rem]">
                                    <div class="swiper-wrapper">
                                        <?php foreach ($children as $child): ?>
                                            <div class="swiper-slide !w-fit">
                                                <a href="<?php echo $child->slug; ?>" class="hover:text-cl-primary">
                                                    <?php echo $child->name; ?>
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
                        <div class="lg:border-r lg:border-white/20 lg:pr-5">
                            <div class="flex flex-wrap -mx-2.5 gap-y-5 mb-5">
                                <div class="w-full md:w-2/3 px-2.5">
                                    <a href="<?php echo get_the_permalink($posts[0]->ID); ?>" class="c-img pt-[65%] grow img__ block md:rounded-[5px] overflow-hidden max-sm:w-[calc(100%+2rem)] max-sm:-mx-4">
                                        <img src="<?php echo get_the_post_thumbnail_url($posts[0]->ID, 'large'); ?>" alt="">
                                    </a>
                                </div>
                                <div class="w-full md:w-1/3 px-2.5">
                                    <h3 class="mb-4">
                                        <a href="<?php echo get_the_permalink($posts[0]->ID); ?>" class="line-clamp-3 font-bold hover:text-cl-primary text-[1.25rem] md:text-[1.5rem]" title="<?php echo $posts[0]->post_title; ?>">
                                            <?php echo $posts[0]->post_title; ?>
                                        </a>
                                    </h3>
                                    <div class="s-content line-clamp-3 text-[0.875rem] font-roboto">
                                        <?php echo $posts[0]->post_excerpt; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-2.5 gap-y-5">
                                <?php foreach (array_slice($posts, 1, 4) as $post): ?>
                                    <div class="w-full md:w-1/2 lg:w-1/4 px-2.5">
                                        <div class="flex md:flex-col">
                                            <div class="w-[143px] max-md:mr-3 shrink-0 md:w-full">
                                                <a href="<?php echo get_the_permalink($post->ID); ?>" class="c-img pt-[63.7%] md:pt-[62%] img__ md:mb-4 block rounded-[5px] overflow-hidden">
                                                    <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'medium'); ?>" alt="">
                                                </a>
                                            </div>
                                            <div class="flex flex-col gap-4">
                                                <div class="flex justify-between items-center font-roboto opacity-70 text-[0.75rem] md:text-[0.875rem] lg:text-[1rem]">
                                                    <div>
                                                        <a href="<?php echo $category->slug; ?>" class=" font-semibold">
                                                            <?php echo $category->name; ?>
                                                        </a>
                                                    </div>
                                                    <div class="flex items-center gap-x-0.5">
                                                        <span class="w-[16px] md:w-[20px] -translate-y-[1px] cs-stroke-whit">
                                                            <?php include 'template/svgs/date.php'; ?>
                                                        </span>
                                                        <span class="">
                                                            <?php echo vezaconslt_time_ago($post->ID); ?>
                                                        </span>
                                                    </div>
                                                </div>
                                                <h3 class="max-md:-order-1">
                                                    <a href="<?php echo get_the_permalink($post->ID); ?>" class="line-clamp-2 font-bold hover:text-cl-primary" title="<?php echo $post->post_title; ?>">
                                                        <?php echo $post->post_title; ?>
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/4 px-2.5">
                        <p class="text-[1.5rem] font-bold line-head relative before:bg-white after:bg-white text-white pl-3 mb-5">
                            Tin liên quan
                        </p>
                        <?php foreach (array_slice($posts, 5, 3) as $key => $post): ?>
                            <?php if ($key == 0): ?>
                                <div class="mb-3 last:mb-0 pb-3 flex md:flex-col last:pb-0 border-b border-white/20 last:border-none">
                                    <div class="w-[143px] max-md:mr-3 shrink-0 md:w-full">
                                        <a href="<?php echo get_the_permalink($post->ID); ?>" class="c-img pt-[78%] md:pt-[66.25%] grow img__ block rounded-[5px] h-full md:mb-4 overflow-hidden">
                                            <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'medium'); ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="w-full">
                                        <h3 class="mb-2 md:mb-3">
                                            <a href="<?php echo get_the_permalink($post->ID); ?>" class="line-clamp-3 font-bold hover:text-cl-primary text-[1rem] lg:text-[1.25rem]" title="<?php echo $post->post_title; ?>">
                                                <?php echo $post->post_title; ?>
                                            </a>
                                        </h3>
                                        <div class="s-content line-clamp-2 font-roboto text-[0.875rem] lg:text-[1rem]">
                                            <?php echo $post->post_excerpt; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="mb-3 last:mb-0 pb-3 last:pb-0 border-b border-white/20 last:border-none">
                                    <h3 class="mb-3">
                                        <a href="<?php echo get_the_permalink($post->ID); ?>" class="line-clamp-3 font-bold hover:text-cl-primary text-[0.875rem] md:text-[1.125rem] lg:text-[1.25rem]" title="<?php echo $post->post_title; ?>">
                                            <?php echo $post->post_title; ?>
                                        </a>
                                    </h3>
                                    <div class="s-content line-clamp-2 font-roboto text-[0.875rem] lg:text-[1rem]">
                                        <?php echo $post->post_excerpt; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
<?php
    }
}

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

class Home_Block_4 extends Widget_Base
{
    public function get_name()
    {
        return 'vezaconslt_home_block_4';
    }

    public function get_title()
    {
        return esc_html__('Khối 4', 'vezaconslt');
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
            'home_block_4_start',
            [
                'label' => esc_html__('Khối 4', 'vezaconslt'),
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
        $this->add_control(
            'image',
            [
                'label' => esc_html__('Ảnh', 'vezaconslt'),
                'type' => Controls_Manager::MEDIA,
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
            'posts_per_page' => 3,
            'category__in' => $settings['category'],
        );
        $posts = get_posts($args);
?>
        <section class="pb-7 md:pb-10">
            <div class="container">
                <div class="flex justify-between items-center border-t border-[#262626]/80 py-5">
                    <h2 class="text-[1.5rem] lg:text-[2rem] font-bold line-head relative before:bg-cl-secondary after:bg-[#F5FF6C] pl-3 shrink-0">
                        <?php echo $category->name; ?>
                    </h2>
                    <div class="swiper-list-cat-news w-[calc(100%-150px)] lg:w-[calc(80%-200px)] px-8 relative">
                        <div class="swiper text-[0.75rem] md:text-[0.875rem] lg:text-[1rem]">
                            <div class="swiper-wrapper">
                                <?php foreach ($children as $child): ?>
                                    <div class="swiper-slide !w-fit">
                                        <a href="<?php echo get_category_link($child->term_id); ?>" class="hover:text-cl-primary">
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
                <div class="flex flex-wrap -mx-2.5 gap-y-5">
                    <div class="w-full lg:w-3/4 px-2.5">
                        <div class="flex flex-wrap -mx-2.5 gap-y-5">
                            <div class="w-full md:w-2/3 px-2.5">
                                <div class="flex flex-col h-full">
                                    <a href="<?php echo get_the_permalink($posts[0]->ID); ?>" class="c-img pt-[55%] grow img__ mb-3 md:mb-4 block md:rounded-[5px] overflow-hidden max-sm:w-[calc(100%+2rem)] max-sm:-mx-4">
                                        <img src="<?php echo get_the_post_thumbnail_url($posts[0]->ID, 'medium'); ?>" alt="">
                                    </a>
                                    <h3 class="mb-3 md:mb-4">
                                        <a href="<?php echo get_the_permalink($posts[0]->ID); ?>" class="line-clamp-2 font-bold hover:text-cl-primary text-[1.25rem] xl:text-[1.5rem]" title="<?php echo $posts[0]->post_title; ?>">
                                            <?php echo $posts[0]->post_title; ?>
                                        </a>
                                    </h3>
                                    <div class="flex justify-between items-center text-[#2A6049] font-roboto mb-3 md:mb-4 max-md:text-[0.875rem]">
                                        <div>
                                            <a href="<?php echo get_category_link($posts[0]->ID); ?>" class=" font-semibold">
                                                <?php echo $posts[0]->name; ?>
                                            </a>
                                        </div>
                                        <div class="flex items-center gap-x-0.5">
                                            <span class="w-[20px] -translate-y-[2px]">
                                                <?php include 'template/svgs/date.php'; ?>
                                            </span>
                                            <span class="">
                                                <?php echo vezaconslt_time_ago($posts[0]->ID); ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="s-content line-clamp-3 font-roboto text-[0.875rem] opacity-80">
                                        <?php echo $posts[0]->post_excerpt; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/3 px-2.5">
                                <?php foreach (array_slice($posts, 1, 2) as $post): ?>
                                    <div class="mb-4 last:mb-0 max-md:border-b max-md:border-[#262626]/20 max-md:pb-5">
                                        <a href="<?php echo get_the_permalink($post->ID); ?>" class="c-img pt-[54.5%] img__ mb-3 block rounded-[5px] overflow-hidden">
                                            <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'medium'); ?>" alt="">
                                        </a>
                                        <h3 class="mb-1">
                                            <a href="<?php echo get_the_permalink($post->ID); ?>" class="line-clamp-2 font-bold hover:text-cl-primary" title="<?php echo $post->post_title; ?>">
                                                <?php echo $post->post_title; ?>
                                            </a>
                                        </h3>
                                        <div class="flex justify-between items-center text-[#2A6049] font-roboto">
                                            <div>
                                                <a href="<?php echo get_category_link($post->ID); ?>" class="text-[0.875rem] font-semibold">
                                                    <?php echo $post->name; ?>
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
                    </div>
                    <div class="w-full lg:w-1/4 px-2.5">
                        <div class="rounded-[5px] bg-cover bg-center bg-no-repeat pb-60 h-full" style="background-image: url('<?php echo esc_url($settings['image']['url']); ?>');">
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
    }
}

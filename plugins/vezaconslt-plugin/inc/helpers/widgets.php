<?php
///----Blog widgets---
//Recent News
class Vezaconslt_Recent_Posts extends WP_Widget
{
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'Vezaconslt_Recent_Posts', /* Name */esc_html__('Vezaconslt Recent Posts','vezaconslt'), array( 'description' => esc_html__('Show the Recent Posts in blog sidebar.', 'vezaconslt' )) );
	}
 
	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		echo wp_kses_post($before_widget); ?>
		
		<div class="post-widget">
            <?php echo wp_kses_post($before_title.$title.$after_title); ?>
            <div class="post-inner">
                <?php $query_string = 'posts_per_page='.$instance['number'];
				if( $instance['cat'] ) $query_string .= '&cat='.$instance['cat'];
				$this->posts($query_string); ?>
            </div>
        </div>
        
		<?php echo wp_kses_post($after_widget);
	}
 
 
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number'] = $new_instance['number'];
		$instance['cat'] = $new_instance['cat'];
		
		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ( $instance ) ? esc_attr($instance['title']) : __('Recent Posts', 'vezaconslt');
		$number = ( $instance ) ? esc_attr($instance['number']) : 3;
		$cat = ( $instance ) ? esc_attr($instance['cat']) : '';?>
			
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title: ', 'vezaconslt'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e('No. of Posts:', 'vezaconslt'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr( $number ); ?>" />
        </p>
       
    	<p>
            <label for="<?php echo esc_attr($this->get_field_id('categories')); ?>"><?php esc_html_e('Category', 'vezaconslt'); ?></label>
            <?php wp_dropdown_categories( array('show_option_all'=>esc_html__('All Categories', 'vezaconslt'), 'selected'=>$cat, 'class'=>'widefat', 'name'=>$this->get_field_name('categories')) ); ?>
        </p>
            
		<?php 
	}
	
	function posts($query_string)
	{
		
		$query = new WP_Query($query_string);
		if( $query->have_posts() ):?>
        
           	<!-- Title -->
			<?php 
				global $post;
				while( $query->have_posts() ): $query->the_post();
			?>
			<div class="post">
                <figure class="post-thumb"><a href="<?php echo esc_url(get_the_permalink(get_the_id())); ?>"><?php the_post_thumbnail('vezaconslt_70x70'); ?></a></figure>
                <span class="post-date"><?php esc_html_e('By', 'vezaconslt');  ?> <?php the_author(); ?></span>
                <h6><a href="<?php echo esc_url(get_the_permalink(get_the_id())); ?>"><?php the_title(); ?></a></h6>
            </div>
            <?php endwhile; ?>
            
        <?php endif;
		wp_reset_postdata();
    }
}

///----Footer widgets---
//About Company
class Vezaconslt_About_Company extends WP_Widget
{
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'Vezaconslt_About_Company', /* Name */esc_html__('Vezaconslt About Company','vezaconslt'), array( 'description' => esc_html__('Show the About Company.', 'vezaconslt' )) );
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		echo wp_kses_post($before_widget);?>

		<div class="about-widget">
            <?php echo wp_kses_post($before_title.$title.$after_title); ?>
            <div class="widget-content">
                <p><?php echo wp_kses_post($instance['content']); ?></p>
                
                <?php if( $instance['show'] ): ?>
                <?php echo wp_kses_post(vezaconslt_get_social_icons2()); ?>
                <?php endif; ?>
            </div>
        </div>
        
        <?php

		echo wp_kses_post($after_widget);
	}


	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;

		$instance['title'] = strip_tags($new_instance['title']);
		$instance['content'] = $new_instance['content'];
		$instance['show'] = $new_instance['show'];

		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ( $instance ) ? esc_attr($instance['title']) : __('About', 'vezaconslt');
		$content = ($instance) ? esc_attr($instance['content']) : '';
		$show = ($instance) ? esc_attr($instance['show']) : '';
		?>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title: ', 'vezaconslt'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('content')); ?>"><?php esc_html_e('Content:', 'vezaconslt'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('content')); ?>" name="<?php echo esc_attr($this->get_field_name('content')); ?>" ><?php echo wp_kses_post($content); ?></textarea>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('show')); ?>"><?php esc_html_e('Show Social Icons:', 'vezaconslt'); ?></label>
			<?php $selected = ( $show ) ? ' checked="checked"' : ''; ?>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('show')); ?>"<?php echo esc_attr($selected); ?> name="<?php echo esc_attr($this->get_field_name('show')); ?>" type="checkbox" value="true" />
        </p>

		<?php
	}

}

//Subscribe Newsletter
class Vezaconslt_Newsletter extends WP_Widget
{
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'Vezaconslt_Newsletter', /* Name */esc_html__('Vezaconslt Newsletter','vezaconslt'), array( 'description' => esc_html__('Show the Newsletter in blog sidebar', 'vezaconslt' )) );
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		echo wp_kses_post($before_widget);?>
      	
        <div class="newsletter-widget">
            <?php echo wp_kses_post($before_title.$title.$after_title); ?>
            <div class="widget-content">
            	<p><?php echo wp_kses_post($instance['content']); ?></p>
                <form action="http://feedburner.google.com/fb/a/mailverify" accept-charset="utf-8">
                    <div class="form-group">
                    	<input type="hidden" id="uri8" name="uri" value="<?php echo esc_attr($instance['id']); ?>">
                        <input type="email" name="email" placeholder="<?php esc_attr_e('Email address', 'vezaconslt'); ?>">
                        <button type="submit"><i class="fas fa-paper-plane"></i></button>
                    </div>
                </form>
            </div>
        </div>
        
		<?php
		
		echo wp_kses_post($after_widget);
	}
	
	
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;

		$instance['title'] = strip_tags($new_instance['title']);
		$instance['content'] = strip_tags($new_instance['content']);
		$instance['id'] = $new_instance['id'];
		
		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ($instance) ? esc_attr($instance['title']) : __('Newsletter', 'vezaconslt');
		$content = ($instance) ? esc_attr($instance['content']) : '';
		$id = ($instance) ? esc_attr($instance['id']) : '#';
		
		?>
        
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'vezaconslt'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('content')); ?>"><?php esc_html_e('Content:', 'vezaconslt'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('content')); ?>" name="<?php echo esc_attr($this->get_field_name('content')); ?>" ><?php echo wp_kses_post($content); ?></textarea>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('id')); ?>"><?php esc_html_e('Enter FeedBurner ID:', 'vezaconslt'); ?></label>
            <input placeholder="<?php esc_attr_e('themeforest', 'vezaconslt');?>" class="widefat" id="<?php echo esc_attr($this->get_field_id('id')); ?>" name="<?php echo esc_attr($this->get_field_name('id')); ?>" type="text" value="<?php echo esc_attr($id); ?>" />
        </p>
        
		<?php 
	}
	
}

///----Coaching widgets---
//Download Brochure
class Vezaconslt_Download_Brouchers extends WP_Widget
{
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'Vezaconslt_Download_Brouchers', /* Name */esc_html__('Vezaconslt Download Brouchers V1','vezaconslt'), array( 'description' => esc_html__('Show the Download Brouchers services sidebar.', 'vezaconslt' )) );
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		
		echo wp_kses_post($before_widget); ?>
		
		<div class="download-widget p_relative d_block theme-color-bg b_radius_10 pt_40 pr_30 pb_45 pl_50 mb_30">
            <h4 class="d_block fs_20 lh_30 color-white mb_20"><?php echo wp_kses_post($instance['title']); ?></h4>
            <ul class="download-list clearfix">
                <li class="p_relative d_block pl_75 pt_2 pb_5 mb_30">
                    <a href="<?php echo esc_url($instance['visa_url']); ?>">
                        <div class="icon-box p_absolute l_0 t_0 w_60 h_60 lh_70 fs_25 centred b_radius_50 color-white"><i class="flaticon-pdf"></i></div>
                        <h5 class="fs_18 lh_30 fw_sbold color-white mb_3"><?php echo wp_kses_post($instance['visa_title']); ?></h5>
                        <span class="d_block fs_12 fw_medium color-white lh_20"><?php echo wp_kses_post($instance['visa_date']); ?></span>
                    </a>
                </li>
                <li class="p_relative d_block pl_75 pt_2 pb_5">
                    <a href="<?php echo esc_url($instance['immigration_url']); ?>">
                        <div class="icon-box p_absolute l_0 t_0 w_60 h_60 lh_70 fs_25 centred b_radius_50 color-white"><i class="flaticon-pdf"></i></div>
                        <h5 class="fs_18 lh_30 fw_sbold color-white mb_3"><?php echo wp_kses_post($instance['immigration_title']); ?></h5>
                        <span class="d_block fs_12 fw_medium color-white lh_20"><?php echo wp_kses_post($instance['immigration_date']); ?></span>
                    </a>
                </li>
            </ul>
        </div>
        
        <?php
		
		echo wp_kses_post($after_widget);
	}
	
	
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['title'] = $new_instance['title'];
		$instance['visa_title'] = $new_instance['visa_title'];
		$instance['visa_url'] = $new_instance['visa_url'];
		$instance['visa_date'] = $new_instance['visa_date'];
		$instance['immigration_title'] = $new_instance['immigration_title'];
		$instance['immigration_url'] = $new_instance['immigration_url'];
		$instance['immigration_date'] = $new_instance['immigration_date'];
		
		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ($instance) ? esc_attr($instance['title']) : __('Related Downloads', 'vezaconslt');
		$visa_title = ($instance) ? esc_attr($instance['visa_title']) : '';
		$visa_url = ($instance) ? esc_attr($instance['visa_url']) : '';
		$visa_date = ($instance) ? esc_attr($instance['visa_date']) : '';
		$immigration_title = ($instance) ? esc_attr($instance['immigration_title']) : '';
		$immigration_url = ($instance) ? esc_attr($instance['immigration_url']) : '';
		$immigration_date = ($instance) ? esc_attr($instance['immigration_date']) : '';
		?>
        
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'vezaconslt'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('visa_title')); ?>"><?php esc_html_e('Visa Title:', 'vezaconslt'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('visa_title')); ?>" name="<?php echo esc_attr($this->get_field_name('visa_title')); ?>" type="text" value="<?php echo esc_attr($visa_title); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('visa_url')); ?>"><?php esc_html_e('Visa URL:', 'vezaconslt'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('visa_url')); ?>" name="<?php echo esc_attr($this->get_field_name('visa_url')); ?>" type="text" value="<?php echo esc_attr($visa_url); ?>" />
        </p>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('visa_date')); ?>"><?php esc_html_e('Visa Date:', 'vezaconslt'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('visa_date')); ?>" name="<?php echo esc_attr($this->get_field_name('visa_date')); ?>" type="text" value="<?php echo esc_attr($visa_date); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('immigration_title')); ?>"><?php esc_html_e('Immigration Title:', 'vezaconslt'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('immigration_title')); ?>" name="<?php echo esc_attr($this->get_field_name('immigration_title')); ?>" type="text" value="<?php echo esc_attr($immigration_title); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('immigration_url')); ?>"><?php esc_html_e('Immigration URL:', 'vezaconslt'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('immigration_url')); ?>" name="<?php echo esc_attr($this->get_field_name('immigration_url')); ?>" type="text" value="<?php echo esc_attr($immigration_url); ?>" />
        </p>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('immigration_date')); ?>"><?php esc_html_e('Immigration Date:', 'vezaconslt'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('immigration_date')); ?>" name="<?php echo esc_attr($this->get_field_name('immigration_date')); ?>" type="text" value="<?php echo esc_attr($immigration_date); ?>" />
        </p>

		<?php
	}
}

//Download Brochure
class Vezaconslt_Need_Help extends WP_Widget
{
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'Vezaconslt_Need_Help', /* Name */esc_html__('Vezaconslt Need Help','vezaconslt'), array( 'description' => esc_html__('Show the Need Help coaching sidebar.', 'vezaconslt' )) );
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		
		echo wp_kses_post($before_widget); ?>
		
		<div class="support-widget centred">
            <div class="inner-box p_relative d_block pt_45 pr_30 pb_45 pl_30 b_radius_10" style="background-image: url(<?php echo esc_url($instance['bg_image']); ?>);">
                <h4 class="d_block fs_20 lh_30 fw_bold color-white mb_30"><?php echo wp_kses_post($instance['title']); ?></h4>
                <p class="lh_30 mb_30"><?php echo wp_kses_post($instance['content']); ?></p>
                <h4 class="d_block fs_20 lh_30 fw_medium"><a href="tel:<?php echo esc_attr(phone_number($instance['phone_number'])); ?>" class="d_iblock theme-color"><?php echo wp_kses_post($instance['phone_number']); ?></a></h4>
            </div>
        </div>
        
        <?php
		
		echo wp_kses_post($after_widget);
	}
	
	
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['bg_image'] = $new_instance['bg_image'];
		$instance['title'] = $new_instance['title'];
		$instance['content'] = $new_instance['content'];
		$instance['phone_number'] = $new_instance['phone_number'];
		
		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$bg_image = ($instance) ? esc_attr($instance['bg_image']) : get_template_directory_uri().'/assets/images/resource/support-1.jpg';
		$title = ($instance) ? esc_attr($instance['title']) : __('Need Help?', 'vezaconslt');
		$content = ($instance) ? esc_attr($instance['content']) : '';
		$phone_number = ($instance) ? esc_attr($instance['phone_number']) : '';
		?>
        
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('bg_image')); ?>"><?php esc_html_e('Background Image URL:', 'vezaconslt'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('bg_image')); ?>" name="<?php echo esc_attr($this->get_field_name('bg_image')); ?>" type="text" value="<?php echo esc_attr($bg_image); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'vezaconslt'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('content')); ?>"><?php esc_html_e('Content:', 'vezaconslt'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('content')); ?>" name="<?php echo esc_attr($this->get_field_name('content')); ?>" ><?php echo wp_kses_post($content); ?></textarea>
        </p>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('phone_number')); ?>"><?php esc_html_e('Phone Number:', 'vezaconslt'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('phone_number')); ?>" name="<?php echo esc_attr($this->get_field_name('phone_number')); ?>" type="text" value="<?php echo esc_attr($phone_number); ?>" />
        </p>

		<?php
	}
}

///----Services widgets---
//Download Brochure
class Vezaconslt_Download_Brouchers_V2 extends WP_Widget
{
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'Vezaconslt_Download_Brouchers_V2', /* Name */esc_html__('Vezaconslt Download Brouchers V2','vezaconslt'), array( 'description' => esc_html__('Show the Download Brouchers services sidebar.', 'vezaconslt' )) );
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		echo wp_kses_post($before_widget); ?>
		
		<div class="sidebar-download">
            <?php echo wp_kses_post($before_title.$title.$after_title); ?>
            <div class="widget-content">
                <ul class="download-list clearfix">
                    <li>
                        <i class="flaticon-pdf"></i>
                        <h4><a href="<?php echo esc_url($instance['business_visa_url']); ?>"><?php echo wp_kses_post($instance['business_visa_title']); ?></a></h4>
                        <span><?php echo wp_kses_post($instance['business_visa_date']); ?></span>
                    </li>
                    <li>
                        <i class="flaticon-pdf"></i>
                        <h4><a href="<?php echo esc_url($instance['visa_application_url']); ?>"><?php echo wp_kses_post($instance['visa_application_title']); ?></a></h4>
                        <span><?php echo wp_kses_post($instance['visa_application_date']); ?></span>
                    </li>
                </ul>
            </div>
        </div>
        
        <?php
		
		echo wp_kses_post($after_widget);
	}
	
	
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['title'] = $new_instance['title'];
		$instance['business_visa_title'] = $new_instance['business_visa_title'];
		$instance['business_visa_url'] = $new_instance['business_visa_url'];
		$instance['business_visa_date'] = $new_instance['business_visa_date'];
		$instance['visa_application_title'] = $new_instance['visa_application_title'];
		$instance['visa_application_url'] = $new_instance['visa_application_url'];
		$instance['visa_application_date'] = $new_instance['visa_application_date'];
		
		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ($instance) ? esc_attr($instance['title']) : __('Related Downloads', 'vezaconslt');
		$business_visa_title = ($instance) ? esc_attr($instance['business_visa_title']) : '';
		$business_visa_url = ($instance) ? esc_attr($instance['business_visa_url']) : '';
		$business_visa_date = ($instance) ? esc_attr($instance['business_visa_date']) : '';
		$visa_application_title = ($instance) ? esc_attr($instance['visa_application_title']) : '';
		$visa_application_url = ($instance) ? esc_attr($instance['visa_application_url']) : '';
		$visa_application_date = ($instance) ? esc_attr($instance['visa_application_date']) : '';
		?>
        
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'vezaconslt'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('business_visa_title')); ?>"><?php esc_html_e('Business Visa Title:', 'vezaconslt'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('business_visa_title')); ?>" name="<?php echo esc_attr($this->get_field_name('business_visa_title')); ?>" type="text" value="<?php echo esc_attr($business_visa_title); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('business_visa_url')); ?>"><?php esc_html_e('Business Visa URL:', 'vezaconslt'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('business_visa_url')); ?>" name="<?php echo esc_attr($this->get_field_name('business_visa_url')); ?>" type="text" value="<?php echo esc_attr($business_visa_url); ?>" />
        </p>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('business_visa_date')); ?>"><?php esc_html_e('Business Visa Date:', 'vezaconslt'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('business_visa_date')); ?>" name="<?php echo esc_attr($this->get_field_name('business_visa_date')); ?>" type="text" value="<?php echo esc_attr($business_visa_date); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('visa_application_title')); ?>"><?php esc_html_e('Visa Application Title:', 'vezaconslt'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('visa_application_title')); ?>" name="<?php echo esc_attr($this->get_field_name('visa_application_title')); ?>" type="text" value="<?php echo esc_attr($visa_application_title); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('visa_application_url')); ?>"><?php esc_html_e('Visa Application URL:', 'vezaconslt'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('visa_application_url')); ?>" name="<?php echo esc_attr($this->get_field_name('visa_application_url')); ?>" type="text" value="<?php echo esc_attr($visa_application_url); ?>" />
        </p>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('visa_application_date')); ?>"><?php esc_html_e('Visa Application Date:', 'vezaconslt'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('visa_application_date')); ?>" name="<?php echo esc_attr($this->get_field_name('visa_application_date')); ?>" type="text" value="<?php echo esc_attr($visa_application_date); ?>" />
        </p>

		<?php
	}
}

//Download Brochure
class Vezaconslt_Free_Online_Assessment extends WP_Widget
{
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'Vezaconslt_Free_Online_Assessment', /* Name */esc_html__('Vezaconslt Free Online Assessment','vezaconslt'), array( 'description' => esc_html__('Show the Free Online Assessment services sidebar.', 'vezaconslt' )) );
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		echo wp_kses_post($before_widget); ?>
		
		<div class="sidebar-assessment">
            <?php echo wp_kses_post($before_title.$title.$after_title); ?>
            <div class="widget-content">
                <div class="assessment-form">
                	<?php echo do_shortcode($instance['cf7_shortocde']); ?>
                </div>
            </div>
        </div>
        
        <?php
		
		echo wp_kses_post($after_widget);
	}
	
	
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['title'] = $new_instance['title'];
		$instance['cf7_shortocde'] = $new_instance['cf7_shortocde'];
		
		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ($instance) ? esc_attr($instance['title']) : __('Free Online Assessment', 'vezaconslt');
		$cf7_shortocde = ($instance) ? esc_attr($instance['cf7_shortocde']) : '';
		?>
        
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'vezaconslt'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('cf7_shortocde')); ?>"><?php esc_html_e('Contact Form 7:', 'vezaconslt'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('cf7_shortocde')); ?>" name="<?php echo esc_attr($this->get_field_name('cf7_shortocde')); ?>"><?php echo wp_kses_post($cf7_shortocde); ?></textarea>
        </p>
        
        
		<?php
	}
}

<?php
/*
Plugin Name: Sidebar Image Banner Ads Widget
Plugin URI: http://skmukhiya.com.np/ads-image-banner-widget-plugin
Description: This Plugins helps to add image banners on the sidebar. Allows to enter title, description, image on the sidebar and is very easy to use.
Version: 1.0.2
Author: Suresh Kumar Mukhiya
Author URI: https://www.odesk.com/users/~0182e0779315e50896
Tags: Image banner widget, Image sidebar
*/

/**
* Plugins Basename is defined
*/
if (! defined('AIBWP_PLUGIN_BASENAME')) {
    define('AIBWP_PLUGIN_BASENAME', plugin_basename(__FILE__));
}
/**
* Plugins Base version is defined
*/
define('AIBWP_IBW_VERSION', '1.0.0');

if (! defined('AIBWP_PLUGIN_NAME')) {
    define('AIBWP_PLUGIN_NAME', trim(dirname(AIBWP_PLUGIN_BASENAME), '/'));
}

/**
* Adding admin stylesheets
*/
function ibw_admin_styles()
{
    wp_enqueue_style('thickbox');
}
/**
 * Ads Image Banner Widget Plugin Class
 */
if (!class_exists('aibwp_adsBannerWidget')) {
    class aibwp_adsBannerWidget extends WP_Widget
    {
        /** constructor */
        public function aibwp_adsBannerWidget()
        {
            $widget_ops = array('classname' => 'aibwp_banner_widget', 'description' => __('Adds image banner to the sidebar, title, description') );
            $this->WP_Widget('banner', __('Ads Image Banner Widget'), $widget_ops);
            $this->alt_option_name = 'widget_banner';

            if (is_admin()) {
                wp_enqueue_script('image-banner-scripts', WP_PLUGIN_URL . '/sidebar-image-banner-ads/js/admin.js', 'jQuery', '', true);
                wp_enqueue_style('image-banner-styles', WP_PLUGIN_URL . '/sidebar-image-banner-ads/admin_widget.css');
            }

            $this->widget_defaults = array(
                'url' => 'http://',
                'alt' => '',
                'title' => '',
                'link'    => 'http://',
                'image_title' => '',
                'text_description'=>'',
                'category' => 'aibwp-show-all-categories',
                'home' => 'on',
                'autofit' => 'on',
                'target' => '_self'
            );
            //This is link to Help Url
            $this->help_url = "http://skmukhiya.com.np/image-banner-widget/help/";
        }

        /** @see WP_Widget::widget */
        public function widget($args, $instance)
        {
            global $post;
            global $wpdb, $wp_locale, $wp_query;

            extract($args);
            $widget_options = wp_parse_args($instance, $this->widget_defaults);
            extract($widget_options, EXTR_SKIP);

            $cat1 = (is_home() && ($home == 'on'));
            $cat2 = ((is_category() || is_single() || is_page()) && $category == 'aibwp-show-all-categories');
            $cat3 = (is_home() && $category == 'aibwp-home-only');
            $cat4 = (is_single() && in_category($category, $post->ID));
            $cat5 = (is_category($category));
            $cat6 = is_page($category);

            if (get_category_by_slug($category)) {
                $exp = get_category_by_slug($category)->cat_name . " Category";
            } elseif ($category == "aibwp-home-only") {
                $exp = "Show on Homepage only";
            } elseif ($category == "aibwp-show-all-categories") {
                $exp = "Show on all categories";
            }

            if (is_numeric($category)) {
                $exp = get_the_title($category) . " (#".$category.")";
            }

            if ($cat1 || $cat2 || $cat3 || $cat4 || $cat5 || $cat6) {
                echo $before_widget; ?>

			<?php if ($title) {
                    echo $before_title . $title . $after_title;
                } ?>
			<!-- <?php echo AIBWP_IBW_VERSION; ?> on WP<?php bloginfo('version'); ?>-->
			<?php if ($link != "http://") {
                    ?>
			<a href="<?php echo $link; ?>" target="<?php echo $target ?>" ><?php
                } ?>
				<img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" title="<?php echo $image_title; ?>" class="banner-image" <?php if ($autofit=='on') {
                    echo 'width="100%"';
                } ?> /><?php if ($link != "http://") {
                    ?></a><?php
                } ?>
			<!-- /Ads Image Banner Widget Plugin -->
			<?php
            echo '<p id="text_description">';
                echo wp_kses_data($text_description);
                echo '</p>'; ?>

			<?php echo $after_widget;
            } else {
                if (current_user_can('administrator')) {
                    echo $before_widget;

                    if ($home == 'off') {
                        echo "Homepage view is <strong>disabled</strong> on <em>advanced settings</em>. ";
                    }

                    echo $after_widget;
                }
            }
        }

        /** @see WP_Widget::update */
        public function update($new_instance, $old_instance)
        {
            if ($new_instance['home'] == false) {
                $new_instance['home'] = 'off';
            }
            if ($new_instance['autofit'] == false) {
                $new_instance['autofit'] = 'off';
            }
            return $new_instance;
        }

        /** This function displays form on the widget Admin Area for required settings. */
        public function form($instance)
        {
            $widget_options = wp_parse_args($instance, $this->widget_defaults);
            extract($widget_options, EXTR_SKIP);

            $home = (bool) ('on'==$home);
            $autofit = (bool) ('on'==$autofit);

            if ($url != 'http://') {
                ?>
				<p><div class="ibw-thumb">
					<div class="ibw-overlay">
						<span>Preview</span>
					</div>

					<img src="<?php echo $url ?>" />
				</div></p>

			<?php
            } ?>
			<p><?php

            // Unit Testing if the link is working or not.
            //echo $link;

            ?></p>
			<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Enter Title of Banner:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>

			<p><label for="<?php echo $this->get_field_id('url'); ?>"><?php _e('Enter URL of Image:', 'image-banner-widget'); ?>

				<input class="widefat" id="<?php echo $this->get_field_id('url'); ?>" name="<?php echo $this->get_field_name('url'); ?>" type="text" value="<?php echo $url; ?>" /></label></p> <p class="upload-button-wrap"><input id="<?php echo $this->get_field_id('upload_button'); ?>" onclick="javascript:formfield = jQuery('#<?php echo $this->get_field_id('url'); ?>').attr('name'); tb_show('','media-upload.php?type=image&amp;TB_iframe=true'); return false;" value="Upload/Select from Media" type="button" class="upload-button" /></p>

			<p><label for="<?php echo $this->get_field_id('link'); ?>"><?php _e('Banner Links To:', 'image-banner-widget'); ?>

				<input class="widefat" id="<?php echo $this->get_field_id('link'); ?>" name="<?php echo $this->get_field_name('link'); ?>" type="text" value="<?php echo $link; ?>" /></label></p>

			<p><label for="<?php echo $this->get_field_id('category'); ?>"><?php _e('Display for:'); ?>
				<select name="<?php echo $this->get_field_name('category'); ?>" id="<?php echo $this->get_field_id('category'); ?>" >
					<option value="aibwp-show-all-categories" <?php if ('aibwp-show-all-categories' == $category) {
                echo "selected=\"selected\"";
            } ?> >All categories</option>
					<option value="aibwp-home-only" <?php if ('aibwp-home-only' == $category) {
                echo "selected=\"selected\"";
            } ?> >Homepage only</option>
					 <?php
                       $options = "";
            $categories = get_categories('');
            foreach ($categories as $cat) {
                $options .= "\n" . '<option value="'.$cat->category_nicename .'" '. ($cat->category_nicename == $category ? ' selected="selected"' : '') .'>';
                $options .= $cat->cat_name;
                $options .= '</option>\n';
                //echo $option;
            }

            $r = array(
                            'depth' => 0, 'child_of' => 0,
                            'selected' => 0, 'echo' => 1,
                            'name' => 'page_id', 'id' => '',
                            'show_option_none' => '', 'show_option_no_change' => '',
                            'option_none_value' => ''
                        );
            $pages = get_pages($r);
            $options .= walk_page_dropdown_tree($pages, 0, $r);

            echo $options; ?>

					 <?php



                     ?>
					</select></label>  </p>
			<p><label for="<?php echo $this->get_field_id('text_description'); ?>"><?php _e('Enter Description:', 'image-banner-widget'); ?> </label><br/>
				<textarea class="textarea"  rows="7" cols="28" id="<?php echo $this->get_field_id('text_description'); ?>" name="<?php echo $this->get_field_name('text_description'); ?>" > <?php echo $text_description; ?></textarea>
			</p>
			<p class="form-allowed-tags">You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:  <code>&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;strike&gt; &lt;strong&gt; </code></p>
			<p><input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id('home'); ?>" name="<?php echo $this->get_field_name('home'); ?>"<?php checked($home); ?> />
			<label for="<?php echo $this->get_field_id('home'); ?>"><?php _e('Display on homepage'); ?> </label></p>

			<p><input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id('autofit'); ?>" name="<?php echo $this->get_field_name('autofit'); ?>"<?php checked($autofit); ?> />
			<label for="<?php echo $this->get_field_id('autofit'); ?>"><?php _e('Fit to sidebar width', 'image-banner-widget'); ?> </label></p>

			<div class="ibw-advanced-toggle"><span onclick="jQuery(this).next('div').slideToggle();" class="expander" ><?php _e('Advanced Configuration', 'image-banner-widget'); ?></span>
			<div class="ibw-advanced-options" style="display:none;">

			<p><label for="<?php echo $this->get_field_id('alt'); ?>"><?php _e('Alt:', 'image-banner-widget'); ?>

				<input class="widefat" id="<?php echo $this->get_field_id('alt'); ?>" name="<?php echo $this->get_field_name('alt'); ?>" type="text" value="<?php echo $alt; ?>" /></label></p>

			<p><label for="<?php echo $this->get_field_id('image_title'); ?>"><?php _e('Image Title:', 'image-banner-widget'); ?>

				<input class="widefat" id="<?php echo $this->get_field_id('image_title'); ?>" name="<?php echo $this->get_field_name('image_title'); ?>" type="text" value="<?php echo $image_title; ?>" /></label></p>

			<p><label for="<?php echo $this->get_field_id('target'); ?>"><?php _e('Target:'); ?>
				<select name="<?php echo $this->get_field_name('target'); ?>" id="<?php echo $this->get_field_id('target'); ?>" >
					<option value="_self" <?php if ('_self' == $target) {
                         echo "selected=\"selected\"";
                     } ?> >Current frame</option>
					<option value="_blank" <?php if ('_blank' == $target) {
                         echo "selected=\"selected\"";
                     } ?> >New page/tab</option>
					<option value="_top" <?php if ('_top' == $target) {
                         echo "selected=\"selected\"";
                     } ?> >Top frame</option>
				</select></label>  </p>

			</div>
			</div>
		<script>
jQuery(document).ready(function()
{	jQuery('#<?php echo $this->get_field_id('upload_button'); ?>').click(function() {
	 formfield = jQuery('#upload_image').attr('name');
	 tb_show('','media-upload.php?type=image&amp;TB_iframe=true');
	 return false;
	});
	// send url back to plugin editor

	window.send_to_editor = function(html) {
		 imgurl = jQuery('img',html).attr('src');
		 jQuery('#<?php echo $this->get_field_id('url'); ?>').val(imgurl);
		 tb_remove();
	}

});
		</script>

				<div class="clear"></div>

			<?php
        }

        public function help_link($key, $text = '(?)')
        {
            echo '<a href="'.$this->help_url.'#' . $key. '" target="_blank" class="help-link">' . $text . '</a>';
        }
    } // End of Class
}
/**
 * AIBWP function to initiate the widgets settings
 * @param null
 * @return string
**/
add_action('widgets_init', create_function('', 'return register_widget("aibwp_adsBannerWidget");'));

function ibw_admin_scripts()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
}

add_action('admin_print_scripts', 'ibw_admin_scripts');
add_action('admin_print_styles', 'ibw_admin_styles');

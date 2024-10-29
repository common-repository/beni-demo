<?php

/**
 * Fired during plugin activation.
 *
 * @package    beni-demo
 */

class Beni_Demo_Activator
{

	public static function activate()
	{

		$new_site_activate = get_option('new_site_activate');
		if ((bool) $new_site_activate === false) {

			require beni_demo_plugin_dir . 'inc/portico/widgets/widget.php';

			$pages = array(esc_html__('Home', 'beni-demo'), esc_html__('Blog', 'beni-demo'), esc_html__('About Us', 'beni-demo'), esc_html__('Contact Us', 'beni-demo'));
			$theme = wp_get_theme(); // getting current theme data
			$theme_name = $theme->name; // getting current theme name

			foreach ($pages as $page) {

				$post_data = array('post_author' => 1, 'post_name' => $page,  'post_status' => 'publish', 'post_title' => $page, 'post_type' => 'page',);
				
				if($page == 'Home'|| $page == 'Blog'):			
					if ($page == 'Home') :
						$page_option = 'page_on_front';
						$template = 'frontpage.php';
					endif;
					if ($page == 'Blog') :
						$page_option = 'page_for_posts';
						$template = 'page.php';
					endif;
					$post_data = wp_insert_post($post_data, false);
					if ($post_data):
						update_post_meta($post_data, '_wp_page_template', $template);
						$page = get_page_by_title($page);
						update_option('show_on_front', 'page');
						update_option($page_option, $page->ID);
					endif;
				endif;
				if ($theme_name == 'Porticopro') :
					if($page == 'About Us' || $page == 'Contact Us'):
						if ($page == 'About Us') :
							$template = 'page-about.php';
						endif;
						if ($page == 'Contact Us') :
							$template = 'page-contact.php';
						endif;
						$post_data = wp_insert_post($post_data, false);
						if ($post_data):
							update_post_meta($post_data, '_wp_page_template', $template);
						endif;
					endif;
				endif;
			}
			update_option('new_site_activate', true);
		}
	}
}

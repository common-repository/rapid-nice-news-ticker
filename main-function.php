<?php
/**
	Plugin Name: Rapid Nice News Ticker
	Plugin URI: http://www.rapiditsolution.ciki.me/rapid/plugins/
	Description: This plugin will enable news ticker in your wordpress theme. You can embed news ticker via shortcode in anywhere you want, even in theme files.
	Author: Reyad Hossain
	Version: 1.0
	Author URI: http://www.rapiditsolution.ciki.me/rapid/
**/

// Wordpress jQuery
function rapid_nice_news_ticker_wp_latest_jquery()
{
	wp_enqueue_script('jquery');
}
add_action('init', 'rapid_nice_news_ticker_wp_latest_jquery');

// Some Setup
define('RAPID_NICE_NEWS_TICKER_PLUGIN_PATH', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );

// jQuery file
wp_enqueue_script('rapid-nice-news-ticker-jQuery', RAPID_NICE_NEWS_TICKER_PLUGIN_PATH.'js/jquery.ticker.js', array('jquery'));

// CSS file
wp_enqueue_style('rapid-nice-news-ticker-style', RAPID_NICE_NEWS_TICKER_PLUGIN_PATH.'css/ticker-style.css');

function rapid_nice_news_ticker_shortcode($atts){
	extract( shortcode_atts( array(
		'id' => 'tickrid',
		'cat' => '',
		'count' => '5',
		'cat_slug' => 'category',
		'speed' => '.10',
		'text' => 'Latest News',
		'posttype' => 'post',
	), $atts, 'projects' ) );
	
    $q = new WP_Query(
        array('posts_per_page' => $count, 'post_type' => $posttype, $cat_slug => $cat)
        );		
		
		
	$list = '
	<script type="text/javascript">
		jQuery(document).ready(function(){
				jQuery("#js-news-'.$id.'").ticker({
					titleText: "'.$text.'",
					speed: '.$speed.'
				});
			});
	</script>
	<ul id="js-news-'.$id.'" class="js-hidden">';
	while($q->have_posts()) : $q->the_post();
		$list .= '
			<li class="news-item"><a href="'.get_permalink().'">'.get_the_title().'</a></li>
		';        
	endwhile;
	$list.= '</ul>';
	wp_reset_query();
	return $list;
}
add_shortcode('news_ticker', 'rapid_nice_news_ticker_shortcode');

?>
<?php
/**
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * @package WordPress
 * @subpackage mmfc
 * @since mmfc 1.0.0
 */

/**
 * This function limits the characters to be display
 * @source https://wordpress.org/support/topic/limit-excerpt-length-by-characters
 * @param string $permalink, the given link
 * @param int $limit, a limitation of the characters
 * @return string limited
 */
if ( ! function_exists( 'excerpt_limited' )) {
  function excerpt_limited( $permalink=false, $limit=false) {
    $excerpt = get_the_content();
    $excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    if ($limit == false) {
      $excerpt = substr($excerpt, 0, 100);
    } else {
      $excerpt = substr($excerpt, 0, $limit);
    }
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
    if ($permalink != false) {
      $excerpt = $excerpt.'... <a href="'.$permalink.'" style="color:#f06292">more</a>';
    }
    return $excerpt;
  }
}

/**
 * This function return the link use for the featured
 * @param void
 * @return string $url, the url
 */
if ( ! function_exists('featured_link')) {
  # code...
  function featured_link() {
    $url = get_bloginfo('wpurl');
    $url = strtolower($url).'/'.strtolower(the_title( $before = '', $after = '', $echo = false ));
    return $url;
  }
}

/**
 * This function return the current year
 * @param integer $year
 * @return $year
 */
if (!function_exists('current_year')) {
  function current_year($year = 'auto') {
    if(intval($year) == 'auto'){
      $year = date('Y');
    }
    if(intval($year) == date('Y')){
      return intval($year);
    }
    if(intval($year) < date('Y')){
      return intval($year) . ' - ' . date('Y');
    }
    if(intval($year) > date('Y')){
      return date('Y');
    }
  }
}

/**
 * This function return the image from the post
 * @source https://wordpress.org/support/topic/retreive-first-image-from-post
 */
if (!function_exists('grab_post_image')) {
  function grab_post_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output    = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];

    return $first_img;
  }
}

/**
 * This function return the image from the page
 * @source https://wordpress.org/support/topic/retreive-first-image-from-post
 */
if (!function_exists('grab_page_image')) {
  function grab_page_image($content) {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output    = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $content, $matches);
    $first_img = $matches [1] [0];

    return $first_img;
  }
}

?>

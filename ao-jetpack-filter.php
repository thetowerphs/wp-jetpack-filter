<?php
/**
 * Plugin Name: Aaron's Jetpack Top Posts filter
 * Description: Filters Jetpack's top posts to be only *posts*
 * Version: 1.0.0
 * Author: Aaron Olkin
 * License: MIT
 * 
 * Jetpack Top Posts Filter
 * Copyright (C) 2014, Aaron Olkin
 * 
 */

add_filter( 'jetpack_widget_get_top_posts', 'filter_jetpack_top_posts');

function filter_jetpack_top_posts( $posts, $post_ids, $count ) {

  $new_posts = array();

  foreach ( (array) $posts as $post ) {
    $post_type = get_post($post["post_id"])->post_type;
    if ( 'post' == $post_type )
      array_push($new_posts,$post);
  }

  return $new_posts;

}
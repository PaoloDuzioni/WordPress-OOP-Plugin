<?php

/**
 * On Plugin Uninstall
 */

/**
 * SECURITY
 * Check if somebody tries to get into this file not via wordpress
 */
if(! defined('WP_UNINSTALL_PLUGIN')){
  die;
}


/**
 * Clear DB stored data
 */

// METHOD 1 with built-in methods

$books = get_posts( array( 
  'post_type' => 'book', // select the CTP
  'numberposts' => -1    // get all posts
) );

foreach ($books as $book) {
  // The post is permanently deleted and everything that is tied
  // to it is deleted also. This includes comments, post meta fields, and
  // relationships between the post and taxonomy terms.
  wp_delete_post( $book->ID, true );
}



// METHOD 2 with custom SQL queries using the global $wpdb class
/*
global $wpdb; //https://codex.wordpress.org/Class_Reference/wpdb

// delete all CPT posts
$wpdb->query("DELET FROM wp_post WHERE post_type = 'book'");
//delete post meta fields that was used by our CPT
$wpdb->query("DELET FROM wp_postmeta WHERE post_id NOT IN ( SELECT id FROM wp_posts)");
//delete taxonomies that was used by our CPT
$wpdb->query("DELET FROM wp_term_relationships WHERE object_id NOT IN ( SELECT id FROM wp_posts)");
*/
<?php

/**
 * Functions that might be called by templates
 * that only exist in later versions of WP.
 */

if ( ! function_exists( 'the_posts_pagination' ) ) {
	function the_posts_pagination( $args = array() ) {
	}
}

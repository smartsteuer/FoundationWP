  <?php
/**
 * crunchy Theme Customizer.
 *
 * @package crunchy
 */


 /**
 * Add Filter for custom Comment ubmit button markup
 */ 
   add_filter( 'comment_form_defaults', 'foundation6_comment_form' );
    function foundation6_comment_form( $args ) {
    $args['class_submit'] = 'button primary'; // since WP 4.1
    return $args;
    }

  /**
 * Add Filter for custom Comment ubmit button markup
 */ 
   add_filter( 'search_form_defaults', 'foundation6_search_form' );
    function foundation6_search_form( $args ) {
    $args['class_search-submit'] = 'button primary'; // since WP 4.1
    return $args;
    }
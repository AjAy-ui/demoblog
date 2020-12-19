<?php

// Add a custom metabox
add_action( 'add_meta_boxes', 'additional_product_tabs_metabox' );
function additional_product_tabs_metabox()
{
    add_meta_box(
        'add_product_metabox_additional_tabs',
        __( 'Short Description', 'woocommerce' ),
        'additional_product_tabs_metabox_content',
        'blog',
        'normal',
        'high'
    );
}

//  Add custom metabox content
function additional_product_tabs_metabox_content( $post )
{
    // Description
    echo '<h4>' . __( 'Description', 'woocommerce' ) . '</h4>';
    $value = get_post_meta( $post->ID, '_cost_performance', true );
    wp_editor( $value, '_cost_performance', array( 'editor_height' => 100 ) );


    // Nonce field (for security)
    echo '<input type="hidden" name="additional_product_tabs_nonce" value="' . wp_create_nonce() . '">';
}


// Save product data
add_action( 'save_post_product', 'save_additional_product_tabs', 10, 1 );
function save_additional_product_tabs( $post_id ) {

    // Security check
    if ( ! isset( $_POST[ 'additional_product_tabs_nonce' ] ) ) {
        return $post_id;
    }

    //Verify that the nonce is valid.
    if ( ! wp_verify_nonce( $_POST[ 'additional_product_tabs_nonce' ] ) ) {
        return $post_id;
    }

    // If this is an autosave, our form has not been submitted, so we don't want to do anything.
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return $post_id;
    }

    if ( ! current_user_can( 'edit_product', $post_id ) ) {
        return $post_id;
    }

    // Sanitize user input and save the post meta fields values.

    if( isset($_POST[ '_cost_performance' ]) )
        update_post_meta( $post_id, '_cost_performance', wp_kses_post($_POST[ '_cost_performance' ]) );


}

add_filter( 'woocommerce_product_tabs', 'woo_custom_product_tabs' );
function woo_custom_product_tabs( $tabs ) {

    // 1) Removing tabs

    unset( $tabs['description'] );              // Remove the description tab
    unset( $tabs['additional_information'] );   // Remove the additional information tab

    // 2 Adding new tabs and set the right order

    //Attribute Cost and Performance tab
    $tabs['cost_performance_tab'] = array(
        'title'     => __( 'Descriptions', 'woocommerce' ),
        'priority'  => 10,
        'callback'  => 'woo_cost_performance_tab_content'
    );


    $tabs['reviews']['priority'] = 80;

    return $tabs;
}


function woo_cost_performance_tab_content()  {
    global $product;

    echo'<div><p>'. $product->get_meta( '_cost_performance' ) . '</p></div>';
}

<?php

/*
Plugin Name: Purina Products
Description: Lalallalal
Version:     1.5
Author:      Dan
*/

class ProductPlugin {

    public function __construct() {

        add_action( 'init', array( $this, 'createCTs' ) );

        register_activation_hook(__FILE__, array($this, 'activatePlugin'));

    }

    public function activatePlugin() {

        $this->createTestProducts();

    }

    public function deactivatePlugin() {

        global $wp_post_types;

        if ( isset( $wp_post_types[ 'product' ] ) ) {
            unset( $wp_post_types[ 'product' ] );
        }

        //TODO would also remove the test product here

    }

    public function createCTs() {

        $labels = array(
            'name'               => _x( 'Products', 'post type general name' ),
            'singular_name'      => _x( 'Product', 'post type singular name' ),
            'add_new'            => _x( 'Add New', 'book' ),
            'add_new_item'       => __( 'Add New Product' ),
            'edit_item'          => __( 'Edit Product' ),
            'new_item'           => __( 'New Product' ),
            'all_items'          => __( 'All Products' ),
            'view_item'          => __( 'View Product' ),
            'search_items'       => __( 'Search Products' ),
            'not_found'          => __( 'No products found' ),
            'not_found_in_trash' => __( 'No products found in the Trash' ),
            'parent_item_colon'  => '',
            'menu_name'          => 'Products'
        );

        $args = array(
            'labels'        => $labels,
            'description'   => 'Holds our products and product specific data',
            'public'        => true,
            'menu_position' => 5,
            'supports'      => array( 'title', 'editor', 'thumbnail', 'thumbnail', 'excerpt', 'comments', 'custom-fields' ),
            'has_archive'   => true,
        );

        register_post_type( 'product', $args );

        flush_rewrite_rules();

    }

    public function createTestProducts() {

        $pId1 = wp_insert_post( [
        'post_content'   => 'Great product!',
        'post_name'      => 'Test product',
        'post_title'     => 'Test product',
        'post_status'    => 'publish',
        'post_type'      => 'product',
        'post_author'    => get_current_user_id()
        ], true );

        $pId2 = wp_insert_post( [
            'post_content'   => 'Great product!',
            'post_name'      => 'Another test product',
            'post_title'     => 'Another test product',
            'post_status'    => 'publish',
            'post_type'      => 'product',
            'post_author'    => get_current_user_id()
        ], true );

        add_post_meta( $pId1, 'price', '3.99' );
        add_post_meta( $pId2, 'price', '4.99' );

        //add images

        $image = 'http://petus.imageg.net/PETNA_36/pimg/pPETNA-5162960_main_t300x300.jpg';
        $image2 = 'http://www.gianteagle.com/ProductImages/PRODUCT_NODE_1367/17800149372.jpg';

        $img1 = media_sideload_image($image, $pId1);
        $img2 = media_sideload_image($image2, $pId2);

        if(!empty($img1) && !is_wp_error($img1)){

            $args = array(
                'post_type' => 'attachment',
                'posts_per_page' => -1,
                'post_status' => 'any',
                'post_parent' => $pId1
            );

            $attachments = get_posts($args);

            if(isset($attachments) && is_array($attachments)){
                foreach($attachments as $attachment){
                    $image = wp_get_attachment_image_src($attachment->ID, 'full');
                    if(strpos($img1, $image[0]) !== false){
                        set_post_thumbnail($pId1, $attachment->ID);
                        break;
                    }
                }
            }
        }

        if(!empty($img2) && !is_wp_error($img2)){

            $args = array(
                'post_type' => 'attachment',
                'posts_per_page' => -1,
                'post_status' => 'any',
                'post_parent' => $pId2
            );

            $attachments = get_posts($args);

            if(isset($attachments) && is_array($attachments)){
                foreach($attachments as $attachment){
                    $image = wp_get_attachment_image_src($attachment->ID, 'full');
                    if(strpos($img2, $image[0]) !== false){
                        set_post_thumbnail($pId2, $attachment->ID);
                        break;
                    }
                }
            }
        }

    }

}

global $productPlug;

$productPlug = new ProductPlugin();

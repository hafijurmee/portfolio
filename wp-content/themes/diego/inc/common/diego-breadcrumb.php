<?php
/**
 * Breadcrumbs for Shofy theme.
 *
 * @package     Shofy
 * @author      Theme_Pure
 * @copyright   Copyright (c) 2023, Theme_Pure
 * @link        https://www.wphix.com
 * @since       diego 1.0.0
 */

function diego_breadcrumb_func() {
    global $post;  
    $breadcrumb_class = '';
    $breadcrumb_show = 1;

    if ( is_front_page() && is_home() ) {
        $title = get_theme_mod('breadcrumb_blog_title', __('From Our Blogs','diego'));
        $breadcrumb_class = 'home_front_page';
    }
    elseif ( is_front_page() ) {
        $title = get_theme_mod('breadcrumb_blog_title', __('From Our Blogs','diego'));
        $breadcrumb_show = 0;
    }
    elseif ( is_home() ) {
      
        if ( is_home()) {
            $title = get_theme_mod('breadcrumb_blog_title', __('From Our Blogs','diego'));
        } else {
            if ( get_option( 'page_for_posts' ) ) {
                $title = get_the_title( get_option( 'page_for_posts') );
            }
        }
        

       
    }
    elseif ( is_single() && 'post' == get_post_type() ) {
      $title = get_the_title() ;
    } 
    elseif ( is_single() && 'product' == get_post_type() ) {
        $title = get_theme_mod( 'breadcrumb_product_details', __( 'Shop', 'diego' ) );
    } 
    elseif ( is_single() && 'courses' == get_post_type() ) {
      $title = esc_html__( 'Course Details', 'diego' );
    } 
    elseif ( is_search() ) {
        $title = esc_html__( 'Search Results for : ', 'diego' ) . get_search_query();
    } 
    elseif ( is_404() ) {
        $title = esc_html__( 'Page not Found', 'diego' );
    } 
    elseif ( is_archive() ) {
        $title = get_the_archive_title();
    } 
    else {
        $title = get_the_title();
    }
 

    $_id = get_the_ID();

    if ( is_single() && 'product' == get_post_type() ) { 
        $_id = $post->ID;
    } 
    elseif ( function_exists("is_shop") AND is_shop()  ) { 
        $_id = wc_get_page_id('shop');
    } 
    elseif ( is_home() && get_option( 'page_for_posts' ) ) {
        $_id = get_option( 'page_for_posts' );
    }

    $is_breadcrumb = function_exists('tpmeta_field')? tpmeta_field('diego_check_bredcrumb', $_id) : 'on';

    $con1 = $is_breadcrumb && ($is_breadcrumb== 'on') && $breadcrumb_show == 1;

    
      if (  $con1 ) {
            $bg_img_from_page = function_exists('tpmeta_image_field')? tpmeta_image_field('diego_breadcrumb_bg') : '';
            $hide_bg_img = function_exists('tpmeta_image_field')? tpmeta_image_field('diego_check_bredcrumb_img') : 'on';
            $bg_color_from_page = function_exists('tpmeta_field')? tpmeta_field('diego_bredcrumb_bg_color') : '';


            // get_theme_mod
            $bg_img = get_theme_mod( 'breadcrumb_image' );
            $breadcrumb_padding = get_theme_mod( 'breadcrumb_padding' );
            $breadcrumb_bg_color = get_theme_mod( 'breadcrumb_bg_color', '#0F183E' );

            if ( $hide_bg_img == 'off' ) {
                $bg_main_img = '';
            }else{  
                $bg_main_img = !empty( $bg_img_from_page ) ? $bg_img_from_page['url'] : $bg_img;
            }
            
            
            $breadcrumb_padding_top = !empty($breadcrumb_padding['padding-top']) ? $breadcrumb_padding['padding-top'] : '';
            $breadcrumb_padding_bottom = !empty($breadcrumb_padding['padding-bottom']) ? $breadcrumb_padding['padding-bottom'] : '';

            $bg_color = !empty(($bg_color_from_page)) ? $bg_color_from_page : $breadcrumb_bg_color;
           
            $breadcrumb_subtitle = get_theme_mod( 'breadcrumb_blog_subtitle', 'Recent Articles' );
        ?>
        


        <!-- blog area start -->
        <div 
            class="blog-standard__area pt-200 <?php print esc_attr( $breadcrumb_class );?>"
            data-padding-top="<?php print esc_attr( $breadcrumb_padding_top );?>" 
            data-padding-bottom="<?php print esc_attr( $breadcrumb_padding_bottom );?>"
            data-bg-color="<?php print esc_attr($bg_color);?>"
            data-background="<?php print esc_attr($bg_main_img);?>">
            <div class="container">
                <div class="row">
                    <div class="blog-list__title-box">
                        <?php if(!empty($breadcrumb_subtitle)) : ?>
                        <?php if(is_front_page() || is_home()): ?>
                        <span class="blog-list__subtitle tp-char-animation"><?php echo diego_kses($breadcrumb_subtitle); ?></span>
                        <?php endif; ?>
                        <?php endif; ?>
                        <h4 class="blog-list__title tp-char-animation tpbreadcrumb-title"><?php echo diego_kses( $title ); ?></h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog area end -->

<?php
    }
}

add_action( 'diego_before_main_content', 'diego_breadcrumb_func' );
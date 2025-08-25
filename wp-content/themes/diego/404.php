<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package diego
 */

get_header();

$diego_error_code = get_theme_mod('diego_error_code', __('404', 'diego'));
$diego_error_title = get_theme_mod('diego_error_title', __('Oops! Page not found', 'diego'));
$diego_error_link_text = get_theme_mod('diego_error_link_text', __('Back To Home', 'diego'));
$diego_error_desc = get_theme_mod('diego_error_desc', __('Whoops, this is embarassing. Looks like the page you were looking for was not found.', 'diego'));

?>

   <section class="tp-error-area pt-110 pb-110">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
               <div class="tp-error-content text-center">


                  <?php if(!empty($diego_error_code)) : ?>
                     <h4 class="tp-error-code"><?php echo esc_html($diego_error_code); ?></h4>
                  <?php endif; ?>


                  <?php if(!empty($diego_error_title)) : ?>
                  <h3 class="tp-error-title"><?php print esc_html($diego_error_title);?></h3>
                  <?php endif; ?>

                  <?php if(!empty($diego_error_desc)) : ?>
                  <p><?php print esc_html($diego_error_desc);?></p>
                  <?php endif; ?>

                  <?php if(!empty($diego_error_link_text)) : ?>
                  <a href="<?php print esc_url(home_url('/'));?>" class="tp-error-btn tp-btn-white-lg">
                     <span><?php print esc_html($diego_error_link_text);?></span>
                  </a>
                  <?php endif; ?>
               </div>
            </div>
         </div>
      </div>
   </section>

<?php
get_footer();

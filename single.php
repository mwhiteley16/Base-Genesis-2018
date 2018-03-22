<?php get_header(); ?>

<?php // determine the page layout selection
$page_layout = genesis_site_layout();
?>

<section class="interior-section">
     <div class="wrap">

          <?php if( $page_layout == 'sidebar-content' ) : ?>
               <sidebar class="site-sidebar one-third first">
                    <?php dynamic_sidebar( 'sidebar' ); ?>
               </sidebar>
          <?php endif; ?>

          <div class="page-content<?php if( $page_layout == 'sidebar-content' ) : ?> two-thirds<?php elseif( $page_layout == 'content-sidebar' ) : ?> two-thirds first<?php else : ?> full-width<?php endif; ?>">
               <?php do_action('genesis_loop'); ?>
          </div>

          <?php if( $page_layout == 'content-sidebar' ) : ?>
               <sidebar class="site-sidebar one-third">
                    <?php dynamic_sidebar( 'sidebar' ); ?>
               </sidebar>
          <?php endif; ?>

     </div>
</section>

<?php get_footer(); ?>

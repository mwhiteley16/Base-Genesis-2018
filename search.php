<?php get_header(); ?>

<?php // determine the page layout selection
$page_layout = genesis_site_layout();
?>

<section class="interior-section">
     <div class="wrap">

          <?php if( $page_layout == 'sidebar-content' ) : ?>
               <sidebar class="site-sidebar one-fourth first">
                    <?php dynamic_sidebar( 'sidebar' ); ?>
               </sidebar>
          <?php endif; ?>

          <div class="page-content<?php if( $page_layout == 'sidebar-content' ) : ?> three-fourths<?php elseif( $page_layout == 'content-sidebar' ) : ?> three-fourths first<?php else : ?> full-width<?php endif; ?>">
               <h1 class="entry-title" itemprop="headline"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
               <?php do_action('genesis_loop'); ?>
          </div>

          <?php if( $page_layout == 'content-sidebar' ) : ?>
               <sidebar class="site-sidebar one-fourth">
                    <?php dynamic_sidebar( 'sidebar' ); ?>
               </sidebar>
          <?php endif; ?>

     </div>
</section>

<?php get_footer(); ?>

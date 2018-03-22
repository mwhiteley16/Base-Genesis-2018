<?php get_header(); ?>

<?php // determine the page layout selection
$page_layout = genesis_site_layout();
?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>
     <section class="interior-section">
          <div class="wrap">
               <?php if( $page_layout == 'sidebar-content' ) : ?>
                    <sidebar class="site-sidebar one-third first">
                         <?php dynamic_sidebar( 'sidebar' ); ?>
                    </sidebar>
               <?php endif; ?>

               <div class="page-content<?php if( $page_layout == 'sidebar-content' ) : ?> two-thirds<?php elseif( $page_layout == 'content-sidebar' ) : ?> two-thirds first<?php else : ?> full-width<?php endif; ?>">
                    <h1 class="entry-title" itemprop="headline"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
               </div>

               <?php if( $page_layout == 'content-sidebar' ) : ?>
                    <sidebar class="site-sidebar one-third">
                         <?php dynamic_sidebar( 'sidebar' ); ?>
                    </sidebar>
               <?php endif; ?>
          </div>
     </section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>

<?php
/**
 * Template Name: No Sidebar
 *
 * @package ThemeTim
 * @subpackage ThemeTim
 * @since ThemeTim 1.0
 */
get_header(); ?>

    <main class="no-sidebar-page padding-gap-2">
        <?php if(is_front_page()) :
            require get_template_directory() . '/template-parts/main-slider.php';
        endif; ?>
        <?php if(!is_front_page()): ?>
            <!--------------- Woo Breadcrumb ---------------->
            <section class="breadcrumb-wrap text-capitalize  text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <header class="entry-header text-center">
                                <?php the_title( '<h3 class="entry-title page-header">', '</h3>' ); ?>
                            </header><!-- .entry-header -->
                            <?php
                            if ( class_exists( 'WooCommerce' ) && !is_front_page()) {
                                woocommerce_breadcrumb();
                            } ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 padding-gap-1">
                        <?php
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content', 'page' );

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- #main -->

<?php

get_footer();
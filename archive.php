<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ThemeTim_WordPress_Framework
 */

get_header(); ?>
	<main id="main" class="site-main woocommerce" role="main">
		<!--------------- Woo Breadcrumb ---------------->
		<section class="breadcrumb-wrap text-capitalize text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php if(!is_front_page()): ?>
							<header class="page-header margin-null">
								<?php
								the_archive_title( '<h2 class="page-title">', '</h2>' );
								the_archive_description( '<div class="taxonomy-description">', '</div>' );
								?>
							</header><!-- .page-header -->
						<?php endif;

						if ( class_exists( 'WooCommerce' ) && !is_front_page()) {
							woocommerce_breadcrumb();
						} ?>
					</div>
				</div>
			</div>
		</section>
		<section class="category-page">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-8 col-xs-12 padding-gap-1 padding-gap-4">
						<?php
						if ( have_posts() ) : ?>

							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/*
                                 * Include the Post-Format-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                 */
								get_template_part( 'template-parts/content', get_post_format() );

							endwhile;

							if ( class_exists( 'WooCommerce' ) ) :
								woocommerce_pagination();
							else:
								the_posts_navigation();
							endif;

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif; ?>
					</div>
					<?php get_sidebar(); ?>
				</div>
			</div>
		</section>
	</main><!-- #main -->
<?php

get_footer();

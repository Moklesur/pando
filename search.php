<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ThemeTim_WordPress_Framework
 */

get_header(); ?>

	<main id="main" class="search-page woocommerce" role="main">
		<!--------------- Woo Breadcrumb ---------------->
		<section class="breadcrumb-wrap text-capitalize text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<header class="entry-header text-center">
							<h3 class="entry-title page-header">Search</h3>
						</header><!-- .entry-header -->
						<?php
						if ( class_exists( 'WooCommerce' ) && !is_front_page()) {
							woocommerce_breadcrumb();
						} ?>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-8 col-xs-12 padding-gap-1 padding-gap-4">
						<?php
						if ( have_posts() ) : ?>
							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'search' );

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

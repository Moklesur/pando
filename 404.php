<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ThemeTim_WordPress_Framework
 */

get_header(); ?>
	<main id="main" class="site-main" role="main">
		<!--------------- Woo Breadcrumb ---------------->
		<section class="breadcrumb-wrap text-capitalize  text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php if(!is_front_page()): ?>
							<header class="entry-header text-center">
								<h3 class="entry-title page-header">Oops! That page can&rsquo;t be found.</h3>
							</header><!-- .entry-header -->
						<?php endif;

						if ( class_exists( 'WooCommerce' ) && !is_front_page()) {
							woocommerce_breadcrumb();
						} ?>
					</div>
				</div>
			</div>
		</section>
		<section class="error-404 not-found padding-gap-1 padding-gap-2">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<header>
							<h1 class=""><?php esc_html_e( '404', 'themetim' ); ?></h1>
						</header><!-- .page-header -->
						<div class="page-content margin-top-20">
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'themetim' ); ?></p>
						</div><!-- .page-content -->
					</div>
				</div>
			</div>
		</section><!-- .error-404 -->

	</main><!-- #main -->
<?php
get_footer();

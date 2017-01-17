<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ThemeTim_WordPress_Framework
 */

get_header(); ?>

	<main class="article-page">
		<!--------------- Woo Breadcrumb ---------------->
		<section class="breadcrumb-wrap text-capitalize  text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<header class="entry-header margin-bottom-20">
							<?php
							if ( is_single() ) {
								the_title( '<h3 class="entry-title page-header text-capitalize margin-null">', '</h3>' );
							} else {
								echo '<h3 class="entry-title page-header margin-null text-capitalize">Blog</h3>';
							}
							?>
						</header><!-- .entry-header -->
						<?php if ( class_exists( 'WooCommerce' ) && !is_front_page()) {
							woocommerce_breadcrumb();
						} ?>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="row">
					<?php if (get_theme_mod('blog_sidebar_enable','1') ) : ?>
					<div class="col-md-9 col-sm-8 col-xs-12 padding-gap-1 padding-gap-4">
						<?php else: ?>
						<div class="col-md-12 col-sm-12 col-xs-12 padding-gap-1 padding-gap-4">
							<?php endif; ?>
							<?php
							while ( have_posts() ) : the_post();
								get_template_part( 'template-parts/content', get_post_format() );
								previous_post_link('<span>%link</span>', '<i class="fa fa-long-arrow-left"></i> Previous', TRUE);
								next_post_link('<span class="pull-right">%link</span>', 'Next <i class="fa fa-long-arrow-right"></i> ', TRUE);

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							endwhile; // End of the loop.
							?>
						</div>
						<?php
						if (get_theme_mod('blog_sidebar_enable','1') ) :
							get_sidebar();
						endif;
						?>
					</div>
				</div>
		</section>
	</main><!-- #main -->
<?php
get_footer();

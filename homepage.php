<?php
/**
* Template Name: Home Page
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12">
		<div id="main" class="site-main" role="main">


			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php
			    $enable_vc = get_post_meta(get_the_ID(), '_wpb_vc_js_status', true);
			    if(!$enable_vc ) {
			    ?>
			    <header class="entry-header">
				</header><!-- .entry-header -->
			    <?php } ?>

				<div class="entry-content">
					<?php
						the_content();

						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-starter' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->

				<?php if ( get_edit_post_link() && !$enable_vc ) : ?>
					<footer class="entry-footer">
						<?php
							edit_post_link(
								sprintf(
									/* translators: %s: Name of current post */
									esc_html__( 'Edit %s', 'wp-bootstrap-starter' ),
									the_title( '<span class="screen-reader-text">"', '"</span>', false )
								),
								'<span class="edit-link">',
								'</span>'
							);
						?>
					</footer><!-- .entry-footer -->
				<?php endif; ?>
			</article><!-- #post-## -->
		</div><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();

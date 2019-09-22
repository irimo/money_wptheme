<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Therapy2014
 * @since Therapy2014 1.0
 */

get_header(); ?>

		<div id="container" class="di-column-left">
                        <div class="di-pankuzu">
<a href="<?php echo home_url( '/' ); ?>">TOP</a> > 検索 > <?php printf( __( '%s', 'therapy2014' ), '<span>' . get_search_query() . '</span>' ); ?><!-- pankuzu tukuritaiyo~ > 最新の5件-->
                        </div>
			<div id="content" role="main" class="di-blogs">

<?php if ( have_posts() ) : ?>
				<?php
				/* Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called loop-search.php and that will be used instead.
				 */
				 get_template_part( 'loop', 'search' );
				?>
<?php else : ?>
				<div id="post-0" class="post no-results not-found">
					<h2 class="entry-title di-title"><?php _e( 'Nothing Found', 'therapy2014' ); ?></h2>
					<div class="entry-content di-story">
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'therapy2014' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-0 -->
<?php endif; ?>
			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

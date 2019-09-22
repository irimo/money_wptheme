<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Therapy2014
 * @since Therapy2014 1.0
 */

get_header(); ?>

		<div id="container" class="di-column-left">
                        <div class="di-pankuzu">
<a href="<?php echo home_url( '/' ); ?>">TOP</a> > 
<?php if ( is_day() ) : ?>
				<?php printf( __( '日別アーカイブ > %s', 'therapy2014' ), get_the_date() ); ?>
<?php elseif ( is_month() ) : ?>
				<?php printf( __( '月別アーカイブ > %s', 'therapy2014' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'therapy2014' ) ) ); ?>
<?php elseif ( is_year() ) : ?>
				<?php printf( __( '年別アーカイブ > %s', 'therapy2014' ), get_the_date( _x( 'Y', 'yearly archives date format', 'therapy2014' ) ) ); ?>
<?php else : ?>
				<?php _e( 'Blog Archives', 'therapy2014' ); ?>
<?php endif; ?>
                        </div>
			<div id="content" role="main" class="di-blogs">

<?php
	/* Queue the first post, that way we know
	 * what date we're dealing with (if that is the case).
	 *
	 * We reset this later so we can run the loop
	 * properly with a call to rewind_posts().
	 */
	if ( have_posts() )
		the_post();
?>

			<h1 class="page-title">
			</h1>

<?php
	/* Since we called the_post() above, we need to
	 * rewind the loop back to the beginning that way
	 * we can run the loop properly, in full.
	 */
	rewind_posts();

	/* Run the loop for the archives page to output the posts.
	 * If you want to overload this in a child theme then include a file
	 * called loop-archive.php and that will be used instead.
	 */
	 get_template_part( 'loop', 'archive' );
?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
